<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
      $ativa = 'home';
      return view('front.home')->with('ativa', $ativa);
    }
    public function about()
    {
      $ativa = 'about';
      return view('front.about')->with('ativa', $ativa);
    }
    public function contact()
    {
      $ativa = 'contact';
      return view('front.contact')->with('ativa', $ativa);
    }
    public function results()
    {
      $ativa = 'results';
      return view('front.results')->with('ativa', $ativa);
    }
    public function exams()
    {
      $ativa = 'exams';
      return view('front.exams')->with('ativa', $ativa);
    }
    public function dracena()
    {
      $ativa = 'dracena';
      return view('front.dracena')->with('ativa', $ativa);
    }
    public function tupi()
    {
      $ativa = 'tupi';
      return view('front.tupi')->with('ativa', $ativa);
    }
    public function junqueiropolis()
    {
      $ativa = 'junqueiropolis';
      return view('front.junqueiropolis')->with('ativa', $ativa);
    }
    public function panorama()
    {
      $ativa = 'panorama';
      return view('front.panorama')->with('ativa', $ativa);
    }
    public function brasilandia()
    {
      $ativa = 'brasilandia';
      return view('front.brasilandia')->with('ativa', $ativa);
    }
    public function links()
    {
      $ativa = 'links';
      return view('front.links')->with('ativa', $ativa);
    }
    public function duvidas()
    {
      $ativa = 'duvidas';
      return view('front.duvidas')->with('ativa', $ativa);
    }
    public function planos()
    {
      $ativa = 'planos';
      return view('front.planos')->with('ativa', $ativa);
    }

}
