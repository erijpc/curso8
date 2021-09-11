<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>API CNPJ</title>
</head>
<body>
    <div class="row">
        <div class="col-md-4">
            
        </div>
        <div class="col-md-4">
            <div class="form-group row">
                <div class="col-md-12">
                    <label>CNPJ</label>
                    <input type="text" onblur="checkCnpj(this.value)" data-mask="00.000.000/0000-00" class="form-control" name="" id="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label>Razão Social</label>
                    <input type="text" class="form-control" name="" id="razaosocial">
                </div>
                <div class="col-md-6">
                    <label>Fantasia</label>
                    <input type="text" class="form-control" name="" id="fantasia">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label>Logradouro</label>
                    <input type="text" class="form-control" name="" id="logradouro">
                </div>
                <div class="col-md-6">
                    <label>Numero</label>
                    <input type="text" class="form-control" name="" id="numero">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label>Municipio</label>
                    <input type="text" class="form-control" name="" id="municipio">
                </div>
                <div class="col-md-6">
                    <label>UF</label>
                    <input type="text" class="form-control" name="" id="uf">
                </div>
            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script>
        function checkCnpj(cnpj) {
            $.ajax({
                'url': 'https://www.receitaws.com.br/v1/cnpj/' + cnpj.replace(/[^0-9]/g, ''),
                'type': "GET",
                'dataType': 'jsonp',
                'success': function(data) {
                    if (data.nome == undefined){
                        alert(data.status + '' + data.message)
                    } else {
                        document.getElementById('razaosocial').value = data.nome;
                        document.getElementById('fantasia').value = data.fantasia;
                        document.getElementById('logradouro').value = data.logradouro;
                        document.getElementById('numero').value = data.numero;
                        document.getElementById('municipio').value = data.municipio;
                        document.getElementById('uf').value = data.uf;
                    }
                    console.log(data);
                }
            })
        }
    </script>
</body>

</html>