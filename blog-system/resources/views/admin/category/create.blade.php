@extends('layouts.master')

@section('title','Category')

@section('content')

<div class="container-fluid px-4">
      
    <div class="card mt-4">
        <div class="card-header">
            
            <h4 class=""><i class="fas fa-plus-circle"></i> Add Category </h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error )
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif

            <form action="{{url('admin/add-category')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>Category Name</label>
                    <input type="text" name="name" class="form-control"/>
                </div>

                <div class="mb-3">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="5" id="mySummernote" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" />
                </div>

                <h6>SEO Tags</h6>
                <div class="mb-3">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label>Meta Keywords</label>
                    <textarea name="meta_keyword" rows="3" class="form-control"></textarea>
                </div>

                <h6>Status Mode</h6>
                <div class="row">
                <div>    
                <div class="col-md-3 mb-3 form-check form-switch">
                        <label for="" class="form-check-label" for="flexSwitchCheckDefault">Navbar Status</label>      
                        <input type="checkbox" class="form-check-input" name="navbar_status" id="flexSwitchCheckDefault" />
                           
                    </div>
                    <div class="form-check form-switch">
                        <label for="" class="form-check-label" for="flexSwitchCheckDefault">Status</label>      
                        <input type="checkbox" class="form-check-input" name="status" id="flexSwitchCheckDefault" />
                           
                    </div>
                    </div>
                    <div><br></div>
                    <div class="col-md-6">
                        <div>
                        
                        <button type="submit" class="btn btn-outline-primary float">Save Category</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection
