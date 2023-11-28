<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="src/assets/main.css">
    <title>Plantes rares</title>
</head>

<body>
<div class="bg-plantes">
    <div class="row">
        <div class="container">
            <?php include('navbar.php'); ?>
        </div>
    </div>

    <div class="text-center pt-5 pb-5">
        <h1>Plantes rares</h1>
        <p class="p">
            Lorem ipsum dolor sit amet. Ut totam exercitationem aut itaque quia eum aperiam eveniet 33 fugiat expedita.
            <br>
            Et ducimus itaque ex dicta nihil est sint ullam aut voluptas omnis.
        </p>
        <div class="mt-4">
            <ul>
                <a href="/shop.php"><li  class="btn btn-primary me-2">Boutique</li></a>
                <a href="/about.php"><li class="btn btn-success">En savoir plus</li></a>
            </ul>
        </div>
    </div>
</div>
<div class="text-center pt-5 pb-5 bg-g">
    <h2>Notre boutique</h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    </p>
    <div class="d-flex justify-content-center ">
        <div class="d-flex flex-direction-column m-2">
            <div class="text-start bg-w p-4">
                <h3>Donec lobortis nisl</h3>
                <h4>Large Assortiment</h4>
                <br>
                <p class="p">Lorem ipsum dolor sit amet,<br>
                    consectetur adipiscing elit.<br>
                    Vestibulum euismod nisi quis<br>
                    quam laoreet.</p>
                <a href="/fournitures.php" class="btn btn-success">Achetez</a>
            </div>
            <div class="d-flex align-items-center bg-db p-4">
                <i class="fa-solid fa-cart-shopping fa-6x" style="color: #ffffff;"></i>
            </div>
        </div>

        <div class="d-flex flex-direction-column m-2">
            <div class="text-start bg-w p-4">
                <h3>Nullam suscipti diam</h3>
                <h4>Plantes rares</h4>
                <br>
                <p class="p">Lorem ipsum dolor sit amet,<br>
                    consectetur adipiscing elit.<br>
                    Vestibulum euismod nisi quis<br>
                    quam laoreet.</p>
                <a href="/shop.php" class="btn btn-success">Laissez-vous tenter</a>
            </div>
            <div class="d-flex align-items-center bg-db p-4">
                <i class="fa-solid fa-globe fa-6x" style="color: #ffffff;"></i>
            </div>
        </div>
    </div>
