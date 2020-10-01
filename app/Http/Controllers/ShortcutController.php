<?php

namespace App\Http\Controllers;

use App\Models\Shortcut;
use Illuminate\Http\Request;

class ShortcutController extends Controller
{

    public function index()
    {

        $shortcuts = Shortcut::all();

        return view('shortcuts/index', compact('shortcuts'));
    }

    public function store(Request $request)
    {
        $shortcut =  new Shortcut([
                'shortcut'=>$request->get('shortcut'),
                'command'=>$request->get('command'),
                'program'=>$request->get('program')
            ]);

        $shortcut->save();
    }
}
