<?php 
	/**
	 * 
	 */
	class CategoryContent 
	{
	public $id;
	public $name;
		public function CategoryContent($name)
		{
			$this->name=$name;
		}
	}
	$categorycontent = new CategoryContent("Dia diem du lich");
	var_dump($categorycontent);
?>