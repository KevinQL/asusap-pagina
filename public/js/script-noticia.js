// deshabilitar galeria hover
let btnCerrar = document.querySelector('.btn-salir');
btnCerrar.addEventListener('click',function(){
    let galeria = document.querySelector(".galeria-fotos");
    galeria.style.display = "none";
})


// habilitar galeria hover
let seccion_noticias = document.querySelector(".noticia-fotos");
seccion_noticias.addEventListener('click',function(){
    let galeria = document.querySelector(".galeria-fotos");
    galeria.style.display = "flex";
})