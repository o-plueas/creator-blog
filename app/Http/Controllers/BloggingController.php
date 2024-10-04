<?php

namespace App\Http\Controllers;

use App\Models\Blogging;
use Illuminate\Http\Request;

class BloggingController extends Controller
{
    //all blogging

    public function index(){
        return view('blogging.index', [
            'blogging' =>Blogging::latest()->filter(request(['category', 'search']))->paginate(6)
        ]);
    }

    //create 

    public function create(){
        return view('blogging.create');
    }

    //store 

    public function store(Request $request){

        $formFields = $request->validate([
            'title'=>'required',
            'author'=> 'required',
            'categories' => 'required',
            'description' => 'required',
            'qualification' => 'required'
        ]);


        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();
        

        Blogging::create($formFields);

        return redirect('/')->with('message', 'post created successfully');



    }

    //edit

    public function edit(Blogging $blog){
        return view('blogging.edit', 
        [
            'blog' => $blog
            
        ]);
    }

    //update

    public function update(Request $request, Blogging $blog){

       

        $formFields = $request->validate([
            'author' => 'required',
            'title'=> 'required',
            'categories' => 'required',
            'qualification' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logo', 'public');
        }  

        $blog->update($formFields);
        return redirect('/')->with('message', 'Blogging updated successfully');

    }


    //delete 

    public function destroy(Blogging $blog){

        //make sure logged in user is the only one to edit manage
        // if($blogging->user_id != auth()->id){
            //     abort(403, 'Unauthorized');
            // }

        $blog->delete();
        return redirect('/')->with('message', 'Blogging deleted successfully');
    }


    //manage 

    public function manage(){
        return view('blogging.manage', [
            // 'blogging' =>User::get()

            'blogging' => auth()->user()->bloggings()->get()
        ]);
    }




    

    public function show(Blogging $blog){
        return view('blogging.show', [
            'blog' => $blog
        ]);
    }


    public function about(){
        return view('blogging.about');
    }

    public function contact(){
        return view('blogging.contact');
    }

}
