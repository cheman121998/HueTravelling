<?php 
	/**
	 * 
	 */
	class TravelService
	{
	public $id;
	public $name;
	public $tax_code;
	public $represent;
	public $phone;
	public $email;
	public $website;
	public $NNKD;
		
	public function __construct($name, $tax_code, $represent, $phone, $email, $website, $NNKD)
		{
			$this->name=$name;
			$this->tax_code=$tax_code;
			$this->represent=$represent;
			$this->phone=$phone;
			$this->email=$email;
			$this->webstie=$website;
			$this->NNKD=$NNKD;
		}
		
	}
	$travelservice = new TravelService("Công ty du lịch lữ hành ABC", 123321, "Nguyễn Tiến Nam", "01232332", "dulich@gmail.com", "www.travle.com", "12A341");
	var_dump($travelservice);

?>