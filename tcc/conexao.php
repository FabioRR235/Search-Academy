<?php

function novaConexao()
{
    $dsn ='mysql:host=localhost;dbname=formulario';
    $usuario = 'root';
    $senha = '';

    try
    {
        //cria objeto conexao de classe PDO
        $conexao = new PDO($dsn,$usuario,$senha);
        //retorna a conexao
        return $conexao;
    }
    catch(PDOException $e)
    {
        echo 'Erro ao conectar com Banco de Dados' . $e->getMessage();
    }
}//fecha a fç

//novaConexao();//executa a fç apenas para testar a conexao
//echo"Conexão com o BD realizada com sucesso!";
?>