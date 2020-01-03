<?php
use \App\Http\Controllers\HomeController;


function humanTiming ($date)
{

    $time = strtotime($date);

    $time = time() - $time; // to get the time since that moment
    $time = ($time<1)? 1 : $time;
    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'').' ago';
    }

}

function formatDate($date, $timeAslo=null)
{
    if ($timeAslo == 'timeAslo') $date = date('d-M-Y h:i A', strtotime($date));
    else $date =  date('d-M-Y', strtotime($date));

    return $date;
}


function modules_dom() 
{
    return $modules_dom = [
        'blog_create_edit' => ['create', 'edit', 'store', 'update'],
        'blog_list' => ['index']
    ];
}
