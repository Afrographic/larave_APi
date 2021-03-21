<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use App\Models\User;

class UserController extends Controller
{
    function addMember(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->address = $req->address;
        $user->email = $req->email;

        $user->save();
        return $req->input();
    }

    function delete($id){
        $user = User::find($id);
        $user->delete();
        return "You deleted that shit!";
    }

    function update(Request $req,$id){
        $user = User::find($id);
        $user->name = $req->name;
        $user->address = $req->address;
        $user->email = $req->email;
        $user->save();
        return "You updated that thing!";
    }

    function operations(){
        // return DB::table("users")->min('id');
        // return DB::table("users")->max('id');
        return DB::table("users")->avg('id');
    }
}
