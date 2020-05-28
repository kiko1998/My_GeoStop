src = "https://code.jquery.com/jquery-3.5.0.min.js"
integrity = "sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
crossorigin = "anonymous" >


    $(document).ready(function () {

//Funciona Jquery
        $(function () {

            console.log('jQuery is working');
        });
        //Añadir Camion
        $('#Perfil-form').submit(function (e) {
            const post_Perfil = {
                Nombre_apellido: $('#Nombre').val(),
                Username: $('#Username').val(),
                Email: $('#email').val(),
                Password: $('#Password').val(),
                Password_repeat: $('#Password_repeat').val()
            };
            if(post_Perfil.Password != post_Perfil.Password_repeat){
                alert("Las contraseñas no son identicas");
            }
            else {
                $.post('Crear_usuario.php', post_Perfil, function (response) {
                    $("#info").html(JSON.parse(response));
                    $('#Perfil-form').trigger('reset');
                });

            }

            console.log(post_Perfil);
            e.preventDefault();
        });
    });
/*
        $(document).on('click', '.button1', function () {
            if(confirm('¿Estás seguro de que quieres eliminar este camion?'))
            {
                let element = $(this)[0].parentElement.parentElement;
                let Id_camion = $(element).attr('Id_camion');
                console.log(element);
                $.post('Eliminar_camion.php', {Id_camion}, function (response) {
                    console.log(response);
                    Mostrar_eliminar();
                })
            }
        })
        $(document).on("blur", '.update' ,function(){
            var tipo = $('#Tipos_contenedor').val();

            var id =        $(this).data("id");
            var Columna = $(this).data("column");
            var Campo_actualizado = $(this).text();

            console.log(tipo);

            if(confirm('¿Estás seguro de que quieres actualizar este camion?')) {
                update_data(id, Columna, Campo_actualizado);
            }
            else{
                Mostrar_eliminar();
            }
        });




        function update_data(id, Columna, Campo_actualizado) {
            $.ajax({

                url: "Guardar_camion.php",
                method: "POST",
                data: {
                    Id_camion: id,
                    Campo_actualizado: Campo_actualizado,
                    Columna: Columna
                }
            });
            console.log(Columna);
            console.log(Campo_actualizado);
            Mostrar_eliminar();
        }
    });

 */