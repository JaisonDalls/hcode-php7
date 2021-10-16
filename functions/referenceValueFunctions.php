<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Sorteio ao vivo</title>
</head>
<body>
    <div class="container">
        <div class="d-flex flex-column">
            <div class="card-box border border-dark border-1 mt-4 rounded shadow">
                <h2 class="text-center text-dark">Sorteio ao vivo</h2>  
            </div>
            <h1 class="text-center">
            <?php
                $val = 35;
                function trocaValor($val){
                    $valReturn =  rand(1,$val);
                    return $valReturn;
                }    
                echo trocaValor($val);
            ?>   
            </h1>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>


 -->

 <?php
 
 $dados = array(
     'nome'=>"Jaison Dallabrida",
     'idade'=>32,
     'Endereço residencial'=>"Rua Sergipe,141 - Centro - Matinhos",
     'altura'=>1.74,
     'Recebeu vacina'=>true
 );
 var_dump($dados);

//valor passado por referencia nessa função. 
foreach ($dados as &$value) {
   if(gettype($value) === 'integer') $value += 120;

   echo $value."<br>";
}
 
 ?>
