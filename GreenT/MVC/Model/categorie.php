<?php


class categorie{
	private string $idc;
	private string $typec;

	

	public function __construct($idc,$typec){
		$this->idc = $idc;
        $this->typec = $typec;

	}
	public function getidc()
	{
		return $this->idc;
	}

	public function gettypec()
	{
		return $this->typec;
	}


/////////////////////


	public function setidc($idc)
	{
		 $this->idc = $idc;
	}

	public function settypec($typec)
	{
		$this->typec = $typec;
	}
}
?>