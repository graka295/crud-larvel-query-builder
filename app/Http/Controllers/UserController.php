<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = DB::table("users")->get();
        return View("users.index",["dataUsers" => $users]);
    }
    public function create(){
        $user = new \stdClass();
        $user->id = "";
        $user->name = "";
        $user->email = "";
        $user->username = "";
        return View("users.add",["user" => $user]);
    }
    public function update($id){
        $users = DB::table("users")->find($id);
        return View("users.add",["user" => $users]);
    }
    public function delete($id){
        DB::table("users")->where("id",$id)->delete();
        return redirect('/');
    }
    public function post(UserRequest $request,$id = null){
        $validated = $request->validated();
        $data["name"] = $request->input("name");
        $data["email"] = $request->input("email");
        $data["username"] = $request->input("username");
        $data["password"] =  Hash::make($request->input("password"));
        if($id !== null){
            DB::table("users")->where("id",$id)->update($data);
        }else{
            DB::table("users")->insert($data);
        }
        return redirect('/');
    }
}
