<?php 
	/**
	 * 
	 */
	class CategoryContent 
	{
	public $id;
	public $name;
		function CategoryContent($name)
		{
			$this->name=$name;
		}
	}
	$categorycontent = new CategoryContent("Dia diem du lich");
	var_dump($categorycontent);
?>