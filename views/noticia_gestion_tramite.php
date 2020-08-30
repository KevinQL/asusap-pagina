<!doctype html>
<html lang="en">
    <head>
        
        <?php 
            include_once(PARTIALS_PAGE."cdnsheader.html");
        ?>

        <title>ASUSAP</title>
    </head>
    <body>

        
        <?php 
            include_once("views/sections/navegacion_page.html");
        ?>



        <hr class="bg-info py-1 m-0 border-1">

        <div class="container noticia-pagina">

            <h1 class="text-center">GESTIÓN Y TRAMITE DE PROCEDIMIENTO DE ACREDITACIÓN</h1>

            <section class="noticia-imagen">
                <img src="public/images/asusap/reservorio2.jpg" alt="" class="">
            </section>

            <p class="noticia-descripcion">
            Gestión y tramite de procedimiento de acreditación de disponibilidad hídrica superficial 
            de agua con fines poblacionales resueltos con la resolución directoral N° 147-2020-ANA-AAA-PA 
            de fecha 04 de marzo de 2020 de las fuentes de agua de manantial de Rosas Mayo, manantial 
            Salazar Menacho, manantial Pacche Coronado, Manantial Jehu Altamirano con un total de 195,680 m3, 
            que a futuro serán reservas.
            </p>

            <section class="row noticia-fotos">
                <div class="col-md-3">
                    <img src="public/images/asusap/reservorio1.jpg" alt="" class="img-fluid w-100">
                </div>
                <div class="col-md-3">
                    <img src="public/images/asusap/reservorio2.jpg" alt="" class="img-fluid w-100">
                </div>
                <div class="col-md-3">
                    <img src="public/images/asusap/reservorio1.jpg" alt="" class="img-fluid w-100">
                </div>
                <div class="col-md-3">
                    <img src="public/images/asusap/reservorio2.jpg" alt="" class="img-fluid w-100">
                </div>
                <div class="col-md-3">
                    <img src="public/images/asusap/reservorio1.jpg" alt="" class="img-fluid w-100">
                </div>
                <div class="col-md-3">
                    <img src="public/images/asusap/reservorio1.jpg" alt="" class="img-fluid w-100">
                </div>
            </section>

        </div>

        <!-- GALERIA HOVER NOTICIAS - FORMA MODAL-->
        <section class="galeria-fotos">
            <div class="container-galeria">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="public/images/asusap/reservorio1.jpg" class="" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/images/asusap/reservorio2.jpg" class="" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/images/asusap/reservorio1.jpg" class="" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="btn-salir">
                <button class="btn btn-sm btn-salir-click"><i class="fas fa-window-close fa-2x"></i></button>
                <p class="px-5 py-2"> Puedes pasar la galería de imagenes de un lado a otro para ver todas las fotos.</p>
            </div>
        </section>



        <section class="container-fluid bg-dark mt-3 py-5">
            <div class="container">
                <div class="row text-white">
                    <div class="col-md-3">
                        <h3>SOMOS</h3>
                        <ul>
                            <li>ASUSAP</li>
                            <li>Jr. 28 de Julio 221</li>
                            <li>Tel. 083 797 874</li>
                            <li>Atención al usuario</li>
                            <li>Mañana: 08:00 am-12:00 pm</li>
                            <li>Tarde: 02:00 pm-05:00 pm</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                    <h3 class="text-left">SECCIÓN SOCIAL</h3>

                            <iframe width="100%" height="450" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FRezuam-600773577055743%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>

                    <div class="col-md-6 text-center p-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1635.657618545781!2d-73.36477804209281!3d-13.65080709760321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916d29fc303d70fd%3A0x33e373f4bb798822!2sASUSAP!5e1!3m2!1ses!2spe!4v1595195295027!5m2!1ses!2spe" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>

                    <div class="col-md-12 text-center text-muted mt-5" >
                        <span>CopyRight ASUSAP - 2020</span>
                    </div>
                </div>
            </div>
        </section>


        <?php
            include_once(PARTIALS_PAGE."cdnsfooter.html");
        ?>

        <script>
            
        </script>

    </body>
</html>