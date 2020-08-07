var somos = new SmoothScroll('a[href*="#quienessomos"]', {
    speed: 700,
    offset: 177
});

var servicios = new SmoothScroll('a[href*="#servicios"]', {
    speed: 700,
    offset: 150
});

var noticias = new SmoothScroll('a[href*="#seccion-noticias"]', {
    speed: 700,
    offset: 100
});


menuScrollPage()



/**
 * Verifica la URL para hacer el scroll. Esto siempre que cargue la página
 */
function menuScrollPage(){
    let URLactual = window.location.hash;

    if(URLactual !== "" && (URLactual === "#quienessomos" || URLactual === "#servicios" || URLactual === "#seccion-noticias") ){
        setTimeout(() => {
            let btsomos = document.querySelector(`a[href*="${URLactual}"]`);
            btsomos.click();
        }, 100);
    }
}