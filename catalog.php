<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Amarah's Corner - BF Resort Las Piñas</title>

    <style>
        body {
            background: url(./assets/images/background.png) no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div id="preloader"></div>

    <?php include './includes/navbar.php'; ?>

    <section class="catalog">
        <div class="container">
            <!-- <div class="container-left">
                <div class="container-left-cont">

                </div>
            </div> -->
            <div class="container-right">
                <h3 class="title-header">Classic Flavor</h3>
                <div class="container-right-cont">
                    <div class="catalog-box">
                        <div class="img-cont">
                            <img src="./assets/images/pizza.png" alt="">
                        </div>
                        <div class="details">
                            <h5>Ham & Cheese</h5>
                            <h5 class="price">P199</h5>
                            <button class="order-btn"><i class='bx bxs-cart'></i>ORDER NOW</button>
                        </div>
                    </div>
                    <div class="catalog-box">
                        <div class="img-cont">
                            <img src="./assets/images/pizza.png" alt="">
                        </div>
                        <div class="details">
                            <h5>Hawaiian Pizza</h5>
                            <h5 class="price">P199</h5>
                            <button class="order-btn"><i class='bx bxs-cart'></i>ORDER NOW</button>
                        </div>
                    </div>
                    <div class="catalog-box">
                        <div class="img-cont">
                            <img src="./assets/images/pizza.png" alt="">
                        </div>
                        <div class="details">
                            <h5>Pepperoni</h5>
                            <h5 class="price">P199</h5>
                            <button class="order-btn"><i class='bx bxs-cart'></i>ORDER NOW</button>
                        </div>
                    </div>
                    <div class="catalog-box">
                        <div class="img-cont">
                            <img src="./assets/images/pizza.png" alt="">
                        </div>
                        <div class="details">
                            <h5>Beef & Mushroom</h5>
                            <h5 class="price">P199</h5>
                            <button class="order-btn"><i class='bx bxs-cart'></i>ORDER NOW</button>
                        </div>
                    </div>
                </div>
                <h3 class="title-header">Special Flavor</h3>
                <div class="container-right-cont">
                    <div class="catalog-box">
                        <div class="img-cont">
                            <img src="./assets/images/pizza.png" alt="">
                        </div>
                        <div class="details">
                            <h5>Beef & Mushroom Overload</h5>
                            <h5 class="price">P249</h5>
                            <button class="order-btn"><i class='bx bxs-cart'></i>ORDER NOW</button>
                        </div>
                    </div>
                    <div class="catalog-box">
                        <div class="img-cont">
                            <img src="./assets/images/pizza.png" alt="">
                        </div>
                        <div class="details">
                            <h5>Pepperoni Overload</h5>
                            <h5 class="price">P249</h5>
                            <button class="order-btn"><i class='bx bxs-cart'></i>ORDER NOW</button>
                        </div>
                    </div>
                    <div class="catalog-box">
                        <div class="img-cont">
                            <img src="./assets/images/pizza.png" alt="">
                        </div>
                        <div class="details">
                            <h5>Creamcheese Supreme</h5>
                            <h5 class="price">P249</h5>
                            <button class="order-btn"><i class='bx bxs-cart'></i>ORDER NOW</button>
                        </div>
                    </div>
                    <div class="catalog-box">
                        <div class="img-cont">
                            <img src="./assets/images/pizza.png" alt="">
                        </div>
                        <div class="details">
                            <h5>Spinach Overload</h5>
                            <h5 class="price">P249</h5>
                            <button class="order-btn"><i class='bx bxs-cart'></i>ORDER NOW</button>
                        </div>
                    </div>
                    <div class="catalog-box">
                        <div class="img-cont">
                            <img src="./assets/images/pizza.png" alt="">
                        </div>
                        <div class="details">
                            <h5>All Meat Pizza</h5>
                            <h5 class="price">P249</h5>
                            <button class="order-btn"><i class='bx bxs-cart'></i>ORDER NOW</button>
                        </div>
                    </div>
                    <div class="catalog-box">
                        <div class="img-cont">
                            <img src="./assets/images/pizza.png" alt="">
                        </div>
                        <div class="details">
                            <h5>Beef & Bacon Overload</h5>
                            <h5 class="price">P249</h5>
                            <button class="order-btn"><i class='bx bxs-cart'></i>ORDER NOW</button>
                        </div>
                    </div>
                    <div class="catalog-box">
                        <div class="img-cont">
                            <img src="./assets/images/pizza.png" alt="">
                        </div>
                        <div class="details">
                            <h5>Bacon & Ham</h5>
                            <h5 class="price">P249</h5>
                            <button class="order-btn"><i class='bx bxs-cart'></i>ORDER NOW</button>
                        </div>
                    </div>
                    <div class="catalog-box">
                        <div class="img-cont">
                            <img src="./assets/images/pizza.png" alt="">
                        </div>
                        <div class="details">
                            <h5>Triple Cheese</h5>
                            <h5 class="price">P249</h5>
                            <button class="order-btn"><i class='bx bxs-cart'></i>ORDER NOW</button>
                        </div>
                    </div>
                </div>
                <div id="load-more-products">
                    <input type="submit" class="load-more-products" value="LOAD MORE">
                </div>
            </div>
    </section>

    <!-- <section class="catalog">
        
        <div class="container">
            <div class="container-right">
                
            </div>
        </div>
    </section> -->

    <!-- SCRIPT -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js">
    </script>
    <script src="./assets/js/script.js"></script>

    <script>
        var products_col = document.querySelectorAll(".catalog-box");
        var load_more_products = document.querySelector(".load-more-products");

        var current_products_col = 4;
        load_more_products.addEventListener("click", function () {
            for (var i = current_products_col; i < current_products_col + 4; i++) {
                if (products_col[i]) {
                    products_col[i].style.display = "flex";
                }
            }
            current_products_col += 4;
            if (current_products_col >=
                products_col.length) {
                event.target.style.display = "none";
            }
        });
    </script>

    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>
</body>

</html>