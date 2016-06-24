<?php

//ABRE O ARQUIVO TXT
$ponteiro = fopen ("contador.txt", "r");

//LÊ O ARQUIVO ATÉ CHEGAR AO FIM
while (!feof ($ponteiro)) {
//LÊ UMA LINHA DO ARQUIVO
$linha = fgets($ponteiro, 4096);

//IMPRIME NA TELA O RESULTADO
  echo $linha;
}//FECHA WHILE

//FECHA O PONTEIRO DO ARQUIVO
fclose ($ponteiro);