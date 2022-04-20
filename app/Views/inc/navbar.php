

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container ">
    <a class="navbar-brand" href="/">
      <img src="../img/logo_onlytrain_new.png" alt="logo" id="logo" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <?php

            if (isset($_SESSION['Id_client'])) :
            ?>

              <a class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-2"></i> <?php echo $_SESSION['user']['f_name'] . ' ' . $_SESSION['user']['l_name']; ?>
              </a>
              <ul class="dropdown-menu row no-gutters w-100" aria-labelledby="navbarDropdown">



                <div class="login-form">
                  <form action="" method="post">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150" />
                    
                    <h4 class="modal-title"> <?php echo $_SESSION['user']['f_name'] . ' ' . $_SESSION['user']['l_name']; ?></h4>
                    <div><a class="dropdown-item text-center fw-bold" href="../user/profile">Profile</a></div>
                    <div><a class="dropdown-item text-center fw-bold" name="logout" href="../user/logoutClient">Logout</a></div>

                  </form>

                </div>

              </ul>
            <?php else : ?>

              <a class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user me-2"></i> login </a>
              <ul class="dropdown-menu row no-gutters dropdown" aria-labelledby="navbarDropdown">
                <div class="login-form">
                  <form action="http://onlytrain.local/user/login" method="post">
                    
                    <h4 class="modal-title">Login to Your Account</h4>
                    <div class="form-group">
                      <input type="text" class="form-control" name="email" placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    </div>
                    <div class="form-group small clearfix">
                      <label class="checkbox-inline"><input type="checkbox"> Remember me</label>
                      <a href="#" class="forgot-link">Forgot Password?</a>
                    </div>
                    <input type="submit" name="login" class="btn btn-primary btn-block btn-lg" value="Login">
                  </form>
                  <div class="text-center small">Don't have an account? <a href="../user/signup">Sign up</a></div>
                </div>
              </ul>
            <?php
            endif;
            ?>

          </li>
        </ul>
      </div>
    </div>
</nav>