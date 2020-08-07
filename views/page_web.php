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

        <section class="slider-presentacion bg-dark ">
            <!--
            <img src="public/img3.jpg" alt="">                    
            -->
            <div class="fondo">
            </div>

            <div class="texto-presentacion text-center">
                <h2 class="text-white text-uppercase">ASOCIACIÓN DE USUARIOS DE AGUA POTABLE SAN JERÓNIMO<br>ASUSAP</h2>
                <button class="btn btn-lg btn-outline-info px-5 mt-5 px-5 py-3 text-uppercase text-bold">más información</button>
            </div>
        </section>

        <div class="text-center bg-info p-3 mb-4 text-white lead">
            <h5>NOS PREOCUPAMOS POR QUE TENGAS EL MEJOR SERVICIO DE AGUA POTABLE</h5>
        </div>

        <div class="seccion-inv-y-proy container-fluid px-5 mb-5" id="quienessomos">
            <div class="row text-center">
                <div class="card-k col-md-3">
                    <img src="public/images/cm-1.svg" alt="logo" class="" height="150px">
                    <h4>HISTORIA</h4>
                    <hr class="line-seccion">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, expedita! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem odit omnis perferendis, laboriosam obcaecati reiciendis explicabo similique architecto impedit mollitia.</p>
                </div>
                <div class="card-k col-md-3">
                    <img src="public/images/cm-2.svg" alt="logo" class="" height="150px">
                    <h4>MISIÓN</h4>
                    <hr class="line-seccion">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, expedita! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem odit omnis perferendis, laboriosam obcaecati reiciendis explicabo similique architecto impedit mollitia.</p>
                </div>
                <div class="card-k col-md-3">
                    <img src="public/images/cm-3.svg" alt="logo" class="" height="150px">
                    <h4>VISIÓN</h4>
                    <hr class="line-seccion">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, expedita! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem odit omnis perferendis, laboriosam obcaecati reiciendis explicabo similique architecto impedit mollitia.</p>
                </div>
                <div class="card-k col-md-3">
                    <img src="public/images/cm-4.svg" alt="logo" class="" height="150px">
                    <h4>CONVENIOS</h4>
                    <hr class="line-seccion">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, expedita! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem odit omnis perferendis, laboriosam obcaecati reiciendis explicabo similique architecto impedit mollitia.</p>
                </div>
            </div>
        </div>

        <section class="seccion-certificado container-fluid bg-dark">
            <!--
                <img src="public/imgpresentacion.jpg" alt="">
            -->
            <div class="opaco"></div>
            <div class="container text-center text-white lead">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <h2>Calidad con Certificacion LOREM</h2>
                    </div>
                    <div class="col-md-3">
                        <p class="display-3">100%</p>
                        <p>Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, ex.</p>
                    </div>
                    <div class="col-md-3">
                        <p class="display-3">100%</p>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="col-md-3">
                        <p class="display-3">100%</p>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="col-md-3">
                        <p class="display-3">100%</p>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="seccion-servicios container my-5 text-center" id="servicios">
            <div class="row mb-5">
                <div class="col">
                    <h4 class="titulo">SERVICIOS</h4>
                </div>                
            </div>
            <div class="row text-uppercase text-center mt-3">
                <div class="card-servicios col-md-3">
                    <a href="#" class="servicios-link" data-toggle="modal" data-target="#nuevaInstalacion_">
                        <i class="fas fa-heartbeat fa-8x"></i>
                        <p class="mt-3">Nueva instalación</p>
                    </a>
