<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function  showOne()
    {
        $pages = [
          1=> 'Pagina 1',
          2=> 'Pagina 2',
          3=> 'Pagina 3',
          4=> 'Pagina 4',
          5=> 'Pagina 5',
        ];
        return view('index',['mesage'=>'Salut Laravel','pages'=>$pages]);
    }
    public function  showAll()
    {
        return dd($this);
    }
}
