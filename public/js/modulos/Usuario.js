const RUTA_URL ='http://localhost/mvc/Usuario/';
let guardar = function () {
    $("form").on("submit", function (e) {      
      e.preventDefault();
      let datos = new FormData($("form")[0]);
        $.ajax({
        url: RUTA_URL + 'crearUsuario',
        method: "POST",
        data: datos,
        processData: false,
        contentType: false,
      })
        .done(function (data) {
          alert(data);         
        })
        
    });
  };

  


  $(document).ready(function () {   
    guardar();
   
  });