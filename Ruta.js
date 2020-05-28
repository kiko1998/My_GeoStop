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
        $('#Ruta-form').submit(function (e) {
            const postRuta = {
                Nombre_ruta: $('#Nombre_ruta').val(),
                Tipos_contenedor: $('#Tipo_contenedor').val(),
                Color: $('#Color').val()
            };
            $.post('Crear_nueva_ruta.php', postRuta, function (response) {
                $("#info").html(JSON.parse(response));
                $('#card-body').trigger('reset');

            });
            console.log(postRuta);
            e.preventDefault();
        });



        function Mostrar_eliminar() {
            $.ajax({
                url: 'Mostrar_ruta.php',
                type: 'GET',
                success: function (response) {
                    let Rutas = JSON.parse(response);
                    let template = '';

                    Rutas.forEach(Ruta => {

                        template += ` 
                <tr>
                        <td data-id="${Ruta.Id_ruta}"  data-column="Nombre_ruta"           class="update">${Ruta.Nombre_ruta}</td>
                        <td data-id="${Ruta.Id_ruta}"  data-column="Tipo_contenendor"      class="update">${Ruta.Tipo_contenedor}</td>
                        <td><button type="editar" a href="#modal2" id="${Ruta.Id_ruta}"    class="ruta button" name="editar" data-toggle="modal">Editar</button></td>
                        <td><button type='eliminar' id="${Ruta.Id_ruta}" class='ruta btn btn-danger' name='eliminar' > Eliminar</button></td>";
                        <td><button type='submit' class='button2' name='eliminar'><a href='Ruta_contenedor.php'  id ='Eliminar'> Contenedores que contiene</a></button>
                                              </td>
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
                    $('#id').val(data.Id_ruta);
                    $('#Nombre_ruta').val(data.Nombre_ruta);
                    $('#Tipo_contenedor').val(data.Tipos_contenedor);
                    $('#Id_ruta').val(data.id);
                    $('#insert').val("Update");
                }
            });

        $('#insert_form').on("submit", function(event){
            event.preventDefault();
            if($('#Nombre_ruta').val() == "")
            {
                alert("Name is required");
            }
            else if($('#Tipo_contenedor').val() == '')
            {
                alert("Address is required");
            }
            else if($('#Id_ruta').val() == '')
            {
                alert("ID RUTA is required");
            }

            else
            {
                $.ajax({
                    url:"Guardar_ruta.php",
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


        $(document).on('click', '.ruta', function () {
            if (confirm('¿Estás seguro de que quieres eliminar esta ruta?')) {
                let Id_ruta = $(this).attr("id");

                console.log(Id_ruta);

                $.post('Eliminar_ruta.php', {Id_ruta: Id_ruta}, function (response) {
                    $("#info").html(JSON.parse(response));

                })
                Mostrar_eliminar();
            }
        })
    });