<?php
$title = "Accommodation";
include __DIR__ . '/header.php';
?>

<section class="accommodation">
  <div class="accommodation__hero">
    <div class="accommodation__content">
      <p class="accommodation__eyebrow">Accommodation</p>
      <h2>Hotel offer for Congress participants</h2>
      <p class="accommodation__lead">Hotel Sopot has prepared special booking rates for participants of the 65th International Baltic Congress.</p>
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
</section>

<?php include __DIR__ . '/footer.php'; ?>
