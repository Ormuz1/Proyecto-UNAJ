<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("HTML/global_dependencies.html"); ?>
    <link rel="stylesheet" href="CSS/pagina_principal.css">
</head>

<body>
    <?php include("HTML/navbar.html"); ?>
    <div>
        <h1 class="display-4 py-3">Pagina de guianza para abandonar la adiccion al tabaco</h1>
        <h5 class="px-5 text-center">A todo aquel que este buscando abandonar el tabaco, esta pagina sirve como primer paso. A continuacion, se muestran consejos, contactos, y fuentes de informacion para empezar tu viaje.</h5>
    </div>
    <section id="main-content">
        <article>
            <header>
                <h1> Pagina proyecto para ayudar a dejar de fumar </h1>
            </header>
            <?php include("HTML/carousel.html"); ?>
        </article>
    </section>
    <div class="d-flex justify-content-evenly">
        <ul class="carta-wrapper">
            <li class="carta">
                <img src='Imagenes/apoyo.jpg' alt=''>
                <h3>Busque ayuda</h3>
                <p>No hay por que atravesar este proceso en solitario, busque apoyo de sus familiares y amigos.</p>
            </li>
            <li class="carta">
                <img src='Imagenes/terapia.jpg' alt=''>
                <h3><a href="https://medlineplus.gov/spanish/ency/article/007440.html">Centros de ayuda</a></h3>
                <p>Hay asociaciones que organizan encuentros para que los fumadores puedan contar sus experiencias y ayudarse el uno con el otro.</p>
            </li>
            <li class="carta">
                <img src='https://images.unsplash.com/photo-1613230485186-2e7e0fca1253?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHw&ixlib=rb-1.2.1&q=80&w=400' alt=''>
                <h3>Da el primer paso</h3>
                <p>Puedes empezar hoy mismo tu viaje hacia una vida mas sana. El viaje de mil millas comienza con un paso.</p>
            </li>
        </ul>
    </div>
    <?php include("HTML/footer.html"); ?>
</body>

</html>