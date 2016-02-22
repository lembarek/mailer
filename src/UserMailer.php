<?php

 namespace Lembarek\Mailer;

/**
 * User Mailer
 **/

class UserMailer extends Mailer
{
    /**
     * to send welcome message to a user
     *
     * @param  string  $to
     * @return mixed
     */
    public function welcome($to)
    {
       $subject = "welcome email";
       $view = 'mailer::emails.welcome';
       return $this->sendTo($to, $subject, $view);
    }
}
