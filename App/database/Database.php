<?php 
//aqui que tera minhas funçoes de database.
class Database
{   
    private const HOST = '';
    private const DATABASE = '';
    private const USER = '';
    private const PASSWORD = '';
    private static function conect(){
        try
        {
            $con = new PDO('mysql:host='.self::HOST.';dbname='. self::DATABASE, self::USER, self::PASSWORD);
            $con->getAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $error)
        {
            echo "ERRO" . $error;
        }
    }
    public function select(){
        
    }
}