<?php

use Illuminate\Support\Facades\Route;
use App\Products\Products;
use App\About_us\About_us;
use App\Category\Category;
use App\Partners\Partners;
use App\Messages\Messages;
use App\Advertisement\Advertisement;
use App\News\News;

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

Route::get('/', function () {
    $products = Products::all();
    $categories = Category::all()->take(3);
    $partners = Partners::all();
    $advertisements = Advertisement::all();
    return view('main.mainpage',[
        'products'=>$products,'categories'=>$categories,'partners'=>$partners,'advertisements'=>$advertisements
    ]);
});


View::composer(['main.index'], function ($view) {
    $partners = Partners::all();
    $view->with('partners', $partners);
});
View::composer(['main.index2'], function ($view) {
    $partners = Partners::all();
    $view->with('partners', $partners);
});

Route::get('/about', function () {
    $advertisements = Advertisement::all();
    $aboutus = About_us::all();
    return view('main.about',[
        'advertisements'=>$advertisements , 'aboutus'=>$aboutus
    ]);
});
Route::get('/advertisement/{id}', function ($id) {
    $advertisements = Advertisement::where('id',$id)->get();
    return view('main.advertisement',[
        'advertisements'=>$advertisements
    ]);
});
Route::get('/news/{id}', function ($id) {
    $news = News::where('id',$id)->get();
    return view('main.news',[
        'news'=>$news
    ]);
});
Route::get('/contact', function () {
    $news = News::all();
    return view('main.contact',[
        'news'=>$news
    ]);
});
Route::post('/get_products', function () {
    $products = Products::all();
    return response()->json([
        'status' => true,
        'message' => 'success',
        'products' => $products
    ]);
});
Route::get('/mainproduct/{id}', function ($id) {
    $products = Products::where('id', '=' ,$id)->get();
    $partners = Partners::all();
    return view('main.mainproduct', ['products'=>$products, 'partners'=>$partners]);
});
View::composer(['Admin.index'], function ($view) {
    $advertisements = Advertisement::all();
    $news = News::all();
    $view->with('advertisements', $advertisements);
    $view->with('news', $news);
});
Route::get('/products', function () {
    $products = Products::all();
    $categories = Category::all();
    return view('main.Products', ['products'=>$products, 'categories'=>$categories]);
});
Route::get('/messages', function () {
    $messages = Messages::all();
    return view('Admin.messages', ['messages'=>$messages]);
})->middleware('auth');
Route::get('/virtualtur', function () {
    return view('main.virtualtur');
});
Route::get('/home', function () {
    $products = Products::orderBy('id' , 'desc')->get();
    return view('Admin.products', [
        'products'=>$products
    ]);
})->middleware('auth');
Route::get('/edit_adv/{id}', function ($id) {
    $advertisements = Advertisement::where('id',$id)->get();
    return view('Admin.edit_adv', [
        'advertisements'=>$advertisements
    ]);
})->middleware('auth');
Route::get('/edit_news/{id}', function ($id) {
    $news = News::where('id',$id)->get();
    return view('Admin.edit_news', [
        'news'=>$news
    ]);
})->middleware('auth');

Route::get('/add_product', function () {
    $categories = Category::all();
    return view('Admin.add_product', ['categories' => $categories]);
})->middleware('auth');

Route::get('/add_adv', function () {
    return view('Admin.add_adv');

});
Route::get('/add_news', function () {
    return view('Admin.add_news');
});
Route::get('/about_us', function () {
    $about = About_us::find(1);
    return view('Admin.about_us',[
        'about'=>$about
    ]);
})->middleware('auth');



Route::get('/category', function () {
    $categories = Category::all();
    return view('Admin.category', ['categories' => $categories]);
})->middleware('auth');
Route::post('/add_product',[\App\Http\Controllers\Admin\AdminController::class, 'add_product'])->name( 'add_product')->middleware('auth');
Route::post('/add_p_content',[\App\Http\Controllers\Admin\AdminController::class, 'add_p_content'])->name( 'add_p_content')->middleware('auth');
Route::post('/add_message',[\App\Http\Controllers\Main\MainController::class, 'add_message'])->name( 'add_message');

Route::post('/add_adv',[\App\Http\Controllers\Admin\AdminController::class, 'add_adv'])->name( 'add_adv')->middleware('auth');

Route::post('/add_news',[\App\Http\Controllers\Admin\AdminController::class, 'add_news'])->name( 'add_news')->middleware('auth');


Route::post('/about_us',[\App\Http\Controllers\Admin\AdminController::class, 'about_us'])->name( 'about_us');

Route::post('/edit_adv',[\App\Http\Controllers\Admin\AdminController::class, 'edit_adv'])->name( 'edit_adv')->middleware('auth');

Route::post('/edit_news',[\App\Http\Controllers\Admin\AdminController::class, 'edit_news'])->name( 'edit_news')->middleware('auth');

Route::post('/delete_product',[\App\Http\Controllers\Admin\AdminController::class, 'delete_product'])->name( 'delete_product')->middleware('auth');
Route::post('/delete_message',[\App\Http\Controllers\Admin\AdminController::class, 'delete_message'])->name( 'delete_message')->middleware('auth');
Route::get('/edit_product/{id}',[\App\Http\Controllers\Main\MainController::class, 'edit_product']);

Route::post('/add_partner',[\App\Http\Controllers\Admin\AdminController::class, 'add_partner'])->name( 'add_partner')->middleware('auth');
Route::post('/add_category',[\App\Http\Controllers\Admin\AdminController::class, 'add_category'])->name( 'add_category')->middleware('auth');

Route::post('/edit_partner',[\App\Http\Controllers\Admin\AdminController::class, 'edit_partner'])->name( 'edit_partner')->middleware('auth');
Route::post('/edit_category',[\App\Http\Controllers\Admin\AdminController::class, 'edit_category'])->name( 'edit_category')->middleware('auth');
Route::post('/edit_images',[\App\Http\Controllers\Admin\AdminController::class, 'edit_images'])->name( 'edit_images')->middleware('auth');
Route::post('/edit_products',[\App\Http\Controllers\Admin\AdminController::class, 'edit_products'])->name( 'edit_products')->middleware('auth');
Route::post('/edit_products_c',[\App\Http\Controllers\Admin\AdminController::class, 'edit_products_c'])->name( 'edit_products_c')->middleware('auth');

Route::post('/delete_partner',[\App\Http\Controllers\Admin\AdminController::class, 'delete_partner'])->name( 'delete_partner')->middleware('auth');
Route::post('/delete_category',[\App\Http\Controllers\Admin\AdminController::class, 'delete_category'])->name( 'delete_category')->middleware('auth');

Route::get('/partners', function () {
    $partners = Partners::all();
    return view('Admin.partners',[
        'partners'=>$partners
    ]);
})->middleware('auth');

Auth::routes();


