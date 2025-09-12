<!-- contactos.php -->
<style>
  /* === Sección de Contactos - Estilo integrado === */
  #contactos {
    text-align: center;
    font-family: 'Montserrat', sans-serif;
    padding: 2rem 0;
  }

  #contactos h2 {
    margin-bottom: 1rem;
    color: #333;
    font-size: 2.2rem;
    font-weight: 600;
  }

  #contactos .contact-intro {
    color: #555;
    font-size: 1.1rem;
    margin-bottom: 2.5rem;
    display: block;
  }

  /* Grid solo para las tarjetas */
  .contact-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto 3rem; /* Espacio antes del mapa */
    padding: 0 1rem;
  }

  .contact-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    width: 320px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .contact-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
  }

  .card-profile {
    width: 100%;
    height: 360px;
    overflow: hidden;
    background: #f0f0f0;
  }

  .card-profile img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform 0.5s ease;
  }

  .contact-card:hover .card-profile img {
    transform: scale(1.1);
  }

  .card-header {
    background: #6b7280;
    color: white;
    padding: 1.2rem;
    text-align: center;
  }

  .card-header h3 {
    margin: 0;
    font-size: 1.4rem;
    font-weight: 600;
  }

  .card-header p {
    margin: 0.3rem 0 0;
    font-size: 0.9rem;
    opacity: 0.9;
  }

  .card-body {
    padding: 1.5rem;
    text-align: left;
    color: #333;
  }

  .card-body p {
    margin: 0.8rem 0;
    font-size: 1rem;
    display: flex;
    align-items: center;
  }

  .card-body i {
    color: #25D366;
    margin-right: 0.5rem;
    font-size: 1.2rem;
  }

  .whatsapp-btn {
    display: block;
    margin-top: 1rem;
    padding: 0.7rem;
    background-color: #25D366;
    color: white;
    text-decoration: none;
    font-weight: 600;
    border-radius: 6px;
    transition: background-color 0.3s;
    text-align: center;
  }

  .whatsapp-btn:hover {
    background-color: #128C7E;
  }

  /* Para tarjetas sin botón */
  .card-body.no-contact {
    padding-top: 2rem;
    text-align: center;
  }

  /* === Mapa - Fuera del grid === */
  .map-container {
    text-align: center;
    margin: 4rem auto 2rem;
    max-width: 1000px;
    padding: 0 1rem;
  }

  .map-container h2 {
    margin-bottom: 1rem;
    color: #333;
    font-size: 1.8rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
  }

  .map-container iframe {
    width: 100%;
    height: 400px;
    border: none;
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    margin-top: 1rem;
  }

  @media (max-width: 768px) {
    .map-container iframe {
      height: 300px;
    }
  }
</style>

<div id="contactos" class="tab-content">
  <h2>Contáctanos</h2>
  <p class="contact-intro">¿Tienes una sesión en mente? Habla directamente con nuestros fotógrafos profesionales.</p>

  <!-- Tarjetas de contacto -->
  <div class="contact-grid">
    
    <!-- Tarjeta: Marcelo González -->
    <div class="contact-card">
      <div class="card-profile">
        <img src="images/tarjetas/marcelo.jpg" alt="Marcelo González - Fotógrafo">
      </div>
      <div class="card-header">
        <h3>Marcelo González</h3>
        <p>Fotógrafo Profesional</p>
      </div>
      <div class="card-body">
        <p><i class="fab fa-whatsapp"></i> 099 822 0201</p>
        <?php
        $mensaje = "Hola Marcelo, vi tu trabajo y me gustaría saber más sobre precios";
        $mensajeCodificado = urlencode($mensaje);
        ?>
        <a href="https://web.whatsapp.com/send?phone=593998220201&text=<?php echo $mensajeCodificado; ?>" 
           target="_blank" 
           class="whatsapp-btn">
           💬 Chatear con Marcelo
        </a>
      </div>
    </div>

    <!-- Tarjeta: Holguer Valdez -->
    <div class="contact-card">
      <div class="card-profile">
        <img src="images/tarjetas/holguer2.jpeg" alt="Holguer Valdez - Fotógrafo">
      </div>
      <div class="card-header">
        <h3>Holguer Valdez</h3>
        <p>Fotógrafo Profesional</p>
      </div>
      <div class="card-body">
        <p><i class="fab fa-whatsapp"></i> 098 484 7381</p>
        <?php
        $mensaje = "Hola Holguer, vi tu trabajo y me gustaría saber más sobre precios";
        $mensajeCodificado = urlencode($mensaje);
        ?>
        <a href="https://web.whatsapp.com/send?phone=593984847381&text=<?php echo $mensajeCodificado; ?>" 
           target="_blank" 
           class="whatsapp-btn">
           💬 Chatear con Holguer
        </a>
      </div>
    </div>

  </div>

  <!-- Mapa separado (no es parte del grid) -->
  <div class="map-container">
    <h2><i class="fas fa-map-marker-alt"></i> Nuestra Ubicación</h2>
    <iframe 
      src="https://www.google.com/maps?q=-1.1730001,-78.5427717&z=17&hl=es&output=embed" 
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>

</div>