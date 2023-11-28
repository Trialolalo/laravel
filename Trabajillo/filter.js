export default (() => {

    const filterSlide = document.querySelector(".filter-slide");
    const filterModal = document.querySelector(".filter-modal");
    const buttonCancel = document.querySelector(".button-cancel");
    const cerrarModal = () => {
        filterModal.classList.remove("active");
    };
  
    filterSlide.addEventListener("click", () => {
        filterModal.classList.toggle("active");
        buttonCancel.addEventListener("click", cerrarModal);
    });

    
})();