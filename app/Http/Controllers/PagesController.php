<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $hg="Hosgeldiniz<br>";
        //return view('pages.index',compact('hg'));
        return view('pages.index')->with('hg',$hg);
    }

    public function about()
    {
        $hakkimizda="<h1>Kuruluş 1998";
        return view('pages.about')->with('hakkimizda',$hakkimizda);
    }
    public function contact()
    {
        $data =array(
            'tittle' => 'İletisim',
            'telnolar' => ['ev1234','cep1234567','cep22112312' ]

        );
        return view('pages.contact')->with($data);
    }
}
