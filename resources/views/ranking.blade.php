<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1 user-scalable=no" />
		<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" > -->
		<meta name="keywords" lang="es" content="">
		<meta name="robots" content="All">
		<meta name="description" lang="es" content="">
		<title>IQ - Sapiens | Heroes</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" >
		<link rel="stylesheet" href="mig/css/styles.css" />

		<script type="text/JavaScript">
		function TimedRefresh( t ) {
		setTimeout("location.reload(true);", t);
		}
		</script>

	</head>
	<body class="Back-one" onload="JavaScript:TimedRefresh(30000);">
		<section class="Rank">
			<div class="Rank-logo">
				<img src="mig/images/Fondo-03.png">
			</div>
			<div class="Rank-contenido">

				<div class="Rank-contenido-contentabla">
					<div class="Tables">
						<table>

							<tbody id="listado">

								<tr>
								    <td>-</td>
									<th><b>No. Test</b></th>
									<th><b>Presentado</b></th>
									<th><b>Pendientes</b></th>
									<td>-</td>
								</tr>

								<tr>
								    <td>-</td>
									<td><b>1</b></td>
									<td><b>{{$cont1}}</b></td>
									<td><b> {{1429 - $cont1}}</b></td>
									<td>-</td>
								</tr>

								<tr>
								    <td>-</td>
									<td><b>2</b></td>
									<td><b>{{$cont2}}</b></td>
									<td><b> {{1429 - $cont2}}</b></td>
									<td>-</td>
								</tr>

								<tr>
								    <td>-</td>
									<td><b>3</b></td>
									<td><b>{{$cont3}}</b></td>
									<td><b> {{1429 - $cont3}}</b></td>
									<td>-</td>
								</tr>

								<tr>
								    <td>-</td>
									<td><b>4</b></td>
									<td><b>{{$cont4}}</b></td>
									<td><b> {{1429 - $cont4}}</b></td>
									<td>-</td>
								</tr>

								<tr>
								    <td colspan="5">-</td>

								</tr>



							</tbody>
						</table>
					</div>

					<div class="Tables">
						<table>
							<thead>
								<tr>
									<th>Nombres</th>
									<th>Ciudad</th>
									<th>Puntos</th>
									<th>Sistema</th>
									<th>Tiempo</th>
									<th nowrap="">Fecha</th>
								</tr>
							</thead>
							<tbody id="listado">

							@foreach($puntos as $punto)
								<tr>
									<td>{{$punto->nombres}}</td>
									<td>{{$punto->test}}</td>
									<td>{{$punto->total}}</td>
									<td>{{$punto->sistema}}</td>
									<td>{{$punto->tiempo}}</td>
 									<td>{{$punto->updated_at}}</td>
								</tr>
							@endforeach

							</tbody>
						</table>
					</div>
				</div>
			</div>

		</section>

		<script type="text/javascript" src="mig/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="mig/js/ranking.js"></script>
	</body>
</html>