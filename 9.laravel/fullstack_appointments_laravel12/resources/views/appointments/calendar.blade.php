@extends('home')

@section('content')
    <section class="container mt-4">
        <a href="#" class="btn btn-secondary mt-4"><i class="bi bi-file-diff"></i> Agregar Cita</a>
        <!-- contenedor del calendario -->
        <div class="mt-4" id="calendar"></div>
    </section>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
    <script>
        window.calendarAppointments = @json($appointments);
        console.log(window.calendarAppointments);
    </script>
    <script src="{{ asset('js/calendar.js') }}"></script>
@endpush