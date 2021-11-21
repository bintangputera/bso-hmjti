<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryBlogsController;
use App\Http\Controllers\CategoryDivisiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;
use App\Http\Controllers\Frontend\HomeController;
<<<<<<< Updated upstream
use App\Http\Controllers\PeriodeController;
=======
use App\Http\Controllers\Frontend\StructureController;
>>>>>>> Stashed changes
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
Route::get('/',[HomeController::class, 'index'])->name('home.front');
Route::get('/blog',[FrontendBlogController::class,'index'])->name('blog.front');
Route::get('/blog/detail/{slug}',[FrontendBlogController::class,'detailBlog'])->name('blog.front.detail');
Route::get('/struktur',[StructureController::class,'index'])->name('structure.front');
Route::get('/profil-bso',[AboutController::class,'index'])->name('profil.front');

Route::middleware(['auth'])->group(function () {
    Route::prefix('administrator')->group(function (){
        // Dashboard
        Route::get('/',[DashboardController::class,'index'])->name('dashboard');
        // Banner
        Route::resource('content', ContentController::class);
        // Blog
        Route::resource('blog', BlogController::class);
        // Category Blogs
        Route::resource('category-blogs', CategoryBlogsController::class);
        // Structure divisi
        Route::resource('structure-division', StructureDivisiController::class);
        // category divisi
        Route::resource('category-division', CategoryDivisiController::class);
        // Periode
        Route::resource('periode', PeriodeController::class);
    });

});
// Route::get('/dashboard', function () {
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
