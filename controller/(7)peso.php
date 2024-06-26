<?php
  include "../view/exerciciosLoops/(7)peso.html";


  $codigo = intval($_POST['codigo'] ?? 0);
  $altura = floatval($_POST['altura'] ?? 0);
  $peso = floatval($_POST['peso'] ?? 0);

  $clientes = [];

  if ($codigo != 0) {
      $clientes[] = [
          'codigo' => $codigo,
          'altura' => $altura,
          'peso' => $peso,
      ];
  }

  if (!empty($clientes)) {
      $maisAlto = $clientes[0];
      $maisBaixo = $clientes[0];
      $maisGordo = $clientes[0];
      $maisMagro = $clientes[0];
      $somaAlturas = 0;
      $somaPesos = 0;

      foreach ($clientes as $cliente) {
          if ($cliente['altura'] > $maisAlto['altura']) {
              $maisAlto = $cliente;
          }
          if ($cliente['altura'] < $maisBaixo['altura']) {
              $maisBaixo = $cliente;
          }
          if ($cliente['peso'] > $maisGordo['peso']) {
              $maisGordo = $cliente;
          }
          if ($cliente['peso'] < $maisMagro['peso']) {
              $maisMagro = $cliente;
          }
          $somaAlturas += $cliente['altura'];
          $somaPesos += $cliente['peso'];
      }

      $quantidadeClientes = count($clientes);
      $mediaAlturas = $somaAlturas / $quantidadeClientes;
      $mediaPesos = $somaPesos / $quantidadeClientes;

      echo "<div class='card mt-4 bg-light text-center position-absolute start-50 top-100 translate-middle' style='width: 18rem'>
              <div class='card-body'>
                  <p class='card-text text-dark'>Cliente mais alto: Código {$maisAlto['codigo']}, Altura {$maisAlto['altura']} metros</p>
                  <p class='card-text text-dark'>Cliente mais baixo: Código {$maisBaixo['codigo']}, Altura {$maisBaixo['altura']} metros</p>
                  <p class='card-text text-dark'>Cliente mais gordo: Código {$maisGordo['codigo']}, Peso {$maisGordo['peso']} kg</p>
                  <p class='card-text text-dark'>Cliente mais magro: Código {$maisMagro['codigo']}, Peso {$maisMagro['peso']} kg</p>
                  <p class='card-text text-dark'>Média das alturas: {$mediaAlturas} metros</p>
                  <p class='card-text text-dark'>Média dos pesos: {$mediaPesos} kg</p>
              </div>
              <p class='align-self-center mt-5'>Feito por Augusto Akira Miasato</p>
          </div>";
  }

?>
