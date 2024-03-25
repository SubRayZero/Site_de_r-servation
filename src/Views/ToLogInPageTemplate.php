<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Components/index.css">
    <link rel="stylesheet" href="./Components/form.css">
    <link rel="stylesheet" href="./Components/formLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>


<body>

    <header>
        <div class="container_header">
            <a href="http://projet6/Site_de_reservation/public/">
                <div class="inscription">Accueil</div>
            </a>
        </div>
    </header>


    <section class="form">
        <div class="container_form">
            <form method="POST" action="" onsubmit="return check_form_validity()">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Adresse mail *</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password *</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <input type="submit" value="Se connecter" id="inscription" class="button_validation" />
            </form>
        </div>
    </section>

</body>