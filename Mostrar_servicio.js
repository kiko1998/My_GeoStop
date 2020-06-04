$(document).ready(function () {
    Mostrar_servicio_select();
    function Mostrar_servicio_select() {
        $.ajax({
            url: 'Mostrar_servicio_select.php',
            type: 'GET',
            success: function (response) {
                let Select_servicio = JSON.parse(response);
                let template = '';
                let select = '<option selected>Seleccione</option>';
                Select_servicio.forEach(Servicio => {

                    template += ` 
                        <option value="${Servicio.id_servicio}">${Servicio.Nombre_servicio}</option>
                        `
                });
                let select_template = template + select;
                $('#Select_servicio').html(select_template);


            }

        });

    }
});