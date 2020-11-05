<?php
$GLOBALS['prefix']='web_';

function connect()
{
	return mysqli_connect('henryux.dk.mysql','henryux_dkhenryux','henryisadmin', 'henryux_dkhenryux');
}


/*
function check_login($ID, $username)
{
	$q="SELECT `ID` FROM `".$GLOBALS['prefix']."users` WHERE `username`='$username' LIMIT 1";
	$res=mysqli_query(connect(), $q);
	if (mysqli_num_rows($res)==1)
	{
		while ($row=mysqli_fetch_assoc($res))
		{
			if($row['ID']==$ID)
				return 1;
		}
	}
	else
		return 0;
}
*/

?>