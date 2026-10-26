<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #999; padding: 8px 12px; text-align: left; }
        th { background: #eee; }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Âge</th>
                <th>Modules</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $etudiant)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $etudiant['nom'] }}</td>
                    <td>{{ $etudiant['prenom'] }}</td>
                    <td>{{ $etudiant['age'] }}</td>
                    <td>
                        @forelse ($etudiant['modules'] as $module)
                            {{ $module }}@if (!$loop->last), @endif
                        @empty
                            Aucun module
                        @endforelse
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Aucun étudiant</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>