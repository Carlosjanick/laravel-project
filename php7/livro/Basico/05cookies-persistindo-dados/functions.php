<?php
	function loginMessages(){
		if(isset($_COOKIE['username'])){
			return "You are ". $_COOKIE['username'];
		}else{
			return "You are not authenticated";
		}
	}
?>