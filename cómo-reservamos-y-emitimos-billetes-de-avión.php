<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CÃ³mo Reservamos y Emitimos Billetes De AviÃ³n | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">PROCESO DE RESERVA</p>
          <h1>CÃ³mo Reservamos y Emitimos Boletos de AviÃ³n</h1>
          <p>Le asistimos en la reserva de boletos mediante sistemas autorizados y socios de ticketing confiables.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>Solicite opciones</h2>
          <p>ContÃ¡ctenos por telÃ©fono o correo para solicitar las opciones disponibles.</p>
        </article>
        <article>
          <h2>Compare tarifas</h2>
          <p>Nuestros expertos buscan tarifas y condiciones utilizando sistemas autorizados.</p>
        </article>
        <article>
          <h2>Confirme el itinerario</h2>
          <p>Le mostramos tarifas, polÃ­ticas de cambio y reembolso, impuestos y el precio total.</p>
        </article>
        <article>
          <h2>Reciba su e-ticket</h2>
          <p>Tras el pago autorizado emitimos su boleto electrÃ³nico y lo enviamos por correo.</p>
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