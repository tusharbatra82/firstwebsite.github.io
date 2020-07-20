<!DOCTYPE html>
<html>
  <head>

    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>
<div class="container">
<div class="row">
  <div class="col-lg-6">
    <h2 class="py-10" >Login form</h2>
    <form action="validation.php" method="post">
<div class="form-group">
  <label>Username</label>
  <input type="text" name="user"  class="form-control">
</div>
<div class="form-group">
  <label>password</label>
  <input type="Password" name="Password"  class="form-control">
</div>
<button type="submit" name="button" class="btn btn-primary">Login</button>
    </form>
  </div>

  <div class="col-lg-6">
    <h2>Sign in/Registration</h2>
    <form action="registration.php" method="post">
<div class="form-group">
  <label>Username</label>
  <input type="text" name="user"  class="form-control">
</div>
<div class="form-group">
  <label>password</label>
  <input type="Password" name="Password"  class="form-control">
</div>
<button type="submit" name="button" class="btn btn-primary">Sign in</button>
    </form>
  </div>
</div>
</div>
  </body>
</html>
