<?php 

	class StrUtils {

		private $str ="";

		function __construct($newStr) {
			$this->str = $newStr;
		}
		
		public function getString() {
			return $this->str;
		}

		public function bold() {
			$bold = '<strong>' .$this->str. '</strong>';
			return $this->str = $bold;
		}

		public function italic() {
			$italic = '<em>' .$this->str. '</em>';
			return $this->str = $italic;
		}

		public function underline() {
			$underline = '<u>'.$this->str. '</u>';
			return $this->str = $underline;
		}

		public function capitalize() {
			$capitalize = ucfirst($this->str);
			return $capitalize;
		}

		public function uglify() {
			$this->bold();
			$this->italic();
			$this->underline();
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

<!-- 	<div>Le mot est en gras : <?= $myObj->bold(); ?></div>
	<div>Le mot est en italic : <?= $myObj->italic(); ?></div>
	<div>Le mot est souligné : <?= $myObj->underline(); ?></div>
	<div>Le première lettre du mot est en capitale : <?= $myObj->capitalize(); ?></div> -->
	<div>Cumul des styles : <?= $myObj->getString(); ?></div>

</body>
</html>