<!DOCTYPE html>

<head>
    <!--the page has a title lifestyle Store-->
    <title>
        about
    </title>
    <!--favicone-->
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="about.css" rel="stylesheet" text="text/css" />
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
      <!--navigation bar--> 
      <nav>
        <div class="container">


            <li class="active"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="index.php">Store</a></li>
            <ul>
                <div class="navbar-header">
                     <li><a href="multi_tab_shopping_cart.php "><i class="fa fa-cart-plus" aria-hidden="true"></i>cart</a></li>
                    <li><a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i>sign up</a></li>
                    <li><a  class="btn btn-sccess " data-target="#mymodel" data-toggle="modal"><i class="fa fa-sign-in" aria-hidden="true"></i>login</a></li>
                    <li><a href="about.php"><i class="fa fa-book" aria-hidden="true"></i>About</a></li>
                    <li><a href="contact.php"><i class="fa fa-mobile" aria-hidden="true"></i>contact us</a></li>
                   
            </ul>
            </div>
        </div>
    </nav> 
   
    <!--popup page--> <div class="modal " id="mymodel">
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
                        <button  class="btn btn-primary btn-lg" data-dismiss="modal">sign up</button> </div>
                </div>
            </div>
        </div>

    <!--container-->
    <main>
        <div class="containertwo">
            <div class="column-center">
                <li>WHO WE ARE</li>
                <p>
                    <strong>1998-</strong><br><br> The comapany was founder in 1998, supperd by<br> what Velos called his "Initiating framwoek",which <br>described his effort as an initiate to participate in <br>the Internet business boom during that
                    time. In
                    <br>1998, Velos left his employment as president of<br> Ofcol & Co. and moved to Seattle.He began to <br>work on a business plan for what would eventually<br> become E-Store.<br> <strong><br> 2002-</strong><br><br> In January 2002,E-store
                    has received a funding
                    <br> of $12million from Venture Partners and Indo-US <br>Venture Partners.<br> <strong><br>2008-<br></strong><br> In July 2008, the comapany raised a further $45<br> million from Bessemer Venture Partners, along<br> with existing Investors
                    Venture Partners and Indo
                    <br>-Us Venture Partners.
                    <br>
                    <strong><br>2015-<br></strong><br> E-Store recived its 3rd roudnd of funding of $133 <br>million on Feb-2015. <br>The 3rd round of funding was led by Fcom with <br>all the current institutional investors, includig Kalaari<br> Capital,
                    Venture
                </p>
            </div>
            <div class="column-left">
                <li>OUR HISTORY</li>
                <a href="#"> <img src="icons8-buying.png" alt="camerafafaf" class="thumbnail" height="610" width="610"></a>
                <p>E-store is an American electronic commerce <br>comapany with headquarterin Washingtone.It is <br>the largest Internet-based retailer in the United <br>States E-Store started as an online blog.but <br>soon diversified ,selling mobile phones
                    E-Store also sells
                    <br> ceratin low-end product like USB <br>cables and other accessories.E-Store started has <br>separte retailes websites for United States, United <br>Kingdom & Ireland,France,Canada,Germany, <br>Italy,Spain the Neitherland,Australia
                    ,Brazil,
                    <br>japan,China,India and Mexico . Amazon also<br> offers international shipping to certain other</p>

            </div>
            <div class="column-right">
                <li>OPPORTUNITIES</li>
                <h2>Avilable Roles</h2>
                <p>1.Jr/Sr. Web Deevloper [Full Time Role + also avilables a6 month Internship]</p>
                <p>2.Business Apprentice [6Months Internship]</p>
                <p>3.Manager at backend operations [Full Time Role<br> + also avilable as a 6 Months Internship]</p>
            </div>
        </div>
    </main>
    <!--footer-->
    <!--footer-->
    <footer class="side ">
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

</html>