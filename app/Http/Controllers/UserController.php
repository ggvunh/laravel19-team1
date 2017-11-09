<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\editUserRequest;
use Illuminate\Support\Facades\Input;
use App\Order;
use App\OrderDetail;
use Toastr;

class userController extends Controller
{
    public function listUsers()
    {

        $users = User::All();
        return view('admin.users.list-all-users', compact('users'));
    }

    public function deleteUsers($id)
    {
        $data = User::find($id);
        $data->delete();
        Toastr::success('Delete successful user', $title = null, $options = []);
        return redirect('user/listusers');
    }

    public function searchUser(Request $req)
    {
        $search_users = User::where('name', 'like', '%'.$req ->search_user.'%')
                    ->orWhere('address', 'like', '%'.$req->search_user.'%')
                    ->get();
        return view('admin.users.searchusers', compact('search_users'));
    }

    public function getOrderlists($id)
    {
        $orderlists = Order::Where('user_id', $id)->get();
        return view('admin.users.list-order', compact('orderlists'));
    }
}
