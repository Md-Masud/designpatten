<?php 
// singoleton design patten basically one instance create no more two instance create
 class mysql 
 {
        private $host = 'localhost'; //HOST NAME.
        private $db_name = 'ecomm'; //Database Name
        private $db_username = 'root'; //Database Username
        private $db_password = ''; //Database Password
        private $connection;
        private static $instance = null;
  
  private function __construct()

   {
    try {
        $this->connection = new PDO('mysql:host='. $this->host .';dbname='.$this->db_name, $this->db_username, $this->db_password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

       } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
       }

   }
   public static function getsetting()
   {
    if(!self::$instance)
    {
      self::$instance=new mysql();
    }
    return  self::$instance;
   }
   public static function getConncetion()
   {
    return $this->connection;
   }
   
}
 mysql::getsetting()->getConncetion();

?>