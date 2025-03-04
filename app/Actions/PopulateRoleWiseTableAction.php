<?php

namespace App\Actions;

use App\Models\User;
use App\Models\Tutor;
use App\Models\Student;

class PopulateRoleWiseTableAction
{
    public function execute(User $user): void
    {
        if ($user->hasRole('tutor')) {
            Tutor::create([
                'user_id' => $user->id,
            ]);
        } elseif ($user->hasRole('student')) {
            Student::create([
                'user_id' => $user->id,
            ]);
        }
    }
}