<!-- Modal -->
<div class="modal fade" id="nuevaInstalacion_" tabindex="-1" role="dialog" aria-labelledby="nuevaInstalacion_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevaInstalacion_Label">REQUISITOS PARA NUEVA INSTALACIÓN DE AGUA POTABLE DOMICILIARIA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-left">
                <ul class="lista-servicios">
                    <li><i class="fas fa-tags"></i> 1. UN FOLDER</li>
                    <li><i class="fas fa-tags"></i> 2. LLENAR FORMATO DE SOLICITUD</li>
                    <li><i class="fas fa-tags"></i> 3. CERTIFICADO DE NUMERACIÓN EXPEDIDO POR EL MUNICIPIO </li>
                    <li><i class="fas fa-tags"></i> 4. COPIA LITERAL Y/O TESTIMONIO</li>
                    <li><i class="fas fa-tags"></i> 5. FOTO PANORÁMICO DEL PREDIO OPCIONAL</li>
                    <li><i class="fas fa-tags"></i> 6. CROQUIS DE UBICACIÓN DEL PREDIO O PLANO INDICANDO REFERENCIA</li>
                    <li><i class="fas fa-tags"></i> 7. FOTOCOPIA DNI DEL TITULAR</li>
                    <li><i class="fas fa-tags"></i> 8. RECIBO DE PAGO DE INSCRIPCIÓN</li>
                    <li><i class="fas fa-tags"></i> 9. RECIBO DE ROTURA DE PISTA EXPEDIDO POR LA MUNICIPALIDAD</li>
                    <li><i class="fas fa-tags"></i> 10. RECIBO O CONSTANCIA DE PAGO DE DESAGUE EXPEDIDO POR LA MUNICIPALIDAD</li>
                </ul>
                INSCRIPCION DE AGUA POTABLE S/. 350.00  </br>
                INCLUIDO IGV S/. 63.00 ES UN TOTAL DE S/.413.00  </br>
                OTROS S/.  </br>
                PONER NÚMERO DE CELULAR  </br>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

                    <!--  -->
                </div>
                <div class="card-servicios col-md-3">
                    <a href="#" class="servicios-link" data-toggle="modal" data-target="#razonSocial_">
                        <i class="fas fa-seedling fa-8x"></i>
                        <p class="mt-3">Nombre o Razón social</p>
                        <!-- <p class="mt-3">Corte y reconexión</p> -->
                    </a>
<!-- Modal -->
<div class="modal fade" id="razonSocial_" tabindex="-1" role="dialog" aria-labelledby="razonSocial_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="razonSocial_Label">REQUICITOS PARA CAMBIAR NOMBRE  O RAZON SOCIAL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-left">

                <ul>                
                    <li><i class="fas fa-tags"></i> SOLICITUD PIDIENDO CAMBIO DE NOMBRE  O RAZON SOCIAL </li>
                    <li><i class="fas fa-tags"></i> COPIA DE TITULO DE PROPIDAD  O COMPRA VENTA A NOMBRE DEL SOLICITANTE </li>
                    <li><i class="fas fa-tags"></i> COPIA DNI</li>
                    <li><i class="fas fa-tags"></i> RECIBO CANCELADO A NOMBRE DEL TITULAR</li>
                </ul>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

                    <!--  -->
                </div>
                <div class="card-servicios col-md-3">
                    <a href="#" class="servicios-link" data-toggle="modal" data-target="#averas_">                        
                        <i class="fas fa-tools fa-8x"></i>
                        <p class="mt-3">Averías de redes tendidas</p>                        
                    </a>

<!-- Modal -->
<div class="modal fade" id="averas_" tabindex="-1" role="dialog" aria-labelledby="averas_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="averas_Label">AVERÍAS DE REDES TENDIDAS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-left">

                <ul>                
                    <li><i class="fas fa-tags"></i> Lorem, ipsum dolor.</li>
                    <li><i class="fas fa-tags"></i> Lorem, ipsum dolor.</li>
                    <li><i class="fas fa-tags"></i> Lorem, ipsum dolor.</li>
                    <li><i class="fas fa-tags"></i> 
                        <a href="public/files/solicitudes/SOLICITUD_DE_ATENCION.pdf" target="_blank" download>
                            <i class="fas fa-cloud-download-alt"></i> DESGARGAR ARCHIVO <i class="fas fa-file-pdf"></i>
                        </a>
                    </li>
                </ul>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

                </div>
                <div class="card-servicios col-md-3">
                    <a href="#" class="servicios-link" data-toggle="modal" data-target="#gasfiteria_">
                        <i class="fas fa-flask fa-8x"></i>
                        <p class="mt-3">GASFITERÍA</p>                        
                    </a>

