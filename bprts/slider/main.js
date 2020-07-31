let el1 = document.querySelector(".slider1");
let el2 = document.querySelector(".slider2");
let el3 = document.querySelector(".slider3");
let arr_el = [el1,el2,el3]

let btn = document.querySelector(".btn")

arr_el[0].style.transform="translatex(2%)"
arr_el[1].style.transform="translatex(0%)"
arr_el[2].style.transform="translatex(0%)"

console.log( arr_el[0].getBoundingClientRect().left > 9, "<-- ver ")
console.log( arr_el[1].getBoundingClientRect().left > 9, "<-- ver ")
console.log( arr_el[2].getBoundingClientRect().left > 9, "<-- ver ")
// el.style.transform='translatey(100px)';

btn.addEventListener('click',function(){

    let elnum=0;            
    do {
        let elnum = getRndInteger(0,2)                
        console.log(elnum)
        console.log(arr_el[elnum].getBoundingClientRect().left, " <---- ")
    } while ( !(arr_el[elnum].getBoundingClientRect().left >= 9) );

    // alert("hila")

    arr_el[elnum].style.transform='translatex(90%)';    

    setTimeout(function(){
        arr_el[elnum].style.transform='translatex(0%)';                
    },2000)
})


// el.style.transform.translate = '200px';
function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min + 1) ) + min;
}
