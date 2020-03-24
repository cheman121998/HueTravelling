<?php 
/**
 * 
 */
class User 
{
	private $id;
	private $name;
	private $username;
	private $password;
	private $email;
	private $address;
	private $birthday;
	private $phone;
	private $role_id;
	public function User($name, $username, $password, $email, $address, $birthday, $phone, $role_id)
	{
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
$user = new User("Man Man", "manman123", 123456, "ctmman@gmail.com", "Hue", "01/02/1998", "01232323", 1);
var_dump($user);
?>


<!--Models => Chứa các file model.php. Khai báo các class, model (Ví dụ User.php)
Services =>  Viết các Service cho từng đối tượng, thêm sửa xoá… 
(Hàm tương ứng, cần thiết cho mỗi đối tượng) Ví dụ: UserService.php (hàm: find, edit, delete.... verifyUser)
Controllers
Views
-->