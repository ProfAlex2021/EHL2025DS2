<?php
    $sudeste = ['SP', 'RJ', 'MG', 'ES'];

    echo next($sudeste) . "<br />"; // RJ
    echo next($sudeste) . "<br />"; // MG

    $filme = ["titulo" => "Uma mente brilhante",
              "genero" => "Drama",
              "ano" => 2001,
              "duracao" => 135];
    echo "titulo: " . $filme['titulo']  . "<br />"; // Uma mente brilhante
    echo key($filme) . current($filme)  . "<br />"; // Uma mente brilhante
    next($filme); // Avança o ponteiro para genero
    echo key($filme) . ": " . current($filme)  . "<br />"; // Drama

    extract($filme);
    echo "titulo: $titulo <br />"; // Uma mente brilhante

    foreach ($filme as $campo => $dado) 
        echo "$campo: $dado <br />";
    