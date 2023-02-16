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
    <link rel="icon" type="image/svg+xml" href="./images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jetsports</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/javascript.js"></script>    
</head>
<body>

<?php require_once("cabeceras/header.php"); ?>

<div class="to-pagina">
    
        <div class="combaner">
            <img src="images/banner.png">
            <img src="images/banner1.png">
            <img src="images/banner2.png">
            <img src="images/banner3.png">
        </div>

    <div class="Carousel">
        <h2>Encuentra tu jersey favorito de la liga MX</h2>
        <div class="slick-list" id="slick-list">
            <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
            </button>
            <div class="slick-track" id="track">
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>30% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/1.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>30% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/2.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>30% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/3.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>30% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/4.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>30% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/9.jpeg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>30% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/10.jpeg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>30% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/11.jpeg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>30% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/12.jpeg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                
            </div>
            <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
            </button>
        </div>
        <h2>También contamos con jersey de tus equipos de Europa</h2>
        <div class="slick-list" id="slick-list">
            <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
            </button>
            <div class="slick-track" id="track">
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>15% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/13.png" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>15% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/14.png" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>15% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/15.png" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>15% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/16.png" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>15% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/17.png" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>15% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/18.png" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>15% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/19.png" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                        <a href="/">
                            <h4><small>¡Gran oferta!</small>15% de descuento</h4>
                            <picture>
                                <img src="images/camisetas/20.png" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
               
            </div>
            <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
            </button>
        </div>
    </div>

    <h2 class="texflo">Llévate estos tennis a un excelente precio</h2>




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

    <?php require_once("cabeceras/footer.php"); ?>


    <script>
        function showCart(x){
            document.getElementById("products-id").style.display = "block";
        }
        function closeBtn(){
             document.getElementById("products-id").style.display = "none";
        }

    </script>
    <script src="js/custom.js" ></script>
</body>
</html>