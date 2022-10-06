
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register &mdash; Form </title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/register/css/style.css">
  <link rel="stylesheet" href="../assets/register/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="../assets/register/img/logo.png" alt="logo" width="90" class="shadow-light rounded-circle">
            </div>

            <div class="card card-dark">
              <div class="card-header"><h4>Register</h4></div>
        
              <div class="card-body">
                <form method="POST" action="/addData" class="needs-validation" novalidate="">
                    @csrf

                    @if ($message = Session::get('sukses'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data dismiss="alert">x</button>
                            <strong style="font-size: 20px">{{ $message }}</strong>
                        </div>
                    @endif  

                   <div class="form-group">
                        <label for="name">Nama</label>
                        <input id="name" type="text" class="form-control" name="name" tabindex="1" required autofocus>
                        <div class="invalid-feedback">
                          Please fill in your name
                        </div>
                  </div> 

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="2" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">    
                    <div class="input-group">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="3" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nik">NIK</label>
                    <input id="nik" type="tel" class="form-control" name="nik" tabindex="4" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tgllahir">Tanggal</label>
                    <input id="tgllahir" type="date" class="form-control" name="tgllahir" tabindex="5" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="img">Profile Picture</label>
                    <input id="img" type="file" class="form-control" name="image" tabindex="6" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Role</label>
                    <select class="form-control selectric" name="role">
                      <option>Tamu</option>
                      <option>Admin</option>
                      <option>Resepsionis</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-lg btn-block" tabindex="7">
                      Register
                    </button>
                  </div>
                </form>
                <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row">
                  <div class="text-center col">
                    <a class="btn btn-warning btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="text-center col">
                    <a class="btn btn-primary btn-twitter">
                      <span class="fab fa-twitter"></span> Twitter
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
               <a href="login">Have an account?</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Firdan Umar 2022
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/register/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="../assets/register/js/scripts.js"></script>
  <script src="../assets/register/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>