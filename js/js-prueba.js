/*FUNCION PARA NAVER GAR CON PARTIAL*/
$(document).ready(function() {
let templateComentario;
$.ajax({ url: 'js/templates/comentarios.mst'}).done( template => templateComentario = template);
$(document).on('click', '.link-ajax', function (event) {
  event.preventDefault();
  let url=$(this).attr("href");
  cargar(url);
});
$(document).on('click', '.refresh', function (event) {
  event.preventDefault();
  let url=$(this).attr("href");
  cargar(url);
});
$(document).on('click', '.link-api', function (event) {
  event.preventDefault();
  let url=$(this).attr("href");
  cargarApi(url);
});
function cargarApi(url) {
  $.ajax(url).done(function(data) {
      var array=[{n:1},{n:2},{n:3},{n:4},{n:5}]
      let rendered = Mustache.render(templateComentario,{arreglo:data,array});
      alert(array);
      $(".comentarios").append(rendered);
    });
}

function cargar(url) {

  $.ajax({
    url: url,
    method:"GET",
    dataType:"html",
    beforeSend:function(){
      $(".reemplazo").html("<h1><i class='fa fa-superpowers fa-spin'></i> Loading...</h1>");
    },
    success: function(data){
      if(url === "logout" ) {
        // Reload la web completa
        window.location.reload();
      }
      else {
        $(".reemplazo").html(data);
      }
    },
    error: function(){
      $(".reemplazo").html("<h1>Error - Request Failed!</h1>");
    }
  });

  return false;
}


$(document).on('submit','.formFiltrar', function(event){
  event.preventDefault();
  getForm(this);
});
$(document).on('submit','.formAgregarMarca', function(event){
  event.preventDefault();
  getForm(this);
});

/*FUNCIONES PARA REGISTRAR LO Q SE ENVIA POR formulario*/
function getForm (datos) {

  let dir = $(datos).attr("href");
  let formData = new FormData(datos);

  $.ajax({
    method: "POST",
    url: dir,
    data: formData,
    contentType: false,
    cache: false,
    processData: false,
    success: function(data) {
      // Si el usuario está logueado refresco la web
      if(dir === "verificarUsuario" ) {
         // Si ingreso la contraseña
         if(data === "User pass error"){
          $("div .form-group").addClass('has-error');
          $("input").val("");
          $('#loginError').css('visibility', 'visible');
        }
        else{
          //Sino Reload la web completa
          window.location.reload();
        }
      }
      else if(dir === "register" ) {
          window.location.reload();
      }//Cierro el IF
      else{
        $(".reemplazo").html(data);
      }
    }//Cierro el SUCCESS
  });
}
/*FUNCIONES PARA ASIGNARLES EVENTOS A LOS BOTONES*/
$(document).on('click','.borrarProducto', function(event){
  event.preventDefault();

  let idProducto = $(this).attr("href");
  let jsonProducto = {id_producto: idProducto};


  $.post("borrarProducto", jsonProducto, function(data) {
    $('.reemplazo').html(data);
  });

});

/*FUNCIONES PARA ASIGNARLES EVENTOS A LOS BOTONES*/
$(document).on('click','.borrarImagenProducto', function(event){
  event.preventDefault();

  let idProducto = $(this).attr("href");//156
  let imgpath = $(this).attr("data-imgpath"); //ej: 5a076bde41df7_9

 // let jsonProducto = {id_producto: idProducto};
                                         
  $.post("borrarImagenProducto", {imgpath, idProducto}, function(data) {
    $('.reemplazo').html(data);
  });
});

/*FUNCIONES PARA ASIGNARLES EVENTOS A LOS BOTONES*/
$(document).on('click','.editarProducto', function(event){
  event.preventDefault();

  let idProducto = $(this).attr("href");
  let jsonProducto = {id_producto: idProducto};

  $.post("editarProducto", jsonProducto, function(data) {
    $('.reemplazo').html(data);
  });
});

/*FUNCIONES PARA ASIGNARLES EVENTOS A LOS BOTONES*/
$(document).on('click','.mostrarProducto', function(event){
  event.preventDefault();

  let idProducto = $(this).attr("href");
  let jsonProducto = {id_producto: idProducto};
  let url="api/comentarios/"+idProducto;
  $.post("mostrarProducto", jsonProducto, function(data) {
    $('.reemplazo').html(data);
    cargarApi(url);
  });

});

/*FUNCIONES PARA ASIGNARLES EVENTOS A LOS BOTONES*/
$(document).on('click','.borrarMarca', function(event){
  event.preventDefault();

  let idMarca = $(this).attr("href");
  let jsonProducto = {id_marca: idMarca};

  $.post("borrarMarca", jsonProducto, function(data) {
    $('.reemplazo').html(data);
  });

});
/*FUNCIONES PARA ASIGNARLES EVENTOS A LOS BOTONES*/
$(document).on('click','.comienzoEditarMarca', function(event){
  event.preventDefault();

  let idMarca = $(this).attr("href");
  let jsonProducto = {id_marca: idMarca};

  $.post("comienzoEditarMarca", jsonProducto, function(data) {
    $('.reemplazo').html(data);
  });

});
});
