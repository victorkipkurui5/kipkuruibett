<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Font Awesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container bg-light p-5">
        <!--HEADER-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="https://www.Gichagarealestate.com/">Gichagarealestate</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    
                         <a href="index.html" class="nav-link">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <a href="register.php"><button class="btn btn-outline-danger my-2 my-sm-0">Register</button></a>&nbsp;
                <a href="login.php"><button class="btn btn-outline-info my-2 my-sm-0">Login</button></a>
            </div>
        </nav>
        <!--MAIN-->
        <div class="p-5">
            <!--USER LOGIN FORM STARTS-->
            <form method="post" action="process/login_process.php">
                <h2 class="text-center text-info pb-3">Log-In to Gichaga Real Estate</h2>

                <?php 
                //if the user name or password is wrong
                if(@$_GET['Invalid'] == true)  //get the error and if true
                {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php 
                //display the error
                echo $_GET['Invalid'];
                ?>
                </a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php 
                } //close if
              ?>
                <!------------------Username or Email----------------->
                <div class="form-group">
                    <label>Username or Email <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="user" placeholder="Enter Username or Email" required>
                </div>
                <!------------------Password----------------->
                <div class="form-group">
                    <label>Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="pass" placeholder="Enter Password" required>
                </div>
                <!------------------Submit form----------------->
                <button type="submit" name="login" class="btn btn-info">Login</button>
            </form>
            <!--USER LOGIN FORM ENDS-->
        </div>
        <!--FOOTER-->
        <div class="">
            <p>&copy; Copyright <a href="https://www.Gichagarealestate.com/">Gichagarealestate</a> 2021 | All right
                reserved</p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>