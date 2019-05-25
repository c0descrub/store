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

    <section class="product-overview">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img class="product-shot" src="img/gibson.jpg">
                </div>

                <div class="col-sm-8">
                    <h1 class="product-title"> Gibson Custom Shop 1959 Les Paul Standard Murphy Aged Cherry Darkburst </h1>
                    <p class="product-subtitle">Includes Hard Case</p>
                    <p class="product-price">£7,999.00</p>
                    <p class="product-stock">In Stock: 1 Available</p>
                    <p class="product-overview--title">Product Overview</p>
                    <p class="product-description">No specific Gibson model carries more intrigue and gravitas than the 1959 Les Paul Standard. It wasn't a successful model when it was released (under 650 were made) but before long it was adopted by some of the world's greatest guitarists -- Jimmy Page, Keith Richards, Eric Clapton, Jeff Beck, Duane Allman, Mike Bloomfield, and Billy Gibbons, to name a few.<br><br>The instrument was simply enchanting, from its beautiful figured maple top to its extreme sonic versatility. "It has a deep, powerful sound and you can use it to imitate just about anything – violin, sax, cello, even a sitar," says Jeff Beck.<br><br>All these reasons and more made the 1959 Les Paul Standard the most coveted and legendary guitar on the planet.</p>
                    <button type="button" class="btn btn-success btn-lg basket-button">Add to basket</button>
                </div>
            </div>
        </div>
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
</body>
</html>