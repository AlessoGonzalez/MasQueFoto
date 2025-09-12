<!-- trabajos.php -->
<style>
  /* === Galería de Trabajos - Estilos integrados === */
  #trabajos {
    text-align: center;
    font-family: 'Montserrat', sans-serif;
  }

  #trabajos h2 {
    margin-bottom: 1rem;
    color: #333;
    font-size: 2rem;
  }

  #trabajos .gallery-intro {
    color: #555;
    font-size: 1.1rem;
    margin-bottom: 2rem;
    display: block;
  }

  .gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1rem;
    padding: 1rem;
    max-width: 1200px;
    margin: 0 auto;
  }

  .gallery img {
    width: 300px;
    height: 220px;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    user-select: none;
  }

  .gallery img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  }

  /* Mensajes */
  #trabajos p {
    grid-column: 1 / -1;
    color: #888;
    font-style: italic;
    font-size: 1.1rem;
    text-align: center;
    margin: 1rem 0;
  }

  #trabajos p strong {
    color: #e91e63;
  }

  @media (max-width: 768px) {
    .gallery img {
      width: 100%;
      max-width: 300px;
      height: 220px;
    }
  }
</style>

<div id="trabajos" class="tab-content">
  <h2>Nuestros Trabajos</h2>
  <p class="gallery-intro">Conoce algunos de nuestros proyectos recientes. Cada foto cuenta una historia.</p>

  <div class="gallery">
    <?php
    $ruta = 'images/trabajos/';

    // Verifica si la carpeta existe
    if (!is_dir($ruta)) {
      echo '<p>❌ La carpeta <strong>' . htmlspecialchars($ruta) . '</strong> no existe.</p>';
    } else {
      // Busca todas las imágenes (insensible a mayúsculas)
      $archivos = glob($ruta . '*.{jpg,jpeg,png,JPG,JPEG,PNG}', GLOB_BRACE);

      // Verifica si hay archivos
      if (empty($archivos)) {
        echo '<p>📭 No hay imágenes en la carpeta. Agrega fotos con extensión .jpg, .jpeg o .png</p>';
      } else {
        // Ordena alfabéticamente (insensible a mayúsculas)
        usort($archivos, 'strcasecmp');

        $contador = 0;
        foreach ($archivos as $index => $archivo) {
          // Verifica que el archivo exista y sea válido
          if (!file_exists($archivo)) continue;

          $nombre = basename($archivo);
          $src = htmlspecialchars($archivo, ENT_QUOTES, 'UTF-8');

          // Genera el HTML seguro
          echo "<img src='{$src}' alt='Trabajo {$nombre}' 
                    onclick='openLightbox(\"trabajos\", \"{$src}\", {$index})' 
                    data-index='{$index}'>";
          $contador++;
        }

        // Mensaje de depuración (opcional, puedes quitarlo después)
        // echo "<p style='grid-column: 1 / -1; color: green;'>✅ Se cargaron {$contador} imágenes.</p>";
      }
    }
    ?>
  </div>
</div>