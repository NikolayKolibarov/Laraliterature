<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Character;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function search(Request $request)
    {
        $keyword = $request['keyword'];
        $model = $request['model'];

        switch ($model) {
            case 'authors':
                $results = Author::where('name', 'LIKE', '%' . $keyword . '%')->get();
                return response()->json(['results' => $results, 'success' => true]);
                break;
            case 'books':
                $results = Book::where('title', 'LIKE', '%' . $keyword . '%')->get();
                return response()->json(['results' => $results, 'success' => true]);
                break;
            case 'characters':
                $results = Character::where('name', 'LIKE', '%' . $keyword . '%')->get();
                return response()->json(['results' => $results, 'success' => true]);
                break;
            default:
                return response()->json(['results' => null, 'success' => false]);
                break;

        }

    }

}
