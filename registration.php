<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript">
    function display()
    {
        var name=document.getEgetElementsByName("Name");
      alert("Welcome to train reservation" +name[0].value);
    }
    </script>
  </head>
  <body>
    <div>
      <form action="registration.php" method="POST">
        <div class="container">
          <div class="row-sm-2">
            <div class="col-sm-3">
          <h1 style="color: red;">RegistrationForm</h1>
          <p>Fill the correct information</p>
          <hr class="mb-3">
          <label for="Name"><b>NAME</b></label>
          <input class="form-control" type="text" name="Name" required>
          <label for="Password"><b>Password</b></label>
          <input class="form-control" type="password" name="Password" required>
          <label for="DateOfBirth"><b>DOB</b></label>
          <input class="form-control" type="date" name="DateOfBirth" required>
          <label for="Email"><b>EMAIL</b></label>
          <input class="form-control" type="email" name="Email" required>
          <label for="Phone number"><b>Phone number</b></label>
          <input class="form-control" type="Phone" name="Phone number" required>
          <hr class="mb-3">
          <input class="btn btn-primary" type="submit" value="sign up" onclick="display()"/>
          <input class="btn btn-secondary"type="reset" name="clear" value="reset"><br>
          <hr class="mb-4">
          <a class="form-control" color:blue href="Resevation Form.html">Already sign-up.Click here</a>
        </div>
      </div>
        </div>
      </form>
    </div>
  </body>
</html>
