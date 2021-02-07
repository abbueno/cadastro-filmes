<?php
class Conexao{
    public static function criar(){
        return new PDO("sqlite:filmes.db");        
    }
}