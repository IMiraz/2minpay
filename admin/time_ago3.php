<?php 
$posted_at = "2016-1-31 20:17:16"; //now()
 
/**
 * @param $value
 * @return int
 * use PHP list to create required variables
 * use the explode function to convert the given data into an array and extract desired values into the
 * variables created with the list
 */
 
function convertToUnixTimestamp($value) {
    date_default_timezone_set('Asia/Kuala_Lumpur');
    list($date, $time) = explode(' ', $value);
    list($year, $month, $day) = explode('-', $date);
    list($hour, $minutes, $seconds) = explode(':', $time);
 
    /**
     * use the make time function to get the Unix timestamp for the given date
     */
 
    $unit_timestamp = mktime($hour, $minutes, $seconds, $month, $day, $year);
 
    return $unit_timestamp;
}
 
//convert timestamp to ago format
function convertToAgoFormat($timestamp){
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $diffBtwCurrentTimeAndTimestamp = time() - $timestamp;
    $periodsString = ["sec", "min", "hr", "day", "week", "month", "year", "decade"];
    $periodsNumber = ["60", "60", "24", "7", "4.35", "12", "10"];
 
    for($iterator = 0; $diffBtwCurrentTimeAndTimestamp >= $periodsNumber[$iterator]; $iterator++)
        $diffBtwCurrentTimeAndTimestamp /= $periodsNumber[$iterator];
    $diffBtwCurrentTimeAndTimestamp = round($diffBtwCurrentTimeAndTimestamp);
 
    if($diffBtwCurrentTimeAndTimestamp != 1) $periodsString[$iterator].="s";
    $output = "$diffBtwCurrentTimeAndTimestamp $periodsString[$iterator]"; //2 days
 
    return "Posted ".$output." ago";
}
 
<strong>//Call the function</strong>
 
$unixTimestamp = convertToUnixTimestamp($posted_at);
 
<div style="width: 350px;">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>;
    <span style="float: right; font-size: 10px; color: gray;">;
        <?php echo convertToAgoFormat($unixTimestamp); ?>
    </span>;
</div>;
?>