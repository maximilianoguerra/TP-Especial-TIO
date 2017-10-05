$(".link-ajax").on("click", function(event)
{
  let url=$(this).attr("href");
  $.ajax({
    url:"http://localhost/dashboard/TpEspecialWebV3.0maxi/" + url,
    method:"GET",
    dataType:"html",
    beforeSend:function(){
      $(".reemplazo").html("<h1><i class='fa fa-superpowers fa-spin'></i> Loading...</h1>");
    },
    success: function(data){
      $(".reemplazo").html(data);
     /* guardarInformacion();
      getInformationByGroup();
      borrar();*/
    },
    error: function(){
      $(".reemplazo").html("<h1>Error - Request Failed!</h1>");
    }
  });
  //alert("Hola Mundo!");
  event.preventDefault();
  return false;
});
