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
	function __construct(argument)
	{
		# code...
	}
}
?>


<!--Models => Chứa các file model.php. Khai báo các class, model (Ví dụ User.php)
Services =>  Viết các Service cho từng đối tượng, thêm sửa xoá… 
(Hàm tương ứng, cần thiết cho mỗi đối tượng) Ví dụ: UserService.php (hàm: find, edit, delete.... verifyUser)
Controllers
Views
-->