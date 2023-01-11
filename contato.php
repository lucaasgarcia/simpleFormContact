<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="my-5">Formulario de contato</h1>
                <form action="enviar.php" method="POST">
                    <div class="mb-3">
                        <input type="text" name="nome" placeholder="Digite seu nome" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" placeholder="Digite seu e-mail" class="form-control">
                    </div>
                    <div class="mb-3">
                        <textarea name="mensagem" placeholder="Digite sua mensagem" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="mb3">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
