<!DOCTYPE html>
<html>
	<form method='get'>
	<head>
		<?php
			Session_start();
		?>
		<title>PENDU</title>
	</head>
	<body>
		<h1> DEVINER LE MOT CACHE </h1>
		<table width=auto border='0'>
			<tr>
			<?php for($i=0;$i<$_SESSION['nb_tirer'];$i++) { ?>
				<td width=auto ><?php echo $_SESSION['tirer'][$i] ?></td>
			<?php } ?>
			</tr>
		</table>
		<p>
			<input type='text' name='taper' placeholder='entrer un alphabet'>
			<input type='submit' name='valider' value='valider'>
			<?php if(isset($_GET['taper']))
			{
				$taper=$_GET['taper'];
				header('Location:traitement0.php?taper='.$taper);
			}
			?>
		</p>
		<p><a href='pendu.php'>nouveau jeux</a></p>
		<p>rater: <?php echo $_SESSION['rater'] ?></p>
		<?php if ($_SESSION['rater']==0) { ?>
		<img src='pendu0.png'/>
		<?php } ?>
		<?php if ($_SESSION['rater']==1) { ?>
		<img src='pendu1.png'/>
		<?php } ?>
		<?php if ($_SESSION['rater']==2) { ?>
		<img src='pendu2.png'/>
		<?php } ?>
		<?php if ($_SESSION['rater']==3) { ?>
		<img src='pendu3.png'/>
		<?php } ?>
		<?php if ($_SESSION['rater']==4) { ?>
		<img src='pendu4.png'/>
		<?php } ?>
		<?php if ($_SESSION['rater']==5) { ?>
		<img src='pendu5.png'/>
		<?php } ?>
		<?php if ($_SESSION['rater']==6) { ?>
		<img src='pendu6.png'/>
		<?php } ?>
		<?php if ($_SESSION['rater']==7) { ?>
		<img src='pendu7.png'/>
		<?php } ?>
		<?php if ($_SESSION['rater']>=8) { ?>
		<img src='pendu8.png'/>
		<h1>VOUS AVEZ PERDU :( </h1>
		<P> Le mot cache est <?php echo $_SESSION['mot'] ?> </p> 
		<?php } ?>
		<p>indice: les mots sont lies champ semantiques de 'reseaux' </p>
	</body>
	</form>
</html>