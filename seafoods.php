<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exito - Seafoods</title>
    <?php include("layout/header.php") ?>
</head>
<body>
    <?php include("layout/navbar.php") ?>
    <?php include("layout/bot.php") ?>
    <div class="container-fluid hero hero-seafood py-5">
        <div class="container p-5 text-center">
            <h1 class="fw-bold text-white display-1">
                Seafood - Main Dish
            </h1>
            <p class="text-white"><i>"Fresh from the ocean to your plate."</i></p>
        </div>
    </div>
<div class="container-fluid my-3 my-md-5 py-5">
    <div class="container d-flex flex-column flex-md-row justify-content-center gap-3 my-3 my-md-5">
        <div class="w-100 rounded-3 shadow p-3" data-aos="fade-up">
            <img src="assets/seafoods/sweet_sour.jpeg" alt="Sweet and Sour Fish" class="w-100 object-fit-cover rounded-3 menu mb-2" style="height: 250px">
                <h3 class="fw-semibold text-center">Sweet and Sour Fish</h3>
        </div>
        <div class="w-100 rounded-3 shadow p-3" data-aos="fade-up">
            <img src="assets/seafoods/sorc_sauce.jpeg" alt="Sweet and Sour Fish Fillet" class="w-100 object-fit-cover rounded-3 menu mb-2" style="height: 250px">
                <h3 class="fw-semibold text-center">Sweet and Sour Fish Fillet</h3>
        </div>
        <div class="w-100 rounded-3 shadow p-3" data-aos="fade-up">
            <img src="assets/seafoods/deep_sauce.jpeg" alt="Fish Fillet in Deep Sauce" class="w-100 object-fit-cover rounded-3 menu mb-2" style="height: 250px">
                <h3 class="fw-semibold text-center">Fish Fillet in Deep Sauce</h3>
        </div>
    </div>
    <div class="container d-flex flex-column flex-md-row justify-content-center gap-3 my-3 my-md-5">
        <div class="w-100 rounded-3 shadow p-3" data-aos="fade-up">
            <img src="assets/seafoods/corn_sauce.jpeg" alt="Hongkong Style Fish Fillet in Corn Sauce" class="w-100 object-fit-cover rounded-3 menu mb-2" style="height: 250px">
                <h3 class="fw-semibold text-center">Hongkong Style Fish Fillet in Corn Sauce</h3>
        </div>
        <div class="w-100 rounded-3 shadow p-3" data-aos="fade-up">
            <img src="assets/seafoods/white_sauce.jpeg" alt="Fish Fillet in White Sauce" class="w-100 object-fit-cover rounded-3 menu mb-2" style="height: 250px">
                <h3 class="fw-semibold text-center">Fish Fillet in White Sauce</h3>
        </div>
        <div class="w-100 rounded-3 shadow p-3" data-aos="fade-up">
            <img src="assets/seafoods/relleno.jpeg" alt="Bangus Relleno" class="w-100 object-fit-cover rounded-3 menu mb-2" style="height: 250px">
                <h3 class="fw-semibold text-center">Bangus Relleno</h3>
        </div>
    </div>
    <div class="container d-flex flex-column flex-md-row justify-content-center gap-3 my-3 my-md-5">
        <div class="w-100 rounded-3 shadow p-3" data-aos="fade-up">
            <img src="assets/seafoods/shrimp.jpeg" alt="Buttered Garlic Shrimp" class="w-100 object-fit-cover rounded-3 menu mb-2" style="height: 250px">
                <h3 class="fw-semibold text-center">Buttered Garlic Shrimp</h3>
        </div>
        <div class="w-100 rounded-3 shadow p-3" data-aos="fade-up">
            <img src="assets/seafoods/tempura.jpeg" alt="Shrimp Tempura" class="w-100 object-fit-cover rounded-3 menu mb-2" style="height: 250px">
                <h3 class="fw-semibold text-center">Shrimp Tempura</h3>
        </div>
        <div class="w-100 rounded-3 shadow p-3" data-aos="fade-up">
            <img src="assets/seafoods/kalamares.jpeg" alt="Squid Ring" class="w-100 object-fit-cover rounded-3 menu mb-2" style="height: 250px">
                <h3 class="fw-semibold text-center">Squid Ring</h3>
        </div>
    </div>
