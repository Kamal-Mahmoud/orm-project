<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    $user = User::updateOrCreate([
        'name' => 'John Doe',
        'email' => 'john@example.com',
    ], [
        'password' => Hash::make('password'),
    ]);

    $users = [
        [
            "name" => "John",
            "email" => "john@example.com",
            "password" => Hash::make('password'),
        ],
        [
            "name" => "Doe",
            "email" => "doe@example.com",
            "password" => Hash::make('password'),
        ],
        [
            "name" => "alex",
            "email" => "alex@example.com",
            "password" => Hash::make('password'),
        ]
    ];
    User::upsert($users, ['email'], ['name', 'password']);
});
