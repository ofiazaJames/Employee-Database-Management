<?php
		session_start();
	
		include("connection.php");
		include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST") { 
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!empty($username) && !empty($password)) { 

		$query = "select * from users where username = '$username' limit 1";
		$result = mysqli_query($con, $query);
		
    if ($result) {
  
			if ($result && mysqli_num_rows($result)>0) { 
        $user_data = mysqli_fetch_assoc($result);

				if($user_data['password'] === $password){ 
					$_SESSION['user_id']=$user_data['user_id']; 
          header("Location: index.php");
          die;
				}
			}
    }   
    echo '<script>alert("wrong username or password")</script>';
	}
  else{
  echo '<script>alert("wrong username or password")</script>';
} 

}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body {
        background: url('try1.jpg') no-repeat center center;
        background-size: cover; 
      }
    </style>


    <link href="signin.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    

  </head>

  <body class="text-center">
    <main class="form-signin">
      <form method = "post">

        <img class="mb-4" src="beta3.png" alt="" width="130" height="100">

        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" placeholder="Username" 
              name="username">

          <label for="floatingInput">Username</label>
        </div>

        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
          <label for="floatingPassword">Password</label>
              
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <br><br>
        <a href ="signup.php">Click here to Register</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>
      </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

