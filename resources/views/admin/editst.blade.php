<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('css/admin/editst.css') }}" />
    <link rel="icon" href="https://img.icons8.com/badges/48/idea.png">
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
                    <a href="/dash"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="/dashCus"><span class="las la-users"></span><span>Customers</span></a>
                </li>
                <li>
                    <a href="/dashDes"><span class="las la-map-marker-alt"></span><span>Destination</span></a>
                </li>
                <li>
                    <a href="/dashSto" class="active"><span class="las la-book"></span><span>Stories</span></a>
                </li>
                <li>
                    <a href="../../Konten/Login.html"><span class="las la-sign-out-alt"></span><span>Sign Out</span></a>
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
                <img
            src={{ asset('storage/img_profile/' . Auth::user()->img) }}
            width="40px"
            height="40px"
            alt=""
          />
                <div>
                    <h4>{{ Auth::user()->firstname}}</h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>

        <main>
            <div class="center">
                <h1>Edit</h1>
                <form method="POST" action="/updatesto/{{ $data->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="txt_field">
                        <input id="name" type="name"
                            class="input form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ $data->name }}" required autocomplete="name">
                        <span></span>
                        <label>Stories Name</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="txt_field">
                        <select class="form_control" name="destination_id" id="destination_id">
                            <option value="">Select Province</option>
                            @foreach ($destinations as $item)
                                <option value='{{ $item->id }}'
                                    {{ $item->id == $data->destination_id ? 'selected' : '' }}>{{ $item->province }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="txt_field">
                        <input id="city" type="city"
                            class="input form-control @error('city') is-invalid @enderror" name="city"
                            value="{{ $data->city }}" required autocomplete="city">
                        <span></span>
                        <label>City</label>
                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="txt_field">
                        <input id="konten" type="konten"
                            class="input form-control @error('konten') is-invalid @enderror" name="konten"
                            value="{{ $data->konten }}" required autocomplete="konten">
                        <span></span>
                        <label>Tell Your Story</label>
                        @error('konten')
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
                                value="{{ $data->img }}" required autocomplete="img">
                            <span></span>
                            {{-- <label>Tell Your Story</label> --}}
                            @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </label>


                    <div class="loginn">
                        <a href="/dashSto">
                            <button type="submit" class="btn btn-primary" value="Save">
                                Edit
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>
