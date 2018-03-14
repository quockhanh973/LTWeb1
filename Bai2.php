<?php
    echo 'a. '.'<br>';
    echo 'Truoc khi doi:';
    $day = "14/03/2018";
    echo $day.'<br>';
    $arr = explode('/', $day);
    echo 'Sau khi doi:';
    echo implode('-', $arr).'<br>';
    
    $month = substr($day, 3, 2);
    switch($month)
    {
        case '01': $month = 'January';
             break;
        case '02': $month = 'February';
            break;
        case '03': $month = 'March';
            break;
        case '04': $month = 'April';
            break;
        case '05': $month = 'May';
            break;
        case '06': $month = 'June';
            break;
        case '07': $month = 'July';
            break;
        case '08': $month = 'August';
            break;
        case '09': $month = 'September';
            break;
        case '10': $month = 'October';
            break;
        case '11': $month = 'November';
            break;
        case '12': $month = 'December';
            break;
        default : echo 'Error';
            break;
    }
    $dd = substr($day, 0, 2);
    $year = substr($day, 6, 4);
    echo 'b. '.'<br>';
    echo $month.' '.$dd.','.$year;
