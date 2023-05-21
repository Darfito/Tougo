<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #354259;">
  <a class="navbar-brand" href="#">TOUGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse"   id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center" >
      <li class="nav-item active" >
        <a class="nav-link {{ ($title === "destination") ? 'active' : '' }}" style="color: whitesmoke;" href="/destination">Destination</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ($title === "stories") ? 'active' : '' }}" style="color: whitesmoke;" href="/stories">Stories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ($title === "about us") ? 'active' : '' }}"style="color: whitesmoke;" href="/aboutus">About Us</a>
      </li>
      <li class="nav-item me-2 ms-2">
        <a class="nav-link " style="color: whitesmoke;" href="/profile" ><img src="asset/img/evening-sky.jpg", style="border-radius: 50%;", width="43px" ></a>
      </li>
    </ul>
  </div>
</nav>