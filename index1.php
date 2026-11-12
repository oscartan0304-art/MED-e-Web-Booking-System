<?php include("header.php"); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sign in | MED-e</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="med-e-premium.css">
  <script>
    function alphaOnly(event) {
      var key = event.keyCode;
      return ((key >= 65 && key <= 90) || key === 8 || key === 32);
    }
  </script>
</head>
<body class="auth-landing">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="fa fa-hospital-o" aria-hidden="true"></i>&nbsp; MED-e</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto"><li class="nav-item"><a class="nav-link" href="index.php">Home</a></li><li class="nav-item ml-lg-4"><a class="nav-link" href="contact.php">Contact</a></li></ul>
      </div>
    </div>
  </nav>

  <main class="auth-shell">
    <section class="auth-story" aria-labelledby="login-hero">
      <div><div class="auth-kicker">Your care, in one place</div><h1 id="login-hero">Good to see you again.</h1><p>Choose your role and sign in to continue to your secure MED-e workspace.</p></div>
      <div class="trust-row"><div class="trust-item"><i class="fa fa-shield"></i><span>Private by design</span></div><div class="trust-item"><i class="fa fa-clock-o"></i><span>Available anytime</span></div></div>
    </section>
    <section class="auth-panel">
      <div class="auth-card">
        <header class="auth-card-header"><h2>Sign in to MED-e</h2><p>Select the account type you use.</p></header>
        <ul class="nav nav-tabs auth-tabs" id="loginTabs" role="tablist">
          <li class="nav-item"><a class="nav-link active" id="patient-tab" data-toggle="tab" href="#patient" role="tab" aria-controls="patient" aria-selected="true">Patient</a></li>
          <li class="nav-item"><a class="nav-link" id="doctor-tab" data-toggle="tab" href="#doctor" role="tab" aria-controls="doctor" aria-selected="false">Doctor</a></li>
          <li class="nav-item"><a class="nav-link" id="admin-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Admin</a></li>
        </ul>

        <div class="tab-content" id="loginTabContent">
          <div class="tab-pane fade show active" id="patient" role="tabpanel" aria-labelledby="patient-tab">
            <h3 class="auth-pane-title">Patient sign in</h3>
            <form method="POST" action="func.php">
              <div class="auth-form-grid">
                <div class="form-group field-span-2"><label class="field-label" for="login-email">Email address</label><input id="login-email" type="text" name="email" class="form-control" placeholder="you@example.com" required></div>
                <div class="form-group field-span-2"><label class="field-label" for="login-password">Password</label><input id="login-password" type="password" class="form-control" name="password2" placeholder="Your password" required></div>
              </div>
              <div class="auth-actions"><a class="auth-switch" href="register.php">New to MED-e? Create an account</a><input type="submit" id="inputbtn" name="patsub" value="Sign in" class="btn btn-success"></div>
            </form>
          </div>

          <div class="tab-pane fade" id="doctor" role="tabpanel" aria-labelledby="doctor-tab">
            <h3 class="auth-pane-title">Doctor sign in</h3>
            <form method="post" action="func1.php">
              <div class="auth-form-grid">
                <div class="form-group field-span-2"><label class="field-label" for="username3">Username</label><input id="username3" type="text" class="form-control" placeholder="Doctor username" name="username3" onkeydown="return alphaOnly(event);" required></div>
                <div class="form-group field-span-2"><label class="field-label" for="password3">Password</label><input id="password3" type="password" class="form-control" placeholder="Your password" name="password3" required></div>
              </div>
              <div class="auth-actions"><span class="auth-switch">Authorised clinicians only</span><input type="submit" class="btnRegister" name="docsub1" value="Sign in"></div>
            </form>
          </div>

          <div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="admin-tab">
            <h3 class="auth-pane-title">Administrator sign in</h3>
            <form method="post" action="func3.php">
              <div class="auth-form-grid">
                <div class="form-group field-span-2"><label class="field-label" for="username1">Username</label><input id="username1" type="text" class="form-control" placeholder="Admin username" name="username1" onkeydown="return alphaOnly(event);" required></div>
                <div class="form-group field-span-2"><label class="field-label" for="password2-admin">Password</label><input id="password2-admin" type="password" class="form-control" placeholder="Your password" name="password2" required></div>
              </div>
              <div class="auth-actions"><span class="auth-switch">Secure administration portal</span><input type="submit" class="btnRegister" name="adsub" value="Sign in"></div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
