<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atención al Cliente | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="./styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <style>
    .support-cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; margin-bottom: 60px; }
    .support-card { background: #fff; border: 1px solid #dde3e9; border-radius: 8px; padding: 32px 28px; text-align: center; transition: box-shadow .2s; }
    .support-card:hover { box-shadow: 0 12px 32px #081b3314; }
    .support-card-icon { width: 60px; height: 60px; background: var(--navy); color: var(--gold); border-radius: 50%; display: grid; place-items: center; margin: 0 auto 18px; font-size: 22px; }
    .support-card h3 { margin: 0 0 8px; font-family: Manrope, sans-serif; font-size: 18px; color: var(--navy); }
    .support-card p { color: #68758a; font-size: 14px; line-height: 1.6; margin: 0 0 16px; }
    .support-card a.card-btn { display: inline-flex; align-items: center; gap: 8px; background: var(--navy); color: #fff; border-radius: 4px; padding: 0 18px; height: 40px; font-size: 13px; font-weight: 700; text-decoration: none; transition: background .15s; }
    .support-card a.card-btn:hover { background: #102d50; }
    .support-card a.card-btn.gold { background: var(--gold); color: var(--navy); }
    .support-card a.card-btn.gold:hover { background: #c9a05a; }

    .faq-support { display: grid; grid-template-columns: .75fr 1.25fr; gap: 10%; padding-bottom: 80px; }
    .faq-support-heading h2 { letter-spacing: -2px; margin: 0; font-family: Manrope, sans-serif; font-size: clamp(32px, 4vw, 44px); line-height: 1.12; }
    .faq-support-heading p { color: #68758a; margin: 14px 0 0; font-size: 15px; line-height: 1.7; }

    .hours-band { background: #f1f4f7; border-top: 1px solid #edf0f3; border-bottom: 1px solid #edf0f3; padding: 60px 0; margin-bottom: 80px; }
    .hours-inner { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; width: 89%; max-width: 1280px; margin: 0 auto; }
    .hours-item { background: #fff; border: 1px solid #dde3e9; border-radius: 6px; padding: 24px 20px; }
    .hours-item span { display: block; color: var(--gold); font-size: 11px; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 8px; }
    .hours-item strong { display: block; color: var(--navy); font-family: Manrope, sans-serif; font-size: 16px; margin-bottom: 4px; }
    .hours-item p { color: #68758a; font-size: 13px; margin: 0; line-height: 1.5; }

    .query-box { background: #f1f4f7; border: 1px solid #dde3e9; border-radius: 10px; padding: 32px; max-width: 900px; margin: 0 auto; }
    .query-box-icon { font-size: 28px; color: var(--navy); margin-bottom: 8px; display: block; }
    .query-box h3 { margin: 0 0 6px; font-family: Manrope, sans-serif; font-size: 22px; color: var(--navy); }
    .query-box > p { margin: 0 0 24px; color: #68758a; font-size: 14px; }
    .query-fields { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 14px; }
    .query-field { display: flex; flex-direction: column; gap: 6px; }
    .query-field label { font-size: 13px; font-weight: 600; color: #66758a; }
    .query-field input, .query-field textarea { border: 1px solid #dbe2e8; border-radius: 6px; padding: 12px; font-size: 14px; color: var(--navy); background: #fff; width: 100%; outline: none; }
    .query-field input { height: 48px; }
    .query-field textarea { height: 48px; resize: none; }
    .query-submit { width: 100%; height: 52px; background: var(--navy); color: #fff; border: 0; border-radius: 6px; font-size: 15px; font-weight: 800; cursor: pointer; margin-bottom: 14px; transition: background .15s; }
    .query-submit:hover { background: #102d50; }
    .query-contact-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
    .query-contact-card { display: flex; align-items: center; gap: 14px; background: #fff; border: 1px solid #dde3e9; border-radius: 6px; padding: 16px 20px; text-decoration: none; color: var(--navy); transition: box-shadow .15s; }
    .query-contact-card:hover { box-shadow: 0 6px 20px #081b3314; }
    .query-contact-card i { font-size: 20px; color: var(--navy); }
    .query-contact-card span { display: flex; flex-direction: column; }
    .query-contact-card strong { font-size: 14px; font-weight: 700; }
    .query-contact-card span:last-child { font-size: 13px; color: #68758a; }
    @media (max-width: 760px) { .query-fields, .query-contact-row { grid-template-columns: 1fr; } }

    .travel-info-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
    .travel-info-card { background: #fff; border: 1px solid #dde3e9; border-radius: 8px; padding: 28px 24px; transition: box-shadow .2s; }
    .travel-info-card:hover { box-shadow: 0 12px 32px #081b3314; }
    .travel-info-icon { width: 52px; height: 52px; background: var(--navy); color: var(--gold); border-radius: 50%; display: grid; place-items: center; margin-bottom: 16px; font-size: 20px; }
    .travel-info-tag { color: var(--gold); font-size: 10px; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; margin: 0 0 6px; }
    .travel-info-card h3 { margin: 0 0 8px; font-family: Manrope, sans-serif; font-size: 17px; color: var(--navy); }
    .travel-info-card p { color: #68758a; font-size: 13px; line-height: 1.6; margin: 0; }

    .inner-page-actions .gold-button,
    .inner-page-actions .primary-button { margin: 0; }

    @media (max-width: 760px) {
      .support-cards, .travel-info-grid { grid-template-columns: 1fr; }
      .faq-support { grid-template-columns: 1fr; gap: 30px; padding-bottom: 50px; }
      .hours-inner { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 480px) {
      .hours-inner { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>
  <div class="site">
   <?php include ('include/header.php'); ?>

    <main>
      <!-- Hero -->
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">ESTAMOS AQUÍ PARA TI</p>
          <h1>Atención al Cliente</h1>
          <p>Nuestro equipo está disponible para ayudarte con reservas, cambios, cancelaciones y cualquier consulta sobre tu viaje.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045"><i class="fa-solid fa-phone"></i> &nbsp; 1-888-370-7045</a>
            <a class="primary-button" href="mailto:support@mondiacodelosviajes.com">Escríbenos</a>
          </div>
        </div>
      </section>

      <!-- Travel Info Cards -->
      <section class="section" style="padding-top: 60px; padding-bottom: 60px;">
        <div style="text-align:center; margin-bottom: 36px;">
          <p class="section-kicker">INFORMACIÓN DE VIAJE</p>
          <h2 style="letter-spacing:-2px; margin:0; font-family:Manrope,sans-serif; font-size:clamp(32px,4vw,44px);">Todo lo que necesitas saber</h2>
        </div>
        <div class="travel-info-grid">
          <div class="travel-info-card">
            <div class="travel-info-icon"><i class="fa-solid fa-suitcase"></i></div>
            <p class="travel-info-tag">Equipaje</p>
            <h3>Baggage</h3>
            <p>Allowances, restrictions, and fees explained.</p>
          </div>
          <div class="travel-info-card">
            <div class="travel-info-icon"><i class="fa-solid fa-chair"></i></div>
            <p class="travel-info-tag">Seat selection</p>
            <h3>Seat Selection</h3>
            <p>Pick the right spot for your flight.</p>
          </div>
          <div class="travel-info-card">
            <div class="travel-info-icon"><i class="fa-solid fa-child-reaching"></i></div>
            <p class="travel-info-tag">Unaccompanied minor</p>
            <h3>UNMR</h3>
            <p>Safe travel for unaccompanied minors.</p>
          </div>
          <div class="travel-info-card">
            <div class="travel-info-icon"><i class="fa-solid fa-pen-to-square"></i></div>
            <p class="travel-info-tag">Flight changes</p>
            <h3>Flight Changes</h3>
            <p>Simple tweaks to your booking.</p>
          </div>
          <div class="travel-info-card">
            <div class="travel-info-icon"><i class="fa-solid fa-ban"></i></div>
            <p class="travel-info-tag">Cancellations</p>
            <h3>Cancellations</h3>
            <p>Flexible options when plans shift.</p>
          </div>
          <div class="travel-info-card">
            <div class="travel-info-icon"><i class="fa-solid fa-clipboard-check"></i></div>
            <p class="travel-info-tag">Check-in process</p>
            <h3>Check-in Process</h3>
            <p>An easy check-in for a smooth start.</p>
          </div>
        </div>
      </section>

      <!-- Hours -->
      <div class="hours-band">
        <div style="text-align:center; margin-bottom:32px; width:89%; max-width:1280px; margin-inline:auto;">
          <p class="section-kicker">DISPONIBILIDAD</p>
          <h2 style="letter-spacing:-2px; margin:0; font-family:Manrope,sans-serif; font-size:clamp(28px,3vw,38px);">Horarios de atención</h2>
        </div>
        <div class="hours-inner">
          <div class="hours-item">
            <span>Teléfono</span>
            <strong>Lunes – Viernes</strong>
            <p>8:00 AM – 10:00 PM EST</p>
          </div>
          <div class="hours-item">
            <span>Teléfono</span>
            <strong>Sábado – Domingo</strong>
            <p>9:00 AM – 7:00 PM EST</p>
          </div>
          <div class="hours-item">
            <span>Correo Electrónico</span>
            <strong>Todos los días</strong>
            <p>Respuesta en 24–48 horas</p>
          </div>
          <div class="hours-item">
            <span>Emergencias</span>
            <strong>24 / 7</strong>
            <p>Asistencia para viajeros en tránsito</p>
          </div>
        </div>
      </div>

      <!-- FAQ -->
      <section class="section faq-support">
        <div class="faq-support-heading">
          <p class="section-kicker">PREGUNTAS FRECUENTES</p>
          <h2>Respuestas rápidas</h2>
          <p>Encuentra respuestas a las preguntas más comunes sobre reservas, cambios y cancelaciones.</p>
        </div>
        <div class="faq-list">
          <article class="faq-item open">
            <button type="button">¿Cómo puedo modificar o cancelar mi reserva? <span>⌄</span></button>
            <p>Contáctanos por teléfono o correo electrónico con tu número de reserva y te ayudaremos a gestionar cualquier cambio o cancelación según las políticas aplicables.</p>
          </article>
          <article class="faq-item">
            <button type="button">¿Cuánto tiempo tarda en procesarse un reembolso? <span>⌄</span></button>
            <p>Los reembolsos se procesan en un plazo de 7 a 14 días hábiles, dependiendo de la aerolínea y el método de pago utilizado.</p>
          </article>
          <article class="faq-item">
            <button type="button">¿Puedo cambiar los nombres de los pasajeros? <span>⌄</span></button>
            <p>Los cambios de nombre dependen de la política de cada aerolínea. Contáctanos lo antes posible para evaluar las opciones disponibles.</p>
          </article>
          <article class="faq-item">
            <button type="button">¿Qué hago si pierdo mi vuelo? <span>⌄</span></button>
            <p>Comunícate de inmediato con nuestra línea de emergencias. Nuestro equipo te asistirá para encontrar la mejor solución disponible.</p>
          </article>
          <article class="faq-item">
            <button type="button">¿Cómo recibo mi confirmación de reserva? <span>⌄</span></button>
            <p>La confirmación se envía al correo electrónico proporcionado durante la reserva. Si no la recibes, contáctanos y te la reenviaremos.</p>
          </article>
        </div>
      </section>

      <!-- Contact Form -->
      <section class="section" id="contact-form" style="padding-bottom: 90px;">
        <div class="query-box">
          <i class="fa-regular fa-comment-dots query-box-icon"></i>
          <h3>For Other Query</h3>
          <p>Can't find your answer? Ask us directly and get a response within 24 hours.</p>
          <form class="query-form" id="queryForm">
            <div class="query-fields">
              <div class="query-field">
                <label>Your Email Address</label>
                <input type="email" name="email" placeholder="xyz@example.com" required>
              </div>
              <div class="query-field">
                <label>Your Question</label>
                <textarea name="question" placeholder="Describe your question" required></textarea>
              </div>
            </div>
            <button type="submit" class="query-submit">Submit Your Question</button>
          </form>
          <div class="query-contact-row">
            <a href="tel:18883707045" class="query-contact-card">
              <i class="fa-solid fa-phone"></i>
              <span><strong>Call Support</strong>1-888-370-7045</span>
            </a>
            <a href="mailto:support@mondiacodelosviajes.com" class="query-contact-card">
              <i class="fa-regular fa-envelope"></i>
              <span><strong>Email Us</strong>support@mondiacodelosviajes.com</span>
            </a>
          </div>
        </div>
      </section>

      <!-- CTA Band -->
      <section class="page-contact-band">
        <div>
          <p class="section-kicker">¿NECESITAS AYUDA INMEDIATA?</p>
          <h2>Nuestro equipo está listo para atenderte.</h2>
        </div>
        <a href="tel:18883707045">☎ &nbsp; 1-888-370-7045</a>
      </section>
    </main>

   <?php include ('include/footer.php'); ?>
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
    document.querySelectorAll('.faq-item > button').forEach(button => button.addEventListener('click', () => button.parentElement.classList.toggle('open')));
    document.getElementById('queryForm').addEventListener('submit', e => e.preventDefault());
  </script>
</body>
</html>
