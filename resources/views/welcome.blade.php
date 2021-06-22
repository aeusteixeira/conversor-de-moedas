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
    <main class="card bg-light rounded-3 p-3">
        <h1 class="h1 text-center">Conversor de Moedas</h1>
        <h2 class="small text-center">Por: Matheus Teixeira</h2>
        <div class="card-body">
            <form class="gy-2 gx-3 mx-auto">
                <div class="row">
                    <div class="col-auto">
                        <label class="visually" for="price_1">Informe um valor</label>
                        <input class="form-control" min="0" type="number" name="price_1" id="price_1" step="any" value="1" placeholder="Insira um valor" required>
                    </div>
                    <div class="col-auto">
                      <label class="visually" for="coin_1">Moeda de origem</label>
                      <select class="form-select" id="coin_1">
                        <option value="BRL" selected>BRL</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                      </select>
                    </div>
                    <div class="col-auto">
                        <label class="visually" for="coin_2">Moeda de de destino</label>
                        <select class="form-select" id="coin_2">
                          <option value="BRL" selected>BRL</option>
                          <option value="USD">USD</option>
                          <option value="EUR">EUR</option>
                        </select>
                      </div>
                </div>
                <div class="row my-3">
                    <div class="col-auto">
                        <h4 class="h3"></h4>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-auto">
                        <button type="button" class="btn btn-success" id="getQuote">
                            Consultar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script>

        let price1;
        let coin1;
        let coin2;

        const form = document.getElementById('getQuote');
        form.addEventListener('click', (e) =>{

            price1 = parseFloat(document.getElementById('price_1').value);
            coin1 = document.getElementById('coin_1').value;
            coin2 = document.getElementById('coin_2').value;

            if(coin1 == coin2){
                alert('Selecione uma moeda diferente!')
            }else{
                getQuote(coin1, coin2);
            }

        });

        function getQuote(coin1, coin2){

            const options = {
                method: 'GET',
            }

            let url = `http://127.0.0.1:8000/api/search/${coin1}/${coin2}`;

            fetch(url, options)
                .then(response => {
                    response.json()
                        .then(data => calculate(data));
                })
            .catch(e => console.log('Deu erro: '+ e,message))
        }

        function calculate(data){
            let result;
            let index = coin1+coin2;
            let bid = parseFloat(data[index].bid);
            let names = data[index].name.split('/');
            let price2 = price1*bid;

            result = `${price1.toLocaleString('pt-BR', { style: 'currency', currency: coin1 })} ${names[0]} equivale a ${price2.toLocaleString('pt-BR', { style: 'currency', currency: coin2 })} ${names[1]}`;

            document.querySelector('h4').innerHTML = result;

        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
