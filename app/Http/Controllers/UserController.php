<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
 /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index()
 {
  $users = User::all();

  return view('users.index', compact('users'));
 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function create()
 {
  return view('users.create');
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request)
 {
  $validated = $request->validate([
   'name'     => 'required|string|max:255',
   'email'    => 'required|string|email|max:255|unique:users',
   'role'     => 'required',
   'password' => 'required|string|min:8|confirmed',
  ]);

  User::create($validated);

  return redirect()->route('users.index')->with('status', 'User added successfully');
 }

 /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function show($id)
 {
  $user = User::findOrFail($id);

  // dd($user);

  return view('users.show', compact('user'));
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function edit($id)
 {
  $user = User::findOrFail($id);

  return view('users.edit', compact('user'));
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, $id)
 {
  //
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