</div> 
    <div class="d-flex flex-column flex-md-row gap-0">
    <div class="col-12 col-md-4 beef">
            <a href="beef.php" class="text-decoration-none text-white">
                <div class="dish-desc p-3 p-lg-5 text-white">
                    <h2 class="dish-name">Beef</h2>
                    <small><i>Taste our best tasting beef dishes.</i></small>
                </div>
                <img src="assets/img/services/beef.jpg" class="dish beef" alt="Beef">
            </a>
        </div>
        <div class="col-12 col-md-4 pork">
            <a href="pork.php" class="text-decoration-none text-white">
                <div class="dish-desc p-3 p-lg-5 text-white">
                    <h2 class="dish-name">Pork</h2>
                    <small>Delicious and juicy pork dishes.</small>
                </div>
                <img src="assets/img/services/pork.jpg" class="dish pork" alt="Pork">
            </a>
        </div>
        <div class="col-12 col-md-4">
            <a href="chicken.php" class="text-decoration-none text-white">
                <div class="dish-desc p-3 p-lg-5 text-white">
                <h2 class="dish-name">Chicken</h2>
                <small>
                    Indulge our local chicken dishes.
                </small>
                </div>
                <img src="assets/img/services/chicken1.jpg" class="dish chicken" alt="Chicken">
            </a>
        </div>
    </div>
    <div class="d-flex flex-column flex-md-row gap-0">
        <div class="col-12 col-md-8">
            <a href="soup.php" class="text-decoration-none text-white">
                <div class="dish-desc p-3 p-lg-5 text-white">
                <h2 class="dish-name">Soup</h2>
                <small class="txet-white">Fill your stomach with our flavorful soups.</small>
                </div>
                <img src="assets/img/services/soup.jpg" class="dish soup" alt="Soup">
            </a>
        </div>
        <div class="col-12 col-md-4">
            <a href="vegetables.php" class="text-decoration-none text-white">
                <div class="dish-desc p-3 p-lg-5 text-white">
                <h2 class="dish-name">Vegetables</h2>
                <small>
                    Keep your appetite healthy with our organic and fresh vegetable dishes.
                </small>
                </div>
                <img src="assets/img/services/vegetable.jpg" class="dish vegetable" alt="Vegetables">
            </a>
        </div>
    </div>
    <div class="d-flex flex-column flex-md-row gap-0">
        <div class="col-12 col-md-4">
            <a href="appetizer.php" class="text-decoration-none text-white">
                <div class="dish-desc p-3 p-lg-5 text-white">
                <h2 class="dish-name">Appetizer</h2>
                <small>Match your foods with our <br> quality tasting appetizers.</small>
                </div>
                <img src="assets/img/services/appetizer1.jpg" class="dish appetizer" alt="Appetizer">
            </a>
        </div>
        <div class="col-12 col-md-4">
            <a href="pasta.php" class="text-decoration-none text-white">
                <div class="dish-desc p-3 p-lg-5 text-white">
                <h2 class="dish-name">Pasta</h2>
                <small class="txet-white">We serve creamy <br> pasta you can seek.</small>
                </div>
                <img src="assets/img/services/pasta.jpg" class="dish pasta" alt="Pasta">
            </a>
        </div>
        <div class="col-12 col-md-4">
            <a href="desserts.php" class="text-decoration-none text-white">
                <div class="dish-desc p-3 p-lg-5 text-white">
                <h2 class="dish-name">Desserts</h2>
                <small>Satisfy your cravings in desserts.</small>
                </div>
                <img src="assets/img/services/dessert.jpg" class="dish desserts" alt="Dessert">
            </a>
        </div>
    </div>
    <div class="d-flex flex-column flex-md-row gap-0">
        <div class="col-12 col-md-6">
            <a href="salad.php" class="text-decoration-none text-white">
                <div class="dish-desc p-3 p-lg-5 text-white">
                <h2 class="dish-name">Salad</h2>
                <small>
                    Extraordinary salad only here in Exito
                </small>
                </div>
                <img src="assets/img/services/salad.jpg" class="dish salad" alt="Salad">
            </a>
        </div>
        <div class="col-12 col-md-6">
            <a href="beverages.php" class="text-decoration-none text-white">
                <div class="dish-desc p-3 p-lg-5 text-white">
                <h2 class="dish-name">Beverages</h2>
                <small>
                    Fill your thirst with our freshly made beverages.
                </small>
                </div>
                <img src="assets/img/services/beverage.jpg" class="dish beverage" alt="Beverage">
            </a>
        </div>
    </div>
    <?php include("layout/footer.php") ?>
    <?php include("layout/script.php") ?>
    <?php include("layout/index.js") ?>
</body>
</html>