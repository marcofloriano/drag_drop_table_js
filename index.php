<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="javascript.js"></script>
	<title>Drag and Drop Table JS</title>
</head>
	<body>
		<form method="post" action="form.php">
			<table>
				<thead>
				 <tr>  
				  <th>EMAIL</th>
				 </tr>
				</thead>
				<tbody>
					<tr draggable="true" ondragstart="start()"  ondragover="dragover()">						  
				  	<td>
				  		<input type="hidden" name="email1" value="marcofloriano@gmail.com">
				  		marcofloriano@gmail.com
				  	</td>
				 	</tr>
				 	<tr draggable="true" ondragstart="start()" ondragover="dragover()">  
				  	<td>
				  		<input type="hidden" name="email2" value="raquelfloriano@outlook.com"> 
				  		raquelfloriano@outlook.com
				  	</td>
				 	</tr>
				 	<tr draggable="true" ondragstart="start()" ondragover="dragover()">  
				  	<td>
				  		<input type="hidden" name="email3" value="marcofloriano@setor9.com.br"> 
				  		marcofloriano@setor9.com.br
				  	</td>
				 	</tr>
				</tbody>
			</table>
			<button class="button" type="submit" >Submit</button>
		</form>
	</body>
</html>