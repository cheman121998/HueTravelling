<?php 
	/**
	 * 
	 */
	class Role 
	{
		public $id;
		public $name;
		
	public function __construct($name)
		{
			$this->name=$name;
		}
	}s
	$role = new Role("Admin");
	var_dump($role);
?>