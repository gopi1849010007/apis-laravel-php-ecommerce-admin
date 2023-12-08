<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Site_user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class Site_user_Controller extends Controller
{

function set_user(Request $req){
    $site_user=new Site_user;
    $site_user->email_address=$req->input('email_address');
    $site_user->phone_number=$req->input('phone_number');
    $site_user->password=Hash::make($req->input('password'));
    $site_user->name=$req->input('name');
    $site_user->save();

 return $site_user;
}

function get_user(Request $req){

    $users=Site_user::all();

    return $users;
}

function login(Request $req){
$user=Site_user::where('email_address',$req->email_address)->first();

if( !$user || !Hash::check($req->password,$user->password))
{
return response([
    'error'=>["email or password is not matched"]
]);

}


return $user;

}


}
