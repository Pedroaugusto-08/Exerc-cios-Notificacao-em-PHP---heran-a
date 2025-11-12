<?php
class Notificacao 
{
    protected string $destinatario;
    protected string $mensagem;

    public function __construct(string $destinatario, string $mensagem)
    {
        $this->destinatario = $destinatario;
        $this->mensagem = $mensagem;
    }

    public function enviar(): string
    {
        return "Mensagem enviada ao destinatário {$this->destinatario}: {$this->mensagem}!";
    }
}
?>