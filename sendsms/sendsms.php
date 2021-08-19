<?php
print("send SMS Starting    ");

$result = @mail( 'bitpatelsudani008@gmail.com', '', 'This was sent with PHP.' );

print("send SMS Ended.");

?>