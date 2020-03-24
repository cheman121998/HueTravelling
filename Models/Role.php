<?php 
	/**
	 * 
	 */
	class Role 
	{
		public $id;
		public $name;
		
		function Role($name)
		{
			$this->name=$name;
		}
	}
	$role = new Role("Admin");
	var_dump($role);
?>