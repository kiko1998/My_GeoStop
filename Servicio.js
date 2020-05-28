src = "https://code.jquery.com/jquery-3.5.0.min.js"
integrity = "sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
crossorigin = "anonymous" >


    $(document).ready(function () {

//Funciona Jquery
        $(function () {

            console.log('jQuery is working');
        });
        Mostrar_eliminar();
        //Añadir empresa
        $('#Servicio-form').submit(function (e) {
            const postServicio = {
                id_servicio: $('#id_servicio').val(),
                Nombre_servicio: $('#Nombre_servicio').val(),
                Nombre_apellido: $('#Nombre_apellido'),
                Matricula_camion: $('#Matricula_camion'),
                Ruta: $('#Ruta').val(),
                Fecha_inicio: $('#Fecha_inicio').val(),
                Fecha_fin: $('#Fecha_fin').val()
            };
            $.post('Crear_nuevo_servicio.php', postServicio, function (response) {
                $("#info").html(JSON.parse(response));
                $('#card-body').trigger('reset');

            });
            console.log(postServicio);
            e.preventDefault();
        });



        function Mostrar_eliminar() {
            $.ajax({
                url: 'Mostrar_servicio.php',
                type: 'GET',
                success: function (response) {
                    let Servicios = JSON.parse(response);
                    let template = '';

                    Servicios.forEach(Servicio => {

                        template += ` 
                <tr>
                        <td data-id="${Servicio.id_servicio}"  data-column="Nombre_servicio"      class="update">${Servicio.Nombre_servicio}</td>
                        <td data-id="${Servicio.id_servicio}"  data-column="Nombre_apellido"      class="update">${Servicio.Nombre_apellido}</td>
                        <td data-id="${Servicio.id_servicio}"  data-column="Matricula_camion"     class="update">${Servicio.Matricula_camion}</td>
                        <td data-id="${Servicio.id_servicio}"  data-column="Ruta"                 class="update">${Servicio.Ruta}</td>
                        <td data-id="${Servicio.id_servicio}"  data-column="Fecha_inicio"         class="update">${Servicio.Fecha_inicio}</td>
                        <td data-id="${Servicio.id_servicio}"  data-column="Fecha_fin"            class="update">${Servicio.Fecha_fin}</td>
                        <td><button type="editar" a href="#modal2 id="${Servicio.id_servicio}"    class="button_servicio" name="editar" data-toggle="modal">Editar</button></td>
                        <td><button type='eliminar' id="${Servicio.id_servicio}" class='ruta btn btn-danger' name='eliminar' > Eliminar</button></td>";
                        <td><button type='submit' class='button2' name='eliminar'><a href='Ruta_contenedor.php'  id ='Eliminar'> Contenedores que contiene</a></button>
                                              </td>
                </tr>`
                    });
                    $('#Servicios').html(template);


                }

            });

        }


        $(document).on('click', '.button_servicio', function () {

            var id_servicio = $(this).attr("id");
            console.log(id_servicio);
            $.ajax({
                url: "Mostrar_servicio.php",
                method: "POST",
                data: {id_servicio: id_servicio},
                dataType: "json",
                success: function (data) {
                    $('#id').val(data.id_servicio);
                    $('#Nombre_servicio').val(data.Nombre_servicio);
                    $('#Matricula_camion').val(data.Matricula_camion);
                    $('#Ruta').val(data.Ruta);
                    $('#Fecha_inicio').val(data.Fecha_inicio);
                    $('#Fecha_fin').val(data.Fecha_fin);
                    $('#id_servicio').val(data.id);
                    $('#insert').val("Update");
                }
            });

            $('#insert_form').on("submit", function(event){
            event.preventDefault();
            if($('#Nombre_servicio').val() == "")
            {
                alert("Inserta el nombre");
            }
            else if($('#Matricula_camion').val() == '')
            {
                alert("Inserta la matrícula");
            }
            else if($('#Ruta').val() == '')
            {
                alert("Inserte la ruta");
            }
            else if($('#Fecha_inicio')){
                alert('Inserte la fecha de inicio')
            }

            else
            {
                $.ajax({
                    url:"Guardar_servicio.php",
                    method:"POST",
                    data:$('#insert_form').serialize(),
                    beforeSend:function(){
                        $('#insert').val("Inserting");
                    },
                    success:function(data){
                        $('#insert_form')[0].reset();
                        alert('Actualizado');
                    }
                });
            }
        });
        })

        $(document).on('click', '.servicio', function () {
            if (confirm('¿Estás seguro de que quieres eliminar esta ruta?')) {
                let id_servicio = $(this).attr("id");

                console.log(id_servicio);

                $.post('Eliminar_servicio.php', {id_servicio: id_servicio}, function (response) {
                    $("#info").html(JSON.parse(response));

                })
                Mostrar_eliminar();
            }
        })
    });