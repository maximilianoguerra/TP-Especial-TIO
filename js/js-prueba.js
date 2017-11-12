/*FUNCION PARA NAVER GAR CON PARTIAL*/
$(document).ready(function() {
let templateComentario;
$.ajax({ url: 'js/templates/comentarios.mst'}).done( template => templateComentario = template);


function cargarApi(idProduct,superAdmin) {
  let url="api/comentarios/"+idProduct;
    let administrador=false;
    if (superAdmin==1) {
      administrador=true;
    }
  $.ajax(url).done(function(data) {
      let array=[{n:1},{n:2},{n:3},{n:4},{n:5}]
      let idProd=[{id:idProduct}];
      let superAd=administrador;
      let rendered = Mustache.render(templateComentario,{arreglo:data,array,idProd,superAd});
      $(".comentarios").html(rendered);
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
function getForm (datos) {

  let dir = $(datos).attr("href");
  let formData = new FormData(datos);
  let idProduct=$(datos).attr("value");


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
      }
      else if(dir === "guardarImagenProducto" ) {
          $(".reemplazo").html(data);
          cargarApi(idProduct);
      }
      //Cierro el IF
      else{
        $(".reemplazo").html(data);
      }
    }//Cierro el SUCCESS
  });
}
function crearComentario() {
  let coment={
      "comentario":$("#comentario").val(),
      "valoracion":$("#valoracion").val(),
      "id_producto":$("#id_producto").val()
    };
    let idProducto=$("#id_producto").val();


           $.ajax({
                   method: "POST",
                   url: "api/comentarios",
                   data: JSON.stringify(coment),
                 })
               .done(function(data) {
                 cargarApi(idProducto);
               })
               .fail(function(data) {
                   alert('Imposible crear la tarea');
               });
    }
    function borrarComentario() {
      let superAdmin=0;
      let idComentario=$(".borrarComentario").attr("href");
      let urldelete="api/comentarios/"+idComentario;
      let idProducto=$("#id_producto").val();
      let admin=$(".borrarComentario").attr("name");
      if (admin) {
        superAdmin=1;
      }

      $.ajax({
              method: "DELETE",
              url: urldelete,
            })
          .done(function(data) {
            cargarApi(idProducto,superAdmin);
          })
          .fail(function(data) {
              alert('Imposible crear la tarea');
          });

    }
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

$(document).on('submit','.formFiltrar', function(event){
  event.preventDefault();
  getForm(this);
});
$(document).on('submit','.formAgregarMarca', function(event){
  event.preventDefault();
  getForm(this);
});

/*FUNCIONES PARA REGISTRAR LO Q SE ENVIA POR formulario*/

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
    cargarApi(idProducto);
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
  let superAdmin = $(this).attr("name");
  let jsonProducto = {id_producto: idProducto};

  $.post("mostrarProducto", jsonProducto, function(data) {
    $('.reemplazo').html(data);
    cargarApi(idProducto,superAdmin);
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
$(document).on('submit','.formComentarios', function(event){
  event.preventDefault();
  crearComentario();
});

    $(document).on('click','.borrarComentario', function(event){
      event.preventDefault();
      borrarComentario();
    });



});
