<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="eng">



<head>
    <!--the page has a title lifestyle Store-->
    <title>
        sign-up
    </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="signup.css" rel="stylesheet" text="text/css" />
    <!--favicone-->
    <link rel="shortcut icon" href="favicon.png" />
    <!-- Bootstrap CSS -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
    <!--navigation bar-->
    <nav>
        <div class="container">
            <li class="active"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="index.php">Store</a></li>
            <ul>
                <div class="navbar-header">
                    <li><a href="multi_tab_shopping_cart.php "><i class="fa fa-cart-plus" aria-hidden="true"></i>cart</a></li>
                    <li><a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i>sign up</a></li>
                    <li><a class="btn btn-sccess " data-target="#mymodel" data-toggle="modal"><i class="fa fa-sign-in" aria-hidden="true"></i>login</a></li>
                    <li><a href="about.php"><i class="fa fa-book" aria-hidden="true"></i>About</a></li>
                    <li><a href="contact.php"><i class="fa fa-mobile" aria-hidden="true"></i>contact us</a></li>

            </ul>
            </div>
        </div>
    </nav>

    <main>

        <div class="div1">
            <img src="note88.jpg" alt="camerafafaf" class="thumbnail"></div>
        </div>
        <div class="div2">
            <h1>sign-up
            </h1>
            <!--form-->
            <form action="signup.php" method="POST">
                <?php include('errors.php'); ?>
                <div class="row">
                    <div class="col-25">

                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="username" placeholder="Name." value="<?php echo $username; ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">

                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="email" placeholder="email" value="<?php echo $email; ?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">

                    </div>
                    <div class="col-75">
                        <input type="text" id="pname" name="password_1" placeholder="password_1" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">

                    </div>
                    <div class="col-75">
                        <input type="text" id="pname" name="password_2" placeholder="password_2" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">

                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="contact" placeholder="Contact." required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">

                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="Address" placeholder="Address" required>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" name="reg_user" value="Submit">
                </div>
                <p>
                    Already a member? <a href="login.php">Sign in</a>
                </p>
            </form>
        </div>

    </main>


    <!--footer-->
    <footer class="side">
        <div class="first ">
            <h1>Information</h1>

            <p>About us</p>
            <p>contact us</p>
        </div>
        <div>
            <div class="second ">
                <h1>My account</h1>

                <p>Login</p>
                <p>Sign up</p>
            </div>

            <div class="third ">
                <h1>Contact us</h1>

                <p>8130577549</p>
            </div>
    </footer>