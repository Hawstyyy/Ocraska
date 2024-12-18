<?php
$host = 'localhost';
$username = 'root';
$senha = '';
$banco = 'Ocraska';

$con = new mysqli($host, $username, $senha, $banco);

if ($con -> connect_errno) {
  echo 'falha na conexão: ('. $con -> connect_errno. ")". con -> connect_error;
}
