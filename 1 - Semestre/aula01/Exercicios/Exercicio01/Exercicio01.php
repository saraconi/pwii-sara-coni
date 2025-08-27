
<?php
    $num_args = count($argv);

    if ($num_args > 1) {
      echo "Argumentos passados:\n";
      for ($i = 1; $i < $num_args; $i++) {
        echo "Argumento " . $i . ": " . $argv[$i] . "\n";
      }
    } else {
      echo "Nenhum argumento foi passado.\n";
    }
    ?>