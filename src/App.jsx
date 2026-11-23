import { useState } from 'react'
import './App.css'

const Icon = ({ name, size = 20 }) => {
  const icons = {
    plane: <><path d="M22 2 9.5 14.5"/><path d="m22 2-7.5 20-5-7.5L2 9.5 22 2Z"/></>,
    phone: <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.63a2 2 0 0 1-.45 2.11L8 9.73a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.85.29 1.73.5 2.63.62A2 2 0 0 1 22 16.92Z"/>,
    calendar: <><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></>,
    pin: <><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2"/></>,
    users: <><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></>,
    arrow: <><path d="M5 12h14"/><path d="m13 6 6 6-6 6"/></>,
    shield: <><path d="M20 13c0 5-3.5 7.5-8 9-4.5-1.5-8-4-8-9V5l8-3 8 3v8Z"/><path d="m9 12 2 2 4-4"/></>,
    globe: <><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 0 20M12 2a15.3 15.3 0 0 0 0 20"/></>,
    search: <><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></>,
    menu: <><path d="M4 6h16M4 12h16M4 18h16"/></>,
    close: <><path d="M18 6 6 18M6 6l12 12"/></>,
    chevron: <path d="m6 9 6 6 6-6"/>,
  }
  return <svg width={size} height={size} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">{icons[name]}</svg>
}

