<!DOCTYPE html>
<html lang="eng">



<head>
    <!--the page has a title lifestyle Store-->
    <title>
        Estore store
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet" text="text/css" />
    <!--favicone-->
    <link rel="shortcut icon" href="favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

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

    <!--popup page-->
    <div class="modal " id="mymodel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-cennter text-primary">sign up</h3>
                    <button type="button" class="close" data-dismiss="modal"> &times;</button> </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <h1>
                                LOGIN
                            </h1>
                            <p>Don't have an account?
                                <a href="signup.php">
                                sighnup</a></p>
                            <label>username:</label>
                            <input type="text" placeholder="username" class="font-control"> </div>
                        <div class="form-group">
                            <label>password:</label>
                            <input type="password" placeholder="password" class="font-control"> </div>


                    </form>
                </div>
                <div class="modal-footer justify-content-center">
                    <button class="btn btn-primary btn-lg" data-dismiss="modal">sign up</button> </div>
            </div>
        </div>
    </div>
    <!--body-->
    <div class="grid-container">

        <div class="item1">
            <a href="#"> <img src="iphone.jpg" alt="camerafafaf" class="thumbnail">
                <div>
                    <div class="caption">
                        <h2>Apple iPhone 11 Pro Max (64GB) - Midnight Gray</h2>
                        <button class="button"> <a href="multi_tab_shopping_cart.php">ADD</a></button>
                        <p>Midnight gray<br>Weight: 7.97 ounces (226 grams)<br> 512GB<br> A13 Bionic chip Third-generation Neural Enginer<br>
                        </p>
                    </div>
            </a>
            </div>

        </div>
        <div class="items2">
            <a href="#"> <img src="xiaomi-mi-mix-alpha-1.jpg" alt="camerafafaf" class="thumbnail">
                <div>
                    <div class="caption">
                        <h2>xiaomi-mi-mix-alpha-1</h2>
                        <button class="button"><a href="multi_tab_shopping_cart.php"> ADD</a></button>
                        <p>Flexible Super AMOLED capacitive touchscreen,
                            <p>OS: Android 10, MIUI 11</p><br>
                            <p>Chipset: Qualcomm SM8150 Snapdragon 855+ (7 nm)</p><br>
                            <p>CPU: Octa-core (1x2.96 GHz Kryo 485 & 3x2.42 GHz Kryo 485 & 4x1.8 GHz Kryo 485)</p><br>
                            <p>GPU: Adreno 640 (700 MHz)</p><br>
                    </div>
            </a>
            </div>

        </div>
        <div class="items3">
            <a href="#"> <img src="oneplus-8-pro-1.jpg" alt="camerafafaf" class="thumbnail">
                <div>
                    <div class="caption">
                        <h2>Onepluse 8 pro</h2>
                        <button class="button"><a href="multi_tab_shopping_cart.php">ADD</a></button>
                        <p>OS: Android 10, OxygenOS 10.0</p><br>
                        <p>Chipset: Qualcomm SM8250 Snapdragon 865 (7 nm+)</p><br>
                        <p>CPU: Octa-core (1x2.84 GHz Kryo 585 & 3x2.42 GHz Kryo 585 & 4x1.8 GHz Kryo 585)</p><br>
                        <p>GPU: Adreno 650</p><br>
                    </div>
            </a>
            </div>

        </div>
        <div class="items4">
            <a href="#"> <img src="samsung.jpg" alt="camerafafaf" class="thumbnail">
                <div>
                    <div class="caption">
                        <h2>samsung </h2>
                        <button class="button"><a href="multi_tab_shopping_cart.php">ADD</a></button>
                        <p>System. The Samsung Galaxy A10e runs on Android OS v9.0 (Pie) out of the box, </p><br>but the Galaxy A10e's firmware can be...
                        <p>Display. Screen size is measured in inches, diagonally from corner to corner. The 5.83 inches PLS capacitive touch...</p><br>
                        <p>Memory. The smartphone's memory (2 GB) cannot be expanded, but the storage (32 GB)...</p><br>
                    </div>
            </a>
            </div>

        </div>
        <div class="items5">
            <a href="#"> <img src="huawei.jpg" alt="camerafafaf" class="thumbnail">
                <div>
                    <div class="caption">
                        <h2>Huawei Y9s </h2>
                        <button class="button"><a href="multi_tab_shopping_cart.php"> ADD</a></button>
                        <p>OS Android 9.0 (Pie), EMUI 9.1</p><br>
                        <p>Chipset Kirin 710F (12 nm)</p><br>
                        <p>CPU Octa-core (4x2.2 GHz Cortex-A73 & 4x1.7 GHz Cortex-A53)</p><br>
                        <p>GPU Mali-G51 MP4</p><br>
                    </div>
            </a>
            </div>

        </div>
        <div class="items6">
            <a href="#"> <img src="IKALA.jpg" alt="camerafafaf" class="thumbnail">
                <div>
                    <div class="caption">
                        <h2>IKALA </h2>
                        <button class="button"><a href="multi_tab_shopping_cart.php"> ADD</a></button>
                        <p>KALL 4.57 cm (1.8 Inch) Mobile Phone Combo - K3310 (Dark Blue& Red) With Feature Of Currency Detector <br>Weight: 7.97 ounces (226 grams)<br> 512GB<br> A13 Bionic chip Third-generation Neural Enginer<br>
                        </p>
                    </div>
            </a>
            </div>

        </div>
    </div>
    --
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
</body>
<html>