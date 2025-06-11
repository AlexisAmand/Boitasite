  <!-- Contact -->
  <section id="contact" class="py-5">
    <div class="container text-center">
      <h2 class="mb-5">Contactez-moi</h2>
      <p>Pour toute demande de devis ou collaboration<br /> envoyez-moi un email à <strong><span id="email"></span></strong> ou contactez-moi au <span id="telephone">x</span>.</p>
    </div>

    <script>
    const user = 'alexis.amand';
    const domain = 'boitasite.com';
    const email = `${user}@${domain}`;
    const link = `<a href="mailto:${email}">${email}</a>`;

    var tel01 = '06.62.';
    var tel02 = '63.79.21';
    var tel = tel01 + tel02;

var telLink = `<a href="tel:${tel.replace(/\./g, '')}">${tel}</a>`;

document.getElementById('telephone').innerHTML = telLink;


    document.getElementById('email').innerHTML = link;



    </script>

  </section>