<html>
	<title>11240079 Lat Tulisan</title>
	<head>
	</head>
	<body bgcolor='white'>
	<table bgcolor= '#bbc5cb' border='0' width='100%' cellspacing='0' cellpadding='0'>
		<tr><td colspan='2' height='450'><img src='images/header.png' width='100%' height='100%'></td></tr>
		<tr><td width='150' height='400' valign='top'>
			<table border='0' width='100%' cellspacing='0' cellpading='0'>
				<tr><th>MENU</th></tr>
				<tr><td><a href='index.php'><img src='images/home.png' width='16' height='16'>BERANDA</a></td></tr>
				<tr><td><a href='index.php?menu=profil'><img src='images/profil.png' width='16' height='16'>PROFIL</a></td></tr>
				<tr><td><a href='index.php?menu=cv'><img src='images/cv.png' width='16' height='16'>CV</td></tr>
				<tr><td><a href='index.php?menu=galeri'><img src='images/galeri.png' width='16' height='16'>GALERI</td></tr>
			</table>
		</td><td valign='center' align='center'>
		<?php
		if(ISSET($_GET['menu'])){
			if($_GET['menu'] == 'profil')
			{
				include"profil.html";
			}
			if($_GET['menu'] == 'cv')
			{
				include"cv.html";
			}
			if($_GET['menu'] == 'galeri')
			{
				include"galeri.html";
			}
		} else {
				include"beranda.html";
			}
		?>
		</td></tr>
		<tr><th colspan='2' height='30' align='center'> <font color='#1b4c70' size='4'><i>TERIMA KASIH</i></font></th></tr>
	</table>
	</body>
</html>