<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryBlogsController;
use App\Http\Controllers\CategoryDivisiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\StructureDivisiController;
use Illuminate\Support\Facades\Route;
use Nette\Schema\Elements\Structure;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/dashboard', function () {
    //     return view('dashboard');
// });
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::prefix('administrator')->group(function (){
        // Dashboard
        Route::get('/',[DashboardController::class,'index'])->name('dashboard');
        // Banner
        Route::resource('banner', BannerController::class);
        // Blog
        Route::resource('blog', BlogController::class);
        // Category Blogs
        Route::resource('category-blogs', CategoryBlogsController::class);
        // Structure divisi
        Route::resource('structure-division', StructureDivisiController::class);
        // category divisi
        Route::resource('category-division', CategoryDivisiController::class);
    });

});
// Route::get('/dashboard', function () {
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
