<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function index()
    {
      $ativa = 'pacientes';
      return view('front.pacientes')->with('ativa', $ativa);
    }

    public function gestante()
    {
      $ativa = 'gestantes';
      return view('front.sub_pacientes.gestante')->with('ativa', $ativa);
    }

    public function prepare()
    {
      $ativa = 'prepare';
      return view('front.sub_pacientes.prepare')->with('ativa', $ativa);
    }

    public function colesterol()
    {
      $ativa = 'colesterol';
      return view('front.sub_pacientes.colesterol')->with('ativa', $ativa);
    }

    public function genetico()
    {
      $ativa = 'genetico';
      return view('front.sub_pacientes.genetico')->with('ativa', $ativa);
    }

    public function toxico()
    {
      $ativa = 'toxico';
      return view('front.sub_pacientes.toxico')->with('ativa', $ativa);
    }

    public function sexagem()
    {
      $ativa = 'sexagem';
      return view('front.sub_pacientes.sexagem')->with('ativa', $ativa);
    }

    public function dna()
    {
      $ativa = 'dna';
      return view('front.sub_pacientes.dna')->with('ativa', $ativa);
    }

    public function plaquetopenia()
    {
      $ativa = 'plaquetopenia';
      return view('front.sub_pacientes.plaquetopenia')->with('ativa', $ativa);
    }
}
