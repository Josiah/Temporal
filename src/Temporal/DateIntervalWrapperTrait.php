<?php

namespace Temporal;

use DateInterval;

/**
 * DateInterval wrapper trait
 *
 * Provides the functionality of an IntervalInterface instance using an inner
 * DateInterval.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
trait DateIntervalWrapperTrait
{
    /**
     * Gets the inner date interval wrapped by this class
     * 
     * @return DateInterval
     */
    protected abstract function getWrappedDateInterval();

    /**
     * Gets the years in this Interval
     * 
     * @return int
     */
    public function getYears()
    {
        $interval = $this->getWrappedDateInterval();
        $invert = $interval->invert ? -1 : 1;

        return $interval->y * $invert;
    }
    
    /**
     * Gets the months in this Interval
     * 
     * @return int
     */
    public function getMonths()
    {
        $interval = $this->getWrappedDateInterval();
        $invert = $interval->invert ? -1 : 1;

        return $interval->m * $invert;
    }
    
    /**
     * Gets the days in this Interval
     * 
     * @return int
     */
    public function getDays()
    {
        $interval = $this->getWrappedDateInterval();
        $invert = $interval->invert ? -1 : 1;

        return $interval->d * $invert;
    }
    
    /**
     * Gets the hours in this Interval
     * 
     * @return int
     */
    public function getHours()
    {
        $interval = $this->getWrappedDateInterval();
        $invert = $interval->invert ? -1 : 1;

        return $interval->h * $invert;
    }
    
    /**
     * Gets the minutes in this Interval
     * 
     * @return int
     */
    public function getMinutes()
    {
        $interval = $this->getWrappedDateInterval();
        $invert = $interval->invert ? -1 : 1;

        return $interval->i * $invert;
    }
    
    /**
     * Gets the seconds in this Interval
     * 
     * @return int
     */
    public function getSeconds()
    {
        $interval = $this->getWrappedDateInterval();
        $invert = $interval->invert ? -1 : 1;

        return $interval->s * $invert;
    }
}