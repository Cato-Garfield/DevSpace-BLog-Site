@extends('layouts.master')
@section('title','View Post')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">

        

        <div class="card-header">
            <h4><i class="fas fa-list-ul"></i> View Post
                <a href="{{url('admin/add-post')}}" class="btn btn-outline-primary float-end ">Add Post</a>
            </h4>
        </div>
        <div class="card-body">

            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <div class="table-responsive">
                <table id="myDataTable" class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Post Name</th>
                            <th>status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $item)
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->category->name}}</td>
                                <td>{{ $item->name}}</td>                            
                                <td>{{ $item->status == 1 ? 'Hidden':'Visible'}}</td>
                                <td>
                                    <a href="{{url('admin/post/'.$item->id)}}" class="btn btn-outline-success"><i class="fas fas fa-pencil-alt"></i> Edit</a>
                                </td>
                                <td>
                                    <a href="{{url('admin/delete-post/'.$item->id)}}" class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

</div>

@endsection