<?php
    include 'classQuiz.php';

    $kevin = new people('Kevin', '2000','playing football');

    echo $kevin -> dob();

    echo $kevin -> get_name();
    echo $kevin -> get_dob();
    echo $kevin -> get_hobby();


?>