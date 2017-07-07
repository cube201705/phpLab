<?php

Class EventItem {

	private $eventName;
	private $eventDate;
	private $eventTime;
	private $eventDesc;
	private $eventPrice;
	
	public function __construct($eventName, $eventDate, $eventTime, $eventDesc, $eventPrice) {
		$this->eventName = $eventName;
		$this->eventDate = $eventDate;
		$this->eventTime = $eventTime;
		$this->eventDesc = $eventDesc;
		$this->eventPrice = $eventPrice;
	}
	
	public function getEventName() {
		return $this->eventName;
	}
	
	public function setEventName($n) {
		$this->eventName = $n;
	}
	
	public function getEventDate() {
		return $this->eventDate;
	}
	
	public function setEventDate($d) {
		$this->eventDate = $d;
	}
	
	public function getEventTime() {
		return $this->eventTime;
	}
	
	public function setEventTime($t) {
		$this->eventTime = $t;
	}
	
	public function getEventDesc() {
		return $this->eventDesc;
	}
	
	public function setEventDesc($desc) {
		$this->eventDesc = $desc;
	}
	
	public function getEventPrice() {
		return $this->eventPrice;
	}
	
	public function setEventPrice($p) {
		$this->eventPrice = $p;
	}
}

?>