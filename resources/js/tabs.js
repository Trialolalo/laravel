export default (() => {
    // const tabSelectors = document.querySelectorAll(".tab-selector")

    // tabSelectors.forEach( tabSelector => {
    //     tabSelector.addEventListener('click', async (event) => {

    //         if (event.target.closest('.tab')) {
    //             const tab = event.target.closest('.tab');
    //             tab.parentElement.querySelector('.active').classList.remove('active');
    //             tab.classList.add('active');
    
    //             tab.closest('section').querySelector(".tab-content.active").classList.remove('active');
    //             tab.closest('section').querySelector(`.tab-content[data-tab="${tab.dataset.tab}"]`).classList.add('active')
    //         }
    //     });
    // })
   
    const form = document.querySelector(".form");

    form.addEventListener('click', (event)=>{
        if (event.target.closest('.tab')) {
            // alert('hola');
            let tab =  event.target.closest('.tab')
            
            tab.parentNode.querySelector('.active').classList.remove('active');
            tab.classList.add('active');
            console.log(tab.dataset.tab);
            document.querySelector(`[data-tab = "${tab.dataset.tab}"]`).classList.add('active');
        }
    })

   
})(); 