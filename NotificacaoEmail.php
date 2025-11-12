<?php
require_once 'Notificacao.php';

class NotificacaoEmail extends Notificacao
{   
    private string $email;

    public function mostrarMensagem(string $email)
    {
        return "$email enviou um email para o destinatário {$this->destinatario}: {$this->mensagem}! <br>";
    }
}
?>