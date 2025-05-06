<!DOCTYPE html>
<html>

<head>
    <title>Reporte de Estudiantes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 0 20px;
        }

        .header img {
            width: 100px;
            /* Ajusta el tamaño del logo */
            height: auto;
            margin-right: 15px;
            /* Espaciado entre el logo y el título */
        }

        .header h1 {
            color: #017bfe;
            margin: 0;
            font-size: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #017bfe;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #555;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ public_path('img/logo.jpg') }}" alt="Logo">
        <h1>Reporte de Estudiantes</h1>


    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Grado</th>
                <th>Edad</th>
                <th>Nombre Acudiente</th>
                <th>Apellido Acudiente</th>
                <th>Teléfono Acudiente</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->id }}</td>
                    <td>{{ $estudiante->nombre }}</td>
                    <td>{{ $estudiante->apellido }}</td>
                    <td>{{ $estudiante->grado }}</td>
                    <td>{{ $estudiante->edad }}</td>
                    <td>{{ $estudiante->nombre_acudiente }}</td>
                    <td>{{ $estudiante->apellido_acudiente }}</td>
                    <td>{{ $estudiante->telefono_acudiente }}</td>
                    <td>{{ $estudiante->estado }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="footer">
        <p>Reporte generado el {{ now()->format('d/m/Y') }}</p>
    </div>
</body>

</html>
