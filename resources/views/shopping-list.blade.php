<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista de Compras!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/shopping-list">Lista de Compras</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br />
    <div class="container">
        <a href="/shopping-list/create" class="btn btn-outline-success">Adicionar</a>
        <hr />
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Item</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Arroz</td>
                    <td>
                        <button type="button" class="btn btn-outline-info">Ver</button>
                        <button type="button" class="btn btn-outline-warning">Editar</button>
                        <button type="button" class="btn btn-outline-danger">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ovos</td>
                    <td>
                        <button type="button" class="btn btn-outline-info">Ver</button>
                        <button type="button" class="btn btn-outline-warning">Editar</button>
                        <button type="button" class="btn btn-outline-danger">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Farinha</td>
                    <td>
                        <button type="button" class="btn btn-outline-info">Ver</button>
                        <button type="button" class="btn btn-outline-warning">Editar</button>
                        <button type="button" class="btn btn-outline-danger">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
