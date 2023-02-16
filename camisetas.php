<?php 
session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script> 
                alert("Debes estar registrado, por favor inicia sesión");
                window.location = "inicio_ses.php"
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg+xml" href="./images/favicon.png" />
    <title> Camisetas </title>
</head>
<body>

    <?php require_once("cabeceras/header.php"); ?>

    <div class="iconos">

        <div class="ico-cont">
            <a href="#"> <img style="height: 100px; width: 100px;" src="images/iconos/ligamx.png"> </a>
        </div>

        <div class="ico-cont">
            <a href="#"> <img style="height: 100px; width: 100px;" src="images/iconos/laliga.png"> </a>
        </div>

        <div class="ico-cont">
            <a href="#"> <img style="height: 100px; width: 100px;" src="images/iconos/premier.png"> </a>
        </div>

        <div class="ico-cont">
            <a href="#"> <img style="height: 100px; width: 100px;" src="images/iconos/seria.png"> </a>
        </div>

    </div>

    <section class="container">
        <div class="products">
            <div class="carts">
                <div>
                    <img src="./images/camisetas/1.jpg" alt="">
                    <p><span>1559</span>$</p>
                </div>
                <p class="title"> Jersey del Santos Laguna </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $1559</p>
                <a href="" data-id="1" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/2.jpg" alt="">
                    <p><span>1399</span>$</p>
                </div>
                <p class="title"> Jersey del Pachuca  </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $1399</p>
                <a href="" class="btn-add-cart" data-id="2">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/3.jpg" alt="">
                    <p><span>1749</span>$</p>
                </div>
                <p class="title"> Jersey del Tijuana  </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $1749</p>
                <a href="" data-id="3" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/4.jpg" alt="">
                    <p><span>2200</span>$</p>
                </div>
                <p class="title"> Jersey del Tijuana (Visitante) </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2200</p>
                <a href="" data-id="4" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/5.jpg" alt="">
                    <p><span>1958</span>$</p>
                </div>
                <p class="title"> Jersey del Real Madrid  </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $1958</p>
                <a href="" data-id="5" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/6.jpg" alt="">
                    <p><span>2399</span>$</p>
                </div>
                <p class="title"> Jersey del Arsenal  </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2399</p>
                <a href="" data-id="6" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/7.jpg" alt="">
                    <p><span>2099</span>$</p>
                </div>
                <p class="title"> Jersey del Juventus </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2099</p>
                <a href="" data-id="7" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/8.jpg" alt="">
                    <p><span>1855</span>$</p>
                </div>
                <p class="title">  Jersey del Manchester United  </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $1855</p>
                <a href="" data-id="8" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/9.jpeg" alt="">
                    <p><span>2700</span>$</p>
                </div>
                <p class="title"> Jersey del Monterrey  </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2700</p>
                <a href="" data-id="9" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/10.jpeg" alt="">
                    <p><span>2700</span>$</p>
                </div>
                <p class="title"> Jersey del Pumas </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2700</p>
                <a href="" data-id="10" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/11.jpeg" alt="">
                    <p><span>2559</span>$</p>
                </div>
                <p class="title"> Jersey del Cruz Azul </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2559</p>
                <a href="" data-id="11" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/12.jpeg" alt="">
                    <p><span>1990</span>$</p>
                </div>
                <p class="title"> Jersey del Chivas </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $1990</p>
                <a href="" data-id="11" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/16.png" alt="">
                    <p><span>2700</span>$</p>
                </div>
                <p class="title"> Jersey del Liverpool </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2700</p>
                <a href="" data-id="9" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/17.png" alt="">
                    <p><span>2700</span>$</p>
                </div>
                <p class="title"> Jersey del Inter de MIlán </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2700</p>
                <a href="" data-id="10" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/18.png" alt="">
                    <p><span>2559</span>$</p>
                </div>
                <p class="title"> Jersey del Juventus (Alternativa)  </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2559</p>
                <a href="" data-id="11" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/19.png" alt="">
                    <p><span>1990</span>$</p>
                </div>
                <p class="title"> Jersey del Real Madrid (Visitante)  </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $1990</p>
                <a href="" data-id="11" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/13.png" alt="">
                    <p><span>2700</span>$</p>
                </div>
                <p class="title"> Jersey del Bayern Munchen </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2700</p>
                <a href="" data-id="9" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/14.png" alt="">
                    <p><span>2700</span>$</p>
                </div>
                <p class="title"> Jersey del Ajax </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2700</p>
                <a href="" data-id="10" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/15.png" alt="">
                    <p><span>2559</span>$</p>
                </div>
                <p class="title"> Jersey del PSG </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2559</p>
                <a href="" data-id="11" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/camisetas/12.jpeg" alt="">
                    <p><span>1990</span>$</p>
                </div>
                <p class="title"> Jersey del Guadalajara  </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $1990</p>
                <a href="" data-id="11" class="btn-add-cart">Agregar al carrito</a>
            </div>
        </div>
    </section>




