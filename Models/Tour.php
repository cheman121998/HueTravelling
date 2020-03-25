<?php 
	/**
	 * 
	 */
	class Tour
	{
	public $id;
	public $name;
	public $policy;
	public $schedule;
	public $date_start;
	public $destination;
	public $departure_place;
		
		public function __construct($name, $policy, $schedule, $date_start, $destination, $departure_place )
		{
			$this->name=$name;
			$this->policy=$policy;
			$this->schedule=$schedule;
			$this->date_start=$date_start;
			$this->destination=$destination;
			$this->departure_place=$departure_place;
		}
	}
	$tour = new Tour("Dai Noi Hue", "abc", "xyz", "1/1/2020", "Hue", "Hue");
	var_dump($tour);
?>