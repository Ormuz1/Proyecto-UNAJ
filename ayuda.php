<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Ayuda</title>
    <link rel="stylesheet" href="CSS/centro_de_ayuda.css">
    <?php include("HTML/global_dependencies.html"); ?>
    <script src="JS/ayuda.js"> </script>
</head>

<body>
    <?php include("HTML/navbar.html"); ?>
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
            <h2 id="encabezado-pregunta-1" class="encabezado-pregunta accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta1" aria-controls="respuesta1">¿Qué método es mejor para dejarlo, poco a poco o de golpe?</button>
            </h2>
            <div class="accordion-collapse collapse respuesta" id="respuesta1" aria-labelled="encabezado-pregunta-1" data-bs-parent="#contenedor-preguntas">
                <div class="accordion-body">Cualquier método vale. Lo importante es conseguir dejarlo. De todas formas, lo adecuado es adecuar el método al tipo y personalidad del fumador y pactarlo con el médico o enfermera. Si se elige el método lento hay que advertir del peligro de quedarse en fumar sólo tres o cuatro y advertir que luego es más difícil llegar a la abstinencia total.</div>
            </div>
        </section>
        <section class="pregunta accordion-item">
            <h2 id="encabezado-pregunta-2" class="encabezado-pregunta accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta2" aria-controls="respuesta2">¿Es más peligroso fumar una caja que fumar tres o cuatro cigarrillos al dia?</button>
            </h2>
            <div class="accordion-collapse collapse respuesta" id="respuesta2" aria-labelled="encabezado-pregunta-2" data-bs-parent="#contenedor-preguntas">
                <div class="accordion-body">Es más peligroso fumar una caja, pero tres o cuatro al día también matan. De todas formas es muy probable que, por el tremendo poder adictivo de la nicotina, se vaya incrementando la cifra y un día se llegue a la cajetilla.</div>
            </div>
        </section>
        <section class="pregunta accordion-item">
            <h2 id="encabezado-pregunta-3" class="encabezado-pregunta accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta3" aria-controls="respuesta3">¿Qué se puede hacer para evitar las recaídas?</button>
            </h2>
            <div class="accordion-collapse collapse respuesta" id="respuesta3" aria-labelled="encabezado-pregunta-3" data-bs-parent="#contenedor-preguntas">
                <div class="accordion-body">Primero, no angustiarse por las recaídas. Forman parte del proceso de deshabituación. Lo mejor es prevenirlas. Tener claro las situaciones en las que es más fácil recaer. Prevenirlas y tener preparada una estrategia. Una de ellas puede ser salir de la situación, abandonar el lugar. Muy útil es el retrasar el encender el cigarro interponiendo una tarea. Lo más probable es que cuando se finalice ésta, haya desaparecido el deseo, o la menos disminuido tanto que resulte tolerable.</div>
            </div>
        </section>
        <section class="pregunta accordion-item">
            <h2 id="encabezado-pregunta-4" class="encabezado-pregunta accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#respuesta4" aria-controls="respuesta4">Si lo dejo, ¿cuánto tiempo tardan mis pulmones en recuperar?</button></h2>
            <div class="accordion-collapse collapse respuesta" id="respuesta4" aria-labelled="encabezado-pregunta-4" data-bs-parent="#contenedor-preguntas">
                <div class="accordion-body">Depende de los factores de riesgo previos, como padecer diabetes, asma u otras enfermedades. Pero, ya desde el primer día se regulariza la tensión arterial, la concentración de oxígeno en la sangre y la frecuencia cardiaca. Y a los 20 días ya mejora la circulación sanguínea y la función respiratoria.</div>
            </div>
        </section>
    </main>
    <?php include("HTML/footer.html"); ?>
</body>

</html>