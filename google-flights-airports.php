<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aeropuertos de Google Flights | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <style>
    .airport-directory { padding: 70px 0 90px; }
    .airport-directory-heading { text-align: center; margin-bottom: 30px; }
    .airport-directory-heading h1 { margin: 8px 0 12px; font-family: Manrope, sans-serif; font-size: 42px; }
    .airport-directory-heading p { color: #68758a; }
    .airport-search { position: relative; max-width: 720px; margin: 0 auto 26px; }
    .airport-search i { position: absolute; left: 18px; top: 50%; transform: translateY(-50%); color: #8490a0; }
    .airport-search input { width: 100%; height: 54px; border: 1px solid #dbe2e8; border-radius: 6px; padding: 0 18px 0 48px; color: var(--navy); font-size: 15px; outline: none; }
    .airport-search input:focus { border-color: var(--gold); box-shadow: 0 0 0 3px #d9b26a24; }
    .airport-directory-card { overflow: hidden; background: #fff; border: 1px solid #dde3e9; border-radius: 6px; }
    .airport-table { width: 100%; border-collapse: collapse; }
    .airport-table th { background: var(--navy); color: #fff; text-align: left; padding: 14px 18px; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; }
    .airport-table td { padding: 14px 18px; border-bottom: 1px solid #edf0f3; color: #68758a; font-size: 14px; }
    .airport-table tr:last-child td { border-bottom: 0; }
    .airport-code-cell { color: #c83e45; font-size: 15px; font-weight: 800; width: 110px; }
    .airport-status { color: #8490a0; text-align: center; padding: 38px 16px; }
    @media (max-width:760px) {
      .airport-directory { padding: 42px 0 60px; }
      .airport-directory-heading h1 { font-size: 32px; }
      .airport-table th:nth-child(3), .airport-table td:nth-child(3) { display: none; }
      .airport-table th, .airport-table td { padding: 12px 10px; }
    }
  </style>
</head>
<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="section airport-directory">
        <div class="airport-directory-heading">
          <p class="section-kicker">DIRECTORIO DE GOOGLE FLIGHTS</p>
          <h1>Aeropuertos disponibles</h1>
          <p>Busca aeropuertos por código IATA, nombre o ciudad.</p>
        </div>
        <div class="airport-search">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input id="airportSearch" type="search" placeholder="Ejemplo: JFK, Londres, Madrid..." autocomplete="off" aria-label="Buscar aeropuerto">
        </div>
        <div class="airport-directory-card">
          <table class="airport-table">
            <thead><tr><th>Código</th><th>Aeropuerto</th><th>Ciudad</th></tr></thead>
            <tbody id="airportRows"></tbody>
          </table>
          <div class="airport-status" id="airportStatus">Cargando aeropuertos...</div>
        </div>
      </section>
    </main>
  </div>

  <script>
    document.getElementById('menu').addEventListener('click', () => document.getElementById('nav').classList.toggle('open'));
    const searchInput = document.getElementById('airportSearch');
    const rows = document.getElementById('airportRows');
    const status = document.getElementById('airportStatus');
    let airports = [];

    function renderAirports(items) {
      rows.innerHTML = '';
      status.style.display = items.length ? 'none' : 'block';
      status.textContent = 'No se encontraron aeropuertos.';
      items.forEach(airport => {
        const row = document.createElement('tr');
        row.innerHTML = '<td class="airport-code-cell"></td><td></td><td></td>';
        row.children[0].textContent = airport.id;
        row.children[1].textContent = airport.name;
        row.children[2].textContent = airport.city || '';
        rows.appendChild(row);
      });
    }

    fetch('/flight-proxy.php?action=airports')
      .then(response => response.json())
      .then(data => {
        airports = Array.isArray(data) ? data : [];
        renderAirports(airports);
      })
      .catch(() => {
        status.textContent = 'No fue posible cargar los aeropuertos.';
      });

    searchInput.addEventListener('input', () => {
      const query = searchInput.value.trim().toLowerCase();
      if (!query) {
        renderAirports(airports);
        return;
      }
      const filtered = airports.filter(airport =>
        String(airport.id).toLowerCase().includes(query) ||
        String(airport.name).toLowerCase().includes(query) ||
        String(airport.city || '').toLowerCase().includes(query)
      );
      renderAirports(filtered);
    });
  </script>
</body>
</html>
