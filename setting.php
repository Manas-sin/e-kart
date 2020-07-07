<?php include_once('server.php') ;?>
<!DOCTYPE html>
<html lang="eng">



<head>
    <!--the page has a title lifestyle Store-->
    <title>
        setting
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="setting.css" rel="stylesheet" text="text/css" />
    <!--favicone-->
    <link rel="shortcut icon" href="favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



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

    <!--navebar ending-->

    <main>
        <h2> setting</h2>
        <div class="div2 ">

            <h1>Change Password
            </h1>
            <!--form-->
            <form action="setting.php" method="POST">
                <legend style="color:red; ">
                    <?php echo $_SESSION['msg1'];?>
                    <?php $_SESSION['msg1'] = "";?>
                </legend>
                <div class="row">
                    <div class="col-25">

                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="email" placeholder="email." required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">

                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="oldpassword" placeholder="Old Password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">

                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="newpassword" placeholder="New Password." required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">

                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="confirmpassword" placeholder="confirm-Password." required>
                    </div>
                </div>

                <div class="row">
                    <input type="submit" name="set_user" value="Submit">
                </div>
            </form>
        </div>

    </main>