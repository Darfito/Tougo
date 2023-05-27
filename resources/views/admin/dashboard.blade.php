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
    <link rel="stylesheet" href="css/admin/dash.css">
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
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
          <li>
            <a href="/dash" class="active"
              ><span class="las la-igloo"></span><span>Dashboard</span></a
            >
          </li>
          <li>
            <a href="/dashCus"
              ><span class="las la-users"></span><span>Customers</span></a
            >
          </li>
          <li>
            <a href="/dashDes"
              ><span class="las la-map-marker-alt"></span
              ><span>Destination</span></a
            >
          </li>
          <li>
            <a href="/dashSto"
              ><span class="las la-book"></span><span>Stories</span></a
            >
          </li>
          <li>
            <a href="/login" 
              ><span class="las la-sign-out-alt"></span><span>Sign Out</span></a
            >
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
                <h3>Content</h3>
                <button>
                  See all <span class="las la-arrow-right"></span>
                </button>
              </div>

              <div class="cardd-body">
                <div class="table-responsive">
                  <table width="100%">
                    <thead>
                      <tr>
                        <td>Destination</td>
                        <td>Stories</td>
                        <td>Status</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>East Java</td>
                        <td>Malang</td>
                        <td>
                          <span class="status purple"></span>
                          Uploaded
                        </td>
                      </tr>
                      <tr>
                        <td>Center Java</td>
                        <td>Yogyakarta</td>
                        <td>
                          <span class="status pink"></span>
                          in progress
                        </td>
                      </tr>
                      <tr>
                        <td>West Java</td>
                        <td>Bandung</td>
                        <td>
                          <span class="status orange"></span>
                          pending
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="customers">
            <div class="cardd">
              <div class="cardd-header">
                <h3>New Customer</h3>
                <button>
                  See all <span class="las la-arrow-right"> </span>
                </button>
              </div>
              <div class="cardd-body">
                <div class="customer">
                  <div class="info">
                    <img
                      src="https://picsum.photos/200/300?random=1"
                      width="40px"
                      height="40px"
                    />
                    <div>
                      <h4>Noah Bahtera</h4>
                    </div>
                  </div>
                  <div class="contact">
                    <span class="las la-user-circle"></span>
                    <span class="las la-comment"></span>
                    <span class="las la-phone"></span>
                  </div>
                </div>

                <div class="customer">
                  <div class="info">
                    <img
                      src="https://picsum.photos/200/300?random=2"
                      width="40px"
                      height="40px"
                    />
                    <div>
                      <h4>Noah Bahtera</h4>
                    </div>
                  </div>

                  <div class="contact">
                    <span class="las la-user-circle"></span>
                    <span class="las la-comment"></span>
                    <span class="las la-phone"></span>
                  </div>
                </div>

                <div class="customer">
                  <div class="info">
                    <img
                      src="https://picsum.photos/200/300?random=3"
                      width="40px"
                      height="40px"
                    />
                    <div>
                      <h4>Noah Bahtera</h4>
                    </div>
                  </div>

                  <div class="contact">
                    <span class="las la-user-circle"></span>
                    <span class="las la-comment"></span>
                    <span class="las la-phone"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
