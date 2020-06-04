$(document).ready(function () {
    Mostrar_tipo_contenedores();
    function Mostrar_tipo_contenedores() {
        $.ajax({
            url: 'Mostrar_tipo_contenedor_select.php',
            type: 'GET',
            success: function (response) {
                let Select_tipo = JSON.parse(response);
                let template = '';
                let select = '<option selected>Seleccione</option>';
                Select_tipo.forEach(Tipo_contenedor => {

                    template += ` 
                        <option value="${Tipo_contenedor.idTipo}">${Tipo_contenedor.Tipo_contenedor}</option>
                        `
                });

                let select_template = template + select;
                $('#Tipo_contenedor').html(select_template);


            }

        });

    }
});