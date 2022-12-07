<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Room_Basic;
class HomeController extends Controller
{
 function index(){
 //memanggil view landing page pada folder frontpage
 //disertai dengan variable title yang dapat ditampilkan pada layout
//  return view('frontpage.landingpage', ['title' => "Landing Page"]);
   return view('dashboard');
 }
 function product(){
    return view('product', ['title' => "product"]);
 }
 function landing(){
   return view('frontpage.landingpage');
 }
 function result(){
   return view('frontpage.result');
 }
 function about(){
  return view('frontpage.about');
 }
 function basic(){
 return view('frontpage.basic');
}
 public function basics(){
  $room_basics = Room_Basic::all();
  return view('frontpage.basic', compact('room_basics'));
  }
}