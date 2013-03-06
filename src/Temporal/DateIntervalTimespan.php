<?php

namespace Temporal;

use DateInterval;
use DateTime;

/**
 * Interval Timespan
 *
 * Timespan instance constructed using an interval and a fixed point in time as
 * a reference.
 *
 * @author Josiah <josiah@web-dev.com.au>
 */
class DateIntervalTimespan implements TimespanInterface, IntervalInterface
{
    use DateIntervalWrapperTrait;
    use TimespanTrait;

    /**
     * Origin date
     * 
     * @var DateTime
     */
    protected $origin;

    /**
     * Interval
     * 
     * @var DateInterval
     */
    protected $interval;

    /**
     * @param DateInterval $interval Time interval
     * @param DateTime     $origin   Origin date (defaults to now)
     */
    public function __construct(DateInterval $interval, DateTime $origin = null)
    {
        $this->interval = $interval;
        $this->origin   = $origin ?: new DateTime();
    }

    /**
     * Gets the start of the timespan
     * 
     * @return DateTime
     */
    public function getFrom()
    {
        return $this->origin;
    }

    /**
     * Gets the end of the timespan
     * 
     * @return DateTime
     */
    public function getTo()
    {
        $to = clone $from;
        $to->add($interval);

        return $to;
    }

    /**
     * Gets the inner date interval wrapped by this class
     * 
     * @return DateInterval
     */
    protected function getWrappedDateInterval()
    {
        return $this->interval;
    }
}