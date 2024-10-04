<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<?php
include "./Estructura/Header.php"
?>
<body class="bg-dark">

    <div class="container mt-3" >
        <h1>My Page</h1>
        <p>Lorem ipsum text.</p>
        <div class="card row">
            <div class="card-body">
                <form action="./action/IndexAction.php" method="post">
                    <div class="mb-3">
                        <label for="number" class="form-label">Ingrese monto:</label>
                        <h1>
                            $0
                        </h1>
                        <input type="number" name="number" id="number" class="form-control" required>
                    <button type="button" class="btn btn-light p-3">transferir</button>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                

            
            </div>

        </div>
        <p>Some buttons:</p>
        <button type="button" class="btn btn-secondary">Secondary</button>
    </div>
    
<body>
    

<?php
 include "./Estructura/Footer.php"

?>

</body>
</html>