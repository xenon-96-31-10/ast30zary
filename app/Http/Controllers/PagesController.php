<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use App\Models\Review;

class PagesController extends Controller
{
    //
    public function showIndex(){
      $files = File::allFiles(public_path('images\fishing'));
      $reviews = Review::where('confirmed', 1)
              ->orderBy('id', 'desc')
              ->limit(5)
             ->get();
      //dd($files[0]);
      return view('welcome', compact('files','reviews'));
    }

    public function showOir(){
      $files = File::allFiles(public_path('images\fishing'));

      return view('oir', compact('files'));
    }

    public function showAbout(){
      $files = File::allFiles(public_path('images\rest'));

      return view('about', compact('files'));
    }

    public function showGallery(){
      $fishing = File::allFiles(public_path('images\fishing'));
      $rest = File::allFiles(public_path('images\rest'));
      $room = File::allFiles(public_path('images\room'));

      return view('gallery', compact('fishing', 'rest', 'room'));
    }

    public function showPrice(){
      $room = File::allFiles(public_path('images\room'));

      return view('price', compact('room'));
    }

    public function showContacts(){
      return view('contacts');
    }

}
