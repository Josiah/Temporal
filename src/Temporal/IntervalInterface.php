<?php

namespace Temporal;

/**
 * Interval
 *
 * @author Josiah <josiah@web-dev.com.au>
 */
interface IntervalInterface
{
    /**
     * Gets the years in this Interval
     * 
     * @return int
     */
    function getYears();
    
    /**
     * Gets the months in this Interval
     * 
     * @return int
     */
    function getMonths();
    
    /**
     * Gets the days in this Interval
     * 
     * @return int
     */
    function getDays();
    
    /**
     * Gets the hours in this Interval
     * 
     * @return int
     */
    function getHours();
    
    /**
     * Gets the minutes in this Interval
     * 
     * @return int
     */
    function getMinutes();
    
    /**
     * Gets the seconds in this Interval
     * 
     * @return int
     */
    function getSeconds();
}