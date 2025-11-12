<?php
require_once __DIR__ . '/../classes/Notificacao.php';
require_once __DIR__ . '/../classes/NotificacaoEmail.php';
require_once __DIR__ . '/../classes/NotificacaoSms.php';
require_once __DIR__ . '/../classes/NotificacaoRush.php';

$n1 = new NotificacaoEmail("destinatario@example.com", "Olá você foi notificado!");
$n2 = new NotificacaoSms("+5514998888888", "Olá você foi notificado!");
$n3 = new NotificacaoRush("user5678", "Olá você foi notificado!");

echo $n1->mostrarMensagem("remetente@example.com");
echo $n2->mostrarMensagem("+5511999999999");
echo $n3->mostrarMensagem("user1234");

?>