export default (() => {
    const tabPrincipal = document.querySelector(".tab-principal");
    const tabImages = document.querySelector(".tab-images")
    
    tabPrincipal.addEventListener('click', async (event) => {
        if (event.target.closest('.tab-principal')) {
            tabPrincipal.classList.add('active')
            tabImages.classList.remove('active')
        }
    });

    tabImages.addEventListener('click', async (event) => {
        if (event.target.closest('.tab-images')){
            tabPrincipal.classList.remove('active')
            tabImages.classList.add('active')
        }
    });

   

   
})();