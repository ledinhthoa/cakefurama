@extends('manage.master')
@section('content')
	<div class="col-12">
            <div class="row">
                <div class="col-12"><h1> manager customer</h1></div>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">stt</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">gioi tinh</th>
                        <th scope="col">Email</th>
                         <th scope="col">dia chi</th>
                         <th scope="col">ngay sinh</th>
                         <th scope="col">phone_number</th>
                         <th scope="col">note</th>
                         <th scope="col">action</th>

                    </tr>
                      </thead>
                  <tbody>
                    @foreach($customer as $key=>$customers)
                    <tr>
                        <td>{{++$key}}</td>
                         <td>{{$customers->name}}</td>
                         <td>{{$customers->gender}}</td>
                          <td>{{$customers->email}}</td>
                           <td>{{$customers->address}}</td>
                           <td>{{$customers->gender}}</td>
                            <td>{{$customers->phone_number}}</td>
                             <td>{{$customers->note}}</td>
                              <td><a href="{{ route('manage.edit', $customers->id) }}">edit</a></td>
                                <td><a href="{{ route('manage.destroy', $customers->id) }}"
                                            class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">delete</a></td>
                    </tr>
                     @endforeach

                  </tbody>
                 </table>


            </div>

@endsection
