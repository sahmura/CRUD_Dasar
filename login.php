<section style="min-height: 100vh">
    <div class="container">
        <div class="row d-flex align-items-center justfy-content-center">
            <div class="col-md-12">
                <div class="card p-3">
                    <div class="card-header">
                        <h4>Login Dulu</h4>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['error'])) {
                            if ($_GET['error'] == 1) { ?>
                                <h4 class="text-danger">Username atau password salah.</h4>
                        <?php }
                        } ?>
                        <form action="index.php?page=proses-login" method="post">
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                            </div>
                            <br>
                            <b></b>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>