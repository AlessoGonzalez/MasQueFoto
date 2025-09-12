<!-- inicio.php -->
<style>
  * { margin: 0; padding: 0; box-sizing: border-box; }

  :root {
    --bg: #f0f2f5;
    --text: #1d1d1f;
    --shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    --accent: #e91e63;
    --accent-hover: #c2185b;
    --gray: #86868b;

    /* Gradientes suaves y profesionales */
    --card1: linear-gradient(135deg, #ff7b25, #ffcc00);
    --card2: linear-gradient(135deg, #6a11cb, #2575fc);
    --card3: linear-gradient(135deg, #4CAF50, #8BC34A);
    --card4: linear-gradient(135deg, #FF5722, #F44336);
  }

  .dark-mode {
    --bg: #111114;
    --text: #f5f5f7;
    --shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    --gray: #8e8e93;

    --card1: linear-gradient(135deg, #8d6b22, #b38a00);
    --card2: linear-gradient(135deg, #3a0ca3, #1a1a2e);
    --card3: linear-gradient(135deg, #2e7d32, #4a9f5d);
    --card4: linear-gradient(135deg, #c62828, #8b0000);
  }

  body {
    font-family: 'SF Pro Display', 'Montserrat', sans-serif;
    background-color: var(--bg);
    color: var(--text);
    line-height: 1.6;
    transition: background-color 0.4s ease, color 0.4s ease;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
  }

  .header {
    text-align: center;
    margin-bottom: 60px;
  }

  h1 {
    font-size: 3.2em;
    font-weight: 700;
    margin-bottom: 12px;
    color: var(--accent);
  }

  .subtitle {
    font-size: 1.2em;
    color: var(--gray);
  }

  .theme-toggle {
    position: fixed;
    top: 20px;
    right: 20px;
    background: var(--accent);
    color: white;
    border: none;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    font-size: 1.2em;
    cursor: pointer;
    box-shadow: var(--shadow);
    z-index: 100;
    transition: transform 0.2s ease;
  }

  .theme-toggle:hover {
    transform: scale(1.1);
  }

  .section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 60px 0;
    gap: 30px;
  }

  .reverse {
    flex-direction: row-reverse;
  }

  .section img {
    width: 45%;
    max-height: 300px;
    object-fit: cover;
    border-radius: 16px;
    box-shadow: var(--shadow);
    transition: transform 0.3s ease;
  }

  .section img:hover {
    transform: scale(1.03);
  }

  .card {
    flex: 1;
    padding: 30px;
    border-radius: 16px;
    box-shadow: var(--shadow);
    color: white;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    backdrop-filter: blur(10px);
  }

  .card:hover {
    transform: translateY(-8px);
    box-shadow: 0 0 30px rgba(255, 255, 255, 0.2);
  }

  .card h2 {
    font-size: 1.6em;
    margin-bottom: 12px;
  }

  .card p {
    margin-bottom: 15px;
    font-size: 1.1rem;
  }

  .card button {
    background: rgba(255, 255, 255, 0.2);
    border: none;
    color: white;
    padding: 10px 20px;
    border-radius: 24px;
    cursor: pointer;
    font-weight: 600;
    transition: background 0.3s;
  }

  .card button:hover {
    background: rgba(255, 255, 255, 0.35);
  }

  .card1 { background: var(--card1); }
  .card2 { background: var(--card2); }
  .card3 { background: var(--card3); }
  .card4 { background: var(--card4); }

  footer {
    text-align: center;
    padding: 40px 20px;
    color: var(--gray);
    margin-top: 80px;
    font-size: 0.9em;
  }

  /* Estilo del modal */
  .modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.85);
    justify-content: center;
    align-items: center;
    z-index: 1000;
    animation: fadeIn 0.3s ease;
  }

  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }

  .modal-content {
    background: var(--bg);
    color: var(--text);
    padding: 30px;
    border-radius: 16px;
    max-width: 600px;
    max-height: 80vh;
    overflow-y: auto;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
    line-height: 1.7;
    animation: slideUp 0.4s ease;
  }

  @keyframes slideUp {
    from { transform: translateY(30px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
  }

  .modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
  }

  .modal-header h3 {
    font-size: 1.5em;
    color: var(--accent);
  }

  .close-btn {
    background: #ff3b30;
    color: white;
    border: none;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1.2em;
  }

  @media(max-width: 900px) {
    .section, .reverse {
      flex-direction: column;
      text-align: center;
    }

    .section img {
      width: 100%;
      height: 200px;
    }

    h1 {
      font-size: 2.5em;
    }
  }
    .location {
    text-align: center;
    margin-top: 20px;
  }
  .btn-ubicacion {
    display: inline-block;
    padding: 12px 20px;
    background-color: #ff9800;
    color: white;
    font-weight: bold;
    text-decoration: none;
    border-radius: 8px;
    transition: background 0.3s ease;
  }
  .btn-ubicacion:hover {
    background-color: #e68900;
  }
</style>

<div id="inicio" class="tab-content active">
  <button class="theme-toggle" id="themeToggle">🌙</button>

  <div class="container">
    <div class="header">
      <h1>Bienvenidos a Mas Que Foto</h1>
      <p class="subtitle">Donde cada imagen es un recuerdo eterno.</p>

    </div>
    <div class="location">
  <p><strong>📍 Encuéntranos aquí:</strong></p>
  <a href="https://www.google.com/maps?q=-1.1730001,-78.5427717&z=17&hl=es" target="_blank" class="btn-ubicacion">
    Ver ubicación en Google Maps
  </a>
</div>

    <!-- Sección 1: Historia -->
    <div class="section">
      <img src="images/local.jpeg" alt="Estudio fotográfico desde 2004">
      <div class="card card1">
        <h2>📖 Nuestra Historia</h2>
        <p>Más Que Foto se formó en 2004 con una misión clara: capturar momentos auténticos con pasión y profesionalismo. Lo empezamos como un pequeño estudio familiar y hoy somos referente en retratos, eventos y books personalizados.</p>
        <button onclick="openModal('historia')">Leer más</button>
      </div>
    </div>

    <!-- Sección 2: Equipo -->
    <div class="section reverse">
      <img src="images/trabajom.jpg" alt="Equipo de trabajo">
      <div class="card card2">
        <h2>👥 Nuestro Equipo</h2>
        <p>Liderado por Marcelo González y Holguer Valdez, nuestro equipo combina arte, técnica y calidez humana. Cada sesión es única porque creemos que detrás de cada foto hay una persona, una historia, una emoción.</p>
        <button onclick="openModal('equipo')">Conocernos</button>
      </div>
    </div>

    <!-- Sección 3: Local -->
    <div class="section">
      <img src="images/holguer3.jpg" alt="Interior del estudio">
      <div class="card card3">
        <h2>📍 Nuestro Espacio</h2>
        <p>Ubicados en pleno centro, contamos con un estudio amplio, iluminación , fondos temáticos y cabina de impresión rápida, Cuadros, Trofeos, Recuerdos,. Todo pensado para que te sientas cómodo y disfrutes cada instante.</p>
        <button onclick="openModal('local')">Ver detalles</button>
      </div>
    </div>

    <!-- Sección 4: Compromiso -->
    <div class="section reverse">
      <img src="images/trabajom1.jpg" alt="Trabajadores en acción">
      <div class="card card4">
        <h2>❤️ Nuestro Compromiso</h2>
        <p>No solo entregamos fotos. Entregamos recuerdos. Trabajamos con paciencia, creatividad y respeto. Desde carnet escolares hasta bodas, cada cliente es especial.</p>
        <button onclick="openModal('compromiso')">Nuestra promesa</button>
      </div>
    </div>
  </div>

  <footer>
    &copy; 2025 MasQueFoto - Estudio Fotográfico | Todos los derechos reservados
  </footer>

  <!-- Modal -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h3 id="modal-title"></h3>
        <button class="close-btn" onclick="closeModal()">×</button>
      </div>
      <p id="modal-text"></p>
    </div>
  </div>

  <script>
    function openModal(type) {
      const modal = document.getElementById('modal');
      const title = document.getElementById('modal-title');
      const text = document.getElementById('modal-text');

      if (type === 'historia') {
        title.textContent = 'Nuestra Historia – 21 Años de Pasión';
        text.innerHTML = `
          <strong>MasQueFoto</strong> comenzó en 2004 como un sueño compartido entre amigos apasionados por la fotografía. 
          Desde un pequeño local de 30m², fuimos creciendo gracias a la confianza de miles de clientes.<br><br>
          Hoy, después de más de <strong>21 años</strong>, seguimos con el mismo entusiasmo: capturar lo auténtico, lo espontáneo, lo humano. 
          No usamos plantillas ni poses forzadas. Cada sesión es una conversación, una conexión.<br><br>
          Hemos documentado miles de momentos: primeras comuniones, graduaciones, 15 años, aniversarios y hasta sesiones post-maternidad. 
          Y cada vez que alguien vuelve a decirnos: "¡Gracias, esta foto la voy a guardar toda la vida!", sabemos que vamos por buen camino.
        `;
      } else if (type === 'equipo') {
        title.textContent = 'Marcelo & Holguer – Tu Equipo de Confianza';
        text.innerHTML = `
          <strong>Marcelo González</strong> (Fotógrafo Profesional):<br>
          Con formación en retrato artístico, Marcelo tiene el don de capturar la esencia de cada persona. 
          Especialista en sesiones familiares y eventos, cree que “una buena foto no se planea, se siente”.<br><br>
          <strong>Holguer Valdez</strong> (Fotógrafo Profesional):<br>
          Experto en cobertura dinámica, Holguer se mueve como pez en el agua en bodas, fiestas y reuniones. 
          Su estilo: natural, espontáneo y lleno de movimiento.<br><br>
          Ambos trabajan en armonía.
        `;
      } else if (type === 'local') {
        title.textContent = 'Nuestro Estudio – Cómodo, Moderno y Acogedor';
        text.innerHTML = `
          Nuestro local está ubicado en <strong>Av. Fotografía #123, Ciudad Central</strong>.<br><br>
          ✅ <strong>Área de espera</strong>: sillas, música relajante<br>
          ✅ <strong>Estudio principal</strong>: iluminación profesional y fondos intercambiables<br>
          ✅ <strong>Cabina de impresión</strong>: entrega inmediata de fotos carnet y tamaño postal<br>
          ✅ <strong>Zona de edición</strong>: donde damos el toque final a cada imagen<br><br>
          Horario: Lunes a Sábado de 9:00 a 18:00.<br>
          ¡Ven a conocernos!.
        `;
      } else if (type === 'compromiso') {
        title.textContent = 'Nuestra Promesa – Calidad, Rapidez y Corazón';
        text.innerHTML = `
          En MasQueFoto no trabajamos solo con cámaras. Trabajamos con <strong>corazón</strong>.<br><br>
          • ✅ <strong>Entrega en 48 horas</strong> (impresas y digitales)<br>
          • ✅ <strong>Edición profesional</strong> sin exageraciones<br>
          • ✅ <strong>Precios justos</strong> y paquetes personalizables<br>
          • ✅ <strong>Atención humana</strong>, sin automatismos fríos<br><br>
          Queremos que al salir de aquí digas: “Valió la pena. Me sentí escuchado, cuidado y feliz”.
        `;
      }

      modal.style.display = 'flex';
    }

    function closeModal() {
      document.getElementById('modal').style.display = 'none';
    }

    document.getElementById('modal').addEventListener('click', function(e) {
      if (e.target === this) closeModal();
    });

    // Cambiar tema
    const themeToggle = document.getElementById('themeToggle');
    themeToggle.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');
      themeToggle.textContent = document.body.classList.contains('dark-mode') ? '☀️' : '🌙';
    });
  </script>
</div>