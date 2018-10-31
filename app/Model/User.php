<?php
namespace App\Model;
use DB;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function getAll()
    {
        $user = DB::select('SELECT * FROM users ');
            return $user;
    }

}
//class addUser
//{
//
//    public function addAdd()
//    {
//        $addUser = DB::insert('insert into users (username, password, email, role)');
//
//    }
//}