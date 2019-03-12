<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/styles/css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Source+Code+Pro" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>



<body class='d-flex align-items-center'>
  <header class='header'>
    <div class="logo-container">
      <h3 class='logo'>
        Gadget
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
            <h5 class="card-title text-center">Sign In</h5>
  
            <form method = "POST" action="./process_form.php" class="form">
              <div class="form-group">
              
                <label for="username">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="">
                      <i class="fas fa-user-astronaut"></i>
                    </span>
                  </div>

                  <input type="text" class="form-control usernameInput" name="username" aria-describedby="usernameHelp" placeholder="Username" required>

                </div>
              </div>
                            
              <div class="form-group">
                <label for="password">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-key"></i>
                      </span>
                    </div>
                    <input type="password" name = 'password' class="form-control passwordInput" id="passwordInput" placeholder="Password" required>
                  </div>
              </div>
              
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="form-check-input custom-control-input" id="exampleCheck1">
                <label class="custom-control-label" for="exampleCheck1">Remember me</label>
              </div>
              <button type="submit" class="btn btn-block mt-3 p-2">Submit</button>
            
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>