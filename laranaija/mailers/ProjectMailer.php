<?php namespace laranaija\Mailers;

class ProjectMailer extends Mailer{

    public function submitProject(){

      $user = 'prosperotemuyiwa@gmail.com';
      $view = 'emails.project';
      $data = [];
      $subject = 'New Project Seeking Approval';

      return $this->sendTo($user, $subject, $view, $data);
    }
}