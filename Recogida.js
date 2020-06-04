src = "https://code.jquery.com/jquery-3.5.0.min.js"
integrity = "sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
crossorigin = "anonymous" >


    $(document).ready(function () {


        Mostrar_recogida();
        //Añadir recogida
        $('#Recogida-form').submit(function (e) {
            const postRecogida = {
                id_servicio:      $('#Select_servicio').val(),
                Id_contenedor:    $('#Id_contenedor').val(),
                Fecha_recogida:   $('#Recogida_fecha').val(),
                Horario_recogida: $('#Recogida_horario').val()
            };
            $.post('Crear_nueva_recogida.php', postRecogida, function (response) {
                $("#info").html(JSON.parse(response));
                $('#card-body').trigger('reset');
                Mostrar_recogida();
            });
            console.log(postRecogida);
            e.preventDefault();
            $('#Recogida-form').trigger('reset');

        });

        function Mostrar_recogida() {
            $.ajax({
                url: 'Mostrar_recogida.php',
                type: 'GET',
                success: function (response) {
                    let Recogidas = JSON.parse(response);
                    let template = '';

                    Recogidas.forEach(Recogida => {

                        template += ` 
                        <tr id="${Recogida.Id_recogida}">
                        <td data-id="${Recogida.Id_recogida}"  data-column="Nombre_servicio"           class="update">${Recogida.Nombre_servicio}</td>
                        <td data-id="${Recogida.Id_recogida}"  data-column="Recogida_nombre"           class="update">${Recogida.Nombre}</td>
                        <td data-id="${Recogida.Id_recogida}"  data-column="Fecha_recogida"            class="update">${Recogida.Fecha_recogida}</td>
                        <td data-id="${Recogida.Id_recogida}"  data-column="Horario_recogida"          class="update">${Recogida.Horario_recogida}</td>
                        <td><button type="editar" a href="#modal_recogida" id="${Recogida.Id_recogida}"    class="recogida button" name="editar" data-toggle="modal">Editar</button></td>
                        <td><button type='eliminar' id="${Recogida.Id_ruta}" class='delete_recogida btn button1' name='eliminar' > Eliminar</button></td>";
                        </tr>`
                    });
                    $('#Recogidas').html(template);


                }

            });

        }


        $(document).on('click', '.recogida', function () {

            var Id_recogida = $(this).attr("id");
            console.log(Id_recogida);
            $.ajax({
                url: "Mostrar_recogida.php",
                method: "POST",
                data: {Id_recogida: Id_recogida},
                dataType: "json",
                success: function (data) {
                    $('#Id_recogida').val(data.Id_recogida);
                    $('#Nombre_recogida').val(data.Nombre);
                    $('#Tipo_contenedor_recogida').val(data.Fecha_recogida);
                    $('#file').val(data.file);
                    $('#insert').val("Update");
                }
            });
        })


        $('#insert_recogida').on("submit", function(event){
            event.preventDefault();
            if($('#Nombre_recogida').val() == "")
            {
                alert("Nombre recogida is required");
            }
            else if($('#Tipo_contenedor_ruta').val() == '')
            {
                alert("Tipo contenedor is required");
            }
            else if($('#Id_ruta').val() == '')
            {
                alert("ID RUTA is required");
            }

            else
            {
                var datos = $('#insert_recogida').serialize();
                console.log(datos);

                $.ajax({
                    url:"Guardar_recogida.php",
                    method:"POST",
                    data:$('#insert_recogida').serialize(),
                    beforeSend:function(){
                        $('#insert').val("Inserting");
                    },
                    success:function(response){
                        $("#info4").html(JSON.parse(response));
                        $('#insert_recogida')[0].reset();
                    }
                });
                Mostrar_recogida();
            }
        });


        $(document).on('click', '.delete_recogida', function () {
            if (confirm('¿Estás seguro de que quieres eliminar esta recogida?')) {
                let Id_recogida = $(this).attr("id");

                console.log(Id_recogida);

                $.post('Eliminar_recogida.php', {Id_recogida: Id_recogida}, function (response) {
                    $("#info").html(JSON.parse(response));

                })
                Mostrar_recogida();
            }
        })
    });