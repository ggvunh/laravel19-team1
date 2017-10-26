<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\editUserRequest;
use Illuminate\Support\Facades\Input;
use App\Bill;
use App\BillDetail;
use Toastr;

class userController extends Controller
{
    public function listUsers()
    {
        $users = User::All();
        return view('users.list-user', compact('users'));
    }

    public function getEditUsers($id)
    {
        $user = User::find($id);
        return view('users.edit-user', compact('user'));
    }

    public function postEditUsers($id ,Request $rq, editUserRequest $request )
    {
        $data = User::find($id);
        $name = $rq->input('user-name');
            if ($name != null) $data ->name=$name;
        $data->gender = $rq->input('gender');
        $data->roles = $rq->input('roles');
        $email = $rq->input('email');
            if ($email != null) $data ->email=$email;
        $phone_number = $rq->input('phone_number');
            if ($phone_number != null) $data ->phone_number=$phone_number;
        $data->save();
        Toastr::success('Edit successful user', $title = null, $options = []);
        return redirect('admin/user/listusers');
    }

    public function deleteUsers($id)
    {
        $data = User::find($id);
        $data->delete();
        Toastr::success('Delete successful user', $title = null, $options = []);
        return redirect('admin/user/listusers');
    }

    public function searchUser(Request $req)
    {
        $search_users = User::where('name', 'like', '%'.$req ->search_user.'%')
                    ->orWhere('address', 'like', '%'.$req->search_user.'%')
                    ->get();
        return view('users.searchuser', compact('search_users'));
    }

    public function getOrderlists($id)
    {
        $orderlists = Bill::Where('user_id', $id)->get();
        return view('users.list-order', compact('orderlists'));
    }
}
