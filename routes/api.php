<?php

use App\Http\Controllers\Api\PostApiController;
use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('posts')->middleware('auth:sanctum')->as('posts.')->group(function () {
    Route::apiResource('', PostApiController::class)->only([
        'index',
    ]);
    Route::post('', [PostApiController::class, 'store'])->name('store');
    Route::get('{id}', [PostApiController::class, 'show'])->name('show');

    Route::put('', [PostController::class, 'update'])->name('create');
    Route::delete('', [PostController::class, 'destroy'])->name('delete');
});


Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return $user->createToken($request->device_name)->plainTextToken;
});