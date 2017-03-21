<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/callouts.css">
</head>

<body>
    <div class="container">

        <header>
            <!-- Header Bar Start -->
            <div id="topHeaderRow">
                <nav class="navbar navbar-inverse " role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <p class="navbar-text">Welcome to <strong>Book Store</strong></p>
                    </div>

                    <div class="collapse navbar-collapse navbar-ex1-collapse pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Header Bar End -->


            <div class="row">
                <div class="col-md-4">
                    <h1>Book Store</h1>
                </div>
            </div>

            <!-- Main Navigation Start -->
            <div id="mainNavigationRow">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Tracking</a></li>
                            <li><a href="#">Orders</a></li>
                            <li><a href="#">Inventory</a></li>
                            <li><a href="#">Generate Printables</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Main Navigation End -->

        </header>

        <!-- Main Body Start -->
        <body>
           <div class="row">
                <div class="col-md-4"></div>
                    <div class="col-md-4">
                    <h2 align="center">Change Password</h2><br>
                    <form role="form" action="ChangePass.php">
                        <div class="form-group">
                            <label for="currentpass">Current Password</label>
                            <input type="password" class="form-control" id="currentpass">
                        </div>
                        <div class="form-group">
                            <label for="newpass">New Password</label>
                            <input type="password" class="form-control" id="newpass">
                        </div>
                        <div class="form-group">
                            <label for="newpass">Reenter New Password</label>
                            <input type="password" class="form-control" id="newpass2">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" style="width:100px">Confirm</button>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </body>
        <!-- Main Body End -->

        <!-- Footer Start -->
        <hr>
        <footer>
            <div class="row">
                <div class="col-md-3">
                    <h4><span class="glyphicon glyphicon-info-sign"></span> About Us</h4>
                    <ul class="nav nav-stacked">
                        <li><a href="#">About Book Store</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Careers at Book Store</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4><span class="glyphicon glyphicon-earphone"></span> Customer Service</h4>
                    <ul class="nav nav-stacked">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">In-Store Pickup</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4><span class="glyphicon glyphicon-link"></span> Links</h4>
                    <ul class="nav nav-stacked">
                        <li><a href="#">Kent State University</a></li>
                        <li><a href="#">Barnes And Noble</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4><span class="glyphicon glyphicon-envelope"></span> Contact us</h4>
                    <form role="form">
                        <div class="form-group tight-form-group">
                            <label class="sr-only" for="name">Name</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter name ...">
                        </div>
                        <div class="form-group tight-form-group">
                            <label class="sr-only" for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email ...">
                        </div>
                        <div class="form-group tight-form-group">
                            <label class="sr-only" for="email">Email</label>
                            <textarea class="form-control" rows="3" placeholder="Enter message ..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
    </div>
</body>

</html>