<?php

/** 
* unset can be slow on large arrays
* instead, you can splice it from the 0-index. 
* however, this doesn't delete the array completely - it only empties it. 
* if you wish, you can unset it after splicing with better perfomance than unsetting the whole array
*
* I noticed unset being slow on php7.2 under fpm&nginx on wsl-ubuntu, so this might not be the case for you
* in that case - great for you!
**/

array_splice($array, 0);
