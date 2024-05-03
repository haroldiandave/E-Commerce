
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/DisplayProduct.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">    
        <title>E-COM WEBSITE</title>
    </head>
        <body>
            <header>
                <div class="nav container">
                    <?php echo '<img src="assets/nikelogo.png" alt="Logo" class="logo-nike">' ?>
                    <?php echo '<a href="#" class="logo" onclick="window.location.href=\'Homepage.php\'">Nike Store</a>' ?>
                    <?php echo '<i class=\'bx bx-shopping-bag\' id="cart-icon"></i>' ?>
                </div>    
            </header>
    
            <section class="shop-container">
                <?php echo '<h2 class="section-title">Shop Products</h2>' ?>
            </section>
    
            <div class="shop-content">
                <div class="product-box" >
                    <?php echo '<img src="assets/Nike Dunk Low.png" alt="" class="product-img">' ?>
                    <?php echo '<h2 class="product-title">Nike Dunk Low</h2>' ?>
                    <?php echo '<span class="price">₱5,495</span>' ?>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>
    
                <div class="product-box" >
                    <?php echo '<img src="assets/Air Jordan Low SE.png" alt="" class="product-img">' ?>
                    <?php echo '<h2 class="product-title">Air Jordan Low SE</h2>' ?>
                    <?php echo '<span class="price">₱6,895</span>' ?>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>

                <div class="product-box" >
                    <?php echo '<img src="assets/Air Jordan 1 Low.png" alt="" class="product-img">' ?>
                    <?php echo '<h2 class="product-title">Air Jordan 1 Low</h2>' ?>
                    <?php echo '<span class="price">₱6,195</span>' ?>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>

                <div class="product-box" >
                    <?php echo '<img src="assets/Nike AirForce 1 Essential.png" alt="" class="product-img">' ?>
                    <?php echo '<h2 class="product-title">Nike Air Force 1 Essential</h2>' ?>
                    <?php echo '<span class="price">₱4,125</span>' ?>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>

                <div class="product-box" >
                    <?php echo '<img src="assets/Nike Dunk High By You.png" alt="" class="product-img">' ?>
                    <?php echo '<h2 class="product-title">Nike Dunk High By You</h2>' ?>
                    <?php echo '<span class="price">₱1,242</span>' ?>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>

                <div class="product-box" >
                    <?php echo '<img src="assets/Air Jordan HighCut.png" alt="" class="product-img">' ?>
                    <?php echo '<h2 class="product-title">Air Jordan HighCut</h2>' ?>
                    <?php echo '<span class="price">₱5,615</span>' ?>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>

                <div class="product-box" >
                    <?php echo '<img src="assets/Air Jordan 1 Retro High OG.png" alt="" class="product-img">' ?>
                    <?php echo '<h2 class="product-title">Air Jordan 1 Retro High OG</h2>' ?>
                    <?php echo '<span class="price">₱8,123</span>' ?>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>

                <div class="product-box" >
                    <?php echo '<img src="assets/Nike Blazzer Vintage.png" alt="" class="product-img">' ?>
                    <?php echo '<h2 class="product-title">Nike Blazzer Vintage</h2>' ?>
                    <?php echo '<span class="price">₱9,234</span>' ?>
                    <i class='bx bx-shopping-bag add-cart'></i>
                </div>
            </div>
        </body>
    </html>