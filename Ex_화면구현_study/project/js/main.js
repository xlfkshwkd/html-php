window.addEventListener("DOMContentLoaded", function() {


    const swiper = new Swiper(".mySwiper", {
        loop: true,
        navigation: {
            nextEl: ".mySwiper .next",
            prevEl: ".mySwiper .prev",
        },
        pagination: {
          el: ".swiper-pagination",
        },
    });

    /* 더보기 메뉴 클릭시 */
    const moreMenus =document.getElementsByClassName("more_menu");
    const slideMenu =document.querySelector("slideMenu");
    const LayerDim =document.querySelector("LayerDim");
    const closeBtn =document.querySelector("closeBtn");





});