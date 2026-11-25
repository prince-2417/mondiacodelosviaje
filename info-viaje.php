<?php
$topic = $_GET['topic'] ?? 'equipaje';

$topics = [
  'equipaje' => [
    'tag'   => 'Equipaje',
    'icon'  => 'fa-suitcase',
    'title' => 'Baggage — Allowances, Restrictions & Fees',
    'desc'  => 'Everything you need to know about what you can bring on your flight, size and weight limits, and any applicable fees.',
    'faqs'  => [
      ['q'=>'What is the standard baggage allowance?',
       'a'=>'Most economy tickets include 1 carry-on bag (up to 10 kg / 22 lbs) and 1 personal item. Checked baggage allowance varies by airline and fare type — typically 1 bag of up to 23 kg (50 lbs) for international flights. Always verify with your specific airline before travel.'],
      ['q'=>'What are the carry-on size restrictions?',
       'a'=>'Standard carry-on dimensions are 56 cm × 36 cm × 23 cm (22" × 14" × 9"). Your bag must fit in the overhead bin or under the seat in front of you. Items exceeding these limits may need to be checked at the gate.'],
      ['q'=>'How much does extra baggage cost?',
       'a'=>'Extra baggage fees range from $30–$150 per bag depending on the airline, route, and whether you pre-purchase online (cheaper) or pay at the airport. We recommend adding extra bags during booking to save money.'],
      ['q'=>'Are there restrictions on what I can pack?',
       'a'=>'Prohibited items include flammable liquids, explosives, and certain batteries in checked bags. Liquids in carry-on must be in containers of 100 ml or less, placed in a clear 1-litre zip-lock bag. Sharp objects must go in checked luggage.'],
      ['q'=>'What happens if my baggage is lost or delayed?',
       'a'=>'Report lost or delayed baggage immediately at the airline\'s baggage desk before leaving the airport. Keep your baggage claim tags. Airlines typically compensate up to $3,500 for domestic and up to $1,700 USD for international lost baggage under Montreal Convention rules.'],
      ['q'=>'Can I bring sports equipment or musical instruments?',
       'a'=>'Most airlines allow sports equipment and musical instruments as checked baggage with additional fees ($50–$200). Small instruments may be carried on if they fit in the overhead bin. Contact us to confirm policies for your specific airline.'],
    ]
  ],
  'asientos' => [
    'tag'   => 'Seat Selection',
    'icon'  => 'fa-chair',
    'title' => 'Seat Selection — Pick the Right Spot',
    'desc'  => 'Learn how to choose your seat, what options are available, and when seat selection opens for your flight.',
    'faqs'  => [
      ['q'=>'When can I select my seat?',
       'a'=>'Seat selection typically opens at the time of booking for paid seats, or 24–48 hours before departure for free seat assignment. Premium seats (extra legroom, bulkhead, exit rows) are usually available for an additional fee at any time.'],
      ['q'=>'Is seat selection free?',
       'a'=>'Basic seat selection is free on most airlines but limited to standard seats. Preferred seats (front of cabin, extra legroom, exit rows) carry fees ranging from $10–$80 per seat per flight. Business and first class seats are included in the fare.'],
      ['q'=>'What are exit row seats?',
       'a'=>'Exit row seats offer significantly more legroom (up to 38 inches vs. standard 30–32 inches). Passengers seated here must be 15+ years old, physically able to assist in an emergency, and willing to follow crew instructions. These seats carry an additional fee.'],
      ['q'=>'Can I change my seat after booking?',
       'a'=>'Yes, you can change your seat selection at any time before check-in closes, subject to availability. Log in to the airline\'s website or contact us and we\'ll assist you with the change.'],
      ['q'=>'What if I don\'t select a seat?',
       'a'=>'If you don\'t select a seat, the airline will automatically assign one at check-in. You may be separated from travel companions. We recommend selecting seats early, especially for families or groups traveling together.'],
      ['q'=>'Are window or aisle seats better?',
       'a'=>'Window seats offer a view and a wall to lean against for sleeping. Aisle seats provide easier access to the restroom and overhead bins. Middle seats are generally least preferred. The best choice depends on your personal comfort preferences and flight duration.'],
    ]
  ],
  'menor' => [
    'tag'   => 'Unaccompanied Minor',
    'icon'  => 'fa-child-reaching',
    'title' => 'UNMR — Safe Travel for Unaccompanied Minors',
    'desc'  => 'Guidelines and procedures for children traveling alone, including age requirements, fees, and what to expect.',
    'faqs'  => [
      ['q'=>'What age can a child travel alone?',
       'a'=>'Most airlines allow children aged 5–11 to travel as Unaccompanied Minors (UM) with the airline\'s supervised service. Children aged 12–17 may travel independently but can opt into UM service. Children under 5 must travel with an adult.'],
      ['q'=>'How does the Unaccompanied Minor service work?',
       'a'=>'A designated airline staff member escorts the child from check-in through boarding, during the flight, and until they are handed over to the authorized adult at the destination. The child wears an identification bracelet and is never left unattended.'],
      ['q'=>'What documents are required?',
       'a'=>'Required documents include: the child\'s passport or ID, a completed UM form with contact details for both the dropping-off and picking-up adults, and government-issued ID of the adult picking up the child at the destination.'],
      ['q'=>'What is the fee for Unaccompanied Minor service?',
       'a'=>'UM service fees range from $50–$150 each way depending on the airline. This fee is in addition to the ticket price. Some airlines charge per segment (each flight leg), so connecting flights may incur multiple fees.'],
      ['q'=>'Are there flight restrictions for unaccompanied minors?',
       'a'=>'Most airlines require UM children to travel on non-stop or direct flights only. Connecting flights may be allowed for children 8+ on a case-by-case basis. Last flights of the day are often restricted to ensure the child is not stranded if a delay occurs.'],
      ['q'=>'What should the child bring?',
       'a'=>'Pack snacks, entertainment (tablet, books), a comfort item, and any medications with clear instructions. Include a card with emergency contact numbers in the child\'s bag. Ensure the child knows their full name, destination, and the name of the person picking them up.'],
    ]
  ],
  'cambios' => [
    'tag'   => 'Flight Changes',
    'icon'  => 'fa-pen-to-square',
    'title' => 'Flight Changes — Simple Tweaks to Your Booking',
    'desc'  => 'How to change your flight dates, times, or routes, and what fees or conditions may apply.',
    'faqs'  => [
      ['q'=>'Can I change my flight after booking?',
       'a'=>'Yes, most tickets allow date and time changes subject to availability and a change fee. Flexible and business class fares often allow free changes. Basic economy fares may not allow changes at all. Contact us with your booking reference and we\'ll check your options.'],
      ['q'=>'How much does it cost to change a flight?',
       'a'=>'Change fees vary by airline and fare type: $0 for flexible fares, $75–$200 for standard economy, and up to $400 for international flights. You may also need to pay any fare difference if the new flight is more expensive.'],
      ['q'=>'Can I change the passenger name on a ticket?',
       'a'=>'Minor name corrections (spelling errors of 1–3 characters) are usually allowed free of charge. Full name changes are generally not permitted — a new ticket must be purchased. Contact us as soon as possible if a name correction is needed.'],
      ['q'=>'What is a same-day flight change?',
       'a'=>'Some airlines offer same-day confirmed or standby changes for a reduced fee ($25–$75) if you want to take an earlier or later flight on the same day. This is subject to seat availability and must be requested at the airport or online on the day of travel.'],
      ['q'=>'Can I change my destination?',
       'a'=>'Destination changes are treated as a cancellation and rebooking, not a simple change. You would receive a credit (minus cancellation fees) to apply toward a new ticket. Fare differences will apply. Contact us to explore the most cost-effective option.'],
      ['q'=>'How do I request a flight change?',
       'a'=>'Call us at 1-888-370-7045 with your booking reference number, passenger name, and preferred new travel dates. We\'ll check availability, confirm any fees, and process the change on your behalf. Changes are confirmed via email.'],
    ]
  ],
  'cancelaciones' => [
    'tag'   => 'Cancellations',
    'icon'  => 'fa-ban',
    'title' => 'Cancellations — Flexible Options When Plans Shift',
    'desc'  => 'Understand your cancellation rights, refund eligibility, and how to cancel your booking.',
    'faqs'  => [
      ['q'=>'Can I cancel my flight and get a refund?',
       'a'=>'Refund eligibility depends on your fare type. Fully refundable tickets receive a full refund. Non-refundable tickets typically receive a travel credit minus a cancellation fee ($100–$400). Some airlines offer a 24-hour free cancellation window after booking.'],
      ['q'=>'What is the 24-hour cancellation rule?',
       'a'=>'Under US DOT regulations, airlines must allow passengers to cancel a booking within 24 hours of purchase for a full refund, provided the flight is at least 7 days away. This applies to tickets purchased directly. We honor this policy for all bookings made through us.'],
      ['q'=>'How long does a refund take?',
       'a'=>'Refunds to credit/debit cards take 7–14 business days. Travel credits are typically issued within 3–5 business days. Refunds to bank accounts may take up to 20 business days. We\'ll send you a confirmation email once the refund is processed.'],
      ['q'=>'What if the airline cancels my flight?',
       'a'=>'If the airline cancels your flight, you are entitled to a full refund or free rebooking on the next available flight. Contact us immediately and we\'ll advocate on your behalf to secure the best outcome — refund, rebooking, or travel credit.'],
      ['q'=>'What is a travel credit and how do I use it?',
       'a'=>'A travel credit is a voucher issued by the airline for the value of your cancelled ticket (minus fees). It can be used toward a future booking with the same airline, usually within 12 months of issue. Contact us to apply your credit to a new booking.'],
      ['q'=>'Are there cancellation fees?',
       'a'=>'Cancellation fees range from $0 (flexible fares) to $400 (basic economy international). Fees are deducted from your refund or credit. The earlier you cancel, the more options you have. We recommend purchasing travel insurance to protect against unexpected cancellations.'],
    ]
  ],
  'checkin' => [
    'tag'   => 'Check-in Process',
    'icon'  => 'fa-clipboard-check',
    'title' => 'Check-in Process — An Easy Start to Your Journey',
    'desc'  => 'Step-by-step guide to checking in for your flight, online and at the airport.',
    'faqs'  => [
      ['q'=>'When does online check-in open?',
       'a'=>'Online check-in typically opens 24–48 hours before departure and closes 1–2 hours before the flight. We recommend checking in online as soon as it opens to get the best available seat and avoid airport queues.'],
      ['q'=>'How do I check in online?',
       'a'=>'Visit the airline\'s website or app, go to "Manage Booking" or "Check-in", enter your booking reference and last name, select or confirm your seat, and download your boarding pass. You can save it to your phone\'s wallet or print it.'],
      ['q'=>'Do I still need to go to the airport if I check in online?',
       'a'=>'If you have checked baggage, you must drop it at the airline\'s bag drop counter (usually faster than full check-in). If you only have carry-on luggage, you can go directly to security with your mobile or printed boarding pass.'],
      ['q'=>'What documents do I need at check-in?',
       'a'=>'For domestic flights: government-issued photo ID (driver\'s license, passport). For international flights: valid passport (must be valid for at least 6 months beyond travel date), visa if required, and any health documentation required by the destination country.'],
      ['q'=>'What is the check-in deadline at the airport?',
       'a'=>'Airport check-in counters typically close 45–60 minutes before departure for domestic flights and 60–90 minutes for international flights. Arrive at least 2 hours early for domestic and 3 hours for international to allow time for check-in, security, and boarding.'],
      ['q'=>'What if I miss the check-in deadline?',
       'a'=>'If you miss the check-in deadline, the airline may deny boarding and your seat may be released. Contact us immediately at 1-888-370-7045 — we\'ll try to rebook you on the next available flight. Travel insurance can help cover costs in these situations.'],
    ]
  ],
];

