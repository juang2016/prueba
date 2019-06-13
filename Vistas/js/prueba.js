$(document).ready(function() {


$('#pago').bootstrapValidator({
    fields: {
        nombre: {
            validators: {
                notEmpty: {
                    message: 'Campo requerido'
                },
                // regexp: {
                //     regexp: /^\S+@\S{1,}\.\S{1,}$/,
                //     message: 'La entrada no es una dirección de correo electrónico válida'
                // }
            }
        },
        apellido: {
            validators: {
                notEmpty: {
                    message: 'Campo requerido'
                }
            }
        },
        email: {
            validators: {
                notEmpty: {
                    message: 'Campo requerido'
                }
            }
        },
        telefono: {
            validators: {
                notEmpty: {
                    message: 'Campo requerido'
                },
                integer: {
                        message: 'ingresa un telefono valido'
                }
            }
        },
        documento: {
            validators: {
                notEmpty: {
                    message: 'Campo requerido'
                },
                // regexp: {
                //     regexp: /^\S+@\S{1,}\.\S{1,}$/,
                //     message: 'La entrada no es una dirección de correo electrónico válida'
                // }
            }
        },
         descripcion: {
            validators: {
                notEmpty: {
                    message: 'Campo requerido'
                }
            }
        },
    }
});




})


$("#produc").change(function(){

 var idProducto= $("#produc").val();

  var datos = new FormData();
    datos.append("referencia", idProducto);

      $.ajax({
              url:"ajax/productos.ajax.php",
              method: "POST",
              data: datos,
              cache: false,
              contentType: false,
              processData: false,
              dataType:"json",
              success:function(respuesta){


              	console.log(respuesta);

              $("#descripcion").val(respuesta["Descripcion"]);
              $("#stotal").val(respuesta["Valor"]);
              $("#total").val(respuesta["Valor"]);
              $("#valoruni").val(respuesta["Valor"]);
              $("#precio").val(respuesta["Valor"]);
              $("#tot").val(respuesta["Valor"]);

              }

          })

})



function totalizar(){

	var cantidad =  $("#cantidad").val();
	var valoruni =  $("#valoruni").val();
	var iva =  $("#iva").val();
	var subt = cantidad * valoruni;

	var suma =subt + (valoruni*iva /100);
	$("#stotal").val(subt);
	 $("#total").val(suma);
   $("#tot").val(suma);

}


$( "#pago").submit(function( event ) {


	swal({

         title: " Informacion de interes",
         text: "Cualquier persona que realice un compra en el sitio <URL base del sitio>, actuando libre"+
				"y voluntariamente, autoriza a <DEL COMERCIO>, a través del proveedor del servicio"+
				"EGM Ingeniería Sin Fronteras S.A.S y/o Place to Pay para que consulte y solicite"+
				"información del comportamiento crediticio, financiero, comercial y de servicios a"+
				"terceros",
         icon: "info",
         buttons: {
                  cancel: "Cancelar",
                  catch: {
                    text: "Si,autorizo",
                    value: "catch",
                  },

                 
                }
               })
               .then((value) => {
                   switch (value) {
                      case "catch":
                         window.location = "index.php?ruta=venta";
                        break;
                   
                      default:
                        
              }

        });

 
})