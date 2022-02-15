//basket_entry
const get_basket_number = document.querySelector(".basket span");
window.no_entry=()=> {
    if (get_basket_number.innerHTML == 0){
        get_basket_number.style.color = "tomato";
    }
    setTimeout(get_basket_number,3);
}
//slider
const get_header_img = document.querySelector(".header .img");
const get_slider_container = document.querySelector(".slider_container img");
slider_imgs = ["res/banner1.png", "res/banner2.png", "res/banner3.png"];
let temp_header = 0;
// window.slider_click=(elem)=> {
//     if (elem === 0){
//         temp_header = ;
//     }
//     else {
//         temp_header = ;
//     }
//     get_slider_container.src = slider_imgs[temp_header];
//     console.log(elem);
// }
const get_toggle = document.querySelector(".card_container .toggle_on_text");
const get_basic = document.querySelector(".basic_choice");
const get_wear_block = document.querySelector(".wear_container");
// const get_rapper = document.querySelector(".cardList_rapper");
const get_text_block = document.querySelector(".text");
window.toggle_on=(on)=>{
    on.classList.toggle("fa-toggle-on");
    on.classList.toggle("fa-toggle-off");
    get_toggle.classList.toggle("fa-toggle-on");
    get_basic.style.display = "none";
    get_wear_block.style.display = "block";
    get_text_block.style.gridGap = "0px";
}
