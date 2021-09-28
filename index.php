<!-- HEAD -->
<?php
    $title="<title>Catarsis 97</title>";
    include("head.php");
?>

<body>
    <!-- HEADER -->
    <?php
        include("header.php");
    ?>

    <!-- FOTO PRINCIPAL -->
    <main>
        <img src="img/5.jpg" alt="" class="foto1">
        <h1 style="display: none;">Catarsis 97</h1>
    </main> <!-- FIN FOTO PRINCIPAL -->

    <!-- DISPONIBLE -->
    <section class="container secc-1">
        <h2 class="h2text">Nuestro nuevo EP ya disponible en:</h2>
        <div class="miniSp">
            <div class="spotify">
                <iframe class="spotify1" src="https://open.spotify.com/embed/artist/6KmEe32DS8JZ01kUSi5fbk" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div> 

        <article class="Csecc-1">
            <div class="medio">

                <a href="https://www.sptfy.com/de0g" target="_blank" class="ahiper">
                    <div class="cajitasSecc-1">
                        <p class="psecc1">Spotify</p>
                    </div>
                </a>

                <a href="https://www.soundcloud.com/catarsis97" target="_blank" class="ahiper">
                    <div class="cajitasSecc-1">
                        <p class="psecc1">SoundCloud</p>
                    </div>
                </a>

                <a href="https://www.deezer.com/artist/10056664" target="_blank" class="ahiper">
                    <div class="cajitasSecc-1">
                        <p class="psecc1">Deezer</p>
                    </div>
                </a>

                <a href="https://www.youtube.com/catarsis97" target="_blank" class="ahiper">
                    <div class="cajitasSecc-1">
                        <p class="psecc1 av">Youtube</p>
                    </div>
                </a>

            </div>
        </article>
    </section> <!-- FIN DISPONIBLE ACA-->
    
    <!-- DISCOGRAFIA -->
    <section class="container" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
        <br>
        <h2 class="h2text" style="padding-bottom: 1.5rem;  border-bottom: tomato 1px solid;">Discografía Oficial:</h2>
        <br>
        <div class="gridDisc">
                
            <a href="merch.php" style="text-decoration: none; color: black;">
                <img src="img/CD1.jpg" alt="" class="claseimg1">
                <br>
                <span class="titulocd">RECIEN COMIENZA</span>
                <br>
                <br>
            </a>
            <a href="merch.php" style="text-decoration: none; color: black;">
                <img src="img/CD2.jpg" alt="" class="claseimg1">
                <br>
                <span class="titulocd">TIEMPO DE CAMBIOS</span>
                <br>
                <br>
            </a>
            <a href="merch.php" style="text-decoration: none; color: black;">
                <img src="img/CD3.jpg" alt="" class="claseimg1">
                <br>
                <span class="titulocd">HAGAMOS DE CUENTA</span>
                <br>
                <br>
            </a>
            <a href="merch.php" style="text-decoration: none; color: black;">
                <img src="img/CD4.jpg" alt="" class="claseimg1">
                <br>
                <span class="titulocd">APOLO & DAFNE</span>
                <br>
                <br>
            </a>
            <a href="merch.php" style="text-decoration: none; color: black;">
                <img src="img/Contraportada.jpg" alt="" class="claseimg1">
                <br>
                <span class="titulocd" id="secc-agenda">AGORAFOBIA AL CORAZÓN</span>
                <br>
                <br>
            </a>
        </div>
    </section> <!-- FIN DE DISCOGRAFIA-->

    <!-- AGENDA -->
    <section class="container-fluid fondoagenda">
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="500">
            <br>
            <h2 class="h2text h2agenda">Agenda:</h2>
            <br> 

            <div class="container">
                <div class="container-fluid cajaAg">
                    <h3 style="font-size: 1.3rem; margin-top: 1rem;"> > Lanus 2020</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis animi sapiente id, minima, illum voluptatibus sit quod distinctio aperiam similique debitis aspernatur ab reprehenderit asperiores, assumenda libero perspiciatis excepturi necessitatibus?</p>
                    <a href="#" class="btn cajitasSecc-1 cajitasSecc-12 este">Ver más</a>
                </div>
                <br>
            </div>

            <div class="container">
                <div class="container-fluid cajaAg">
                    <h3 style="font-size: 1.3rem; margin-top: 1rem;"> > Adrogué 2020</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis animi sapiente id, minima, illum voluptatibus sit quod distinctio aperiam similique debitis aspernatur ab reprehenderit asperiores, assumenda libero perspiciatis excepturi necessitatibus?</p>
                    <a href="#" class="btn cajitasSecc-1 cajitasSecc-12 este">Ver más</a>
                </div>
                <br>
            </div>

            <div class="container">
                <div class="container-fluid cajaAg">
                    <h3 style="font-size: 1.3rem; margin-top: 1rem;"> > Burzaco 2020</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis animi sapiente id, minima, illum voluptatibus sit quod distinctio aperiam similique debitis aspernatur ab reprehenderit asperiores, assumenda libero perspiciatis excepturi necessitatibus?</p>
                    <a href="#" class="btn cajitasSecc-1 cajitasSecc-12 este">Ver más</a>
                </div>
                <br>
            </div>

            <div class="container">
                <div class="container-fluid cajaAg">
                    <h3 style="font-size: 1.3rem; margin-top: 1rem;"> > Palermo 2020</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis animi sapiente id, minima, illum voluptatibus sit quod distinctio aperiam similique debitis aspernatur ab reprehenderit asperiores, assumenda libero perspiciatis excepturi necessitatibus?</p>
                    <a href="#" class="btn cajitasSecc-1 cajitasSecc-12 este">Ver más</a>
                </div>
                <br>
            </div>
            <br>
        </div>
    </section> <!-- FIN AGENDA-->

    <!-- FOOTER -->
    <?php
        include("footer.php");
    ?>