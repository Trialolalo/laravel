export default (() => {

    const tableSection = document.querySelector(".tables");
    const trashModal = document.querySelector(".trash-modal")
    const buttonCancelation = document.querySelector(".button-cancelation")

    tableSection?.addEventListener('click', async (event) => {

        if (event.target.closest('.trash')) {

            trashModal.classList.toggle('active')

        }
    });

    buttonCancelation?.addEventListener('click', async (event) => {

        if (event.target.closest('.button-cancelation')) {

            trashModal.classList.toggle('active')

        }
    });
})();