<!-- Modal -->
<div class="modal fade" id="gasfiteria_" tabindex="-1" role="dialog" aria-labelledby="gasfiteria_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gasfiteria_Label">GASFITERÍA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-left">

                <ul>                
                    <li><i class="fas fa-tags"></i> Lorem, ipsum dolor.</li>
                    <li><i class="fas fa-tags"></i> Lorem, ipsum dolor.</li>
                    <li><i class="fas fa-tags"></i> Lorem, ipsum dolor.</li>
                    <li><i class="fas fa-tags"></i> Lorem, ipsum dolor.</li>
                </ul>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

                </div>                
            </div>

            <!-- <div class="row text-uppercase text-center mt-5 servicio-otros">
                <div class="card-servicios col-md-12">
                    <a href="#" class="servicios-link2">                         
                        <i class="fas fa-seedling fa-5x"></i>
                        <p class="mt-3">Otros</p>
                    </a>
                </div>                
            </div> -->
        </section>

        <section class="seccion-fotos container mt-5">
            <div class="row">
                <!-- <div class="col-md-3 columna-sec41">
                    <h2>ÑAHUIN</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos rerum libero, delectus eligendi molestiae vel voluptatem quas recusandae! Dignissimos, molestias. Veniam beatae impedit laborum modi, repellat dolore pariatur, laudantium ab, recusandae rem voluptas libero placeat. Vel architecto id excepturi delectus, culpa possimus magnam repudiandae sint quia nihil quaerat et nulla.</p>
                </div> -->
                <div class="col-md-3 columna-sec41 bg-secondary">
                    <img src="public/images/asusap/tanque.jpg" alt="">
                    <div class="informacion">
                        <h2>ÑAHUIN</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos rerum libero, delectus eligendi molestiae vel voluptatem quas recusandae! Dignissimos, molestias. Veniam beatae impedit laborum modi, repellat dolore pariatur, laudantium ab, recusandae rem voluptas libero placeat. Vel architecto id excepturi delectus, culpa possimus magnam repudiandae sint quia nihil quaerat et nulla.</p>
                    </div>
                </div>
                <div class="col-md-3 columna-sec42 bg-primary">
                    <img src="public/images/asusap/trata_ña.jpg" alt="">
                    <div class="informacion">
                        <h2>TRATAMIENTO</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos rerum libero, delectus eligendi molestiae vel voluptatem quas recusandae! Dignissimos, molestias. Veniam beatae impedit laborum modi, repellat dolore pariatur, laudantium ab, recusandae rem voluptas libero placeat. Vel architecto id excepturi delectus, culpa possimus magnam repudiandae sint quia nihil quaerat et nulla.</p>
                    </div>
                </div>
                <div class="col-md-3 columna-sec43 bg-danger">
                    <img src="public/images/asusap/reservorio1.jpg" alt="">
                    <div class="informacion">
                        <h2>HUASIPARA</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos rerum libero, delectus eligendi molestiae vel voluptatem quas recusandae! Dignissimos, molestias. Veniam beatae impedit laborum modi, repellat dolore pariatur, laudantium ab, recusandae rem voluptas libero placeat. Vel architecto id excepturi delectus, culpa possimus magnam repudiandae sint quia nihil quaerat et nulla.</p>
                    </div>
                </div>
                <div class="col-md-3 columna-sec44 bg-warning">
                    <img src="public/images/asusap/cloro.jpg" alt="">
                    <div class="informacion">
                        <h2>TRATAMIENTO</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos rerum libero, delectus eligendi molestiae vel voluptatem quas recusandae! Dignissimos, molestias. Veniam beatae impedit laborum modi, repellat dolore pariatur, laudantium ab, recusandae rem voluptas libero placeat. Vel architecto id excepturi delectus, culpa possimus magnam repudiandae sint quia nihil quaerat et nulla.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="container my-5 seccion-noticias">
            <div class="row">
                <div class="col-md-12 text-center mb-3">
                    <h1>NOTICIAS</h1>
                </div>
                <!-- NOTICIAS CARDS -->
        <!--
                <div class="col-md-4 card-noticia">
                    <div class="borde-noticia">
                        <img src="public/images/imgpresentacion.jpg" alt="" class="img-noticia">
                        <h4 class="px-2">Lorem, ipsum dolor.</h4>
                        <p class="px-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <button class="btn btn-sm">VER MAS</button>
                    </div>
                </div>
                <div class="col-md-4 card-noticia">
                    <div class="borde-noticia">
                        <img src="public/images/img3.jpg" alt="" class="img-noticia">
                        <h4 class="px-2">Lorem, ipsum dolor.</h4>
                        <p class="px-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit saepe autem sit eos illum perferendis dolor suscipit pariatur cupiditate ratione odio quibusdam, consectetur dolore provident eveniet recusandae? Dolorum, inventore nemo.</p>
                        <button class="btn btn-sm">VER MAS</button>
                    </div>
                </div>
                <div class="col-md-4 card-noticia">
                    <div class="borde-noticia">
                        <img src="public/images/imgpresentacion.jpg" alt="" class="img-noticia">
                        <h4 class="px-2">Lorem, ipsum dolor.</h4>
                        <p class="px-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit saepe autem sit eos illum perferendis dolor suscipit pariatur cupiditate ratione odio quibusdam, consectetur dolore provident eveniet recusandae? Dolorum, inventore nemo.</p>
                        <button class="btn  btn-sm">VER MAS</button>
                    </div>                    
                </div>
            </div>
        </section> -->

        
        <section class="container my-5 seccion-noticias">
            <div class="col-md-12 text-center mb-3">
                <h1>NOTICIAS</h1>
            </div>
    
            <div class="glide sle">
                <div data-glide-el="track" class="glide__track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class=" card-noticia">
                            <div class="borde-noticia">
                                <img src="public/images/asusap/reservorio2.jpg" alt="" class="img-noticia">
                                <h4 class="px-2">Lorem, ipsum dolor.</h4>
                                <p class="px-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit...</p>
                                <a href="?pg=noticia&id=1" class="btn btn-sm">VER MAS</a>                                
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class=" card-noticia">
                            <div class="borde-noticia">
                                <img src="public/images/asusap/reservorio1.jpg" alt="" class="img-noticia">
                                <h4 class="px-2">Lorem, ipsum dolor.</h4>
                                <p class="px-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit...</p>
                                <a href="?pg=noticia&id=2" class="btn btn-sm">VER MAS</a>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class=" card-noticia">
                            <div class="borde-noticia">
                                <img src="public/images/asusap/oficina1.jpg" alt="" class="img-noticia">
                                <h4 class="px-2">Lorem, ipsum dolor.</h4>
                                <p class="px-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit...</p>
                                <a href="?pg=noticia&id=3" class="btn btn-sm">VER MAS</a>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class=" card-noticia">
                            <div class="borde-noticia">
                                <img src="public/images/asusap/oficina2.jpg" alt="" class="img-noticia">
                                <h4 class="px-2">Lorem, ipsum dolor.</h4>
                                <p class="px-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit...
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae totam cumque soluta provident sit, iusto iste labore, quas ipsum nobis mollitia impedit facilis et animi quae. Nostrum nesciunt velit dolore?
                                </p>
                                <a href="?pg=noticia&id=4" class="btn btn-sm">VER MAS</a>
                            </div>
                        </div>
                    </li>
                </ul>
                </div>
        
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"> < </button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"> > </button>
                </div>
        
                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                    <button class="glide__bullet" data-glide-dir="=3"></button>    
                </div>
            </div>  
        </section>



        <section class="container seccion-recorrido">     
            <div class="row text-center text-white font-weight-bold text-uppercase">
                <div class="col-md-12 mb-4">
                    <h3 class="display-4">EL INCREIBLE RECORRIDO DEL AGUA</h3>
                </div>
                <div class="col-md-3">
                    <img src="public/images/cm-1.svg" alt="logo" height="80px">
                    <p class="mt-3">NACIÓ EN </p>
                </div>
                <div class="col-md-3">
                    <img src="public/images/cm-2.svg" alt="logo" height="80px">
                    <p class="mt-3">VIAJO CIENTOS DE KILOMETROS</p>
                </div>
                <div class="col-md-3">
                    <img src="public/images/cm-3.svg" alt="logo" height="80px">
                    <p class="mt-3">PASÓ POR ESTRICTOS CONTROLES DE CALIDAD AVALADOS POR ...</p>
                </div>
                <div class="col-md-3">
                    <img src="public/images/cm-4.svg" alt="logo" height="80px">
                    <p class="mt-3">PARA LLEGAR A TI!</p>
                </div>                
            </div>
        </section>


        <section class="container-fluid bg-dark mt-3 py-5">
            <div class="container">
                <div class="row text-white">
                    <div class="col-md-3">
                        <h3>SOMOS</h3>
                        <ul>
                            <li>Lorem, ipsum dolor.</li>
                            <li>Lorem ipsum dolor sit.</li>
                            <li>Lorem ipsum dolor sit.</li>
                            <li>Lorem ipsum dolor sit.</li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-center">
                        <h3 class="text-left">REDES</h3>

                        <iframe width="100%" height="450" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FRezuam-600773577055743%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

                        <!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSute-Andahuaylas-Oficial-118870519500684%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> -->
                
                    </div>

                    <div class="col-md-5 p-0">
                        <h3>UBICANOS</h3>
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

    </body>
</html>