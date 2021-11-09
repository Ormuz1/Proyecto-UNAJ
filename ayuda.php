<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Ayuda</title>
    <link rel="stylesheet" href="CSS/centro_de_ayuda.css">
    <?php include("HTML/global_dependencies.html");?>
    <script src="JS/ayuda.js"> </script>
</head>
<body>
    <?php include("HTML/navbar.html");?>
    <header>
        <div class="d-flex justify-content-center py-2">
            <p class="display-4">Centro de Ayuda</p>
        </div>
        <div id="contenedor-buscador" class="d-flex justify-content-center align-items-center py-5">
            <div id="contenedor-barra-busqueda" class="p-2 rounded-pill">
                <i class="fa fa-search" aria-hidden="true" id="search-icon"></i>
                <input type="text" id="buscador" class="px-2 border-0" placeholder="Escriba su consulta...">
            </div>
        </div>
    </header>
    <main id="contenedor-preguntas" class="mx-auto my-4 accordion">
        <section class="pregunta accordion-item">
            <h2 id="encabezado-pregunta-1" class="encabezado-pregunta accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta1" aria-controls="respuesta1">Pregunta 1</button></h2>
            <div class="accordion-collapse collapse respuesta" id="respuesta1" aria-labelled="encabezado-pregunta-1" data-bs-parent="#contenedor-preguntas">
                <div class="accordion-body">Respuesta 1</div>
            </div>
        </section>
        <section class="pregunta accordion-item">
            <h2 id="encabezado-pregunta-2" class="encabezado-pregunta accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta2" aria-controls="respuesta2">Pregunta 2</button></h2>
            <div class="accordion-collapse collapse respuesta" id="respuesta2" aria-labelled="encabezado-pregunta-2" data-bs-parent="#contenedor-preguntas">
                <div class="accordion-body">Respuesta 2</div>
            </div>
        </section>
        <section class="pregunta accordion-item">
            <h2 id="encabezado-pregunta-3" class="encabezado-pregunta accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta3" aria-controls="respuesta3">Pregunta 3</button></h2>
            <div class="accordion-collapse collapse respuesta" id="respuesta3" aria-labelled="encabezado-pregunta-3" data-bs-parent="#contenedor-preguntas">
                <div class="accordion-body">Respuesta 3</div>
            </div>
        </section>
        <section class="pregunta accordion-item">
            <h2 id="encabezado-pregunta-4" class="encabezado-pregunta accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta4" aria-controls="respuesta4">Pregunta 4</button></h2>
            <div class="accordion-collapse collapse respuesta" id="respuesta4" aria-labelled="encabezado-pregunta-4" data-bs-parent="#contenedor-preguntas">
                <div class="accordion-body">Respuesta 4</div>
            </div>
        </section>
        <section class="pregunta accordion-item">
            <h2 id="encabezado-pregunta-5" class="encabezado-pregunta accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta5" aria-controls="respuesta5">Pregunta 5</button></h2>
            <div class="accordion-collapse collapse respuesta" id="respuesta5" aria-labelled="encabezado-pregunta-5" data-bs-parent="#contenedor-preguntas">
                <div class="accordion-body">Respuesta 5</div>
            </div>
        </section>
    </main>
    <?php include("HTML/footer.html");?>
 </body>
</html>