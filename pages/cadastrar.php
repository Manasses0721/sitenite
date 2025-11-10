<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>

<body class="bg-light w-screen h-screen d-flex justify-content-center align-items-center">
    <main class=" w-50 container flex flex-column gap  rounded mt-5 pt-5">
        <div class="text-center my-4 flex">
            <img style="width: 100px;" class="h-2 w-2" src="/img/simb_nite-removebg-preview_1.svg" alt="">
            <h2 class="font-bold ">Nite</h2>
        </div>
        <form action="" class="flex justify-content-center gap-3 p-4 mt-4 ">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="nome" aria-label="Username"
                    aria-describedby="visible-addon">
            </div>
            <div class="input-group mt-4">
                <span class="input-group-text" id="basic-addon1">
                    <i class="bi bi-lock-fill"></i>
                </span>
                <input type="text" class="form-control" placeholder="senha" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="d-flex justify-content-center mt-4">
                <button class="btn btn-primary w-50" type="submit">
                    <a href="../pages/index.php">
                        Entrar
                    </a>
                </button>
            </div>
            <div class="mt-4">
                <a href="" class="text-center mt-4">Esqueceu a senha?</a>
            </div>
        </form>
        <div>
            <p class="text-center mt-4">Não tem uma conta? <a href="./cadastrar.html">Registre-se</a></p>
        </div>
    </main>



</body>

</html>