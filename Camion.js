src = "https://code.jquery.com/jquery-3.5.0.min.js"
integrity = "sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
crossorigin = "anonymous" >


    $(document).ready(function () {
        actual='#principal' ;
        $('#index').hide();
        $('#empresa').hide();
        $('#camion').hide();
        $('#ruta').hide();
        $('#recogida').hide();
        $('#servicio').hide();
        $('#contenedores').hide();
        $('#crear_camion').hide();
        $('#crear_empresa').hide();
        $('#crear_ruta').hide();
        $('#crear_recogida').hide();
        $('#RutaContenedor').hide();

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
        $('#a_recogida').click(function () {
                $(actual).hide();
                actual='#recogida';
                $(actual).show();
            }
        );
        $('#b_rutaContenedor').click(function () {
               console.log("entra");
                $(actual).hide();
                actual='#RutaContenedor';
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
                actual='#recogida';
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
        $('#Añadir_re').click(function () {
                $(actual).hide();
                actual='#crear_recogida';
                $(actual).show();
            }
        );


        Mostrar_eliminar();
        //Añadir Camion
        $('#Camion-form').submit(function (e) {
            const Camion_post = {
                Marca: $('#Marca').val(),
                Matricula_camion: $('#Matricula_camion').val(),
                Modelo: $('#Modelo').val(),
                Tipo_contenedor: $('#Tipo_contenedor').val(),
                Latitud: $('#Latitud').val(),
                Longitud: $('#Longitud').val()

            };
            $.post('Crear_nuevo_camion.php', Camion_post, function (response) {
                $("#info").html(JSON.parse(response));
                $('#card-body').trigger('reset');
                Insertar_fila(Camion_post);
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
                     console.log(Camiones);
                     Muestra(Camiones);

                }

            })
        }

        function Muestra(C) {
            console.log(C);
            var template = '';
                C.forEach(Camion => {

                    template += ` 
                <tr id="${Camion.Id_camion}" >
                        <td id="td_Tipo_contenedor"   data-id="${Camion.Id_camion}"  data-column="Tipo_contenedor"                 class="update">${Camion.Tipo_contenedor}</td>
                        <td id="td_Matricula_camion"  data-id="${Camion.Id_camion}"  data-column="Matricula_camion"                class="update">${Camion.Matricula_camion}</td>
                        <td id="td_Marca"             data-id="${Camion.Id_camion}"  data-column="Marca"                           class="update">${Camion.Marca}</td>
                        <td id="td_Modelo"            data-id="${Camion.Id_camion}"  data-column="Modelo"                          class="update">${Camion.Modelo}</td>
                        <td id="td_Latitud"           data-id="${Camion.Id_camion}"  data-column="Latitud"                         class="update">${Camion.Latitud}</td>
                        <td id="td_Longitud"          data-id="${Camion.Id_camion}"  data-column="Longitud"                        class="update">${Camion.Longitud}</td>
                        <td><button type="editar" a href="#modal1" id="${Camion.Id_camion}" class="camion button" name="editar" data-toggle="modal">Editar</button></td>
                        <td><button type='eliminar' id="${Camion.Id_camion}" class='delete_camion btn button1' name='eliminar' > Eliminar</button></td>";
               
                </tr>`
                });


            $('#Camiones').html(template);
        }
        function Insertar_fila(Insertar){
            console.log(Insertar);
            var prueba = Insertar.Tipo_contenedor;

            if(prueba == 1){
               Insertar.Tipo_contenedor = "Vídrio";
            }
            if(prueba == 2){
                Insertar.Tipo_contenedor = "Cartón y papel";
            }
            if(prueba == 3){
                Insertar.Tipo_contenedor = "Orgánico";
            }
            if(prueba == 4){
                Insertar.Tipo_contenedor = "Plástico";
            }
            if(prueba == 5){
                Insertar.Tipo_contenedor = "Pilas";
            }
            if(prueba == 6) {
                Insertar.Tipo_contenedor = "Ropa";
            }


            var h = '';
            h += `
                       <tr id="${Insertar.Id_camion}" >
                        <td id="td_Tipo_contenedor"   data-id="${Insertar.Id_camion}"  data-column="Tipo_contenedor"                 class="update">${Insertar.Tipo_contenedor}</td>
                        <td id="td_Matricula_camion"  data-id="${Insertar.Id_camion}"  data-column="Matricula_camion"                class="update">${Insertar.Matricula_camion}</td>
                        <td id="td_Marca"             data-id="${Insertar.Id_camion}"  data-column="Marca"                           class="update">${Insertar.Marca}</td>
                        <td id="td_Modelo"            data-id="${Insertar.Id_camion}"  data-column="Modelo"                          class="update">${Insertar.Modelo}</td>
                        <td id="td_Latitud"           data-id="${Insertar.Id_camion}"  data-column="Latitud"                         class="update">${Insertar.Latitud}</td>
                        <td id="td_Longitud"          data-id="${Insertar.Id_camion}"  data-column="Longitud"                        class="update">${Insertar.Longitud}</td>
                        <td><button type="editar" a href="#modal1" id="${Insertar.Id_camion}" class="camion button" name="editar" data-toggle="modal">Editar</button></td>
                        <td><button type='eliminar' id="${Insertar.Id_camion}" class='delete_camion btn button1' name='eliminar' > Eliminar</button></td>";
               
                </tr>`
            $('#añadir').html(h);

        };

        function edit(Camion_post){
            //Trabajando en ello


            /*var id = Camion_post.id
            console.log(id);

            var a_Tipo_contenedor = $(this).find("#camion").html();
            console.log(a_Tipo_contenedor);*/

        }




        $(document).on('click', '.camion', function ()
         {
             var id_camion = $(this).attr("id");
             var a_Tipo_contenedor = $(this).parent().parent().find("#td_Tipo_contenedor").html();
             var a_Matricula_camion = $(this).parent().parent().find("#td_Matricula_camion").html();
             var a_Marca = $(this).parent().parent().find("#td_Marca").html();
             var a_Modelo = $(this).parent().parent().find("#td_Modelo").html();
             var a_Latitud = $(this).parent().parent().find("#td_Latitud").html();
             var a_Longitud = $(this).parent().parent().find("#td_Longitud").html();

             //$('#Tipo_contenedor_id').val()

             $('#id').val(id_camion);
             $('#Tipo_contenedor_id').val(a_Tipo_contenedor);
             $('#Matricula').val(a_Matricula_camion);
             $('#Marca_camion').val(a_Marca);
             $('#Modelo_camion').val(a_Modelo);
             $('#Latitud_camion').val(a_Latitud);
             $('#Longitud_camion').val(a_Longitud);

             //console.log(a);
             //console.log(b);
             //console.log(c);
             //console.log(d);


             //var customerId = $(this).html();
             //console.log(customerId);

             //var Id_camion = event.target(id_camion);
            //console.log(Id_camion);




            /*var id_camion = $(this).attr("id");
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
            });*/
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
            else
            {
               // var datos = $('#insert_camion').serialize();

                var Camion_post1 = {
                    id: $('#id').val(),
                    Marca_camion: $('#Marca_camion').val(),
                    Matricula: $('#Matricula').val(),
                    Modelo_camion: $('#Modelo_camion').val(),
                    Tipo_contenedor_id: $('#Tipo_contenedor_id').val(),
                    Latitud_camion: $('#Latitud_camion').val(),
                    Longitud_camion: $('#Longitud_camion').val()

                };
                $.post('Guardar_camion.php', Camion_post1, function (response) {
                    $("#info").html(JSON.parse(response));
                    $('#insert_camion').trigger('reset');
                   // edit(Camion_post1);
                });
                $('#Camion-form').trigger('reset');

                var prueba = $(this).parent().parent().html();
                console.log(prueba);




               // console.log(datos);

               /* $.ajax({
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
               Mostrar_eliminar();*/
            }
        });


        $(document).on('click', '.delete_camion', function () {



        if (confirm('¿Estás seguro de que quieres eliminar este camion?')) {
        let Id_camion = $(this).attr("id");

        var camion = $("#camion").find("tr#" + Id_camion).remove();

        console.log(camion);

        $.post('Eliminar_camion.php', {Id_camion}, function (response) {
            $("#info").html(JSON.parse(response));
            let Id_camion = $(this).attr("id");
            $("#camion").find("tr#" + Id_camion).remove();

        })


    }

    })

    });
