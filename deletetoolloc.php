<link type="text/css" rel="stylesheet" href="css/main.css"/>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>


<?php

			$tool_id = $_POST['tool_id'];
			echo '<form action="deletetoollocex.php" method="post">';
			echo '<input name="id" type="hidden" value="'. $tool_id . '" />';
			echo 'Are you sure you want to delete all tools from their locations?';
			echo '<div class="modalbuttons">'.'<input  class="btn btn-default" name="yes" type="submit" value="Yes" />'."  ".'<input  class="btn btn-default" data-toggle="modal" id="nobtn" type="submit" name="no" data-dismiss="modal" value="No" />'.'</div>';
			echo '</form>';	
?>

			