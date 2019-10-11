<?php

namespace App\Http\Controllers;

use App\Contract;
use App\Service_Detail;
use Illuminate\Http\Request;
use App\Slide;
use App\Service;
use Hash;
use App\User;
use Auth;
use App\Customer;

use Session;
class PageController extends Controller
{
    public function getIndex()
    {
        $slide= Slide::all();
        $new_service= Service ::paginate(8);
        return view('page.home',compact("slide","new_service"));
    }
    public function getdetails(Request $req){
        $service=Service::where('id',$req->id)->first();
        return view("page.detailsservice",compact('service'));

    }
    public function getCheckout($id){
        $datphong=Service::find($id);
        return view('page.datphong',compact('datphong'));
    }

    public function postCheckout(Request $req){
        $customer = new Customer();
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->birth = $req->birth;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone_number;
        $customer->note = $req->notes;
        $customer->save();
        $contact= new Contract();
        $contact->id_customer=$customer->id;
        $contact->date_hire=$req->date_hire;
        $contact->date_pay=$req->date_pay;
        $contact->quantity=$req->quantity;
        $contact->unit_price=$req->unit_price;
        $contact->total_price=$req->total_price;
        $contact->payment=$req->payment_method;
        $contact->note=$req->notes;
        $contact->save();




        return redirect()->back()->with('thongbao','Đặt hàng thành công');

    }
    public function getAbout(){
        return view("page.about");
    }
    public function getContact(){
        return view("page.contact");
    }
    public function getLogin(){
        return view('page.login');
    }
    public function getSignin(){
        return view('page.register');
    }
    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]
        );
        $credentials = array('email'=>$req->email,'password'=>$req->password);
//        $user = User::where([
//            ['email','=',$req->email],
//            ['status','=','1']
//        ])->first();

        if(Auth::attempt($credentials)){
            if(Auth::attempt($credentials)){

                return redirect(route('manage.index')) ;
            }
            else{
                return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
            }
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']);
        }

    }
    public function postSignin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',

                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        $user = new User();
        $user->name = $req->name;
        $user->password = Hash::make($req->password);
        $user->email = $req->email;
        $user->full_name = $req->full_name;
        $user->birth_date= $req->birth_date;
        $user->gender = $req->gender;
        $user->phome_number = $req->phone_number;
        $user->address = $req->address;
        $user->save();


        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }
    public function postLogout(){
        Auth::logout();
        return redirect()->route('home');
    }
    public function getsearch(Request $req){
        $service=Service::where('name_service','like','%'.$req->key.'%')
            ->orwhere('price',$req->key)->get();
        return view('page.search',compact('service'));

    }


}
