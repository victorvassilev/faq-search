<?php

namespace App\Http\Controllers\Search;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Faq;

class SearchController extends Controller
{

    /**
     * Display Form
     * @return view
     */
    public function index()
    {
        return view('search/index');
    }

    /**
     * Filter and display search results
     * @return view with search results
     */
    
    public function output(Request $request)
    {
        $faqs = [];
        $search = $request->input('search');
        if ($search){
            $faqs = Faq::search($search, null, true)->with('kategorie')->get();
        }
        return view('search/output',compact('faqs'));
    }

}
