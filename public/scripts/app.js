// Constants for class names
const ACTIVE_CLASS = 'active';
const DARK_THEME = 'dark';
const LIGHT_THEME = 'light';
const ROTATE_CLASS = 'rotate-90';

// Selectors
const themeToggleButtons = document.querySelectorAll('.toggle-theme');
const searchButton = document.querySelector('.search-btn-open');
const searchModal = document.querySelector('.search-modal');
const openCartButton = document.querySelector('.open-cart');
const cart = document.querySelector('.cart');
const overlay = document.querySelector('.overlay');
const searchOverlay = document.querySelector('.search-overlay');
const closeCartButton = document.querySelector('.close-cart');
const mobileMenu = document.querySelector('.mobile-menu');
const openMenuButton = document.querySelector('.open-menu-mobile');
const closeMenuButton = document.querySelector('.close-menu-mobile');
const openCategory = document.querySelector('.open-category');
const categorySlide = document.querySelector('.category-slide');
const closeCategorySlide = document.querySelector('.close-category-slide');
const citylistMenu = document.querySelector('.citylist-menu');
const citylistOpen = document.querySelector('.citylist-open');
const openCartMobileButton = document.querySelector('.open-mobile-cart');
const mobileCart = document.querySelector('.mobile-cart');
const openMobileSearch = document.querySelector('.open-mobile_search-modal');
const closeMobileSearch = document.querySelector('.close-mobile_search-modal');
const MobileSearch = document.querySelector('.mobile_search-modal');
const navbar = document.querySelector('.bottom-navbar');
let lastScrollTop = 0;


// / Utility Functions
const toggleClass = (element, className, condition) => {
  if (condition) {
    element.classList.add(className);
  } else {
    element.classList.remove(className);
  }
};

// Theme Toggle Function
const toggleTheme = () => {
  const isDarkMode = localStorage.getItem('theme') === DARK_THEME;
  document.documentElement.classList.toggle(DARK_THEME, !isDarkMode);
  localStorage.setItem('theme', isDarkMode ? LIGHT_THEME : DARK_THEME);
};


// Event Listeners for Theme Toggle
// Add click listeners to toggle theme buttons
themeToggleButtons.forEach(button => {
  button.addEventListener('click', toggleTheme);
});

// Event Listener for Search Button
searchButton?.addEventListener('click', () => {
  searchModal.classList.add('active');
  searchButton.classList.add('active');
  searchOverlay.classList.add('active');
});

// Event Listener for Overlay Click 
overlay?.addEventListener('click', () => {
  overlay.classList.remove('active');
  searchModal.classList.remove('active');
  searchButton.classList.remove('active');
  cart.classList.remove('active');
  citylistMenu.classList.remove('active');
  mobileMenu.classList.remove('active')
});

// Event Listener for Search Overlay Click
searchOverlay?.addEventListener('click', () => {
  searchOverlay.classList.remove('active');
  searchModal.classList.remove('active');
  sortModal.classList.remove('active')
  filterModal.classList.remove('active')
});

// Event Listener for Opening Cart
openCartButton?.addEventListener('click', () => {
  cart.classList.add('active');
  overlay.classList.add('active');
});

// Event Listener for Closing Cart
closeCartButton?.addEventListener('click', () => {
  cart.classList.remove('active');
  overlay.classList.remove('active');
});

// Event Listener for City List Menu
citylistOpen?.addEventListener('click', () => {
  citylistMenu.classList.add('active');
  overlay.classList.add('active');
});

openCartMobileButton?.addEventListener('click', () => {
  overlay.classList.add('active')
  mobileCart.classList.add('active')
});

openMenuButton?.addEventListener('click', () => {
  mobileMenu.classList.add('active')
  overlay.classList.add('active')
})
closeMenuButton?.addEventListener('click', () => {
  mobileMenu.classList.remove('active')
  overlay.classList.remove('active')
})


// Custom Input Fields with Increment/Decrement Buttons
document.addEventListener('DOMContentLoaded', () => {
  // Event Listener for Increment Buttons
  document.querySelectorAll('.increment').forEach(button => {
    button.addEventListener('click', event => {
      const input = event.target.closest('button').querySelector('.custom-input');
      const value = parseInt(input.value) || 0;
      if (value < 20) {
        input.value = value + 1;
      }
    });
  });

  // Event Listener for Decrement Buttons
  document.querySelectorAll('.decrement').forEach(button => {
    button.addEventListener('click', event => {
      const input = event.target.closest('button').querySelector('.custom-input');
      const value = parseInt(input.value) || 0;
      if (value > 0) {
        input.value = value - 1;
      }
    });
  });
});


