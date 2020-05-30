src = "https://code.jquery.com/jquery-3.5.0.min.js"
integrity = "sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
crossorigin = "anonymous" >


    $(document).ready(function () {

//Funciona Jquery

        Mostrar_empresa();
        //Añadir empresa
        $('#Empresa-form').submit(function (e) {
            const postEmpresa = {
                Localidad: $('#Empresa_localidad').val(),
                Tipo_contenedor: $('#Empresa_tipo_contenedor').val(),
                Nombre: $('#Empresa_nombre').val(),
                Telefono: $('#Empresa_telefono').val(),
                Latitud: $('#Empresa_latitud').val(),
                Longitud: $('#Empresa_longitud').val()

            };
            console.log(postEmpresa);

            $.post('Crear_nueva_empresa.php', postEmpresa, function (response) {
                $("#info").html(JSON.parse(response));
                $('#card-body').trigger('reset');
                Mostrar_empresa();

            });
            console.log(postEmpresa);
            e.preventDefault();
            $('#Empresa-form').trigger('reset');

        });



        function Mostrar_empresa() {
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
                        <td data-id="${Empresa.id_empresa}"  data-column="Tipo_contenedor"     class="update">${Empresa.Tipo_contenedor}</td>
                        <td data-id="${Empresa.id_empresa}"  data-column="Nombre"              class="update">${Empresa.Nombre}</td>
                        <td data-id="${Empresa.id_empresa}"  data-column="Telefono"            class="update">${Empresa.Telefono}</td>
                        <td data-id="${Empresa.id_empresa}"  data-column="Latitud"             class="update">${Empresa.Latitud}</td>
                        <td data-id="${Empresa.id_empresa}"  data-column="Longitud"            class="update">${Empresa.Longitud}</td>
                        <td><button type="editar" a href="#modal_empresa" id="${Empresa.id_empresa}"  class="empresa button" name="editar" data-toggle="modal">Editar</button></td>
                        <td><button type='eliminar' id="${Empresa.id_empresa}" class='delete_empresa btn button1'  name='eliminar' > Eliminar</button></td>";
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
                    $('#id_empresa').val(data.id_empresa);
                    $('#Localidad_empresa').val(data.Localidad);
                    $('#Tipo_cotenedor_empresa').val(data.Tipo_contenedor);
                    $('#Nombre_empresa').val(data.Nombre);
                    $('#Telefono_empresa').val(data.Telefono);
                    $('#Latitud_empresa').val(data.Latitud);
                    $('#Longitud_empresa').val(data.Longitud);
                   // $('#id_empresa').val(data.id);
                    $('#insert').val("Update");
                }
            });
        })

        $('#insert_empresa').on("submit", function(event){
            event.preventDefault();
            var tipo_empresa = $('#Tipo_contenedor_empresa').val()
            console.log(tipo_empresa);

            var localidad = $('#Localidad_empresa').val()
            console.log(localidad);


            if($('#Tipo_contenedor_empresa').val() == "")
            {
                alert("Inserte el contenedor");
            }
            else if($('#Localidad_empresa').val() == '')
            {
                alert("Inserte la localidad");
            }
            else if($('#Nombre_empresa').val() == '')
            {
                alert("Inserte el nombre");
            }
            else if($('#Telefono_empresa').val() == '')
            {
                alert("Inserte el teléfono");
            }
            else if($('#Latitud_empresa').val() == ''){
                alert("Inserte la latitud ");
            }
            else if($('#Longitud_empresa').val() == ''){
                alert("Inserte la longitud");
            }

            else
            {
                $.ajax({
                    url:"Guardar_empresa.php",
                    method:"POST",
                    data:$('#insert_empresa').serialize(),
                    beforeSend:function(){
                        $('#insert').val("Inserting");
                    },
                    success:function(response){
                        $("#info2").html(JSON.parse(response));
                        $('#insert_empresa')[0].reset();
                    }
                });
                Mostrar_empresa();
            }
        });



        $(document).on('click', '.delete_empresa', function () {
            if (confirm('¿Estás seguro de que quieres eliminar esta empresa?')) {
                let id_empresa = $(this).attr("id");

                console.log(id_empresa);

                $.post('Eliminar_empresa.php', {id_empresa: id_empresa}, function (response) {
                    $("#info").html(JSON.parse(response));

                })
                Mostrar_empresa();
            }
        })
    });
