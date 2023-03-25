
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
let b=1;
plu.addEventListener("click", () => {
    b++;
    b = (b < 10) ? +b : b;
    nu.innerText = b;
   

});

minu.addEventListener("click", () => {
    if (b > 1) {
        b--;
        b = (b < 10) ? +b : b;
        nu.innerText = b;
    }

});
let c = 1;
pl.addEventListener("click", () => {
    c++;
    c = (c < 10) ? +c : c;
    number.innerText = c;
  

});

mi.addEventListener("click", () => {
    if (c > 1) {
        c--;
        c = (c < 10) ? +c : c;
        number.innerText = c;
    }

});
