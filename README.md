# PHP function check capacity
This repository contains a custom **PHP function** for compare two values and check if the number of attendees for an event is below capacity for a particular venue. So, is given a list of places, capacity and registered participants, and using the PHP function **check_capacity()** the capacity for participant registration is compared and returned one of the two messages. 

If the number of attendees is bellow the venues capacity return _"There are still tickets available!"_ If the number of attendees is equal to or above the venues capacity return _"This event is sold out!"_.  Function **check_capacity()** accepts two arguments, the capacity and the number of attendees. 

The input will be a two dimensional array where the key is a venue name and the value is a two element array of capacity and attendees. The default value for attendees in the check capacity function is zero. So, the function **check_capacity()** will print the name of the venue, then the message returned by the **check_capacity()** function.

---

To check how it looks, click on the preview and then on the green run button.
##
[PREVIEW](https://replit.com/@MirnesGlamocic/PHP-function-event-capacity?v=1#index.php)
