<?php
use App\Address;
use App\Employee;
use Illuminate\Http\Request;
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
    return redirect()->route('employee.index');
});
Route::resource('employee','employeeControl');
Route::get('/address/create/{id}',function($id){
    return view('/address/create',compact('id'));
})->name('createAddress');
Route::post('/address/store/{id}',function(Request $request,$id){
    $employee =Employee::where('id',$id)->first();
    $address=Address::create(['street'=>$request->street,'city'=>$request->city]);
    $employee->address()->save($address);
    return redirect()->route('employee.index');
})->name('store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
