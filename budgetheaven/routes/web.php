<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NetworksController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PostController;
use App\Models\Blog;

/*
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







Route::get('/', function () {
    return view('welcome'); // 'welcome' refers to the view file for the home page
});

Route::get('/about', function () {
    // Your logic for the about page
    return view('about');
})->name('about');
Route::get('/network', function () {
    // Your logic for the about page
    return view('network');
})->name('network');
Route::get('/tables', function () {
    // Your logic for the about page
    return view('tables');
})->name('tables');
Route::get('/contact', function () {
    // Your logic for the about page
    return view('contact');
})->name('contact');

Route::get('/terms_and_condition', function () {
    // Your logic for terms and conditions page
    return view('terms_and_condition');
})->name('terms_and_condition');


Route::get('/privacy', function () {
    // Your logic for terms and conditions page
    return view('privacy');
})->name('privacy');

// Route for the contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/top-stores', [HomeController::class, 'topStores'])->name('top_stores');
Route::post('/coupons', [CouponsController::class, ''])->name('coupons.updateRanking');


// Route for the blog homepage
Route::get('/blog', [BlogController::class, 'blog_home'])->name('blog');
Route::get('/blog/{title}', [BlogController::class, 'blog_show'])->name('blog-details');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/related_category/{meta_tag}', [HomeController::class, 'viewcategory'])->name('related_category');




// Route for the search homepage
// Route for search
Route::get('/search', [SearchController::class, 'searchResults'])->name('search');




// web.php




// Define your routes
Route::prefix('admin',)->group(function () {
    Route::get('/Blog', [BlogController::class, 'blogs'])->name('admin.blog');
    Route::get('/Blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/Blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/Blog/{id}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::post('/admin/Blog/update/{id}', [BlogController::class, 'update'])->name('admin.Blog.update');
    Route::delete('/admin/Blog/{id}', [BlogController::class, 'destroy'])->name('admin.blog.delete');
       Route::post('/blog/deleteSelected', [BlogController::class, 'deleteSelected'])->name('admin.blog.deleteSelected');
    Route::delete('/blog/bulk-delete', [BlogController::class, 'deleteSelected'])->name('admin.blog.bulkDelete');
   


});



Route::get('/run-migrations', function () {
    $exitCode = Artisan::call('migrate:fresh');

    // Capture the output of the command
    $output = Artisan::output();

    return "Exit Code: $exitCode <br> Output: <pre>$output</pre>";
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/stores', 'stores')->name('stores');
    Route::get('/store/{name}', 'StoreDetails')->name('store_details');
    Route::get('/category/{title}', 'RelatedCategoryStores')->name('related_stores');
    Route::get('/categories', 'categories')->name('categories');
        Route::get('/related-category/{title}', 'relatedcategories')->name('related_category');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Stores Routes Begin
Route::controller(StoresController::class)->prefix('admin')->group(function () {
    Route::get('/store', 'store')->name('admin.store');
    Route::get('/store/create', 'create_store')->name('admin.store.create');
    Route::post('/store/store', 'store_store')->name('admin.store.store');
    Route::get('/store/edit/{id}', 'edit_store')->name('admin.store.edit');
    Route::post('/store/update/{id}', 'update_store')->name('admin.store.update');
    Route::get('/store/delete/{id}', 'delete_store')->name('admin.store.delete');
});
Route::post('/store/deleteSelected', [StoresController::class, 'deleteSelected'])->name('admin.store.deleteSelected');

// Categories Routes Begin
Route::controller(CategoriesController::class)->prefix('admin')->group(function () {
    Route::get('/category', 'category')->name('admin.category');
    Route::get('/category/create', 'create_category')->name('admin.category.create');
    Route::post('/category/store', 'store_category')->name('admin.category.store');
    Route::get('/category/edit/{id}', 'edit_category')->name('admin.category.edit');
    Route::post('/category/update/{id}', 'update_category')->name('admin.category.update');
    Route::get('/category/delete/{id}', 'delete_category')->name('admin.category.delete');
 Route::post('/category/deleteSelected', 'deleteSelected')->name('admin.category.deleteSelected');
});


// Networks Routes Begin
Route::controller(NetworksController::class)->prefix('admin')->group(function () {
    Route::get('/network', 'network')->name('admin.network');
    Route::get('/network/create', 'create_network')->name('admin.network.create');
    Route::post('/network/store', 'store_network')->name('admin.network.store');
    Route::get('/network/edit/{id}', 'edit_network')->name('admin.network.edit');
    Route::post('/network/update/{id}', 'update_network')->name('admin.network.update');
    Route::get('/network/delete/{id}', 'delete_network')->name('admin.network.delete');
});

// Coupons Routes Begin
Route::get('coupons', [CouponsController::class, 'index'])->name('coupons.index');
Route::put('/updateCoupon/{id}', [CouponsController::class, 'update'])->name('updateCoupon');

Route::controller(CouponsController::class)->prefix('admin')->group(function () {
    Route::get('/coupon', 'coupon')->name('admin.coupon');
    Route::get('/coupon/create', 'create_coupon')->name('admin.coupon.create');
    Route::post('/coupon/store', 'store_coupon')->name('admin.coupon.store');
    Route::get('/coupon/edit/{id}', 'edit_coupon')->name('admin.coupon.edit');
    Route::post('/coupon/update/{id}', 'update_coupon')->name('admin.coupon.update');
    Route::get('/coupon/delete/{id}', 'delete_coupon')->name('admin.coupon.delete');
    Route::post('/custom-sortable', 'update')->name('custom-sortable');
Route::post('/coupon/deleteSelected', 'deleteSelected')->name('admin.coupon.deleteSelected');


});
require __DIR__.'/auth.php';