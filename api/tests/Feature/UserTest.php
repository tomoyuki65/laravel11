<?php

use Illuminate\Support\Str;
use App\Models\User;

test('ユーザーが新規作成され、ステータス201で正常終了すること', function () {
    // API実行
    $path = "/api/v1/user";
    $uid = Str::random(10);
    $last_name = "test";
    $first_name = "taro";
    $email = "test-taro@example.com";
    $body = [
        'uid' => $uid,
        'last_name' => $last_name,
        'first_name' => $first_name,
        'email' => $email
    ];
    $response = $this->post($path, $body);

    // 検証
    expect($response->status())->toBe(201);
    $this->assertDatabaseHas(User::class, [
        'uid' => $uid,
        'last_name' => $last_name,
        'first_name' => $first_name,
        'email' => $email,
    ]);
});