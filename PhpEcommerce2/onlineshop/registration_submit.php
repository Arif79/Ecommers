<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Item - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">Shop Name</h1>
          <div class="list-group">
            <a href="#" class="list-group-item active">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          

          <div class="card card-outline-secondary my-4">
           <!--  <div class="card-header text-center">
              Registraion Form
            </div> -->
            <div class="card-body">
              <?php

                  include("connect.php");


       //  $myusername = 'Shikha';
        
       //  $sql = "SELECT * FROM users WHERE username = '$myusername'";
       //  $result = mysqli_query($con,$sql);

       //  //print_r($result);
        
       //  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       //  // echo "<br/>";
       //  // print_r($row);
       //  //echo "<br/>";
       // echo  $row['first_name'];
        
        // $count = mysqli_num_rows($result);
        

                  $email= "";
                  $password = "";
                  $username = "";

                  $first_name = "";
                  $last_name = "";



                  $profile_picture ="";

                  // echo $_SERVER["REQUEST_METHOD"];

                  $target_dir = "../uploads/";

                  



                    if ($_SERVER["REQUEST_METHOD"] == "POST")  {

                        $username = $_POST["username"];
                        $password = $_POST["password"];
                        $email = $_POST["email"];
                        $first_name = $_POST["first_name"];
                        $last_name = $_POST["last_name"];


                        $profile_picture = $target_dir . basename($_FILES["myfile"]["name"]);
                        move_uploaded_file($_FILES["myfile"]["tmp_name"], $profile_picture);

                      }
                      else
                      { 
                        echo "Error Out side form";
                        echo "<br/>";
                      }



                      $role_id = 1;
                      $active = 0;

                    $query = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `last_name`, `profile_picture`, `active`, `role_id`) VALUES (NULL, '$username', '$password', '$email', '$first_name', '$last_name', '$profile_picture', '$active',  '$role_id')";


                    if(mysqli_query($con, $query))
                    {
                        ?>
                            <h2>Thank you for your registraion with our web page.</h2>
                        <?php
                    }
                    else
                    {
                        echo "Not Inserted ". mysqli_error($con);
                    }


                  ?> 

             </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
