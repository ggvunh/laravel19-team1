<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;
use Auth;
use Cart;
use Hash;
use Toastr;
use Illuminate\Support\MessageBag;
use App\User;
use App\Http\Requests\editInformationRequest;

class AccountController extends Controller
{
        public function getOrders()
        {
            $user = User::find(Auth::user()->id);
            $orders = $user ->order() ->paginate(10);
            return view('account.list-bills', compact('orders'));
        }

        public function getOrderDetail($id)
        {
            $orederdetails = OrderDetail::where('order_id', $id)->get();
            return view('account.list-billdetail', compact('orderdetails', 'id'));
        }

        public function cancelOrders($id)
        {
            $data = Order::find($id);
            $data ->order_detail()->delete();
            $data->delete();
            return redirect('account/orderlists');
        }

        public function getInfo()
        {
            $info = Auth::user();
            return view('account.info', compact('info'));
        }

        public function postInfo(request $rq, editInformationRequest $request)
        {
            $edituser = Auth::user();
            $edituser->name = $rq->input('name');
            $edituser->address = $rq->input('address');
            $edituser->phone_number = $rq->input('phone');
            $edituser->gender = $rq->input('gender');
            $edituser->save();
            Toastr::success('Thay đổi thông tin thành công', $title = null, $options = []);
            return redirect()->back();
        }

        public function getPass()
        {
            return view('account.change-password');
        }

        public function postPass(request $rq)
        {
            $this->validate($rq,
            [
                'oldpassword' => 'required'
            ],
            [
                'oldpassword.required' => 'Vui lòng nhập mật khẩu cũ'
            ]
        );
            $user = Auth::user();
            if(Hash::check($rq ->input('oldpassword'), Auth::user() ->password )){
                $user ->password = bcrypt($rq ->input('newpassword'));
                $user->save();
                Toastr::success('Bạn đã đổi mật khẩu thành công', $title = null, $options = []);
                return redirect('/');
            }
            if(!(Hash::check($rq ->input('oldpassword'), Auth::user() ->password ))){
                $errors = new MessageBag(['oldpassword' => ['Mật khẩu cũ không chính xác']]);
                return back()->withErrors($errors)->withInput();
            }
            else
                return back();

                $this->validate($rq,
                    [
                        'newpassword' => 'required|string|min:6',
                        'repassword' => 'required|same:newpassword',
                        'oldpassword' => 'required'
                    ],
                    [
                        'newpassword.required' => 'Vui lòng nhập mật khẩu mới',
                        'repassword.required' => 'Vui lòng nhập mật khẩu xác nhận',
                        'repassword.same' => 'Mật khẩu không giống nhau',
                        'newpassword.min' => 'Mật khẩu có ít nhất 6 kí tự',

                    ]);
        }
}
