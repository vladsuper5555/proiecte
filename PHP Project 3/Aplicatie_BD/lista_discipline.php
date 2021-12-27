Lista notelor sortate pe discipline
<ul>
	<?php

	function find_nume($id, $conn)
	{
		$rep = mysqli_query($conn, 'select * from elev');
		while (true) {
			$i = mysqli_fetch_array($rep);
			if ($i['id'] == $id)
				return $i['nume_elev'] . ' ' . $i['prenume_elev'];
		}
	}
	$conn = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($conn, 'postuniv');

	$res = mysqli_query($conn, 'select * from disciplina');
	while ($i = mysqli_fetch_array($res)) {
		$res1 = mysqli_query($conn, 'select * from situatie where id_materie  = " ' . $i['id_materie'] . '"');

		echo $i['denumire_disc'] . '<ul>';
		while ($j = mysqli_fetch_array($res1)) {
			echo '<li>' . find_nume($j['id'], $conn) . ' ' . $j['data'] . ' ' . $j['nota'] . ' ' . '</li>';
		}
		echo '</ul>';
	}
	?>

</ul>