<?php
 // method factory basically 
class Notification
{
private $setMethod;
public function setMethod($setMethod)
{
  $this->setMethod=$setMethod;
}
public function send()
{
   if($this->setMethod=="email")
   {
      //logic
   }
   elseif ($this->setMethod == "message") {
      # code...
   }
   else
   {
      // logic 
   }
}
}
 // interface factory  mainly  open close principle
class Notification
{
private $setMethod;
public function setMethod(Notifialbe $setMethod)
{
  $this->setMethod = $setMethod;
}
public function send()
{
   $this->setMethod->send();
}
interface Notifialbe
{
   public function send();
}
class Email implements Notifialbe
{
   public function send()
   {
      //email logic
   }
}
class Message implements Notifialbe
{
   public function send()
   {
      // message logic
   }
}
?>