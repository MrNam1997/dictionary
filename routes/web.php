<?php

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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/enterText',function (){
    return view('form_dictionary');
});
Route::post('/enterText', function (Request $request){
    $englishToVietSub=['moto'=>'xe may','air'=>'may bay','bike'=>'xe dap'];

    foreach ($englishToVietSub as $key => $value){
        if ($request->translate === $key ){
            return view("vietsub",compact(["value","key"]));
        }
        else{
            return view('eroor');
        }
    }
})->name("translate.text");

