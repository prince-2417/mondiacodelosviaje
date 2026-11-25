<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PolÃ­tica de divulgaciÃ³n de tarifas | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">PRECIOS TRANSPARENTES</p>
          <h1>PolÃ­tica de DivulgaciÃ³n de Tarifas</h1>
          <p>Queremos que conozca claramente la tarifa aÃ©rea, impuestos, tasas y cargos aplicables antes de reservar.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>Desglose de precio</h2>
          <p>El total puede incluir tarifa base, impuestos, tasas, recargos y cargos por servicio.</p>
        </article>
        <article>
          <h2>Tarifas dinÃ¡micas</h2>
          <p>Los precios pueden cambiar por demanda, disponibilidad y actualizaciones de aerolÃ­neas.</p>
        </article>
        <article>
          <h2>NotificaciÃ³n</h2>
          <p>Le informaremos cualquier modificaciÃ³n antes de emitir el boleto.</p>
        </article>
        <article>
          <h2>Control del viajero</h2>
          <p>Puede aceptar la tarifa actualizada o cancelar si el boleto todavÃ­a no ha sido emitido.</p>
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