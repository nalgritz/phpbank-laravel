<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
  public function home() {
    $people = ['Taylor', 'Matt', 'Jeffery'];

    // return view('welcome', ['people' => $people]); // Method 1, input array as usual
    return view('welcome', compact('people')); // Method 2, using compact to substitute array format
    // return view('welcome')->with['people' => $people] // Method 3, using with to pass key people with values in $people
    // return view('welcome')->withPeople($people) // Method 4, alternative
    // return View::make(); // Also equivalent without parameters
  }

  public function about() {
    return view('about'); // resources/views/pages/about.blade.php
  }
}
