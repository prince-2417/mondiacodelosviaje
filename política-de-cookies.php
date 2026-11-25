<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PolÃ­tica de Cookies | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">COOKIES Y NAVEGACIÃ“N</p>
          <h1>PolÃ­tica de Cookies</h1>
          <p>Explicamos cÃ³mo Mondiaco de los Viajes utiliza cookies y tecnologÃ­as similares para mejorar su navegaciÃ³n.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>Cookies esenciales</h2>
          <p>Permiten formularios de reserva, seguridad y funciones bÃ¡sicas del sitio.</p>
        </article>
        <article>
          <h2>Cookies de anÃ¡lisis</h2>
          <p>Ayudan a comprender el trÃ¡fico y mejorar pÃ¡ginas, ofertas y experiencia.</p>
        </article>
        <article>
          <h2>Cookies funcionales</h2>
          <p>Recuerdan preferencias como idioma, bÃºsquedas y destinos.</p>
        </article>
        <article>
          <h2>Control de cookies</h2>
          <p>Puede bloquear, eliminar o personalizar cookies desde la configuraciÃ³n de su navegador.</p>
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