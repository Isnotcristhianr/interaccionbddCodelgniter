$(document).ready(function() {
    $('#tema').change(function() {
        var id = $(this).val();
        console.log(id);
        $.ajax({
            url: "obtenerLibros",
            method: "POST",
            data: {
                id: id
            },
            success: function(data) {
                $('#salida').innerHTML = data;
            }
        });
    });
});