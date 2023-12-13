<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping List</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <div class="container vh-100">
        <div class="row justify-content-center h-100">
            <div class="card w-25 my-auto shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h2>Login to shop!</h2>
                </div>
                <div class="card-body">
                    <!-- Login Form -->
                    <form action="login.php" method="post">
                        <!-- Existing login form content -->

                        <input type="submit" class="btn btn-primary w-100" value="Login" name="">
                    </form>

                    <!-- Display error message for invalid login -->
                    <?php
                    if (isset($_GET['login_error']) && $_GET['login_error'] == 1) {
                        echo '<div class="alert alert-danger mt-3" role="alert">Invalid login credentials. Please try again.</div>';
                    }
                    ?>
                </div>
                <div class="card-footer text-right">
                    <small>&copy; n.handzlik</small>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="card w-25 my-auto shadow ml-4">
                <div class="card-header text-center bg-success text-white">
                    <h2>Create an account</h2>
                </div>
                <div class="card-body">
                    <form action="register.php" method="post">
                        <div class="form-group">
                            <label for="register_email">Email</label>
                            <input type="email" id="register_email" class="form-control" name="register_email" required />
                        </div>
                        <div class="form-group">
                            <label for="register_password">Password</label>
                            <input type="password" id="register_password" class="form-control" name="register_password" required />
                        </div>
                        <input type="submit" class="btn btn-success w-100" value="Register" name="">
                    </form>
                </div>
                <div class="card-footer text-right">
                    <small>&copy; n.handzlik</small>
                </div>
            </div>
        </div>
    </div>
</body>
</html>