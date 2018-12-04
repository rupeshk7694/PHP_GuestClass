<?php

require_once("autoload.php");
/**
* DryRun Class to execute methods for test only
**/
class DryRun {

	private $guest = null;

	/**
	* Generic constructor 
	* @param array
	**/
	public function __construct($data = array()) {
	    $this->guest = new Wedding\Guest();
	}

	/**
	* @param void
	* print response from addGuest method
	**/
	public function addGuest() {
		$data = array('name'=> 'Buddy', 'address' => 'His Address', 'phone' => '+1-xxx-574-2342', 'email' => 'mybuddy@gmail.com');
    echo ($this->guest->addGuest($data)) ? 'One guest added' : 'Failed to add guest';
    echo '<hr>';
	}
 
 	/**
	* @param void
	* print response from addManyGuests method from Guest Class
	**/
	public function addManyGuests() {
		$data = array(
		  array('name'=> 'Friend1', 'address' => 'His Address1', 'phone' => '+1-345-234-yyyy', 'email' => 'friend1@gmail.com'),
		  array('name'=> 'Friend2', 'address' => 'His Address2', 'phone' => '+1-264-987-zzzz', 'email' => 'friend2@hotel.com'),
		  array('name'=> 'Friend3', 'address' => 'His Address3', 'phone' => '+1-236-343-xxxx', 'email' => 'friend3@hotel.com'),
		  array('name'=> 'Friend4', 'address' => 'His Address4', 'phone' => '+1-343-943-xxxx', 'email' => 'friend3@hotel.com'),
		);

		$res = $this->guest->addGuests($data);

		foreach ($res as $key => $val) {
        echo ($val) ? (1+$key).'/'.count($res).' guest added' : 'Failed to add guest';
        echo '<hr>';
		}
	}
}

$test = new DryRun();
$test->addGuest();
$test->addManyGuests();

