@include('includes.header')
    
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
            @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('login') }}">Log In</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('register') }}">Regsiter</a>
                </li>
                @endif
                @endauth
            @endif
            </ul>
        </div>
    </div>
</nav>

    
   
@include('includes.script')