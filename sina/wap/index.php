<html>
<link rel="stylesheet" type="text/css" href="css/main.css">


<head>
<title>新狼首页——无产阶级的崛起</title>

</head>
<body>
	<h1 class="big" onclick="location='index.php'" style='cursor:pointer'>新郎首页</h1>

<div id="owner">
	<div id="user">
	
	 <?php
	if(!isset($_COOKIE["qianniancc_login"])){
    print '<a href="login.php">登陆</a>|<a href="register.php">注册</a>';
	}else{
	print "<b>你好，{$_COOKIE['qianniancc_login']}   </b><a href='outuser.php'>注销</a>";	
		
	}
	?>
	</div>
    <div id="top">
    	<?php
    include "config/config.php";
	$sql="SELECT * FROM cate";
	$result=mysql_query($sql);
	while($rows=mysql_fetch_assoc($result)){
		if($rows["status"]==1){
	
		print "<a href='list.php?cate={$rows['name']}'>".$rows["name"]."</a>";
		$sonsql="select id,name from cate where pid={$rows['id']}";
		$sonresult=mysql_query($sonsql);
		/*
		while($sonrows=mysql_fetch_assoc($sonresult)){
			print ">><a href='list.php?cate={$sonrows['id']}'>{$sonrows['name']}</a>";
			
		}
		*/
		
		}
	}
	
	
	
	?>
    </div>
	<div class="clear"></div>
     <div id="banner">
     <b>欢迎来到新郎博客</b>
    </div>
     <div id="main">
	 <?php
	 

	$sql1="SELECT title,id FROM art";
	$result1=mysql_query($sql1);
	 
	while($rows=mysql_fetch_assoc($result1)){
		
		print "<a href='arts.php?id={$rows['id']}'>".$rows['title']."</a>";
	}
?>
    </div>
    <div id="link">
	<?php
		foreach($blogroll as $key => $value){
			
			
			echo "<a target='new' href='{$value}'>{$key}</a>   ";
			
		}
		?>
    </div>
    <div id="down">
     <span><?php print $down; ?></span>
    </div>
</div>

</body>
</html>
<?php

include_once "top.extra.php";

?>
<script src="js/main.js"></script>