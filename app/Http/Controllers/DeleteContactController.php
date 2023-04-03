<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
class DeleteContactController extends Controller
{
    
    public function index() {
       $users = DB::select('select * from contact');
        return view('deletecontact',['users'=>$users]);
     }

     
     public function destroy($id) {
      
        DB::table('contact')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Record deleted successfully!');
   
                
                    // DB::table('contact')->where('id', $id)->delete();

                    // return redirect()->back()->with('message', 'Record deleted successfully!');
               
                }
                }
                   
    

   

