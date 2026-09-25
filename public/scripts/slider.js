// Header Slider
var swiper = new Swiper(".header-slider", {
  speed: 500,
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: (index, className) => `<span class="${className} custom-bullet"></span>`
  },
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },
  effect: "fade",
});

// Update navigation buttons visibility
function updateNavigation(swiper, nextEl, prevEl) {
  swiper.isBeginning ? prevEl.classList.add("invisable-btn") : prevEl.classList.remove("invisable-btn");
  swiper.isEnd ? nextEl.classList.add("invisable-btn") : nextEl.classList.remove("invisable-btn");
}

// Sliders
document.addEventListener("DOMContentLoaded", () => {
  var amazingSwiper = new Swiper(".AmazingSlider", {
    slidesPerView: "auto",
    spaceBetween: 10,
    speed: 500,
    navigation: {
      nextEl: ".AmazingSlider-next-slide",
      prevEl: ".AmazingSlider-prev-slide",
    },
    on: {
      init() { updateNavigation(this, document.querySelector(".AmazingSlider-next-slide"), document.querySelector(".AmazingSlider-prev-slide")); },
      slideChange() { updateNavigation(this, document.querySelector(".AmazingSlider-next-slide"), document.querySelector(".AmazingSlider-prev-slide")); }
    }
  });

  // Latest Products Slider
  var latestProductsSwiper = new Swiper(".LatestProducts", {
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
      370: { slidesPerView: 2 },
      480: { slidesPerView: 2 },
      640: { slidesPerView: 2, spaceBetween: 20 },
      768: { slidesPerView: 3, spaceBetween: 20 },
      1024: { slidesPerView: 3, spaceBetween: 20 },
      1200: { slidesPerView: 4, spaceBetween: 20 },
    },
    autoplay: { delay: 5000, disableOnInteraction: false },
    speed: 500,
    navigation: {
      nextEl: ".LatestProducts-next-slide",
      prevEl: ".LatestProducts-prev-slide",
    },
    on: {
      init() { updateNavigation(this, document.querySelector(".LatestProducts-next-slide"), document.querySelector(".LatestProducts-prev-slide")); },
      slideChange() { updateNavigation(this, document.querySelector(".LatestProducts-next-slide"), document.querySelector(".LatestProducts-prev-slide")); }
    }
  });

  // Best Selling Slider
  var bestSellingSwiper = new Swiper(".BestSelling", {
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
      370: { slidesPerView: 2 },
      480: { slidesPerView: 2 },
      640: { slidesPerView: 2, spaceBetween: 20 },
      768: { slidesPerView: 3, spaceBetween: 20 },
      1024: { slidesPerView: 3, spaceBetween: 20 },
      1200: { slidesPerView: 4, spaceBetween: 20 },
    },
    speed: 500,
    navigation: {
      nextEl: ".BestSelling-next-slide",
      prevEl: ".BestSelling-prev-slide",
    },
    on: {
      init() { updateNavigation(this, document.querySelector(".BestSelling-next-slide"), document.querySelector(".BestSelling-prev-slide")); },
      slideChange() { updateNavigation(this, document.querySelector(".BestSelling-next-slide"), document.querySelector(".BestSelling-prev-slide")); }
    }
  });

  // Brand Slider
  var BrandSlider = new Swiper(".BrandSlider", {
    slidesPerView: "auto",
    spaceBetween: 30,
    speed: 500,
    navigation: {
      nextEl: ".brand-next-slide",
      prevEl: ".brand-prev-slide",
    },
    on: {
      init() { updateNavigation(this, document.querySelector(".brand-next-slide"), document.querySelector(".brand-prev-slide")); },
      slideChange() { updateNavigation(this, document.querySelector(".brand-next-slide"), document.querySelector(".brand-prev-slide")); }
    }
  });

  // Hottest Products Slider
  var HottestSlider = new Swiper(".HottestSlider", {
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
      370: { slidesPerView: 2 },
      480: { slidesPerView: 2 },
      640: { slidesPerView: 2, spaceBetween: 20 },
      768: { slidesPerView: 3, spaceBetween: 20 },
      1024: { slidesPerView: 3, spaceBetween: 30 },
      1200: { slidesPerView: 4, spaceBetween: 40 },
    },
    speed: 500,
    navigation: {
      nextEl: ".Hottest-next-slide",
      prevEl: ".Hottest-prev-slide",
    },
    on: {
      init() { updateNavigation(this, document.querySelector(".Hottest-next-slide"), document.querySelector(".Hottest-prev-slide")); },
      slideChange() { updateNavigation(this, document.querySelector(".Hottest-next-slide"), document.querySelector(".Hottest-prev-slide")); }
    }
  });

  // Articles Products Slider
  var articleSlider = new Swiper(".articleSlider", {
    slidesPerView: 'auto',
    spaceBetween: 20,
    breakpoints: {
      480: { slidesPerView: 1 },
      640: { slidesPerView: 2, spaceBetween: 20 },
      768: { slidesPerView: 3, spaceBetween: 20 },
      1000: { slidesPerView: 4, spaceBetween: 20 },
      1200: { slidesPerView: 4, spaceBetween: 30 },
    },
    speed: 500,
    navigation: {
      nextEl: ".articleSlider-next-slide",
      prevEl: ".articleSlider-prev-slide",
    },
    on: {
      init() { updateNavigation(this, document.querySelector(".articleSlider-next-slide"), document.querySelector(".articleSlider-prev-slide")); },
      slideChange() { updateNavigation(this, document.querySelector(".articleSlider-next-slide"), document.querySelector(".articleSlider-prev-slide")); }
    }
  });

  // Product Details Slider
  var swiper = new Swiper(".ProductDetailsSlider", {
    centeredSlides: true,
    spaceBetween: 20,
    navigation: {
      nextEl: ".button-next-ProductDetailsSlider",
      prevEl: ".button-prev-ProductDetailsSlider",
    },  
    on: {
      init() { updateNavigation(this, document.querySelector(".button-next-ProductDetailsSlider"), document.querySelector(".button-prev-ProductDetailsSlider")); },
      slideChange() { updateNavigation(this, document.querySelector(".button-next-ProductDetailsSlider"), document.querySelector(".button-prev-ProductDetailsSlider")); }
    }
  }); 
  // MobileProductSlider
  var swiper = new Swiper(".MobileProductSlider", {
    centeredSlides: true,
    spaceBetween: 20, 
    pagination: {
      el: ".MobileProductSlider-pagination",
    },
  }); 
});

