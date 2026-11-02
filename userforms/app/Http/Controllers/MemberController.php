<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Members;

class MemberController extends Controller
{
//    public function view_data(){
//     return view('view_data');
//    }

//    public function create(){
//     return Members::view('create');
//    }

public function display_all(){
    $members = Members::all();
    return view('members.display', compact('members'));
   }

   public function display(){
    $members = Members::all();
    return view('members.create', compact('members'));
   }

   public function store(Request $request){
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:members,email',
    ]);

    Members::create($request->all());

    return redirect()->route('members.create')
                    ->with('success','Member created successfully.');
   }
}
