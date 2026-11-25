<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarifas de Servicios | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">CARGOS DE RESERVA</p>
          <h1>Tarifas de Servicios</h1>
          <p>Los cargos por servicio se muestran antes del pago y pueden variar segÃºn el tipo de reserva y el pasajero.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>Reserva de vuelo</h2>
          <p>Puede aplicarse un cargo por reserva de hasta $50 por pasajero y boleto.</p>
        </article>
        <article>
          <h2>Hotel y vehÃ­culo</h2>
          <p>Las reservas pueden incluir cargos por noche, habitaciÃ³n o transacciÃ³n.</p>
        </article>
        <article>
          <h2>Cruceros</h2>
          <p>Las reservas de crucero pueden incluir cargos por pasajero de hasta $200.</p>
        </article>
        <article>
          <h2>Visibilidad</h2>
          <p>Los cargos se convierten a la moneda local al realizar el pago y no deben ocultarse.</p>
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