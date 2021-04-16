<!DOCTYPE html>
<html>
<head></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  <!-- Bootstrap -->
  
</head>


<!-- Nav section --><!-- include inkludere php filer på index fil -->
<?php include 'loginnav.php'; ?>
    
  <title>Login Form</title>

  <body>
    <div class="auth-wrapper">
      <div class="auth-inner">
        <form method="POST"  class="form-group" action="login.php">
          <h3>Login</h3>
          <?php if (isset($_GET['error'])) { ?>
     		   <p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>
          <div class="form-group">
            <label>BrugerNavn</label>
            <input type="text" name="username" class="form-control" placeholder="BrugerNavn" />
          </div>
          <div class="form-group">
            <label>Adgangskode</label>
            <input type="password" name="password" class="form-control" placeholder="Adgangskode" />
          </div>
          <button type="submit"  class="btn btn-success btn-block">Login</button>
        </form>
      </div>
    </div>
 
<!-- Footer section -->
<?php include 'loginfooter.php'; ?>

 
</body>
</html>