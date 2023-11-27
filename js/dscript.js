let preveiwContainer = document.querySelector('.places-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');

document.querySelectorAll('.places-container .place').forEach(place => {
  place.onclick = () => {
    preveiwContainer.style.display = 'flex';
    let name = place.getAttribute('data-name');
    previewBox.forEach(preview => {
      let target = preview.getAttribute('data-target');
      if (name == target) {
        preview.classList.add('active');
      }
    });
  };
});

previewBox.forEach(close => {
  close.querySelector('.fa-times').onclick = () => {
    close.classList.remove('active');
    preveiwContainer.style.display = 'none';
  };
});