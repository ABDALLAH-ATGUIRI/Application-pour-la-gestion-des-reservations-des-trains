<?php
require_once __DIR__ . '/../inc/header.php';
?>
<section>
    <div class="signup-form">
        <form action="" method="post">
            <h2>Je crée mon compte</h2>
            <p class="lead">Mes informations de connexion.</p>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Prènom " required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="lastname" placeholder="Nom " required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                    <input type="email" class="form-control" name="email" placeholder="E-m@il " required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="number" class="form-control" name="phone" placeholder="Téléphone " required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="Password" placeholder="Mot de passe " required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-lock"></i>
                        <i class="fa fa-check"></i>
                    </span>
                    <input type="password" class="form-control" name="confirm_password" placeholder="Conformer mot de passe " >
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">je crèe mon compt
                </button>
            </div>
            <p class="small text-center mt-5">Ces informations sont nécessaires pour créer votre compte, vous envoyer des billets et autres informations utiles. En cas de besoin, vous pouvez modifier vos données à tout moment. En vous inscrivant, vous acceptez notre politique de confidentialité des données selon la loi 09-08 sur la protection des données à caractère personnel.

                <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.
            </p>
        </form>
        <div class="text-center">Already have an account? <a href="/">Login here</a>.</div>
    </div>
</section>


<?php
require_once __DIR__ . '/../inc/footer.php';
?>