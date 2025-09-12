<!-- catalogo.php -->
<style>
  /* === Catálogo Profesional - Estilos integrados === */
  #catalogo {
    text-align: center;
    font-family: 'Montserrat', sans-serif;
    background: #f9f9f9;
    padding: 2rem 0;
  }

  #catalogo h2 {
    margin-bottom: 1rem;
    color: #333;
    font-size: 2.2rem;
    font-weight: 600;
  }

  #catalogo .catalogo-intro {
    color: #555;
    font-size: 1.1rem;
    margin-bottom: 2rem;
    display: block;
  }

  .catalogo-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1.5rem;
    padding: 1rem;
    max-width: 1400px;
    margin: 0 auto;
  }

  .catalogo-item {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: 300px;
    position: relative;
  }

  .catalogo-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
  }

  .catalogo-item img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    display: block;
    cursor: pointer;
    border-bottom: 1px solid #eee;
  }

  .catalogo-item .details {
    padding: 0.8rem;
    text-align: left;
    color: #333;
    font-size: 0.95rem;
    line-height: 1.5;
  }

  .catalogo-item .details strong {
    color: #e91e63;
  }

  /* Botón de WhatsApp */
  .whatsapp-btn {
    display: block;
    margin-top: 0.5rem;
    padding: 0.6rem;
    text-align: center;
    background-color: #25D366;
    color: white;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    border-radius: 4px;
    transition: background-color 0.3s;
  }

  .catalogo-item .whatsapp-btn:hover {
    background-color: #128C7E;
  }

  /* Mensajes */
  #catalogo p {
    grid-column: 1 / -1;
    color: #888;
    font-style: italic;
    font-size: 1.1rem;
    margin: 1rem 0;
  }

  #catalogo p strong {
    color: #e91e63;
  }

  @media (max-width: 768px) {
    .catalogo-item {
      width: 100%;
      max-width: 320px;
    }
  }
</style>

<!-- Contenido de la pestaña Catálogo -->
<div id="catalogo" class="tab-content">
  <h2>Nuestro Catálogo</h2>
  <p class="catalogo-intro">Descubre nuestras propuestas profesionales. Perfectas para eventos, retratos y sesiones temáticas.</p>

  <div class="catalogo-grid">
    <?php
    $ruta = 'images/catalogo/';
    $numero = '593998220201'; // Número de Ecuador sin 0 inicial
    
    if (is_dir($ruta)) {
      $archivos = glob($ruta . '*.{jpg,jpeg,png,JPG,JPEG,PNG}', GLOB_BRACE);
      sort($archivos);

      if (count($archivos) > 0) {
        foreach ($archivos as $index => $archivo) {
          $nombre = basename($archivo);
          $nombreSinExt = pathinfo($nombre, PATHINFO_FILENAME);
          $src = htmlspecialchars($archivo, ENT_QUOTES, 'UTF-8');
          
          // Mejora: reemplaza guiones bajos por espacios
          $nombreAmigable = str_replace('_', ' ', $nombreSinExt);
          
          // Mensaje personalizado
          $mensaje = "¡Hola! Quiero más información sobre la foto: {$nombreAmigable}";
          $mensajeCodificado = urlencode($mensaje);
          
          // Enlace a WhatsApp Web (no a la app de escritorio)
          $linkWpp = "https://web.whatsapp.com/send?phone={$numero}&text={$mensajeCodificado}";

          echo "
          <div class='catalogo-item'>
            <img src='{$src}' 
                 alt='Catálogo {$nombre}' 
                 onclick='openLightbox(\"catalogo\", \"{$src}\", {$index})' 
                 data-index='{$index}'>
            <div class='details'>
              <strong>Foto:</strong> {$nombreAmigable}<br>
              <small>Click para ampliar</small>
            </div>
            <!-- Botón de WhatsApp (siempre en web) -->
            <a href=\"{$linkWpp}\" 
               target=\"_blank\" 
               class=\"whatsapp-btn\" 
               aria-label=\"Consultar por WhatsApp\">
               💬 ¡Quiero más info!
            </a>
          </div>";
        }
      } else {
        echo '<p>No hay imágenes en el catálogo. Agrega fotos a <strong>images/catalogo/</strong></p>';
      }
    } else {
      echo '<p>La carpeta <strong>images/catalogo/</strong> no existe. Por favor, créala.</p>';
    }
    ?>
  </div>
</div>