export default (() => {

    const filterSlide = document.querySelector(".filter-slide");
    const filterModal = document.querySelector(".filter-modal");
  
    filterSlide.addEventListener("click", () => {
        filterModal.classList.toggle("active");
    });

})();