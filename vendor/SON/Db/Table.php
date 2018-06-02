<?php
namespace SON\Db;

abstract class Table {
	protected $db;
	protected $table;
	protected $extras;

	public function __construct(\PDO $db) {
		$this->db = $db;
	}

	public function fetchAll() {
		$query = "SELECT * FROM {$this->table}";
		return $this->db->query($query);
	}

	public function row() {
		$query = "Select * from {$this->table}";
		$row = $this->db->query($query);
		return $row->rowCount();
	}

	public function find($id) {
		$stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE id=:id");
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return $stmt;
	}

	public function update($content, $id) {
		$stmt = $this->db->prepare("UPDATE {$this->table} SET conteudo = :content WHERE id=:id");
		$stmt->bindParam(":content", $content);
		$stmt->bindParam(":id", $id);
		if($stmt->execute()) {
			echo "Alterado com sucesso!";
		}
		return $stmt;
	}

	public function delete($id) {
		$stmt = $this->db->prepare("DELETE FROM {$this->table} WHERE id=:id");
		$stmt->bindParam(":id", $id);
		if($stmt->execute()) {
			echo "Deletado com sucesso!";
		}
		return $stmt;
	}

}