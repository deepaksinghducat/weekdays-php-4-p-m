<?php

/**
 * 
 * 1. if
 * 2. else
 * 3. elseif
 * 4. alternative syntax fot control structure
 * 5. while
 * 6. do-while
 * 7. for
 * 8. foreach
 * 9. break
 * 10. continue
 * 11. switch
 * 12. match
 * 14. return
 * 15. require
 * 16. include
 * 17. require_once
 * 18. include_once
 */

//  if

// else

// elseif

// alternative syntax for control structure
// if ($a == 5):  'A is equal to 5' endif; 

// switch


// while 

// do-while 

// for 

// foreach

// break

// continue

// match

/**
 * return
 * 
 * return returns program control to the calling module. Execution resumes at the expression 
 * following the called module's invocation.
 * 
 * If called from within a function, the return statement immediately ends execution of the current 
 * function, and returns its argument as the value of the function call. 
 * return also ends the execution of an eval() statement or script file.
 * 
 */

/**
 *  require
 *  
 * require is identical to include except upon failure it will also produce a fatal E_COMPILE_ERROR level error. 
 * In other words, it will halt the script whereas include only emits a warning (E_WARNING) which allows the script to continue.
 * 
 */


/**
 * include
 * 
 * Files are included based on the file path given or, if none is given, the include_path specified. 
 * If the file isn't found in the include_path, include will finally check in the calling script's own directory 
 * and the current working directory before failing. The include construct will emit an E_WARNING if it cannot find a file; 
 * this is different behavior from require, which will emit an E_ERROR.
 * 
 */

/**
 * require_once 
 * 
 * The require_once expression is identical to require except PHP will check if the file has already been included, 
 * and if so, not include (require) it again.
 */


/**
 * include_once 
 * 
 * The include_once statement includes and evaluates the specified file during the execution of the script. 
 * This is a behavior similar to the include statement, with the only difference being that if the code from a 
 * file has already been included, it will not be included again, and include_once returns true. 
 * As the name suggests, the file will be included just once.
 * 
 */