openCategory?.addEventListener('click', () => {
  toggleClass(categorySlide, ACTIVE_CLASS, true);
});

closeCategorySlide?.addEventListener('click', () => {
  toggleClass(categorySlide, ACTIVE_CLASS, false);
});

// Category Details
const initializeCategoryDetails = () => {
  document.querySelectorAll('.open-detail-category').forEach(item => {
    item.addEventListener('click', () => {
      const detailCategory = item.nextElementSibling;
      if (detailCategory) {
        toggleClass(detailCategory, ACTIVE_CLASS, true);
      }
    });
  });

  document.querySelectorAll('.close-detail-category').forEach(closeButton => {
    closeButton.addEventListener('click', () => {
      const detailCategory = closeButton.closest('.detail-category');
      if (detailCategory) {
        toggleClass(detailCategory, ACTIVE_CLASS, false);
      }
    });
  });
};

// Submenu Toggle
const initializeSubmenuToggle = () => {
  document.querySelectorAll('.open-submenu').forEach(item => {
    item.addEventListener('click', function () {
      const submenu = this.nextElementSibling;
      const svg = this.querySelector('svg');
      const isActive = submenu.classList.contains(ACTIVE_CLASS);

      document.querySelectorAll('.menu-category-submenu').forEach(sub => {
        sub.classList.remove(ACTIVE_CLASS);
      });
      document.querySelectorAll('.open-submenu svg').forEach(svgItem => {
        svgItem.classList.add(ROTATE_CLASS);
      });

      if (!isActive) {
        toggleClass(submenu, ACTIVE_CLASS, true);
        toggleClass(svg, ROTATE_CLASS, false);
      }
    });
  });
};


// Initialize Event Listeners
document.addEventListener('DOMContentLoaded', () => {
  initializeCategoryDetails();
  initializeSubmenuToggle();
});

// NAVBAR MOBILE LOGIC
window.addEventListener('scroll', () => {
  let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

  if (currentScroll > lastScrollTop) {
    navbar?.classList.add('hidden');
  } else {
    navbar?.classList.remove('hidden');
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
});

openMobileSearch?.addEventListener('click', () => {
  MobileSearch.classList.add('active')
})

closeMobileSearch?.addEventListener('click', () => {
  MobileSearch.classList.remove('active')
})

// MEGA-MENU
document.addEventListener("DOMContentLoaded", function () {
  const categoryItems = document.querySelectorAll(".megamenu_category-item");
  const leftMenus = document.querySelectorAll(".megamenu_left-item");

  categoryItems.forEach((item, index) => {
    item.addEventListener("mouseenter", function () {
      document.querySelector(".megamenu_category-item.active")?.classList.remove("active");
      document.querySelector(".megamenu_left-item.active")?.classList.remove("active");
      item.classList.add("active");

      if (leftMenus[index]) {
        leftMenus[index].classList.add("active");
      }
    });
  });
});

// formvalidatiom 
document.addEventListener("DOMContentLoaded", function () {
  const inputField = document.querySelector("input[type='text']");
  const errorMessage = document.querySelector("p.text-error");
  const submitButton = document.querySelector(".submit-btn");

  function validateInput(value) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phonePattern = /^09\d{9}$/;

    if (!value) {
      return "این فیلد نمی‌تواند خالی باشد";
    } else if (!emailPattern.test(value) && !phonePattern.test(value)) {
      return "لطفا ایمیل یا شماره موبایل معتبر وارد کنید";
    }
    return "";
  }

  inputField?.addEventListener("input", function () {
    const error = validateInput(inputField.value.trim());

    if (error) {
      errorMessage.textContent = error;
      errorMessage.classList.add("active");
      submitButton.classList.add("submit-btn-invisable");
    } else {
      errorMessage.textContent = "";
      errorMessage.classList.remove("active");
      submitButton.classList.remove("submit-btn-invisable");
    }
  });
});


