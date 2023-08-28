<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/jobs', function () {
    return  [
                [
                    'id' => 1,
                    'title' => 'Junior Front End Developer',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui nemo porro in tenetur autem tempore natus! Autem consequuntur facere deleniti nisi! Blanditiis, laboriosam!',
                    'salary' => 78000
                ],
                [
                    'id' => 2,
                    'title' => 'Senior Full Stack Developer',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem consequuntur facere deleniti nisi! Blanditiis, laboriosam!',
                    'salary' => 120000
                ],
                [
                    'id' => 3,
                    'title' => 'Laravel Developer',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui nemo porro in tenetur autem tempore natus! Qui nemo porro in tenetur autem tempore natus! Autem consequuntur facere deleniti nisi! Blanditiis, laboriosam!',
                    'salary' => 98000
                ]
            ];
});
