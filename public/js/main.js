
let el = document.querySelector(".barra-menu").addEventListener('click',function(){
    menuResponsivo()    
})

function menuResponsivo() {
    var x = document.querySelector('.navegacion');    
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
    }    
}