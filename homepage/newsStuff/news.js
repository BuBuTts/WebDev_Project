var swiper = new Swiper(".slide-content", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },


    // Responsive breakpoints
    breakpoints: {
        // When window width is <= 768px, display one slide per view
        768: {
        slidesPerView: 3,
        spaceBetween: 25,
        },
    },

  });