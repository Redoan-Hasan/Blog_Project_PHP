<?php
include("class/function.php");
$classObj = new BlogProject();
if (isset($_POST["admin_login"])) {
    $classObj->admin_login($_POST);
}
session_start();
if(isset( $_SESSION["adminId"])){
    $id = $_SESSION["adminId"];
}
if(isset($id)){
    header("location: dashboard.php");
}
?>

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Login</h3>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                        <input name="admin_email" class="form-control py-4" id="inputEmailAddress"
                                            type="email" placeholder="Enter email address" />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input name="admin_password" class="form-control py-4" id="inputPassword"
                                            type="password" placeholder="Enter password" />
                                    </div>
                                    <input type="submit" value="Login" name="admin_login"
                                        class="btn btn-primary text-center d-flex justify-content-center w-100">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>