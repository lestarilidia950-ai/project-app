<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PanduanpostController;
use App\Models\panduanpost;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PanduanpostController::class, 'index'])->name('index');

Route::get('/tentang', function () {return view('tentang'); })->name('tentang');
Route::get('/kontak', function () {return view('kontak'); })->name('kontak');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::get('/run-storage-link', function () {
    Artisan::call('storage:link');
    return response()->json([
        'message' => 'Storage link created succcesfully.',
        'output' => Artisan::output(),
    ]);
})->name('storage.link');
