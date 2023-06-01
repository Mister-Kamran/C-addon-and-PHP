 <?php 

class Sharp_Addon{

public $data;

public function Addon()
{

return $this->data = shell_exec("C:/xampp/htdocs/PHP_Api/PHP_Api/bin/Debug/PHP_Api.exe");

if (isset($data)) {
	
return "connect addon c#:".$data;

}else{

	return "error";
}

}


}


$data = new Sharp_Addon;





?>


<h2><?php  echo $data->Addon(); ?></h2>
