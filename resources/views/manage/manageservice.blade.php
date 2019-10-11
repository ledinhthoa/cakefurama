@extends('manage.master')
@section('content')
	<div class="col-12">
            <div class="row">
                <div class="col-12"><h1> manager service</h1></div>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">stt</th>
                        <th scope="col">name_service</th>
                        <th scope="col">id_type</th>
                        <th scope="col">acreage</th>
                         <th scope="col">max_number</th>
                         <th scope="col">image</th>
                         <th scope="col">price</th>
                         <th scope="col">type_rent</th>
                         <th scope="col">action</th>
                    </tr>
                      </thead>
                  <tbody>
                    @foreach($service as $key=>$service)
                    <tr>
                        <td>{{++$key}}</td>
                         <td>{{$service->name_service}}</td>
                         <td>{{$service->id_type}}</td>
                          <td>{{$service->acreage}}</td>
                           <td>{{$service->max_number}}</td>
                           <td>{{$service->image}}</td>
                            <td>{{$service->price}}</td>
                             <td>{{$service->type_rent}}</td>
                              <td><a href="{{ route('manage.editmanage', $service->id) }}">edit</a></td>
                                <td><a href="{{ route('manage.destroy', $service->id) }}"
                                            class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">delete</a></td>
                    </tr>
                     @endforeach

                  </tbody>
                 </table>

<div>
 <button type="submit" class="btn btn-primary"><a href="{{ route('manage.create') }}">create</a></button>
</div>
            </div>

@endsection
