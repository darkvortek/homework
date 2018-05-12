<?php
move_uploaded_file($_FILES['image']['tmp_name'][0],'/var/www/html/'.$_FILES['image']['name'][0]);
move_uploaded_file($_FILES['image']['tmp_name'][1],'/var/www/html/'.$_FILES['image']['name'][1]);
    
?>
