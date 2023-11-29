export default (() => {

    const filterSlide = document.querySelector(".filter-slide");
    const filterModal = document.querySelector(".filter-modal");
    const buttonCancel = document.querySelector(".button-cancel");
     
    filterSlide.addEventListener('click', async (event) => {

        filterModal.classList.toggle("active");

    });

    buttonCancel.addEventListener('click', async (event) => {

        filterModal.classList.toggle("active");

    });
   
})();