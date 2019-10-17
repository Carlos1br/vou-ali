<?php 

$servicos =[
    [
        "nome" => "Desenvolvimento Web",
        "imagem" => "img/Vou ali-logo-500.png",
        "descricao" => "Sites dinamicos, otimizados para motores de busca"
    ],
    [
        "nome" => "Consultoria UX",
        "imagem" => "img/Vou ali-logo-black-500.png",
        "descricao" => "Alcance um publico maior, venda mais rápido!"
    ],
    [
        "nome" => "Consultoria UX",
        "imagem" => "img/Vou ali-logo-500.png",
        "descricao" => "Ofereça a melhor experiência para os seus usuários!"
    ],
    [
        "nome" => "Consultoria UX",
        "imagem" => "img/Vou ali-logo-black-500.png",
        "descricao" => "Ofereça a melhor experiência para os seus usuários!"
    ],
    [
        "nome" => "Consultoria UX",
        "imagem" => "img/Vou ali-logo-500.png",
        "descricao" => "Ofereça a melhor experiência para os seus usuários!"
    ],
    [
        "nome" => "Marketing Digital",
        "imagem" => "img/Vou ali-logo-black-500.png",
        "descricao" => "Ofereça a melhor experiência para os seus usuários!"
    ]
];

function listarServicos(){
    global $servicos;
    // echo "<pre>";
    // var_dump($servicos);
    foreach ($servicos as $index => $servico) {
        // echo "<h1>$servico[nome]</h1>";
        // echo "<img src=''>";
        // echo "<p>$servico[descricao]</p>";
        //    " <div class='col com-sm'>
        //       <div class='card'>
        //         <img class='card-img-top' src='img/Vou ali-logo-500.png' alt='Imagem de capa do card'>
        //         <div class='card-body'>
        //           <p class='card-text text-center'>Viagens e passeios</p>
        //         </div>
        //       </div>
        //     </div>";
        echo 
        " <div class='col-4 com-sm'>
          <div class='card mb-5'>
            <img class='card-img-top ' src='$servico[imagem]' alt='Imagem de capa do card'>
            <div class='card-body '>
              <p class='card-text text-center '><a href='servico.php?id=$index' target='_blanck'>$servico[nome]</a></p>
            </div>
          </div>
        </div>";
    }
}

function getNome($id){
    global $servicos;
    return $servicos[$id]['nome'];
}