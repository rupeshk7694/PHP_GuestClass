<?php

namespace Wedding;

/**
* Class GuestMember (Modal only)
**/
class GuestMember
{
    private $name;
    private $address;
    private $phone;
    private $email;
    private $dateCreated;

	/**
	* Generic constructor 
	* @param array
	**/
	function __construct( $guest = array()) {

		$this->name 		= isset($guest['name']) ? $guest['name'] : '';
		$this->address 	= isset($guest['address']) ? $guest['address'] : '';
		$this->phone 		= isset($guest['phone']) ? $guest['phone'] : '';;
		$this->email 		= isset($guest['email']) ? $guest['email'] : '';
		$this->dateCreated 		= isset($guest['created']) ? $guest['created'] : new \DateTime();
	}

	/**
	* @return string
	*/
	public function getName() {
		return $this->name;
	}

	/**
	* @param string $name
	*/
	public function setName($name) {
		$this->name = $name;
	}

	/**
	* @return string
	*/
	public function getAddress() {
		return $this->address;
	}

	/**
	* @param string $address
	*/
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	* @return string
	*/
	public function getPhone() {
			return $this->phone;
	}

	/**
	* @param string $phone
	*/
	public function setPhone($phone) {
		$this->phone = $phone;
	}

	/**
	* @return string
	*/
	public function getEmail() {
		return $this->email;
	}

	/**
	* @param string $email
	*/
	public function setEmail($email) {
	  $this->email = $email;
	}

	/**
	* @return datetime
	*/
	public function getDateCreated() {
		return $this->dateCreated;
	}

	/**
	* @param datetime $dateCreated
	*/
	public function setDateCreated($dateCreated) {
		$this->dateCreated = $dateCreated;
	}

}