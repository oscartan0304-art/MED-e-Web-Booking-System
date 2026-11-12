<?php
$formError = '';

if (isset($_POST['btnSubmit'])) {
    $con = mysqli_connect('localhost', 'root', '', 'hospitalms');
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $contact = $_POST['txtPhone'];
    $message = $_POST['txtMsg'];

    $query = "insert into contact(name,email,contact,message) values('$name','$email','$contact','$message');";
    $result = mysqli_query($con, $query);

    if ($result) {
        header('Location: contact.php?sent=1', true, 303);
        exit;
    }

    $formError = 'We could not send your message. Please try again.';
}

function previousValue($key)
{
    return isset($_POST[$key]) ? htmlspecialchars($_POST[$key], ENT_QUOTES, 'UTF-8') : '';
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Contact | MED-e</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/Med-e logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="med-e-premium.css?v=20261103-contact1">
  <script>
    function alphaOnly(event) {
      var key = event.keyCode;
      return ((key >= 65 && key <= 90) || key === 8 || key === 32);
    }
  </script>
</head>
<body class="contact-page">
  <nav class="home-nav" id="mainNav" aria-label="Primary navigation">
    <div class="home-nav-inner">
      <a class="navbar-brand" href="index.php"><i class="fa fa-hospital-o" aria-hidden="true"></i>&nbsp; MED-e</a>
      <div class="home-nav-links">
        <a class="nav-link contact-active" href="contact.php">Contact</a>
        <a class="nav-link" href="index1.php">Sign In</a>
        <a class="btn btn-primary home-nav-cta" href="register.php">Create Account</a>
      </div>
    </div>
  </nav>

  <main class="contact-shell">
    <section class="contact-intro" aria-labelledby="contact-title">
      <div>
        <div class="auth-kicker">We’re here to help</div>
        <h1 id="contact-title">Let’s talk about your care.</h1>
        <p>Have a question about MED-e or need help navigating your account? Send us a message and our team will get back to you.</p>
      </div>
      <div class="contact-details">
        <div><i class="fa fa-shield" aria-hidden="true"></i><span><strong>Private by design</strong>Your enquiry is handled with care.</span></div>
        <div><i class="fa fa-clock-o" aria-hidden="true"></i><span><strong>Thoughtful support</strong>Clear, helpful responses from our team.</span></div>
      </div>
    </section>

    <section class="contact-card" aria-label="Contact form">
      <header class="contact-card-header">
        <span class="contact-card-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
        <div><h2>Send us a message</h2><p>Complete the form and we’ll be in touch.</p></div>
      </header>

      <?php if (isset($_GET['sent']) && $_GET['sent'] === '1') { ?>
        <div class="contact-notice contact-success" role="status"><i class="fa fa-check-circle" aria-hidden="true"></i> Message sent successfully.</div>
      <?php } ?>
      <?php if ($formError !== '') { ?>
        <div class="contact-notice contact-error" role="alert"><?php echo $formError; ?></div>
      <?php } ?>

      <form method="post" action="contact.php" class="contact-grid">
        <div class="form-group">
          <label class="field-label" for="txtName">Your name</label>
          <input id="txtName" type="text" name="txtName" class="form-control" placeholder="Full name" value="<?php echo previousValue('txtName'); ?>" onkeydown="return alphaOnly(event);" required>
        </div>
        <div class="form-group">
          <label class="field-label" for="txtEmail">Email address</label>
          <input id="txtEmail" type="email" name="txtEmail" class="form-control" placeholder="you@example.com" value="<?php echo previousValue('txtEmail'); ?>" required>
        </div>
        <div class="form-group contact-field-wide">
          <label class="field-label" for="txtPhone">Phone number</label>
          <input id="txtPhone" type="tel" name="txtPhone" class="form-control" placeholder="10-digit number" value="<?php echo previousValue('txtPhone'); ?>" minlength="10" maxlength="10" required>
        </div>
        <div class="form-group contact-field-wide">
          <label class="field-label" for="txtMsg">How can we help?</label>
          <textarea id="txtMsg" name="txtMsg" class="form-control" placeholder="Tell us what you need help with" rows="5" required><?php echo previousValue('txtMsg'); ?></textarea>
        </div>
        <div class="contact-form-footer contact-field-wide">
          <span><i class="fa fa-lock" aria-hidden="true"></i> Your details stay private.</span>
          <input type="submit" name="btnSubmit" class="btn btn-primary" value="Send Message">
        </div>
      </form>
    </section>
  </main>
</body>
</html>
