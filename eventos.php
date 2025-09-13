<!-- eventos.php -->
<style>
  /* === Eventos - Diseño de promociones grandes y limpias === */
  #eventos {
    font-family: 'Montserrat', sans-serif;
    padding: 2rem 0;
    background-color: #f9f9f9;
  }

  .eventos-header {
    text-align: center;
    margin-bottom: 3rem;
  }

  .eventos-header .badge {
    font-size: 1.1rem;
    padding: 0.6rem 1.8rem;
  }

  .eventos-header h2 {
    font-size: 1.8rem;
    color: #333;
    margin: 1rem 0;
  }

  .eventos-header p {
    font-size: 1.1rem;
    color: #555;
    max-width: 700px;
    margin: 0 auto;
  }

  /* Cada promoción como sección independiente */
  .promo-seccion {
    text-align: center;
    margin: 4rem auto;
    max-width: 900px;
    padding: 0 1rem;
  }

  .promo-imagen {
    width: 100%;
    max-width: 800px;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease;
    display: block;
    margin: 0 auto 2rem;
  }

  .promo-imagen:hover {
    transform: scale(1.02);
  }

  .promo-titulo {
    font-size: 1.6rem;
    color: #e91e63;
    margin: 0.5rem 0;
  }

  .promo-precio {
    font-size: 1.4rem;
    font-weight: bold;
    color: #333;
    margin: 0.5rem 0;
  }

  .promo-descripcion {
    font-size: 1.1rem;
    color: #555;
    margin: 1rem auto;
    max-width: 600px;
    line-height: 1.6;
  }

  .whatsapp-btn {
    display: inline-block;
    margin-top: 1.5rem;
    padding: 0.9rem 1.5rem;
    background-color: #25D366;
    color: white;
    text-decoration: none;
    font-weight: 600;
    border-radius: 6px;
    font-size: 1.1rem;
    transition: background-color 0.3s;
  }

  .whatsapp-btn:hover {
    background-color: #128C7E;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .promo-seccion {
      margin: 3rem auto;
    }

    .promo-imagen {
      max-width: 100%;
      margin-bottom: 1.5rem;
    }

    .eventos-header h2 {
      font-size: 1.6rem;
    }

    .promo-titulo {
      font-size: 1.4rem;
    }

    .promo-precio {
      font-size: 1.3rem;
    }
  }
</style>

<div id="eventos" class="tab-content">
  <div class="eventos-header text-center">
    <span class="badge bg-primary text-white px-4 py-2 mb-3 fs-5">
      📸 BOOKS FOTOGRÁFICOS PARA EVENTOS
    </span>
    <h2>Inmortaliza tu Evento con un Book Profesional</h2>
    <p>
      Cada promoción está diseñada para que veas claramente el contenido del paquete.
    </p>
  </div>

  <!-- === PROMOCIÓN 1: Book Básico === -->
  <div class="promo-seccion">
    <img src="/images/Eventos/PromoBook2.jpeg" alt="Book Básico" class="promo-imagen">
    <h3 class="promo-titulo">Book Básico</h3>
    <div class="promo-precio">$105</div>
    <p class="promo-descripcion">
      PhotoBook de 6 Paginas 20x40 • 30 fotos impresas • Archivos digitales(Solo de las fotos escogidas) • Portada blanda
    </p>
    <div class="promo-precio">Cada foto extra sera impresa en 13x18 a $2c/u</div>
    <?php
    $paquete = "Book Básico";
    $mensaje = "Hola, quiero más información sobre el: {$paquete}";
    $mensajeCodificado = urlencode($mensaje);
    ?>
    <a href="https://web.whatsapp.com/send?phone=593998220201&text=<?php echo $mensajeCodificado; ?>" 
       target="_blank" 
       class="whatsapp-btn">
       💬 Consultar por Book Básico
    </a>
  </div>

  <!-- === PROMOCIÓN 2: Book Premium === -->
  <div class="promo-seccion">
    <img src="/images/Eventos/PromoBook1.jpeg" alt="Book Premium" class="promo-imagen">
    <h3 class="promo-titulo">Book Premium</h3>
    <div class="promo-precio">$180</div>
    <p class="promo-descripcion">
      PhotoBook de 12 Paginas 30x40 • 60 fotos impresas •Archivos Digitales (Solo de las fotos escogidas)• 1 Ampliacion 20x30 + Bastidor• 
    </p>
    <div class="promo-precio">Cada foto extra sera impresa en 13x18 a $2c/u</div>
       
    <?php
    $paquete = "Book Premium";
    $mensaje = "Hola, quiero más información sobre el: {$paquete}";
    $mensajeCodificado = urlencode($mensaje);
    ?>
    <a href="https://web.whatsapp.com/send?phone=593998220201&text=<?php echo $mensajeCodificado; ?>" 
       target="_blank" 
       class="whatsapp-btn">
       💬 Consultar por Book Premium
    </a>
  </div>

  <!-- === PROMOCIÓN 3: Book VIP === -->
  <div class="promo-seccion">
    <img src="/images/Eventos/PromoBook3.jpeg" alt="Book VIP" class="promo-imagen">
    <h3 class="promo-titulo">Book VIP</h3>
    <div class="promo-precio">$275</div>
    <p class="promo-descripcion">
      PhotoBook de 12 Paginas 30x60 • 75 fotos •25 fotos 13x18• Ampliacion 30x40 + Bastidor • Archivos Digitales (Solo de las fotos escogidas)
    </p>
    <div class="promo-precio">Cada foto extra sera impresa en 13x18 a $1.75c/u</div>
    
    <?php
    $paquete = "Book VIP";
    $mensaje = "Hola, quiero más información sobre el: {$paquete}";
    $mensajeCodificado = urlencode($mensaje);
    ?>
    <a href="https://web.whatsapp.com/send?phone=593998220201&text=<?php echo $mensajeCodificado; ?>" 
       target="_blank" 
       class="whatsapp-btn">
       💬 Consultar por Book VIP
    </a>
  </div>

  <!-- Nota final -->
  <div class="text-center mt-5" style="margin: 4rem auto; max-width: 700px; color: #666; font-style: italic; font-size: 1.1rem; line-height: 1.6;">
    <p>
      📅 Todos los books se entregan en 15 días con edición profesional.<br>
      📞 Personaliza tu paquete, pregunta por fechas disponibles o descuentos por temporada.
    </p>
  </div>
</div>