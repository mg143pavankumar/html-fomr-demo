<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Realtime Chat App</title>

  <link rel="stylesheet" href="./css/style.css" />
  <!-- font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>
        <h1>Realtime Chat App</h1>
      </header>
      <form action="#">
        <div class="error_txt">This is error message</div>
        <div class="name_details">
          <div class="field input">
            <label for="firstname">First Name</label>
            <input type="text" placeholder="First Name" />
          </div>
          <div class="field input">
            <label for="lastname">Last Name</label>
            <input type="text" placeholder="Last Name" />
          </div>
        </div>

        <div class="field input">
          <label for="email">Email Address</label>
          <input type="email" placeholder="Enter your email" />
        </div>

        <div class="field input">
          <label for="password">Password</label>
          <input type="password" placeholder="Enter your password" />
          <i class="fa fa-eye"></i>
        </div>

        <div class="field input">
          <label for="confirmPassword">Confirm password</label>
          <input type="password" placeholder="Confirm Password" />
        </div>

        <div class="field image">
          <label for="imgsection">Select Image</label>
          <input type="file" />
        </div>

        <div class="field button">
          <input type="submit" value="Continue to chart" />
        </div>

        <div class="link">
          Already have an account? <a href="./pages/login.php">Login now</a>
        </div>
      </form>
    </section>
  </div>

  <!-- javascript link -->
  <script src="./js/pass-show-hide.js"></script>
  <script src="./js/signup.js"></script>
</body>

</html>