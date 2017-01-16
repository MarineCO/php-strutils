<?php 

	class StrUtils {

		private $str ="";

		function __construct($newStr) {
			$this->str = $newStr;
		}
		
		public function bold() {
			$bold = '<strong>' .$this->str. '</strong>';
			return $bold;
		}

		public function italic() {
			$italic = '<em>' .$this->str. '</em>';
			return $italic;
		}

		public function underline() {
			
		}

		public function capitalize() {
			
		}

		public function uglify() {

		}

	}

	$myObj = new StrUtils("php");

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice POO</title>
</head>
<body>

	<div>Le mot est en gras : <?= $myObj->bold(); ?></div>
	<div>Le mot est en italic : <?= $myObj->italic(); ?></div>

</body>
</html>