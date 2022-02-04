<?php
error_reporting(0);
session_start();
if(isset($_POST['login'])){
  $user = $_POST['username'];
  $pass = $_POST['password'];

  if($user == 'Alya Zalfa' AND $pass == '150500') {
    //membuat session
    $_SESSION['berhasil']= true;
    header("location: Home.php");
  }
  else if ($user == 'Hanafi Ar-Rasyid' AND $pass == '270300'){
    $_SESSION['berhasil']= true;
    header("location: Home.php");
  }
  else if($user == 'Annisa Azzaria' AND $pass == '160100'){
    $_SESSION['berhasil']= true;
    header("location: Home.php");
  }
  else if($user == 'Rahmat Sadeli' AND $pass == '140200'){
    $_SESSION['berhasil']= true;
    header("location: Home.php");
  }
  else {
    $salah = "<div class='alert alert-danger d-flex align-items-center' role='alert' style='height: 10px; width:340px; margin: 1px;'>
                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-exclamation-triangle-fill flex-shrink-0 me-2' viewBox='0 0 17 17' role='img' aria-label='Warning:'>
                  <path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
                </svg>
                <div>
                  Username or password is incorrect!!
                </div>
              </div>";
      }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="darkmodeLogin.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="shortcut icon" href="favicon_io/favicon.ico">
    <link rel="manifest" href="/site.webmanifest">
    <title>Login - library.io</title>
</head>
<body>
    <div class="global-container" style="height: -100px; display: flex; align-items: center; justify-content: center; padding-top: 7rem;">
        <div class="card login-form" style="padding: 20px; padding-top: 1px; width: 380px; height: 440px; background-color: #E8E1D9; border-radius: 20px;">
            <div class="card-body">
                <h1 class="card-title text-center" style="font-family: Poetsen One;">L O G I N</h1>
            </div>
            <div class="card-text">
            <?php echo $salah; ?> 
                <form action="" method="post">
                    <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="rememberMe">
                      <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <div class="d-grid gap-2">
                      <button type="submit" name="login" class="btn btn" style="background-color: #4E9F3D; font-family: Arial Rounded MT; margin-top: 1px;">Login</button>
                    </div>
                    <div class="signup">
                      Don't have an account ?  <a href="#">Sign Up</a>
                    </div>
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="darkSwitch">
                      <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="p-2 text-center" style="background-color: #4E9F3D; margin-top: 85px;">
      <p class="text-lg-center" style="font-family: Montserrat; font-size: 18px; color: black;">&copy 2021 All reserved | Design by Zhalz&Friend</p>
    </footer>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dark-mode-switch.min.js"></script>
</body>
</html>