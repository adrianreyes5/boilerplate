<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perfiles</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Ciudad</th>
        </thead>
        <tbody>
            @foreach ($perfiles as $perfil)
                <tr>
                    <td>{{ $perfil->id }}</td>
                    <td>{{ $perfil->title }}</td>
                    <td>
                        @can('destroy_notes')
                            <a href="{{ route('notes.destroy', $perfil->id) }}">Eliminar perfil</a>
                        @else
                            Usted no puede eliminar este perfil
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>