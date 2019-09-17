<?php 

class SendWelcomeMessage
{
   private $mailer;
   public function __construct(MailerInterface $mailer)
   {
       $this->mailer = $mailer;
   }
}