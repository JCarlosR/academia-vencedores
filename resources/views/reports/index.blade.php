@extends('layouts.app')

@section('content')
    <h3>Reportes</h3>

    <div class="card">
        <div class="card-content">
            <span class="card-title black-text">Reporte de alumnos</span>
            <p class="grey-text">Porcentaje de hombres y mujeres en la academia.</p>
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <div class="card">
        <div class="card-content">
            <span class="card-title black-text">Reporte de cursos</span>
            <p class="grey-text">Cursos con más alumnos.</p>
            <canvas id="myChart2"></canvas>
        </div>
    </div>

    <div class="card">
        <div class="card-content">
            <span class="card-title black-text">Reporte de nivel</span>
            <p class="grey-text">Alumnos inscritos según el nivel.</p>
            <canvas id="myChart3"></canvas>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>
    <script src="{{ asset('js/reports/students.js') }}"></script>
    <script src="{{ asset('js/reports/courses.js') }}"></script>
    <script src="{{ asset('js/reports/levels.js') }}"></script>
@endsection