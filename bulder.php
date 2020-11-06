<?php
// bulder patten mainly object chaining 
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
}
$email = new email();
$email->setTo("masudpado@gmail.com")->setcc("")->setSubject(" ");
?>