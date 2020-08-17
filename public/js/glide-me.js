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


//SECCIÓN NOTICIAS
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


//SECCIÓN HISTORIA - JUNTA ASUSAP
let div_historia = document.querySelector(".seccion-historia");
if(div_historia){
    let historia1 = new Glide('.glide-h1', {
        type: 'carousel',
        startAt: 0,
        focusAt:'center',
        perView: 3,
        gap:4,
        autoplay: 5200,
        hoverpause: true,
        breakpoints: { //para el tamaño de pantalla
            480:{perView: 1},
            800:{perView:2}
        }   
    });
    historia1.mount()


    let historia2 = new Glide('.glide-h2', {
        type: 'carousel',
        startAt: 0,
        focusAt:'center',
        perView: 3,
        gap:4,
        autoplay: 5200,
        hoverpause: true,
        breakpoints: { //para el tamaño de pantalla
            480:{perView: 1},
            800:{perView:2}
        }   
    });
    historia2.mount()


    let historia3 = new Glide('.glide-h3', {
        type: 'carousel',
        startAt: 0,
        focusAt:'center',
        perView: 3,
        gap:4,
        autoplay: 5200,
        hoverpause: true,
        breakpoints: { //para el tamaño de pantalla
            480:{perView: 1},
            800:{perView:2}
        }   
    });
    historia3.mount()

}