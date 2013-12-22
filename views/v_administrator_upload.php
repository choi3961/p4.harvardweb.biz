<!--
	This is for the administrator to update the database. 
	Never touch without authorization.
-->
<div class = 'container'>
	<div class = 'header'>
		<div class = 'header03'>File upload</div>
	</div>
	<div class = 'container02'>
		<div>
			<form  enctype = "multipart/form-data" method = 'post' action = 'p_upload'>
				<input type = 'file' name = 'userfile' ><br>
				<input type = 'submit'>
			</form>
			<hr>
			<form action = 'p_upload' method = 'post'>
				<input type = 'text' name = 'uri'><br>
				<input type = 'submit'>
			</form>
		</div>
		<span> This is not for the users. This is for the administrator. 
			Please don't upload any file.
		</span>
	</div>

</div>