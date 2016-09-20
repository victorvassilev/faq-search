<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use App\Kategorie;
use \Session;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * List Faq Pages
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();
        //dd($faqs);
        return view('admin/list',compact('faqs'));
    }
    
    /**
     * Show edit form
     */
    public function edit($id)
    {
        $faq = Faq::find($id);
        $categories = Kategorie::all();
        return view('admin/edit', array('faq'=>$faq,'categories'=>$categories));
    }
    
    /**
     * Update or create new currency
     */
    public function update(Request $request,$id = null)
    {
        $input = $request->all();
        $type = 'crud';
        if ($id == null){
            $this->validate($request, [
            'schlagwort' => 'required',
            'frage' => 'required',
            'antwort' => 'required' 
             ]);
            $input = $request->all();
            Faq::create($input);
            $message = 'Eintrag gespeichert.';
        }
        else {
        $faq = Faq::findOrFail($id);
        $faq->fill($input)->save();
        $message = 'Eintrag gespeichert.';
        }
        Session::flash($type, $message);
        return redirect()->action('AdminController@index');
    }
    
     /**
     * Show create form
     */
    public function create()
    {
        $categories = Kategorie::all();
        return view('admin/add',compact('categories'));
    }
    
   /**
     * Delete Faq
     */
    public function delete($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        Session::flash('crud', 'Eintrag gelöscht.');
        return redirect()->action('AdminController@index');
    }
    
    /*
     * logout
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('default-route');
    }
}
