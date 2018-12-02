<?php
// get next data for one loop and check difference on date_time 
$st = 0;
		foreach ($records as $trackuser) {

			$address  = $trackuser->address;

			if(isset($records[$st+1])) {
				$date_1 = strtotime($records[$st]->date_time);
				$date_2 = strtotime($records[$st+1]->date_time);
				$interval  = abs($date_1 - $date_2);
				$stop_time   = round($interval / 60);
			} else {
				$date_1 = strtotime($records[$st]->date_time);
				$date_2 = strtotime($records[$st]->date_time);
				$interval  = abs($date_1 - $date_2);
				$stop_time   = round($interval / 60);
			}

			$st++;
}