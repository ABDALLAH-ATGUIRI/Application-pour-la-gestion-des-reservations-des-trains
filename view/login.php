<?php
require_once '../controller/client.controller.php';
if (isset($_POST["submit"])) {
  $acc = new Client();
  $acc->login();
}
?>
<form class="con-4" method="POST">
  <div class="mb-3 hh">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" placeholder="E-m@il" class="form-control my-3 p-2" name="Email" />
  </div>
  <div class="mb-3 hh">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" placeholder="Password" class="form-control my-3 p-2" name="password" />
  </div>
  <div>
    <button type="submit" name="submit" class="btn btn-primary">Login</button>
  </div>
  <a href="#">Forgot password</a>
  <p>Don't have an account ? <a href="./signup.php">Register here</a></p>
</form>