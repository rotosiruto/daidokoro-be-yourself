<h1>ログイン</h1>
<?php print(
  $this->Form->create('UserRegistration') .
  $this->Form->input('mail_address') .
  $this->Form->input('password') .
  $this->Form->end('Submit')
); ?>