<?php

class Usuario{

	private $id;
	private $login;
	private $senha;

	public function setId($value){
		$this->id = $value;
	}

	public function getId(){
		return $this->id;
	}

	public function setLogin($value){
		$this->login = $value;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setSenha($value){
		$this->senha = $value;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function loadbyid($id){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM usuario WHERE id = :id", array(":id"=>$id));
		if(count($results)>0){
			$row = $results[0];
			$this->setId($row["id"]);
			$this->setLogin($row["login"]);
			$this->setSenha($row["senha"]);
		}
	}

	public static function getlist(){
		$sql = new Sql();
		return $sql->select("SELECT * FROM usuario ORDER BY id");
	}

	public static function search($login){
		$sql = new Sql();
		return $sql->select("SELECT * FROM usuario WHERE login LIKE :search ORDER BY id",array(":search"=>"%".$login."%"));
	}

	public function login($login,$pass){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM usuario WHERE login = :login AND senha = :senha", array(":login"=>$login,"senha"=>$pass));
		if(count($results)>0){
			$row = $results[0];
			$this->setId($row["id"]);
			$this->setLogin($row["login"]);
			$this->setSenha($row["senha"]);
		}else{
			throw new Exception("Login e/ou senha inválidos");
			
		}
	}

	public function insert(){
		$sql = new Sql();
		$sql->query("INSERT INTO usuario(login,senha) VALUES (:login,:senha)",array(":login"=>$this->getLogin(),":senha"=>$this->getSenha()));
	}

	public function update($login,$senha){
		$this->setLogin($login);
		$this->setSenha($senha);
		$sql = new Sql();
		$sql->query("UPDATE usuario SET login = :login, senha = :senha WHERE id = :id",array(":login"=>$this->getLogin(),":senha"=>$this->getSenha(),":id"=>$this->getId()));
	}

	public function delete(){
		$sql = new Sql();
		$sql->query("DELETE FROM usuario WHERE id = :id", array(":id"=>$this->getId()));
		$this->setId(0);
		$this->setLogin("");
		$this->setSenha("");
	}

	public function __toString(){
		return json_encode(array("id"=>$this->getId(),"login"=>$this->getLogin(),"senha"=>$this->getSenha()));
	}

}

?>