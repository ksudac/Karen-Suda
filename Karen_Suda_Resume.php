<?php
header('Content-disposition: attachment; filename=Karen_Suda_Resume.pdf');
header('Content-type: application/pdf');
readfile('Karen_Suda_Resume.pdf');
?>