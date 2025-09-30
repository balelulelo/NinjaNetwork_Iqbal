<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use App\Models\Dojo;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index() {
        // fetch all records and pass into index view
        $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
        
        return view('ninjas.index', ["ninjas" => $ninjas]);
    }

    public function show($id) {
        // fetch a single record and pass into show view
        $ninja = Ninja::with('dojo')->findorFail($id);

        return view('ninjas.show', ["ninja" => $ninja]);
    }

    public function create() {
        // render create view to users
        $dojos = Dojo::all();

         return view('ninjas.create', ["dojos" => $dojos]);
    }

    public function store(Request $request) {
        // handle POST request to save new ninja record
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:1|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id',
        ]);

        Ninja::create($validated);

        return redirect()->route('ninjas.index');
    
    }
}
