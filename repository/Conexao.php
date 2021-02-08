<?php
class Conexao{
    public static function criar(){
        return new PDO("sqlite:db/filmes.db");        
    }
}