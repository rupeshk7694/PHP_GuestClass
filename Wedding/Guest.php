<?php

namespace Wedding;

use Wedding\Process\GuestsProcessor;
use Wedding\GuestMember;

/**
* Class Guest
**/
class Guest {
	/**
	* @param $guest array
	* @return bool
	*/
	public function addGuest($guest) {
		$guestMember = new GuestMember($guest);
		$guestsProcessor = new GuestsProcessor();
		return $guestsProcessor->addGuest($guestMember);
	}

	/**
	* @param $guest array
	* @return bool
	*/
	public function addGuests($guests = null) {
    $result = array(); //default empty array
		if(!$guests == null && !isset($guests) || !is_array($guests)) {
			$guests = (isset($_POST['guestArray']) && is_array($_POST['guestArray'])) ? $_POST['guestArray'] : array();
		}

		$guestsProcessor = new GuestsProcessor();
		foreach ($guests as $guest) {
      $guestMember = new GuestMember($guest);
      $result[] = $guestsProcessor->addGuest($guestMember);
		}
		
		return $result;
	}
}
