
<?php
	include 'conecta_mysql.inc';
	$string = $_POST['txtString'];
		
	$reso = mysqli_query($conexao, "select * from ATIVO WHERE cd_patrimonio = '$string'");
	$eco = "<table class='table table-condensed table-striped'>";
	$eco = $eco.'<thead><tr>';
	$eco=$eco."<th>Patrimônio</th>";
    $eco=$eco."<th>Identificação</th>";
	$eco = $eco.'</tr></thead>';
	while($row = mysqli_fetch_array($reso)){  
	$eco = $eco."</tr>";
	 $eco=$eco."<td>".$row['cd_patrimonio']."</td>";
	 $eco=$eco."<td>".$row['ds_identificacao']."</td>";
	
	}
	$eco = $eco."</tr>";		
	$eco = $eco."</table>";
	echo $eco;
	
  ?>