document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('otp-form')
  if (!form) return

  const inputs = [...form.querySelectorAll('input[type=text]')]
  const submit = form.querySelector('button[type=submit]')

  const handleKeyDown = (e) => {
    if (
      !/^[0-9]{1}$/.test(e.key)
      && e.key !== 'Backspace'
      && e.key !== 'Delete'
      && e.key !== 'Tab'
      && !e.metaKey
    ) {
      e.preventDefault()
    }

    if (e.key === 'Delete' || e.key === 'Backspace') {
      const index = inputs.indexOf(e.target);
      if (index > 0) {
        inputs[index - 1].value = '';
        inputs[index - 1].focus();
      }
    }
  }

  const handleInput = (e) => {
    const { target } = e
    const index = inputs.indexOf(target)
    if (target.value) {
      if (index < inputs.length - 1) {
        inputs[index + 1].focus()
      } else {
        submit.focus()
      }
    }
  }

  const handleFocus = (e) => {
    e.target.select()
  }

  const handlePaste = (e) => {
    e.preventDefault()
    const text = e.clipboardData.getData('text')
    if (!new RegExp(`^[0-9]{${inputs.length}}$`).test(text)) {
      return
    }
    const digits = text.split('')
    inputs.forEach((input, index) => input.value = digits[index])
    submit.focus()
  }

  inputs.forEach((input) => {
    input.addEventListener('input', handleInput)
    input.addEventListener('keydown', handleKeyDown)
    input.addEventListener('focus', handleFocus)
    input.addEventListener('paste', handlePaste)
  })
})


// OTP TIMER
document.addEventListener("DOMContentLoaded", function () {
  const timerElement = document.querySelector('.login-timer');
  const timerTextElement = document.querySelector('.login-timer_text');
  const resendButton = document.querySelector('.resend-code');

  if (timerElement && resendButton && timerTextElement) {
    let time = 180;
    let timerInterval;

    function updateTimer() {
      const minutes = Math.floor(time / 60);
      const seconds = time % 60;

      timerElement.textContent = `${padZero(minutes)}:${padZero(seconds)}`;

      if (time <= 0) {
        clearInterval(timerInterval);
        timerTextElement.classList.add('hidden');
        resendButton.classList.add('active');
        resendButton.removeAttribute('disabled');
        return;
      }

      time--;
    }

    function padZero(num) {
      return num < 10 ? "0" + num : num;
    }

    function startTimer() {
      clearInterval(timerInterval);
      time = 180;
      timerTextElement.classList.remove('hidden');
      timerTextElement.classList.add('flex');
      resendButton.classList.remove('active');
      resendButton.setAttribute('disabled', 'true');
      updateTimer();
      timerInterval = setInterval(updateTimer, 1000);
    }

    startTimer();

    resendButton.addEventListener('click', function () {
      if (resendButton.classList.contains('active')) {
        startTimer();
      }
    });
  }
});

// PASSWORD INPUT 
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll("[data-toggle='password']").forEach(function (wrapper) {
    const passwordInput = wrapper.querySelector("input");
    const toggleButton = wrapper.querySelector(".toggle-password");
    const toggleIcon = toggleButton.querySelector("use");

    toggleButton.addEventListener("click", function () {
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.setAttribute("href", "#eye-slash");
      } else {
        passwordInput.type = "password";
        toggleIcon.setAttribute("href", "#eye");
      }
    });
  });
});
// NEW PASSWORD
document.addEventListener("DOMContentLoaded", function () {
  const passwordInput = document.getElementById("passwordInput");
  const confirmPassword = document.getElementById("confirmPassword");
  const bar1 = document.getElementById("bar1");
  const bar2 = document.getElementById("bar2");
  const bar3 = document.getElementById("bar3");

  const lengthCheck = document.getElementById("lengthCheck");
  const numberCheck = document.getElementById("numberCheck");
  const uppercaseCheck = document.getElementById("uppercaseCheck");

  passwordInput?.addEventListener("input", function () {
    let password = passwordInput.value;
    let isLengthValid = password.length >= 8;
    let hasNumber = /[0-9]/.test(password);
    let hasUppercase = /[A-Z]/.test(password);

    updateRequirement(lengthCheck, isLengthValid);
    updateRequirement(numberCheck, hasNumber);
    updateRequirement(uppercaseCheck, hasUppercase);

    let strength = isLengthValid + hasNumber + hasUppercase;

    resetBars();

    if (strength === 1) {
      bar1.classList.replace("bg-gray-300", "bg-red-500");
    } else if (strength === 2) {
      bar1.classList.replace("bg-gray-300", "bg-amber-400");
      bar2.classList.replace("bg-gray-300", "bg-amber-400");
    } else if (strength === 3) {
      bar1.classList.replace("bg-gray-300", "bg-green-500");
      bar2.classList.replace("bg-gray-300", "bg-green-500");
      bar3.classList.replace("bg-gray-300", "bg-green-500");
    }
  });

  function updateRequirement(element, isValid) {
    element.style.display = isValid ? "none" : "flex";
  }

  function resetBars() {
    [bar1, bar2, bar3].forEach(bar => {
      bar.classList.remove("bg-red-500", "bg-amber-400", "bg-green-500");
      bar.classList.add("bg-gray-300");
    });
  }

  document.querySelectorAll(".toggle-password").forEach(button => {
    button.addEventListener("click", function () {
      const input = this.parentElement.querySelector("input");
      if (input.type === "password") {
        input.type = "text";
      } else {
        input.type = "password";
      }
    });
  });

  confirmPassword?.addEventListener("input", function () {
    if (confirmPassword.value !== passwordInput.value) {
      confirmPassword.setCustomValidity("رمز عبور تطابق ندارد");
    } else {
      confirmPassword.setCustomValidity("");
    }
  });
});




