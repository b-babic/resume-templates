<?php

use Carbon\Carbon;

return [
	/**
	 * Calculate human-readable work experience in years.
	 * Get total number of years / months between start and end of an job.
	 * @param datetime $start_date Start date of an job
	 * @param datetime $end_date Ebd date if an job
	 */
	'yearsOfExperience' => function ($page, $start_date, $end_date) {
        $job_start = Carbon::createFromTimestamp($start_date);
        $job_end = $end_date ? Carbon::createFromTimestamp($end_date) : Carbon::now();

        return $job_start->longAbsoluteDiffForHumans($job_end);
  },
];
