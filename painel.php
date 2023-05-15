<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #f3f3f3">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total Clientes / Ano</div>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center; font-size: 40px;">
                            <?php
                                include 'conexao/conexao.php';
                                $sql = "SELECT SUM(quantidade) AS total FROM clientes";
                                $consulta = mysqli_query($conexao,$sql);
                                $dados = mysqli_fetch_array($consulta);
                                echo $dados['total'];
                            ?>
                            <span style="font-size: 10px"> / unid</span>
                        </h5>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Faturamento / Ano</div>
                    <div class="card-body">
                    <h5 class="card-title" style="text-align: center; font-size: 40px;">
                            <?php
                                include 'conexao/conexao.php';
                                $sql = "SELECT SUM(valor_venda) AS total_venda FROM vendas";
                                $consulta = mysqli_query($conexao,$sql);
                                $dados = mysqli_fetch_array($consulta);
                                $valor =  $dados['total_venda'];
                                echo 'R$' . number_format($valor,2,'.','');
                            ?>

                            
                            <span style="font-size: 10px"> / BRL</span>
                    </h5>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total Vendas</div>
                    <div class="card-body">
                    <h5 class="card-title" style="text-align: center; font-size: 40px;">
                            <?php
                                include 'conexao/conexao.php';
                                $sql = "SELECT SUM(quantidade_venda) AS total_quantidade FROM vendas";
                                $consulta = mysqli_query($conexao,$sql);
                                $dados = mysqli_fetch_array($consulta);
                                echo  $dados['total_quantidade'];
                                
                            ?>

                            <span style="font-size: 10px"> / qtd</span>  
                    </h5>
                        
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>
</html>