<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmación de Reserva | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="./styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <style>
    .confirm-hero {
      background: linear-gradient(90deg, #081b33f0 0%, #081b33b0 60%, #081b3340 100%), url(https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=1800&q=85) 50% 55%/cover no-repeat;
      padding: 48px 0;
      color: #fff;
    }

    .confirm-hero-inner {
      width: 89%;
      max-width: 1280px;
      margin: 0 auto;
    }

    .confirm-hero-inner h1 {
      font-family: Manrope, sans-serif;
      font-size: clamp(28px, 3vw, 42px);
      margin: 0 0 8px;
      letter-spacing: -1px;
    }

    .confirm-hero-inner p {
      color: #c9d3e0;
      font-size: 14px;
      margin: 0;
    }

    .booking-steps {
      background: #fff;
      border-bottom: 1px solid #edf0f3;
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

    .confirm-layout {
      padding: 48px 0 80px;
    }

    /* Success banner */
    .success-banner {
      background: linear-gradient(135deg, #1a7a4a 0%, #2e9e6b 100%);
      border-radius: 8px;
      padding: 36px 40px;
      color: #fff;
      display: flex;
      align-items: center;
      gap: 28px;
      margin-bottom: 28px;
    }

    .success-icon {
      width: 72px;
      height: 72px;
      background: rgba(255, 255, 255, .2);
      border-radius: 50%;
      display: grid;
      place-items: center;
      flex-shrink: 0;
    }

    .success-icon i {
      font-size: 32px;
    }

    .success-text h2 {
      font-family: Manrope, sans-serif;
      font-size: clamp(22px, 3vw, 30px);
      margin: 0 0 8px;
    }

    .success-text p {
      margin: 0;
      opacity: .9;
      font-size: 14px;
      line-height: 1.6;
    }

    .booking-ref {
      background: rgba(255, 255, 255, .15);
      border-radius: 4px;
      padding: 8px 16px;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      margin-top: 14px;
      font-size: 13px;
    }

    .booking-ref strong {
      font-family: Manrope, sans-serif;
      font-size: 18px;
      letter-spacing: 2px;
    }

    .confirm-grid {
      display: grid;
      grid-template-columns: 1fr 360px;
      gap: 28px;
    }

    /* Detail cards */
    .detail-card {
      background: #fff;
      border: 1px solid #dde3e9;
      border-radius: 6px;
      padding: 28px;
      margin-bottom: 20px;
    }

    .detail-card h3 {
      font-family: Manrope, sans-serif;
      font-size: 15px;
      margin: 0 0 20px;
      padding-bottom: 14px;
      border-bottom: 1px solid #edf0f3;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .detail-card h3 i {
      color: var(--gold);
    }

    .flight-confirm-route {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-bottom: 24px;
    }

    .fca {
      text-align: center;
    }

    .fca strong {
      display: block;
      font-family: Manrope, sans-serif;
      font-size: 28px;
      color: var(--navy);
    }

    .fca span {
      font-size: 12px;
      color: #8490a0;
    }

    .fc-line {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
    }

    .fc-line .fc-dur {
      font-size: 12px;
      color: #8490a0;
    }

    .fc-line .fc-bar {
      width: 100%;
      height: 1px;
      background: #c9d3e0;
      position: relative;
    }

    .fc-line .fc-bar:before,
    .fc-line .fc-bar:after {
      content: '';
      position: absolute;
      top: -3px;
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: #c9d3e0;
    }

    .fc-line .fc-bar:before {
      left: 0;
    }

    .fc-line .fc-bar:after {
      right: 0;
    }

    .fc-line .fc-plane {
      color: var(--gold);
      font-size: 16px;
    }

    .fc-line .fc-stops {
      font-size: 11px;
      color: #8490a0;
    }

    .detail-rows {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }

    .detail-row {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }

    .detail-row small {
      font-size: 10px;
      color: #8490a0;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .detail-row strong {
      font-size: 14px;
      color: var(--navy);
    }

    .pax-row {
      display: flex;
      align-items: center;
      gap: 16px;
      padding: 14px 0;
      border-bottom: 1px solid #edf0f3;
    }

    .pax-row:last-child {
      border-bottom: 0;
    }

    .pax-avatar {
      width: 42px;
      height: 42px;
      background: #eef2f6;
      border-radius: 50%;
      display: grid;
      place-items: center;
      color: var(--navy);
      flex-shrink: 0;
    }

    .pax-info strong {
      display: block;
      font-size: 14px;
      color: var(--navy);
    }

    .pax-info span {
      font-size: 12px;
      color: #8490a0;
    }

    /* Price summary sidebar */
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

    /* Next steps */
    .next-steps {
      background: #fff;
      border: 1px solid #dde3e9;
      border-radius: 6px;
      padding: 24px;
      margin-top: 0;
    }

    .next-steps h3 {
      font-family: Manrope, sans-serif;
      font-size: 15px;
      margin: 0 0 18px;
    }

    .next-step-item {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      margin-bottom: 16px;
    }

    .next-step-item:last-child {
      margin-bottom: 0;
    }

    .ns-icon {
      width: 38px;
      height: 38px;
      background: #eef2f6;
      border-radius: 50%;
      display: grid;
      place-items: center;
      color: var(--navy);
      flex-shrink: 0;
      font-size: 14px;
    }

    .ns-text strong {
      display: block;
      font-size: 13px;
      color: var(--navy);
      margin-bottom: 3px;
    }

    .ns-text span {
      font-size: 12px;
      color: #8490a0;
      line-height: 1.5;
    }

    .action-btns {
      display: flex;
      gap: 12px;
      margin-top: 20px;
      flex-wrap: wrap;
    }

    .btn-primary {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: var(--navy);
      color: #fff;
      border-radius: 4px;
      padding: 12px 22px;
      font-size: 13px;
      font-weight: 800;
      text-decoration: none;
      border: 0;
      cursor: pointer;
    }

    .btn-primary:hover {
      background: #102d50;
    }

    .btn-outline {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #fff;
      color: var(--navy);
      border: 1px solid #dde3e9;
      border-radius: 4px;
      padding: 12px 22px;
      font-size: 13px;
      font-weight: 700;
      text-decoration: none;
      cursor: pointer;
    }

    .btn-outline:hover {
      border-color: var(--gold);
    }

    @media (max-width: 900px) {
      .confirm-grid {
        grid-template-columns: 1fr;
      }

      .price-card {
        position: static;
      }
    }

    @media (max-width: 760px) {
      .success-banner {
        flex-direction: column;
        text-align: center;
        padding: 28px 20px;
      }

      .booking-steps-inner {
        overflow-x: auto;
      }

      .booking-step {
        padding: 14px 16px 14px 0;
        white-space: nowrap;
        font-size: 12px;
      }

      .detail-rows {
        grid-template-columns: 1fr;
      }

      .flight-confirm-route {
        gap: 12px;
      }

      .fca strong {
        font-size: 22px;
      }
    }
  </style>
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <div class="confirm-hero">
      <div class="confirm-hero-inner">
        <h1>¡Reserva confirmada!</h1>
        <p>Tu vuelo ha sido reservado exitosamente</p>
      </div>
    </div>

    <div class="booking-steps">
      <div class="booking-steps-inner">
        <div class="booking-step done"><span class="step-num"><i class="fa-solid fa-check" style="font-size:10px"></i></span> Selección</div>
        <div class="booking-step done"><span class="step-num"><i class="fa-solid fa-check" style="font-size:10px"></i></span> Pasajeros</div>
        <div class="booking-step done"><span class="step-num"><i class="fa-solid fa-check" style="font-size:10px"></i></span> Pago</div>
        <div class="booking-step active"><span class="step-num">4</span> Confirmación</div>
      </div>
    </div>

    <main>
      <div class="section confirm-layout">
        <!-- Success banner -->
        <div class="success-banner">
          <div class="success-icon"><i class="fa-solid fa-circle-check"></i></div>
          <div class="success-text">
            <h2>¡Tu reserva fue confirmada!</h2>
            <p>Hemos recibido tu reserva y un agente se pondrá en contacto contigo para finalizar los detalles. Recibirás un correo de confirmación en breve.</p>
            <div class="booking-ref">
              <i class="fa-solid fa-ticket"></i>
              <span>Número de reserva:</span>
              <strong id="bookingRef">MDV-XXXXXX</strong>
            </div>
          </div>
        </div>

        <div class="confirm-grid">
          <div>
            <!-- Flight details -->
            <div class="detail-card">
              <h3><i class="fa-solid fa-plane"></i> Detalles del vuelo</h3>
              <div class="flight-confirm-route">
                <div class="fca">
                  <strong id="fcOrigin">--</strong>
                  <span id="fcOriginLabel">Origen</span>
                </div>
                <div class="fc-line">
                  <span class="fc-dur" id="fcDuration">--</span>
                  <div class="fc-bar"></div>
                  <i class="fa-solid fa-plane fc-plane"></i>
                  <span class="fc-stops" id="fcStops">--</span>
                </div>
                <div class="fca">
                  <strong id="fcDest">--</strong>
                  <span id="fcDestLabel">Destino</span>
                </div>
              </div>
              <div class="detail-rows">
                <div class="detail-row"><small>Aerolínea</small><strong id="fcAirline">--</strong></div>
                <div class="detail-row"><small>Vuelo</small><strong id="fcFlight">--</strong></div>
                <div class="detail-row"><small>Fecha de salida</small><strong id="fcDepart">--</strong></div>
                <div class="detail-row" id="fcReturnWrap"><small>Fecha de regreso</small><strong id="fcReturn">--</strong></div>
                <div class="detail-row"><small>Tipo de viaje</small><strong id="fcType">--</strong></div>
                <div class="detail-row"><small>Estado</small><strong style="color:#2e9e6b"><i class="fa-solid fa-circle-check"></i> Confirmado</strong></div>
              </div>
            </div>

            <!-- Passenger details -->
            <div class="detail-card">
              <h3><i class="fa-solid fa-users"></i> Pasajeros</h3>
              <div id="paxList">
                <div class="pax-row">
                  <div class="pax-avatar"><i class="fa-solid fa-user"></i></div>
                  <div class="pax-info">
                    <strong id="paxFullName">--</strong>
                    <span id="paxPassport">--</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Next steps -->
            <div class="detail-card">
              <h3><i class="fa-solid fa-list-check"></i> Próximos pasos</h3>
              <div class="next-step-item">
                <div class="ns-icon"><i class="fa-solid fa-envelope"></i></div>
                <div class="ns-text">
                  <strong>Correo de confirmación</strong>
                  <span>Recibirás un correo con todos los detalles de tu reserva en los próximos minutos.</span>
                </div>
              </div>
              <div class="next-step-item">
                <div class="ns-icon"><i class="fa-solid fa-phone"></i></div>
                <div class="ns-text">
                  <strong>Llamada de nuestro agente</strong>
                  <span>Un agente de Mondiaco de los Viajes te contactará para confirmar y finalizar tu reserva.</span>
                </div>
              </div>
              <div class="next-step-item">
                <div class="ns-icon"><i class="fa-solid fa-ticket"></i></div>
                <div class="ns-text">
                  <strong>Emisión de boletos</strong>
                  <span>Una vez confirmado el pago, recibirás tus boletos electrónicos por correo.</span>
                </div>
              </div>
              <div class="next-step-item">
                <div class="ns-icon"><i class="fa-solid fa-plane-departure"></i></div>
                <div class="ns-text">
                  <strong>Check-in online</strong>
                  <span>Recuerda hacer tu check-in 24-48 horas antes de tu vuelo directamente con la aerolínea.</span>
                </div>
              </div>
              <div class="action-btns">
                <button class="btn-primary" onclick="window.print()"><i class="fa-solid fa-print"></i> Imprimir confirmación</button>
                <a class="btn-outline" href="/"><i class="fa-solid fa-house"></i> Volver al inicio</a>
                <a class="btn-outline" href="tel:18883707045"><i class="fa-solid fa-phone"></i> Llamar a soporte</a>
              </div>
            </div>
          </div>

          <!-- Sidebar -->
          <div>
            <div class="price-card">
              <h3>Resumen de pago</h3>
              <div class="price-row"><span>Tarifa base</span><strong id="priceBase">$--</strong></div>
              <div class="price-row"><span>Impuestos y tasas</span><strong id="priceTax">$--</strong></div>
              <div class="price-row"><span>Cargo por servicio</span><strong id="priceFee">$35.00</strong></div>
              <div class="price-total">
                <span>Total pagado</span>
                <strong id="priceTotal">$--</strong>
              </div>
              <div style="margin-top:18px;padding-top:16px;border-top:1px solid #edf0f3;">
                <div class="price-row"><span>Estado del pago</span><strong style="color:#2e9e6b"><i class="fa-solid fa-circle-check"></i> Procesado</strong></div>
                <div class="price-row"><span>Número de reserva</span><strong id="refSmall" style="font-size:12px;letter-spacing:1px">--</strong></div>
              </div>
            </div>

            <div class="next-steps" style="margin-top:20px">
              <h3>¿Necesitas ayuda?</h3>
              <div class="next-step-item">
                <div class="ns-icon"><i class="fa-solid fa-headset"></i></div>
                <div class="ns-text">
                  <strong>Soporte 24/7</strong>
                  <span>Llámanos en cualquier momento para asistencia con tu reserva.</span>
                </div>
              </div>
              <div style="margin-top:16px">
                <a href="tel:18883707045" style="display:flex;align-items:center;gap:10px;background:var(--gold);color:var(--navy);border-radius:4px;padding:14px 18px;font-weight:800;text-decoration:none;font-size:14px;justify-content:center">
                  <i class="fa-solid fa-phone"></i> 1-888-370-7045
                </a>
              </div>
            </div>
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
    const total = parseFloat(params.get('total') || 0);
    const tax = Math.round(price * 0.12);

    // Booking ref
    const ref = sessionStorage.getItem('bookingRef') || ('MDV-' + Date.now().toString(36).toUpperCase().slice(-6));
    document.getElementById('bookingRef').textContent = ref;
    document.getElementById('refSmall').textContent = ref;

    // Flight details
    document.getElementById('fcOrigin').textContent = origin;
    document.getElementById('fcDest').textContent = dest;
    document.getElementById('fcDuration').textContent = duration || '--';
    document.getElementById('fcStops').textContent = stops === 0 ? 'Directo' : stops + ' escala' + (stops > 1 ? 's' : '');
    document.getElementById('fcAirline').textContent = airline;
    document.getElementById('fcFlight').textContent = flight || '--';
    document.getElementById('fcDepart').textContent = depart;
    document.getElementById('fcType').textContent = type == 1 ? 'Ida y vuelta' : 'Solo ida';
    if (ret) {
      document.getElementById('fcReturn').textContent = ret;
    } else {
      document.getElementById('fcReturnWrap').style.display = 'none';
    }

    // Passenger
    const pax = JSON.parse(sessionStorage.getItem('pax') || '{}');
    if (pax.firstName) {
      document.getElementById('paxFullName').textContent = pax.firstName + ' ' + pax.lastName;
      document.getElementById('paxPassport').textContent = 'Pasaporte: ' + (pax.passport || '--') + ' · ' + (pax.nationality || '');
    }

    // Price
    document.getElementById('priceBase').textContent = '$' + price.toFixed(2);
    document.getElementById('priceTax').textContent = '$' + tax.toFixed(2);
    document.getElementById('priceTotal').textContent = '$' + (total || price + tax + 35).toFixed(2);
  </script>
</body>

</html>