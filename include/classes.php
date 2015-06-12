<?php

    /***
     * Vehicle class
     *
     */
    class Vehicle
    {
        // let's assume the a new vehicle (out of the dealership)
        // is charged but it's not moving :p
        private static $FuelLevel = 100;
        private static $is_moving = 0;

        function drive()
        {
            $this->is_moving = 1;
        }

        function stop()
        {
            $this->is_moving = 0;
        }
    }

    // let's use subclasses rather than objects
    // returns boolean: true for successful; false for error
    class ElectricVehicle extends Vehicle
    {
        // maximum amount of minutes
        const MAX = 60;

        /***
         * Updates FuelLevel based on the minutes charged
         * @param int $time in minutes
         * @return true if successful; false if error
         */
        function recharge($time) 
        {
            // validation
            if (!inRange($time, 0, self::MAX))
            {
                // variable not changed
                return false;
            }

            $this->FuelLevel = $time * (100 / self::MAX);           

            // all is well
            return true;
        }
    }

    
    // gasVehicle subclass
    // returns boolean: true for successful; false for error
    class GasVehicle extends Vehicle
    {
        // this is the maximum amount of gallons
        const MAX = 13;

        /***
         * Updates FuelLevel based on the gallons passed
         * @param int $gallons number of gallons of gasoline in vehicle
         * @return true if successful; false if error
         */
        function refuel($gallons) 
        {
            // validation
            if (!inRange($gallons, 0, self::MAX))
            {
                // variable not changed
                return false;
            }

            $this->FuelLevel = $gallons * (100 / self::MAX);           

            // all is well
            return true;
        }
    }
?>
