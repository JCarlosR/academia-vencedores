@extends('layouts.app')

@section('content')
    <h3>Matrículas</h3>
    <table>
        <thead>
        <tr>
            <th>DNI</th>
            <th>Nivel</th>
            <th>Semestre</th>
            <th>Matrícula</th>
            <th>Mensualidad</th>
            <th>Uniforme</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($enrollments as $enrollment)
        <tr>
            <td>{{ $enrollment }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>


    <div class="fixed-action-btn ">
        <a data-add="x" href="/matricula/registrar" title="REGISTRAR MATRÍCULA" class="btn-floating btn-large teal">
            <i class="large material-icons">add</i>
        </a>
    </div>
@endsection

@section('scripts')
    {{--<script src="/js/students/elements-form.js"></script>--}}
@endsection
