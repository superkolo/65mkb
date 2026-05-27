<?php
$title = "Venue";
include __DIR__ . '/header.php';
?>

<section class="venue">
  <div class="venue__hero">
    <div class="venue__content">
      <p class="venue__eyebrow">Venue</p>
      <h2>Hala Stulecia Sopotu</h2>
      <p class="venue__address">ul. Jakuba Goyki 7, 81-715 Sopot</p>
      <p class="venue__text">Congress tournaments are played in one of Sopot's most recognizable venues, a few minutes from the city centre and close to public transport.</p>
      <div class="venue__actions">
        <a class="venue__button" target="_blank" href="https://www.google.com/maps/search/?api=1&query=Hala%20Stulecia%20Sopotu%2C%20Jakuba%20Goyki%207%2C%20Sopot">Open in Google Maps</a>
        <a class="venue__button venue__button--secondary" target="_blank" href="https://www.openstreetmap.org/search?query=Jakuba%20Goyki%207%2C%20Sopot">Open in OpenStreetMap</a>
      </div>
    </div>

    <div class="venue__panel" aria-label="Venue information">
      <div><span>Address</span><strong>Jakuba Goyki 7</strong></div>
      <div><span>City</span><strong>Sopot</strong></div>
      <div><span>Venue</span><strong>Hala Stulecia</strong></div>
    </div>
  </div>

  <div class="venue__map">
    <iframe
      title="Map to Hala Stulecia Sopotu"
      src="https://www.openstreetmap.org/export/embed.html?bbox=18.5484%2C54.4388%2C18.5652%2C54.4464&amp;layer=mapnik&amp;marker=54.4426%2C18.5568"
      loading="lazy">
    </iframe>
  </div>

  <div class="venue__tips">
    <div>
      <h3>Getting there</h3>
      <p>The easiest option is to navigate to “Jakuba Goyki 7, Sopot”.</p>
    </div>
    <div>
      <h3>On site</h3>
      <p>After arrival, follow congress signage and organiser announcements.</p>
    </div>
    <div>
      <h3>Daily schedule</h3>
      <p>Starting times are listed in the Congress Programme.</p>
    </div>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
