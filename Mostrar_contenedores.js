$(document).ready(function () {
    Mostrar_contenedores();
    function Mostrar_contenedores() {
        $.ajax({
            url: 'Mostrar_contenedores_select.php',
            type: 'GET',
            success: function (response) {
                let Id_contenedor = JSON.parse(response);
                let template = '';
                let select = '<option selected>Seleccione</option>';
                Id_contenedor.forEach(Contenedor => {

                    template += ` 
                        <option value="${Contenedor.Id_contenedor}">${Contenedor.Nombre}</option>
                        `
                });
                let select_template = template + select;
                $('#Id_contenedor').html(select_template);


            }

        });

    }
});