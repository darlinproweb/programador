<?php
		$destinatario = 'darlinprogramacionwed@gmail.com';
		
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
   	$mensaje = $_POST['mensaje'];
		
		$header = "Enviado a DarlinProWeb";
		$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
		
		mail($destinatario, $mensajeCompleto, $header, $email);
		
		echo "<script>alert('correo enviado exitosamente')</script>";
		echo "<script> setTimeout(\"location.href='index.html'\",1000) </script>";
		
		?>
