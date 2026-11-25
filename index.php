<!doctype html>

<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mondiaco de los Viajes | Vuelos y destinos</title>
  <link rel="stylesheet" href="./styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <style>
    .travelers { position: relative; }
    .traveler-picker {
      display: none; position: absolute; top: calc(100% + 8px); left: 0;
      width: 240px; background: #fff; border: 1px solid #dde3e9;
      border-radius: 8px; box-shadow: 0 12px 32px #081b3322;
      padding: 16px; z-index: 200;
    }
    .traveler-picker.open { display: block; }
    .tp-row { display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px; }
    .tp-name { font-size: 14px; font-weight: 600; color: var(--navy); }
    .tp-counter { display: flex; align-items: center; gap: 12px; }
    .tp-counter span { font-size: 15px; font-weight: 700; color: var(--navy); min-width: 18px; text-align: center; }
    .tp-btn {
      width: 30px; height: 30px; border-radius: 50%;
      background: #081b33; color: #fff; border: 0;
      font-size: 16px; font-weight: 700; cursor: pointer;
      display: grid; place-items: center; line-height: 1;
      transition: background .15s;
    }
    .tp-btn:hover { background: #102d50; }
    .tp-btn:disabled { background: #dde3e9; color: #aab4c0; cursor: not-allowed; }
    .tp-clase { margin-bottom: 14px; }
    .tp-clase .tp-name { display: block; margin-bottom: 8px; }
    .tp-clase select {
      width: 100%; height: 38px; border: 1px solid #dde3e9; border-radius: 6px;
      padding: 0 10px; font-size: 13px; color: var(--navy); background: #fff;
      outline: none; cursor: pointer;
    }
    .tp-done {
      width: 100%; height: 40px; background: #081b33; color: #fff;
      border: 0; border-radius: 6px; font-size: 14px; font-weight: 800;
      cursor: pointer; transition: background .15s;
    }
    .tp-done:hover { background: #102d50; }
    @media (max-width: 760px) {
      .traveler-picker { left: auto; right: 0; }
    }
  </style></head>

<body>
  <div class="site">
        <?php include ('include/header.php'); ?>


    <main>
      <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
          <div class="hero-copy">
            <p class="eyebrow"><span></span> TU PRÓXIMO VIAJE EMPIEZA AQUÍ</p>
            <h1>El mundo está<br>más cerca de lo que<br><em>imaginas.</em></h1>
            <p class="hero-lead">Encuentra tus vuelos preferidos y tarifas diseñadas para llevarte a donde más deseas
              viajar.</p>

          </div>
          <form class="search-card" id="searchForm">
            <div class="trip-tabs">
              <button type="button" class="active" data-type="1">Ida y vuelta</button>
              <button type="button" data-type="2">Solo ida</button>
            </div>
            <div class="search-fields">
              <label class="field">
                <span class="field-icon"><i class="fa-solid fa-plane-departure"></i></span>
                <span>
                  <small>Origen</small>
                  <input type="text" id="originInput" placeholder="Nueva York" autocomplete="off">
                  <input type="hidden" id="originCode">
                  <div class="airport-dropdown" id="originDropdown"></div>
                </span>
              </label>
              <label class="field">
                <span class="field-icon"><i class="fa-solid fa-plane-arrival"></i></span>
                <span>
                  <small>¿A dónde vas?</small>
                  <input type="text" id="destInput" placeholder="Destino" autocomplete="off">
                  <input type="hidden" id="destCode">
                  <div class="airport-dropdown" id="destDropdown"></div>
                </span>
              </label>
              <label class="field">
                <span class="field-icon"><i class="fa-regular fa-calendar"></i></span>
                <span>
                  <small>Salida</small>
                  <input type="date" id="departDate">
                </span>
              </label>
              <label class="field" id="returnField">
                <span class="field-icon"><i class="fa-regular fa-calendar"></i></span>
                <span>
                  <small>Regreso</small>
                  <input type="date" id="returnDate">
                </span>
              </label>
              <div class="field travelers" id="travelerField" style="cursor:pointer">
                <span class="field-icon"><i class="fa-solid fa-user"></i></span>
                <span><small>Pasajeros</small><strong id="travelerLabel">1 pasajero | Económica</strong></span>
                <b style="font-size:11px;color:#9aa5b3">⌄</b>
                <!-- Picker popup -->
                <div class="traveler-picker" id="travelerPicker">
                  <div class="tp-row">
                    <span class="tp-name">Adultos</span>
                    <div class="tp-counter">
                      <button type="button" class="tp-btn" data-target="adults" data-action="-">−</button>
                      <span id="adultsVal">1</span>
                      <button type="button" class="tp-btn" data-target="adults" data-action="+">+</button>
                    </div>
                  </div>
                  <div class="tp-row">
                    <span class="tp-name">Niños</span>
                    <div class="tp-counter">
                      <button type="button" class="tp-btn" data-target="children" data-action="-">−</button>
                      <span id="childrenVal">0</span>
                      <button type="button" class="tp-btn" data-target="children" data-action="+">+</button>
                    </div>
                  </div>
                  <div class="tp-row">
                    <span class="tp-name">Bebés</span>
                    <div class="tp-counter">
                      <button type="button" class="tp-btn" data-target="babies" data-action="-">−</button>
                      <span id="babiesVal">0</span>
                      <button type="button" class="tp-btn" data-target="babies" data-action="+">+</button>
                    </div>
                  </div>
                  <div class="tp-clase">
                    <span class="tp-name">Clase</span>
                    <select id="cabinClass">
                      <option value="Económica">Económica</option>
                      <option value="Premium Económica">Premium Económica</option>
                      <option value="Business">Business</option>
                      <option value="Primera">Primera</option>
                    </select>
                  </div>
                  <button type="button" class="tp-done" id="travelerDone">Listo</button>
                </div>
              </div>
              <button class="search-button" type="submit" style="justify-content:center"><i class="fa-solid fa-magnifying-glass"></i> &nbsp; Buscar vuelos</button>
            </div>
            <div id="flightResults" class="flight-results"></div>
          </form>
        </div>
      </section>

      <section class="about-section" id="about">
        <div class="section about-section-inner">
          <div class="about-section-media">
            <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=1100&q=85"
              alt="Preparativos de viaje">
            <div class="about-section-years"><strong>24/7</strong><span>Atención<br>personalizada</span></div>
          </div>
          <div class="about-section-copy">
            <p class="section-kicker">EL MUNDO A TU MANERA</p>
            <h2>Sobre Mondiaco de los Viajes</h2>
            <p>Las agencias hacemos que descubrir el mundo sea una experiencia simple, segura y memorable. Creamos
              soluciones de viaje personalizadas con atención, tarifas competitivas y destinos inolvidables.</p>
            <div class="about-section-benefits">
              <div><span>●</span>
                <p><strong>Vigilando sistemas</strong><small>Seguimiento constante</small></p>
              </div>
              <div><span>◎</span>
                <p><strong>Personalización</strong><small>Soluciones hechas para ti</small></p>
              </div>
            </div>
            <a class="about-section-button" href="#">Conoce nuestra historia &nbsp; →</a>
          </div>
        </div>
      </section>

      <section class="section destinations" id="destinations">
        <div class="section-heading">
          <div>
            <p class="section-kicker">EXPLORA EL MUNDO</p>
            <h2>Destinos que inspiran</h2>
          </div>
          <a class="text-link" href="#">Ver todos →</a>
        </div>
        <div class="destination-grid">
          <article class="destination-card"><img
              src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=900&q=85"
              alt="Paris">
            <div class="card-shade"></div>
            <div class="card-content">
              <p>Francia</p>
              <h3>Paris</h3><a href="#">→</a>
            </div>
          </article>
          <article class="destination-card"><img
              src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=900&q=85"
              alt="Dubai">
            <div class="card-shade"></div>
            <div class="card-content">
              <p>Emiratos Árabes</p>
              <h3>Dubai</h3><a href="#">→</a>
            </div>
          </article>
          <article class="destination-card"><img
              src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?auto=format&fit=crop&w=900&q=85"
              alt="Tokio">
            <div class="card-shade"></div>
            <div class="card-content">
              <p>Japón</p>
              <h3>Tokio</h3><a href="#">→</a>
            </div>
          </article>
          <article class="destination-card"><img
              src="https://images.unsplash.com/photo-1522083165195-3424ed129620?auto=format&fit=crop&w=900&q=85"
              alt="Nueva York">
            <div class="card-shade"></div>
            <div class="card-content">
              <p>Estados Unidos</p>
              <h3>Nueva York</h3><a href="#">→</a>
            </div>
          </article>
          <article class="destination-card"><img
              src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=900&q=85"
              alt="Londres">
            <div class="card-shade"></div>
            <div class="card-content">
              <p>Reino Unido</p>
              <h3>Londres</h3><a href="#">→</a>
            </div>
          </article>
          <article class="destination-card"><img
              src="https://images.unsplash.com/photo-1525625293386-3f8f99389edd?auto=format&fit=crop&w=900&q=85"
              alt="Singapur">
            <div class="card-shade"></div>
            <div class="card-content">
              <p>Singapur</p>
              <h3>Singapur</h3><a href="#">→</a>
            </div>
          </article>
          <article class="destination-card"><img
              src="https://images.unsplash.com/photo-1552832230-c0197dd311b5?auto=format&fit=crop&w=900&q=85"
              alt="Roma">
            <div class="card-shade"></div>
            <div class="card-content">
              <p>Italia</p>
              <h3>Roma</h3><a href="#">→</a>
            </div>
          </article>
          <article class="destination-card"><img
              src="https://images.unsplash.com/photo-1514282401047-d79a71a590e8?auto=format&fit=crop&w=900&q=85"
              alt="Maldivas">
            <div class="card-shade"></div>
            <div class="card-content">
              <p>Maldivas</p>
              <h3>Maldivas</h3><a href="#">→</a>
            </div>
          </article>
        </div>
      </section>

      <section class="section how-section" id="how">
        <div class="how-heading">
          <p class="section-kicker">PROCESO AGENCIA</p>
          <h2>How it works</h2>
        </div>
        <div class="how-steps">
          <article>
            <div class="how-icon">●</div>
            <h3>Elige tu destino</h3>
            <p>Selecciona dónde quieres viajar y encuentra las fechas que mejor se adapten a tu viaje.</p>
          </article>
          <article>
            <div class="how-icon">◉</div>
            <h3>Compara opciones</h3>
            <p>Encuentra vuelos y tarifas diseñadas a tu presupuesto y preferencias.</p>
          </article>
          <article>
            <div class="how-icon">◈</div>
            <h3>Reserva con confianza</h3>
            <p>Confirma tu reserva con asistencia personalizada en cada paso.</p>
          </article>
        </div>
      </section>

      <section class="mid-cta">
        <div class="mid-cta-inner">
          <div>
            <p class="section-kicker">EL PRÓXIMO DESTINO TE ESPERA</p>
            <h2>¿Listo para reservar tu vuelo?</h2>
          </div>
          <div class="mid-cta-actions"><a class="mid-cta-primary" href="tel:18888775346">☎ &nbsp; 1-888-877-5346</a><a
              class="mid-cta-secondary" href="#">Reservar vuelos →</a></div>
        </div>
      </section>

      <section class="promise-section section">
        <div class="promise-copy">
          <p class="section-kicker">CLARIDAD EN CADA DETALLE</p>
          <h2>Our transparency promise</h2>
        </div>
        <div class="promise-list">
          <article>
            <div class="promise-icon">●</div>
            <div>
              <h3>Opciones claras</h3>
              <p>Presentamos información útil para que puedas tomar decisiones informadas.</p>
            </div>
          </article>
          <article>
            <div class="promise-icon">■</div>
            <div>
              <h3>Proceso seguro</h3>
              <p>Protegemos tu información y te acompañamos durante toda la reserva.</p>
            </div>
          </article>
          <article>
            <div class="promise-icon">♟</div>
            <div>
              <h3>Apoyo real</h3>
              <p>Nuestro equipo está disponible para responder y ayudarte con honestidad.</p>
            </div>    
          </article>
        </div>
      </section>

      <section class="experience section">
        <div class="experience-image">
          <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=1200&q=85"
            alt="Vista desde un avión">
          <div class="experience-badge"><strong>24/7</strong><span>Atención<br>personalizada</span></div>
        </div>
        <div class="experience-copy">
          <p class="section-kicker">VIAJA SIN COMPLICACIONES</p>
          <h2>Más que un vuelo, una experiencia completa.</h2>
          <p>Nosotros que organizar tu próxima viaje sea sencillo. Desde la búsqueda hasta el check-in, encontrarás
            soporte continuo y opciones adaptadas a tus necesidades.</p>
          <div class="feature-list">
            <div><span>●</span>
              <p><strong>Asegura del mundo</strong><small>Protegemos tu reserva</small></p>
            </div>
            <div><span>◎</span>
              <p><strong>Reserva amétrica</strong><small>Opciones flexible y confiables</small></p>
            </div>
          </div>
          <a class="primary-button" href="#">Explora nuestros destinos &nbsp; →</a>
        </div>
      </section>

      <section class="offer">
        <div class="offer-content">
          <p class="section-kicker">CUANDO ESTÉS LISTO</p>
          <h2>Tu próximo destino te está esperando.</h2>
          <p>Descubre tarifas competitivas en vuelos nacionales e internacionales.</p><a class="gold-button"
            href="#">Ver ofertas &nbsp; →</a>
        </div>
      </section>

      <section class="faq section">
        <div class="faq-heading">
          <p class="section-kicker">PREGUNTAS FRECUENTES</p>
          <h2>Todo lo que necesitas saber</h2>
        </div>
        <div class="faq-list">
          <article class="faq-item open"><button type="button">¿Cómo puedo reservar mi vuelo? <span>⌄</span></button>
            <p>Busca tu vuelo, compara las mejores tarifas y realiza tu reserva en pocos pasos.</p>
          </article>
          <article class="faq-item"><button type="button">¿Puedo modificar una reserva? <span>⌄</span></button>
            <p>Contacta a nuestro equipo para conocer las opciones disponibles.</p>
          </article>
          <article class="faq-item"><button type="button">¿Qué métodos de pago aceptan? <span>⌄</span></button>
            <p>Trabajamos con opciones de pago seguro y múltiples métodos disponibles.</p>
          </article>
        </div>
      </section>
    </main>
   
    <?php include ('include/footer.php'); ?>
  </div>
  <script>
    document.getElementById('menu').addEventListener('click', () => document.getElementById('nav').classList.toggle('open'));

    // Trip tabs
    let tripType = 1;
    document.querySelectorAll('.trip-tabs button').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.trip-tabs button').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
        tripType = parseInt(this.dataset.type);
        document.getElementById('returnField').style.display = tripType === 1 ? '' : 'none';
      });
    });

    const cityCodeMap = {
      'New York': 'NYC',
      'Los Angeles': 'LAX',
      'Chicago': 'CHI',
      'Dallas': 'DFW',
      'Denver': 'DEN',
      'San Francisco': 'SFO',
      'Seattle': 'SEA',
      'Miami': 'MIA',
      'Boston': 'BOS',
      'Las Vegas': 'LAS',
      'Phoenix': 'PHX',
      'Houston': 'HOU',
      'Washington': 'WAS',
      'London': 'LON',
      'Paris': 'PAR',
      'Rome': 'ROM',
      'Madrid': 'MAD',
      'Barcelona': 'BCN',
      'Tokyo': 'TYO',
      'Beijing': 'BJS',
      'Shanghai': 'SHA',
      'Toronto': 'YTO',
      'Montreal': 'YMQ',
      'Mexico City': 'MEX',
      'Sao Paulo': 'SAO',
      'Buenos Aires': 'BUE',
      'Sydney': 'SYD',
      'Melbourne': 'MEL',
      'Dubai': 'DXB'
    };

    // Airport autocomplete
    function setupAirport(inputId, dropdownId, codeId) {
      const input = document.getElementById(inputId);
      const dropdown = document.getElementById(dropdownId);
      const code = document.getElementById(codeId);
      let timer;
      let activeIndex = -1;
      dropdown.setAttribute('role', 'listbox');
      input.setAttribute('role', 'combobox');
      input.setAttribute('aria-autocomplete', 'list');
      input.setAttribute('aria-expanded', 'false');

      function closeDropdown() {
        dropdown.style.display = 'none';
        input.setAttribute('aria-expanded', 'false');
        activeIndex = -1;
      }

      function showResults(data) {
        dropdown.innerHTML = '';
        activeIndex = -1;
        if (!data.length) {
          closeDropdown();
          return;
        }
        data.slice(0, 8).forEach((a, index) => {
          const div = document.createElement('div');
          div.setAttribute('role', 'option');
          div.dataset.index = index;
          const codeText = document.createElement('span');
          codeText.className = 'airport-code';
          codeText.textContent = a.id;
          const detailText = document.createElement('span');
          detailText.className = 'airport-detail';
          const nameText = document.createElement('span');
          nameText.className = 'airport-name';
          nameText.textContent = a.name || '';
          const cityCode = cityCodeMap[a.city] || a.city || '';
          const cityText = document.createElement('span');
          cityText.className = 'airport-city';
          cityText.textContent = cityCode ? '(' + cityCode + ')' : '';
          detailText.append(nameText, cityText);
          div.append(codeText, detailText);
          div.addEventListener('mousedown', event => event.preventDefault());
          div.addEventListener('click', () => selectAirport(a));
          dropdown.appendChild(div);
        });
        dropdown.style.display = 'block';
        input.setAttribute('aria-expanded', 'true');
      }

      function selectAirport(a) {
        input.value = a.city ? a.city + ' (' + a.id + ')' : a.name + ' (' + a.id + ')';
        code.value = a.id;
        closeDropdown();
      }

      input.addEventListener('input', function() {
        clearTimeout(timer);
        const q = this.value.trim();
        code.value = '';
        if (q.length < 2) { dropdown.innerHTML = ''; closeDropdown(); return; }
        timer = setTimeout(() => {
          fetch('flight-proxy.php?action=airports&q=' + encodeURIComponent(q))
            .then(r => r.json())
            .then(showResults)
            .catch(closeDropdown);
        }, 300);
      });

      input.addEventListener('keydown', event => {
        const options = [...dropdown.querySelectorAll('[role="option"]')];
        if (!options.length) return;
        if (event.key === 'ArrowDown' || event.key === 'ArrowUp') {
          event.preventDefault();
          activeIndex = event.key === 'ArrowDown'
            ? (activeIndex + 1) % options.length
            : (activeIndex - 1 + options.length) % options.length;
          options.forEach((option, index) => option.classList.toggle('active', index === activeIndex));
          options[activeIndex].scrollIntoView({ block: 'nearest' });
        } else if (event.key === 'Enter' && activeIndex >= 0) {
          event.preventDefault();
          options[activeIndex].click();
        } else if (event.key === 'Escape') {
          closeDropdown();
        }
      });

      document.addEventListener('click', event => {
        if (!input.contains(event.target) && !dropdown.contains(event.target)) closeDropdown();
      });
    }
    setupAirport('originInput', 'originDropdown', 'originCode');
    setupAirport('destInput', 'destDropdown', 'destCode');

    // Open the native calendar from the complete date field
    document.querySelectorAll('input[type="date"]').forEach(input => {
      const field = input.closest('.field');
      if (field) {
        field.style.cursor = 'pointer';
        field.addEventListener('click', () => {
          if (typeof input.showPicker === 'function') input.showPicker();
          else input.focus();
        });
      }
    });

    const departDate = document.getElementById('departDate');
    const returnDate = document.getElementById('returnDate');
    if (departDate && returnDate) {
      const today = new Date();
      const todayValue = [
        today.getFullYear(),
        String(today.getMonth() + 1).padStart(2, '0'),
        String(today.getDate()).padStart(2, '0')
      ].join('-');
      departDate.min = todayValue;
      returnDate.min = todayValue;
      departDate.addEventListener('change', () => {
        returnDate.min = departDate.value || todayValue;
        if (returnDate.value && returnDate.value < returnDate.min) returnDate.value = '';
      });
    }

    // Flight search
    document.getElementById('searchForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const origin = document.getElementById('originCode').value || document.getElementById('originInput').value;
      const dest = document.getElementById('destCode').value || document.getElementById('destInput').value;
      const depart = document.getElementById('departDate').value;
      const ret = document.getElementById('returnDate').value;
      if (!origin || !dest || !depart) { alert('Por favor completa origen, destino y fecha de salida.'); return; }
      let url = 'resultados-vuelos.html?origin=' + encodeURIComponent(origin) + '&dest=' + encodeURIComponent(dest) + '&depart=' + depart + '&type=' + tripType;
      if (tripType === 1 && ret) url += '&return=' + ret;
      window.location.href = url;
    });

    document.querySelectorAll('.faq-item > button').forEach(button => button.addEventListener('click', () => button.parentElement.classList.toggle('open')));
    document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
      toggle.addEventListener('click', event => {
        if (window.innerWidth <= 760) {
          event.preventDefault();
          toggle.parentElement.classList.toggle('open');
        }
      });
    });

    // Traveler picker
    const counts = { adults: 1, children: 0, babies: 0 };
    function updateTravelerLabel() {
      const total = counts.adults + counts.children + counts.babies;
      const cabin = document.getElementById('cabinClass').value;
      document.getElementById('travelerLabel').textContent = total + ' pasajero' + (total > 1 ? 's' : '') + ' | ' + cabin;
    }
    document.getElementById('travelerField').addEventListener('click', function(e) {
      if (e.target.closest('.traveler-picker')) return;
      document.getElementById('travelerPicker').classList.toggle('open');
    });
    document.getElementById('travelerDone').addEventListener('click', function() {
      document.getElementById('travelerPicker').classList.remove('open');
    });
    document.querySelectorAll('.tp-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        const target = this.dataset.target;
        const action = this.dataset.action;
        const min = target === 'adults' ? 1 : 0;
        if (action === '+') counts[target]++;
        else if (counts[target] > min) counts[target]--;
        document.getElementById(target + 'Val').textContent = counts[target];
        updateTravelerLabel();
      });
    });
    document.getElementById('cabinClass').addEventListener('change', updateTravelerLabel);
    document.addEventListener('click', function(e) {
      if (!document.getElementById('travelerField').contains(e.target)) {
        document.getElementById('travelerPicker').classList.remove('open');
      }
    });
    updateTravelerLabel();
  </script>
</body>
</html>
