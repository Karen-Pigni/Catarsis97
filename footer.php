    <footer style="background-color:white;">

        <div class="arriba" style="padding-top: .5rem;">
            <a href="#">
                <img src="img/arribaIco.png" alt=""class="iconosFoot">
            </a>
        </div>

        <div class="arriba1">
            <span id='footerId'></span>
        </div>

        <div class="iconos">
            <a href="https://www.facebook.com/catarsis97" target="_blank">
                <img src="img/faceIco.png" alt="" class="iconosFoot">
            </a>
            <a href="https://www.instagram.com/catarsis97_" target="_blank">
                <img src="img/instIco.png" alt="" class="iconosFoot">
            </a>
            <a href="https://www.twitter.com/catarsis97" target="_blank">
                <img src="img/twIco.png" alt="" class="iconosFoot">
            </a>
            <a href="https://www.youtube.com/catarsis97" target="_blank">
                <img src="img/youtubeIco.png" alt="" class="iconosFoot">
            </a>
            <a href="https://www.sptfy.com/de0g" target="_blank">
                <img src="img/spoIco.png" alt="" class="iconosFoot">
            </a>
        </div>

    </footer> <!-- FIN FOOTER-->

    <!-- JS -->
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="js/main.js"></script>
    
    <script type="text/javascript">
        
        // AJAX
        /*
        $(document).ready(function(){

            let nombre = $('#nombre').val
            let correo = $('#correo').val
            let asunto = $('#asunto').val
            let mensaje = $('#mensaje').val

            let datos = nombre+correo+asunto+mensaje

            $('form').submit(function(event){
                //Eliminamos el evento por default sino no usariamos bien ajax
                event.preventDefault()

                $.ajax({
                    //propiedades de ejecución de ajax: data, url, success, error... - nombre de la propiedad: valor, [...]
                    
                    url:"datosform.php",
                    data: datos,
                    method:'POST',
                    success: function(res){
                        //respuesta de php
                        console.log(res)
                    },
                    error:function(error){
                        //respuesta en caso de error
                        console.log(error)
                    }

                })
            })
        
        })*/

    </script>
</body>
</html>