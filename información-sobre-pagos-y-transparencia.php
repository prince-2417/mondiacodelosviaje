<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InformaciÃ³n Sobre pagos y transparencia | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">PAGOS Y TARIFAS</p>
          <h1>InformaciÃ³n Sobre Pagos y Transparencia</h1>
          <p>Nos comprometemos a realizar transacciones claras y completamente transparentes antes de confirmar su reserva.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>Pagos seguros</h2>
          <p>Los pagos se procesan mediante proveedores autorizados y canales protegidos.</p>
        </article>
        <article>
          <h2>InformaciÃ³n previa</h2>
          <p>Antes de pagar recibe la tarifa total, polÃ­ticas de cambio y cualquier cargo aplicable.</p>
        </article>
        <article>
          <h2>ConfirmaciÃ³n del cliente</h2>
          <p>NingÃºn pago se procesa sin su autorizaciÃ³n expresa.</p>
        </article>
        <article>
          <h2>Reembolsos y cambios</h2>
          <p>Las cancelaciones y reembolsos estÃ¡n sujetos a las polÃ­ticas de la aerolÃ­nea correspondiente.</p>
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