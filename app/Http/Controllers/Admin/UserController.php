<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\User;

class UserController extends Controller {
    protected $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function index()
    {
        return view('Admin.user.list', ['users' => $this->userModel->getAll()]);
    }


    public function getadd()
    {
        return view ( 'Admin.user.add' );

    }

    public function postadd(Request $req)
    {

        $this->validate($req, [
            'username' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|max:20',

        ], [
            'username.required' => 'Bạn chưa nhập tên người dùng',
            'username.min' => 'tên Người dùng phải có ít nhất 3 kỹ tự',

            'email.required' => 'Bạn chưa nhập Email',
            'email.email' => 'Bạn nhập sai định đạng email',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất 3 kỹ tự ',
            'password.max' => 'Mật khẩu chỉ đc nhiều nhất 20 kỹ tự ',

        ]);

        $addUser            = new User;
        $addUser-> username     = $req->username;
        $addUser-> password = $req->password;
        $addUser-> email    = $req->email;
        $addUser-> role     = $req->role;
        $addUser->save();
        return redirect() -> back() -> with('thanhcong', ' Tạo tài khoản thành công');

//        return redirect('Admin/user/add')->with('Thông Báo ', ' Thêm Thành Công ');

    }
}