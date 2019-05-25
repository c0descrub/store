<?php
    require_once 'core/init.php';

$sql = "SELECT * FROM products WHERE category = 0";
$db = new mysqli('127.0.0.1', 'root', '', 'store_database');
$new = $db->query($sql);
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>The String Store</title>
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head> 
<body>
    <div class="top-banner">
        <div class="container">
            <a href="index.php" class="navbar-brand logo">The String Store</a>
                <div class="shopping">
                    <span style="font-size: 1.5em; color: #FFF;"><i class="fas fa-shopping-cart"></i></span>
                </div>

                <div class="profile">
                    <span style="font-size: 1.5em; color: #FFF;"><i class="fas fa-user"></i></span>
                </div>
        </div>    
    </div>

    <nav class="top-nav">
        <div class="top-nav-items">
            <ul class="navbar-nav nav-align">
                <li class="dropdown list-item">
                    <a href="#" class="dropdown-toggle product" data-toggle="dropdown" id="text">Guitar<span class="caret"></span>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Electric</a></li>
                            <li><a href="#">Acoustic</a></li>
                            <li><a href="#">Semi-Acoustic</a></li>
                        </ul>
                </li>
                <li class="dropdown list-item">
                    <a href="#" class="dropdown-toggle product" data-toggle="dropdown" id="text">Bass<span class="caret"></span>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Electric</a></li>
                            <li><a href="#">Acoustic</a></li>
                        </ul>
                </li>
                <li class="dropdown list-item">
                    <a href="#" class="dropdown-toggle product" data-toggle="dropdown" id="text">Ukulele<span class="caret"></span>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Electric</a></li>
                            <li><a href="#">Acoustic</a></li>
                        </ul>
                </li>
                <li class="list-item">
                    <a href="#" class="product" id="text">Violin</a>
                </li>

                <li class="list-item">
                    <a href="#" class="product" id="text">Harp</a>
                </li>

                <li class="list-item">
                    <a href="#" class="product" id="text">Banjo</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="my-slider" class="carousel slide" data-ride="carousel">
                        <!--indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#my-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#my-slider" data-slide-to="1"></li>
                            <li data-target="#my-slider" data-slide-to="2"></li>
                        </ol>
                        <!--wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="https://placehold.it/1250x400" alt="slide image 1">
                                    <div class="carousel-caption">
                                        <h1>Sale on now!</h1>
                                    </div>
                            </div>

                            <div class="item">
                                <img src="https://placehold.it/1250x400" alt="slide image 2">
                                    <div class="carousel-caption">
                                        <h1>Get upto 40% off!</h1>
                                    </div>
                            </div>

                            <div class="item">
                                <img src="https://placehold.it/1250x400" alt="slide image 3">
                                <div class="carousel-caption">
                                    <h1>Check out our huge selection!</h1>
                                </div>
                            </div>
                        </div>
                        <!--Controls-->
                        <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="body-content">
        <div class="container">
            <div class="body-banner">
                <h2 class="body-banner-title">Check out our newest stock</h2>
            </div>
            <?php while ($product = mysqli_fetch_assoc($new)): ?>
            <div class="new-products">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="#" data-toggle="modal" data-target="#details-1"><img src="<? $product['image']?>"></a>
                        <p class="pricing">Our Price: £<?$product['price']?></p>
                    </div>
                </div>
            </div>
        </div>
<?php endwhile; ?>
    </section>

    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <nav class="footer-nav">
                        <h3>Products</h3>
                        <ul>
                            <a href="#"><li>Electric Guitar</li></a>
                            <a href="#"><li>Acoustic Guitar</li></a>
                            <a href="#"><li>Semi Acoustic Guitar</li></a>
                            <a href="#"><li>Electric Bass</li></a>
                            <a href="#"><li>Acoustic Bass</li></a>
                            <a href="#"><li>Electric Ukulele</li></a>
                            <a href="#"><li>Acoustic Ukulele</li></a>
                            <a href="#"><li>Violin</li></a>
                            <a href="#"><li>Harp</li></a>
                            <a href="#"><li>Banjo</li></a>
                        </ul>
                    </nav>
                </div>
            

                <div class="col-sm-3">
                    <nav class="footer-nav">
                        <h3>Services</h3>
                        <ul>
                        <a href="#"><li>Account</li></a>
                        <a href="#"><li>Contact</li></a>
                        <a href="#"><li>Privacy Policy</li></a>
                        <a href="#"><li>FAQ</li></a>
                        </ul>
                    </nav>
                </div>

                <div class="col-sm-3">
                    <nav class="footer-nav">
                        <h3>Our Stores</h3>
                        <ul>
                            <li>Newcastle</li>
                            <li>Sunderland</li>
                            <li>Leeds</li>
                            <li>London</li>
                        </ul>
                    </nav>
                </div>

                
                <div class="col-sm-3">
                    <nav class="footer-nav text-right">
                        <h3>Contact Us</h3>
                        <ul>
                            <li><strong>0800 123 4567</strong></li>
                            <li>Mon - Sat 9:30am to 6:00pm</li>
                            <li>Sun 10:30am - 5pm</li>

                        </ul>
                    </nav>
                </div>

        </div>
    </div>

        <div class="secondary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p>View how we manage your data, as well as your rights, by reading our Privacy Policy.<br>© Copyright 2019 THESTRINGSTORE Limited. All rights reserved. THESTRINGSTORE is a trademark of THESTRINGSTORE Limited.</p>
                    </div>
                </div>
            </div>
        </div>

    </footer>

<?php 
include 'details-modal-gibson-thumb.php';
include 'details-modal-ibanez-thumb.php';
include 'details-modal-accoustic1-thumb.php';
include 'details-modal-strat-thumb.php';
?>

</body>
</html>


