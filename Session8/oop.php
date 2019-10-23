<?php 
	/**
	 * 
	 */
	class Person 
	{
		$name = 'aaa';
		
		public function getName($value='')
		{
			return $name;
		}
	}
	$stu = new Person();
	$stu->getName();

	/**
	 * 
	 */
	class Student extends Person
	{
		
		public function getUser($value='')
		{
			return $name;
		}
	}
	$stu = new Student();
	$stu->getUser();
 ?>