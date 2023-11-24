export default (() => {

    const filter = document.querySelector(".filter")
    const filterSlide = document.querySelector(".filter-slide");
    const filterMenu = document.querySelector(".filter-menu");
    const filterForm = document.querySelector(".filter-form")
  
    filterSlide.addEventListener("click", () => {
        filterSlide.classList.toggle("active");
        filterMenu.classList.toggle("active");
        filterForm.classList.toggle("active");
    });

})();