@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Manage Info</h5>
                        </div>
                        <hr/>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered" id="example2">
                                <thead>
                                <tr>
                                    <th>sl</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Designation</th>
                                    <th>Birth Date</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>City</th>
                                    <th>Degree</th>
                                    <th>Freelance</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                    <tbody>
                                    @php $i=1 @endphp
                                    @foreach($infos as $info)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$info->name}}</td>
                                        <td>{{$info->surname}}</td>
                                        <td>{{$info->designation}}</td>
                                        <td>{{$info->birthdate}}</td>
                                        <td>{{$info->email}}</td>
                                        <td>{{$info->phone}}</td>
                                        <td>{{$info->city}}</td>
                                        <td>{{$info->degree}}</td>
                                        <td>{{$info->freelance}}</td>
                                        <td>{{$info->description}}</td>
                                        <td>
                                            <img src="{{asset($info->image)}}" style="height:50px;width:50px" alt="">
                                        </td>
                                        <td>{{$info->status == 1 ? 'published' : 'unpublished' }}</td>
                                        <td>
                                            <a href="{{route('edit.info',['id'=>$info->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                            @if($info->status ==1)
                                                <a href="{{route('status',['id'=>$info->id])}}" class="btn btn-warning btn-sm">unpublished</a>
                                            @else
                                                <a href="{{route('status',['id'=>$info->id])}}" class="btn btn-success btn-sm">published</a>
                                                @endif
                                            <form action="{{route('delete')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="info_id" value="{{$info->id}}">
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
