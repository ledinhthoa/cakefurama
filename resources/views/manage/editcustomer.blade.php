@extends('manage.master')
@section('title', 'Chỉnh sửa khách hàng')
@section('content')

    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>Chỉnh sửa khách hàng</h1></div>
            <div class="col-12">
                <form method="post" action="{{ route('manage.update', $customers->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input type="text" class="form-control" name="name" value="{{ $customers->name }}" required>
                    </div>
                    <div class="form-group">
                        <label>gioi tinh</label>
                        <input type="text" class="form-control" name="gioitinh" value="{{ $customers->gender }}" required></div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="email" class="form-control" name="email" value="{{ $customers->email }}" required>
                    </div>
                    <div class="form-group">
                                            <label>dia chi</label>
                                            <input type="text" class="form-control" name="diachi" value="{{ $customers->address }}" required>
                                        </div>
                     <div class="form-group">
                                             <label>phone_number</label>
                                             <input type="text" class="form-control" name="phone_number" value="{{ $customers->phone_number}}" required>
                                         </div>
                      <div class="form-group">
                                              <label>note</label>
                                              <input type="text" class="form-control" name="note" value="{{ $customers->note }}" required>
                                          </div>

                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>

@endsection
