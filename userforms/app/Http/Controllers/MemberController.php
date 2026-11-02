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

   public function delete($id){
    $member = Members::find($id);
    $member->delete();

    return redirect()->route('members.display_all')
                    ->with('success','Member deleted successfully.');
   }

    public function edit($id){
     $member = Members::find($id);
     return view('members.edit', compact('member'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members,email,'.$id,
        ]);

        $member = Members::find($id);
        $member->update($request->all());

        return redirect()->route('members.display_all')
                        ->with('success','Member updated successfully.');
    }

}