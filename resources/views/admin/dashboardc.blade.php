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
    <link rel="stylesheet" href="../../css/dashboardc.css" />
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
            <a href="../../Konten/Dashboard/dashboard.html"
              ><span class="las la-igloo"></span><span>Dashboard</span></a
            >
          </li>
          <li>
            <a href="../../Konten/Dashboard/dashboardc.html" class="active"
              ><span class="las la-users"></span><span>Customers</span></a
            >
          </li>
          <li>
            <a href="../../Konten/Dashboard/dashboardd.html"
              ><span class="las la-map-marker-alt"></span
              ><span>Destination</span></a
            >
          </li>
          <li>
            <a href="../../Konten/Dashboard/dashboard_st.html"
              ><span class="las la-book"></span><span>Stories</span></a
            >
          </li>
          <li>
            <a href="../../Konten/Login.html"
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
                <h3>Customers Table</h3>
                <div class="cardd-button">
                  <button>
                    <span class="las la-plus"></span>
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
                        <td>ID Customers</td>
                        <td>Fisrt Name</td>
                        <td>Last Name</td>
                        <td>Gender</td>
                        <td>Email</td>
                        <td>Phone No</td>
                        <td>Action</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>001</td>
                        <td>Noah</td>
                        <td>Bahtera</td>
                        <td>Male</td>
                        <td>xxxx@email.con</td>
                        <td>14045</td>
                        <td>
                          <div class="action-icon">
                            <span class="las la-edit"></span>
                            <span class="las la-trash"></span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>002</td>
                        <td>Tim</td>
                        <td>Balland</td>
                        <td>Male</td>
                        <td>xxxx@email.con</td>
                        <td>500505</td>
                        <td>
                          <div class="action-icon">
                            <span class="las la-edit"></span>
                            <span class="las la-trash"></span>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>001</td>
                        <td>Taylor</td>
                        <td>Swift</td>
                        <td>Female</td>
                        <td>xxxx@email.con</td>
                        <td>045654</td>
                        <td>
                          <div class="action-icon">
                            <span class="las la-edit"></span>
                            <span class="las la-trash"></span>
                          </div>
                        </td>
                      </tr>
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
