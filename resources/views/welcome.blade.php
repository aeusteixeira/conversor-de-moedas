<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Nunito', sans-serif; background-color: #1a202c }
    </style>
    <title>Conversor de Moedas - Matheus Teixeira</title>
  </head>
  <body class="container py-5">
    <main class="card bg-light rounded-3 p-3 text-center">
        <h1 class="h1">Conversor de Moedas</h1>
        <h2 class="small">Por: Matheus Teixeira</h2>
        <div class="card-body">
            <form class="gy-2 gx-3 mx-auto">
                <div class="row">
                    <div class="col-auto">
                        <label class="visually-hidden" for="price_1">Name</label>
                        <input class="form-control" type="number" name="price_1" id="price_1" step="any" value="1"" placeholder="Insira um valor" required>
                    </div>
                    <div class="col-auto">
                      <label class="visually-hidden" for="coin_1">Preference</label>
                      <select class="form-select" id="coin_1">
                        <option value="BRL" selected>BRL</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                      </select>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-auto">
                        <label class="visually-hidden" for="price_2">Name</label>
                        <input class="form-control" type="number" name="price_2" id="price_2" step="any" value="1"" placeholder="Insira um valor" required>
                    </div>
                    <div class="col-auto">
                      <label class="visually-hidden" for="coin_2">Preference</label>
                      <select class="form-select" id="coin_2">
                        <option value="BRL" selected>BRL</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                      </select>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
