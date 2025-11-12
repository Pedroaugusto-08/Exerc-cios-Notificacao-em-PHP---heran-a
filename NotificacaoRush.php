<?php
require_once 'Notificacao.php';

class NotificacaoRush extends Notificacao
{   
    private string $user;

    public function mostrarMensagem(string $user)
    {
        return "O usuário $user mandou uma mensagem para o destinatário {$this->destinatario}:
        {$this->mensagem}! <br>";
    }
}
?>