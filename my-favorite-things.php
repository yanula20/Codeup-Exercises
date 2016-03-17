<?php

$favoriteThings = ['bike', 'Jersey', 'watch', 'car', 'Doughnuts'];

?>


<!DOCTYPE html>
<html>
<head>
    <title>Codeup!</title>
</head>
<body>
    <h1>My Favorite Things</h1>
    <table style="width:100%">
    <?php foreach ($favoriteThings as $key => $value) { ?>
    	<tr>
        <td><?php echo $value; ?></td>
       	</tr>
    <?php } ?>
    </table>
</body>
</html>

