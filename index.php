<?php
// Puedes agregar lógica PHP aquí más adelante
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MasQueFoto - Estudio de Fotografía</title>
  <link rel="stylesheet" href="styles.css" />
  <!-- Font Awesome para íconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Estilos personalizados (fondo + navbar) -->
  <style>
    /* === SCROLLBAR PERSONALIZADO === */
::-webkit-scrollbar {
  width: 12px;
}

::-webkit-scrollbar-track {
  background: #1a1a1a;
  border-radius: 10px;
  margin-block: 1rem; /* Evita que toque arriba/abajo */
}

::-webkit-scrollbar-thumb {
  background: linear-gradient(transparent, #ff7b25, #ffcc00, #ff7b25);
  border-radius: 10px;
  border: 2px solid #1a1a1a;
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  transition: background 0.3s ease;
}

::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(#ff7b25, #ffcc00);
  transform: scale(1.02);
}
    /* === FONDO GENERAL INTENSO (PLATA OSCURA / PLOMO PROFUNDO) === */
    body {
      background: #121212;
      color: #e0e0e0;
      font-family: 'Montserrat', sans-serif;
      margin: 0;
      padding: 0;
    }

    /* === HEADER Y LOGO === */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 5%;
     background: linear-gradient(135deg, #ff7b25, #ffcc00);;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .logo img {
      width: 200px;
      height: auto;
      transition: transform 0.3s ease;
    }

    .logo img:hover {
      transform: scale(1.05);
    }

    /* === BARRA DE NAVEGACIÓN CON GRADIENTE DORADO === */
    nav {
      background: linear-gradient(135deg, #080808ff, #ffcc00);
      border-radius: 50px;
      padding: 0.6rem 1rem;
      box-shadow: 0 6px 20px rgba(255, 123, 37, 0.3);
    }

    ul.tabs {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
      gap: 0.8rem;
      flex-wrap: wrap;
      justify-content: center;
    }

    .tab-link {
      color: white !important;
      text-decoration: none;
      font-weight: 600;
      font-size: 1rem;
      padding: 0.6rem 1.1rem;
      border-radius: 50px;
      transition: all 0.3s ease;
    }

    .tab-link:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .tab-link.active {
      background: white;
      color: #e91e63 !important;
      font-weight: 700;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    /* Responsive: menú vertical en móvil */
    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 1rem;
        padding: 1rem;
      }

      nav {
        width: 90%;
      }

      ul.tabs {
        flex-direction: column;
        align-items: center;
      }

      .tab-link {
        width: 85%;
        text-align: center;
      }
    }

    /* Asegurar que el contenido principal tenga fondo oscuro */
    main.gallery-container {
      min-height: 80vh;
      padding: 2rem 0;
    }

    footer {
      background: #121212;
      color: #aaa;
      text-align: center;
      padding: 2rem 1rem;
      font-size: 0.9rem;
      border-top: 1px solid #333;
    }

    footer .social-links {
      margin-bottom: 1rem;
    }

    footer .social-links a {
      color: #ff7b25;
      margin: 0 1rem;
      transition: color 0.3s;
    }

    footer .social-links a:hover {
      color: #ffcc00;
    }
  </style>
</head>
<body>

  <!-- Encabezado -->
  <header>
    <div class="logo">
      <!-- Imagen del logo que lleva a Inicio -->
      <a href="#" class="tab-link" data-tab="inicio">
        <img src="images/logo.jpeg" alt="MasQueFoto - Ir a Inicio">
      </a>
    </div>
    <nav>
      <ul class="tabs">
        <li><a href="#" class="tab-link active" data-tab="inicio">Inicio</a></li>
        <li><a href="#" class="tab-link" data-tab="promociones">Promociones</a></li>
        <li><a href="#" class="tab-link" data-tab="eventos">Eventos</a></li>
        <li><a href="#" class="tab-link" data-tab="trabajos">Trabajos</a></li>
        <li><a href="#" class="tab-link" data-tab="catalogo">Catálogo</a></li>
        <li><a href="#" class="tab-link" data-tab="contactos">Contactos</a></li>
      </ul>
    </nav>
  </header>

  <!-- Contenido de las pestañas -->
  <main class="gallery-container">
    <?php include 'inicio.php'; ?>
    <?php include 'promociones.php'; ?>
    <?php include 'eventos.php'; ?>
    <?php include 'trabajos.php'; ?>
    <?php include 'catalogo.php'; ?>
    <?php include 'contactos.php'; ?>
  </main>

  <!-- Pie de página con redes sociales -->
  <footer>
    <div class="social-links">
      <a href="https://www.facebook.com/profile.php?id=100063798679736" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-facebook fa-2x"></i>
      </a>
      <a href="https://www.instagram.com/mas.quefoto?igsh=MXEyODdlaW5lZm5zbw==" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-instagram fa-2x"></i>
      </a>
      <a href="https://www.tiktok.com/@tuusuario" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-tiktok fa-2x"></i>
      </a>
    </div>
    <p>&copy; 2025 MasQueFoto. Todos los derechos reservados.</p>
  </footer>

  <!-- Botón flotante de WhatsApp -->
  <a href="#" target="_blank" class="whatsapp-float" id="whatsapp-link" aria-label="Contacto por WhatsApp" style="
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #25D366;
    color: white;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2rem;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    z-index: 100;
    transition: transform 0.3s, background 0.3s;
    text-decoration: none;
  ">
    <i class="fab fa-whatsapp"></i>
  </a>

  <!-- ========== LIGHTBOX ÚNICO Y CENTRALIZADO ========== -->
  <div class="lightbox" id="lightbox">
    <span class="close" onclick="closeLightbox()">&times;</span>
    <span class="arrow prev" onclick="prevImage()">&#10094;</span>
    <img id="lightbox-img">
    <span class="arrow next" onclick="nextImage()">&#10095;</span>
    <div class="counter" id="lightbox-counter"></div>
  </div>

  <style>
    /* Estilos del lightbox */
    .lightbox {
      display: none;
      position: fixed;
      z-index: 9999;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.9);
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 2rem;
    }

    .lightbox.active {
      display: flex;
    }

    .lightbox img {
      max-width: 90%;
      max-height: 80vh;
      border-radius: 8px;
      box-shadow: 0 4px 50px rgba(0, 0, 0, 0.5);
    }

    .lightbox .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      color: white;
      font-size: 3rem;
      cursor: pointer;
      background: rgba(0, 0, 0, 0.7);
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 10;
      transition: all 0.3s ease;
    }

    .lightbox .arrow:hover {
      background: rgba(0, 0, 0, 0.9);
      transform: translateY(-50%) scale(1.1);
    }

    .lightbox .prev { left: 20px; }
    .lightbox .next { right: 20px; }

    .lightbox .close {
      position: absolute;
      top: 20px;
      right: 30px;
      color: #fff;
      font-size: 3rem;
      font-weight: bold;
      cursor: pointer;
    }

    .lightbox .close:hover {
      transform: scale(1.2);
    }

    .counter {
      position: absolute;
      bottom: 20px;
      left: 0;
      right: 0;
      text-align: center;
      color: white;
      font-size: 1.2rem;
      font-weight: 600;
    }
  </style>

  <!-- ========== SCRIPT DEL LIGHTBOX INTELIGENTE ========== -->
  <script>
    let currentGallery = null;
    let currentImageIndex = 0;
    let gallerySources = [];

    function openLightbox(galleryName, src, index) {
      currentGallery = galleryName;
      if (galleryName === 'trabajos') {
        const images = document.querySelectorAll("#trabajos .gallery img");
        gallerySources = Array.from(images).map(img => img.src);
      } else if (galleryName === 'catalogo') {
        const images = document.querySelectorAll("#catalogo .catalogo-item img");
        gallerySources = Array.from(images).map(img => img.src);
      }
      currentImageIndex = index;
      document.getElementById("lightbox-img").src = src;
      document.getElementById("lightbox").classList.add("active");
      document.body.style.overflow = "hidden";
      updateCounter();
    }

    function closeLightbox() {
      document.getElementById("lightbox").classList.remove("active");
      document.body.style.overflow = "";
    }

    function nextImage() {
      if (currentImageIndex < gallerySources.length - 1) {
        currentImageIndex++;
      } else {
        currentImageIndex = 0;
      }
      document.getElementById("lightbox-img").src = gallerySources[currentImageIndex];
      updateCounter();
    }

    function prevImage() {
      if (currentImageIndex > 0) {
        currentImageIndex--;
      } else {
        currentImageIndex = gallerySources.length - 1;
      }
      document.getElementById("lightbox-img").src = gallerySources[currentImageIndex];
      updateCounter();
    }

    function updateCounter() {
      const counter = document.getElementById("lightbox-counter");
      if (counter && gallerySources.length > 0) {
        counter.textContent = `${currentImageIndex + 1} de ${gallerySources.length}`;
      }
    }

    document.addEventListener("keydown", function(e) {
      const lightbox = document.getElementById("lightbox");
      if (!lightbox.classList.contains("active")) return;
      if (e.key === "Escape") closeLightbox();
      if (e.key === "ArrowRight") nextImage();
      if (e.key === "ArrowLeft") prevImage();
    });

    document.getElementById("lightbox").addEventListener("click", function(e) {
      if (e.target === this || e.target.classList.contains("close")) {
        closeLightbox();
      }
    });
  </script>

  <!-- ========== SCRIPT DE PESTAÑAS Y WHATSAPP ========== -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const tabLinks = document.querySelectorAll(".tab-link");
      const tabContents = document.querySelectorAll(".tab-content");

      tabLinks.forEach(link => {
        link.addEventListener("click", function (e) {
          e.preventDefault();
          tabLinks.forEach(l => l.classList.remove("active"));
          tabContents.forEach(c => c.classList.remove("active"));
          this.classList.add("active");
          const tabId = this.getAttribute("data-tab");
          document.getElementById(tabId).classList.add("active");
        });
      });

      const whatsappLink = document.getElementById("whatsapp-link");
      const numero = "593998220201";
      const hora = new Date().getHours();
      let mensaje = "";

      if (hora < 12) {
        mensaje = "Buenos días, quiero información sobre sus servicios de fotografía.";
      } else if (hora < 18) {
        mensaje = "Buenas tardes, quiero información sobre sus servicios de fotografía.";
      } else {
        mensaje = "Buenas noches, quiero información sobre sus servicios de fotografía.";
      }

      const mensajeCodificado = encodeURIComponent(mensaje);
      whatsappLink.href = `https://web.whatsapp.com/send?phone=${numero}&text=${mensajeCodificado}`;
    });
  </script>

</body>
</html>