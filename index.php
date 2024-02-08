<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>

<body>
    <?php

    require_once "pessoa.php";
    require_once "profissional.php";
    require_once "animal.php";
    /*
    $p1 = new Pessoa("Ana",25);
    $p1->exibirDados();
    $p2 = new Profissional("Carlos",42,"Motorista");
    $p2->exibirDados();
    
   $a = new Cachorro();
   $a->emitirSom(); 
   */

    $pessoa = [
        new Pessoa("Ana", 26),
        new Profissional("Carlos", 42, "Motorista"),
        new Pessoa("Eduardo", 33)
    ];

    foreach($pessoa as $p){
        $p->exibirDados();
    }
    ?>
</body>

</html>