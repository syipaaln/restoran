<?php
  
  namespace App\Http\Controllers;
 
  use Illuminate\Http\Request;
  use Illuminate\View\View;
    
  class HomeController extends Controller
  {
      public function __construct()
      {
        $this->middleware('auth');
      }
  
      public function index()
      {
          return view('home');
      }
    
      public function Pembeli(): View
      {
          return view('pembeli');
      } 
    
      public function admin(): View
      {
          return view('admin');
      }
      
  }  
  