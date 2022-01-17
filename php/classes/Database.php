<?php
class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'myblog';

    private $dbh;
    private $error;
    private $stmt;

    public function __construct()
    {
        // set dns settings
        $dns = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        // set options
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        //catch new PDO object
        try {
            $this->dbh = new PDO($dns, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }
}
echo "hello";
