<!DOCTYPE html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Source+Code+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="/styles/css/main.css"> -->
    <link rel="stylesheet" href="/styles/css/registration.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body class='d-flex align-items-center'>

    <header class='header'>
        <div class="logo-container">
            <h3 class='logo'>
                
            </h3>
        </div>
    </header>

    <div class="video-container">
        <video autoplay muted loop id='myVideo'> 
            <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1607614/Cart%20-%208522.mp4" type="video/mp4">
        </video> 
    </div>
  
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-9 col-md-8 mx-auto ">
                
                <div class="card p-2">
                    <div class="card-body">
                        <h5 class="card-title text-center">Register</h5>
                            <form method = "POST" action="./process_registration.php" class="form">
                                

                                <div class="form-row">
                                    
                                    <div class=" col-md-6">
                                        <!-- <label for="firstNameInput">First name</label> -->
                                        <input type="text" name='firstName' class='form-control' id='firstNameInput' placeholder='First name' required>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <label for="lastNameInput">Last name</label> -->
                                        <input type="text" name='lastName' class='form-control' id='lastNameInput' placeholder='Last name' required>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="emailAddressInput"></label>
                                    <input id='emailAddressInput' name='email' class='form-control' type="email" placeholder='Email' required>

                                    <label for="userNameInput"></label>
                                    <input id='userNameInput' name='username' class='form-control' type="text" placeholder='Username' required>
                                 </div>

                                <div class="form-row">
                                    <div class="col-md-6">
                                    <!-- <label for="firstNameInput">First name</label> -->
                                        <input type="password" name='password1' class='form-control' id='passwordInput1' placeholder='Enter password' required>
                                    </div>
                                    <div class="col-md-6">
                                    <!-- <label for="lastNameInput">Last name</label> -->
                                        <input type="password" name='password2' class='form-control' id='passwordInput2' placeholder='Enter password again' required>
                                    </div>
                                </div>
                                
                                <button name='register' value='register' type="submit" class="btn btn-block mt-3 p-2">Sign Up</button>
                                <div class='text-center' style="margin-top: 10px;">
                                    <a href="./index.php">Go back</a>
                                </div>
                            </div>
                                

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
    <footer class='footer'>
        <div>
            &copy 2019 By Dayna Blackwell
        </div>
    </footer>

</body>

</html>