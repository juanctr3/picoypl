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
