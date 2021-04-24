<?php

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailerController extends AbstractController
{
    /**
     * @Route("/email", name="email")
     */
    private $mailer;
    public function _constructor(MailerInterface  $mailer){
        $this->mailer=mailer;
    }
   /* static public function sendEmail(MailerInterface $mailer)
    {

        $email = (new Email()) ->from('amen.catraye@avenue991.com')
            ->to('amencatraye@gmail.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);
    }*/
}
?>