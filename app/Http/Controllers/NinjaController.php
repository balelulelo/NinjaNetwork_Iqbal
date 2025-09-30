<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index() {
        // fetch all records and pass into index view
        $ninjas = Ninja::orderBy('created_at', 'desc')->paginate(10);
        
        return view('ninjas.index', ["ninjas" => $ninjas]);
    }

    public function show($id) {
        // fetch a single record and pass into show view
        $ninja = Ninja::findorFail($id);

        return view('ninjas.show', ["ninja" => $ninja]);
    }

    public function create() {
        // render create view to users
    
         return view('ninjas.create');
    }

    public function store() {
        // handle POST request to save new ninja record
    }
}
