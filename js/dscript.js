// Search Function
function search() {
  let filter = document.getElementById('find').value.toUpperCase();
  let item = document.querySelectorAll('.place');
  let l = document.getElementsByTagName('p');
  for (var i = 0; i <= l.length; i++) {
    let a = item[i].getElementsByTagName('p')[0];
    let value = a.innerHTML || a.innerText || a.textContent;
    if (value.toUpperCase().indexOf(filter) > -1) {
      item[i].style.display = "";
    } else {
      item[i].style.display = "none";
    }
  }
}

// Pop-Up Model
let previewContainer = document.querySelector('.places-preview');
let previewBox = previewContainer.querySelectorAll('.preview');

document.querySelectorAll('.places-container .place').forEach(place => {
  place.onclick = () => {
    previewContainer.style.display = 'flex';
    let name = place.getAttribute('data-name');

    previewBox.forEach(preview => {
      let target = preview.getAttribute('data-target');
      if (name == target) {
        preview.classList.add('active');

        // Reset active state for tabs and slides
        const tabs = preview.querySelectorAll('.tab-btn');
        const slides = preview.querySelectorAll('.slide');

        tabs.forEach(tab => tab.classList.remove('active2'));
        slides.forEach(slide => slide.classList.remove('active2'));

        // Set the first tab and slide as active
        tabs[0].classList.add('active2');
        slides[0].classList.add('active2');
      }
    });
  };
});

previewBox.forEach(close => {
  close.querySelector('.fa-times').onclick = () => {
    close.classList.remove('active');
    previewContainer.style.display = 'none';
  };
});

previewBox.forEach(preview => {
  const tabs = preview.querySelectorAll('.tab-btn');
  const slides = preview.querySelectorAll('.slide');

  tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
      tabs.forEach(tab => tab.classList.remove('active2'));
      tab.classList.add('active2');

      slides.forEach(slide => slide.classList.remove('active2'));
      slides[index].classList.add('active2');
    });
  });
});

// Weather Widget
! function (d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (!d.getElementById(id)) {
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://weatherwidget.io/js/widget.min.js';
    fjs.parentNode.insertBefore(js, fjs);
  }
}(document, 'script', 'weatherwidget-io-js');
