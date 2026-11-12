<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Create account | MED-e</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/Med-e logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="med-e-premium.css">
  <script>
    var check = function () {
      var message = document.getElementById('message');
      if (document.getElementById('password').value === document.getElementById('cpassword').value) {
        message.style.color = '#496B5C'; message.innerHTML = 'Passwords match';
      } else {
        message.style.color = '#A64C48'; message.innerHTML = 'Passwords do not match';
      }
    };
    function alphaOnly(event) {
      var key = event.keyCode;
      return ((key >= 65 && key <= 90) || key === 8 || key === 32);
    }
    function checklen() {
      var pass1 = document.getElementById('password');
      if (pass1.value.length < 6) {
        alert('Password must be at least 6 characters long. Try again!');
        return false;
      }
    }
  </script>
</head>
<body class="auth-landing">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="fa fa-hospital-o" aria-hidden="true"></i>&nbsp; MED-e</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive"><ul class="navbar-nav ml-auto"><li class="nav-item"><a class="nav-link" href="index.php">Home</a></li><li class="nav-item ml-lg-4"><a class="nav-link" href="index1.php">Sign In</a></li></ul></div>
    </div>
  </nav>

  <main class="auth-shell">
    <section class="auth-story" aria-labelledby="register-hero">
      <div><div class="auth-kicker">A simpler way to manage your care</div><h1 id="register-hero">Start your MED-e journey.</h1><p>Create your patient account to book appointments and keep your healthcare information organised.</p></div>
      <div class="trust-row"><div class="trust-item"><i class="fa fa-lock"></i><span>Secure access</span></div><div class="trust-item"><i class="fa fa-calendar-check-o"></i><span>Simple booking</span></div></div>
    </section>
    <section class="auth-panel">
      <div class="auth-card">
        <header class="auth-card-header"><h2>Create your account</h2><p>Patient registration</p></header>
        <form method="post" action="func2.php">
          <div class="auth-form-grid">
            <div class="form-group"><label class="field-label" for="fname">First name</label><input id="fname" type="text" class="form-control" placeholder="First name" name="fname" onkeydown="return alphaOnly(event);" required></div>
            <div class="form-group"><label class="field-label" for="lname">Last name</label><input id="lname" type="text" class="form-control" placeholder="Last name" name="lname" onkeydown="return alphaOnly(event);" required></div>
            <div class="form-group"><label class="field-label" for="email">Email address</label><input id="email" type="email" class="form-control" placeholder="you@example.com" name="email"></div>
            <div class="form-group"><label class="field-label" for="contact">Contact number</label><input id="contact" type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="10-digit number"></div>
            <div class="form-group"><label class="field-label" for="password">Password</label><input type="password" class="form-control" placeholder="Minimum 6 characters" id="password" name="password" onkeyup="check();" required></div>
            <div class="form-group"><label class="field-label" for="cpassword">Confirm password</label><input type="password" class="form-control" id="cpassword" placeholder="Repeat password" name="cpassword" onkeyup="check();" required><span id="message"></span></div>
            <div class="form-group field-span-2"><span class="field-label">Gender</span><div class="gender-options"><label><input type="radio" name="gender" value="Male" checked> Male</label><label><input type="radio" name="gender" value="Female"> Female</label></div></div>
          </div>
          <div class="auth-actions"><a class="auth-switch" href="index1.php">Already registered? Sign in</a><input type="submit" class="btnRegister" name="patsub1" onclick="return checklen();" value="Create account"></div>
        </form>
      </div>
    </section>
  </main>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
