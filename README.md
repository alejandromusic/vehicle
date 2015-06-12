The answer follows attempts to adhere to the MVC Model.

Include contains classes.php and functionsVehicle.php 

classes.php is where classes and subclasses are defined. 
It is on its own file so that the Controller can decide
not to include it in those those pages that don't need it

functions.php is to store functions that are used globally
by all (or most) files

Public only includes vehicles.php

It instantiate the vehicle objects. Here is where some action 
is performed with them, in interaction with the front end.

Templates is empty as this project does not include views