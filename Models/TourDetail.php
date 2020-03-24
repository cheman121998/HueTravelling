<?php 
	/**
	 * 
	 */
	class TourDetail 
	{

	public $id;
	public $count_adult;
	public $count_child;
	public $price;
	public $date_book;
		
		function Total($count_adult, $count_child, $price)
		{
			$total = $count_child*80%$price + $count_adult*$price;
			return $total;
		}
	}
?>