<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ['name' => 'Naruto Uzumaki', 'skill' => 75, "id" => 1],
        ['name' => 'Sasuke Uchiha', 'skill' => 50, "id" => 2],
        ['name' => 'Sakura Haruno', 'skill' => 70, "id" => 3],
        ['name' => 'Kakashi Hatake', 'skill' => 60, "id" => 4],
        ['name' => 'Itachi Uchiha', 'skill' => 95, "id" => 5],
    ];

    return view('ninjas.index', ["greeting" => "Hello", "ninjas" => $ninjas]);
});

Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show', ["id" => $id]);
});

