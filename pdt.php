<?php
class Manusia
{
	protected $nama;
	protected $umur;
	
	public function getnama()
	{
		return $this->nama;
	}
	public function setNama($nama)
	{
		$this->nama = $nama;
	}
	private function callToPrivateNamaAndUmur()
	{
		return "{$this->nama} {$this->umur} tahun.";
	}
	protected function callToProtectedNamaAndUmur()
	{
		return "{$this->nama} {$this->umur} tahun.";
	}
}

class Karyawan extends Manusia
{
	private $departemen;
	private $gaji;
	
	public function getumur()
	{
		return $this->umur;
	}
	public function setUmur($umur)
	{
		$this->umur = $umur;
	}
	public function getDepartemen()
	{
		return $this->departemen;
	}
	public function setDepartemen($departemen)
	{
		$this->departemen = $departemen;
	}
	public function getGaji()
	{
		return $this->gaji;
	}
	public function setGaji($gaji)
	{
		$this->gaji =$gaji;
	}
	public function getNamaAndUmur()
	{
		return $this->callToProtectedNamaAndUmur();
	}
}
$karyawan = new Karyawan();

$karyawan->setNama('Nafa Nisa');
$karyawan->setUmur('25');
$karyawan->setDepartemen('softwre Engineer');
$karyawan->setGaji('10M');

echo "Identitas Karyawan";
echo "<br/>";
echo "<br/>";
echo $karyawan->getNama(). "<br/>";
echo $karyawan->getUmur()."<br/>";
echo $karyawan->getDepartemen()."<br/>";
echo $karyawan->getGaji()."<br/>";

?>
