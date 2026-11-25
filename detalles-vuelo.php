<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalles del Vuelo | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="./styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <style>
    .booking-hero {
      background: linear-gradient(90deg, #081b33f0 0%, #081b33b0 60%, #081b3340 100%), url(https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=1800&q=85) 50% 55%/cover no-repeat;
      padding: 48px 0;
      color: #fff;
    }

    .booking-hero-inner {
      width: 89%;
      max-width: 1280px;
      margin: 0 auto;
    }

    .booking-hero-inner .breadcrumb {
      font-size: 12px;
      color: #9aa8ba;
      margin-bottom: 14px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .booking-hero-inner .breadcrumb a {
      color: #9aa8ba;
      text-decoration: none;
    }

    .booking-hero-inner .breadcrumb a:hover {
      color: var(--gold);
    }

    .booking-hero-inner h1 {
      font-family: Manrope, sans-serif;
      font-size: clamp(28px, 3vw, 42px);
      margin: 0 0 8px;
      letter-spacing: -1px;
    }

    .booking-hero-inner p {
      color: #c9d3e0;
      font-size: 14px;
      margin: 0;
    }

    /* Steps bar */
    .booking-steps {
      background: #fff;
      border-bottom: 1px solid #edf0f3;
      padding: 0;
    }

    .booking-steps-inner {
      width: 89%;
      max-width: 1280px;
      margin: 0 auto;
      display: flex;
    }

    .booking-step {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 18px 28px 18px 0;
      font-size: 13px;
      font-weight: 700;
      color: #9aa8ba;
      border-bottom: 3px solid transparent;
    }

    .booking-step.active {
      color: var(--navy);
      border-bottom-color: var(--gold);
    }

    .booking-step.done {
      color: #2e9e6b;
    }

    .step-num {
      width: 26px;
      height: 26px;
      border-radius: 50%;
      background: #eef2f6;
      display: grid;
      place-items: center;
      font-size: 12px;
      font-weight: 800;
      flex-shrink: 0;
    }

    .booking-step.active .step-num {
      background: var(--gold);
      color: var(--navy);
    }

    .booking-step.done .step-num {
      background: #2e9e6b;
      color: #fff;
    }

    /* Layout */
    .booking-layout {
      display: grid;
      grid-template-columns: 1fr 360px;
      gap: 28px;
      padding: 36px 0 80px;
    }

    .booking-main {}

    .booking-sidebar {}

    /* Flight summary card */
    .summary-card {
      background: #fff;
      border: 1px solid #dde3e9;
      border-radius: 6px;
      padding: 24px;
      margin-bottom: 20px;
    }

    .summary-card h3 {
      font-family: Manrope, sans-serif;
      font-size: 15px;
      margin: 0 0 18px;
      padding-bottom: 14px;
      border-bottom: 1px solid #edf0f3;
    }

    .summary-route {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-bottom: 16px;
    }

    .summary-airport {
      text-align: center;
    }

    .summary-airport strong {
      display: block;
      font-family: Manrope, sans-serif;
      font-size: 22px;
      color: var(--navy);
    }

    .summary-airport span {
      font-size: 11px;
      color: #8490a0;
    }

    .summary-line {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 4px;
    }

    .summary-line .s-dur {
      font-size: 11px;
      color: #8490a0;
    }

    .summary-line .s-bar {
      width: 100%;
      height: 1px;
      background: #c9d3e0;
      position: relative;
    }

    .summary-line .s-bar:before,
    .summary-line .s-bar:after {
      content: '';
      position: absolute;
      top: -3px;
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: #c9d3e0;
    }

    .summary-line .s-bar:before {
      left: 0;
    }

    .summary-line .s-bar:after {
      right: 0;
    }

    .summary-line .s-stops {
      font-size: 11px;
      color: #8490a0;
    }

    .summary-meta {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    .summary-meta div {
      display: flex;
      flex-direction: column;
    }

    .summary-meta small {
      font-size: 10px;
      color: #8490a0;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .summary-meta strong {
      font-size: 13px;
      color: var(--navy);
      margin-top: 3px;
    }

    /* Passenger form */
    .form-card {
      background: #fff;
      border: 1px solid #dde3e9;
      border-radius: 6px;
      padding: 28px;
      margin-bottom: 20px;
    }

    .form-card h3 {
      font-family: Manrope, sans-serif;
      font-size: 16px;
      margin: 0 0 20px;
      padding-bottom: 14px;
      border-bottom: 1px solid #edf0f3;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .form-card h3 i {
      color: var(--gold);
    }

    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }

    .form-grid .full {
      grid-column: 1/-1;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      gap: 6px;
    }

    .form-group label {
      font-size: 12px;
      font-weight: 700;
      color: #66758a;
      text-transform: uppercase;
      letter-spacing: 0.8px;
    }

    .form-group input,
    .form-group select {
      height: 46px;
      border: 1px solid #dbe2e8;
      border-radius: 4px;
      color: var(--navy);
      background: #fff;
      padding: 0 14px;
      font-size: 14px;
      font-family: inherit;
      outline: none;
      transition: border-color .2s;
    }

    .form-group input:focus,
    .form-group select:focus {
      border-color: var(--gold);
    }

    .form-group input.error,
    .form-group select.error {
      border-color: #e05252;
    }

    /* Price card */
    .price-card {
      background: #fff;
      border: 1px solid #dde3e9;
      border-radius: 6px;
      padding: 24px;
      position: sticky;
      top: 20px;
    }

    .price-card h3 {
      font-family: Manrope, sans-serif;
      font-size: 15px;
      margin: 0 0 18px;
      padding-bottom: 14px;
      border-bottom: 1px solid #edf0f3;
    }

    .price-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 12px;
      font-size: 13px;
    }

    .price-row span {
      color: #66758a;
    }

    .price-row strong {
      color: var(--navy);
    }

    .price-total {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 14px;
      border-top: 2px solid #edf0f3;
      margin-top: 4px;
    }

    .price-total span {
      font-weight: 700;
      font-size: 14px;
    }

    .price-total strong {
      font-family: Manrope, sans-serif;
      font-size: 26px;
      color: var(--navy);
    }

    .price-note {
      font-size: 11px;
      color: #8490a0;
      margin-top: 8px;
      line-height: 1.5;
    }

    .continue-btn {
      width: 100%;
      height: 52px;
      background: var(--gold);
      color: var(--navy);
      border: 0;
      border-radius: 4px;
      font-size: 14px;
      font-weight: 800;
      cursor: pointer;
      margin-top: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      text-decoration: none;
    }

    .continue-btn:hover {
      background: #c9a05a;
    }

    .secure-badge {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 11px;
      color: #8490a0;
      margin-top: 14px;
      justify-content: center;
    }

    .secure-badge i {
      color: #2e9e6b;
    }

    @media (max-width: 900px) {
      .booking-layout {
        grid-template-columns: 1fr;
      }

      .price-card {
        position: static;
      }

      .booking-sidebar {
        order: -1;
      }
    }

    @media (max-width: 760px) {
      .booking-steps-inner {
        gap: 0;
        overflow-x: auto;
      }

      .booking-step {
        padding: 14px 16px 14px 0;
        white-space: nowrap;
        font-size: 12px;
      }

      .form-grid {
        grid-template-columns: 1fr;
      }

      .form-grid .full {
        grid-column: auto;
      }
    }
  </style>
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <div class="booking-hero">
      <div class="booking-hero-inner">
        <div class="breadcrumb">
          <a href="/">Inicio</a> <i class="fa-solid fa-chevron-right" style="font-size:9px"></i>
          <a href="javascript:history.back()">Resultados</a> <i class="fa-solid fa-chevron-right" style="font-size:9px"></i>
          <span>Detalles del vuelo</span>
        </div>
        <h1>Detalles del vuelo</h1>
        <p>Completa los datos de los pasajeros para continuar</p>
      </div>
    </div>

    <div class="booking-steps">
      <div class="booking-steps-inner">
        <div class="booking-step done"><span class="step-num"><i class="fa-solid fa-check" style="font-size:10px"></i></span> Selección</div>
        <div class="booking-step active"><span class="step-num">2</span> Pasajeros</div>
        <div class="booking-step"><span class="step-num">3</span> Pago</div>
        <div class="booking-step"><span class="step-num">4</span> Confirmación</div>
      </div>
    </div>

    <main>
      <div class="section booking-layout">
        <div class="booking-main">
          <!-- Flight summary -->
          <div class="summary-card">
            <h3><i class="fa-solid fa-plane" style="color:var(--gold);margin-right:8px"></i> Resumen del vuelo</h3>
            <div class="summary-route">
              <div class="summary-airport">
                <strong id="sumOrigin">--</strong>
                <span id="sumOriginLabel">Origen</span>
              </div>
              <div class="summary-line">
                <span class="s-dur" id="sumDuration">--</span>
                <div class="s-bar"></div>
                <span class="s-stops" id="sumStops">--</span>
              </div>
              <div class="summary-airport">
                <strong id="sumDest">--</strong>
                <span id="sumDestLabel">Destino</span>
              </div>
            </div>
            <div class="summary-meta">
              <div><small>Aerolínea</small><strong id="sumAirline">--</strong></div>
              <div><small>Salida</small><strong id="sumDepart">--</strong></div>
              <div id="sumReturnWrap"><small>Regreso</small><strong id="sumReturn">--</strong></div>
              <div><small>Tipo</small><strong id="sumType">--</strong></div>
            </div>
          </div>

          <!-- Passenger 1 -->
          <div class="form-card">
            <h3><i class="fa-solid fa-user"></i> Pasajero 1 — Titular</h3>
            <div class="form-grid">
              <div class="form-group">
                <label>Nombre(s)</label>
                <input type="text" id="firstName" placeholder="Ej: Juan Carlos">
              </div>
              <div class="form-group">
                <label>Apellido(s)</label>
                <input type="text" id="lastName" placeholder="Ej: García López">
              </div>
              <div class="form-group">
                <label>Fecha de nacimiento</label>
                <input type="date" id="dob">
              </div>
              <div class="form-group">
                <label>Género</label>
                <select id="gender">
                  <option value="">Seleccionar</option>
                  <option>Masculino</option>
                  <option>Femenino</option>
                  <option>Otro</option>
                </select>
              </div>
              <div class="form-group">
                <label>Número de pasaporte / ID</label>
                <input type="text" id="passport" placeholder="Ej: AB123456">
              </div>
              <div class="form-group">
                <label>Nacionalidad</label>
                <select id="nationality">
                  <option value="">Seleccionar</option>
                  <option>México</option>
                  <option>Colombia</option>
                  <option>Argentina</option>
                  <option>España</option>
                  <option>Estados Unidos</option>
                  <option>Venezuela</option>
                  <option>Perú</option>
                  <option>Chile</option>
                  <option>Ecuador</option>
                  <option>Guatemala</option>
                  <option>Cuba</option>
                  <option>Bolivia</option>
                  <option>República Dominicana</option>
                  <option>Honduras</option>
                  <option>Paraguay</option>
                  <option>El Salvador</option>
                  <option>Nicaragua</option>
                  <option>Costa Rica</option>
                  <option>Panamá</option>
                  <option>Uruguay</option>
                  <option>Otro</option>
                </select>
              </div>
              <div class="form-group full">
                <label>Correo electrónico</label>
                <input type="email" id="email" placeholder="correo@ejemplo.com">
              </div>
              <div class="form-group full">
                <label>Teléfono de contacto</label>
                <input type="tel" id="phone" placeholder="+1 555 000 0000">
              </div>
            </div>
          </div>

          <!-- Contact preferences -->
          <div class="form-card">
            <h3><i class="fa-solid fa-bell"></i> Preferencias de contacto</h3>
            <div class="form-grid">
              <div class="form-group full">
                <label>¿Cómo prefieres recibir tu confirmación?</label>
                <select id="contactPref">
                  <option value="email">Correo electrónico</option>
                  <option value="phone">Llamada telefónica</option>
                  <option value="both">Ambos</option>
                </select>
              </div>
              <div class="form-group full">
                <label>Solicitudes especiales (opcional)</label>
                <input type="text" id="special" placeholder="Ej: silla de ruedas, comida especial...">
              </div>
            </div>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="booking-sidebar">
          <div class="price-card">
            <h3>Resumen de precio</h3>
            <div class="price-row"><span>Tarifa base (1 pax)</span><strong id="priceBase">$--</strong></div>
            <div class="price-row"><span>Impuestos y tasas</span><strong id="priceTax">$--</strong></div>
            <div class="price-row"><span>Cargo por servicio</span><strong id="priceFee">$--</strong></div>
            <div class="price-total">
              <span>Total</span>
              <strong id="priceTotal">$--</strong>
            </div>
            <p class="price-note">Precio por persona. Incluye todos los impuestos y cargos aplicables.</p>
            <button class="continue-btn" id="continueBtn">
              Continuar al pago <i class="fa-solid fa-arrow-right"></i>
            </button>
            <div class="secure-badge"><i class="fa-solid fa-lock"></i> Pago 100% seguro y encriptado</div>
          </div>
        </div>
      </div>
    </main>

    <?php include('include/footer.php'); ?>
  </div>

  <script>
    document.getElementById('menu').addEventListener('click', () => document.getElementById('nav').classList.toggle('open'));
    document.querySelectorAll('.dropdown-toggle').forEach(t => t.addEventListener('click', e => {
      if (window.innerWidth <= 760) {
        e.preventDefault();
        t.parentElement.classList.toggle('open');
      }
    }));

    const params = new URLSearchParams(location.search);
    const origin = params.get('origin') || '';
    const dest = params.get('dest') || '';
    const depart = params.get('depart') || '';
    const ret = params.get('return') || '';
    const type = params.get('type') || '1';
    const airline = params.get('airline') || '';
    const price = parseFloat(params.get('price') || 0);
    const duration = params.get('duration') || '';
    const stops = parseInt(params.get('stops') || 0);
    const flight = params.get('flight') || '';

    // Fill summary
    document.getElementById('sumOrigin').textContent = origin;
    document.getElementById('sumDest').textContent = dest;
    document.getElementById('sumDuration').textContent = duration || '--';
    document.getElementById('sumStops').textContent = stops === 0 ? 'Directo' : stops + ' escala' + (stops > 1 ? 's' : '');
    document.getElementById('sumAirline').textContent = airline + (flight ? ' · ' + flight : '');
    document.getElementById('sumDepart').textContent = depart;
    document.getElementById('sumType').textContent = type == 1 ? 'Ida y vuelta' : 'Solo ida';
    if (ret) {
      document.getElementById('sumReturn').textContent = ret;
    } else {
      document.getElementById('sumReturnWrap').style.display = 'none';
    }

    // Price breakdown
    const tax = Math.round(price * 0.12);
    const fee = 35;
    const total = price + tax + fee;
    document.getElementById('priceBase').textContent = '$' + price.toFixed(2);
    document.getElementById('priceTax').textContent = '$' + tax.toFixed(2);
    document.getElementById('priceFee').textContent = '$' + fee.toFixed(2);
    document.getElementById('priceTotal').textContent = '$' + total.toFixed(2);

    // Continue button
    document.getElementById('continueBtn').addEventListener('click', function() {
      const fields = ['firstName', 'lastName', 'dob', 'gender', 'passport', 'nationality', 'email', 'phone'];
      let valid = true;
      fields.forEach(id => {
        const el = document.getElementById(id);
        if (!el.value.trim()) {
          el.classList.add('error');
          valid = false;
        } else el.classList.remove('error');
      });
      if (!valid) {
        alert('Por favor completa todos los campos obligatorios.');
        return;
      }
      const pax = {
        firstName: document.getElementById('firstName').value,
        lastName: document.getElementById('lastName').value,
        dob: document.getElementById('dob').value,
        gender: document.getElementById('gender').value,
        passport: document.getElementById('passport').value,
        nationality: document.getElementById('nationality').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        special: document.getElementById('special').value,
        contactPref: document.getElementById('contactPref').value
      };
      sessionStorage.setItem('pax', JSON.stringify(pax));
      const nextUrl = 'pago.html?' + location.search.slice(1) + '&total=' + total.toFixed(2);
      window.location.href = nextUrl;
    });
  </script>
</body>

</html>