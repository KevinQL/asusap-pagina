//let a =  new Glide('.glide').mount({ Controls, Breakpoints });
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