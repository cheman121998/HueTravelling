<?php 
/**
 * 
 */
class CategoryTour 
{
public $id;
public $name;

	public function CategoryTour($name)
	{
		$this->name=$name;
	}
}
$categorytour = new CategoryTour("Du lich trai nghiem");
var_dump($categorytour);
?>