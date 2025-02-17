function truncateTextByHeight(element, maxHeight) {
  let originalText = element.innerText;
  let truncatedText = originalText;
  while (element.scrollHeight > maxHeight && truncatedText.length > 0) {
    truncatedText = truncatedText.slice(0, -1); // Видаляємо останній символ
    element.innerText = truncatedText + '...';
  }
  if (truncatedText.length === 0) {
    element.innerText = originalText;
  }
}
document.addEventListener('DOMContentLoaded', function () {
  // const textCutElements = document.querySelectorAll('.cut-text');
  //
  // if ( textCutElements ) {
  //     textCutElements.forEach(textCutElement => {
  //         truncateTextByHeight(textCutElement, 264);
  //     });
  // }

  const filtersButton = document.querySelector('.filters__button');
  const filtersPanel = document.querySelector('.products__col--filter');
  if (filtersButton && filtersPanel) {
    const closeButton = document.querySelector('.filter-sections__close-button');
    if (closeButton) {
      closeButton.addEventListener('click', function () {
        filtersPanel.classList.toggle('is-panel-open');
      });
    }
    filtersButton.addEventListener('click', function () {
      filtersPanel.classList.toggle('is-panel-open');
    });
  }
  window.addEventListener('scroll', function () {
    const header = document.querySelector('header');
    const scrollPosition = window.scrollY;
    if (scrollPosition >= 201) {
      header.classList.add('scrolled');
    } else if (scrollPosition < 184) {
      header.classList.remove('scrolled');
    }
  });
  const callToActionObject = document.querySelector('.window-call-to-action__container');
  if (callToActionObject) {
    const delay = parseInt(callToActionObject.getAttribute('data-delay'), 10);
    setTimeout(function () {
      callToActionObject.classList.add('active');
    }, delay);
    const callToActionCloseButtonObject = callToActionObject.querySelector('.window-call-to-action__close-button');
    if (callToActionCloseButtonObject) {
      callToActionCloseButtonObject.addEventListener('click', function () {
        callToActionObject.classList.toggle('active');
      });
    }
  }
});
document.addEventListener("DOMContentLoaded", function () {
  const lazyBackgrounds = document.querySelectorAll('.lazy-bg');
  const lazyLoadBackground = element => {
    const bgUrl = element.getAttribute('data-bg');
    if (bgUrl) {
      element.style.backgroundImage = `url(${bgUrl})`;
      element.classList.add('loaded');
    }
  };
  if ('IntersectionObserver' in window) {
    let observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          lazyLoadBackground(entry.target);
          observer.unobserve(entry.target);
        }
      });
    });
    lazyBackgrounds.forEach(bg => observer.observe(bg));
  } else {
    lazyBackgrounds.forEach(lazyLoadBackground); // Fallback для старих браузерів
  }
  const div = document.querySelector('.wp-block-wpm-language-switcher');
  const li = document.createElement('li');
  li.classList.add(...div.classList);
  while (div.firstChild) {
    li.appendChild(div.firstChild);
  }
  div.parentNode.replaceChild(li, div);
});