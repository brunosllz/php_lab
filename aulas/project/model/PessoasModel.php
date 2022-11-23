<?php

require_once '../database/conexao.php';

class PessoasModel
{
  private $conexao = null;

  public function __construct($conexao = null)
  {
    if (!$conexao) {
      throw new Exception('Conexao nao pode ser nula.', 500);
    }

    $this->conexao = $conexao;
  }

  private function retornoAPI($dados = [])
  {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($dados);

    exit;
  }

  private function isValidId($id)
  {
    if (!$id || is_numeric($id) || $id == 0) return true;

    return false;
  }

  public function getPeoples()
  {
    $sql = "SELECT * FROM pessoas WHERE (excluido = 0 OR excluido is null);";
    $peoples = $this->conexao->query($sql);

    $arrPeoples = [];
    while ($row = $peoples->fetch_assoc()) {
      $arrPeoples[] = $row;
    }

    $this->retornoAPI($arrPeoples);
  }

  public function getPeopleById($id = 0)
  {
    if (!$this->isValidId($id)) $this->retornoAPI();

    $id = $id * 1; // 1

    $sql = "SELECT * FROM pessoas WHERE (excluido = 0 OR excluido is null) AND id = {$id};"; // versao php 7+
    $peoples = $this->conexao->query($sql);

    if ($peoples->num_rows <= 0) $this->retornoAPI(); // se nao encontrou registros no banco.

    $arrPeoples = [];
    while ($row = $peoples->fetch_assoc()) {
      $arrPeoples[] = $row;
    }

    $this->retornoAPI($arrPeoples);
  }

  public function deletePeople($id = 0)
  {
    if (!$this->isValidId($id)) $this->retornoAPI();

    $id = $id * 1; // 1

    $sql = "UPDATE pessoas SET excluido = 1 WHERE id = {$id};";
    $peoples = $this->conexao->query($sql);

    if ($peoples) $this->retornoAPI(); // true ou false se foi deletado (soft delete)
  }
}
