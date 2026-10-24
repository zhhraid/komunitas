(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var track = document.querySelector('[data-gallery-track]');
    var previous = document.querySelector('[data-gallery-prev]');
    var next = document.querySelector('[data-gallery-next]');
    var lightbox = document.querySelector('[data-gallery-lightbox]');

    function scrollGallery(direction) {
      if (!track) {
        return;
      }
      var amount = Math.max(track.clientWidth * 0.82, 280);
      track.scrollBy({ left: direction * amount, behavior: 'smooth' });
    }

    if (previous) {
      previous.addEventListener('click', function () {
        scrollGallery(-1);
      });
    }

    if (next) {
      next.addEventListener('click', function () {
        scrollGallery(1);
      });
    }

    document.querySelectorAll('.gallery-track .gallery-open img').forEach(function (image) {
      function markOrientation() {
        if (image.naturalHeight > image.naturalWidth) {
          image.classList.add('is-portrait');
        }
      }

      if (image.complete) {
        markOrientation();
      } else {
        image.addEventListener('load', markOrientation);
      }
    });

    if (lightbox) {
      var lightboxImage = lightbox.querySelector('img');
      var lightboxCaption = lightbox.querySelector('figcaption');
      var closeButton = lightbox.querySelector('[data-gallery-close]');

      document.querySelectorAll('[data-gallery-full]').forEach(function (button) {
        button.addEventListener('click', function () {
          lightboxImage.src = button.dataset.galleryFull;
          lightboxImage.alt = button.querySelector('img').alt;
          lightboxCaption.textContent = button.dataset.galleryCaption || '';
          if (typeof lightbox.showModal === 'function') {
            lightbox.showModal();
          } else {
            lightbox.setAttribute('open', '');
          }
        });
      });

      function closeLightbox() {
        if (typeof lightbox.close === 'function') {
          lightbox.close();
        } else {
          lightbox.removeAttribute('open');
        }
      }

      closeButton.addEventListener('click', closeLightbox);
      lightbox.addEventListener('click', function (event) {
        if (event.target === lightbox) {
          closeLightbox();
        }
      });
    }

    document.querySelectorAll('.mobile-menu-panel a').forEach(function (link) {
      link.addEventListener('click', function () {
        var menu = link.closest('details');
        if (menu) {
          menu.open = false;
        }
      });
    });
  });
}());