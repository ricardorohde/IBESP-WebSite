<?php

class Artigos extends Db
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getArtigo($cod_artigo) //Retorna um único artigo
    {
        return $this->select('SELECT * FROM ARTIGOS WHERE cod_artigos =:id limit 1', ['id' => $cod_artigo]);
    }
    public function getArtigosRecentes() //Retorna vários artigos com ordem de data. Mais recentes primeiros
    {
        return $this->select('SELECT * FROM ARTIGOS WHERE status = 1 order by data desc');
    }
    public function getArtigosDestaques() //Retorna vários artigos priorizando os de maiores destaques.
    {
        return $this->select('SELECT * FROM ARTIGOS WHERE status = 1 order by visualizacao,data desc limit 5');
    }
    public function setArtigo($tabela, $data)
    {
        $this->insert($tabela, $data);
    }
}
?>