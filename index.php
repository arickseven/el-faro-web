<!-- formulario.php -->
<?php
// Inicia la sesión si es necesario
// session_start();
?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descripción de tu página web.">
    <title>NOTICIA_SEMANA_5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Archivo CSS -->
</head>
<body>
    <header>


 <!-- Aquí va el navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Noticias Generales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Deporte</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Negocios</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Aquí va el navbar -->


        
        <!-- Aquí se mostrará la hora en tiempo real -->
        <div id="hora">
            <p id="fecha-hora"></p>  <!-- Mostrar la hora -->
        </div>

        <img src="https://www.excursionaustral.com/wp-content/uploads/2023/02/bannerex.jpg" alt="Banner">
        <h2>EL FARO</h2>
    </header>

    <!-- Contenido principal -->
<main>
<!-- Sección de Artículos Recientes (Carousel) -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <!-- Artículo 1 -->
        <div class="carousel-item active">
            <!-- Imagen grande del artículo -->
            <img src="https://static.vecteezy.com/system/resources/thumbnails/005/239/318/small_2x/abstract-fluid-blue-wave-banner-background-illustration-vector.jpg" class="d-block w-100" alt="Articulo 1">

        <!-- Imagen pequeña sobre la imagen de fondo -->
         <div style="text-align: center; margin-bottom: 10px; position: absolute; top: 50px; left: 50%; transform: translateX(-50%);">
            <img src="https://coversbeat.com/wp-content/uploads/2024/11/mi.jpg" alt="Icono de Misión Imposible" style="width: 150px; height: auto; border-radius: 8px;">
         </div>
            
            <!-- Título y contenido del artículo -->
            <div class="carousel-caption d-none d-md-block">
                <h5>Misíon Imposible</h5>
                <p>Sentencia final: se corona como la película más larga de toda la saga de espías.</p>
                <a href="https://www.hobbyconsolas.com/noticias/mision-imposible-sentencia-final-corona-como-pelicula-larga-toda-saga-espias-1456917">leer contenido</a>
            </div>
        </div>


        <!-- Artículo 2 -->
        <div class="carousel-item">
            <!-- Imagen grande del artículo -->
            <img src="https://static.vecteezy.com/system/resources/thumbnails/005/239/318/small_2x/abstract-fluid-blue-wave-banner-background-illustration-vector.jpg" class="d-block w-100" alt="Articulo 2">
            
        <!-- Imagen pequeña sobre la imagen de fondo -->
         <div style="text-align: center; margin-bottom: 10px; position: absolute; top: 50px; left: 50%; transform: translateX(-50%);">
            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/118df2e9-a2c7-4877-9f85-570e06a7136e/dfo700t-9893d9b7-98ab-449f-88b0-98c9d96f7ae9.jpg/v1/fill/w_800,h_626,q_75,strp/dc_studios__supergirl__woman_of_tomorrow___logo_by_imaginativehobbyist_dfo700t-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NjI2IiwicGF0aCI6IlwvZlwvMTE4ZGYyZTktYTJjNy00ODc3LTlmODUtNTcwZTA2YTcxMzZlXC9kZm83MDB0LTk4OTNkOWI3LTk4YWItNDQ5Zi04OGIwLTk4YzlkOTZmN2FlOS5qcGciLCJ3aWR0aCI6Ijw9ODAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.XsrO0WCph4gsq-gr_V65GUOadCnRrVEYrEMjSaCl48Q" alt="Icono de Misión Imposible" style="width: 150px; height: auto; border-radius: 8px;">
         </div>

            <!-- Título y contenido del artículo -->
            <div class="carousel-caption d-none d-md-block">
                <h5>SuperGirl</h5>
                <p>Woman of Tomorrow muestra el primer logo de la película de DC.</p>
                <a href="https://www.hobbyconsolas.com/noticias/supergirl-woman-tomorrow-muestra-primer-logo-pelicula-dc-protagonizada-milly-alcock-1456828">leer contenido</a>
            </div>
        </div>
        <!-- Agrega más artículos según lo necesites -->
    </div>
    <!-- Controles del carousel -->
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>




