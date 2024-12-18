const add = window.document.getElementById('id');
const popup = window.document.getElementById('popup');
const popupEdit = window.document.getElementById('edit');

function openPopup () {
  popup.style.opacity = 1;
  popup.style.zIndex = 2
}

popup.addEventListener('click', (event) => {
  if (event.target == popup) {
    popup.style.opacity = 0;
    popup.style.zIndex = -2
  }
})

function openEdit() {
  popupEdit.style.opacity = 1
  popupEdit.style.zIndex = 2
}