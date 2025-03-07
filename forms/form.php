<?php

/*
echo "Nome: {$_POST['nome']}";
echo '<hr>';
echo "Senha: {$_POST['senha']}";
echo '<hr>';
echo "E-mail: {$_POST['email']}";
echo '<hr>';
echo "Concordou? " . isset($_POST['concordo']) && $_POST['concordo'] != '' ? 'Sim' : 'Nao';
echo '<hr>';
echo "Sexo: {$_POST['sexo']}";
echo '<hr>';
echo "Estado: {$_POST['estado']}";
echo '<hr>';
echo "descricao: {$_POST['descricao']}";
echo '<hr>';*/

if($_REQUEST['nome'] != '' && strlen($_REQUEST['nome']) > 3) {
    echo "Nome: {$_REQUEST['nome']}";
} else {
    echo 'O campo nome nao foi validado!';
}
echo '<hr>';
if($_REQUEST['senha'] != '' && strlen($_REQUEST['senha']) > 4) {
    echo "Senha: {$_REQUEST['senha']}";
} else {
    echo 'O campo senha nao foi validado!';
}
echo '<hr>';
if($_REQUEST['email'] != '') {
    echo "E-mail: {$_REQUEST['email']}";
} else {
    echo 'O campo senha nao foi validado!';
}

echo '<hr>';
echo "Concordou? " . isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != '' ? 'Sim' : 'Nao';
echo '<hr>';
if($_REQUEST['sexo'] != '') {
    echo "Sexo: {$_REQUEST['sexo']}";
} else {
    echo 'O campo sexo nao foi validado!';
}
echo '<hr>';
if($_REQUEST['estado'] != '') {
    echo "Estado: {$_REQUEST['estado']}";
} else {
    echo 'O campo sexo nao foi validado!';
}
echo '<hr>';
echo "descricao: {$_REQUEST['descricao']}";
echo '<hr>';