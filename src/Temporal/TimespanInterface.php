<?php

namespace Temporal;

use DateTime;
use DateInterval;

/**
 * Timespan
 *
 * Represents a specific period of time between two dates.
 *
 * @author Josiah <josiah@jjs.id.au>
 */
interface TimespanInterface
{
    /**
     * Gets the start of the timespan
     * 
     * @return DateTime
     */
    function getFrom();

    /**
     * Gets the end of the timespan
     * 
     * @return DateTime
     */
    function getTo();

    /**
     * Gets the total days in this timespan
     * 
     * @return float
     */
    function getTotalDays();
}