</div>
<div class=" d-flex flex-column text-center justify-content-center align-items-center pt-5 pb-5">
    <p class="h1">Les bonnes affaires</p>
    <p class="mb-2">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    </p>
    <div class="d-flex justify-content-center flex-column">
        <div class="d-flex m-2">
            <div class="d-flex align-items-center">
                <img src="Images/Thuja.jpg" width="275px">
            </div>
            <div class="text-start bg-g p-4">
                <h3>Western Thuja</h3>
                <br>
                <p class="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                    Suspendisse condimentum libero vel mauris malesuada euismod.<br>
                    Fusce vehicula metus id magna sollicitudin,<br>
                    sed fringilla quam mattis.<br>
                    Nulla facilisi. Sed euismod lacus eu lectus scelerisque.</p>
            </div>
            <div class=" d-flex justify-content-center flex-column bg-g pe-3">
                <h3>€ 139</h3>
                <a href="/panier.php"class="btn btn-success">Ajouter au panier</a>
            </div>
        </div>
        <div class="d-flex justify-content-center flex-column">
            <div class="d-flex m-2">
                <div class="d-flex align-items-center">
                    <img src="Images/Juniperus.jpg" width="275px">
                </div>
                <div class="text-start bg-g p-4">
                    <h3>Junipérus à baies
                        bleues</h3>
                    <br>
                    <p class="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                        Suspendisse condimentum libero vel mauris malesuada euismod.<br>
                        Fusce vehicula metus id magna sollicitudin,<br>
                        sed fringilla quam mattis.<br>
                        Nulla facilisi. Sed euismod lacus eu lectus scelerisque.</p>
                </div>
                <div class=" d-flex justify-content-center flex-column bg-g pe-3">
                    <h3>€ 119</h3>
                    <a href="/panier.php"class="btn btn-success">Ajouter au panier</a>
                </div>
            </div>
            <div class="d-flex justify-content-center flex-column">
                <div class="d-flex m-2">
                    <div class="d-flex align-items-center">
                        <img src="Images/Cedre.jpg" width="275px">
                    </div>
                    <div class="text-start bg-g p-4">
                        <h3>Cèdre de Sibérie</h3>
                        <br>
                        <p class="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                            Suspendisse condimentum libero vel mauris malesuada euismod.<br>
                            Fusce vehicula metus id magna sollicitudin,<br>
                            sed fringilla quam mattis.<br>
                            Nulla facilisi. Sed euismod lacus eu lectus scelerisque.</p>
                    </div>
                    <div class=" d-flex justify-content-center flex-column bg-g pe-3">
                        <h3>€ 99</h3>
                        <a href="/panier.php"class="btn btn-success">Ajouter au panier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=" d-flex flex-column text-center justify-content-center align-items-center pt-5 pb-5 bg-g">
    <div class="d-flex justify-content-center flex-column">
        <div class="d-flex bg-w p-4">
            <div class="text-start me-5">
                <h3>Découvrez notre<br>
                    univers</h3>
                <br>
                <p class="p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed<br>
                    diam nonummy nibh euismod tincidunt ut laoreet dolore<br>
                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam,<br>
                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut<br>
                    aliquip ex ea commodo consequat. Duis autem vel eum iriure<br>
                    dolor in hendrerit in vulputate velit esse molestie consequat, vel<br>
                    <br>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed<br>
                    diam nonummy nibh euismod tincidunt ut laoreet dolore<br>
                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam<br>,
                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut<br>
                    aliquip ex ea commodo consequat. Duis autem vel eum iriure<br>
                    dolor in hendrerit in vulputate velit esse molestie consequat, vel<br>
                </p>
                <a href="/about.php" class="btn btn-primary">Lire plus</a>
            </div>
            <div class="d-flex align-items-center">
                <img src="Images/Univers.jpg" width="400px">
            </div>
        </div>
    </div>
</div>
<div class="text-center pt-5 pb-5">
    <div class="d-flex justify-content-center ">
        <div class="d-flex flex-direction-column m-3">
            <div class=" bg-g p-4">
                <img src="Images/Nenuphar.jpg" width="100px" class="mb-2">
                <br>
                <h5>Le spécialiste du nénuphar</h5>
                <br>
                <p class="p">Lorem ipsum dolor sit amet, consectetuer<br>
                    adipiscing elit, sed diam nonummy<br>
                    nibh euismod tincidunt ut laoreet dolore</p>
                <div class="btn btn-success">En savoir plus</div>
            </div>
        </div>
        <div class="d-flex flex-direction-column m-3">
            <div class=" bg-g p-4">
                <img src="Images/Rose.jpg" width="100px" class="mb-2">
                <br>
                <h5>La rose déclinée</h5>
                <br>
                <p class="p">Lorem ipsum dolor sit amet, consectetuer<br>
                    adipiscing elit, sed diam nonummy<br>
                    nibh euismod tincidunt ut laoreet dolore</p>
                <div class="btn btn-success">En savoir plus</div>
            </div>
        </div>
        <div class="d-flex flex-direction-column m-3">
            <div class=" bg-g p-4">
                <img src="Images/Astuces.jpg" width="100px" class="mb-2">
                <br>
                <h5>Nos astuces</h5>
                <br>
                <p class="p">Lorem ipsum dolor sit amet, consectetuer<br>
                    adipiscing elit, sed diam nonummy<br>
                    nibh euismod tincidunt ut laoreet dolore</p>
                <div class="btn btn-success">En savoir plus</div>
            </div>
        </div>
    </div>