// LODING CODE
const lodingBtn = document.getElementById('loding-btn')
const lodingModal = document.querySelector('.loding-modal')

lodingBtn?.addEventListener('click', () => {
  lodingModal.classList.add('active')
  overlay.classList.add('active')
})

overlay?.addEventListener('click', () => lodingModal.classList.remove('active'))



// accordion
document.addEventListener("DOMContentLoaded", function () {
  const accordions = document.querySelectorAll('.accordion-btn');

  if (accordions.length > 0) { // بررسی وجود آکاردئون در صفحه
    accordions.forEach(btn => {
      btn.addEventListener('click', function () {
        const content = this.nextElementSibling;
        const icon = this.querySelector('.accordion-icon');

        if (content.style.maxHeight) {
          content.style.maxHeight = null;
          icon.classList.remove('rotate-180');
        } else {
          document.querySelectorAll('.accordion-content').forEach(item => {
            item.style.maxHeight = null;
            item.previousElementSibling.querySelector('.accordion-icon').classList.remove('rotate-180');
          });

          content.style.maxHeight = content.scrollHeight + "px";
          icon.classList.add('rotate-180');
        }
      });
    });
  }
});



// toggleAccordion at Shop Page
function toggleAccordion(index) {
  const content = document.getElementById(`content-${index}`);
  const icon = document.querySelector(`#icon-${index} svg`);

  if (content.style.maxHeight && content.style.maxHeight !== '0px') {
    content.style.maxHeight = '0';
    icon.classList.remove('-rotate-90');
  } else {
    content.style.maxHeight = content.scrollHeight + 'px';
    icon.classList.add('-rotate-90'); 
  }
}


// PRICE RANGE
document.querySelectorAll(".price-slider").forEach((sliderContainer) => {
  const priceElements = sliderContainer.querySelectorAll(".price-input p");
  const rangeInputs = sliderContainer.querySelectorAll(".range-input input");
  const range = sliderContainer.querySelector(".slider-bar .progress");
  let priceGap = 1000;

  function formatNumber(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }

  rangeInputs.forEach((input) => {
    input.addEventListener("input", (e) => {
      let minVal = parseInt(rangeInputs[0].value) * 10;
      let maxVal = parseInt(rangeInputs[1].value) * 10;

      if (maxVal - minVal < priceGap) {
        if (e.target.classList.contains("min-range")) {
          rangeInputs[0].value = (maxVal - priceGap) / 10;
        } else {
          rangeInputs[1].value = (minVal + priceGap) / 10;
        }
      } else {
        priceElements[0].textContent = formatNumber(minVal);
        priceElements[1].textContent = formatNumber(maxVal);
        range.style.left = (rangeInputs[0].value / rangeInputs[0].max) * 100 + "%";
        range.style.right = 100 - (rangeInputs[1].value / rangeInputs[1].max) * 100 + "%";
      }
    });
  });
});


// SOERT MODALS - SHOP PAGE
const sortModal = document.querySelector('.sort-modal')
const sortModalOpen = document.querySelector('.sort-modal-open')
const sortModalClose = document.querySelector('.sort-modal-close')

sortModalOpen?.addEventListener('click', ()=> {
  searchOverlay.classList.add('active')
  sortModal.classList.add('active')
})

sortModalClose?.addEventListener('click'  , ()=> {
  searchOverlay.classList.remove('active')
  sortModal.classList.remove('active')
})

// FILTER MODALS - SHOP PAGE
const filterModal = document.querySelector('.filter-modal')
const filterModalOpen = document.querySelector('.filter-modal-open')
const filterModalClose = document.querySelector('.filter-modal-close')

filterModalOpen?.addEventListener('click', ()=> {
  searchOverlay.classList.add('active')
  filterModal.classList.add('active')
})

filterModalClose?.addEventListener('click'  , ()=> {
  searchOverlay.classList.remove('active')
  filterModal.classList.remove('active')
})




