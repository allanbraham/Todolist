<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./script.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
                <a class="navbar-brand" href="#">Todolist</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./inscription.php">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./connexion.php">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <ul class="list-group">
        <li class="list-group-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="badge rounded-pill text-bg-danger">Urgent</span>
        </li>
        <li class="list-group-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="badge rounded-pill text-bg-warning">Important</span>
        </li>
        <li class="list-group-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="badge rounded-pill text-bg-success">Secondaire</span>
        </li>
    </ul>

    <h3>Nouvelle tâche</h3>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom de la tâche</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Importance</label>
            <select id="inputState" class="form-select">
                <option selected>...</option>
                <option>Urgent</option>
                <option>Important</option>
                <option>Secondaire</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Soumettre tâche</button>
    </form>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nom tâche</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Date:
                </div>
                <div class="modal-body">
                Importance:
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
         
    
    
</body>
</html>