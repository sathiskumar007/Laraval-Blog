<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delicious Backery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/blogs.css">
    <link rel="stylesheet" href="/edit.css">
    <link rel="stylesheet" href="/show.css">
    <link rel="stylesheet" href="/blogCreate.css">
</head>



<body>

    <!-- <section> -->
    <!-- <section>
        <nav>
            <label for="check-btn" id="ham-icon"><i class="fa-solid fa-burger"></i></label>
            <input type="checkbox" name="" id="check-btn">
            <img src="/img/Asset 7@4x.png" alt="" class="logo1">
            <ul>
                <li><a href="/index">HOME</a></li>
                <li><a href="/recipes">RECIPES</a></li>
                <li><a href="/ourstories">OURSTORIES</a></li>
                <li><a href="/blogs">BLOGS</a></li>
                <li><a href="/login">
                        <p style="margin-top: 20px;" class="text-uppercase">Login</p>
                    </a></li>
                <li><a href="/register">
                        <p style="margin-top: 20px;" class="text-uppercase">Register</p>
                    </a></li>
                <li><a href="#"><img src="/img/Shopping Cart.png" alt="" width="24px" height="20px"></a></li>

            </ul>
        </nav>
    </section> -->


    <section>
        <nav>
            <label for="check-btn" id="ham-icon"><i class="fa-solid fa-burger"></i></label>
            <input type="checkbox" name="" id="check-btn">
            <img src="./img/Asset 7@4x.png" alt="" class="logoo">
            <ul>
                <li><a href="/">Home</a></li>
                <!-- <li><a href="/recipes">RECIPES</a></li>
                <li><a href="/ourstories">OURSTORIES</a></li> -->
                <!-- <li><a href="{{ url('/blogs?page=' . request('page', 1)) }}" style="color: #E3493B;">Blogs</a></li> -->
                <li><a href="/blogs" style="">Blogs</a></li>
                <li><a href="/login">
                        <p style="margin-top: 20px;" >Login</p>
                    </a></li>
                <li><a href="/register">
                        <p style="margin-top: 20px;" >Register</p>
                    </a></li>
                <!-- <li><a href="#"><img src="/img/Shopping Cart.png" alt="" width="24px" height="20px"></a></li> -->
                <!-- <li><a href="#"><img src="img/Shopping Cart.png" alt="" width="24px" height="20px"></a></li>
                <li><a href="#"><img src="img/Customer.png" alt="" width="24px" height="20px"></a></li> -->
            </ul>
        </nav>
    </section>
    <!-- banner section -->
    <section>
        <div class="banner">
            <div class="banner-content">
                <p>Together, With Our Great Delicious Bakery Family, We Enjoy Bringing You Our Favourite</p>
                <h2>MAKING YOUR FAVOURITE CAKES AND COOKIES</h2>
                <button class="btn">VIEW MORE</button>
            </div>
        </div>
    </section>
    <!-- banner section end -->


    @yield('content')



    <!-- About section  -->

    <section>
        <div id="About" class="about-container">
            <h3>Sweet</h3>
            <h1>For Every Taste</h1>
            <p>Welcome to one of the biggest and the sweetest sweet stores all over the country! We launched our
                business back <br> in 1998, and we grew from a local shop to a big store, which also delivers its
                products
                all over the country. We can<br> promise you, that regardless of your age, you will enjoy being at this
                store. During last 18 years, we’ve been cherishing<br> the sweet business, enlarging the selection,
                training
                our staff, widening our customer audience.</p>
            <button>Shop More</button>
        </div>
    </section>

    <!-- About section end -->

    <!-- card section  -->
    <!-- <section>
        <div class="card-container  " style="display: flex;">
            <div class="card">
                <div class="icon">
                    <i class="fa-regular fa-heart"></i>
                </div><br><br>
                <div class="card-content">
                    <img src="./img/image 50.png" alt="">
                    <p>CHOCOLATE SPARINKLES</p>
                    <button>VIEW MORE</button>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-regular fa-heart"></i>
                </div><br><br>
                <div class="card-content">
                    <img src="./img/image 51.png" alt="">
                    <p>DESSERT FRUIT CAKE</p>
                    <button>VIEW MORE</button>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-regular fa-heart"></i>
                </div><br><br>
                <div class="card-content">
                    <img class="mm" src="./img/card3.png" alt="">
                    <p>CREAM CAKE FOREST WHITE ICED</p>
                    <button>VIEW MORE</button>
                </div>
            </div>
        </div>
    </section> -->

    <!-- card section end -->

    <section>
        <div class="about">
            <h1>The 13 best recipes to bake in March</h1>
        </div>
    </section>

    <!-- contest section  -->

    <section>
        <div class="contest-container">
            <div class="inside-container">
                <div class="left-side">
                    <img src="./img/deliciouss.png" alt="">
                </div>
                <div class="right-side">
                    <h4>WE HAVE DELICIOUS,</h4>
                    <h5>SPECICALLY PREPARED ITEMS</h5>
                    <h1>PERFECT</h1>
                    <h1>FOE ANY</h1>
                    <h1>EVENT</h1>
                    <div class="btn">
                        <button>SHOW MORE</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="inside-right-container">
            <div class="left-side">
                <h1>SHARED RECIPES</h1>
                <h1>WITH YOUR FRIENDS</h1>
                <h1>AND PARTNERS</h1>
                <div class="btn">
                    <button>READ MORE</button>
                </div>
            </div>
            <div class="right-side">
                <img src="img/partner.png" alt="">
            </div>
        </div>

    </section>

    <!-- contest section end -->


    <!-- Subscribe section  -->

    <!-- <section>
        <div class="submit">
            <div class="subscribe">
                <h1>Subscribe to our newsletter</h1>
                <form class="input">
                    <input type="emil" id="username" name="email"  placeholder="Enter Your Email" required>
                    <button class="f-btn">Subscribe</button>
                </form>
            </div>
        </div>
    </section> -->
    <!-- Subscribe section end -->




    <!-- footer section -->
    <section>
        <div class="footer">
            <div class="logo">
                <a href="./index.html"><img src="img/Asset 7@4x.png" alt="logo"></a>
            </div>
            <div class="help">
                <h3 class="tittle">Need Help?</h3>
                <a href="https://www.google.com/maps"> Store Location</a>
                <!-- <a href="#">Delicious Backery Location</a> -->
            </div>
            <div class="rosource">
                <h3 class="tittle">Resources</h3>
                <a href="./index.html#About">Our Story</a>
                <a href="./Recipie.html#recipes">Most Favourite Recipies</a>
            </div>
            <div class="social">
                <h3 class="tittle">Social</h3>
                <a href="https://www.instagram.com/" target="_blank">Instagram</a>
                <a href="https://www.facebook.com/" target="_blank">Facebook</a>
                <a href="https://www.twitter.com/" target="_blank">Twitter</a>
            </div>
        </div>
        <!-- <hr> -->
        <div class="copyrights">
            <p>Delicious Backery © 2023. All Rights Reserved</p>
        </div>
    </section>
    <!-- footer section -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>