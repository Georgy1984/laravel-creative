<?php

namespace App\Services;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Response;
use mysql_xdevapi\Collection;

class UserService
{
    public static function createUser(array $data): User
    {

        return User::create($data);

    }

    public static function updateUser(int $id)
    {
        $data = [
            'name' => 'Arsenka',
            'email' => 'arsenka@gmail.com',
            'password' => 'arsena123',
        ];
        $user = User::find($id);
        if ($user) {
            return $user->update($data);
        }
        else echo "id is not found";

    }
    public static function deleteUser(int $id) {
        User::findOrFail($id)->delete();
        return response(['message' => 'post deleted'], Response::HTTP_OK);
    }





}
