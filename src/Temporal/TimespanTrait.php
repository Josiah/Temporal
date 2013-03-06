<?php

namespace Temporal;

/**
 * Timespan
 *
 * Represents a specific period of time between two dates.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
trait TimespanTrait
{
    /**
     * Gets the start of the timespan
     * 
     * @return DateTime
     */
    public abstract function getFrom();

    /**
     * Gets the from date of the timespan
     * 
     * @return DateTime
     */
    public abstract function getTo();

    /**
     * Gets the DateInterval representing the duration of the timespan
     *
     * NOTE: The returned date interval should have the correct number of days
     * populated (i.e. should be generated as a diff between from and to).
     * 
     * @return DateInterval
     */
    public function getDateInterval()
    {
        return $this->getFrom()->diff($this->getTo());
    }

    /**
     * Gets the total days in this timespan
     * 
     * @return float
     */
    public function getTotalDays()
    {
        $interval = $this->getDateInterval();

        $days = $interval->days;
        $days += $interval->h / 24;
        $days += $interval->i / 1440;
        $days += $interval->s / 86400;

        return $days;
    }
}