<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <link rel="stylesheet" href="css/admin/dashd.css" />
    <link rel="icon" href="https://img.icons8.com/badges/48/idea.png">
    <title>Admin</title>
</head>

<body>
    <input type="checkbox" id="nav-toggle" />
    <div class="sidebar">
        <div class="sidebar--brand">
            <h1><span class="judul jud-tougo"></span><span>TOUGO</span></h1>
        </div>

        <div class="sidebar--menu">
            <ul>
                {{-- <li>
                    <a href="/dash"><span
                            class="las la-igloo"></span><span>Dashboard</span></a>
                </li> --}}
                <li>
                    <a href="/dashCus"><span class="las la-users"></span><span>Customers</span></a>
                </li>
                <li>
                    <a href="/dashDes" class="active"><span
                            class="las la-map-marker-alt"></span><span>Destination</span></a>
                </li>
                <li>
                    <a href="/dashSto"><span class="las la-book"></span><span>Stories</span></a>
                </li>

                <li>
                    <a href="/stories"><span class="las la-home"></span><span>Go Back to Content</span></a>
                </li>

                <li class="signout">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="las la-sign-out-alt"><span>Sign Out</span></button>
                    </form>
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
            <div class="card">
                <div class="card-single">
                    <div>
                        <h1>{{ \App\Models\User::count() }}</h1>
                        <span>User</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>{{ \App\Models\destination::count()}}</h1>
                        <span>Destination</span>
                    </div>
                    <div>
                        <span class="las la-map-marker-alt"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>{{ App\Models\Stories::count() }}</h1>
                        <span>Stories</span>
                    </div>
                    <div>
                        <span class="las la-book"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="stories">
                    <div class="cardd">
                        <div class="cardd-header">
                            <h3>Destination Table</h3>
                            <div class="cardd-button">
                                <button>
                                    <a href="/create">
                                        <span class="las la-plus">
                                        </span>
                                    </a>
                                </button>
                                <button>
                                    See all <span class="las la-arrow-right"></span>
                                </button>
                            </div>
                        </div>

                        <div class="cardd-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>ID Destination</td>
                                            <td>Image</td>
                                            <td>Province</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->img }}</td>
                                                <td>{{ $item->province }}</td>
                                                <td>
                                                    <div class="action-icon">
                                                        <a href="/edit/{{ $item->id }}">
                                                            <span class="las la-edit"></span>
                                                        </a>
                                                        <form action="/delete/{{ $item->id }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit">
                                                                <span class="las la-trash"></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
