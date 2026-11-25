<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactarnos | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">ATENCIÃ“N PERSONALIZADA</p>
          <h1>Estamos AquÃ­ Para Ayudarle</h1>
          <p>ContÃ¡ctenos para resolver dudas, buscar vuelos o recibir asistencia antes y despuÃ©s de su reserva.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section contact-layout">
        <div class="contact-info">
          <article>
            <h3>AtenciÃ³n telefÃ³nica</h3><a href="tel:18883707045">1-888-370-7045</a>
          </article>
          <article>
            <h3>Correo electrÃ³nico</h3><a href="mailto:support@mondiacodelosviajes.com">support@mondiacodelosviajes.com</a>
          </article>
          <article>
            <h3>DirecciÃ³n de la oficina</h3>
            <p>533 Old Sackville Rd #103<br>Lower Sackville, NS B4C 0G3, Canada</p>
          </article>
          <article>
            <h3>Horarios</h3>
            <p>AtenciÃ³n disponible para reservas y consultas de viaje.</p>
          </article>
        </div>
        <div class="contact-form">
          <h2>EnvÃ­enos un mensaje</h2>
          <form>
            <label>Nombre<input type="text" name="name" autocomplete="name" required></label>
            <label>Correo electrÃ³nico<input type="email" name="email" autocomplete="email" required></label>
            <label>TelÃ©fono<input type="tel" name="phone" autocomplete="tel"></label>
            <label>Tipo de viaje<select name="service">
                <option>Vuelos</option>
                <option>Cruceros</option>
                <option>Cambio o cancelaciÃ³n</option>
                <option>Otro</option>
              </select></label>
            <label class="full">Mensaje<textarea name="message" required placeholder="Â¿CÃ³mo podemos ayudarle?"></textarea></label>
            <button type="submit">Enviar solicitud</button>
          </form>
        </div>
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
    document.querySelector('.contact-form form').addEventListener('submit', event => event.preventDefault());
  </script>
</body>

</html>