<!-- promociones.php -->
<style>
  /* === Promociones - Estilo integrado === */
  #promociones {
    font-family: 'Montserrat', sans-serif;
    text-align: center;
    padding: 2rem 0;
  }

  /* Ajuste: Bootstrap ya maneja los estilos del título, así que eliminamos el h2 original */
  #promociones .promo-intro {
    font-size: 1.1rem;
    color: #555;
    margin-bottom: 2rem;
    display: block;
  }

  /* Imagen principal */
  .promo-img-container {
    text-align: center;
    margin: 2rem auto;
  }

  .promo-img {
    width: 50%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .promo-img:hover {
    transform: scale(1.02);
  }

  /* Contenedor de tarjetas (2 por línea) */
  .promos-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
    max-width: 1200px;
    margin: 2rem auto;
    padding: 0 1rem;
  }

  .promo-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    width: 45%;
    max-width: 500px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
  }

  .promo-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
  }

  .promo-card-header {
    background: #e91e63;
    color: white;
    padding: 1rem;
    text-align: center;
  }

  .promo-card-header h3 {
    margin: 0;
    font-size: 1.5rem;
    font-weight: 600;
  }

  .promo-card-header .promo-price {
    font-size: 1.6rem;
    font-weight: bold;
    display: block;
    margin-top: 0.3rem;
  }

  .promo-card-body {
    padding: 1.5rem;
    color: #333;
    text-align: left;
    font-size: 1.1rem;
    line-height: 1.7;
  }

  .promo-card-body ul {
    margin: 0.5rem 0;
    padding-left: 1.2rem;
  }

  .promo-card-body .promo-price {
    text-align: center;
    font-weight: bold;
    color: #e91e63;
    display: block;
    margin: 0.8rem 0;
    font-size: 1.2rem;
  }

  /* Botón de WhatsApp */
  .whatsapp-btn {
    display: block;
    margin: 1rem auto;
    padding: 0.8rem 1.2rem;
    background-color: #25D366;
    color: white;
    text-decoration: none;
    font-weight: 600;
    border-radius: 6px;
    font-size: 1.1rem;
    transition: background-color 0.3s;
    width: 90%;
  }

  .whatsapp-btn:hover {
    background-color: #128C7E;
  }

  /* Nota final */
  .promo-footer {
    max-width: 600px;
    margin: 3rem auto 1rem;
    font-size: 1.1rem;
    color: #666;
    line-height: 1.6;
    text-align: center;
    font-style: italic;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .promo-img {
      width: 90%;
    }

    .promo-card {
      width: 100%;
    }

    .promo-card-header h3,
    .promo-card-header .promo-price {
      font-size: 1.4rem;
    }

    .promo-card-body {
      font-size: 1rem;
    }
  }

  @media (max-width: 480px) {
    .promo-img {
      width: 95%;
    }

    .promo-footer {
      font-size: 1rem;
    }
  }
</style>

