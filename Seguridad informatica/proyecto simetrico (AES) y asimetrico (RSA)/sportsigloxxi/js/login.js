$(document).ready(function(){
    $('#login').submit(function(e){
      var datos = $('#login').serialize();
      $.ajax({
        type: 'POST',
        url: 'procesoLogin.php',
        data: datos,
        success: function(response){
          console.log(response)
          if (response==1){
            $(location).attr('href', '220801.html');
            console.log("INGRESO!!")
          }else if(response==2){
            $('#password').val('');
            /*swal.fire({
                icon: 'error',
                      title: 'Contraseña Incorrecta',
                      //text: 'Error',
                      timer: 2000,
                      toast: true,
                      position: 'bottom-end'
                })*/
                console.log("CONTRASEÑA INCORRECTA")
          }else if(response==4){
            $(location).attr('href', 'inicioVendedor.php');
          }else{
            /*$('#login').trigger('reset');
            swal.fire({
                icon: 'error',
                      title: 'El Usuario No Existe',
                      //text: 'Error',
                      timer: 2000,
                      toast: true,
                      position: 'bottom-end'
                })*/
            console.log("EL USUARIO NO EXISTE")

          }
        }

      });//cierra ajax

      e.preventDefault();
    });//cierra la funcion e
});//cierra el documento