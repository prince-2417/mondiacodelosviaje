<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LÃ­neas De Cruceros | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">EXPERTOS EN CRUCEROS</p>
          <h1>Ahorra Hasta un 60% en Cruceros Exclusivos</h1>
          <p>Llama ahora y descubre tarifas especiales no publicadas, asistencia experta las 24 horas y opciones de crucero para todo tipo de viajero.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section">
        <p class="section-kicker">ELIGE TU ESTILO DE VIAJE</p>
        <h2 style="margin:0 0 28px;font-family:Manrope,sans-serif;font-size:42px">Destinos y lÃ­neas populares</h2>
        <div class="cruise-grid">
          <article class="cruise-card"><img src="https://images.unsplash.com/photo-1548574505-5e239809ee19?auto=format&fit=crop&w=900&q=85" alt="Crucero en el mar">
            <div>
              <h3>Royal Caribbean</h3>
              <p>Caribe, Europa y grandes aventuras a bordo.</p><a href="/contactarnos">Consultar cruceros â†’</a>
            </div>
          </article>
          <article class="cruise-card"><img src="https://images.unsplash.com/photo-1530789253388-582c481c54b0?auto=format&fit=crop&w=900&q=85" alt="Costa tropical">
            <div>
              <h3>Carnival Cruise Line</h3>
              <p>Vacaciones divertidas para parejas y familias.</p><a href="/contactarnos">Consultar cruceros â†’</a>
            </div>
          </article>
          <article class="cruise-card"><img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=900&q=85" alt="Destino de crucero">
            <div>
              <h3>MSC Cruises</h3>
              <p>Itinerarios internacionales con experiencia europea.</p><a href="/contactarnos">Consultar cruceros â†’</a>
            </div>
          </article>
          <article class="cruise-card"><img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=900&q=85" alt="Paisaje costero">
            <div>
              <h3>Norwegian Cruise Line</h3>
              <p>Flexibilidad y libertad en cada itinerario.</p><a href="/contactarnos">Consultar cruceros â†’</a>
            </div>
          </article>
          <article class="cruise-card"><img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=900&q=85" alt="Destino natural">
            <div>
              <h3>Celebrity Cruises</h3>
              <p>DiseÃ±o moderno y viajes cuidadosamente curados.</p><a href="/contactarnos">Consultar cruceros â†’</a>
            </div>
          </article>
          <article class="cruise-card"><img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=900&q=85" alt="Playa paradisÃ­aca">
            <div>
              <h3>Disney Cruise Line</h3>
              <p>Experiencias memorables para toda la familia.</p><a href="/contactarnos">Consultar cruceros â†’</a>
            </div>
          </article>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>GarantÃ­a del mejor precio</h2>
          <p>Compara itinerarios y encuentra opciones competitivas en lÃ­neas de cruceros reconocidas.</p>
        </article>
        <article>
          <h2>Asistencia disponible 24/7</h2>
          <p>Nuestro equipo estÃ¡ disponible para ayudarte a encontrar el crucero adecuado.</p>
        </article>
        <article>
          <h2>Experiencias Ãºnicas</h2>
          <p>Explora destinos costeros, viajes familiares y vacaciones de lujo por el mundo.</p>
        </article>
        <article>
          <h2>Reserva tu crucero</h2>
          <p>Llama hoy y comienza a planificar tu prÃ³xima aventura en alta mar.</p>
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