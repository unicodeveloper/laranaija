<?php namespace laranaija\Mailers;

class DeveloperMailer extends Mailer{

    public function submitProfile(){

      $user = 'prosperotemuyiwa@gmail.com';
      $view = 'emails.developer';
      $data = [];
      $subject = 'New Developer Profile Seeking Approval';

      return $this->sendTo($user, $subject, $view, $data);
    }

    public function notifyDevOfApproval($email, $data, $devCodeName){

      $userEmail = $email;
      $view      = 'emails.devapproval';
      $data      = $data;
      $subject   = $devCodeName . ', NOW FEATURED ON LARANAIJA';

      return $this->sendTo($userEmail, $subject, $view, $data);
    }
}