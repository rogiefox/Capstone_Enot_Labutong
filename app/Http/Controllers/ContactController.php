<?php

namespace App\Http\Controllers;

use App\Models\UserTable;
use App\Models\UserContact;

use Illuminate\Http\Request;
use Session;

class ContactController extends Controller
{
    // display contact with form
    public function user_contact_form(){
        return view('UserContact');
    }
     // display contact with form

    //  user_contact_getter (post)
    public function user_contact_getter(request $r){
        $UserContact = new UserContact;

        $UserContact->ContactUserID = $r->input('ContactUserID');
        $UserContact->ContactMessage = $r->input('ContactMessage');
        $UserContact->save();

        return redirect('usercontact');
    }
    //  user_contact_getter (post)

    // admin_contact
    public function admin_contact(){
        $UserContact = UserContact::query()
        ->select('*')
        ->join('user_tables','ContactUserID','=','user_tables.UserID')
        ->get();

        return view('AdminContact',compact('UserContact'));
    }
    // admin_contact
}
















// TARGETING SINGLE PAGE OR DATA
// public function teacher_detail(string $id){
//     $teacher = teacher::query()

//     ->select('*')
//     ->where('EmployeeID','=', $id)
//     ->get()
//     ->first();

//     return view('showteacher', compact('teacher'));
// }