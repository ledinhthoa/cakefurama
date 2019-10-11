<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Service;
use Session;
class ManageController extends Controller
{
    public  function index(){
        $customer = Customer::all();
        return view('manage.managecustomer',compact('customer'));
    }
    public function destroy($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();

        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa khách hàng thành công');

        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('manage.index');
    }
    public function edit($id){
        $customers = Customer::findOrFail($id);
        return view('manage.editcustomer', compact('customers'));
    }
    public function update(Request $request, $id){
        $customer = Customer::findOrFail($id);
        $customer->name     = $request->input('name');
        $customer->gender    = $request->input('gioitinh');
        $customer->email    = $request->input('email');
        $customer->address  = $request->input('diachi');
        $customer->phone_number  = $request->input('phone_number');
        $customer->note = $request->input('note');
        $customer->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật khách hàng thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('manage.index');
    }
    public  function indexservice(){
        $service = Service ::all();
        return view('manage.manageservice',compact('service'));
    }
    public function editmanage($id){
        $service = Service::findOrFail($id);
        return view('manage.editmanage', compact('service'));
    }
    public function updatemanage(Request $request, $id){
        $service = Service::findOrFail($id);
        $service->name_service     = $request->input('name');
        $service->id_type    = $request->input('id_type');
        $service->acreage    = $request->input('acreage');
        $service->max_number  = $request->input('max_number');
        $service->image  = $request->input('image');
        $service->price = $request->input('price');
        $service->type_rent = $request->input('type_rent');
        $service->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật khách hàng thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('manage.indexservice');
    }
    public function destroymanage($id){
        $service = Service::findOrFail($id);
        $service->delete();

        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa khách hàng thành công');

        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('manage.indexservice');
    }
    public function create(){
        return view('manage.create');
    }
    public function store(Request $request){
        $this->validate($request,
            [
                'name_service'=>'required',
                'price'=>'required'|'',


            ],
            [

                'name_service.required'=>'name ko duoc de trong',

                'price.required'=>'ko duoc de trong'

            ]
        );
        $service = new Service();
        $service->name_service    = $request->input('name_service');
        $service->id_type   = $request->input('id_type');
        $service->acreage    = $request->input('acreage');
        $service->max_number  = $request->input('max_number');
        $service->image  = $request->input('image');
        $service->price  = $request->input('price');
        $service->type_rent  = $request->input('type_rent');
        $service->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới khách hàng thành công');
        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('manage.indexservice');
    }


}
