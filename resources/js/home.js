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
const get_rapper = document.querySelector(".cardList_rapper");
// const get_text_block = document.querySelector(".text");
// window.toggle_on=()=>{
//     // on.classList.toggle("fa-toggle-on");
//     // on.classList.toggle("fa-toggle-off");
//     get_toggle.classList.toggle("fa-toggle-on");
//     get_basic.style.display = "none";
//     get_wear_block.style.display = "block";
// }
// //toggle_hover
// window.toggle_hover=(on)=>{
//     on.classList.toggle("fa-toggle-on");
//     on.classList.toggle("fa-toggle-off");
// }
//slider_card
window.slider_right_side=()=>{
    get_basic.style.left = "-250px";
}
//left_slide
const get_number_page_one = document.querySelector(".number .number_1");
const get_number_page_two = document.querySelector(".number .number_2");
const get_slider_number = document.querySelector(".card_arrow_slider span");
window.slide_right=()=>{
    get_basic.style.left = "-820px";
    get_slider_number.innerHTML = 2;
    get_number_page_two.style.color = "#7ca982";
    if (get_number_page_one.style.color = "#7ca982"){
        get_number_page_one.style.color = "white";
    }
}
//slide_card
const get_slide_number_one = document.querySelector(".number .number_1");
const get_slide_number_two = document.querySelector(".number .number_2");
window.list_cards_right=()=>{
    get_basic.style.left = "-670px";
    get_slide_number_one.style.color = "#cfd9ce";
    get_slide_number_two.style.color = "#384d47";
}
window.list_cards_left=()=>{
    get_slide_number_one.style.color = "#384d47";
    get_slide_number_two.style.color = "#cfd9ce";
    get_basic.style.left = 0;
}
//toggle_off
window.toggle_off=()=>{
    if (get_toggle.classList = "fa-toggle-on"){
        get_toggle.classList = "fas fa-toggle-off toggle_on_text";
        get_wear_block.style.display = "none";
        get_basic.style.display = "flex";
        get_basic.style.left= 0;
    }
}
