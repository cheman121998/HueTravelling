<?php 
	/**
	 * 
	 */
	class Content  
	{	
	public $id;
	public $title;
	public $content;
	public $images;
		
	public	function Content($title, $content, $images)
		{
			$this->title=$title;
			$this->content=$content;
			$this->images=$images;
		}
	}
	$content = new Content("Am thuc Hue", "abc", "xyz");
	var_dump($content);
?>