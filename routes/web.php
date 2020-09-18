<?php
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('about/{ID?}',function (){

    $name=[
        1=>"mohammed",
        2=>"ahmed",
        3=>"ali"
    ];
return view("about",[
    "name"=>$name[request("ID")],
]);
})->name("AboutUs");


Route::group(['prefix'=>'users','middleware'=>'auth'] , function (){
    Route::get('/',function (){
        return "USERS";
    });
});

Route::resource('news',"newsController");
Route::get("showTest","newsController@showTest");
Route::get('/test',function (){


    $obj=['Mohammed','23','Computer Science'];
    return view("user.showUser",compact('obj'));

});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
