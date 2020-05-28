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
        $('#Empresa-form').submit(function (e) {
            const postEmpresa = {
                Localidad: $('#Localidad').val(),
                Tipo_procesamiento: $('#Tipo_procesamiento').val(),
                Nombre: $('#Nombre').val(),
                Telefono: $('#Telefono').val(),
                Latitud: $('#Latitud').val(),
                Longitud: $('#Longitud').val()

            };
            $.post('Crear_nueva_empresa.php', postEmpresa, function (response) {
                $("#info").html(JSON.parse(response));
                $('#card-body').trigger('reset');

            });
            console.log(postEmpresa);
            e.preventDefault();
        });



        function Mostrar_eliminar() {
            $.ajax({
                url: 'Mostrar_empresa.php',
                type: 'GET',
                success: function (response) {
                    let Empresas = JSON.parse(response);
                    let template = '';
                    
                    Empresas.forEach(Empresa => {

                        template += ` 
                <tr>
                        <td data-id="${Empresa.id_empresa}"  data-column="Localidad"           class="update">${Empresa.Localidad}</td>
                        <td data-id="${Empresa.id_empresa}"  data-column="Tipo_procesamiento"  class="update">${Empresa.Tipo_procesamiento}</td>
                        <td data-id="${Empresa.id_empresa}"  data-column="Nombre"              class="update">${Empresa.Nombre}</td>
                        <td data-id="${Empresa.id_empresa}"  data-column="Telefono"            class="update">${Empresa.Telefono}</td>
                        <td data-id="${Empresa.id_empresa}"  data-column="Latitud"             class="update">${Empresa.Latitud}</td>
                        <td data-id="${Empresa.id_empresa}"  data-column="Longitud"            class="update">${Empresa.Longitud}</td>
                        <td><button type="editar" a href="#modal2" id="${Empresa.id_empresa}"    class="empresa button" name="editar" data-toggle="modal">Editar</button></td>
                        <td><button type='eliminar' id="${Empresa.id_empresa}" class='empresa btn btn-danger' name='eliminar' > Eliminar</button></td>";
               
                </tr>`
                    });
                    $('#Empresas').html(template);


                }

            });

        }


        $(document).on('click', '.empresa', function () {

            var id_empresa = $(this).attr("id");
            console.log(id_empresa);
            $.ajax({
                url: "Mostrar_empresa.php",
                method: "POST",
                data: {id_empresa: id_empresa},
                dataType: "json",
                success: function (data) {
                    $('#id').val(data.id_empresa);
                    $('#Localidad').val(data.Localidad);
                    $('#Tipo_procesamiento').val(data.Tipo_procesamiento);
                    $('#Nombre').val(data.Nombre);
                    $('#Telefono').val(data.Telefono);
                    $('#Latitud').val(data.Latitud);
                    $('#Longitud').val(data.Longitud);
                    $('#id_empresa').val(data.id);
                    $('#insert').val("Update");
                }
            });

        $('#insert_form').on("submit", function(event){
            event.preventDefault();
            if($('#Nombre').val() == "")
            {
                alert("Name is required");
            }
            else if($('#Telefono').val() == '')
            {
                alert("Address is required");
            }
            else if($('#Longitud').val() == '')
            {
                alert("LONGITUD EMPRESA is required");
            }
            else if($('#Matricula').val() == '')
            {
                alert("Age is required");
            }
            else
            {
                $.ajax({
                    url:"Guardar_empresa.php",
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


        $(document).on('click', '.empresa', function () {
            if (confirm('¿Estás seguro de que quieres eliminar esta empresa?')) {
                let id_empresa = $(this).attr("id");

                console.log(id_empresa);

                $.post('Eliminar_empresa.php', {id_empresa: id_empresa}, function (response) {
                    $("#info").html(JSON.parse(response));

                })
                Mostrar_eliminar();
            }
        })
    });
