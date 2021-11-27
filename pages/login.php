<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Realtime Chat App</title>

  <link rel="stylesheet" href="./../css/style.css" />
  <!-- font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>
        <h1>Realtime Chat App</h1>
      </header>
      <form action="#">
        <div class="error_txt">This is error message</div>

        <div class="field input">
          <label for="email">Email Address</label>
          <input type="email" placeholder="Enter your email" />
        </div>

        <div class="field input">
          <label for="password">Password</label>
          <input type="password" placeholder="Enter your password" />

          <i class="fa fa-eye"></i>
        </div>

        <div class="field button">
          <input type="submit" value="Continue to chart" />
        </div>

        <div class="link">
          Not yet signed up? <a href="./../index.php">Signup now</a>
        </div>
      </form>
    </section>
  </div>

  <!-- javascript link -->
  <script src=" ./../js/pass-show-hide.js"></script>
</body>

</html>