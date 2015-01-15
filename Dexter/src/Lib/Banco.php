<?php
class conectaBanco 
{
	protected $user = dexter;
	protected $senha = 123456;
	protected $host = localhost;
	protected $databse = dexter;
	
	public function conectar ()
	{
		pg_connect($connection_string);
	}
} 