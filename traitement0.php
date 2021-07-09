<form method='get'>
<?php 
	Session_start();
	$mot=$_SESSION['mot'];
	$tableau=str_split($mot);
	$alphabet=$_GET['taper'];
	$u=0;
	$result=1;
	for($i=0;$i<$_SESSION['nb_tirer'];$i++)
	{
		if($alphabet==$tableau[$i])
		{
			$num[$u]=$i;
			$u++;
			$result=$result*0;
		} else {
			$result=$result*1;
		}
	}
	for($e=0;$e<count($num);$e++)
	{
		$_SESSION['tirer'][$num[$e]]=$alphabet;
	}
	if($result==0)
	{
		header('Location:pendu0.php');
	} else if($result==1)
	{
		$_SESSION['rater']=$_SESSION['rater']+1;
		header('Location:pendu0.php');
	}
?>
</form>