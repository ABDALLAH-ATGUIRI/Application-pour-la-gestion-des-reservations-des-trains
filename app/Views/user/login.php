

<div class="login-form">
  <form action="/user/login" method="post">
    <div class="avatar"><i class=" fa fa-user"></i></div>
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