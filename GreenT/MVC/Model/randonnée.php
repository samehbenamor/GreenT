<?php


class randonnée{
	private string $destination;
    private string $descriptiona;
    private string $prix;
    private string $datea;
	private string $idc;
	//private string $image;

	public function __construct($destination,$descriptiona,$prix,$datea,$idc){
        $this->destination = $destination;
        $this->descriptiona = $descriptiona;
        $this->prix= $prix;
        $this->datea = $datea;
		$this->idc = $idc;
	}


	public function getdestination()
	{
		return $this->destination;
	}

	public function getdescriptiona()
	{
		return $this->descriptiona;
	}

	public function getprix()
	{
		return $this->prix;
	}
	public function getdatea()
	{
		return $this->datea;
	}
	public function getidc()
	{
		return $this->idc;
	}
	public function getimage()
	{
		return $this->image;
	}
/////////////////////


	public function setdestination($destination)
	{
		 $this->destination = $destination;
	}

	public function setdescriptiona($descriptiona)
	{
		$this->descriptiona = $descriptiona;
	}
	public function setprix($prix)
	{
		$this->prix = $prix;
	}
	public function setdatea($datea)
	{
		$this->datea = $datea;
	}
	public function setidc($idc)
	{
		$this->idc = $idc;
	}
	public function setimage($image)
	{
		$this->image = $image;
	}
	 }

?>