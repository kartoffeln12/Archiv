<?php

require '../bootstrap.php';

$event_id = $Events->createEvent($_POST);

header('Location: ../index.php?page=index_event&id=' . $event_id);

?>
