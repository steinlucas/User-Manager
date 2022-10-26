<?php

namespace App\Http\Controllers;

Use Exception;
use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessoresController extends Controller
{
    public function index()
    {
        $professores = Professor::all();
        return view('professores.index', compact('professores') );
    }
}
