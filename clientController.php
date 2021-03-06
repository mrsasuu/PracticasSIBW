<?php
class ClientController{
	function ClientController(){
		include 'clients.php';
		$this->clients = new Clients();
	}

	function createClient($name, $surname, $address, $email, $idCard, $phone){
		return $this->clients->createClient($name, $surname, $address, $email, $idCard, $phone);
	}
	
	
	function deleteClient($client){
		$this->clients->deleteClient($client);
	}
	
	
	function updateClient($client, $name, $surname, $address, $email, $idCard, $phone){
		$this->clients->updateClient($client, $name, $surname, $address, $email, $idCard, $phone);
	}
	
	function getClientByID($reservation){
		return $this->clients->getClientByID($reservation);
	}

	function getClientByMatchingPattern($pattern){
		return $this->clients->getClientByMatchingPattern($pattern);
	}
	function getClientByExactMatch($name, $surname, $address, $email, $idCard, $phone){
		return $this->clients->getClientByExactMatch($name, $surname, $address, $email, $idCard, $phone);
	}
}
?>