<div id="promociones" class="tab-content">
  <!-- Título con Bootstrap -->
  <div class="text-center my-4">
    <span class="badge bg-danger text-white px-4 py-2 mb-3 fs-5 text-uppercase">
      🔥 Promociones de Temporada
    </span>
    <h1 class="display-6 fw-bold text-dark">Combos Especiales para Ti</h1>
    <p class="lead text-muted promo-intro">
      ¡Aprovecha nuestras ofertas especiales por tiempo limitado!
    </p>
  </div>

  <!-- Imagen principal -->
  <div class="promo-img-container">
    <img src="images/promostempo.jpg" alt="Promoción Regreso a Clases" class="promo-img">
  </div>

  <!-- Contenedor de tarjetas -->
  <div class="promos-container">

    <!-- Promoción 1 -->
    <div class="promo-card">
      <div class="promo-card-header">
        <h3>Combo Regreso a Clases 📷</h3>
        <span class="promo-price">Desde $3.50</span>
      </div>
      <div class="promo-card-body">
        <ul>
          <li>6 fotos carnet 3x4cm</li>
          <li>1 foto media postal</li>
          <li>1 llavero</li>
        </ul>
        <span class="promo-price">$5.50 📂</span>
        <ul>
          <li>Con Archivos digitales incluidos</li>
        </ul>
        <?php
        $combo = "Combo Regreso a Clases";
        $mensaje = "Hola, quiero más información sobre el combo: {$combo}";
        $mensajeCodificado = urlencode($mensaje);
        ?>
        <a href="https://web.whatsapp.com/send?phone=593998220201&text=<?php echo $mensajeCodificado; ?>" 
           target="_blank" 
           class="whatsapp-btn">
           💬 Consultar por este combo
        </a>
      </div>
    </div>

    <!-- Promoción 2 -->
    <div class="promo-card">
      <div class="promo-card-header">
        <h3>Promo A 📷</h3>
        <span class="promo-price">$5</span>
      </div>
      <div class="promo-card-body">
        <ul>
          <li>6 fotos carnet 3x4cm</li>
          <li>1 foto media postal</li>
          <li>1 llavero</li>
          <li>1 Foto tamaño postal con diseño personalizado</li>
        </ul>
        <?php
        $combo = "Promo A";
        $mensaje = "Hola, quiero más información sobre el combo: {$combo}";
        $mensajeCodificado = urlencode($mensaje);
        ?>
        <a href="https://web.whatsapp.com/send?phone=593998220201&text=<?php echo $mensajeCodificado; ?>" 
           target="_blank" 
           class="whatsapp-btn">
           💬 Consultar por este combo
        </a>
      </div>
    </div>

    <!-- Promoción 3 -->
    <div class="promo-card">
      <div class="promo-card-header">
        <h3>Promo B 📷</h3>
        <span class="promo-price">$6</span>
      </div>
      <div class="promo-card-body">
        <ul>
          <li>6 fotos carnet 3x4cm</li>
          <li>1 foto media postal</li>
          <li>1 llavero</li>
          <li>1 Foto tamaño postal con diseño personalizado</li>
          <li>1 cuadro Acrílico</li>
        </ul>
        <?php
        $combo = "Promo B";
        $mensaje = "Hola, quiero más información sobre el combo: {$combo}";
        $mensajeCodificado = urlencode($mensaje);
        ?>
        <a href="https://web.whatsapp.com/send?phone=593998220201&text=<?php echo $mensajeCodificado; ?>" 
           target="_blank" 
           class="whatsapp-btn">
           💬 Consultar por este combo
        </a>
      </div>
    </div>

    <!-- Promoción C -->
    <div class="promo-card">
      <div class="promo-card-header">
        <h3>Promo C 📷</h3>
        <span class="promo-price">$7</span>
      </div>
      <div class="promo-card-body">
        <ul>
          <li>6 fotos carnet 3x4cm</li>
          <li>1 foto media postal</li>
          <li>1 llavero</li>
          <li>1 Foto tamaño postal con diseño personalizado</li>
          <li>1 cuadro de Madera 10x15cm</li>
        </ul>
        <?php
        $combo = "Promo C";
        $mensaje = "Hola, quiero más información sobre el combo: {$combo}";
        $mensajeCodificado = urlencode($mensaje);
        ?>
        <a href="https://web.whatsapp.com/send?phone=593998220201&text=<?php echo $mensajeCodificado; ?>" 
           target="_blank" 
           class="whatsapp-btn">
           💬 Consultar por este combo
        </a>
      </div>
    </div>

    <!-- Promoción D -->
    <div class="promo-card">
      <div class="promo-card-header">
        <h3>Promo D 📷</h3>
        <span class="promo-price">$8</span>
      </div>
      <div class="promo-card-body">
        <ul>
          <li>6 fotos carnet 3x4cm</li>
          <li>1 foto media postal</li>
          <li>1 llavero</li>
          <li>1 Foto tamaño postal con diseño personalizado</li>
          <li>1 cuadro de Madera 13x18cm</li>
        </ul>
        <?php
        $combo = "Promo D";
        $mensaje = "Hola, quiero más información sobre el combo: {$combo}";
        $mensajeCodificado = urlencode($mensaje);
        ?>
        <a href="https://web.whatsapp.com/send?phone=593998220201&text=<?php echo $mensajeCodificado; ?>" 
           target="_blank" 
           class="whatsapp-btn">
           💬 Consultar por este combo
        </a>
      </div>
    </div>

  </div>

  <!-- Nota final -->
  <div class="promo-footer">
    <p>📅 <strong>Ofertas válidas hasta agotar Stock</strong><br>
    📞 Contáctanos para más información o personalizar tu paquete.</p>
  </div>
</div>