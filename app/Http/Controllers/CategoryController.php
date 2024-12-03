<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\User;

class CategoryController extends Controller
{
    //
    public function createCategory(Request $req){
        $categories=category::where('parent_id',0)->get();
        $sub_categories= category::with('children')->get();
        return view('category_form',compact('categories','sub_categories'));
    }
    public function storeCategory(Request $req){
        $categories = category::create($req->all());
        return redirect('/')->with('success','category added successfully');
       
    }
    public function addUser(Request $req){
           $userdetails=user::create([
            'name' => $req->name,
            'email'=> $req->email,
            'password'=>$req->password,
            'category_id'=>$req->category_id
           ]);
        return redirect('/add-user')->with('success','category added successfully');
 
    }

    public function showUserForm(){
        $categories = category::where('parent_id',0)->get();
        $catUsers = user::with(['categoryUser'])->get();
        return view('add_user',compact('categories','catUsers'));
    }
}
