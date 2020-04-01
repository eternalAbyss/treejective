<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Auth::user;
        return view('profile.profile-view',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('profile/view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $users = User::find($request->input('id'));
        return view('profile.profile-edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $users = User::find($request->input('id'));
        $users->name = $request->input('fullname');
        $users->age = $request->input('age');
        $users->gender = $request->input('gender');
        $users->address = $request->input('address');
        $users->username = $request->input('username');
        $users->obj1 = $request->input('obj1');
        $users->obj2 = $request->input('obj2');
        $users->obj3 = $request->input('obj3');
        $users->obj4 = $request->input('obj4');
        $users->obj5 = $request->input('obj5');
        $users->obj6 = $request->input('obj6');
        $users->obj7 = $request->input('obj7');
        $users->obj8 = $request->input('obj8');
        $users->obj9 = $request->input('obj9');
        $users->obj10 = $request->input('obj10');
        $users->obj11 = $request->input('obj11');
        $users->obj12 = $request->input('obj12');
        $users->score = ($users->obj1 + $users->obj2 + $users->obj3 + $users->obj4 + $users->obj5 + $users->obj6 + $users->obj7 + $users->obj8 + $users->obj9 + $users->obj10 + $users->obj11 + $users->obj12)*20;
        $users->task = $users->obj1 + $users->obj2 + $users->obj3 + $users->obj4 + $users->obj5 + $users->obj6 + $users->obj7 + $users->obj8 + $users->obj9 + $users->obj10 + $users->obj11 + $users->obj12;
        $users->save();
        return view('profile.profile-view',compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
