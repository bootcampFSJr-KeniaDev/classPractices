document.addEventListener('DOMContentLoaded', function () {
    const appointments = window.calendarAppointments;

    const calendarEl = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'es',
        initialView: 'dayGridMonth',
        slotMinTime: '07:00',
        slotMaxTime: '19:00',
        initialView: 'dayGridMonth',
        events: appointments,

        eventContent: function(arg) {
            const container = document.createElement('div');
            container.classList.add('text-white', 'w-100', 'text-wrap');

            // Condiciona el color según el estado
            const status = arg.event.extendedProps.status;

            if (status === 'pendiente') {
                container.style.backgroundColor = '#efa648'; // amarillo
            } else if (status === 'confirmado') {
                container.style.backgroundColor = '#6bbe6a'; // verde
            } else if (status === 'cancelado') {
                container.style.backgroundColor = '#d9534f'; // rojo
            }

            const titleEl = document.createElement('div');
            titleEl.innerHTML = arg.event.title;
            titleEl.classList.add('fw-bold', 'd-block', 'mb-1');

            const patientEl = document.createElement('div');
            patientEl.textContent = `Paciente: ${arg.event.extendedProps.patient}`;
            patientEl.classList.add('d-block', 'mb-1');

            const doctorEl = document.createElement('div');
            doctorEl.textContent = `Doctor: ${arg.event.extendedProps.doctor}`;
            doctorEl.classList.add('d-block', 'mb-1');

            const reasonEl = document.createElement('div');
            reasonEl.textContent = `Motivo: ${arg.event.extendedProps.reason}`;
            reasonEl.classList.add('d-block');

            container.appendChild(titleEl);
            container.appendChild(patientEl);
            container.appendChild(doctorEl);
            container.appendChild(reasonEl);

            return { domNodes: [container] };
        }
    });

    calendar.render();
});
