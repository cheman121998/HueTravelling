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

		public function TourDetail($count_adult, $count_child, $price, $date_book){
			$this->count_adult=$count_adult;
			$this->count_child=$count_child;
			$this->price=$price;
			$this->date_book=$date_book;
		}
		
		function Total($count_adult, $count_child, $price)
		{
			$total = $count_child*80%$price + $count_adult*$price;
			return $total;
		}
	}
	$tourdetail = new TourDetail(2, 1, 123123, "22/02/2020");
	var_dump($tourdetail);
?>