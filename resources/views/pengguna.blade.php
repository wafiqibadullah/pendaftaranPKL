<!DOCTYPE html>
<html>
<head>
	<title>Pengguna</title>
</head>
<body>
<h1>Tampilan Login Pengguna</h1>
<br>
<p><?php echo  Auth::user()->username ; ?></p>
<a href="/keluar">Keluar</a>
</body>
</html>