<section class="container">
        <div class="products">
            <div class="carts">
                <div>
                    <img src="./images/tenis/t1.webp" alt="">
                    <p><span>1559</span>$</p>
                </div>
                <p class="title">Tenis Duramo SL</p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $1559</p>
                <a href="" data-id="1" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/tenis/t2.webp" alt="">
                    <p><span>1399</span>$</p>
                </div>
                <p class="title"> Tenis Galaxy 6 </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $1399</p>
                <a href="" class="btn-add-cart" data-id="2">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/tenis/t3.webp" alt="">
                    <p><span>1749</span>$</p>
                </div>
                <p class="title"> Tenis Run Falcon 2.0 </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $1749</p>
                <a href="" data-id="3" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/tenis/t4.webp" alt="">
                    <p><span>2200</span>$</p>
                </div>
                <p class="title"> Tenis ZX 2K BOOST 2.0</p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2200</p>
                <a href="" data-id="4" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/tenis/t5.webp" alt="">
                    <p><span>1958</span>$</p>
                </div>
                <p class="title"> Tenis Forum 84 Low </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $1958</p>
                <a href="" data-id="5" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/tenis/t6.webp" alt="">
                    <p><span>2399</span>$</p>
                </div>
                <p class="title"> Tenis OZRAH </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2399</p>
                <a href="" data-id="6" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/tenis/t7.webp" alt="">
                    <p><span>2099</span>$</p>
                </div>
                <p class="title"> Tenis ZX 22 BOOST </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2099</p>
                <a href="" data-id="7" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/tenis/t8.webp" alt="">
                    <p><span>1855</span>$</p>
                </div>
                <p class="title"> Tenis Duramo SL </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $1855</p>
                <a href="" data-id="8" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/tenis/t9.webp" alt="">
                    <p><span>2700</span>$</p>
                </div>
                <p class="title"> Tenis Adi2000 </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2700</p>
                <a href="" data-id="9" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/tenis/t10.webp" alt="">
                    <p><span>2700</span>$</p>
                </div>
                <p class="title"> Tenis Adi2000 (Naranjas)</p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2700</p>
                <a href="" data-id="10" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/tenis/t11.webp" alt="">
                    <p><span>2559</span>$</p>
                </div>
                <p class="title"> Tenis Forum Low </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $2559</p>
                <a href="" data-id="11" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="./images/tenis/t12.webp" alt="">
                    <p><span>1990</span>$</p>
                </div>
                <p class="title"> Tenis Forum 84 Low </p>
                <p style="color: red; margin-top: -15px;" class="title">A solo $1990</p>
                <a href="" data-id="11" class="btn-add-cart">Agregar al carrito</a>
            </div>
        </div>
    </section>

<script>
        function showCart(x){
            document.getElementById("products-id").style.display = "block";
        }
        function closeBtn(){
             document.getElementById("products-id").style.display = "none";
        }

    </script>
    <script src="js/custom.js" ></script>

<?php require_once("cabeceras/footer.php"); ?>

</body>
    
</body>
</html>