/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
//basket_entry
var get_basket_number = document.querySelector(".basket span");

window.no_entry = function () {
  if (get_basket_number.innerHTML == 0) {
    get_basket_number.style.color = "tomato";
  }

  setTimeout(get_basket_number, 3);
}; //slider


var get_header_img = document.querySelector(".header .img");
var get_slider_container = document.querySelector(".slider_container img");
slider_imgs = ["res/banner1.png", "res/banner2.png", "res/banner3.png"];
var temp_header = 0; // window.slider_click=(elem)=> {
//     if (elem === 0){
//         temp_header = ;
//     }
//     else {
//         temp_header = ;
//     }
//     get_slider_container.src = slider_imgs[temp_header];
//     console.log(elem);
// }
/******/ })()
;