<!-- Sección para el video y audio -->
<div class="container">
    <h3>video del terremoto en Myanmar</h3>
    <div class="media-content">
        <!-- Video -->
        <div class="video-container">
            <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/p5kZWBCo1po"
                frameborder="0"
                allowfullscreen>
            </iframe>
        </div>

        <!-- Audio -->
        <div class="audio-container">
            <audio controls>
                <source src="https://vgmsite.com/soundtracks/rule-of-rose-gamerip/tzwqcbnras/M16.mp3" type="audio/mp3">
                Tu navegador no soporta este formato de audio.
            </audio>
        </div>
    </div>
</div>



        <!-- Sección de Noticias Generales -->
        <h2>Noticias Generales</h2>
        <div class="contenedor-articulos">
            <div class="tarjeta-articulo">
                <h3>Enfermeras protegieron con su propio cuerpo a recién nacidos durante terremoto en Myanmar</h3>
                <p><strong>Categoría:</strong> Internacional</p>
                <p>El pasado 28 de marzo, un terremoto de 7.7 grados sacudió Myanmar y el movimiento se sintió en varias zonas, entre ellas la provincia china de Yunnan, Fue allí, particularmente en la ciudad de Ruili, donde dos enfermeras arriesgaron sus vidas para resguardar a los recién nacidos.El hecho ocurrió en el Hospital Maternal Jingcheng y según las imágenes captadas por una cámara de vigilancia, las profesionales mantuvieron la calma y protegieron en todo momento a los bebés en la sala de neonatos. De hecho, una de las enfermeras cargó a un bebé arrodillada, mientras que la otra intentó sujetar a las guaguas en sus cunas, pero debido a que estas tenían ruedas, se mecían por toda la sala.  El hecho fue publicado por el hospital y transmitido por los medios de comunicación estatales chinos, posteriormente, se viralizó rápidamente en las redes sociales.</p>
                <a href="https://cnnespanol.cnn.com/2025/03/29/mundo/video/enfermeras-recien-nacidos-terremoto-myanmar-trax" target="_blank">leer contenido</a>

            </div>
            <div class="tarjeta-articulo">
                <h3>Un iceberg se desprende en la Antártida y revela un inesperado ecosistema</h3>
                <p><strong>Categoría:</strong> Mundo</p>
                <p>La impresionante separación de un iceberg. Un equipo de científicos del Instituto Oceánico Schmidt fue testigo del descubrimiento de un complejo y floreciente ecosistema después de que se desprendiera un enorme iceberg en la Antártida.</p>
                <a href="https://www.muyinteresante.com/naturaleza/hallazgo-ecosistema-oculto-iceberg-antartida-descubrimiento-marino.html">leer contenido</a>
            </div>
            <div class="tarjeta-articulo">
                <h3>La Antártida: Un viaje a través de la historia y la ciencia, desde las primeras expediciones hasta hoy</h3>
                <p><strong>Categoría:</strong> Ciencia</p>
                <p>La Antártida sigue siendo una tierra de secretos y misterios. Este remoto continente, que es a la vez el más meridional, el más alto, el más seco, el más ventoso, y el más frío del planeta, ha inspirado leyendas antiguas y ciencia moderna a partes iguales. Con cerca del 98% de su superficie cubierta de hielo, hemos desenterrado algunas de las increíbles historias que se esconden bajo él.</p>
                <a href="https://www.msn.com/es-ar/noticias/other/la-ant%C3%A1rtida-un-viaje-a-trav%C3%A9s-de-la-historia-y-la-ciencia-desde-las-primeras-expediciones-hasta-hoy/ss-AA1sowfO">leer contenido</a>
            </div>
        </div>

        <!-- Sección de Deporte -->
        <h2>Deporte</h2>
        <div class="contenedor-articulos">
            <div class="tarjeta-articulo">
                <h3>Ajedrez</h3>
                <p><strong>Categoría:</strong> Deporte</p>
                <p>El Mundial de ajedrez femenino: 'clandestino', sin premio conocido y con una española como única 'occidental' ante el dominio chino</p>
                <a href="https://www.elmundo.es/deportes/mas-deporte/2025/04/02/67ec0dcc21efa08f028b45ca.html">leer contenido</a>
            </div>
            <div class="tarjeta-articulo">
                <h3>Sigue el entrenamiento de la Selección Femenina, en streaming</h3>
                <p><strong>Categoría:</strong> Deporte</p>
                <p>La selección femenina de España,  dirigida por Montse Tomé, se ha concentrado en la Ciudad del Fútbol de Las Rozas para disputar las jornadas 3 y 4 de la clasificación para la UEFA Women's Nations League. Tras enfrentarse a Bélgica e Inglaterra, ahora jugarán dos partidos contra Portugal, líder del grupo A3. España, actual campeona y con la Eurocopa 2025 en el horizonte, busca sumar puntos para avanzar en la competición.</p>
                <a href="https://www.mundodeportivo.com/futbol/femenino/seleccion-espanola/20250401/1002437111/sigue-entrenamiento-seleccion-femenina-streaming.html">leer contenido</a>
            </div>
            <div class="tarjeta-articulo">
                <h3>La árbitra más viral: "Tarjeta amarilla por la falta que me haces"</h3>
                <p><strong>Categoría:</strong> Deporte</p>
                <p>Carla García, árbitra de moda en España, cuenta con más de 40 mil seguidores en Instagram y explicó en un Podcast algunos de los mensajes que recibe tras los partidos</p>
                <a href="https://www.mundodeportivo.com/futbol/femenino/20250401/1002437090/arbitra-mas-viral-tarjeta-amarilla-falta-me.html">leer contenido</a>
            </div>
        </div>

        <!-- Sección de Negocios -->
        <h2>Negocios</h2>
        <div class="contenedor-articulos">
            <div class="tarjeta-articulo">
                <h3>Negociaciones entre EEUU y México</h3>
                <p><strong>Categoría:</strong> Negocios</p>
                <p>Entre amenazas, idas y vueltas: cronología de las negociaciones de México con EE.UU. para evitar aranceles</p>
                <a href="https://cnnespanol.cnn.com/2025/03/31/economia/amenazas-idas-vueltas-cronologia-negociaciones-mexico-ee-uu-evitar-aranceles-orix">leer contenido</a>
            </div>
            <div class="tarjeta-articulo">
                <h3>Problemas con SII</h3>
                <p><strong>Categoría:</strong> Negocios</p>
                <p>Trabas en el SII afectan a emprendedores</p>
                <a href="https://www.emol.com/noticias/Economia/2025/01/10/1153851/pymes-sii-facturas.html">leer contenido</a>
            </div>
            <div class="tarjeta-articulo">
                <h3>Economía actualidad</h3>
                <p><strong>Categoría:</strong> Negocios</p>
                <p>Economía y dinero proporciona actualidad, análisis y videos sobre mercados, empresas y el dólar</p>
                <a href="https://cnnespanol.cnn.com/economia">leer contenido</a>
            </div>
        </div>

