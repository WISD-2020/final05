<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'sex' => ['required', 'string', 'max:2'],
            'birthday' => ['required', 'date'],
            'status' => ['required', 'string', 'max:1'],
            'account' => ['required', 'string', 'max:10'],
            'telephone' => ['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'sex' => $input['sex'],
            'birthday' => $input['birthday'],
            'status' => $input['status'],
            'account' => $input['account'],
            'telephone' => $input['telephone'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
