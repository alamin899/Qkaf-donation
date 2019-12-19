<?php


use App\Country;
/*
|--------------------------------------------------------------------------
| Web Routesd
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
cache clear
*/
    

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/test', function () {
    return view('Frontend.testhome');
})->name('user.login');

/* user login Route */
Route::get('/customlog', function () {
    $countryname = Country::all();
    return view('auth.login_register',compact('countryname'));

})->name('user.login');

Route::get('/adminlogin', function () {
    return view('auth.admin.login_register');

})->name('admin.login');
Route::post('/admin/register', 'Auth\RegisterController@adminregister')->name('admin.register');

// user dashboard

Route::get('/dashboard', 'UserdashboardController@dashboard')->name('user.dashboard');
Route::get('/profile', 'UserdashboardController@profile')->name('user.profile');
Route::post('/profile/update', 'UserdashboardController@profileUpdate')->name('user.profile.update');

// email check 
Route::post('email_available','DependencyController@email_available')->name('email_available');


// Route::get('/adminlog', function () {
//     return view('auth.admin.login');

// });


/* Dependency Route */


Route::get('/','DependencyController@dependencyIndex')->name('index');
Route::get('/getcategory','DependencyController@getcategory');
Route::get('/getproduct','DependencyController@getproduct');
Route::get('/getstate','DependencyController@getstate');
Route::get('/getcity','DependencyController@getcity');
Route::post('/getcart','DependencyController@getcart')->name('cart');
Route::post('/userreg','DependencyController@userreg')->name('user.reg');

/* Save billing information */

Route::post('/store', 'BillingInformationController@store')->name('store');

/* admin  */

 Route::get('/home', 'HomeController@index');

// ,'middleware'=>['auth','admin']

Route::group(['prefix' => 'admin'],function () {
    /*
           Admin Dashboard Routes
    */

    Route::get('/','AdminController@index')->name('admin.index');

    Route::post('/customregister','UserController@customregister')->name('customregister');


    /*
           Admin login Routes
    */
    // Admin Login Routes
        Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
        Route::post('/login/submit', 'Admin\LoginController@login')->name('admin.login.submit');
        Route::post('/logout/submit', 'Admin\LoginController@logout')->name('admin.logout');

    /*
           Admin Project Routes
    */
    Route::get('/project/entry','ProjectController@index')->name('project.entry');
    Route::post('/project/save','ProjectController@save')->name('project.save');

    /*
           Admin Category Routes
    */
    Route::get('/category/entry', 'CategoryController@index')->name('category.entry');
    Route::post('/category/save', 'CategoryController@save')->name('category.save');

    /*
          Admin Product Routes
    */
    Route::get('/product/entry','ProductController@index')->name('product.entry');
    Route::post('/product/save','ProductController@save')->name('product.save');
    Route::get('/product/view','ProductController@view')->name('product.view');
    //Route::get('/cart/{id}', 'ProductController@cart');

    /*
          ROle Controller  Routes
    */

    Route::get('/role','RoleController@index')->name('role.index');
    Route::get('/role/create','RoleController@create')->name('role.create');
    Route::post('/role/store','RoleController@store')->name('role.store');
    Route::get('/role/edit/{id}','RoleController@edit')->name('role.edit');
    Route::post('/role/update','RoleController@update')->name('role.update');
    Route::post('/role/delete/{id}','RoleController@destroy')->name('role.destroy');



});

Route::get('cart','CartController@index');
Route::post('cart/add/{id}','CartController@additem');
Route::get('cart/remove/{id}','CartController@remaovecartitem')->name('cart.remove');

Route::get('subtotal', function () {
  return Cart::subtotal();

});

Route::post('userregistration','UserController@userregistration')->name('userregistration');
Route::post('customlogin','UserController@customlogin')->name('customlogin');


Route::get('clear-all', function () {
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('clear-compiled');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    dd('Cached Cleared');
});
// SSLCOMMERZ Start
Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

Route::post('/pay', 'SslCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END


Auth::routes();