<div class="global-navbar"></div>
<div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="{{ url('/') }}">
                <img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="DevSpace-logo">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    @php
                        $categories = App\Models\Category::where('navbar_status', '0')->where('status', '0')->get();
                    @endphp
                    @foreach ($categories as $cateitem)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('tutorial/'.$cateitem->slug) }}">{{ $cateitem->name }}</a>
                        </li>
                    @endforeach

                    @if (Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->role_as == '1') 
                                    <a class="dropdown-item" href="{{ url('/admin/dashboard') }}"><i class='fas fa-crown' style="color:goldenrod"></i>Dashboard</a>
                                    <div class="dropdown-divider"></div>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}" 
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endif 
                </ul>
            </div>
        </div>
    </nav>
</div>
