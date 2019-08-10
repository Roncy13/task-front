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
                  <h2>User List</h2> <a href = "./register.php" class = "btn btn-primary">Register</a>
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
                <br>
                   <form role="form" id = "register-form">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input required class="form-control" placeholder="First Name" type="text" id = "firstName">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Middle Name" type="text" id = "middleName">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input required class="form-control" placeholder="Last Name" type="text" id = "lastName">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Phone" type="text" id = "phone">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input required class="form-control" placeholder="Email" type="email" id = "email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input required class="form-control" placeholder="Password" type="password" id = "password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Title *</label>
                    </div>
                    <select required required class="custom-select" id="position" id = "position">
                      <option selected>Choose...</option>
                    </select>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4">Save</button>
                </div>
              </form>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

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
            
            editBtn.attr('class', ' btn btn-primary edit-user');
            deleteBtn.attr('class', ' btn btn-danger delete-user');

            editBtn.html('Edit');
            deleteBtn.html('Delete');

            // Getting IDS
            editBtn.attr('data-id', row.id);
            deleteBtn.attr('data-id', row.id);

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

      var position = $('#position');
      var userPick = null;

      $.ajax({
        url: 'http://localhost/task-back/router/position.php',
        method: 'get',
        success: function(response) {
          response.forEach(function(row) {

            var option = $('<option></option>');

            option.html(row.title);
            option.attr('value', row.id);

            position.append(option);

          })
        }
      })

      $('#user-list').on('click' , '.edit-user', function() {
        var id = $(this).attr('data-id');
        userPick = id;

        $.ajax({
          method: 'GET',
          url: 'http://localhost/task-back/router/read_by_id_user.php?id=' + id,
          success: function(response) {

            $('#firstName').val(response.firstName);
            $('#middleName').val(response.middleName);
            $('#lastName').val(response.lastName);
            $('#phone').val(response.phone);
            $('#email').val(response.email);
            $('#password').val(response.userPass);
            $("#position").val(response.position_id).change();
          }
        });

      });

       $('#user-list').on('click' , '.delete-user', function() {
        var id = $(this).attr('data-id');
       
        $.ajax({
          method: 'DELETE',
          url: 'http://localhost/task-back/router/delete_user.php?',
          data: {
            id: id
          },
          success: function(response) {

            console.log(response);
            alert('You have deleted successfully');
            location.reload();
          }
        });

      });

      $('#register-form').submit(function() {
        event.preventDefault();

        var data = {
          firstName: $('#firstName').val(),
          middleName: $('#middleName').val(),
          lastName: $('#lastName').val(),
          phone: $('#phone').val(),
          email: $('#email').val(),
          password: $('#password').val(),
          position_id: $('#position :selected').val(),
          id: userPick
        };

        $.ajax({
          method: 'PUT',
          url: 'http://localhost/task-back/router/update_user.php',
          data: data,
          success: function(response) {
            console.log(response);
            alert('You have successfully edited user');
            location.reload();
          },
          error: function(resp) {
            console.log(resp);
          }
        });
       
      })

    });
  </script>
</body>

</html>