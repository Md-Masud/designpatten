<?php
// prototype mainly object clone
class email
{
	private $to;
	private $cc;
	private $subject;
	public function setTo($to)
	{
		$this->to=$to;
		return $this;
	}
	public function setcc($cc)
	{
		$this->cc=$cc;
		return $this;
	}
	public function setSubject($subject)
	{
		$this->subject=$subject;
		return $this;
	}
	public function getTo()
	{
		return $this->to;
	}
}
$email = new email();
$email->setTo("masudpado@gmail.com")->setcc("dddd");
$yahoo= clone $email; // use the clone;
$yahoo->setTo("masud@gmail.com");
 echo $email->getTo();
 echo $yahoo->getTo();