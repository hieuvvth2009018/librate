<?php

namespace App\Http\Controllers;

use App\Models\librate;
use Illuminate\Http\Request;

class librateController extends Controller

{
    public function index(Request $request){
        $search = $request->get('search');
        $query = Book::query();
        if($search && strlen($search) > 0){
            $query = $query->where('title', 'LIKE', '%'.$search.'%');
        }

        $books = $query->paginate(10)->appends(['search' => $search]);
        return view('books',[
            'librate' => $librate,
        ]);
    }
}
