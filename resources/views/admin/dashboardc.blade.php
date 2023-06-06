<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
    <link rel="stylesheet" href="css/admin/dashcus.css" />
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
            <a href="/dash"
              ><span class="las la-igloo"></span><span>Dashboard</span></a
            >
          </li> --}}
          <li>
            <a href="/dashCus" class="active"
              ><span class="las la-users"></span><span>Customers</span></a
            >
          </li>
          <li>
            <a href="dashDes"
              ><span class="las la-map-marker-alt"></span
              ><span>Destination</span></a
            >
          </li>
          <li>
            <a href="dashSto"
              ><span class="las la-book"></span><span>Stories</span></a
            >
          </li>

          <li>
            <a href="/dashSto"
              ><span class="las la-home"></span><span>Go Back to Content</span></a
            >
          </li>
          
          <li class="signout">
            <form action="/logout" method="POST">
              @csrf
              <button  type="submit" class="las la-sign-out-alt"><span>Sign Out</span></button></form>
            </li>
            {{-- <li>
              <a href="/login"
              ><span class="las la-sign-out-alt"></span><span>Sign Out</span></a>
            </li> --}}
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
            src="../../Assets/Icons/evening-sky.jpg"
            width="40px"
            height="40px"
            alt=""
          />
          <div>
            <h4>John Doe</h4>
            <small>Admin</small>
          </div>
        </div>
      </header>

      <main>
        <div class="card">
          <div class="card-single">
            <div>
              <h1>54</h1>
              <span>Customers</span>
            </div>
            <div>
              <span class="las la-users"></span>
            </div>
          </div>
          <div class="card-single">
            <div>
              <h1>54</h1>
              <span>Destination</span>
            </div>
            <div>
              <span class="las la-map-marker-alt"></span>
            </div>
          </div>
          <div class="card-single">
            <div>
              <h1>54</h1>
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
                <h3>Customers Table</h3>
                <div class="cardd-button">
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
                        <td>ID Customers</td>
                        <td>Fisrt Name</td>
                        <td>Last Name</td>
                        <td>Gender</td>
                        <td>Email</td>
                        <td>Phone No</td>
                        <td>Image</td>
                        {{-- <td>Action</td> --}}
                      </tr>
                    </thead>
                    <tbody>
                      @foreach( $data as $item)
                      <tr>

                        <td>{{  $item->id }}</td>
                        <td>{{  $item->firstname }}</td>
                        <td>{{  $item->lastname }}</td>
                        <td>{{  $item->gender }}</td>
                        <td>{{  $item->email }}</td>
                        <td>{{  $item->notelp }}</td>
                        <td>{{  $item->img }}</td>
                        {{-- <td>
                          <div class="action-icon">
                            <span class="las la-edit"></span>
                            <span class="las la-trash"></span>
                          </div>
                        </td> --}}
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
