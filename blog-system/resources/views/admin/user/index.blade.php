@extends('layouts.master')
@section('title','View Users')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">

        

        <div class="card-header">
            <h4><i class="fas fa-address-card"></i>
                View User
            </h4>
        </div>
        <div class="card-body">

            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
                <div class="table-responsive">
                <table id="myDataTable" class="table table-bordered table-hover">
                <thead class="tabale table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->name}}</td>
                            <td>{{ $item->email}}</td>                            
                            <td>{{ $item->role_as == 1 ? 'Admin':'User'}}</td>
                            <td>
                                <a href="{{ url('admin/user/' . $item->id) }}" class="btn btn-outline-success"><i class="fas fa-user-edit"></i> Edit</a>
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