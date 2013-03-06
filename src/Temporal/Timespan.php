<?php

namespace Temporal;

use DateTime;

/**
 * Interval Timespan
 *
 * Timespan instance constructed using an interval and a fixed point in time as
 * a reference.
 *
 * @author Josiah <josiah@web-dev.com.au>
 */
class Timespan implements TimespanInterface
{
    use TimespanTrait;

    /**
     * Start date of the timespan
     * 
     * @var DateTime
     */
    protected $from;

    /**
     * End date and time of the timespan
     * 
     * @var DateTime
     */
    protected $to;

    /**
     * @param DateTime $from Start date
     * @param DateTime $to   End date
     */
    public function __construct(DateTime $from, DateTime $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * Gets the start of the timespan
     * 
     * @return DateTime
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Gets the end of the timespan
     * 
     * @return DateTime
     */
    public function getTo()
    {
        return $this->to;
    }
}