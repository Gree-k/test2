<?php
namespace App;

use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class Mailer
{
    public $data;
    protected $config;
    protected $mailer;
    protected $message;

    public function __construct()
    {
        $config = Config::instance();
        $this->data = $config->data;

        $host = $this->data['mail']['default']['setting']['host'];
        $port = $this->data['mail']['default']['setting']['port'];
        $sec = $this->data['mail']['default']['setting']['security'];

        $log=$this->data['mail']['default']['authorization']['login'];
        $pass=$this->data['mail']['default']['authorization']['password'];

        $transport = Swift_SmtpTransport::newInstance($host, $port, $sec)
            ->setUsername($log)
            ->setPassword($pass);

        $this->mailer = Swift_Mailer::newInstance($transport);
    }

    public function message($from, $to, $title, $text)
    {

        $this->message = Swift_Message::newInstance()
            ->setFrom([ $this->data['mail']['default']['authorization']['login'] => $from ])
            ->setTo($to)
            ->setSubject($title)
            ->setBody($text);
    }

    public function messageToAdmin($title, $text)
    {
        $log=$this->data['mail']['default']['authorization']['login'];
        $admin = implode(',', $this->data['mail']['admin']);

        $this->message = Swift_Message::newInstance()
            ->setFrom([ $log => 'Сервер' ])
            ->setTo($admin)
            ->setSubject($title)
            ->setBody($text);
    }

    public function send()
    {
        return $this->mailer->send($this->message);
    }

}