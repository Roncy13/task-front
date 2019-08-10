<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Page content -->
    <div class="container mt-5 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-center">
                  <h2>User List</h2>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
                <table class = "table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Position</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody id = "user-list"></tbody>
                </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>

  <script>
    $(document).ready(function() {
      var userList = $('#user-list');

      $.ajax({
        url: 'http://localhost/task-back/router/read_user.php',
        method: 'GET',
        success: function(response) {
          var data = response;

          data.forEach(function (row) {
            var id = $('<td></td>');
            var fullName = $('<td></td>');
            var position = $('<td></td>');
            var action = $('<td></td>');
            var tr = $('<tr></tr>');

            var editBtn = $('<button></button>');
            var deleteBtn = $('<button></button>');


            id.html(row.id);
            fullName.html(row.fullName);
            position.html(row.title);
            
            editBtn.attr('class', ' btn btn-primary');
            deleteBtn.attr('class', ' btn btn-danger');

            editBtn.html('Edit');
            deleteBtn.html('Delete');

            action.append(editBtn);
            action.append(deleteBtn);

            tr.append(id);
            tr.append(fullName);
            tr.append(position);
            tr.append(action);

            userList.append(tr);
          });
        }
      });

    });
  </script>
</body>

</html>