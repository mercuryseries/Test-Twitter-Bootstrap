<!DOCTYPE html>
<html lang="fr">
<head>
	<title><?php echo isset($title) ? $title: "TDN SOCIAL NETWORK" ; ?></title>
	<meta charset="UTF-8" />
	<meta name="author" content="Honoré HOUNWANOU" />
	<meta name="description" content="social network, réseau social, ecole supérieure multinationale des télécommunications, ESMT, esmt, Dakar, Sénégal">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/style-ie.css" />
	<link rel="stylesheet" href="css/smoothness/jquery-ui-1.10.3.min.css" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
	<div id="main_wrapper">
		<!-- Affichage de la top bar user -->
				<header id="top_bar">
					<h1>TDN SOCIAL NETWORK</h1>
					<nav id="top_bar_menu">
						<ul>
							<li><a href="index.php"><i class="icon-home"></i></a></li>
							<li><a href="profile.php">Profil</a></li>
							<li><a href="#">Amis</a></li>
							<li><a href="#"><span class="notif_msg">12</span>Messages</a></li>
							<li><a href="#"><span class="notif_msg">3</span>Notifs</a></li>
							<li><a href="#">Paramètres</a></li>
							<li><a href="logout.php">Déconnexion</a></li>
						</ul>
					</nav>
				</header>
				<div class="separator"></div>
		
		<div id="content" style="clear:both;">