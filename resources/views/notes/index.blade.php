@extends('layouts.app')

@section('content')
    <h3>Notas promedio de alumnos</h3>
    <p>Considerando su última matrícula.</p>
    <table>
        <thead>
        <tr>
            <th>DNI</th>
            <th>Nombres</th>
            <th>Apellidos</th>

            <th>Nivel</th>
            <th>Semestre</th>

            <th>Matrícula</th>
            <th>Mensualidad</th>
            <th>Uniforme</th>

            <th>Promedio</th>

            <th>Detalles</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->dni }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->lastName }}</td>

            <td>{{ $student->last_enrollment->level }}</td>
            <td>{{ $student->last_enrollment->semester }}</td>

            <td>S/. {{ $student->last_enrollment->enrollment_payment }}</td>
            <td>S/. {{ $student->last_enrollment->monthly_payment }}</td>
            <td>S/. {{ $student->last_enrollment->uniform_payment }}</td>

            <th>{{ $student->average_note }}</th>

            <td>
                <a title="submit" class="modal-trigger waves-effect waves-light btn" href="#modal{{ $student->id }}">
                    <i class="material-icons">toc</i>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    @foreach ($students as $student)
    <div id="modal{{ $student->id }}" class="modal">
        <div class="modal-content">
            <h4>Cursos que contiene la última matrícula del alumno</h4>
            <ul class="collection">
                @foreach ($student->last_enrollment->selected_courses as $course)
                <li class="collection-item"><strong>{{ $course->name }}: </strong>{{ $course->noteForStudent($student->id) }}</li>
                @endforeach
            </ul>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
        </div>
    </div>
    @endforeach

    <div class="fixed-action-btn ">
        <a data-add="x" href="/notas/registrar" title="REGISTRAR NOTAS" class="btn-floating btn-large teal">
            <i class="large material-icons">add</i>
        </a>
    </div>
@endsection

@section('scripts')
    <script>
        $(function () {
            $('.modal').modal();
        });
    </script>
@endsection