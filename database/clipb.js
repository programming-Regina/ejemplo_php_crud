var a = document.getElementById("server");
var b = document.getElementById("user");
var c = document.getElementById("pass");
var d = document.getElementById("db");
var e = document.getElementById("btn-get-data");
var f = document.getElementById("go");

document.getElementById("btn-get-data").addEventListener("click", function() {
    a.setAttribute('value','localhost');    
    b.setAttribute('value','id15524276_user');
    c.setAttribute('value','kx@5yNm%ky{gS-e|');
    d.setAttribute('value','id15524276_php_crud_mysql_test');

    // ZONA DE APRENDIZAJE
    // El modo 'disabled' mata los datos del 'value'= el campo se postea como 'null'
    // a.setAttribute('disabled',true);
    // c.setAttribute('disabled',true);
    // b.setAttribute('disabled',true);
    // d.setAttribute('disabled',true);
    // FIN ZONA DE APRENDIZAJE

    e.setAttribute('disabled',true);
    f.setAttribute('class','btn btn-block text-white bg-info')
  });
  

  