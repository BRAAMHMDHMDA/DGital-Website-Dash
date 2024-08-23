<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="m-0">DGital</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="{{route('home')}}" class="nav-item nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home</a>
            <a href="{{route('home')}}#about" class="nav-item nav-link">About</a>
            <a href="{{route('home')}}#service" class="nav-item nav-link">Service</a>
            <a href="{{route('home')}}#project" class="nav-item nav-link">Project</a>
            <a href="{{route('home')}}#testimonial" class="nav-item nav-link">Testimonial</a>
            <a href="{{route('home')}}#team" class="nav-item nav-link">Team</a>
            <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>

        </div>
        <a href="#" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a>
    </div>
</nav>
