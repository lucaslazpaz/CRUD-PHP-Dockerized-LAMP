<?php 

class Conexao 
{

    public static $instance;

    public static function get_instance()
    {
        if(!isset(seLf::$instance))
        {
            seLf::$instance = new PDO("mysql:host=db;dbname=agendamentos;", "root", "test", 
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            seLf::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return seLf::$instance;
    }
}
?>