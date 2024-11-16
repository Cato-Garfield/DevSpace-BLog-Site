<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Subrayada:wght@400;700&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Summernote CSS Link-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">  
     
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
</head>
<body>

    @include('layouts.inc.admin-navbar')

    <div id="layoutSidenav">
        @include('layouts.inc.admin-sidebar')
    </div>

    <div id="layoutSidenav_content">
        <main>
            @yield('content') 

        </main>

        @include('layouts.inc.admin-footer')              
    </div>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script> 

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script> 

    <!-- Summernote JS CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
    $(document).ready(function() {

        $("#mySummernote").summernote({
            height:150,
        });

        $('.dropdown-toggle').dropdown();

    });
</script>

<script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<script>
    $(document).ready( function() {
        $('#myDataTable').DataTable();
    });
</script>

<style>
    
    .post-code-bg {
    width: fit-content;
    min-width: 100%;
    background-color: #212121 !important;
    width: 100% !important;
    overflow-x: scroll !important;
    position: relative;
    padding: 1rem 1rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;

}
</style>

@yield('scripts')
</body>    
</html>