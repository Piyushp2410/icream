<?php
// UI template Routeing
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\icream\IcereamHomeController;
use App\Http\Controllers\icream\IcereamContactController;
use App\Http\Controllers\icream\IcreamProductsController;
use App\Http\Controllers\icream\IcreamServiceController;
use App\Http\Controllers\icream\IcreamGalleryController;
use App\Http\Controllers\icream\IcreamAboutController;

// Admin template Routeing
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ContactsController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\GalleryCatController;
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


// *=*=*=*=User panel Routes=*=*=*=*

// UI home routes
Route::get('/',[IcereamHomeController::class,'index'])->name('home');

// UI slider
Route::get('/',[IcereamHomeController::class,'showSlider'])->name('home');

// UI about routes
Route::get('/about',[IcreamAboutController::class,'index'])->name('about-us');

// UI products routes
Route::get('/product-page',[IcreamProductsController::class,'index'])->name('products-menu');
Route::get('/product-page',[IcreamProductsController::class,'show'])->name('products-menu');

// UI service routes
Route::get('/service',[IcreamServiceController::class,'index'])->name('service');
Route::get('/service',[IcreamServiceController::class,'show'])->name('service');

// UI gallery routes
Route::get('/gallery',[IcreamGalleryController::class,'index'])->name('gallery');
// Route::get('/gallery',[IcreamGalleryController::class,'showcat']);
Route::get('/gallery',[IcreamGalleryController::class,'showGallery'])->name('gallery');

// UI contacts routes
Route::get('/contact-us',[IcereamContactController::class,'index'])->name('contact-us');
Route::post('/contact-us',[IcereamContactController::class,'store'])->name('contact-us');


// *=*=*=*=Admin panel Routes=*=*=*=*

// admin panel routeing
Route::get('/admin-login',[LoginController::class,'index']);
Route::get('/admin-login/dashboard',[DashboardController::class,'index'])->name('dashboard');

//  admin Slider pages routes
Route::get('/admin-login/slider',[SliderController::class,'index'])->name('slider-home');
Route::get('/admin-login/slider',[SliderController::class,'show'])->name('slider-home');
Route::get('/admin-login/create-slider',[SliderController::class,'addslider'])->name('add-slider');
Route::post('/admin-login/create-slider',[SliderController::class,'store'])->name('add-slider');
Route::get('/admin-login/edit-slider',[SliderController::class,'editslider'])->name('edit-slider');
Route::get('/admin-login/edit-slider/{id}',[SliderController::class,'edit'])->name('edit-slider');
Route::post('/admin-login/edit-slider/{id}',[SliderController::class,'update'])->name('edit-slider');
Route::get('/admin-login/slider/{id}',[SliderController::class,'destroy'])->name('del-slider');



// admin products page routes
Route::get('/admin-login/manage-products',[ProductController::class,'index'])->name('add-products');
Route::get('/admin-login/add-products',[ProductController::class,'addproduct'])->name('add-products');
Route::post('/admin-login/add-products',[ProductController::class,'store'])->name('add-products');
Route::get('/admin-login/manage-products',[ProductController::class,'show'])->name('manage-products');
Route::get('/admin-login/manage-products/{id}',[ProductController::class,'destroy'])->name('del-products');
Route::get('/admin-login/edit-products/{id}',[ProductController::class,'editproduct'])->name('update-products');
Route::get('/admin-login/edit-products/{id}',[ProductController::class,'edit'])->name('update-products');
Route::post('/admin-login/edit-products/{id}',[ProductController::class,'update'])->name('update-products');



// admin service page routes
Route::get('/admin-login/manage-service',[ServiceController::class,'index'])->name('manage-services');
Route::get('/admin-login/add-service',[ServiceController::class,'addservices'])->name('add-service');
Route::post('/admin-login/add-service',[ServiceController::class,'store'])->name('add-service');
Route::get('/admin-login/edit-service',[ServiceController::class,'editservices'])->name('edit-service-home');
Route::get('/admin-login/edit-service/{id}',[ServiceController::class,'edit'])->name('edit-service-home');
Route::post('/admin-login/edit-service/{id}',[ServiceController::class,'update'])->name('edit-service-home');
Route::get('/admin-login/manage-service',[ServiceController::class,'show'])->name('manage-services');
Route::get('/admin-login/manage-service/{id}',[ServiceController::class,'destroy'])->name('del-service');

// admin gallery category routes
Route::get('/admin-login/add-gallery-category',[GalleryCatController::class,'index'])->name('add-ga-cat');
Route::post('/admin-login/add-gallery-category',[GalleryCatController::class,'store'])->name('add-ga-cat');
Route::get('/admin-login/manage-gallery-category',[GalleryCatController::class,'managecat'])->name('manage-ga-cat');
Route::get('/admin-login/manage-gallery-category',[GalleryCatController::class,'show'])->name('manage-ga-cat');
Route::get('/admin-login/manage-gallery-category/{id}',[GalleryCatController::class,'destroy'])->name('del-ga-cat');
Route::get('/admin-login/update-category/{id}',[GalleryCatController::class,'editcat']);
Route::get('/admin-login/update-category/{id}',[GalleryCatController::class,'edit']);
Route::post('/admin-login/update-category/{id}',[GalleryCatController::class,'update']);

// Route::get('/admin-login/manage-gallery-category',[GalleryController::class,'managegallerycategory']);
// Route::get('/admin-login/add-gallery-category',[GalleryController::class,'addgallerycategory']);
// Route::get('/admin-login/manage-gallery-category',[GalleryController::class,'showcatdata']);
// Route::post('/admin-login/add-gallery-category',[GalleryController::class,'addcat']);


// admin gallery rotues
Route::get('/admin-login/manage-gallery',[GalleryController::class,'index'])->name('manage-gal');
Route::get('/admin-login/manage-gallery',[GalleryController::class,'galleryShow'])->name('manage-gal');
Route::get('/admin-login/manage-gallery/{id}',[GalleryController::class,'destroy'])->name('del_gal');
Route::get('/admin-login/add-gallery',[GalleryController::class,'addgallery'])->name('add-gal');
Route::get('/admin-login/add-gallery',[GalleryController::class,'show'])->name('add-gal');
Route::post('/admin-login/add-gallery',[GalleryController::class,'store'])->name('add-gal');
// Route::get('/admin-login/edit-gallery',[GalleryController::class,'showEditp'])->name('edit-gal');
Route::get('/admin-login/edit-gallery/{id}',[GalleryController::class,'eidtgal'])->name('edit-gal');
// Route::get('/admin-login/edit-gallery',[GalleryController::class,'galleryCatShow'])->name('edit-gal');
Route::get('/admin-login/edit-gallery/{id}',[GalleryController::class,'edit'])->name('edit-gal');
Route::post('/admin-login/edit-gallery/{id}',[GalleryController::class,'update'])->name('edit-gal');

// admin contacts routes
Route::get('/admin-login/contacts',[ContactsController::class,'index'])->name('contacts-home');
Route::get('/admin-login/contacts',[ContactsController::class,'show'])->name('contacts-home');
Route::get('/admin-login/contacts/{id}',[ContactsController::class,'destroy'])->name('del-contacts');
