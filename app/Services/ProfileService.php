<?php

namespace App\Services;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Http\Response;

class ProfileService
{
    public static function create(array $data): Profile {
        return Profile::create($data);
    }

    public static function update(int $id) {
        $data = [
            'birthed_at' => '1984',
            'avatar_path' => '%userData%/API_JoJo_avatar.png',
        ];
        $dataOfBirth = Profile::find($id);
        if ($dataOfBirth) {
            return $dataOfBirth->update($data);
        }
        else echo 'id is not found';
    }

    public static function delete_by_id(int $id)   {

        Profile::findOrFail($id)->delete();
        return response(['message' => 'post deleted'], Response::HTTP_OK);
    }


}
