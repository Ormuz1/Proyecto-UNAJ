$(document).ready(() => {
    let preguntas = $(".encabezado-pregunta");
    preguntas.each(function () {
        $(this).attr("pregunta", $(this).text().toLowerCase())
    });

    $('#buscador').on('keyup', function () {

        let busqueda = $(this).val().toLowerCase();
        preguntas.each(function () {
            console.log(typeof $(this).attr("pregunta"));
            if ($(this).attr("pregunta").includes(busqueda) || busqueda.length < 1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});
