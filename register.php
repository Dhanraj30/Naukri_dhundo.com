<?php
require_once "config.php";

$username = $password = $confirm_password = $email = "";
$username_err = $password_err = $confirm_password_err = $email_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);

    // Check for email
    if(empty(trim($_POST['email']))){
        $email_err = "Email cannot be blank";
    }
    else{
        // Check if email is already registered
        $sql = "SELECT id FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set the value of param email
            $param_email = trim($_POST['email']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $email_err = "This email is already registered"; 
                }
                else{
                    $email = trim($_POST['email']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);

    // Check for password
    if(empty(trim($_POST['password']))){
        $password_err = "Password cannot be blank";
    }
    elseif(strlen(trim($_POST['password'])) < 5){
        $password_err = "Password cannot be less than 5 characters";
    }
    else{
        $password = trim($_POST['password']);
    }

    // Check for confirm password field
    if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
        $password_err = "Passwords should match";
    }

    // If there were no errors, go ahead and insert into the database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err))
    {
        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt)
        {
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_email);

            // Set these parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_email = $email;

            // Try to execute the query
            if (mysqli_stmt_execute($stmt))
            {
                header("location: login.php");
            }
            else{
                echo "Something went wrong... cannot redirect!";
            }
        }
        mysqli_stmt_close($stmt);
        }
        mysqli_close($conn);
        }
        ?>

        <!-- HTML form for user registration -->
        <html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
		body {
			background-color: #f7f7f7;
			font-family: 'Open Sans', sans-serif;
		}
		.container-box {
			background-color: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
			margin-top: 30px;
			margin-bottom: 30px;
		}
		h2 {
			text-align: center;
			margin-top: 0;
		}
		.form-control {
			border-radius: 5px;
			border: none;
			box-shadow: none;
			background-color: #f7f7f7;
			color: #666;
		}
		.btn-primary {
			background-color: #337ab7;
			border-color: #2e6da4;
			border-radius: 5px;
		}
		.btn-primary:hover {
			background-color: #2e6da4;
			border-color: #285e8e;
		}
	</style>
</head>
<body>
    <div class="container">
        <div class="container-box">
        <h2>User Registration Form</h2>
        <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>" placeholder="Enter username">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>
            </div>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>" placeholder="Enter email">
                    <span class="help-block"><?php echo $email_err; ?></span>
                </div>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2" for="password">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label class="control-label col-sm-2" for="confirm_password">Confirm Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm password">
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
            </div>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </div>
    </div>
</body>
</html>


