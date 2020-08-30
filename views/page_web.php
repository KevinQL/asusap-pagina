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

        <!-- PRESENTACIÓN DE UNA SOLA IMAGEN  -->
        <!-- <section class="slider-presentacion bg-dark ">
            <div class="fondo">
            </div>
            <div class="texto-presentacion text-center">
                <h2 class="text-uppercase">ASOCIACIÓN DE USUARIOS DE AGUA POTABLE SAN JERÓNIMO<br>ASUSAP</h2>                
                <h2 class="text-uppercase" style="font-size: 60px">ASOCIACIÓN DE USUARIOS DE AGUA POTABLE SAN JERÓNIMO<br>ASUSAP</h2>                
            </div>
        </section> -->

        <!-- SLIDER PRESENTACIÓN NUEVO -->
        <section class="slider-presentacion seccion-slider">

            <div class="glide2 sle2">
                <div data-glide-el="track" class="glide__track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="texto-presentacion">
                            <h2 class="text-uppercase px-3" style="font-size: 40px">ASOCIACIÓN DE USUARIOS DE AGUA POTABLE SAN JERÓNIMO<br>ANDAHUAYLAS-APURÍMAC</h2>                
                        </div>
                        <img src="public/images/asusap/oficina1.jpg" class="" alt="...">
                    </li>
                    <li class="glide__slide">
                        <div class="texto-presentacion">
                            <h2 class="text-uppercase px-3" style="font-size: 40px">JUNTA DIRECTIVA ASUSAP<br>2019-2021</h2>                
                        </div>
                        <img src="public/images/asusap/asus.jpg" class="" alt="...">
                    </li>
                    <li class="glide__slide">
                        <div class="texto-presentacion">
                            <h2 class="text-uppercase px-3" style="font-size: 40px">FUENTE PRINCIPAL DE OJO DE AGUA DE ÑAHUIN<br></h2>                
                        </div>
                        <img src="public/images/asusap/ñahuin.jpg" class="" alt="...">
                    </li>
                    <li class="glide__slide">
                        <div class="texto-presentacion">
                            <h2 class="text-uppercase px-3" style="font-size: 40px">FUENTE PRINCIPAL DE OJO DE AGUA DE HUASIPARA<br></h2>                
                        </div>
                        <img src="public/images/asusap/huasi.jpg" class="" alt="...">
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
                </div>
            </div> 

        </section>


        <div class="text-center bg-info p-3 mb-4 text-white lead">
            <h5>NOS PREOCUPAMOS POR QUE TENGAS EL MEJOR SERVICIO DE AGUA POTABLE</h5>
        </div>

        <div class="seccion-inv-y-proy container-fluid px-5 mb-5" id="quienessomos">
            <div class="row text-center">
                <div class="card-k col-md-3">
                    <a href="?pg=historia" class="link-quines-somos">
                        <img src="public/images/cm-1.svg" alt="logo" class="" height="150px">
                        <h4>HISTORIA</h4>
                        <hr class="line-seccion">
                        <p>La primera capación del ojo del manante ñahuin para potable de uso poblacional de san jerónimo, provincia de Andahuaylas, departamento de Apurímac fueron impulsados por personalidades del distrito constituidos en una junta administrativa.</p>
                    </a>
                </div>
                <div class="card-k col-md-3">
                    <img src="public/images/cm-2.svg" alt="logo" class="" height="150px">
                    <h4>MISIÓN</h4>
                    <hr class="line-seccion">
                        <p>Somos una asociación privada con autonomía administrativa y económica, comprometida en mejorar la calidad de vida de nuestros usuarios, mediante los servicios de agua potable con responsabilidad social y ambiental.
                            <br>Proveer servicio de saneamiento, con altos estándares de calidad para satisfacer las necesidades de la población atendida por la asociación de usuarios de agua potable de san jerónimo.
                        </p>
                </div>
                <div class="card-k col-md-3">
                    <img src="public/images/cm-3.svg" alt="logo" class="" height="150px">
                    <h4>VISIÓN</h4>
                    <hr class="line-seccion">
                        <p>Garantizar el suministro de agua potable y el saneamiento a las próximas generaciones del pueblo de san jerónimo, satisfacer las necesidades.
                        <br>    Mejorar a futuro inacabadamente los servicios de agua potable para todos nuestros usuarios de acuerdo al avance de la tecnología.
                        </p>
                </div>
                <div class="card-k col-md-3">
                    <img src="public/images/cm-4.svg" alt="logo" class="" height="150px">
                    <h4>CONVENIOS</h4>
                    <hr class="line-seccion">
                    <p>Municipalidad Distrital de San Jerónimo.</p>
                    <p>Acuerdo N° 092-2019-CM-MDSJ, en la que entrega en sesión de uso un bien inmueble-terreno de área de 400 m2 en el sector de ccotomarca-huasipara </p>
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
                        <h2>Calidad con Certificación por la D.I.S.A</h2>
                    </div>
                    <div class="col-md-3">
                        <p class="display-3">100%</p>
                        <p>Apto para el consumo humano</p>
                    </div>
                    <div class="col-md-3">
                        <p class="display-3">100%</p>
                        <p>Presencia de cloro residual</p>
                    </div>
                    <div class="col-md-3">
                        <p class="display-3">100%</p>
                        <p>Análisis físico químico y microbiológico</p>
                    </div>
                    <div class="col-md-3">
                        <p class="display-3">100%</p>
                        <p>Con control basado en la ley 26842 </p>
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
                    <li><i class="fas fa-tags"></i> 4. COPIA LITERAL Y/O TESTIMONIO DE COMPRA DE TERRENO</li>
                    <li><i class="fas fa-tags"></i> 5. FOTO PANORÁMICO DEL PREDIO OPCIONAL</li>
                    <li><i class="fas fa-tags"></i> 6. CROQUIS DE UBICACIÓN DEL PREDIO O PLANO INDICANDO REFERENCIA</li>
                    <li><i class="fas fa-tags"></i> 7. FOTOCOPIA DNI DEL TITULAR</li>
                    <li><i class="fas fa-tags"></i> 8. RECIBO DE PAGO POR DERECHO DE INSCRIPCIÓN</li>
                    <li><i class="fas fa-tags"></i> 9. AUTORIZACIÓN DE ROTURA DE PISTA EXPEDIDO POR LA MUNICIPALIDAD</li>
                    <li><i class="fas fa-tags"></i> 10. CONSTANCIA DE PAGO DE DESAGUE EXPEDIDO POR LA MUNICIPALIDAD</li>
                </ul>
                DERECHO DE INSCRIPCION DE AGUA POTABLE S/. 350.00  </br>
                INCLUIDO IGV S/. 63.00 ES UN TOTAL DE S/.413.00  </br>
                OTROS S/.  </br>
                PONER NÚMERO DE CELULAR  </br>
                CORREO ELECTRÓNICO

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
                    <li><i class="fas fa-tags"></i> RECIBO CANCELADO A NOMBRE DEL TITULAR(NO TENER DEUDA PENDIENTE CON ASUSAP)</li>
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
                    <li><i class="fas fa-tags"></i> Acercarse a la oficina para informar.</li>
                    <li><i class="fas fa-tags"></i> Solicitar servicio de gasfiteria.</li>
                    <li><i class="fas fa-tags"></i> En caso de reconexión por 3 meses de mora el costo será de S/ 30.00.</li>
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
                    <li><i class="fas fa-tags"></i> Solicitar el servicio del personal de gasfiteria en la oficina de ASUSAP.</li>
                    <li><i class="fas fa-tags"></i> asusap se responsabiliza del costo de servicio de gasfiteria hasta la puerta del domicilio.</li>
                    <li><i class="fas fa-tags"></i> las averias internas tienen un costo adicional dependiendo del servicio prestado.</li>
                    <!--<li><i class="fas fa-tags"></i> Lorem, ipsum dolor.</li>-->
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

        <!-- SECCIÓN FOTOS FOTOS -->
        <section class="seccion-fotos container mt-5">
            <div class="row">
                <!-- <div class="col-md-3 columna-sec41">
                    <h2>ÑAHUIN</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos rerum libero, delectus eligendi molestiae vel voluptatem quas recusandae! Dignissimos, molestias. Veniam beatae impedit laborum modi, repellat dolore pariatur, laudantium ab, recusandae rem voluptas libero placeat. Vel architecto id excepturi delectus, culpa possimus magnam repudiandae sint quia nihil quaerat et nulla.</p>
                </div> -->
                <div class="col-md-3 columna-sec41 bg-secondary">
                    <img src="public/images/asusap/tanque.jpg" alt="">
                    <div class="sombra"></div>
                    <div class="informacion">
                        <h2>AYMARAPATA</h2>
                        <p>Descripción de aymarapata</p>
                    </div>
                </div>
                <div class="col-md-3 columna-sec42 bg-primary">
                    <img src="public/images/asusap/trata_ña.jpg" alt="">
                    <div class="sombra"></div>
                    <div class="informacion">
                        <h2>TRATAMIENTO</h2>
                        <p>tratamiento de ñahuin</p>
                    </div>
                </div>
                <div class="col-md-3 columna-sec43 bg-danger">
                    <img src="public/images/asusap/reservorio1.jpg" alt="">
                    <div class="sombra"></div>
                    <div class="informacion">
                        <h2>HUASIPARA</h2>
                        <p>Descripción de huasipara</p>
                    </div>
                </div>
                <div class="col-md-3 columna-sec44 bg-warning">
                    <img src="public/images/asusap/cloro.jpg" alt="">
                    <div class="sombra"></div>
                    <div class="informacion">
                        <h2>TRATAMIENTO</h2>
                        <p>tratamiento de huasipara</p>
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

        
        <section class="container my-5 seccion-noticias" id="seccion-noticias">
            <div class="col-md-12 text-center mb-3">
                <h1>INFORMATIVO INSTITUCIONAL</h1>
            </div>
    
            <div class="glide sle">
                <div data-glide-el="track" class="glide__track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class=" card-noticia">
                            <div class="borde-noticia">
                                <img src="public/images/asusap/reservorio2.jpg" alt="" class="img-noticia">
                                <h4 class="px-2">INSTALACIÓN DE CÁMARAS DE VIDEO VIGILANCIA</h4>
                                <p class="px-2">Para ele mejor control de los reservorios principales de aymarapata y huasipara ....</p>
                                <a href="?pg=noticia_camaras_vigilancia&id=1" class="btn btn-sm">VER MÁS</a>                                
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class=" card-noticia">
                            <div class="borde-noticia">
                                <img src="public/images/asusap/reservorio1.jpg" alt="" class="img-noticia">
                                <h4 class="px-2">MEJORAMIENTO DE SOFTWARE</h4>
                                <p class="px-2">Implementación de un software a medida para los procedimientos de cobranza y servicios ......</p>
                                <a href="?pg=noticia&id=2" class="btn btn-sm">VER MÁS</a>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class=" card-noticia">
                            <div class="borde-noticia">
                                <img src="public/images/asusap/oficina1.jpg" alt="" class="img-noticia">
                                <h4 class="px-2">GESTIÓN Y TRAMITE DE PROCEDIMIENTO DE ACREDITACIÓN</h4>
                                <p class="px-2">Acreditacion de disponibilidad hídrica superficial de agua con fines poblacionales resuelto con resolución directoral...</p>
                                <a href="?pg=noticia&id=3" class="btn btn-sm">VER MÁS</a>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class=" card-noticia">
                            <div class="borde-noticia">
                                <img src="public/images/asusap/oficina2.jpg" alt="" class="img-noticia">
                                <h4 class="px-2">MEDIDAS DE PRESIÓN PCSI PARA DETERMINAR VOLUMEN</h4>
                                <p class="px-2">Determinación de volumen de agua para mejorar la distribución.....</p>
                                <a href="?pg=noticia&id=4" class="btn btn-sm">VER MÁS</a>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class=" card-noticia">
                            <div class="borde-noticia">
                                <img src="public/images/asusap/oficina2.jpg" alt="" class="img-noticia">
                                <h4 class="px-2">AMPLIACIÓN DE INSTALACIONES SANITARIAS</h4>
                                <p class="px-2">Ampliación de instalaciones sanitarias de redes de conexión de agua domiciliaria.....</p>
                                <a href="?pg=noticia&id=4" class="btn btn-sm">VER MÁS</a>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class=" card-noticia">
                            <div class="borde-noticia">
                                <img src="public/images/asusap/oficina2.jpg" alt="" class="img-noticia">
                                <h4 class="px-2">MEJORAMIENTO Y AMPLIACIÓN DE CÁMARA DE ROMPE PRESIÓN</h4>
                                <p class="px-2">Para el reservorio principal de aymarapata para mantenimiento permanente.....</p>
                                <a href="?pg=noticia&id=4" class="btn btn-sm">VER MÁS</a>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class=" card-noticia">
                            <div class="borde-noticia">
                                <img src="public/images/asusap/oficina2.jpg" alt="" class="img-noticia">
                                <h4 class="px-2">INSTALACIÓN DE VÁLVULAS REGULADORAS</h4>
                                <p class="px-2">Control de aire y de agua por manzanas en las arterias del area urbano.....</p>
                                <a href="?pg=noticia&id=4" class="btn btn-sm">VER MÁS</a>
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
                    <h3 class="display-4">EL RECORRIDO DEL AGUA PARA LLEGAR A TI</h3>
                </div>
                <div class="col-md-3">
                    <img src="public/images/nace.svg" alt="logo" height="80px">
                    <p class="mt-3">NACE EN LOS MANANTES DE SAN JERÓNIMO</p>
                </div>
                <div class="col-md-3">
                    <img src="public/images/seguimiento.svg" alt="logo" height="80px">
                    <p class="mt-3">VIAJA KILOMETROS</p>
                </div>
                <div class="col-md-3">
                    <img src="public/images/calidad.svg" alt="logo" height="80px">
                    <p class="mt-3">PASA POR ESTRICTOS CONTROLES DE CALIDAD</p>
                </div>
                <div class="col-md-3">
                    <img src="public/images/caño.svg" alt="logo" height="80px">
                    <p class="mt-3">PARA LLEGAR A TI!</p>
                </div>                
            </div>
        </section>


        <section class="container-fluid bg-dark mt-3 py-5">
            <div class="container">
                <div class="row text-white">
                    <div class="col-md-3">
                        <h3>CONTACTANOS</h3>
                        <ul>
                            <li>ASUSAP</li>
                            <li>Jr. 28 de Julio 221</li>
                            <li>Tel. 083 797 874</li>
                            <li>Atención al usuario</li>
                            <li>Mañana: 08:00 am-12:00 pm</li>
                            <li>Tarde: 02:00 pm-05:00 pm</li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-center">
                        <h3 class="text-left">SECCIÓN SOCIAL</h3>

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