<?php

namespace App\Http\Controllers;

use App\Models\Shortcut;
use Illuminate\Http\Request;

class ShortcutController extends Controller
{

    public function index(){
        return view('shortcuts/index')
    }

    public function store(Request $request){
        $shortcut =  new Shortcut([
                'shortcut'=>$request->get('shortcut'),
                'task'=>$request->get('task'),
                'program'=>$request->get('program')
            ]);

        $shortcut->save();
    }
}
