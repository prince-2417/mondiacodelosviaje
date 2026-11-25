<!doctype html>
<html lang="es">

<head>  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Descargo de Responsabilidad | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>   
    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">INFORMACIÃ“N IMPORTANTE</p>
          <h1>Descargo de Responsabilidad</h1>
          <p>La informaciÃ³n de este sitio tiene fines informativos y promocionales generales. Puede cambiar sin previo aviso.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>No somos una aerolÃ­nea</h2>
          <p>Presentamos opciones y servicios de terceros sin operar vuelos directamente.</p>
        </article>
        <article>
          <h2>Responsabilidades operativas</h2>
          <p>Retrasos, cancelaciones, equipaje y servicios a bordo son gestionados por aerolÃ­neas y proveedores.</p>
        </article>
        <article>
          <h2>Exactitud de la informaciÃ³n</h2>
          <p>Nos esforzamos por mantener datos precisos, aunque pueden ocurrir errores o actualizaciones tardÃ­as.</p>
        </article>
        <article>
          <h2>LimitaciÃ³n de responsabilidad</h2>
          <p>No somos responsables de pÃ©rdida directa o indirecta derivada del uso de informaciÃ³n o enlaces externos.</p>
        </article>
      </section>
      <section class="page-contact-band">
        <div>
          <p class="section-kicker">Â¿NECESITA AYUDA?</p>
          <h2>Nuestro equipo estÃ¡ listo para ayudarle.</h2>
        </div>
        <a href="tel:18883707045">Llamar 1-888-370-7045</a>
      </section>
    </main>

    <?php include('include/footer.php'); ?>
  </div>
  <script>
    document.getElementById('menu').addEventListener('click', () => document.getElementById('nav').classList.toggle('open'));
    document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
      toggle.addEventListener('click', event => {
        if (window.innerWidth <= 760) {
          event.preventDefault();
          toggle.parentElement.classList.toggle('open');
        }
      });
    });
  </script>
</body>

</html>