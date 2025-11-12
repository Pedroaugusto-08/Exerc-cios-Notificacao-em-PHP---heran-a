<?php
require_once 'Notificacao.php';

class NotificacaoSms extends Notificacao
{
    private string $numero;

    public function mostrarMensagem(string $numero)
    {
         return "O número $numero mandou um SMS para o destinatário {$this->destinatario}:
        {$this->mensagem}! <br>";
    }
}
?>