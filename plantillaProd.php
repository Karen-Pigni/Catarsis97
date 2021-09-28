<!-- HEAD -->
<?php
    $title="<title>Catarsis 97 - Merchandising </title>";
    include("head.php");
?>

<body>
    <!-- HEADER -->
    <?php
        include("header.php");
    ?>

    <main>
        <img src="img/otra.jpg" alt="" class="foto1">
        <h1 style="display: none;">Merchandising Catarsis 97</h1>
    </main> <!-- FIN FOTO PRINCIPAL -->

    <!--------------------------------------------- MERCH ------------------------------------------------------->
    <div class="container">
        <h1 class="h2text boxcd" style="margin-top: 3rem;">¡Mira nuestro merch!</h1>

        <p class="" style="margin-top: 1rem; padding-bottom: 1.5rem;  border-bottom: tomato 1px solid; text-align: center; font-size:1.1rem;">  
            Podes adquirir todo el merch disponible de la banda acá
        </p>
        
        <div class="container">
    
            <div class="flexMerch gridMerch">
                <div class="card m1 cajasMerch">
                <img src="" class="card-img-top intentocard" id="imgg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title h5M" id="titulo"></h5>
                        <p class="pM"  id="descripcion"></p>
                        <p id="precio" style="font-size: 1.2rem; color: rgb(19, 177, 32); font-weight: 600;"></p>
                        <a href="#" class="btn botonMerch" id="botonC"></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!---------------------------------------------------------->
       

    </div>

    <!--------------------------------------------------------------------------------------------------->

    <script>
        let productos = [
            {
                img: 'img/CD1.jpg>',
                nombre: 'Recién Comienza',
                descripcion: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
                precio: '$500',
                boton:'Ver más',
            },{
                nombre: 'Tiempo de Cambios',
                descripcion: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
                precio: '$500',
                boton:'Ver más',
            },
            {
                nombre: 'Hagamos de Cuenta',
                descripcion: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
                precio: '$500',
                boton:'Ver más',
            },
            {
                nombre: 'Apolo & Dafne',
                descripcion: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
                precio: '$500',
                boton:'Ver más',
            },
            {
                nombre: 'Agorafobia al Corazón',
                descripcion: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
                precio: '$500',
                boton:'Ver más',
            },{
                nombre: 'Remera Catarsis 97',
                descripcion: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
                precio: '$500',
                boton:'Ver más',
            },
            {
                nombre: 'Remera Catarsis 97',
                descripcion: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
                precio: '$500',
                boton:'Ver más',
            },
            {
                nombre: 'Remera Catarsis 97',
                descripcion: 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
                precio: '$500',
                boton:'Ver más',
            },
        ]
        
        /*for (let i = 0; i < productos.length; i++) {
            /*document.getElementById('imgg').innerHTML= productos[i].img;
            document.getElementById('titulo').innerHTML= productos[i].nombre;
            document.getElementById('descripcion').innerHTML=productos[i].descripcion;
            document.getElementById('precio').innerHTML=productos[i].precio;
            document.getElementById('botonC').innerHTML=productos[i].boton;

            console.log(1+[i++])
        } */ 

        for (let i = 0; i < productos.length; i++) {
            //document.getElementById('imgg').innerHTML= productos[i].img;
            document.getElementById('titulo').innerHTML= productos[i].nombre;
            document.getElementById('descripcion').innerHTML=productos[i].descripcion;
            document.getElementById('precio').innerHTML=productos[i].precio;
            document.getElementById('botonC').innerHTML=productos[i].boton;
        } 


    </script>
    
    <!-- FOOTER -->
    <?php
        include("footer.php");
    ?>