document.addEventListener("DOMContentLoaded", function () {
  const modal = document.querySelector(".pic-modal");
  const modalImage = document.createElement("img");

  modalImage.className = "max-h-[90vh] max-w-[90vw] rounded-xl";
  modal.appendChild(modalImage);

  const picContainers = document.querySelectorAll(".open-pic-modal");

  picContainers.forEach((container) => {
    container.addEventListener("click", () => {
      const darkImg = container.querySelector("img.dark\\:block");
      const lightImg = container.querySelector("img.dark\\:hidden");
      const isDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

      modalImage.src = isDark ? darkImg.src : lightImg.src;
      modal.classList.add("show");
    });
  });

  modal.addEventListener("click", () => {
    modal.classList.remove("show");
  });
});
