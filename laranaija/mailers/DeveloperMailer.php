<?php namespace laranaija\Mailers;

class DeveloperMailer extends Mailer{

    public function submitProfile(){

      $user = 'prosperotemuyiwa@gmail.com';
      $view = 'emails.developer';
      $data = [];
      $subject = 'New Developer Profile Seeking Approval';

      return $this->sendTo($user, $subject, $view, $data);
    }
}