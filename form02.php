<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Exercício 01</title>
</head>
<body>
    <div class="container">
        <form action="destino02.php" method="post">
            <h1>CONVERSÃO DE TEMPERATURA</h1>

            <label for="" class="form-label">Digite a temperatura que está agora: </label>
            <input type="number" step="any" name="celsius" class="form-control" min="-272" required>

            <button class="btn btn-success my-2 w-25 d-block mx-auto" type="submit">Converter!</button>
        </form>
    </div>
</body>
</html>