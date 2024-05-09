<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <?php include("layout/header.php") ?>
</head>

<body>
    <?php include("layout/navbar.php") ?>
    <div class="container-fluid hero-home py-5">
        <div class="container text-center py-5 my-5">
            <h1 class="fw-semibold text-white display-1">
                <span class="green">Exito Catering Services </span><br />
                &amp; Event Decorators
            </h1>
            <p class="light">
                <i>"Elegant and Quality Food Services"</i>
            </p>
            <a href="offers.php" class="text-center text-decoration-none px-3 py-2 book-button text-light rounded-5">
                Book Now
            </a>
        </div>
    </div>
    <div class="container-fluid py-5 feature">
        <div class="container py-5">
            <div class="text-center">
                <h2 class="fw-light text-uppercase text-secondary display-5">
                    Your Special Occasion
                </h2>
                <p><i>Indulge a memorable experience with the people you
                        love.</i></p>
            </div>
            <div class="d-block d-lg-flex justify-content-evenly align-items-baseline my-5 py-3">
                <div class="text-center">
                <img src="./assets/img/casual.jpg" alt="Corporate Event" class="object-fit-cover event" />
                    
                    <div class="content mt-3 d-block mx-auto w-50">
                        <h4 class="w-medium">Party Events</h4>
                        <p class="text-secondary">We serve the most popular events of Filipinos,
                            we offer different foods you can love.</p>
                    </div>
                </div>
                <div class="text-center mt-5 md-md-0">
                <img src="./assets/img/partyy.jpg" alt="Party Event" class="object-fit-cover event" />
                    <div class="content mt-3 d-block mx-auto w-75">
                        <h4 class="w-medium">Corporate Events</h4>
                        <p class="text-secondary">Enjoy our corporate package with various and
                            assorted foods.</p>
                    </div>
                </div>
                <div class="text-center mt-5 md-md-0">
                    <img src="./assets/img/wedding.jpg" alt="Wedding Event" class="object-fit-cover event" />
                    <div class="content mt-3 d-block mx-auto w-50">
                        <h4 class="w-medium">Wedding Events</h4>
                        <p class="text-secondary">We cater quality wedding event package with
                            customizable theme of your choice.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid icon-container py-5">
        <div class="container d-flex flex-column flex-md-row gap-5 gap-md-3 justify-content-evenly align-items-center">
            <div class="text-center grey">
                <i class="fa-solid fa-star icon"></i>
                <br><br>
                <strong>Quality Service</strong> <br>
                <small>We value the experience of our customers</small>
            </div>
            <div class="text-center grey">
                <i class="fa-solid fa-heart icon"></i>
                <br><br>
                <strong>Liked by many customers</strong><br>
                <small>Promotes customer satisfaction</small>
            </div>
            <div class="text-center grey">
                <i class="fa-solid fa-bowl-food icon"></i>
                <br><br>
                <strong>Delicious dishes</strong> <br>
                <small>Indulge our best tasting dishes</small>
            </div>
            <div class="text-center grey">
                <i class="fa-solid fa-peso-sign icon"></i>
                <br><br>
                <strong>Affordable price</strong> <br>
                <small>Exito offers a catering service for an affordable price.</small>
            </div>
        </div>
    </div>
    
    <div class="ingredients text-center py-5 light">
        <div class="container my-3 py-5">
        <h2 class="fw-bold display-4">The Best Ingredients</h2>
        <p>We take an enormous amount of pride in sourcing our ingredients carefully to ensure that the flavors of our food are as delicious and authentic as possible. 
           <br> We're only able to achieve this level of excellence by putting an extra care into our menu items that is difficult to find at other restaurant.
        </p>
        <div class="py-3 py-md-5">
            <img src="assets/img/services/4.jpg" alt="Ingredients" class="ingredient-img d-block mx-auto">
        </div>
        </div>
    </div>
    
    <div class="container-fluid py-5 chef">
        <div class="container">
            <div class="p-5 text-center light">
                <h2 class="fw-semibold display-4">Our Chefs</h2>
                <p class="para">
                    Discover the best tasting dishes from our experienced
                    chef's. These professional people showcased their
                    passion and talent in the foods in business industry for
                    several years. Their goal is not just only to satisfy
                    customers but also to provide you with the best quality
                    dishes here in Iloilo.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 discover">
        <div class="container p-5 text-center light">
            <h2 class="fw-semibold display-4">
                Discover
            </h2>
            <p class="light para">Discover new facets of taste together with our talented chefs who are ready to <br> delight you with new delicious dishes and drinks every day.</p>
        </div>
    </div>
    <?php include("layout/footer.php") ?>

</body>

</html>