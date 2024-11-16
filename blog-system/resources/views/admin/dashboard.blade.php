@extends('layouts.master')
@section('title','Blog Dashboard')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">
            Dashboard
        </li>
    </ol>             
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-white text-white border border-primary border-2 shadow mb-4">
                <div class="card-body bg-primary shadow-sm">
                    Total Categories
                    <h2>{{ $categories }}</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-dark text-decoration-none stretched-link" href="{{ url('admin/category')}}">
                        View Details
                    </a>
                    <div class="small text-dark">
                        <i class="fas fa-angle-right">
                        </i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-white text-white border border-warning border-2 shadow mb-4">
                <div class="card-body bg-warning shadow-sm">
                    Total Posts
                    <h2>{{ $posts }}</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-dark text-decoration-none stretched-link" href="{{ url('admin/posts') }}">
                        View Details
                    </a>
                    <div class="small text-dark">
                        <i class="fas fa-angle-right">
                        </i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-white text-white border border-success border-2 shadow mb-4">
                <div class="card-body bg-success shadow-sm">
                    Total Users
                    <h2>{{ $users }}</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-dark text-decoration-none stretched-link" href="{{ url('admin/users') }}">
                        View Details
                    </a>
                    <div class="small text-dark">
                        <i class="fas fa-angle-right">
                        </i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-white text-white border border-danger border-2 shadow mb-4">
                <div class="card-body bg-danger shadow-sm">
                    Total Admin
                    <h2>{{ $admins }}</h2>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-dark stretched-link text-decoration-none" href="#">
                        View Details
                    </a>
                    <div class="small text-dark">
                        <i class="fas fa-angle-right">
                        </i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection