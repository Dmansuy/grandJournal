<header>
 <meta charset="utf-8" />
<link href="https://fonts.googleapis.com/css?family=Cinzel|PT+Mono|Raleway" rel="stylesheet">
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>       
<link rel="stylesheet" href="style.css" />
		<title>Bienvenue</title>
</header>
<?php
	session_start();
	include"menu.php";
	
?>
	<?php
if(empty ($_GET['par'])|| $_GET['par']==0)
{
	include "accueil.html";
}
else
{
	if($_REQUEST['par']==2)
	{
		include "histoire.html";
	}
	if($_REQUEST['par']==3)
	{	
		include "connexion.html";
	}
	if($_REQUEST['par']==4)
	{	
		include "article-noel.html";
	}
	if($_REQUEST['par']==5)
	{	
		include "article-oiseau.html";
	}
	if($_REQUEST['par']==6)
	{	
		include "article-jeux.html";
	}
	if($_REQUEST['par']==7)
	{	
		include "inscription.html";
	}
}
?>
<div class="footer">
	<footer>
		<ul class="icone">
			<li><a class="facebook" href="facebook.com"></a></li>
			<li><a class="youtube" href="youtube.com"></a></li>
			<li><a class="twitter" href="twwiter.com"></a></li>	
		</ul>
	</footer>
</div>
