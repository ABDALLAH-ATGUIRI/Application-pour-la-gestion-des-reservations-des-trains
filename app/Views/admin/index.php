<?php
if (!isset($_SESSION['email'])) :
    require_once __DIR__ . '/../inc/header.php';
?>

    <div class="list-group list-group-flush w-100">

        <div class="list-group list-group-flush login-form  w-100">
            <div class="row gutters-lg">
                <div class="col-md-4 mb-3 w-100">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">


                                <div class="row about-list w-50">
                                    <form action="http://onlytrain.local/admin/login" method="post">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150" />

                                        <h4 class="modal-title">Connectez-vous à votre compte</h4>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Email" required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="mot de passe" required="required">
                                        </div>
                                        <div class="form-group small clearfix">
                                        </div>
                                        <input type="submit" name="loginAdmin" class="btn btn-primary btn-block btn-lg" value="Login">
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    require_once __DIR__ . '/../inc/footer.php';
else :
    header('http://onlytrain.local/admin/dashboard');
endif;
    ?>