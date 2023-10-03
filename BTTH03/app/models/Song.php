<?php

class Song{
    private $id;
    private $tenBaiHat;
    private $caSi;
    private $idTheLoai;

    public function __construct($id, $tenBaiHat, $caSi, $idTheLoai){
        $this->id = $id;
        $this->tenBaiHat = $tenBaiHat;
        $this->caSi = $caSi;
        $this->idTheLoai = $idTheLoai;
    }

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTenBaiHat() {
		return $this->tenBaiHat;
	}
	
	/**
	 * @param mixed $tenBaiHat 
	 * @return self
	 */
	public function setTenBaiHat($tenBaiHat): self {
		$this->tenBaiHat = $tenBaiHat;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCaSi() {
		return $this->caSi;
	}
	
	/**
	 * @param mixed $caSi 
	 * @return self
	 */
	public function setCaSi($caSi): self {
		$this->caSi = $caSi;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIdTheLoai() {
		return $this->idTheLoai;
	}
	
	/**
	 * @param mixed $idTheLoai 
	 * @return self
	 */
	public function setIdTheLoai($idTheLoai): self {
		$this->idTheLoai = $idTheLoai;
		return $this;
	}
}