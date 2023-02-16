

<header class="cabecera">
        <nav>
            <ul>
                <li><a href="index.php"> Inicio </a></li>
                <li><a href="camisetas.php"> Camisetas </a></li>
                <li> </li>
            </ul>
        </nav>
        <div style="margin-right: 5%;" class="header-section container">
            <?php echo $_SESSION['usuario'];?>
            <a style="margin-right: 20px; margin-left: 20px;" class="ini-a" href="php/cerrarSes.php"> Cerrar sesión </a>

            <div>
                <img onclick="showCart(this)" class="cart" src="./images/carrito.png" alt="">
                <p class="count-product">0</p>
            </div>
            <div class="cart-products" id="products-id">
                <p class="close-btn" onclick="closeBtn()">X</p>
                <h3>Mi carrito</h3>
                <div class="card-items">
            </div>
                <h2>Total: <strong class="price-total">0</strong> $</h2>
            </div>
            </div>
        
    </header>