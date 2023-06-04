<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('css/admin/createdes.css') }}" />
    <title>Admin</title>
</head>

<body>
    <div class="sidebar">
        <div class="sidebar--brand">
            <h1><span class="judul jud-tougo"></span><span>TOUGO</span></h1>
        </div>

        <div class="sidebar--menu">
            <ul>
                <li>
                    <a href="/dash"><span
                            class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="/dashCus"><span
                            class="las la-users"></span><span>Customers</span></a>
                </li>
                <li>
                    <a href="/dashDes" class="active"><span
                            class="las la-map-marker-alt"></span><span>Destination</span></a>
                </li>
                <li>
                    <a href="/dashSto"><span
                            class="las la-book"></span><span>Stories</span></a>
                </li>
                <li>
                    <a href="/login"><span class="las la-sign-out-alt"></span><span>Sign Out</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>

            <div class="user-wrapper">
                <img src="../../Assets/Icons/evening-sky.jpg" width="40px" height="40px" alt="" />
                <div>
                    <h4>John Doe</h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>

        <main>
            <div class="center">
                <h1>Edit</h1>
                <form method="POST" action="/update/{{ $data->id }}">
                    @csrf
                    @method('PUT')
                    <div class="txt_field">
                        <input id="province" type="province"
                            class="input form-control @error('province') is-invalid @enderror" name="province"
                            value="{{ $data->province }}" required autocomplete="province">
                        <span></span>
                        <label>Province</label>
                        @error('province')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                     {{-- input gambar --}}
                    <label for="images" class="drop-container">
                        <div class="file">
                            <span class="drop-title">
                                Drop Files here
                            </span>
                            or
                            <input id="img" type="file"
                                class="input form-control @error('img') is-invalid @enderror" name="img"
                                value="{{ old('img') }}" required autocomplete="img">
                            <span></span>
                            @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </label>
                    
                    <div class="loginn">
                        <button type="submit" class="btn btn-primary" value="Save">
                            Edit
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>
