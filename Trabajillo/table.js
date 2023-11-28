export default (() => {

    const tableSection = document.querySelector(".tables");
    const trashModal = document.querySelector(".trash-modal")
    const buttonCancelation = document.querySelector(".button-cancellation")

    tableSection?.addEventListener('click', async (event) => {

        if (event.target.closest('.trash')) {

            trashModal.classList.toggle('active')
            buttonCancelation.

        }
    });
})();

