<?php

class Post
{
	private $id;
	private $autor;
	private $texto;
	private $data;

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getAutor()
	{
		return $this->autor;
	}

	public function setAutor($autor)
	{
		$this->autor = $autor;
	}

	public function getTexto()
	{
		return $this->texto;
	}

	public function setTexto($texto)
	{
		$this->texto = $texto;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setData($data)
	{
		$this->date = $data;
	}
}

?>
