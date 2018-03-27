<?php

require '../bootstrap.php';

$event_id = $Events->createEvent($_POST);

header('Location: ../page_event/index_event.php?id=' . $event_id);

?>
