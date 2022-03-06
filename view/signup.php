<?php
require_once '../controller/client.controller.php';
if (isset($_POST["submit"])) {

    $test = new Client();
    $test->cree_compte();
}


?>
<?php include './inc/header.php' ?>

<body>

    <section >
        <div class="row  rt-f pt-10">
            <div class="logo"><img src="../img/logo_onlytrain_new.png" alt="" /></div>

            <form method="POST" class="col-lg-7  pt-5">
                <div class="form-row">
                    <div class="col-lg-6">
                        <span for="name">First name</span>
                        <div class="col-lg-7">
                            <input type="text" name="First_Name" placeholder="First name" value="" class="form-control my-3 p-2 " required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p>Last name</p>
                        <div class="col-lg-7">
                            <input type="text" name="Last_Name" class="form-control my-3 p-2 " required placeholder="Last name" />
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-6">
                        <span for="email">Email</span>
                        <div class="col-lg-7">
                            <input type="email" placeholder="E-m@il" name="email" value="" class="form-control my-3 p-2 " required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span for="phone">Phone</span>
                        <div class="col-lg-7">
                            <input type="number" placeholder="Phone" name="phone" value="" class="form-control my-3 p-2 " required />
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-lg-6">
                        <span for="password">Password</span>
                        <div class="col-lg-7">
                            <input type="password" placeholder="Password" name="Password" value="" class="form-control my-3 p-2 " required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <span for="confirm-password">Conformer Password</span>
                        <div class="col-lg-7">
                            <input type="password" placeholder="Conformer Password" name="Confirm_Password" value="" class="form-control my-3 p-2 " />
                        </div>
                    </div>
                </div>

                <div class="form" style="display: flex; flex-direction:column;">
                    <button class="btn1 mt-3 mb-5" type="submit" name="submit">Signup</button>
                    <a href="./home.php" class="btn btn-secon"> Have you an account ? Log in</a>

                </div>


                <!-- <a href="#">Forgot password</a>
            <p>Don't have an account ? <a href="#">Register here</a></p> -->
            </form>
        </div>
        </div>
    </section>
    <?php
    require_once './inc/footer.php'
    ?>