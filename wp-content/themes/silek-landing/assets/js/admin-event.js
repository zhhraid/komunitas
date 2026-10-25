(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var publishButton = document.getElementById('publish');
    var errorMessage = document.querySelector('[data-silek-event-error]');
    var fields = ['silek_event_date', 'silek_event_time', 'silek_event_location'].map(function (id) {
      return document.getElementById(id);
    }).filter(Boolean);

    if (!publishButton || !fields.length) {
      return;
    }

    publishButton.addEventListener('click', function (event) {
      var missing = fields.filter(function (field) {
        return field.value.trim() === '';
      });

      fields.forEach(function (field) {
        field.classList.toggle('silek-field-missing', missing.indexOf(field) !== -1);
      });

      if (!missing.length) {
        if (errorMessage) {
          errorMessage.hidden = true;
        }
        return;
      }

      event.preventDefault();
      event.stopImmediatePropagation();
      if (errorMessage) {
        errorMessage.hidden = false;
      }
      missing[0].focus();
    }, true);

    fields.forEach(function (field) {
      field.addEventListener('input', function () {
        if (field.value.trim() !== '') {
          field.classList.remove('silek-field-missing');
        }
      });
    });
  });
}());