<!-- Contenedor principal que envuelve los 3 formularios -->
<div id="formularios-contenedor">
    <!-- Primer formulario (por ejemplo, de contacto) -->
    <div class="formulario">
        <h3>Contacto</h3>
        <form action="action.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>

    <!-- Segundo formulario (por ejemplo, para agregar noticias) -->
    <div class="formulario">
        <h3>Agregar Noticias</h3>
        <form action="action.php" method="POST">
            <label for="titulo">Título de la noticia:</label>
            <input type="text" id="titulo" name="titulo" required>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>

            <button type="submit">Agregar</button>
        </form>
    </div>

    <!-- Tercer formulario (por ejemplo, de suscripción) -->
    <div class="formulario">
        <h3>Suscripción</h3>
        <form action="action.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="genero">Género:</label>
            <select id="genero" name="genero" required>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>

            <label for="tipo">Tipo de Suscripción:</label>
            <select id="tipo" name="tipo" required>
                <option value="gratis">Gratis</option>
                <option value="premium">Premium</option>
                <option value="vip">VIP</option>
            </select>

            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required>

            <button type="submit">Suscribirse</button>
        </form>
    </div>
</div>




    </main>

    <!-- Footer mas grande-->
    <footer class="bg-dark text-white text-center p-5 mt-5">
        <p>&copy; 2025 Mi Sitio Web. Todos los derechos reservados.</p>
        <p>
            <a href="#" class="text-white">Política de privacidad</a> | 
            <a href="#" class="text-white">Términos de uso</a>
        </p>
        <p>Siguenos en nuestras redes sociales:</p>
        <p>
            <a href="#" class="text-white">Facebook</a> |
            <a href="#" class="text-white">Twitter</a> |
            <a href="#" class="text-white">Instagram</a>
        </p>
    </footer>
    

    <!-- Vinculación del archivo JavaScript -->
    <script src="script.js"></script>

        <!-- Agregar los scripts de Bootstrap al final del body -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>    

</body>
</html>