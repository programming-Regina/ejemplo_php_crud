(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Busca los formularios a validar
    var forms = document.getElementsByClassName('needs-validation');
    // Patrullaje!!!
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
         
        }
        form.classList.add('was-validated');
      
      }, false);
    });
  }, false);
})();

/* 
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
 */