</div>
<div class="text-center pt-5 pb-5 bg-g">
    <h2>Des nouvelles</h2>
    <p>
        Lisez les dernières infos de notre magasin
    </p>
    <div class="d-flex justify-content-center ">
        <div class="d-flex flex-direction-column m-3">
            <div class=" bg-w text-start">
                <img src="Images/News1.jpg" width="250px" class="mb-2">
                <h5 class="d-flex justify-content-center ">Lorem ipsum dolor sit</h5>
                <p class="p ps-4">Lorem ipsum dolor sit amet,<br>
                    consectetuer adipiscing elit, sed<br>
                    diam nonummy nibh euismod tin</p>
                <div class="btn btn-primary ms-4 mb-4">Lire plus ></div>
            </div>
        </div>
        <div class="d-flex justify-content-center ">
            <div class="d-flex flex-direction-column m-3">
                <div class=" bg-w text-start">
                    <img src="Images/News2.jpg" width="250px" class="mb-2">
                    <h5 class="d-flex justify-content-center ">Habitasse platea dictumst</h5>
                    <p class="p ps-4">Lorem ipsum dolor sit amet,<br>
                        consectetuer adipiscing elit, sed<br>
                        diam nonummy nibh euismod tin</p>
                    <div class="btn btn-primary ms-4 mb-4">Lire plus ></div>
                </div>
            </div>
            <div class="d-flex justify-content-center ">
                <div class="d-flex flex-direction-column m-3">
                    <div class=" bg-w text-start">
                        <img src="Images/News3.jpg" width="250px" class="mb-2">
                        <h5 class="d-flex justify-content-center ">Aenean ultrices ante est</h5>
                        <p class="p ps-4">Lorem ipsum dolor sit amet,<br>
                            consectetuer adipiscing elit, sed<br>
                            diam nonummy nibh euismod tin</p>
                        <div class="btn btn-primary ms-4 mb-4">Lire plus ></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center pt-5 pb-5 bg-w">
    <h2>Témoignages</h2>
    <div class="d-flex justify-content-center ">
        <div class="d-flex flex-direction-column m-3">
            <div class="bg-w text-start">
                <p class="p ps-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<br>
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.<br>
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper<br>
                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel<br>
                    eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,<br>
                    vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto</p>
                <div class="p ps-4 d-flex flex-direction-column">
                    <img src="Images/Martin.jpg" width="70px" class="mb-2">
                    Martin Smith
                    <br>
                    Client
                </div>
            </div>
            <div class="bg-w text-start">
                <p class="p ps-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy<br>
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.<br>
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper<br>
                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel<br>
                    eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,<br>
                    vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto</p>
                <div class="p ps-4 d-flex flex-direction-column">
                    <img src="Images/Jessica.jpg" width="70px" class="mb-2">
                    Jessica Brown
                    <br>
                    Client
                </div>
            </div>
        </div>

    </div>
</div>
<div class="text-center pt-5 pb-5 bg-g">
    <h2>Galerie photos</h2>
    <div class="d-flex justify-content-center ">
        <div class="d-flex flex-direction-column">
            <img src="Images/Galerie.jpg" width="1000px" class="m-3">
        </div>
    </div>
</div>
<!--<div class="text-center pt-5 pb-5 bg-w">-->
<!--    <h2>Contacts</h2>-->
<!--    <div class="d-flex justify-content-end col-6">-->
<!--        <div class=" bg-g text-start">-->
<!--            <p>Téléphone</p>-->
<!--            <p>+32 (0) 63 435 234</p>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="d-flex justify-content-end col-6">-->
<!--        <div class="text-start bg-g">-->
<!--            <p>Téléphone</p>-->
<!--            <p>+32 (0) 63 435 234</p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="containerContact">
    <h1>Contacts</h1>
    <div class="flexRowContact">
        <div>
            <div class="itemContact">
                <img src="./Images/contact1.png" alt="contact1" width="50" height="50">
                <div class="flexColCont1">
                    <h3>Téléphone</h3>
                    <p>+32 907 07 202</p>
                </div>
            </div>
            <div class="itemContact marginTopContact">
                <img src="./Images/contact2.png" alt="contact2" width="50" height="50">
                <div class="flexColCont1">
                    <h3>Email</h3>
                    <p>info@monsite.com</p>
                </div>
            </div>
        </div>
        <div class="mapContact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6487704.676993102!2d122.93123892870578!3d37.44124933264237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357e02dae64f4337%3A0x3a0b871c3e1d861c!2sCor%C3%A9e%20du%20Nord!5e0!3m2!1sfr!2sbe!4v1686078198877!5m2!1sfr!2sbe" width="500" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<footer>
   <?php include ('footer.php'); ?>
</footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/4d690a8308.js" crossorigin="anonymous"></script>

</html>