const destinations = [
  { name: 'Paris', country: 'Francia', image: 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=900&q=85' },
  { name: 'Dubai', country: 'Emiratos Árabes', image: 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=900&q=85' },
  { name: 'Tokio', country: 'Japón', image: 'https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?auto=format&fit=crop&w=900&q=85' },
  { name: 'Nueva York', country: 'Estados Unidos', image: 'https://images.unsplash.com/photo-1522083165195-3424ed129620?auto=format&fit=crop&w=900&q=85' },
  { name: 'Londres', country: 'Reino Unido', image: 'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=900&q=85' },
  { name: 'Singapur', country: 'Singapur', image: 'https://images.unsplash.com/photo-1525625293386-3f8f99389edd?auto=format&fit=crop&w=900&q=85' },
  { name: 'Roma', country: 'Italia', image: 'https://images.unsplash.com/photo-1552832230-c0197dd311b5?auto=format&fit=crop&w=900&q=85' },
  { name: 'Maldivas', country: 'Maldivas', image: 'https://images.unsplash.com/photo-1514282401047-d79a71a590e8?auto=format&fit=crop&w=900&q=85' },
]

function App() {
  const [tripType, setTripType] = useState('round')
  const [menuOpen, setMenuOpen] = useState(false)
  const [openFaq, setOpenFaq] = useState(0)

  const faqs = [
    ['¿Cómo puedo reservar mi vuelo?', 'Selecciona tu origen y destino, elige las fechas y haz clic en buscar vuelos. Nuestro equipo te ayudará a confirmar la mejor opción disponible.'],
    ['¿Puedo modificar una reserva?', 'Sí. La mayoría de las tarifas permiten cambios o reembolsos sujetos a las condiciones de la aerolínea y a posibles cargos.'],
    ['¿Qué métodos de pago aceptan?', 'Aceptamos tarjetas de crédito y débito, junto con métodos de pago seguros disponibles durante el proceso de reserva.'],
  ]

  return (
    <div className="site">
      <header className="header">
        <a className="brand" href="#" aria-label="Mondiaco de los Viajes">
          <span className="brand-mark"><Icon name="plane" size={24} /></span>
          <span className="brand-copy"><strong>MONDIACO</strong><small>DE LOS VIAJES</small></span>
        </a>

        <nav className={menuOpen ? 'nav open' : 'nav'}>
          <a href="#inicio" onClick={() => setMenuOpen(false)}>Inicio</a>
          <a href="#destinos" onClick={() => setMenuOpen(false)}>Destinos</a>
          <a href="#servicios" onClick={() => setMenuOpen(false)}>Servicios</a>
          <a href="#nosotros" onClick={() => setMenuOpen(false)}>Nosotros</a>
        </nav>

        <a className="phone-link" href="tel:18883707045">
          <span className="phone-icon"><Icon name="phone" size={17} /></span>
          <span><small>Reserva ahora</small><strong>1-888-370-7045</strong></span>
        </a>
        <button className="menu-button" onClick={() => setMenuOpen(!menuOpen)} aria-label="Abrir menú">
          <Icon name={menuOpen ? 'close' : 'menu'} size={24} />
        </button>
      </header>

      <main>
        <section className="hero" id="inicio">
          <div className="hero-overlay" />
          <div className="hero-content">
            <div className="hero-copy">
              <p className="eyebrow"><span />Tu próximo viaje comienza aquí</p>
              <h1>El mundo está<br />más cerca de lo que <em>imaginas.</em></h1>
              <p className="hero-lead">Encuentra rutas excepcionales y tarifas diseñadas para llevarte a donde más deseas estar.</p>
            </div>

            <div className="search-card">
              <div className="trip-tabs" role="tablist">
                <button className={tripType === 'round' ? 'active' : ''} onClick={() => setTripType('round')} role="tab">Ida y vuelta</button>
                <button className={tripType === 'oneway' ? 'active' : ''} onClick={() => setTripType('oneway')} role="tab">Solo ida</button>
              </div>
              <div className="search-fields">
                <label className="field">
                  <span className="field-icon"><Icon name="pin" /></span>
                  <span><small>Desde</small><strong>Nueva York</strong></span>
                  <Icon name="chevron" size={16} />
                </label>
                <button className="swap" aria-label="Intercambiar aeropuertos"><Icon name="arrow" size={17} /></button>
                <label className="field">
                  <span className="field-icon"><Icon name="pin" /></span>
                  <span><small>Hacia</small><strong>¿A dónde vas?</strong></span>
                  <Icon name="chevron" size={16} />
                </label>
                <label className="field date-field">
                  <span className="field-icon"><Icon name="calendar" /></span>
                  <span><small>Salida</small><strong>22 Nov</strong></span>
                </label>
                {tripType === 'round' && (
                  <label className="field date-field">
                    <span className="field-icon"><Icon name="calendar" /></span>
                    <span><small>Regreso</small><strong>29 Nov</strong></span>
                  </label>
                )}
                <label className="field travelers">
                  <span className="field-icon"><Icon name="users" /></span>
                  <span><small>Pasajeros</small><strong>2 viajeros</strong></span>
                  <Icon name="chevron" size={16} />
                </label>
                <button className="search-button" aria-label="Buscar vuelos"><Icon name="search" size={21} /><span>Buscar vuelos</span></button>
              </div>
            </div>
          </div>
        </section>

        <section className="about-section" id="sobre-tripyzo">
          <div className="about-section-inner section">
            <div className="about-section-media">
              <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&w=1100&q=85" alt="Viajera disfrutando su viaje" />
              <div className="about-section-years">
                <strong>24/7</strong>
                <span>Atención<br />personalizada</span>
              </div>
            </div>
            <div className="about-section-copy">
              <p className="section-kicker">Nuestra agencia</p>
              <h2>About Tripyzo</h2>
              <p>En Tripyzo hacemos que descubrir el mundo sea una experiencia simple, segura y memorable. Creamos soluciones de viaje personalizadas con atención humana y opciones transparentes.</p>
              <div className="about-section-benefits">
                <div><span><Icon name="globe" size={20} /></span><p><strong>Viajes sin fronteras</strong><small>Opciones nacionales e internacionales</small></p></div>
                <div><span><Icon name="shield" size={20} /></span><p><strong>Reserva confiable</strong><small>Información clara y acompañamiento real</small></p></div>
              </div>
              <a className="about-section-button" href="#nosotros">Conoce nuestra historia <Icon name="arrow" size={18} /></a>
            </div>
          </div>
        </section>

        <section className="destinations section" id="destinos">
          <div className="section-heading">
            <div>
              <p className="section-kicker">Explora el mundo</p>
              <h2>Destinos que inspiran</h2>
            </div>
            <a href="#" className="text-link">Ver todos <Icon name="arrow" size={18} /></a>
          </div>
          <div className="destination-grid">
            {destinations.map((place, index) => (
              <article className={`destination-card destination-${index + 1}`} key={place.name}>
                <img src={place.image} alt={place.name} />
                <div className="card-shade" />
                <div className="card-content">
                  <p>{place.country}</p>
                  <h3>{place.name}</h3>
                  <a href="#" aria-label={`Explorar ${place.name}`}><Icon name="arrow" size={18} /></a>
                </div>
              </article>
            ))}
          </div>
        </section>

        <section className="how-section section" id="como-funciona">
          <div className="how-heading">
            <p className="section-kicker">Proceso sencillo</p>
            <h2>How it works</h2>
          </div>
          <div className="how-steps">
            <article>
              <span>01</span>
              <div className="how-icon"><Icon name="pin" size={24} /></div>
              <h3>Elige tu destino</h3>
              <p>Selecciona dónde quieres viajar y las fechas de tu próxima aventura.</p>
            </article>
            <article>
              <span>02</span>
              <div className="how-icon"><Icon name="plane" size={24} /></div>
              <h3>Compara opciones</h3>
              <p>Encuentra vuelos y tarifas adaptadas a tu presupuesto y preferencias.</p>
            </article>
            <article>
              <span>03</span>
              <div className="how-icon"><Icon name="shield" size={24} /></div>
              <h3>Reserva con confianza</h3>
              <p>Completa tu reserva con asistencia personalizada en cada paso.</p>
            </article>
          </div>
        </section>

        <section className="mid-cta">
          <div className="mid-cta-inner">
            <div>
              <p className="section-kicker">Tu próximo viaje comienza aquí</p>
              <h2>¿Listo para reservar tu vuelo?</h2>
            </div>
            <div className="mid-cta-actions">
              <a className="mid-cta-primary" href="tel:18883707045"><Icon name="phone" size={18} /> 1-888-370-7045</a>
              <a className="mid-cta-secondary" href="#inicio">Buscar vuelos <Icon name="arrow" size={18} /></a>
            </div>
          </div>
        </section>

        <section className="promise-section section" id="promesa">
          <div className="promise-copy">
            <p className="section-kicker">Claridad en cada detalle</p>
            <h2>Our transparency<br />promise</h2>
          </div>
          <div className="promise-list">
            <article>
              <div className="promise-icon"><Icon name="globe" size={23} /></div>
              <div><h3>Opciones claras</h3><p>Presentamos información útil para que puedas tomar decisiones informadas.</p></div>
            </article>
            <article>
              <div className="promise-icon"><Icon name="shield" size={23} /></div>
              <div><h3>Proceso seguro</h3><p>Protegemos tu información y te acompañamos durante toda la reserva.</p></div>
            </article>
            <article>
              <div className="promise-icon"><Icon name="users" size={23} /></div>
              <div><h3>Apoyo real</h3><p>Nuestro equipo está disponible para responder y ayudarte con honestidad.</p></div>
            </article>
          </div>
        </section>

        <section className="experience section" id="servicios">
          <div className="experience-image">
            <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=1200&q=85" alt="Avión sobrevolando un paisaje" />
            <div className="experience-badge"><strong>24/7</strong><span>Atención<br />personalizada</span></div>
          </div>
          <div className="experience-copy" id="nosotros">
            <p className="section-kicker">Viajar contigo importa</p>
            <h2>Más que un vuelo, una experiencia completa.</h2>
            <p>Hacemos que organizar tu próximo viaje sea sencillo. Desde la búsqueda hasta el aterrizaje, encontrarás opciones claras y asistencia real cuando la necesitas.</p>
            <div className="feature-list">
              <div><span><Icon name="globe" /></span><p><strong>Alrededor del mundo</strong><small>Conectamos tu próxima aventura</small></p></div>
              <div><span><Icon name="shield" /></span><p><strong>Reserva protegida</strong><small>Proceso seguro y confiable</small></p></div>
            </div>
            <a className="primary-button" href="#">Conoce nuestra agencia <Icon name="arrow" size={18} /></a>
          </div>
        </section>

        <section className="offer">
          <div className="offer-content">
            <p className="section-kicker">Oferta especial</p>
            <h2>Tu próximo destino te está esperando.</h2>
            <p>Descubre tarifas competitivas en vuelos nacionales e internacionales.</p>
            <a className="gold-button" href="#">Ver ofertas <Icon name="arrow" size={18} /></a>
          </div>
        </section>

        <section className="faq section">
          <div className="faq-heading">
            <p className="section-kicker">Preguntas frecuentes</p>
            <h2>Todo lo que necesitas saber</h2>
          </div>
          <div className="faq-list">
            {faqs.map(([question, answer], index) => (
              <div className={openFaq === index ? 'faq-item open' : 'faq-item'} key={question}>
                <button onClick={() => setOpenFaq(openFaq === index ? -1 : index)}>
                  <span>{question}</span><Icon name="chevron" size={18} />
                </button>
                {openFaq === index && <p>{answer}</p>}
              </div>
            ))}
          </div>
        </section>
      </main>

      <footer className="footer">
        <div className="footer-main">
          <div className="footer-brand footer-about">
            <a className="brand brand-light" href="#">
              <span className="brand-mark"><Icon name="plane" size={24} /></span>
              <span className="brand-copy"><strong>MONDIACO</strong><small>DE LOS VIAJES</small></span>
            </a>
            <p>Descubre ofertas de vuelos económicas, una experiencia de reserva sencilla y asistencia de viaje confiable con Mondiaco de los Viajes. Te ayudamos a encontrar las mejores tarifas para viajes nacionales e internacionales.</p>
            <div className="footer-contact-list">
              <div><span>Atención telefónica</span><a href="tel:18883707045">1-888-370-7045</a></div>
              <div><span>Escríbenos</span><a href="mailto:support@mondiacodelosviajes.com">support@mondiacodelosviajes.com</a></div>
              <div><span>Dirección de la oficina</span><address>533 Old Sackville Rd #103<br />Lower Sackville, NS B4C 0G3 Canada</address></div>
            </div>
          </div>
          <div className="footer-links">
            <h3>Enlaces importantes</h3>
            <a href="/sobre-nosotros">Sobre Nosotros</a>
            <a href="/l%C3%ADneas-de-cruceros">Líneas De Cruceros</a>
            <a href="/informaci%C3%B3n-legal-de-negocios">Información Legal De Negocios</a>
            <a href="/c%C3%B3mo-reservamos-y-emitimos-billetes-de-avi%C3%B3n">Cómo Reservamos y Emitimos Billetes De Avión</a>
            <a href="/informaci%C3%B3n-sobre-pagos-y-transparencia">Información Sobre pagos y transparencia</a>
            <a href="/descargo-de-responsabilidad">Descargo de Responsabilidad</a>
            <a href="/contactarnos">Contactarnos</a>
          </div>
          <div className="footer-links">
            <h3>Información legal</h3>
            <a href="/t%C3%A9rminos-y-condiciones">Términos y Condiciones</a>
            <a href="/pol%C3%ADtica-de-privacidad">Política De Privacidad</a>
            <a href="/promesa-de-igualaci%C3%B3n-de-precios">Promesa De Igualación De Precios</a>
            <a href="/impuestos-y-tasas">Impuestos y Tasas</a>
            <a href="/tasas-de-venta-de-entradas">Tasas de venta de entradas</a>
            <a href="/tarifas-de-servicio">Tarifas de Servicios</a>
            <a href="/pol%C3%ADtica-de-cumplimiento">Política de cumplimiento</a>
            <a href="/cancelaci%C3%B3n-y-reembolso">Cancelación y reembolso</a>
            <a href="/informaci%C3%B3n-para-el-anunciante">Información para el anunciante</a>
            <a href="/pol%C3%ADtica-de-divulgaci%C3%B3n-de-tarifas">Política de divulgación de tarifas</a>
          </div>
        </div>
        <div className="footer-payment">
          <div className="payment-list" aria-label="Métodos de pago aceptados">
            <img src="https://mondiacodelosviaje.com/image/footer/amerrican-express.png" alt="American Express" />
            <img src="https://mondiacodelosviaje.com/image/footer/Diners_Club_International_Icon.png" alt="Diners Club" />
            <img src="https://mondiacodelosviaje.com/image/footer/discover.png" alt="Discover" />
            <img src="https://mondiacodelosviaje.com/image/footer/master-card.png" alt="Mastercard" />
            <img src="https://mondiacodelosviaje.com/image/footer/paypal.png" alt="PayPal" />
            <img src="https://mondiacodelosviaje.com/image/footer/visa.png" alt="Visa" />
          </div>
        </div>
        <div className="footer-disclaimer">
          <p>Descargo de Responsabilidad: <a href="/">Mondiacodelosviaje.com</a> es propiedad y está operado por Mondiaco de los Viajes. Mondiaco de los Viajes es una agencia de viajes independiente y no está afiliada, respaldada ni patrocinada por ninguna aerolínea, salvo que se indique expresamente lo contrario.</p>
          <p>Al acceder y utilizar <a href="/">Mondiacodelosviaje.com</a>, usted acepta nuestros <a href="/t%C3%A9rminos-y-condiciones">Términos y Condiciones</a> y nuestra <a href="/pol%C3%ADtica-de-privacidad">Política de Privacidad</a>. Todas las reservas realizadas a través de nuestra plataforma están sujetas a nuestras <a href="/tarifas-de-servicio">Tarifas de Servicios</a> y <a href="/tasas-de-venta-de-entradas">Tasas de venta de entradas</a>. Le recomendamos revisar nuestra <a href="/pol%C3%ADtica-de-cookies">Política de Cookies</a> para conocer cómo utilizamos las cookies con el fin de mejorar su experiencia de navegación y reserva.</p>
        </div>
        <div className="footer-bottom"><span>Copyright © 2026 Mondiacodelosviaje.com.</span><span>Todos los derechos reservados</span></div>
      </footer>
    </div>
  )
}

export default App
