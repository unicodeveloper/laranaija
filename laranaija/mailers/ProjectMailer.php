<?php namespace laranaija\Mailers;

class ProjectMailer extends Mailer{

    public function submitProject()
    {
      $user = 'prosperotemuyiwa@gmail.com';
      $view = 'emails.project';
      $data = [];
      $subject = 'New Project Seeking Approval';

      return $this->sendTo($user, $subject, $view, $data);
    }

    public function notifyUserOfApproval($email, $data, $projectTitle = 'NOW')
    {
      $userEmail = $email;
      $view      = 'emails.projectapproval';
      $data      = $data;
      $subject   = $projectTitle . ' APPROVED ON LARANAIJA';

      return $this->sendTo($userEmail, $subject, $view, $data);
    }
}