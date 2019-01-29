<?php
	require "classes/Mypage.php";
	
	class Predrag extends Mypage
	{
		protected function GetContent()
		{
			$output = '';
			
			$output .= '<h1>Moje stranice</h1>';
			$output .= '<p>Pohranite svoje datoteke kod nas.</p>';
			
			return $output;
		}
		
		protected function PageRequiresAuthenticUser()
		{
			return true;
		}
	}

	$site = new Predrag();
	$site->Display('Predrags page');