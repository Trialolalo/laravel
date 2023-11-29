export default (() => {
    const tabSelector = document.querySelector(".tab-selector")
    
    tabSelector.addEventListener('click', async (event) => {

        if (event.target.closest('.tab')) {
            const tabs = tabSelector.querySelectorAll('.tab');
            tabs.forEach(tab => tab.classList.remove('active'));
            
            const clickedTab = event.target.closest('.tab');
            clickedTab.classList.add('active');
        }
    });
   
})();