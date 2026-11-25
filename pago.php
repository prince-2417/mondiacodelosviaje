<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pago | Mondiaco de los Viajes</title>
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

    .booking-layout {
      display: grid;
      grid-template-columns: 1fr 360px;
      gap: 28px;
      padding: 36px 0 80px;
    }

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

    .form-group input.error {
      border-color: #e05252;
    }

    /* Payment method tabs */
    .pay-methods {
      display: flex;
      gap: 10px;
      margin-bottom: 24px;
      flex-wrap: wrap;
    }

    .pay-method {
      flex: 1;
      min-width: 120px;
      border: 2px solid #dde3e9;
      border-radius: 6px;
      padding: 14px 16px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 13px;
      font-weight: 700;
      color: #66758a;
      transition: all .2s;
    }

    .pay-method.active {
      border-color: var(--gold);
      color: var(--navy);
      background: #fffbf3;
    }

    .pay-method i {
      font-size: 18px;
    }

    .pay-method.active i {
      color: var(--gold);
    }

    /* Card input styling */
    .card-number-wrap {
      position: relative;
    }

    .card-number-wrap input {
      padding-right: 120px;
    }

    .card-number-wrap .card-icons {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      display: flex;
      gap: 6px;
      align-items: center;
    }

    .card-number-wrap .card-icons img {
      height: 24px;
      width: auto;
      object-fit: contain;
      border-radius: 3px;
      opacity: 0.25;
      transition: opacity .2s, transform .2s;
    }

    .card-number-wrap .card-icons img.active {
      opacity: 1;
      transform: scale(1.12);
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

    .pax-summary {
      background: #f7f9fb;
      border-radius: 4px;
      padding: 14px 16px;
      margin-bottom: 18px;
      font-size: 13px;
    }

    .pax-summary strong {
      display: block;
      color: var(--navy);
      margin-bottom: 4px;
    }

    .pax-summary span {
      color: #66758a;
    }

    .pay-btn {
      width: 100%;
      height: 54px;
      background: var(--gold);
      color: var(--navy);
      border: 0;
      border-radius: 4px;
      font-size: 15px;
      font-weight: 800;
      cursor: pointer;
      margin-top: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

    .pay-btn:hover {
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

    .terms-note {
      font-size: 11px;
      color: #8490a0;
      margin-top: 12px;
      line-height: 1.6;
      text-align: center;
    }

    .terms-note a {
      color: var(--gold);
    }

    /* Phone payment option */
    .phone-pay-box {
      background: #f7f9fb;
      border: 1px solid #dde3e9;
      border-radius: 6px;
      padding: 28px;
      text-align: center;
      display: none;
    }

    .phone-pay-box.show {
      display: block;
    }

    .phone-pay-box i {
      font-size: 40px;
      color: var(--gold);
      margin-bottom: 16px;
      display: block;
    }

    .phone-pay-box h4 {
      font-family: Manrope, sans-serif;
      font-size: 20px;
      margin: 0 0 10px;
    }

    .phone-pay-box p {
      color: #66758a;
      font-size: 14px;
      margin: 0 0 20px;
      line-height: 1.6;
    }

    .phone-pay-box a {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: var(--gold);
      color: var(--navy);
      border-radius: 4px;
      padding: 14px 28px;
      font-weight: 800;
      text-decoration: none;
      font-size: 15px;
    }

    .phone-pay-box a:hover {
      background: #c9a05a;
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

      .pay-methods {
        flex-direction: column;
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
          <a href="javascript:history.go(-2)">Resultados</a> <i class="fa-solid fa-chevron-right" style="font-size:9px"></i>
          <a href="javascript:history.back()">Pasajeros</a> <i class="fa-solid fa-chevron-right" style="font-size:9px"></i>
          <span>Pago</span>
        </div>
        <h1>Información de pago</h1>
        <p>Completa tu reserva de forma segura</p>
      </div>
    </div>

    <div class="booking-steps">
      <div class="booking-steps-inner">
        <div class="booking-step done"><span class="step-num"><i class="fa-solid fa-check" style="font-size:10px"></i></span> Selección</div>
        <div class="booking-step done"><span class="step-num"><i class="fa-solid fa-check" style="font-size:10px"></i></span> Pasajeros</div>
        <div class="booking-step active"><span class="step-num">3</span> Pago</div>
        <div class="booking-step"><span class="step-num">4</span> Confirmación</div>
      </div>
    </div>

    <main>
      <div class="section booking-layout">
        <div class="booking-main">
          <!-- Payment method -->
          <div class="form-card">
            <h3><i class="fa-solid fa-credit-card"></i> Método de pago</h3>
            <div class="pay-methods">
              <div class="pay-method active" data-method="card">
                <i class="fa-solid fa-credit-card"></i> Tarjeta de crédito/débito
              </div>
              <div class="pay-method" data-method="phone">
                <i class="fa-solid fa-phone"></i> Pagar por teléfono
              </div>
            </div>

            <!-- Card form -->
            <div id="cardForm">
              <div class="form-grid">
                <div class="form-group full">
                  <label>Nombre en la tarjeta</label>
                  <input type="text" id="cardName" placeholder="Ej: JUAN C GARCIA">
                </div>
                <div class="form-group full">
                  <label>Número de tarjeta</label>
                  <div class="card-number-wrap">
                    <input type="text" id="cardNumber" placeholder="0000 0000 0000 0000" maxlength="19">
                    <div class="card-icons">
                      <img id="cardImgVisa" src="https://mondiacodelosviaje.com/image/footer/visa.png" alt="Visa">
                      <img id="cardImgMC" src="https://mondiacodelosviaje.com/image/footer/master-card.png" alt="Mastercard">
                      <img id="cardImgAmex" src="https://mondiacodelosviaje.com/image/footer/amerrican-express.png" alt="Amex">
                      <img id="cardImgDiscover" src="https://mondiacodelosviaje.com/image/footer/discover.png" alt="Discover">
                      <img id="cardImgDiners" src="https://mondiacodelosviaje.com/image/footer/Diners_Club_International_Icon.png" alt="Diners">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Fecha de vencimiento</label>
                  <input type="text" id="cardExpiry" placeholder="MM/AA" maxlength="5">
                </div>
                <div class="form-group">
                  <label>CVV / CVC</label>
                  <input type="text" id="cardCvv" placeholder="123" maxlength="4">
                </div>
              </div>
            </div>

            <!-- Phone payment -->
            <div class="phone-pay-box" id="phonePayBox">
              <i class="fa-solid fa-headset"></i>
              <h4>Reserva por teléfono</h4>
              <p>Uno de nuestros agentes te ayudará a completar tu reserva de forma segura y personalizada. Tenemos disponibilidad 24/7.</p>
              <a href="tel:18883707045"><i class="fa-solid fa-phone"></i> 1-888-370-7045</a>
            </div>
          </div>

          <!-- Billing address -->
          <div class="form-card" id="billingCard">
            <h3><i class="fa-solid fa-location-dot"></i> Dirección de facturación</h3>
            <div class="form-grid">
              <div class="form-group full">
                <label>Dirección</label>
                <input type="text" id="address" placeholder="Calle y número">
              </div>
              <div class="form-group">
                <label>Ciudad</label>
                <input type="text" id="city" placeholder="Ciudad">
              </div>
              <div class="form-group">
                <label>Código postal</label>
                <input type="text" id="zip" placeholder="00000">
              </div>
              <div class="form-group full">
                <label>País</label>
                <select id="country">
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
                  <option>Otro</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="booking-sidebar">
          <div class="price-card">
            <h3>Resumen de reserva</h3>
            <div class="pax-summary" id="paxSummary">
              <strong id="paxName">--</strong>
              <span id="paxEmail">--</span>
            </div>
            <div class="price-row"><span id="routeLabel">Vuelo</span><strong id="priceBase">$--</strong></div>
            <div class="price-row"><span>Impuestos y tasas</span><strong id="priceTax">$--</strong></div>
            <div class="price-row"><span>Cargo por servicio</span><strong id="priceFee">$35.00</strong></div>
            <div class="price-total">
              <span>Total a pagar</span>
              <strong id="priceTotal">$--</strong>
            </div>
            <p class="price-note">Precio final. No hay cargos ocultos.</p>
            <button class="pay-btn" id="payBtn">
              <i class="fa-solid fa-lock"></i> Confirmar y pagar
            </button>
            <div class="secure-badge"><i class="fa-solid fa-shield-halved"></i> Transacción segura SSL</div>
            <p class="terms-note">Al continuar aceptas nuestros <a href="/términos-y-condiciones">Términos y Condiciones</a> y <a href="/política-de-privacidad">Política de Privacidad</a>.</p>
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
    const total = parseFloat(params.get('total') || 0);
    const tax = Math.round(price * 0.12);

    document.getElementById('routeLabel').textContent = origin + ' → ' + dest + ' · ' + airline;
    document.getElementById('priceBase').textContent = '$' + price.toFixed(2);
    document.getElementById('priceTax').textContent = '$' + tax.toFixed(2);
    document.getElementById('priceTotal').textContent = '$' + (total || price + tax + 35).toFixed(2);

    // Passenger data from session
    const pax = JSON.parse(sessionStorage.getItem('pax') || '{}');
    if (pax.firstName) {
      document.getElementById('paxName').textContent = pax.firstName + ' ' + pax.lastName;
      document.getElementById('paxEmail').textContent = pax.email || '';
    }

    // Payment method toggle
    document.querySelectorAll('.pay-method').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.pay-method').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        const method = this.dataset.method;
        document.getElementById('cardForm').style.display = method === 'card' ? '' : 'none';
        document.getElementById('billingCard').style.display = method === 'card' ? '' : 'none';
        document.getElementById('phonePayBox').classList.toggle('show', method === 'phone');
        document.getElementById('payBtn').style.display = method === 'card' ? '' : 'none';
      });
    });

    // Card type detection
    const cardImgs = {
      visa: document.getElementById('cardImgVisa'),
      mastercard: document.getElementById('cardImgMC'),
      amex: document.getElementById('cardImgAmex'),
      discover: document.getElementById('cardImgDiscover'),
      diners: document.getElementById('cardImgDiners'),
    };

    function detectCard(num) {
      if (/^4/.test(num)) return 'visa';
      if (/^5[1-5]/.test(num) || /^2[2-7]/.test(num)) return 'mastercard';
      if (/^3[47]/.test(num)) return 'amex';
      if (/^6(?:011|5)/.test(num)) return 'discover';
      if (/^3(?:0[0-5]|[68])/.test(num)) return 'diners';
      return null;
    }

    function updateCardIcons(type) {
      Object.entries(cardImgs).forEach(([k, img]) => {
        if (img) img.classList.toggle('active', k === type);
      });
    }
    document.getElementById('cardNumber').addEventListener('input', function() {
      let v = this.value.replace(/\D/g, '').slice(0, 16);
      this.value = v.replace(/(.{4})/g, '$1 ').trim();
      updateCardIcons(v.length >= 2 ? detectCard(v) : null);
    });
    document.getElementById('cardExpiry').addEventListener('input', function() {
      let v = this.value.replace(/\D/g, '').slice(0, 4);
      if (v.length >= 3) v = v.slice(0, 2) + '/' + v.slice(2);
      this.value = v;
    });

    // Pay button
    document.getElementById('payBtn').addEventListener('click', function() {
      const fields = ['cardName', 'cardNumber', 'cardExpiry', 'cardCvv', 'address', 'city', 'zip', 'country'];
      let valid = true;
      fields.forEach(id => {
        const el = document.getElementById(id);
        if (!el.value.trim()) {
          el.classList.add('error');
          valid = false;
        } else el.classList.remove('error');
      });
      if (!valid) {
        alert('Por favor completa todos los campos de pago.');
        return;
      }
      // Generate booking ref
      const ref = 'MDV-' + Date.now().toString(36).toUpperCase().slice(-6);
      sessionStorage.setItem('bookingRef', ref);
      sessionStorage.setItem('bookingTotal', (total || price + tax + 35).toFixed(2));
      window.location.href = 'confirmacion-reserva.html?' + location.search.slice(1);
    });
  </script>
</body>

</html>