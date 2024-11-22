<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki</title>
    <link href="biuro.css" rel="stylesheet">
</head>
<body>
    <h1 style="text-align: center;">Dostępne Wycieczki</h1>
    <table>
        <thead>
            <tr>
                <th>Data Wyjazdu</th>
                <th>Cel</th>
                <th>Cena (PLN)</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'danewycieczek.php'; ?>
        </tbody>
    </table>
</body>
</html>
