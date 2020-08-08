//let a =  new Glide('.glide').mount({ Controls, Breakpoints });
let div_slider = document.querySelector(".seccion-slider");
if(div_slider){
    let b = new Glide('.glide2', {
        type: 'carousel',
        startAt: 0,
        focusAt:'center',
        perView: 1,
        gap:0,
        autoplay: 2600,
        hoverpause: true,
        breakpoints: { //para el tamaño de pantalla
            480:{perView: 1},
            800:{perView:1}
        }   
    });
    b.mount()
}


let div_noticia = document.querySelector(".seccion-noticias");
if(div_noticia){
    let b = new Glide('.glide', {
        type: 'carousel',
        startAt: 0,
        focusAt:'center',
        perView: 3,
        gap:5,
        autoplay: 2600,
        hoverpause: true,
        breakpoints: { //para el tamaño de pantalla
            480:{perView: 1},
            800:{perView:2}
        }   
    });
    b.mount()
}