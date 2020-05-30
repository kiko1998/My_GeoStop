src = "https://code.jquery.com/jquery-3.5.0.min.js"
integrity = "sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
crossorigin = "anonymous" >


    $(document).ready(function () {
        actual='#principal' ;
        $('#empresa').hide();
        $('#camion').hide();
        $('#ruta').hide();
        $('#servicio').hide();
        $('#contenedores').hide();
        $('#crear_camion').hide();
        $('#crear_empresa').hide();
        $('#crear_ruta').hide();

//Funciona Jquery

       // $("#camiones").find(tr)
        $('#a_index').click(function () {
                $(actual).hide();
                actual='#index';
                $(actual).show();
            }
        );
        $('#a_camion').click(function () {
                $(actual).hide();
                actual='#camion';
                $(actual).show();
                /*var camion = $("#camion").find("tr#" + numero);
                console.log(camion);
                console.log(prueba)(numero);
                var Camiones_ = new Array($('#Camiones').find("tr").length);
                $('#Camiones').find("tr").each(function(i) {
                Camiones_[i] = new Array();
                $(this).find("td").each(function(j){
                Camiones_[i][j]=$(this).html();
            });
        });
        console.log(Camiones_);*/
            }
        );
        $('#a_ruta').click(function () {
                $(actual).hide();
                actual='#ruta';
                $(actual).show();
            }
        );
        $('#a_servicio').click(function () {
                $(actual).hide();
                actual='#servicio';
                $(actual).show();
            }
        );

        $('#a_contenedores').click(function () {
                $(actual).hide();
                actual='#camion';
                $(actual).show();
            }
        );

        $('#a_recogida').click(function () {
                $(actual).hide();
                actual='#a_recogida';
                $(actual).show();
            }
        );

        $('#a_empresa').click(function () {
                $(actual).hide();
                actual='#empresa';
                $(actual).show();
            }
        );
        $('#Añadir_c').click(function () {
                $(actual).hide();
                actual='#crear_camion';
                $(actual).show();
            }
        );
        $('#Añadir_e').click(function () {
                $(actual).hide();
                actual='#crear_empresa';
                $(actual).show();
            }
        );
        $('#Añadir_r').click(function () {
                $(actual).hide();
                actual='#crear_ruta';
                $(actual).show();
            }
        );


        Mostrar_eliminar();
        //Añadir Camion
        $('#Camion-form').submit(function (e) {
            const postCamion = {
                Marca: $('#Marca').val(),
                Matricula_camion: $('#Matricula_camion').val(),
                Modelo: $('#Modelo').val(),
                Tipo_contenedor: $('#Tipo_contenedor').val(),
                Latitud: $('#Latitud').val(),
                Longitud: $('#Longitud').val()

            };
            $.post('Crear_nuevo_camion.php', postCamion, function (response) {
                $("#info").html(JSON.parse(response));
                $('#card-body').trigger('reset');
                Mostrar_eliminar();
            });
            e.preventDefault();
            $('#Camion-form').trigger('reset');
        });
        function Mostrar_eliminar() {
            $.ajax({
                url: 'Mostrar_camion.php',
                type: 'GET',
                success: function (response) {
                     var Camiones = JSON.parse(response);
                     Muestra(Camiones);

                }

            })
        }

        function Muestra(C) {
            var template = '';
            C.forEach(Camion => {

                template += ` 
                <tr id="${Camion.Id_camion}">
                        <td data-id="${Camion.Id_camion}"  data-column="Tipo_contenedor"   class="update">${Camion.Tipo_contenedor}</td>
                        <td data-id="${Camion.Id_camion}"  data-column="Matricula_camion"  class="update">${Camion.Matricula_camion}</td>
                        <td data-id="${Camion.Id_camion}"  data-column="Marca"             class="update">${Camion.Marca}</td>
                        <td data-id="${Camion.Id_camion}"  data-column="Modelo"            class="update">${Camion.Modelo}</td>
                        <td data-id="${Camion.Id_camion}"  data-column="Latitud"           class="update">${Camion.Latitud}</td>
                        <td data-id="${Camion.Id_camion}"  data-column="Longitud"          class="update">${Camion.Longitud}</td>
                        <td><button type="editar" a href="#modal1" id="${Camion.Id_camion}" class="camion button" name="editar" data-toggle="modal">Editar</button></td>
                        <td><button type='eliminar' id="${Camion.Id_camion}" class='delete_camion btn button1' name='eliminar' > Eliminar</button></td>";
               
                </tr>`
            });
            $('#Camiones').html(template);
        }

        $(document).on('click', '.camion', function () {

            var id_camion = $(this).attr("id");
            $.ajax({
                url: "Mostrar_camion.php",
                method: "POST",
                data: {id_camion: id_camion},
                dataType: "json",
                success: function (data) {
                    $('#id').val(data.Id_camion);
                    $('#Tipo_contenedor_id').val(data.Tipo_contenedor);
                    $('#Marca_camion').val(data.Marca);
                    $('#Modelo_camion').val(data.Modelo);
                    $('#Longitud_camion').val(data.Longitud);
                    $('#Matricula').val(data.Matricula_camion);
                    // $('#id_camion').val(data.id);
                    $('#Latitud_camion').val(data.Latitud);
                    $('#insert').val("Update");
                }
            });
        })

            $('#insert_camion').on("submit", function(event){

            event.preventDefault();

            if($('#Marca_camion').val() == "")
            {
                alert("Marca is required");
            }
            else if($('#Modelo_camion').val() == '')
            {
                alert("Modelo is required");
            }
            else if($('#Latitud_camion').val() == '')
            {
                alert("Latitud is required");
            }
            else if($('#Longitud_camion').val() == '')
            {
                alert("Longitud is required");
            }
            else if($('#Matricula').val() == '')
            {
                alert("Matrícula is required");
            }
            else if ($('#Tipo_contenedor_id').val() === '0'){
                alert("Por favor inserte el nuevo contenedor");
            }
            else
            {
                var datos = $('#insert_camion').serialize()
                console.log(datos);

                $.ajax({
                    url:"Guardar_camion.php",
                    method:"POST",
                    data:$('#insert_camion').serialize(),
                    beforeSend:function(){
                        $('#insert').val("Inserting");
                    },
                    success:function(response){
                        $("#info1").html(JSON.parse(response));
                        $('#insert_camion')[0].reset();
                    }
                });
               Mostrar_eliminar();
            }
        });


        $(document).on('click', '.delete_camion', function () {



        if (confirm('¿Estás seguro de que quieres eliminar este camion?')) {
        let Id_camion = $(this).attr("id");

        var camion = $("#camion").find("tr#" + Id_camion).hide();

        console.log(camion);

        $.post('Eliminar_camion.php', {Id_camion}, function (response) {
            $("#info").html(JSON.parse(response));
            let Id_camion = $(this).attr("id");
            $("#camion").find("tr#" + Id_camion).hide();

        })


    }

    })

    });
