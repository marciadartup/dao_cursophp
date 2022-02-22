<?php

				class Usuario{

					private $idusuario;
					private $email;
					private $loguin;
					private $senha;
					private $dtcadastro;

					//usuario
					public function getIdusuario()

					{
						return $this->idusuario;

					}
				 	public function setIdusuario($value)

				 	{
				 	$this->idusuario = $value;
				 	}
				 	//email

					public function getEmail()
					{
						return $this->email;

					}
				 	public function setEmail($value)
				 	{
				 	$this->email = $value;
				 	}

				 	//login
				  	public function getLogin()

				  	{
						return $this->login;

					}
				 	public function setLogin($value)
				 	{
				 	$this->login = $value;
				 	}

				 //senha

				 public function getSenha()
				 {
						return $this->senha;

				}
				 	public function setSenha($value)
				 {
				 	$this->senha = $value;
				 }

				 // data cadastro

				 public function getDtcadastro()
				 {
						return $this->dtcadastro;

				}
				 	public function setDtcadastro($value)
				 {
				 	$this->dtcadastro = $value;
				 }
				 

				 public function loadById($id)
				 
				 {

				 	$sql = new Sql();
				 	$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID" ,array( ":ID" =>$id));

				 	//if (isset($results[0]))

				 	if (count($results) > 0)

				 	{

				 		$row = $results[0];

				 		$this->setIdusuario($row['idusuario']);
				 		$this->setEmail($row['email']);
				 		$this->setLogin($row['login']);
				 		$this->setSenha($row['senha']);
				 		$this->setDtcadastro(new Datetime($row['dtcadastro']));
				 		

				 	}
				 }
			 	
			 	public function __toString(){

			 		return json_encode(array(
			 			"idusuario"=>$this->getIdusuario(),
			 			"email"=>$this->getEmail(),
			 			"login"=>$this->getLogin(),
			 			"senha"=>$this->getSenha(),
			 			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
			 			
			 			));
			 		
			 	}
			 }

			 ?>
