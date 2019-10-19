<!DOCTYPE html>
<html>
<head>
	<title>Pengurus</title>
</head>
<body>
<h1>Tampilan Login Pengurus</h1>
<br>
<p><?php echo  Auth::user()->username ; ?></p>
<p><?php echo  Auth::user()->password ; ?></p>
<a href="/keluar">Keluar</a>
</body>
</html>