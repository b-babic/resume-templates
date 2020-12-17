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
    /**
     * Cut off long text paragraphs.
     * @param string $text Target text / paragraph to shorten
     * @param integer $max_length Maximum length of characters
     * @param string $cut_off What to add at the new paragraph end
     * @param boolean $keep_word Should last word be kept if characters are exceeded
     *
     */
    'getExcerpt' => function ($page, $text, $max_length = 135, $cut_off = '...', $keep_word = false) {
        if($page->excerpt) {
            return $page->excerpt;
        }

        if(strlen($text) <= $max_length) {
            return $text;
        }

        if(strlen($text) > $max_length) {
            if($keep_word) {
                $text = substr($text, 0, $max_length + 1);

                if($last_space = strrpos($text, ' ')) {
                    $text = substr($text, 0, $last_space);
                    $text = rtrim($text);
                    $text .=  $cut_off;
                }
            } else {
                $text = substr($text, 0, $max_length);
                $text = rtrim($text);
                $text .=  $cut_off;
            }
        }

        return $text;
    }
];
