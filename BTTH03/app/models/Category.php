<?php

class Category{
    private $id;
    private $tenTheLoai;

    public function __construct($id, $tenTheLoai){
        $this->id = $id;
        $this->tenTheLoai = $tenTheLoai;
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
	public function getTenTheLoai() {
		return $this->tenTheLoai;
	}
	
	/**
	 * @param mixed $tenTheLoai 
	 * @return self
	 */
	public function setTenTheLoai($tenTheLoai): self {
		$this->tenTheLoai = $tenTheLoai;
		return $this;
	}
}