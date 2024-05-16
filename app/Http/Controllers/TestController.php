<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{

    public $tab = [
        ['id' => '1', 'nom' => 'france'],
        ['id' => '1', 'nom' => 'belgique'],
        ['id' => '1', 'nom' => 'Congo']
    ];
    public function hello()
    {
        return 'hello world';
    }
    public function getpays()
    {

        $pays = $this->tab;
        $title = "Liste des pays";
        return view('pays', compact('title', 'pays'));
    }

    public function getPaysId($id)
    {
        $pays = $this->tab[$id];
        return view('detailPays',compact('pays'));
    }

    public function create(){
         return view ('create');

    }

    public function store(Request $request){
        dd($request->method());
    }
}
