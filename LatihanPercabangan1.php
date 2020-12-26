
<?php 

if(isset($_POST["proses"])){
		$guna = $_POST["guna"];
		if($guna<=30){
				$biaya = $guna * 150;
				echo "Total penggunaan anda $guna dengan biaya $biaya";
		}elseif($guna>30){
		$biaya = $guna * 170;
				echo "Total penggunaan anda $guna dengan biaya $biaya";
		}elseif ($guna<=60){
				$biaya = $guna * 210;
				echo "Total penggunaan anda $guna dengan biaya $biaya";
		}elseif($guna<=90){
				$biaya = $guna * 250;
				echo "Total penggunaan anda $guna dengan biaya $biaya";
		}elseif{
				$biaya = $guna * 250;
				echo "Total penggunaan anda $guna dengan biaya $biaya";
		}


	}

 ?>
