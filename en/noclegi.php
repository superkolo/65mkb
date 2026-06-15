<?php
$title = "Accommodation";
include __DIR__ . '/header.php';
?>

<section class="accommodation">
  <div class="accommodation__hero">
    <div class="accommodation__content">
      <p class="accommodation__eyebrow">Accommodation</p>
      <h2>Hotel offers for Congress participants</h2>
      <p class="accommodation__lead">Recommended hotels have prepared special booking conditions for participants of the 65th International Baltic Congress.</p>
      <div class="accommodation__actions">
        <a class="venue__button" target="_blank" rel="noopener" href="https://booking.profitroom.com/pl/hotelsopot/details/offer/756617?codes=MMBS26&no-cache=1&currency=PLN">Book at the special rate</a>
        <a class="venue__button venue__button--secondary" target="_blank" rel="noopener" href="https://hotelsopot.eu/">Hotel Sopot website</a>
      </div>
    </div>

    <div class="accommodation__hotel-card">
      <a href="https://hotelsopot.eu/" target="_blank" rel="noopener">
        <img src="../hotel-sopot-logo.png" alt="Hotel Sopot">
      </a>
    </div>
  </div>

  <div class="accommodation__details">
    <div class="accommodation__detail-card accommodation__detail-card--code">
      <span>Booking code</span>
      <strong>MMBS26</strong>
      <p>You can enter the code when booking through the hotel website.</p>
    </div>
    <div class="accommodation__detail-card">
      <span>Online booking</span>
      <strong>MKB 2026 offer</strong>
      <p>The easiest option is to use the direct booking link with the code already applied.</p>
    </div>
    <div class="accommodation__detail-card">
      <span>Location</span>
      <strong>Hotel Sopot</strong>
      <p>The hotel is located in Sopot, with convenient access to Hala Stulecia at ul. Goyki 7.</p>
    </div>
  </div>

  <div class="accommodation__note">
    <h3>How to use the offer</h3>
    <ol>
      <li>Click “Book at the special rate” or visit the Hotel Sopot website.</li>
      <li>Use the booking code <strong>MMBS26</strong>.</li>
      <li>Check availability and the final price directly in the hotel booking system.</li>
    </ol>
  </div>

  <div class="accommodation__offer">
    <div class="accommodation__offer-logo">
      <a href="https://purohotels.com/en/gdansk/" target="_blank" rel="noopener">
        <img src="../hotel-puro-logo.svg" alt="PURO Gdańsk">
      </a>
    </div>
    <div class="accommodation__offer-content">
      <p class="accommodation__eyebrow">Partner offer</p>
      <h3>PURO Gdańsk</h3>
      <p class="accommodation__offer-lead"><strong>30% discount</strong> on rates published on the hotel website for guests interested in accommodation during the Congress.</p>
      <div class="accommodation__offer-grid">
        <div>
          <span>Booking contact</span>
          <a href="mailto:gdansk@purohotel.com">gdansk@purohotel.com</a>
        </div>
        <div>
          <span>Booking password</span>
          <strong>65 Bałtycki Kongres w Brydżu</strong>
        </div>
        <div>
          <span>Booking deadline</span>
          <strong>17 July 2026</strong>
        </div>
      </div>
      <div class="accommodation__actions">
        <a class="venue__button" href="mailto:gdansk@purohotel.com?subject=65%20Ba%C5%82tycki%20Kongres%20w%20Bryd%C5%BCu">Email reservations</a>
        <a class="venue__button venue__button--secondary" target="_blank" rel="noopener" href="https://purohotels.com/en/gdansk/">PURO Gdańsk website</a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
