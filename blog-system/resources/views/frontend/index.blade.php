@extends('layouts.app')


@section('content')

    <div class="bg-light border border-dark border-top py-3 mt-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="owl-carousel category-carousel owl-theme">

                        @foreach ($all_categories as $all_cate_item)
                        
                        <div class="item shadow-lg">
                            <a href="{{ url('tutorial/'.$all_cate_item->slug) }}" class="text-decoration-none">
                                <div class="card">
                                    <img src="{{ asset('uploads/category/'.$all_cate_item->image) }}" alt="Image">
                                    <div class="card-body bg-dark text-center">
                                        <h4 class="text-white">{{ $all_cate_item->name }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>

                        @endforeach
                    
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
<div class="py-2">
    <div class="container">
        <div class="row ">
            <div class="col-md-6">
                <h4>DevSpace</h4>
                <div class="underline"></div>
                <p>
                    Welcome to DevSpace – a vibrant community built by developers, for developers. Here, you can find insightful guides, tutorials, and tips covering a wide range of programming languages and technologies. DevSpace is designed to be a space for learning and collaboration, whether you're an experienced coder or just beginning your journey.
                </p>
                <p>
                    Join us in building a rich library of knowledge, one post at a time. Empower developers worldwide by sharing your expertise and connecting with like-minded individuals. Explore, contribute, and connect—welcome to your new DevSpace!
                </p>
            </div>
            <div class="col-md-6"style="text-align: center;">
    <img src="{{ url('assets/images/lang.png') }}" alt="image" style="height:75%; width:auto; display: inline-block;">
</div>

        </div>
    </div>
</div>

<div class="py-4 border-top  border-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>All Categories List</h4>
                <div class="underline"></div>
                
               
                    </div>
                    @foreach ($all_categories as $all_cateitem)
                        <div class="col-md-3"> 

                        <div class="card card-body bg-primary shadow mb-3">
                            <a href="{{ url('tutorial/'.$all_cateitem->slug ) }}" class="text-decoration-none">
                                <h4 class="text-white mb-0">
                                    {{ $all_cateitem->name }}
                                </h4>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

<div class="py-4 border-top  border-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <h4>Latest Posts</h4>
                    <div class="underline"></div>
                </div>
                <div class="col-md-8">
                    @foreach ($latest_posts as $latest_post_item) 
                        <div class="card card-body bg-white shadow mb-3">
                            <a href="{{ url('tutorial/'.$latest_post_item->category->slug.'/'.$latest_post_item->slug ) }}" class="text-decoration-none">
                                <h4 class="text-dark mb-0">
                                    {{ $latest_post_item->name }}
                                </h4>
                                </a>
                                <h6>Posted On: {{ $latest_post_item->created_at->format('d-m-Y')}}</h6>
                            </div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <div class="border text-center p-3">
                        <h3>Advertisement here</h3>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection