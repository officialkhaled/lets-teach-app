<?php

namespace App\Actions;

use App\Models\User;
use App\Models\Tutor;
use App\Models\Student;

class PopulateRoleWiseTableAction
{
    /**
     * Populate role-specific data in corresponding tables.
     *
     * @param User $user
     * @return void
     */
    public function execute(User $user): void
    {
        if ($user->role == 1) {
            Tutor::create([
                'user_id' => $user->id,
            ]);
        } elseif ($user->role == 2) {
            Student::create([
                'user_id' => $user->id,
            ]);
        }
    }
}
