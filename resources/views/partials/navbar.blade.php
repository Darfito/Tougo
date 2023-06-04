<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #354259;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">TOUGO</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center navbar-nav-scroll"
                style="--bs-scroll-height: 100px;">
                <li class="nav-item active">
                    <a class="nav-link {{ $title === 'destination' ? 'active' : '' }}" style="color: whitesmoke;"
                        href="/destination">Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'stories' ? 'active' : '' }}" style="color: whitesmoke;"
                        href="/stories">Stories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'about us' ? 'active' : '' }}"style="color: whitesmoke;"
                        href="/aboutus">About Us</a>
                </li>
                <li class="nav-item dropdown me-2 ms-2">
                    <a class="nav-link dropdown-toggle" style="color: whitesmoke;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img
                            src="asset/img/evening-sky.jpg", style="border-radius: 50%;", width="43px">
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item d-flex flex-row" href="/profile">Profile</a></li>
                      <li><hr class="dropdown-divider"></li>
                        <li>
                          <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex flex-row">Log Out</button>
                          </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
