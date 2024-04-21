<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleCategoryController;
use App\Http\Controllers\VehicleImagesController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\PublicUserController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BookedVehiclesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\ChatBotController;
use App\Http\Controllers\FAQController;

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


Route::get('/admin-login', function () {
    return view('admin.login');
});

Route::get('/', [FrontendController::class, 'index'])->name('dashboard');

Route::get('/vehicledetails/{id}', [FrontendController::class, 'vehicledetails'])->name('vehicledetails');

Route::get('/admin-register', function () {
    return view('admin.register');
});
Route::get('/logout-admin', function () {
    session()->forget('sessionUserId');
    return redirect('/');
}); 
Route::post('/addUserData', [AdminUserController::class, 'store']);
Route::post('/userLogin', [AdminUserController::class, 'login']);

Route::get('/admin-dashboard', [AdminUserController::class, 'dashboard']);

Route::get('/searchitem', [FrontendController::class, 'searchpage'])->name('search');

Route::get('/faq', [FrontendController::class, 'faqpage'])->name('faq');

Route::get('/contactus', [FrontendController::class, 'contactus'])->name('contactus');

Route::post('/contactusdata', [FrontendController::class, 'contactusdata'])->name('contactusdata');

Route::get('/listcategory', [VehicleCategoryController::class, 'index'])->name('categories.list');
Route::get('/addcategory', [VehicleCategoryController::class, 'addcategory'])->name('categories.add');
Route::post('/storecategory', [VehicleCategoryController::class, 'store'])->name('categories.store');
Route::get('/editcatgeory/{id}', [VehicleCategoryController::class, 'edit'])->name('categories.edit');
Route::get('/deletecategory/{id}', [VehicleCategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('/admin-listvehicles', [AdminUserController::class, 'listvehicles'])->name('admin.listvehicles');
Route::get('/admin-appprovevehicles', [AdminUserController::class, 'approvevehicle'])->name('admin.approvevehicle');

Route::get('/compare', [CompareController::class, 'viewpage'])->name('compare.viewpage');

Route::get('/forgetpassword', [PublicUserController::class, 'forgetpasswordpage'])->name('publicuser.forgetpassword');

Route::get('/changepassword', [PublicUserController::class, 'changepasswordpage'])->name('publicuser.changepassword');

Route::post('/storeforgetpassword', [PublicUserController::class, 'forgetpassword'])->name('publicuser.storeforgetpassword');

Route::post('/storechangepassword', [PublicUserController::class, 'updatePasswordForget'])->name('publicuser.storechangepassword');

Route::post('/store-userlogin', [PublicUserController::class, 'userlogin'])->name('userlogin');
Route::post('/store-userregister', [PublicUserController::class, 'userregister'])->name('userregister');

Route::get('/bookedvehicleslist', [BookedVehiclesController::class, 'bookedvehiclesadmin'])->name('admin.bookedvehicles');

Route::get('/confirmbooking/{id}', [BookedVehiclesController::class, 'confirmbooking'])->name('booking.confirm');

Route::get('/notifyseller/{id}', [BookedVehiclesController::class, 'notifyseller'])->name('booking.notifyseller');

Route::post('/storecompare', [CompareController::class, 'store'])->name('user.compare');

Route::match(['get', 'post'], '/botman', [ChatBotController::class, 'handle']);

Route::get('/listblog', [BlogController::class, 'index'])->name('blog.list');
Route::get('/addblog', [BlogController::class, 'addblog'])->name('blog.add');
Route::get('/blogdescription/{id}', [BlogController::class, 'blogdescription'])->name('blog.description');
Route::post('/storeblog', [BlogController::class, 'store'])->name('blog.store');
Route::get('/editblog/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::get('/deleteblog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
Route::post('/updateblog/{id}', [BlogController::class, 'update'])->name('blog.update');


Route::get('/listfaq', [FAQController::class, 'index'])->name('faq.list');
Route::get('/addfaq', [FAQController::class, 'addfaq'])->name('faq.add');
Route::post('/storefaq', [FAQController::class, 'store'])->name('faq.store');
Route::get('/editfaq/{id}', [FAQController::class, 'edit'])->name('faq.edit');
Route::post('/updatefaq/{id}', [FAQController::class, 'update'])->name('faq.update');

Route::get('/becomeaseller', [PublicUserController::class, 'becomeaseller']);
Route::post('/vehicleinquiry', [BookedVehiclesController::class, 'store'])->name('enquiry.store');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [PublicUserController::class, 'dashboard'])->name('user.dashboard');
   

    Route::get('/listvehicle', [VehicleController::class, 'index'])->name('vehicle.list');
    Route::get('/addvehicle', [VehicleController::class, 'addvehicle'])->name('vehicle.add');
    Route::get('/updatevehicle/{id}', [VehicleController::class, 'acceptvehicle'])->name('vehicle.accept');
    Route::get('/deletevehicle/{id}', [VehicleController::class, 'destroy'])->name('vehicle.delete');
    Route::post('/storevehicle', [VehicleController::class, 'store'])->name('vehicle.store');

    Route::get('/user-information', [PublicUserController::class, 'userinformation'])->name('userinformation.list');
    Route::post('/updateuser-information', [PublicUserController::class, 'updateinformation'])->name('userinformation.updateinformation');
    Route::get('/user-changepassword', [PublicUserController::class, 'getchangepassword'])->name('userinformation.getchangepassword');
    Route::post('/updateuser-password', [PublicUserController::class, 'updatepassword'])->name('userinformation.updatepassword');
    Route::get('/user-logout', [PublicUserController::class, 'userlogout'])->name('userinformation.logout');

    Route::post('/updateuser', [PublicUserController::class, 'updatestatus'])->name('userinformation.update');

    
    Route::get('/pendingbooked', [BookedVehiclesController::class, 'bookedpending'])->name('vehicle.bookedpending');
    Route::get('/approvalbooked', [BookedVehiclesController::class, 'bookedapproval'])->name('vehicle.bookedapproval');

    Route::get('/orderhistory', [BookedVehiclesController::class, 'orderhistory'])->name('vehicle.orderhistory');

   

    Route::post('/khalti/payment/verify',[BookedVehiclesController::class,'verifyPayment'])->name('khalti.verifyPayment');

    Route::post('/khalti/payment/store',[BookedVehiclesController::class,'storePayment'])->name('khalti.storePayment');


    Route::get('/vehicleimage', [VehicleImagesController::class, 'uploadimage'])->name('vehicle.imageadd');
    Route::post('/storevehicleimage', [VehicleImagesController::class, 'store'])->name('vehicleimage.store');
    Route::get('/listvehicleimages', [VehicleImagesController::class, 'index'])->name('vehicleimages.list');
    Route::get('/deletevehicleimages/{id}', [VehicleImagesController::class, 'destroy'])->name('vehicleimages.destroy');

    
   

});






