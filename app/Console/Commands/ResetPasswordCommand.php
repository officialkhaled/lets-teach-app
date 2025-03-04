<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class ResetPasswordCommand extends Command
{
    protected $signature = 'reset:password {--for=}';

    protected $description = 'Reset Password to Default (12345 in Production, 123456 in Development)';

    public function handle(): void
    {
        $email = $this->option('for');

        $this->newLine();

        if ($email) {
            $this->resetPasswordForUser($email);
        } else {
            $this->resetPasswordForAllUsers();
        }
    }

    private function resetPasswordForUser(string $email): void
    {
        $this->info("Email: {$email}");

        $user = User::query()->firstWhere('email', $email);
        if (!$user) {
            $this->error("No user found!");
            return;
        }

        $this->updatePassword($user);
    }

    private function resetPasswordForAllUsers(): void
    {
        if (app()->isProduction()) {
            $this->warn('WARNING: The application is in Production.');
            if (!$this->confirm('Do you wish to continue resetting passwords for all users?')) {
                $this->info('Operation cancelled.');
                return;
            }
        }

        $users = User::all();

        if ($users->isEmpty()) {
            $this->error('No users found!');
            return;
        }

        foreach ($users as $user) {
            $this->updatePassword($user);
        }

        $this->info("Password reset successful for all users.");
    }

    private function updatePassword(User $user): void
    {
        $newPassword = app()->isProduction() ? '12345' : '123456';
        $user->password = Hash::make($newPassword);
        $user->save();

        $this->info("Password reset successful for {$user->name} ({$user->email}).");
    }
}
