<?php
$sql=mysql_connect("localhost","root","");
mysql_select_db("e_vote_using_blockchain");
if($sql){ echo "connected"; }else
{ echo mysql_error();}
	 ?>

