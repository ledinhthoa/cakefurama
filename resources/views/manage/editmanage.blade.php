@extends('manage.master')
@section('title', 'Chỉnh sửa khách hàng')
@section('content')

    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>chinh sua  dich vu</h1></div>
            <div class="col-12">
                <form method="post" action="{{ route('manage.updatemanage', $service->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên dich vu</label>
                        <input type="text" class="form-control" name="name" value="{{$service->name_service }}" required>
                    </div>
                    <div class="form-group">
                        <label>id_type</label>
                        <input type="text" class="form-control" name="id_type" value="{{ $service->id_type }}" required></div>
                    <div class="form-group">
                        <label>dien tich</label>
                        <input type="text" class="form-control" name="acreage" value="{{ $service->acreage }}" required>
                    </div>
                    <div class="form-group">
                                            <label>so luong nguoi toi da</label>
                                            <input type="text" class="form-control" name="max_number" value="{{ $service->max_number }}" required>
                                        </div>
                     <div class="form-group">
                                             <label>hinh anh</label>
                                             <input type="text" class="form-control" name="image" value="{{ $service->image}}" required>
                                         </div>
                      <div class="form-group">
                                              <label>price</label>
                                              <input type="text" class="form-control" name="price" value="{{ $service->price }}" required>
                                          </div>
                       <div class="form-group">
                                                 <label>kieu thue</label>
                                                  <input type="text" class="form-control" name="type_rent" value="{{ $service->type_rent }}" required>
                                                  </div>


                    <button type="submit" class="btn btn-primary">insert</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>

@endsection