$data = $topics[$topic] ?? $topics['equipaje'];
$otherTopics = array_filter($topics, fn($k) => $k !== $topic, ARRAY_FILTER_USE_KEY);
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($data['title']) ?> | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="./styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <style>
    .info-hero {
      background: linear-gradient(90deg,#081b33f0 0%,#081b33b0 60%,#081b3340 100%),
        url(https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=1800&q=85) 50% 55%/cover no-repeat;
      padding: 56px 0; color: #fff;
    }
    .info-hero-inner { width: 89%; max-width: 1280px; margin: 0 auto; }
    .info-hero-inner .breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 12px; color: #9aa8ba; margin-bottom: 18px; flex-wrap: wrap; }
    .info-hero-inner .breadcrumb a { color: #9aa8ba; text-decoration: none; }
    .info-hero-inner .breadcrumb a:hover { color: var(--gold); }
    .info-hero-tag { display: inline-flex; align-items: center; gap: 8px; background: var(--gold); color: var(--navy); border-radius: 20px; padding: 5px 14px; font-size: 11px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 16px; }
    .info-hero-inner h1 { font-family: Manrope,sans-serif; font-size: clamp(28px,3.5vw,46px); margin: 0 0 14px; letter-spacing: -1.5px; line-height: 1.1; }
    .info-hero-inner p { color: #c9d3e0; font-size: 16px; margin: 0; max-width: 600px; line-height: 1.65; }

    /* Layout */
    .info-layout { display: grid; grid-template-columns: 1fr 300px; gap: 32px; padding: 52px 0 80px; align-items: start; }

    /* FAQ section */
    .info-faq-title { font-family: Manrope,sans-serif; font-size: 22px; margin: 0 0 24px; color: var(--navy); }
    .faq-list { border-top: 1px solid #dde3e9; }
    .faq-item { border-bottom: 1px solid #dde3e9; }
    .faq-item button {
      width: 100%; min-height: 64px; color: var(--navy); cursor: pointer;
      text-align: left; background: 0 0; border: 0;
      justify-content: space-between; align-items: center;
      font-weight: 700; font-size: 15px; display: flex; gap: 12px; padding: 16px 0;
    }
    .faq-item button .faq-chevron { flex-shrink: 0; color: #9aa8ba; transition: transform .2s; font-size: 13px; }
    .faq-item.open button .faq-chevron { transform: rotate(180deg); color: var(--gold); }
    .faq-item > p { color: #68758a; margin: 0 0 20px; font-size: 14px; line-height: 1.75; display: none; padding-right: 28px; }
    .faq-item.open > p { display: block; }

    /* Sidebar */
    .info-sidebar { position: sticky; top: 24px; }
    .sidebar-card { background: #fff; border: 1px solid #dde3e9; border-radius: 8px; padding: 22px; margin-bottom: 18px; }
    .sidebar-card h4 { font-family: Manrope,sans-serif; font-size: 14px; margin: 0 0 16px; padding-bottom: 12px; border-bottom: 1px solid #edf0f3; color: var(--navy); }
    .topic-link {
      display: flex; align-items: center; gap: 12px; padding: 11px 12px;
      border-radius: 6px; text-decoration: none; color: var(--navy);
      font-size: 13px; font-weight: 600; transition: background .15s; margin-bottom: 4px;
    }
    .topic-link:hover { background: #f0f4f8; }
    .topic-link.active { background: #fff8e6; color: #a07020; }
    .topic-link .tl-icon { width: 32px; height: 32px; background: #eef2f6; border-radius: 6px; display: grid; place-items: center; font-size: 13px; color: var(--navy); flex-shrink: 0; }
    .topic-link.active .tl-icon { background: var(--gold); color: var(--navy); }

    .help-card { background: var(--navy); border-radius: 8px; padding: 22px; color: #fff; text-align: center; }
    .help-card i { font-size: 28px; color: var(--gold); margin-bottom: 12px; display: block; }
    .help-card h4 { font-family: Manrope,sans-serif; font-size: 16px; margin: 0 0 8px; }
    .help-card p { color: #9aa8ba; font-size: 13px; margin: 0 0 16px; line-height: 1.5; }
    .help-card a { display: flex; align-items: center; justify-content: center; gap: 8px; background: var(--gold); color: var(--navy); border-radius: 4px; padding: 12px; font-weight: 800; font-size: 14px; text-decoration: none; }
    .help-card a:hover { background: #c9a05a; }

    @media (max-width: 900px) {
      .info-layout { grid-template-columns: 1fr; }
      .info-sidebar { position: static; }
    }
    @media (max-width: 760px) {
      .info-hero { padding: 40px 0; }
      .info-hero-inner { width: calc(100% - 32px); }
    }
  </style>
</head>
<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <div class="info-hero">
        <div class="info-hero-inner">
          <div class="breadcrumb">
            <a href="/">Inicio</a>
            <i class="fa-solid fa-chevron-right" style="font-size:9px"></i>
            <a href="/atencion-al-cliente">Atenci&oacute;n al Cliente</a>
            <i class="fa-solid fa-chevron-right" style="font-size:9px"></i>
            <span><?= htmlspecialchars($data['tag']) ?></span>
          </div>
          <div class="info-hero-tag">
            <i class="fa-solid <?= $data['icon'] ?>"></i>
            <?= htmlspecialchars($data['tag']) ?>
          </div>
          <h1><?= htmlspecialchars($data['title']) ?></h1>
          <p><?= htmlspecialchars($data['desc']) ?></p>
        </div>
      </div>

      <div class="section info-layout">
        <!-- FAQ -->
        <div>
          <h2 class="info-faq-title">Preguntas frecuentes</h2>
          <div class="faq-list">
            <?php foreach($data['faqs'] as $i => $faq): ?>
            <article class="faq-item<?= $i === 0 ? ' open' : '' ?>">
              <button type="button">
                <?= htmlspecialchars($faq['q']) ?>
                <i class="fa-solid fa-chevron-down faq-chevron"></i>
              </button>
              <p><?= htmlspecialchars($faq['a']) ?></p>
            </article>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Sidebar -->
        <aside class="info-sidebar">
          <div class="sidebar-card">
            <h4>Otros temas</h4>
            <?php
            $topicMeta = [
              'equipaje'      => ['icon'=>'fa-suitcase',        'label'=>'Baggage'],
              'asientos'      => ['icon'=>'fa-chair',           'label'=>'Seat Selection'],
              'menor'         => ['icon'=>'fa-child-reaching',  'label'=>'UNMR'],
              'cambios'       => ['icon'=>'fa-pen-to-square',   'label'=>'Flight Changes'],
              'cancelaciones' => ['icon'=>'fa-ban',             'label'=>'Cancellations'],
              'checkin'       => ['icon'=>'fa-clipboard-check', 'label'=>'Check-in Process'],
            ];
            foreach($topicMeta as $key => $meta):
              $isActive = $key === $topic;
            ?>
            <a class="topic-link<?= $isActive ? ' active' : '' ?>" href="info-viaje.php?topic=<?= $key ?>">
              <span class="tl-icon"><i class="fa-solid <?= $meta['icon'] ?>"></i></span>
              <?= $meta['label'] ?>
            </a>
            <?php endforeach; ?>
          </div>

          <div class="help-card">
            <i class="fa-solid fa-headset"></i>
            <h4>&iquest;Necesitas ayuda?</h4>
            <p>Nuestros agentes est&aacute;n disponibles 24/7 para asistirte.</p>
            <a href="tel:18883707045"><i class="fa-solid fa-phone"></i> 1-888-370-7045</a>
          </div>
        </aside>
      </div>

      <section class="page-contact-band">
        <div>
          <p class="section-kicker">&iquest;TIENES M&Aacute;S PREGUNTAS?</p>
          <h2>Nuestro equipo est&aacute; listo para ayudarte.</h2>
        </div>
        <a href="tel:18883707045">&#9990; &nbsp; 1-888-370-7045</a>
      </section>
    </main>

    <?php include('include/footer.php'); ?>
  </div>
  <script>
    document.getElementById('menu').addEventListener('click', () => document.getElementById('nav').classList.toggle('open'));
    document.querySelectorAll('.dropdown-toggle').forEach(t => t.addEventListener('click', e => {
      if (window.innerWidth <= 760) { e.preventDefault(); t.parentElement.classList.toggle('open'); }
    }));
    document.querySelectorAll('.faq-item > button').forEach(btn => btn.addEventListener('click', () => btn.parentElement.classList.toggle('open')));
  </script>
</body>
</html>
