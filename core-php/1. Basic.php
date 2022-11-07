<?php

/**
 * 1. PHP tags
 * 2. Escaping from HTML
 * 3. Instruction separation
 * 4. Comments
 * 5. outputing data 
 */

/**
 * 
 * 1. Basics
 * 2. Predefined Variables
 * 3. Variable scope
 * 4. Variable variables 
 * 5. Variables From External Sources
 */

//  $a = 10;

$firstName121212 = "dasfdasfd"; // valid

// $1212121fasdfasf


/**
 * 
 * Predefined Variables
 * 
 * Superglobals — Built-in variables that are always available in all scopes
 * $GLOBALS — References all variables available in global scope
 * $_SERVER — Server and execution environment information
 * $_GET — HTTP GET variables
 * $_POST — HTTP POST variables
 * $_FILES — HTTP File Upload variables
 * $_REQUEST — HTTP Request variables
 * $_SESSION — Session variables
 * $_ENV — Environment variables
 * $_COOKIE — HTTP Cookies
 * $php_errormsg — The previous error message
 * $http_response_header — HTTP response headers
 * $argc — The number of arguments passed to script
 * $argv — Array of arguments passed to script
 */

// variables of variables

// $name = "Deepak";

// $$name = "singh";

// echo $name;

/**
 * 
 * 1. Syntax
 * 2. Predefined constants
 * 3. Magic constants
 */

// define("FULL_NAME", "Deepak asdfadsf");

echo __FILE__;

/**
 * 
 * Predefined constants
 * 
 * PHP_VERSION (string)
 * PHP_MAJOR_VERSION (int)
 * PHP_MINOR_VERSION (int)
 * PHP_RELEASE_VERSION (int)
 * PHP_VERSION_ID (int)
 * PHP_EXTRA_VERSION (string)
 * PHP_ZTS (int)
 * PHP_DEBUG (int)
 * PHP_MAXPATHLEN (int)
 * PHP_OS (string)
 * PHP_OS_FAMILY (string)
 * PHP_SAPI (string)
 * PHP_EOL (string)
 * PHP_INT_MAX (int)
 * PHP_INT_MIN (int)
 * PHP_INT_SIZE (int)
 * PHP_FLOAT_DIG (int)
 * PHP_FLOAT_EPSILON (float)
 * PHP_FLOAT_MIN (float)
 * PHP_FLOAT_MAX (float)
 * DEFAULT_INCLUDE_PATH (string)
 * PEAR_INSTALL_DIR (string)
 * PEAR_EXTENSION_DIR (string)
 * PHP_EXTENSION_DIR (string)
 * PHP_PREFIX (string)
 * PHP_BINDIR (string)
 * PHP_BINARY (string)
 * PHP_MANDIR (string)
 * PHP_LIBDIR (string)
 * PHP_DATADIR (string)
 * PHP_SYSCONFDIR (string)
 * PHP_LOCALSTATEDIR (string)
 * PHP_CONFIG_FILE_PATH (string)
 * PHP_CONFIG_FILE_SCAN_DIR (string)
 * PHP_SHLIB_SUFFIX (string)
 * PHP_FD_SETSIZE (string)
 * E_ERROR (int)
 * E_WARNING (int)
 * E_PARSE (int)
 * E_NOTICE (int)
 * E_CORE_ERROR (int)
 * E_CORE_WARNING (int)
 * E_COMPILE_ERROR (int)
 * E_COMPILE_WARNING (int)
 * E_USER_ERROR (int)
 * E_USER_WARNING (int)
 * E_USER_NOTICE (int)
 * E_RECOVERABLE_ERROR (int)
 * E_DEPRECATED (int)
 * E_USER_DEPRECATED (int)
 * E_ALL (int)
 * E_STRICT (int)
 * true (bool)
 * false (bool)
 * null (null)
 * PHP_WINDOWS_EVENT_CTRL_C (int)
 * PHP_WINDOWS_EVENT_CTRL_BREAK (int)
 *  
 */

/**
 * Magic constants
 * 
 * __LINE__	        The current line number of the file 
 * __FILE__	        The full path and filename of the file with symlinks resolved. 
 *                  If used inside an include, the name of the included file is returned.
 * __DIR__	        The directory of the file. If used inside an include, the directory of the included file is returned. 
 *                  This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root 
 *                  directory.
 * __FUNCTION__	    The function name, or {closure} for anonymous functions.
 * __CLASS__	    The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar). 
 *                  When used in a trait method, __CLASS__ is the name of the class the trait is used in.
 * __TRAIT__	    The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar).
 * __METHOD__	    The class method name.
 * __NAMESPACE__	The name of the current namespace.
 * ClassName::class	The fully qualified class name.
 */
