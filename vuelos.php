<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vuelos | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="/styles.css">
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">ENCUENTRE LAS MEJORES OFERTAS</p>
          <h1>Encuentre las Mejores Ofertas de Vuelos</h1>
          <p>Compare aerolÃ­neas, horarios y tarifas para encontrar la opciÃ³n ideal para su viaje nacional o internacional.</p>
          <!-- <div class="inner-page-actions"><a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a><a class="primary-button" href="/contactarnos">Solicitar asistencia</a></div> -->
        </div>
      </section>

      <section class="section flight-search-section">
        <div class="flight-search-card">
          <div class="flight-trip-tabs" role="tablist" aria-label="Tipo de viaje">
            <button type="button" class="active" data-trip="round" role="tab" aria-selected="true">Ida y vuelta</button>
            <button type="button" data-trip="oneway" role="tab" aria-selected="false">Solo ida</button>
          </div>
          <form class="flight-search-fields">
            <label class="flight-field">
              <span class="flight-field-icon" aria-hidden="true"><i class="fa-solid fa-location-dot"></i></span>
              <span class="flight-field-copy"><small>Desde</small><input type="text" name="origin" placeholder="Nueva York" aria-label="Origen"></span>
            </label>
            <label class="flight-field">
              <span class="flight-field-icon" aria-hidden="true"><i class="fa-solid fa-location-dot"></i></span>
              <span class="flight-field-copy"><small>Hacia</small><input type="text" name="destination" placeholder="Â¿A dÃ³nde vas?" aria-label="Destino"></span>
            </label>
            <label class="flight-field">
              <span class="flight-field-icon" aria-hidden="true"><i class="fa-solid fa-calendar-days"></i></span>
              <span class="flight-field-copy"><small>Salida</small><input type="date" name="departure" aria-label="Fecha de salida"></span>
            </label>
            <label class="flight-field return-field">
              <span class="flight-field-icon" aria-hidden="true"><i class="fa-solid fa-calendar-days"></i></span>
              <span class="flight-field-copy"><small>Regreso</small><input type="date" name="return" aria-label="Fecha de regreso"></span>
            </label>
            <label class="flight-field passengers-field">
              <span class="flight-field-icon" aria-hidden="true"><i class="fa-solid fa-user-group"></i></span>
              <span class="flight-field-copy"><small>Pasajeros</small><select name="passengers" aria-label="NÃºmero de pasajeros">
                  <option value="1">1 viajero</option>
                  <option value="2" selected>2 viajeros</option>
                  <option value="3">3 viajeros</option>
                  <option value="4">4 viajeros</option>
                  <option value="5">5 viajeros</option>
                  <option value="6">6 viajeros</option>
                </select></span>
            </label>
            <button class="flight-search-button" type="submit" aria-label="Buscar vuelos"><i class="fa-solid fa-magnifying-glass"></i> <span>Buscar vuelos</span></button>
          </form>
        </div>
      </section>

      <section class="section airline-section">
        <p class="section-kicker">DIRECTORIO DE AEROLÃNEAS</p>
        <h2>Encuentra tu aerolÃ­nea</h2>
        <div class="airline-grid">
          <a href="/contactarnos">Aegean Airlines</a><a href="/contactarnos">Aer Lingus</a><a href="/contactarnos">AerolÃ­neas Argentinas</a><a href="/contactarnos">Aeromexico Airlines</a>
          <a href="/contactarnos">Air Canada</a><a href="/contactarnos">Air China</a><a href="/contactarnos">Air Europa</a><a href="/contactarnos">Air France Airlines</a>
          <a href="/contactarnos">Alaska Airlines</a><a href="/contactarnos">Allegiant Air</a><a href="/contactarnos">American Airlines</a><a href="/contactarnos">Asiana Airlines</a>
          <a href="/contactarnos">British Airways</a><a href="/contactarnos">Cathay Pacific</a><a href="/contactarnos">Delta Airlines</a><a href="/contactarnos">Emirates Airlines</a>
          <a href="/contactarnos">Ethiopian Airlines</a><a href="/contactarnos">Etihad Airways</a><a href="/contactarnos">Iberia Airlines</a><a href="/contactarnos">ITA Airways</a>
          <a href="/contactarnos">Japan Airlines</a><a href="/contactarnos">JetBlue Airlines</a><a href="/contactarnos">KLM Airlines</a><a href="/contactarnos">LATAM Airlines</a>
          <a href="/contactarnos">Lufthansa Airlines</a><a href="/contactarnos">Malaysia Airlines</a><a href="/contactarnos">Qantas Airlines</a><a href="/contactarnos">Qatar Airways</a>
          <a href="/contactarnos">Royal Air Maroc</a><a href="/contactarnos">Ryanair</a><a href="/contactarnos">Singapore Airlines</a><a href="/contactarnos">Southwest Airlines</a>
          <a href="/contactarnos">Thai Airways</a><a href="/contactarnos">Turkish Airlines</a><a href="/contactarnos">United Airlines</a><a href="/contactarnos">Virgin Atlantic</a>
        </div>
      </section>

      <section class="section inner-page-details">
        <article>
          <h2>Buscar Vuelos</h2>
          <p>Compare aerolÃ­neas, horarios y tarifas para encontrar la opciÃ³n ideal.</p>
        </article>
        <article>
          <h2>Seleccionar el Vuelo</h2>
          <p>Elija el vuelo que mejor se adapte a sus necesidades y revise el itinerario.</p>
        </article>
        <article>
          <h2>Recibir ConfirmaciÃ³n</h2>
          <p>Reciba su confirmaciÃ³n y boleto electrÃ³nico por correo electrÃ³nico de forma segura.</p>
        </article>
      </section>
      <section class="page-contact-band">
        <div>
          <p class="section-kicker">RESERVE SU PRÃ“XIMO VUELO</p>
          <h2>No espere mÃ¡s. Encuentre hoy las mejores ofertas.</h2>
        </div><a href="tel:18883707045">Llamar 1-888-370-7045</a>
      </section>
    </main>

    <?php include('include/footer.php'); ?>
  </div>
  <script>
    const menuButton = document.getElementById('menu');
    if (menuButton) {
      menuButton.addEventListener('click', () => document.getElementById('nav').classList.toggle('open'));
    }
    document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
      toggle.addEventListener('click', event => {
        const dropdown = toggle.parentElement;
        if (window.innerWidth <= 760) {
          event.preventDefault();
          dropdown.classList.toggle('open');
          return;
        }
        event.preventDefault();
        dropdown.classList.toggle('open');
      });
    });
    const tripTabs = document.querySelectorAll('.flight-trip-tabs button');
    const returnField = document.querySelector('.return-field');
    tripTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        tripTabs.forEach(item => {
          item.classList.remove('active');
          item.setAttribute('aria-selected', 'false');
        });
        tab.classList.add('active');
        tab.setAttribute('aria-selected', 'true');
        returnField.hidden = tab.dataset.trip === 'oneway';
      });
    });
    document.querySelectorAll('form').forEach(form => form.addEventListener('submit', event => event.preventDefault()));
  </script>
</body>

</html>