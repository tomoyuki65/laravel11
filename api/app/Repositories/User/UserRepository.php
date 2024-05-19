<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function createUser(
        string $uid,
        string $last_name,
        string $first_name,
        string $email
    )
    {
        $user = new User();
        $user->uid = $uid;
        $user->last_name = $last_name;
        $user->first_name = $first_name;
        $user->email = $email;

        return $user;
    }

    public function saveUser(User $user)
    {
        $user->save();

        return $user;
    }

    public function getAllUserWithTrashed()
    {
        // 論理削除データも取得
        return User::withTrashed()->get();
    }

    public function getUserFromUid(string $uid)
    {
        return User::where('uid', $uid)->first();
    }

    public function deleteUser(User $user)
    {
        return $user->delete();
    }
}