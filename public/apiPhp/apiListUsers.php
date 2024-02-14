<?php
require_once 'Metodos.php';
$user = new User();

$usersJson = $user->getUsersJson();
echo "Lista de Usuários";
echo $usersJson;

// Adicionar
//$user->addUser('Novo Usuário', 'xxxxxxx');
// Atualizar um usuário existente
//$user->updateUser(1, 'Novo Nome', 'xxxxx');
// Deletar um usuário
//$user->deleteUser(2);
?>
