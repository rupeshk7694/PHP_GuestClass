<?php

namespace Wedding\Process;

use Wedding\Process\DBConnector;

/**
 * Class GuestsProcessor
**/
class GuestsProcessor
{
	private $conn;

	/**
	* Generic constructor 
	* @param array
	**/
	public function __construct($data = array()) {
	    $this->conn = new DBConnector($data);
	}

	/**
	* method to insert guest member details in database
	* @param array
	**/
	public function addGuest($guestMember)
	{
		try {
			$stmt = $this->conn->getConnection()->prepare('INSERT INTO guest (guest_name, guest_address, guest_phone, guest_email, date_created) 
            VALUES ( :guestName, :address, :phone, :email, NOW())');
			$res = $stmt->execute(array(
        ':guestName' => $guestMember->getName(),
        ':address' => $guestMember->getAddress(),
        ':phone' => $guestMember->getPhone(),
        ':email' => $guestMember->getEmail(),
      ));
		}
		catch( \PDOException $Exception ) {
		    print 'Error!: '.$Exception->getMessage() .' with code: ' .(int)$Exception->getCode();
		}
		return $res;
	}
}