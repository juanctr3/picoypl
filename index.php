<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pico y Placa Colombia 2025 - Consulta Restricciones Vehiculares Hoy</title>
    <meta name="description" content="Consulta el pico y placa hoy en Bogotá, Medellín, Cali, Bucaramanga y Barranquilla. Información actualizada 2025, alertas personalizadas y calendario de restricciones.">
    <meta property="og:title" content="Pico y Placa Colombia - Consulta Restricciones Hoy">
    <meta property="og:description" content="Información actualizada del pico y placa en las principales ciudades de Colombia">
    <meta property="og:image" content="/og-image.jpg">
    <link rel="canonical" href="https://picoyplacacolombia.com">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bg-animation"></div>
    
    <div class="floating-car" style="top: 10%; animation-delay: 0s;">🚗</div>
    <div class="floating-car" style="top: 30%; animation-delay: 5s;">🚙</div>
    <div class="floating-car" style="top: 50%; animation-delay: 10s;">🚕</div>
    <div class="floating-car" style="top: 70%; animation-delay: 15s;">🏍️</div>
    <div class="floating-car" style="top: 90%; animation-delay: 20s;">🚐</div>

    <header>
        <div class="header-content">
            <div class="logo">
                <div class="logo-icon">🚦</div>
                <span>Pico y Placa Colombia</span>
            </div>
            <nav>
                <a href="#inicio">Inicio</a>
                <a href="#ciudades">Ciudades</a>
                <a href="#calendario">Calendario</a>
                <a href="#alertas">Alertas</a>
                <a href="#login">Ingresar</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <section class="hero">
            <h1>Consulta el Pico y Placa en Colombia</h1>
            <div class="date-display" id="currentDate">
                📅 Domingo, 24 de Agosto de 2025
            </div>
            
            <div class="city-grid">
                <div class="city-card" onclick="selectCity('bogota')">
                    <div class="city-icon">🏙️</div>
                    <div class="city-name">Bogotá</div>
                    <div class="city-status">Par/Impar • 6AM-9PM</div>
                </div>
                <div class="city-card" onclick="selectCity('medellin')">
                    <div class="city-icon">🌆</div>
                    <div class="city-name">Medellín</div>
                    <div class="city-status">2 dígitos • 5AM-8PM</div>
                </div>
                <div class="city-card" onclick="selectCity('cali')">
                    <div class="city-icon">🌃</div>
                    <div class="city-name">Cali</div>
                    <div class="city-status">2 dígitos • 6AM-7PM</div>
                </div>
                <div class="city-card" onclick="selectCity('bucaramanga')">
                    <div class="city-icon">🏛️</div>
                    <div class="city-name">Bucaramanga</div>
                    <div class="city-status">Trimestral • 6AM-8PM</div>
                </div>
                <div class="city-card" onclick="selectCity('barranquilla')">
                    <div class="city-icon">🌴</div>
                    <div class="city-name">Barranquilla</div>
                    <div class="city-status">Solo Taxis • 6AM-9PM</div>
                </div>
            </div>
        </section>

        <section class="plate-checker">
            <h2>🔍 Verifica tu Placa</h2>
            <div class="vehicle-type-selector">
                <button class="vehicle-type active" onclick="selectVehicleType('particular')">
                    🚗 Particular
                </button>
                <button class="vehicle-type" onclick="selectVehicleType('taxi')">
                    🚕 Taxi
                </button>
                <button class="vehicle-type" onclick="selectVehicleType('moto')">
                    🏍️ Moto
                </button>
                <button class="vehicle-type" onclick="selectVehicleType('camion')">
                    🚚 Camión
                </button>
            </div>
            <div class="plate-input-group">
                <input type="text" class="plate-input" id="plateInput" placeholder="ABC-123" maxlength="7">
                <button class="check-btn" onclick="checkPlate()">Verificar Restricción</button>
            </div>
            
            <div id="resultContainer"></div>
        </section>

        <section class="schedule-section">
            <h2>📅 Horario Semanal</h2>
            <div class="schedule-grid" id="scheduleGrid">
                </div>
        </section>

        <section class="alert-section">
            <div class="alert-title">🔔 Recibe Alertas Personalizadas</div>
            <p>No te arriesgues a multas. Recibe recordatorios antes de que aplique tu pico y placa.</p>
            <div class="alert-form">
                <input type="email" class="alert-input" placeholder="tu@email.com">
                <input type="tel" class="alert-input" placeholder="300 123 4567">
                <button class="alert-btn">Activar Alertas</button>
            </div>
        </section>

        <section class="features">
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <div class="feature-title">Actualización en Tiempo Real</div>
                <div class="feature-description">Información actualizada al instante sobre restricciones y cambios.</div>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <div class="feature-title">Notificaciones Inteligentes</div>
                <div class="feature-description">Alertas por SMS, Email y Push antes de tu restricción.</div>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🗓️</div>
                <div class="feature-title">Calendario Completo</div>
                <div class="feature-description">Planifica con 60 días de anticipación incluyendo festivos.</div>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <div class="feature-title">100% Preciso</div>
                <div class="feature-description">Información oficial verificada de las secretarías de movilidad.</div>
            </div>
        </section>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Ciudades</h3>
                <ul class="footer-links">
                    <li><a href="/bogota">Bogotá</a></li>
                    <li><a href="/medellin">Medellín</a></li>
                    <li><a href="/cali">Cali</a></li>
                    <li><a href="/bucaramanga">Bucaramanga</a></li>
                    <li><a href="/barranquilla">Barranquilla</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Recursos</h3>
                <ul class="footer-links">
                    <li><a href="/calendario">Calendario 2025</a></li>
                    <li><a href="/festivos">Días Festivos</a></li>
                    <li><a href="/multas">Calculadora de Multas</a></li>
                    <li><a href="/api">API para Desarrolladores</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Ayuda</h3>
                <ul class="footer-links">
                    <li><a href="/como-funciona">¿Cómo funciona?</a></li>
                    <li><a href="/preguntas">Preguntas Frecuentes</a></li>
                    <li><a href="/contacto">Contacto</a></li>
                    <li><a href="/terminos">Términos y Condiciones</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Síguenos</h3>
                <ul class="footer-links">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">WhatsApp</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <div class="toast" id="toast">
        <span class="toast-icon">✅</span>
        <span id="toastMessage">Mensaje</span>
    </div>

    <div class="modal" id="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="modalTitle">Título</h2>
                <button class="modal-close" onclick="closeModal()">✕</button>
            </div>
            <div id="modalBody">
                Contenido
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
