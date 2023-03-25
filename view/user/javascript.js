
const plus = document.querySelector(".plus");
minus = document.querySelector(".minus");
num = document.querySelector(".num");
const plu = document.querySelector(".plu");
minu = document.querySelector(".minu");
nu = document.querySelector(".nu");
const pl = document.querySelector(".pl");
mi = document.querySelector(".mi");
number = document.querySelector(".number");
let a = 1;
plus.addEventListener("click", () => {
    a++;
    a = (a < 10) ? +a : a;
    num.innerText = a;
    console.log(a);

});
minus.addEventListener("click", () => {
    if (a > 1) {
        a--;
        a = (a < 10) ? +a : a;
        num.innerText = a;
    }

});
plu.addEventListener("click", () => {
    a++;
    a = (a < 10) ? +a : a;
    nu.innerText = a;
   

});

minu.addEventListener("click", () => {
    if (a > 1) {
        a--;
        a = (a < 10) ? +a : a;
        nu.innerText = a;
    }

});
pl.addEventListener("click", () => {
    a++;
    a = (a < 10) ? +a : a;
    number.innerText = a;
  

});

mi.addEventListener("click", () => {
    if (a > 1) {
        a--;
        a = (a < 10) ? +a : a;
        number.innerText = a;
    }

});
