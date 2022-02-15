<?php

use App\Http\Controllers\Controller;
use App\Http\Livewire\Cv;
use Illuminate\Support\Facades\Route;
use Dompdf\Dompdf;
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
    return view('cv');
});
Route::get('/welcome',function(){
    return view('welcome');
});

// Route::get('/cvqw',function(){
//     $dompdf=new Dompdf();
//     $dompdf->loadHtml(view('cv'));
//     $dompdf->setPaper('A4','portrait');
//     $dompdf->render();
//     $dompdf->stream('cv.pdf',['Attachment'=>true]);
// });
Route::get('/cv',[Cv::class,'createPDF']);
