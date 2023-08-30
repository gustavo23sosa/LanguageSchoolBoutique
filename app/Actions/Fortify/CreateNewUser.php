<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'apaterno' => ['required', 'string', 'max:255'],
            'amaterno' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'telefono' => ['required', 'string', 'max:255'],
            'fk_estado' => ['required', 'string', 'max:120'],
            'password' => $this->passwordRules(),
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'aPaterno' => $input['apaterno'],
            'aMaterno' => $input['amaterno'],
            'email' => $input['email'],
            'telefono' => $input['telefono'],
            'fk_estado' => strtoupper($input['fk_estado']),
            'password' => Hash::make($input['password']),
        ]);
        DB::table('UsersRoles')->insert([
            'fk_users'=>$user->id,
            'fk_roles'=>2,
        ]);
        return $user;
    }
}
