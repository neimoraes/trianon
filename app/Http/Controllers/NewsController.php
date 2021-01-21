<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
      $ativa = 'news';
      return view('front.news.index')->with('ativa', $ativa);
    }
    public function post()
    {
      $ativa = 'news';
      return view('front.news.post')->with('ativa', $ativa);
    }
    public function post2()
    {
      $ativa = 'news';
      return view('front.news.post2')->with('ativa', $ativa);
    }
    public function post3()
    {
      $ativa = 'news';
      return view('front.news.post3')->with('ativa', $ativa);
    }
    public function post4()
    {
      $ativa = 'news';
      return view('front.news.post4')->with('ativa', $ativa);
    }
    public function post5()
    {
      $ativa = 'news';
      return view('front.news.post5')->with('ativa', $ativa);
    }
}
