<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
class updateRecordController extends Controller
{
    public function index() {
        $users = DB::select('select * from contact');
        return view('editrecord',['users'=>$users]);
     }
     public function show($id) {
        $users = DB::select('select * from contact where id = ?',[$id]);
        return view('updaterec',['users'=>$users]);
     }
     public function edit(Request $request,$id) {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        DB::update('update contact set name = ? where id = ?',[$name,$id]);
        DB::table('contact')->where('id', $id)->whereNotNull('email')->update(['email' => $email]);
        DB::table('contact')->where('id', $id)->whereNotNull('subject')->update(['subject' => $subject]);
        DB::table('contact')->where('id', $id)->whereNotNull('message')->update(['message' => $message]);
        
       //DB::update('update contact set email = ? where id = ?',[$email,$id]);
       //DB::update('update contact set subject = ? where id = ?',[$subject,$id]);
       // DB::update('update contact set message = ? where id = ?',[$message,$id]);
       return redirect('/delete-records')->with('success', 'Data update successfully!');
      }
}
