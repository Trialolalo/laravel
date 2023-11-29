export default (() => {
    const tabSelector = document.querySelector(".tab-selector")
    
    tabSelector.addEventListener('click', async (event) => {

        if (event.target.closest('.tab')) {
            const tab = event.target.closest('.tab');
            tab.classList.remove('active');
            tab.classList.add('active');
        }
    });

   
})();