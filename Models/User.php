<?php 
/**
 * 
 */
class User 
{
	public $id;
	public $name;
	public $username;
	public $password;
	public $email;
	public $address;
	public $birthday;
	public $phone;
	public $role_id;
	public function __construct($id, $name, $username, $password, $email, $address, $birthday, $phone, $role_id)
	{
		$this->id=$id;
		$this->name=$name;
		$this->username=$username;
		$this->password=$password;
		$this->email=$email;
		$this->address=$address;
		$this->birthday=$birthday;
		$this->phone=$phone;
		$this->role_id=$role_id;

	}
}
//$user = new User(1, "Man Man", "manman123", 123456, "ctmman@gmail.com", "Hue", "01/02/1998", "01232323", 1);
//var_dump($user);
?>


<!--Models => Chứa các file model.php. Khai báo các class, model (Ví dụ User.php)
Services =>  Viết các Service cho từng đối tượng, thêm sửa xoá… 
(Hàm tương ứng, cần thiết cho mỗi đối tượng) Ví dụ: UserService.php (hàm: find, edit, delete.... verifyUser)
Controllers
Views
-->