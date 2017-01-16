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
			$underline = '<u>'.$this->str. '</u>';
			return $underline;
		}

		public function capitalize() {
			$underline = ucfirst($this->str);
			return $underline;
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
	<div>Le mot est souligné : <?= $myObj->underline(); ?></div>
	<div>Le première lettre du mot est en capitale : <?= $myObj->capitalize(); ?></div>

</body>
</html>