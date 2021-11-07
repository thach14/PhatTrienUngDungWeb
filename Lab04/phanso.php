<?php
class PhanSo{
	private $tu;
	private $mau;
	// public function __construct(){
	// 	$this->$tu = 0;
	// 	$this->$mau = 1;
	// }
	// public function __construct(){
	// 	$a = func_get_arg();
	// 	$i = func_num_args();
	// 	if (method_exists($this, $f = '__construct'.$i)){
	// 		call_user_func_array(array($this,$f), $a);
	// 	}
	// }
	// public function __construct1()
	// {
	// 	$this->tu = 0;
	// 	$this->mau = 1;
	// }
	public function __construct($tuso, $mauso){
		$this->tu = $tuso;
		$this->mau = $mauso;
	}

	public function __destruct(){

	}
	public function xuat()
	{
		return "{$this->tu} \ {$this->mau}";
	}
	public function cong($ps1){
		
		$ketquatu = $ps1->tu*$this->mau+$this->tu*$ps1->mau;
		$ketquamau = $ps1->mau * $this->mau;
		return $ketquatu."/".$ketquamau."<br>";
	}
	public function tru($ps1){
		
		$ketquatu = $this->tu*$ps1->mau-$ps1->tu*$this->mau;
		$ketquamau = $ps1->mau * $this->mau;
		return $ketquatu."/".$ketquamau."<br>";
	}
	public function nhan($ps1){
		
		$ketquatu = $this->tu*$ps1->tu;
		$ketquamau = $ps1->mau * $this->mau;
		return $ketquatu."/".$ketquamau."<br>";
	}
	public function chia($ps1){
		
		$ketquatu = $this->tu*$ps1->mau;
		$ketquamau = $this->mau*$ps1->tu;
		return $ketquatu."/".$ketquamau."<br>";
	}

}
?>