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
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #2563eb;
            --primary-dark: #1e40af;
            --secondary: #10b981;
            --danger: #ef4444;
            --warning: #f59e0b;
            --dark: #0f172a;
            --light: #f8fafc;
            --gray: #64748b;
            --success: #22c55e;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
            overflow-x: hidden;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            overflow: hidden;
        }

        .bg-animation::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 10px,
                rgba(255, 255, 255, 0.03) 10px,
                rgba(255, 255, 255, 0.03) 20px
            );
            animation: move 20s linear infinite;
        }

        @keyframes move {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }

        /* Floating Cars Animation */
        .floating-car {
            position: absolute;
            font-size: 2rem;
            animation: float 15s infinite linear;
            opacity: 0.1;
            z-index: -1;
        }

        @keyframes float {
            0% { transform: translateX(-100px); }
            100% { transform: translateX(calc(100vw + 100px)); }
        }

        /* Header */
        header {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            animation: slideDown 0.5s ease-out;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary);
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        /* Navigation */
        nav {
            display: flex;
            gap: 2rem;
        }

        nav a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            position: relative;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Main Container */
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        /* Hero Section */
        .hero {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            margin-bottom: 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }

        /* Date Display */
        .date-display {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 1rem 2rem;
            border-radius: 15px;
            display: inline-block;
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 2rem;
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.3);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        /* City Selector */
        .city-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .city-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            border: 2px solid transparent;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }

        .city-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            transform: translateY(100%);
            transition: transform 0.3s;
            z-index: 0;
        }

        .city-card:hover::before {
            transform: translateY(0);
        }

        .city-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .city-card:hover .city-icon,
        .city-card:hover .city-name,
        .city-card:hover .city-status {
            color: white;
            position: relative;
            z-index: 1;
        }

        .city-card.active {
            border-color: var(--primary);
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
        }

        .city-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            transition: all 0.3s;
        }

        .city-name {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            transition: all 0.3s;
        }

        .city-status {
            font-size: 0.9rem;
            color: var(--gray);
            transition: all 0.3s;
        }

        /* Plate Checker */
        .plate-checker {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .plate-input-group {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }

        .plate-input {
            flex: 1;
            min-width: 200px;
            padding: 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
            box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);
        }

        .check-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(16, 185, 129, 0.4);
        }

        /* Result Display */
        .result-card {
            padding: 2rem;
            border-radius: 15px;
            margin-top: 2rem;
            animation: slideIn 0.5s ease-out;
            position: relative;
            overflow: hidden;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .result-card.can-drive {
            background: linear-gradient(135deg, #d4edda, #c3e6cb);
            border: 2px solid var(--success);
        }

        .result-card.cannot-drive {
            background: linear-gradient(135deg, #f8d7da, #f5c6cb);
            border: 2px solid var(--danger);
        }

        .result-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            animation: zoomIn 0.5s ease-out;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
        }

        .result-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        /* Schedule Display */
        .schedule-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .schedule-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            border-left: 4px solid var(--primary);
            animation: fadeIn 0.5s ease-out;
        }

        .schedule-card:hover {
            transform: translateX(5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }

        .schedule-day {
            font-weight: bold;
            color: var(--primary);
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }

        .schedule-plates {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin-top: 0.5rem;
        }

        .plate-badge {
            background: var(--primary);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-weight: bold;
            font-size: 1.1rem;
            animation: popIn 0.3s ease-out;
        }

        @keyframes popIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Alert Signup */
        .alert-section {
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
            border-radius: 15px;
            padding: 2rem;
            margin-top: 2rem;
            color: white;
            box-shadow: 0 10px 30px rgba(245, 158, 11, 0.3);
        }

        .alert-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .alert-form {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .alert-input {
            flex: 1;
            min-width: 200px;
            padding: 1rem;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
        }

        .alert-btn {
            background: white;
            color: var(--warning);
            padding: 1rem 2rem;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
        }

        .alert-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Features Section */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            animation: fadeInUp 0.6s ease-out;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .feature-title {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .feature-description {
            color: var(--gray);
            line-height: 1.6;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 3rem 0;
            margin-top: 4rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.5rem;
        }

        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero h1 {
                font-size: 1.8rem;
            }

            .city-grid {
                grid-template-columns: 1fr;
            }

            .schedule-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Loading Animation */
        .loader {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid var(--primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Toast Notification */
        .toast {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: white;
            padding: 1rem 1.5rem;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            gap: 1rem;
            transform: translateX(400px);
            transition: transform 0.3s;
            z-index: 2000;
        }

        .toast.show {
            transform: translateX(0);
        }

        .toast-icon {
            font-size: 1.5rem;
        }

        .toast.success {
            border-left: 4px solid var(--success);
        }

        .toast.error {
            border-left: 4px solid var(--danger);
        }

        /* Modal */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 3000;
        }

        .modal.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            max-width: 500px;
            width: 90%;
            transform: scale(0.8);
            transition: transform 0.3s;
        }

        .modal.active .modal-content {
            transform: scale(1);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--gray);
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="bg-animation"></div>
    
    <!-- Floating Cars -->
    <div class="floating-car" style="top: 10%; animation-delay: 0s;">🚗</div>
    <div class="floating-car" style="top: 30%; animation-delay: 5s;">🚙</div>
    <div class="floating-car" style="top: 50%; animation-delay: 10s;">🚕</div>
    <div class="floating-car" style="top: 70%; animation-delay: 15s;">🏍️</div>
    <div class="floating-car" style="top: 90%; animation-delay: 20s;">🚐</div>

    <!-- Header -->
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

    <!-- Main Container -->
    <div class="container">
        <!-- Hero Section -->
        <section class="hero">
            <h1>Consulta el Pico y Placa en Colombia</h1>
            <div class="date-display" id="currentDate">
                📅 Domingo, 24 de Agosto de 2025
            </div>
            
            <!-- City Selector -->
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

        <!-- Plate Checker -->
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

        <!-- Weekly Schedule -->
        <section class="schedule-section">
            <h2>📅 Horario Semanal</h2>
            <div class="schedule-grid" id="scheduleGrid">
                <!-- Se llenará dinámicamente -->
            </div>
        </section>

        <!-- Alert Signup -->
        <section class="alert-section">
            <div class="alert-title">🔔 Recibe Alertas Personalizadas</div>
            <p>No te arriesgues a multas. Recibe recordatorios antes de que aplique tu pico y placa.</p>
            <div class="alert-form">
                <input type="email" class="alert-input" placeholder="tu@email.com">
                <input type="tel" class="alert-input" placeholder="300 123 4567">
                <button class="alert-btn">Activar Alertas</button>
            </div>
        </section>

        <!-- Features -->
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

    <!-- Footer -->
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

    <!-- Toast Notification -->
    <div class="toast" id="toast">
        <span class="toast-icon">✅</span>
        <span id="toastMessage">Mensaje</span>
    </div>

    <!-- Modal -->
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

    <script>
        // Colombian Holidays 2025
        const holidays2025 = [
            '2025-01-01', '2025-01-06', '2025-03-24', '2025-04-17', '2025-04-18',
            '2025-05-01', '2025-06-02', '2025-06-23', '2025-06-30', '2025-07-20',
            '2025-08-07', '2025-08-18', '2025-10-13', '2025-11-03', '2025-11-17',
            '2025-12-08', '2025-12-25'
        ];

        // City configurations
        const cityConfigs = {
            bogota: {
                name: 'Bogotá',
                type: 'par-impar',
                hours: '6:00 AM - 9:00 PM',
                particularRules: (date, plate) => {
                    const lastDigit = parseInt(plate.slice(-1));
                    const dayOfMonth = date.getDate();
                    const isEven = dayOfMonth % 2 === 0;
                    const plateIsEven = lastDigit % 2 === 0;
                    return isEven === plateIsEven;
                }
            },
            medellin: {
                name: 'Medellín',
                type: 'dos-digitos',
                hours: '5:00 AM - 8:00 PM',
                schedule: {
                    1: [6, 9], 2: [5, 7], 3: [1, 8], 4: [0, 2], 5: [3, 4]
                }
            },
            cali: {
                name: 'Cali',
                type: 'dos-digitos',
                hours: '6:00 AM - 7:00 PM',
                schedule: {
                    1: [3, 4], 2: [5, 6], 3: [7, 8], 4: [9, 0], 5: [1, 2]
                }
            },
            bucaramanga: {
                name: 'Bucaramanga',
                type: 'trimestral',
                hours: '6:00 AM - 8:00 PM',
                schedule: {
                    1: [7, 8], 2: [9, 0], 3: [1, 2], 4: [3, 4], 5: [5, 6]
                }
            },
            barranquilla: {
                name: 'Barranquilla',
                type: 'solo-taxis',
                hours: '6:00 AM - 9:00 PM',
                taxiSchedule: {
                    1: [1, 2], 2: [3, 4], 3: [5, 6], 4: [7, 8], 5: [9, 0]
                }
            }
        };

        let selectedCity = 'bogota';
        let selectedVehicleType = 'particular';

        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            updateCurrentDate();
            loadWeeklySchedule();
            
            // Auto-detect city based on location (mock)
            setTimeout(() => {
                showToast('📍 Detectamos que estás en Bogotá', 'success');
                selectCity('bogota');
            }, 1000);
        });

        // Update current date
        function updateCurrentDate() {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const dateStr = now.toLocaleDateString('es-CO', options);
            document.getElementById('currentDate').textContent = `📅 ${dateStr}`;
        }

        // Select city
        function selectCity(city) {
            selectedCity = city;
            document.querySelectorAll('.city-card').forEach(card => {
                card.classList.remove('active');
            });
            event.currentTarget.classList.add('active');
            loadWeeklySchedule();
            showToast(`Ciudad seleccionada: ${cityConfigs[city].name}`, 'success');
        }

        // Select vehicle type
        function selectVehicleType(type) {
            selectedVehicleType = type;
            document.querySelectorAll('.vehicle-type').forEach(btn => {
                btn.classList.remove('active');
            });
            event.currentTarget.classList.add('active');
        }

        // Check plate
        function checkPlate() {
            const plateInput = document.getElementById('plateInput').value.toUpperCase();
            if (!plateInput || plateInput.length < 6) {
                showToast('Por favor ingresa una placa válida', 'error');
                return;
            }

            const today = new Date();
            const isHoliday = holidays2025.includes(today.toISOString().split('T')[0]);
            
            if (isHoliday) {
                showResult(true, 'Es día festivo, no hay pico y placa');
                return;
            }

            const dayOfWeek = today.getDay();
            if (dayOfWeek === 0 || dayOfWeek === 6) {
                showResult(true, 'Es fin de semana, no hay pico y placa');
                return;
            }

            const lastDigit = parseInt(plateInput.slice(-1));
            const config = cityConfigs[selectedCity];
            
            let canDrive = true;
            let message = '';

            if (selectedCity === 'bogota') {
                canDrive = !config.particularRules(today, plateInput);
                message = canDrive ? 'Puedes circular hoy' : `No puedes circular hoy de ${config.hours}`;
            } else if (selectedCity === 'barranquilla' && selectedVehicleType !== 'taxi') {
                canDrive = true;
                message = 'Solo aplica restricción para taxis en Barranquilla';
            } else {
                const schedule = config.schedule || config.taxiSchedule;
                const restrictedDigits = schedule[dayOfWeek];
                if (restrictedDigits) {
                    canDrive = !restrictedDigits.includes(lastDigit);
                    message = canDrive ? 'Puedes circular hoy' : `No puedes circular hoy de ${config.hours}`;
                }
            }

            showResult(canDrive, message);
        }

        // Show result
        function showResult(canDrive, message) {
            const resultContainer = document.getElementById('resultContainer');
            resultContainer.innerHTML = `
                <div class="result-card ${canDrive ? 'can-drive' : 'cannot-drive'}">
                    <div class="result-icon">${canDrive ? '✅' : '🚫'}</div>
                    <div class="result-title">${canDrive ? '¡Puedes Circular!' : 'Restricción Activa'}</div>
                    <p>${message}</p>
                    ${!canDrive ? '<p style="margin-top: 1rem;"><strong>Multa por incumplimiento:</strong> $522,900 COP</p>' : ''}
                </div>
            `;
        }

        // Load weekly schedule
        function loadWeeklySchedule() {
            const scheduleGrid = document.getElementById('scheduleGrid');
            const days = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];
            const config = cityConfigs[selectedCity];
            
            let html = '';
            
            if (selectedCity === 'bogota') {
                html = `
                    <div class="schedule-card">
                        <div class="schedule-day">Días Pares</div>
                        <div class="schedule-plates">
                            <span class="plate-badge">0</span>
                            <span class="plate-badge">2</span>
                            <span class="plate-badge">4</span>
                            <span class="plate-badge">6</span>
                            <span class="plate-badge">8</span>
                        </div>
                    </div>
                    <div class="schedule-card">
                        <div class="schedule-day">Días Impares</div>
                        <div class="schedule-plates">
                            <span class="plate-badge">1</span>
                            <span class="plate-badge">3</span>
                            <span class="plate-badge">5</span>
                            <span class="plate-badge">7</span>
                            <span class="plate-badge">9</span>
                        </div>
                    </div>
                `;
            } else if (config.schedule || config.taxiSchedule) {
                const schedule = config.schedule || config.taxiSchedule;
                days.forEach((day, index) => {
                    const digits = schedule[index + 1] || [];
                    html += `
                        <div class="schedule-card">
                            <div class="schedule-day">${day}</div>
                            <div class="schedule-plates">
                                ${digits.map(d => `<span class="plate-badge">${d}</span>`).join('')}
                            </div>
                        </div>
                    `;
                });
            }
            
            scheduleGrid.innerHTML = html;
        }

        // Show toast
        function showToast(message, type = 'success') {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toastMessage');
            
            toast.className = `toast ${type}`;
            toastMessage.textContent = message;
            toast.classList.add('show');
            
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        // Modal functions
        function showModal(title, content) {
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalBody').innerHTML = content;
            document.getElementById('modal').classList.add('active');
        }

        function closeModal() {
            document.getElementById('modal').classList.remove('active');
        }

        // Keyboard shortcuts
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
    </script>
</body>
</html>;
            transition: all 0.3s;
            text-transform: uppercase;
        }

        .plate-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .vehicle-type-selector {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }

        .vehicle-type {
            padding: 0.8rem 1.5rem;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            background: white;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .vehicle-type:hover {
            border-color: var(--primary);
            transform: translateY(-2px);
        }

        .vehicle-type.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .check-btn {
            background: linear-gradient(135deg, var(--secondary), #059669);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem
