<?php

namespace App\Http\Controllers\Guest;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index() {
        return view ('welcome');
    }

    public function about() {
        return view ('about');
    }

    public function books() {
        // chiedo i dati al DB

        // seleziona tuti i libri del DB
        $arrBooks = Book::all();

        // filtro per titolo
        // $arrBooks = Book::where('title', 'i promessi sposi')->get();

        // filtro con il like
        // $arrBooks = Book::where('title', 'LIKE' '%sposi%')->orderby('title', 'asc')->get();

        return view ('books', compact('arrBooks'));
    }
}
