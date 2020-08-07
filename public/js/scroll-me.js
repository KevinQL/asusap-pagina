var scroll = new SmoothScroll('a[href*="#quienessomos"]', {
    speed: 700,
    offset: 177
});

var servicios = new SmoothScroll('a[href*="#servicios"]', {
    speed: 700,
    offset: 150
});

// var URLactual = window.location;
// alert(URLactual);
var URLactual = window.location.hash;

if(URLactual !== "" && (URLactual === "#quienessomos" || URLactual === "#servicios") ){
    setTimeout(() => {
        let btsomos = document.querySelector(`a[href*="${URLactual}"]`);
        btsomos.click();
    }, 100);
}



// var anchor = document.querySelector('a[href*="#"]');