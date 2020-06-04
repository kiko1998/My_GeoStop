src = "https://code.jquery.com/jquery-3.5.0.min.js"
integrity = "sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
crossorigin = "anonymous" >


    $(document).ready(function () {

//Funciona Jquery
        $(function () {

            console.log('jQuery is working');
        });
        Mostrar_ruta();
        //Añadir ruta
        $('#Ruta-form').submit(function (e) {
            const postRuta = {
                Nombre_ruta: $('#Ruta_nombre').val(),
                Tipo_id_cont: $('#Ruta_tipo_contenedor').val(),
            };
            $.post('Crear_nueva_ruta.php', postRuta, function (response) {
                $("#info").html(JSON.parse(response));
                $('#card-body').trigger('reset');
                Mostrar_ruta();
            });
            console.log(postRuta);
            e.preventDefault();
            $('#Ruta-form').trigger('reset');

        });

        function Mostrar_ruta() {
            $.ajax({
                url: 'Mostrar_ruta.php',
                type: 'GET',
                success: function (response) {
                    let Rutas = JSON.parse(response);
                    let template = '';

                    Rutas.forEach(Ruta => {

                        template += ` 
                <tr id="${Ruta.Id_ruta}">
                        <td data-id="${Ruta.Id_ruta}"  data-column="Ruta_nombre"               class="update">${Ruta.Nombre_ruta}</td>
                        <td data-id="${Ruta.Id_ruta}"  data-column="Tipo_contenendor"          class="update">${Ruta.Tipo_contenedor}</td>
                        <td><button type="editar" a href="#modal_ruta" id="${Ruta.Id_ruta}"    class="ruta button" name="editar" data-toggle="modal">Editar</button></td>
                        <td><button type='eliminar' id="${Ruta.Id_ruta}" class='delete_ruta btn button1' name='eliminar' > Eliminar</button></td>";
                        <td><a href='#'  id ='b_rutaContenedor'> Contenedores que contiene</a></td>
                </tr>`
                    });
                    $('#Rutas').html(template);


                }

            });

        }


        $(document).on('click', '.ruta', function () {

            var Id_ruta = $(this).attr("id");
            console.log(Id_ruta);
            $.ajax({
                url: "Mostrar_ruta.php",
                method: "POST",
                data: {Id_ruta: Id_ruta},
                dataType: "json",
                success: function (data) {
                    $('#Id_ruta').val(data.Id_ruta);
                    $('#Nombre_ruta').val(data.Nombre_ruta);
                    $('#Tipo_contenedor_ruta').val(data.Tipo_contenedor);
                    $('#file').val(data.file);
                    $('#insert').val("Update");
                }
            });
        })


        $('#insert_ruta').on("submit", function(event){
            event.preventDefault();
            if($('#Nombre_ruta').val() == "")
            {
                alert("Nombre ruta is required");
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
                var datos = $('#insert_ruta').serialize();
                console.log(datos);

                $.ajax({
                    url:"Guardar_ruta.php",
                    method:"POST",
                    data:$('#insert_ruta').serialize(),
                    beforeSend:function(){
                        $('#insert').val("Inserting");
                    },
                    success:function(response){
                        $("#info3").html(JSON.parse(response));
                        $('#insert_ruta')[0].reset();
                    }
                });
                Mostrar_ruta();
            }
        });


        $(document).on('click', '.delete_ruta', function () {
            if (confirm('¿Estás seguro de que quieres eliminar esta ruta?')) {
                let Id_ruta = $(this).attr("id");

                console.log(Id_ruta);

                $.post('Eliminar_ruta.php', {Id_ruta: Id_ruta}, function (response) {
                    $("#info").html(JSON.parse(response));

                })
                Mostrar_ruta();
            }
        })
    });