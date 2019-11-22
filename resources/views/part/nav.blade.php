<nav class="navbar navbar-expand-md fixed-top  navbar-default pt-3">
    <div class="container">
        <a href="{{route('Home')}}" class="navbar-brand logo-text"><img src="{{asset('storage/images/home/logo.png')}}" width="50px" height="50px" id="logo">Jarvis</a>
        <button class="navbar-toggler navbar-dark drop-down" data-toggle="collapse" data-target="#mynav">
            <span class="navbar-toggler-icon" ></span>
        </button>
        <div   class="collapse navbar-collapse" id="mynav">
            <ul   class="navbar-nav ml-auto" id="nav-bar">
                <li class="nav-item pr-4">
                <a href="{{route('Home')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown pr-4">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
                    <div class="dropdown-menu">
                        <a href="{{route('Food')}}" class="dropdown-item">Food</a>
                        <hr>
                        <a href="{{route('Drink')}}" class="dropdown-item">Drink</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{route('Booktable')}}" class="nav-link pr-4">Book A Table</a>
                </li>
                <li class="nav-item">
                <a href="{{route('About')}}" class="nav-link ">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Contact')}}" class="nav-link ">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>