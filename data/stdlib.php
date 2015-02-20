<?php

/**
 * Cache a new variable in the data store.
 */
function apc_add()
{
}

/**
 * Get a binary dump of the given files and user variables.
 */
function apc_bin_dump()
{
}

/**
 * Output a binary dump of cached files and user variables to a file.
 */
function apc_bin_dumpfile()
{
}

/**
 * Load a binary dump into the APC file/user cache.
 */
function apc_bin_load()
{
}

/**
 * Load a binary dump from a file into the APC file/user cache.
 */
function apc_bin_loadfile()
{
}

/**
 * Retrieves cached information from APC's data store.
 */
function apc_cache_info()
{
}

/**
 * Updates an old value with a new value.
 */
function apc_cas()
{
}

/**
 * Clears the APC cache.
 */
function apc_clear_cache()
{
}

/**
 * Stores a file in the bytecode cache, bypassing all filters..
 */
function apc_compile_file()
{
}

/**
 * Decrease a stored number.
 */
function apc_dec()
{
}

/**
 * Defines a set of constants for retrieval and mass-definition.
 */
function apc_define_constants()
{
}

/**
 * Deletes files from the opcode cache.
 */
function apc_delete_file()
{
}

/**
 * Removes a stored variable from the cache.
 */
function apc_delete()
{
}

/**
 * Checks if APC key exists.
 */
function apc_exists()
{
}

/**
 * Fetch a stored variable from the cache.
 */
function apc_fetch()
{
}

/**
 * Increase a stored number.
 */
function apc_inc()
{
}

/**
 * Loads a set of constants from the cache.
 */
function apc_load_constants()
{
}

/**
 * Retrieves APC's Shared Memory Allocation information.
 */
function apc_sma_info()
{
}

/**
 * Cache a variable in the data store.
 */
function apc_store()
{
}

/**
 * Stops the interpreter and waits on a CR from the socket.
 */
function apd_breakpoint()
{
}

/**
 * Returns the current call stack as an array.
 */
function apd_callstack()
{
}

/**
 * Throw a warning and a callstack.
 */
function apd_clunk()
{
}

/**
 * Restarts the interpreter.
 */
function apd_continue()
{
}

/**
 * Throw an error, a callstack and then exit.
 */
function apd_croak()
{
}

/**
 * Outputs the current function table.
 */
function apd_dump_function_table()
{
}

/**
 * Return all persistent resources as an array.
 */
function apd_dump_persistent_resources()
{
}

/**
 * Return all current regular resources as an array.
 */
function apd_dump_regular_resources()
{
}

/**
 * Echo to the debugging socket.
 */
function apd_echo()
{
}

/**
 * Get an array of the current variables names in the local scope.
 */
function apd_get_active_symbols()
{
}

/**
 * Starts the session debugging.
 */
function apd_set_pprof_trace()
{
}

/**
 * Starts the remote session debugging.
 */
function apd_set_session_trace_socket()
{
}

/**
 * Starts the session debugging.
 */
function apd_set_session_trace()
{
}

/**
 * Changes or sets the current debugging level.
 */
function apd_set_session()
{
}

/**
 * Overrides built-in functions.
 */
function override_function()
{
}

/**
 * Renames orig_name to new_name in the global function table.
 */
function rename_function()
{
}

/**
 * Reads and creates classes from a bcompiler exe file.
 */
function bcompiler_load_exe()
{
}

/**
 * Reads and creates classes from a bz compressed file.
 */
function bcompiler_load()
{
}

/**
 * Reads the bytecodes of a class and calls back to a user function.
 */
function bcompiler_parse_class()
{
}

/**
 * Reads and creates classes from a filehandle.
 */
function bcompiler_read()
{
}

/**
 * Writes a defined class as bytecodes.
 */
function bcompiler_write_class()
{
}

/**
 * Writes a defined constant as bytecodes.
 */
function bcompiler_write_constant()
{
}

/**
 * Writes the start pos, and sig to the end of a exe type file.
 */
function bcompiler_write_exe_footer()
{
}

/**
 * Writes a php source file as bytecodes.
 */
function bcompiler_write_file()
{
}

/**
 * Writes the single character \x00 to indicate End of compiled data.
 */
function bcompiler_write_footer()
{
}

/**
 * Writes a defined function as bytecodes.
 */
function bcompiler_write_function()
{
}

/**
 * Writes all functions defined in a file as bytecodes.
 */
function bcompiler_write_functions_from_file()
{
}

/**
 * Writes the bcompiler header.
 */
function bcompiler_write_header()
{
}

/**
 * Writes an included file as bytecodes.
 */
function bcompiler_write_included_filename()
{
}

/**
 * Encrypt a PHP script with BLENC..
 */
function blenc_encrypt()
{
}

/**
 * Generates a backtrace.
 */
function debug_backtrace()
{
}

/**
 * Prints a backtrace.
 */
function debug_print_backtrace()
{
}

/**
 * Get the last occurred error.
 */
function error_get_last()
{
}

/**
 * Send an error message to the defined error handling routines.
 */
function error_log()
{
}

/**
 * Sets which PHP errors are reported.
 */
function error_reporting()
{
}

/**
 * Restores the previous error handler function.
 */
function restore_error_handler()
{
}

/**
 * Restores the previously defined exception handler function.
 */
function restore_exception_handler()
{
}

/**
 * Sets a user-defined error handler function.
 */
function set_error_handler()
{
}

/**
 * Sets a user-defined exception handler function.
 */
function set_exception_handler()
{
}

/**
 * Generates a user-level error/warning/notice message.
 */
function trigger_error()
{
}

/**
 * Alias of trigger_error.
 */
function user_error()
{
}

/**
 * Get the inclued data.
 */
function inclued_get_data()
{
}

/**
 * Compiles and caches a PHP script without executing it.
 */
function opcache_compile_file()
{
}

/**
 * Get configuration information about the cache.
 */
function opcache_get_configuration()
{
}

/**
 * Get status information about the cache.
 */
function opcache_get_status()
{
}

/**
 * Invalidates a cached script.
 */
function opcache_invalidate()
{
}

/**
 * Tells whether a script is cached in OPCache.
 */
function opcache_is_script_cached()
{
}

/**
 * Resets the contents of the opcode cache.
 */
function opcache_reset()
{
}

/**
 * Flush system output buffer.
 */
function flush()
{
}

/**
 * Clean (erase) the output buffer.
 */
function ob_clean()
{
}

/**
 * Clean (erase) the output buffer and turn off output buffering.
 */
function ob_end_clean()
{
}

/**
 * Flush (send) the output buffer and turn off output buffering.
 */
function ob_end_flush()
{
}

/**
 * Flush (send) the output buffer.
 */
function ob_flush()
{
}

/**
 * Get current buffer contents and delete current output buffer.
 */
function ob_get_clean()
{
}

/**
 * Return the contents of the output buffer.
 */
function ob_get_contents()
{
}

/**
 * Flush the output buffer, return it as a string and turn off output buffering.
 */
function ob_get_flush()
{
}

/**
 * Return the length of the output buffer.
 */
function ob_get_length()
{
}

/**
 * Return the nesting level of the output buffering mechanism.
 */
function ob_get_level()
{
}

/**
 * Get status of output buffers.
 */
function ob_get_status()
{
}

/**
 * ob_start callback function to gzip output buffer.
 */
function ob_gzhandler()
{
}

/**
 * Turn implicit flush on/off.
 */
function ob_implicit_flush()
{
}

/**
 * List all output handlers in use.
 */
function ob_list_handlers()
{
}

/**
 * Turn on output buffering.
 */
function ob_start()
{
}

/**
 * Add URL rewriter values.
 */
function output_add_rewrite_var()
{
}

/**
 * Reset URL rewriter values.
 */
function output_reset_rewrite_vars()
{
}

/**
 * Set/get the various assert flags.
 */
function assert_options()
{
}

/**
 * Checks if assertion is FALSE.
 */
function assert()
{
}

/**
 * Returns the current process title.
 */
function cli_get_process_title()
{
}

/**
 * Sets the process title.
 */
function cli_set_process_title()
{
}

/**
 * Loads a PHP extension at runtime.
 */
function dl()
{
}

/**
 * Find out whether an extension is loaded.
 */
function extension_loaded()
{
}

/**
 * Forces collection of any existing garbage cycles.
 */
function gc_collect_cycles()
{
}

/**
 * Deactivates the circular reference collector.
 */
function gc_disable()
{
}

/**
 * Activates the circular reference collector.
 */
function gc_enable()
{
}

/**
 * Returns status of the circular reference collector.
 */
function gc_enabled()
{
}

/**
 * Gets the value of a PHP configuration option.
 */
function get_cfg_var()
{
}

/**
 * Gets the name of the owner of the current PHP script.
 */
function get_current_user()
{
}

/**
 * Returns an associative array with the names of all the constants and their values.
 */
function get_defined_constants()
{
}

/**
 * Returns an array with the names of the functions of a module.
 */
function get_extension_funcs()
{
}

/**
 * Gets the current include_path configuration option.
 */
function get_include_path()
{
}

/**
 * Returns an array with the names of included or required files.
 */
function get_included_files()
{
}

/**
 * Returns an array with the names of all modules compiled and loaded.
 */
function get_loaded_extensions()
{
}

/**
 * Gets the current configuration setting of magic_quotes_gpc.
 */
function get_magic_quotes_gpc()
{
}

/**
 * Gets the current active configuration setting of magic_quotes_runtime.
 */
function get_magic_quotes_runtime()
{
}

/**
 * Alias of get_included_files.
 */
function get_required_files()
{
}

/**
 * Gets the value of an environment variable.
 */
function getenv()
{
}

/**
 * Gets time of last page modification.
 */
function getlastmod()
{
}

/**
 * Get PHP script owner's GID.
 */
function getmygid()
{
}

/**
 * Gets the inode of the current script.
 */
function getmyinode()
{
}

/**
 * Gets PHP's process ID.
 */
function getmypid()
{
}

/**
 * Gets PHP script owner's UID.
 */
function getmyuid()
{
}

/**
 * Gets options from the command line argument list.
 */
function getopt()
{
}

/**
 * Gets the current resource usages.
 */
function getrusage()
{
}

/**
 * Alias of ini_set.
 */
function ini_alter()
{
}

/**
 * Gets all configuration options.
 */
function ini_get_all()
{
}

/**
 * Gets the value of a configuration option.
 */
function ini_get()
{
}

/**
 * Restores the value of a configuration option.
 */
function ini_restore()
{
}

/**
 * Sets the value of a configuration option.
 */
function ini_set()
{
}

/**
 * Alias of set_magic_quotes_runtime.
 */
function magic_quotes_runtime()
{
}

/**
 * Dummy for main.
 */
function main()
{
}

/**
 * Returns the peak of memory allocated by PHP.
 */
function memory_get_peak_usage()
{
}

/**
 * Returns the amount of memory allocated to PHP.
 */
function memory_get_usage()
{
}

/**
 * Retrieve a path to the loaded php.ini file.
 */
function php_ini_loaded_file()
{
}

/**
 * Return a list of .ini files parsed from the additional ini dir.
 */
function php_ini_scanned_files()
{
}

/**
 * Gets the logo guid.
 */
function php_logo_guid()
{
}

/**
 * Returns the type of interface between web server and PHP.
 */
function php_sapi_name()
{
}

/**
 * Returns information about the operating system PHP is running on.
 */
function php_uname()
{
}

/**
 * Prints out the credits for PHP.
 */
function phpcredits()
{
}

/**
 * Outputs information about PHP's configuration.
 */
function phpinfo()
{
}

/**
 * Gets the current PHP version.
 */
function phpversion()
{
}

/**
 * Sets the value of an environment variable.
 */
function putenv()
{
}

/**
 * Restores the value of the include_path configuration option.
 */
function restore_include_path()
{
}

/**
 * Sets the include_path configuration option.
 */
function set_include_path()
{
}

/**
 * Sets the current active configuration setting of magic_quotes_runtime.
 */
function set_magic_quotes_runtime()
{
}

/**
 * Limits the maximum execution time.
 */
function set_time_limit()
{
}

/**
 * Returns directory path used for temporary files.
 */
function sys_get_temp_dir()
{
}

/**
 * Compares two "PHP-standardized" version number strings.
 */
function version_compare()
{
}

/**
 * Gets the Zend guid.
 */
function zend_logo_guid()
{
}

/**
 * Returns a unique identifier for the current thread.
 */
function zend_thread_id()
{
}

/**
 * Gets the version of the current Zend engine.
 */
function zend_version()
{
}

/**
 * Runkit Sandbox Class -- PHP Virtual Machine.
 */
function Runkit_Sandbox()
{
}

/**
 * Runkit Anti-Sandbox Class.
 */
function Runkit_Sandbox_Parent()
{
}

/**
 * Convert a base class to an inherited class, add ancestral methods when appropriate.
 */
function runkit_class_adopt()
{
}

/**
 * Convert an inherited class to a base class, removes any method whose scope is ancestral.
 */
function runkit_class_emancipate()
{
}

/**
 * Similar to define(), but allows defining in class definitions as well.
 */
function runkit_constant_add()
{
}

/**
 * Redefine an already defined constant.
 */
function runkit_constant_redefine()
{
}

/**
 * Remove/Delete an already defined constant.
 */
function runkit_constant_remove()
{
}

/**
 * Add a new function, similar to create_function.
 */
function runkit_function_add()
{
}

/**
 * Copy a function to a new function name.
 */
function runkit_function_copy()
{
}

/**
 * Replace a function definition with a new implementation.
 */
function runkit_function_redefine()
{
}

/**
 * Remove a function definition.
 */
function runkit_function_remove()
{
}

/**
 * Change a function's name.
 */
function runkit_function_rename()
{
}

/**
 * Process a PHP file importing function and class definitions, overwriting where appropriate.
 */
function runkit_import()
{
}

/**
 * Check the PHP syntax of the specified file.
 */
function runkit_lint_file()
{
}

/**
 * Check the PHP syntax of the specified php code.
 */
function runkit_lint()
{
}

/**
 * Dynamically adds a new method to a given class.
 */
function runkit_method_add()
{
}

/**
 * Copies a method from class to another.
 */
function runkit_method_copy()
{
}

/**
 * Dynamically changes the code of the given method.
 */
function runkit_method_redefine()
{
}

/**
 * Dynamically removes the given method.
 */
function runkit_method_remove()
{
}

/**
 * Dynamically changes the name of the given method.
 */
function runkit_method_rename()
{
}

/**
 * Determines if the current functions return value will be used.
 */
function runkit_return_value_used()
{
}

/**
 * Specify a function to capture and/or process output from a runkit sandbox.
 */
function runkit_sandbox_output_handler()
{
}

/**
 * Return numerically indexed array of registered superglobals.
 */
function runkit_superglobals()
{
}

/**
 * Backup a function.
 */
function uopz_backup()
{
}

/**
 * Compose a class.
 */
function uopz_compose()
{
}

/**
 * Copy a function.
 */
function uopz_copy()
{
}

/**
 * Delete a function.
 */
function uopz_delete()
{
}

/**
 * Extend a class at runtime.
 */
function uopz_extend()
{
}

/**
 * Get or set flags on function or class.
 */
function uopz_flags()
{
}

/**
 * Creates a function at runtime.
 */
function uopz_function()
{
}

/**
 * Implements an interface at runtime.
 */
function uopz_implement()
{
}

/**
 * Overload a VM opcode.
 */
function uopz_overload()
{
}

/**
 * Redefine a constant.
 */
function uopz_redefine()
{
}

/**
 * Rename a function at runtime.
 */
function uopz_rename()
{
}

/**
 * Restore a previously backed up function.
 */
function uopz_restore()
{
}

/**
 * Undefine a constant.
 */
function uopz_undefine()
{
}

/**
 * Retrieves information about files cached in the file cache.
 */
function wincache_fcache_fileinfo()
{
}

/**
 * Retrieves information about file cache memory usage.
 */
function wincache_fcache_meminfo()
{
}

/**
 * Acquires an exclusive lock on a given key.
 */
function wincache_lock()
{
}

/**
 * Retrieves information about files cached in the opcode cache.
 */
function wincache_ocache_fileinfo()
{
}

/**
 * Retrieves information about opcode cache memory usage.
 */
function wincache_ocache_meminfo()
{
}

/**
 * Refreshes the cache entries for the cached files.
 */
function wincache_refresh_if_changed()
{
}

/**
 * Retrieves information about resolve file path cache.
 */
function wincache_rplist_fileinfo()
{
}

/**
 * Retrieves information about memory usage by the resolve file path cache.
 */
function wincache_rplist_meminfo()
{
}

/**
 * Retrieves information about files cached in the session cache.
 */
function wincache_scache_info()
{
}

/**
 * Retrieves information about session cache memory usage.
 */
function wincache_scache_meminfo()
{
}

/**
 * Adds a variable in user cache only if variable does not already exist in the cache.
 */
function wincache_ucache_add()
{
}

/**
 * Compares the variable with old value and assigns new value to it.
 */
function wincache_ucache_cas()
{
}

/**
 * Deletes entire content of the user cache.
 */
function wincache_ucache_clear()
{
}

/**
 * Decrements the value associated with the key.
 */
function wincache_ucache_dec()
{
}

/**
 * Deletes variables from the user cache.
 */
function wincache_ucache_delete()
{
}

/**
 * Checks if a variable exists in the user cache.
 */
function wincache_ucache_exists()
{
}

/**
 * Gets a variable stored in the user cache.
 */
function wincache_ucache_get()
{
}

/**
 * Increments the value associated with the key.
 */
function wincache_ucache_inc()
{
}

/**
 * Retrieves information about data stored in the user cache.
 */
function wincache_ucache_info()
{
}

/**
 * Retrieves information about user cache memory usage.
 */
function wincache_ucache_meminfo()
{
}

/**
 * Adds a variable in user cache and overwrites a variable if it already exists in the cache.
 */
function wincache_ucache_set()
{
}

/**
 * Releases an exclusive lock on a given key.
 */
function wincache_unlock()
{
}

/**
 * Stops xhprof profiler.
 */
function xhprof_disable()
{
}

/**
 * Start xhprof profiler.
 */
function xhprof_enable()
{
}

/**
 * Stops xhprof sample profiler.
 */
function xhprof_sample_disable()
{
}

/**
 * Start XHProf profiling in sampling mode.
 */
function xhprof_sample_enable()
{
}

/**
 * Get the long name of an ID3v2 frame.
 */
function id3_get_frame_long_name()
{
}

/**
 * Get the short name of an ID3v2 frame.
 */
function id3_get_frame_short_name()
{
}

/**
 * Get the id for a genre.
 */
function id3_get_genre_id()
{
}

/**
 * Get all possible genre values.
 */
function id3_get_genre_list()
{
}

/**
 * Get the name for a genre id.
 */
function id3_get_genre_name()
{
}

/**
 * Get all information stored in an ID3 tag.
 */
function id3_get_tag()
{
}

/**
 * Get version of an ID3 tag.
 */
function id3_get_version()
{
}

/**
 * Remove an existing ID3 tag.
 */
function id3_remove_tag()
{
}

/**
 * Update information stored in an ID3 tag.
 */
function id3_set_tag()
{
}

/**
 * Generate OpenAL buffer.
 */
function openal_buffer_create()
{
}

/**
 * Load a buffer with data.
 */
function openal_buffer_data()
{
}

/**
 * Destroys an OpenAL buffer.
 */
function openal_buffer_destroy()
{
}

/**
 * Retrieve an OpenAL buffer property.
 */
function openal_buffer_get()
{
}

/**
 * Load a .wav file into a buffer.
 */
function openal_buffer_loadwav()
{
}

/**
 * Create an audio processing context.
 */
function openal_context_create()
{
}

/**
 * Make the specified context current.
 */
function openal_context_current()
{
}

/**
 * Destroys a context.
 */
function openal_context_destroy()
{
}

/**
 * Process the specified context.
 */
function openal_context_process()
{
}

/**
 * Suspend the specified context.
 */
function openal_context_suspend()
{
}

/**
 * Close an OpenAL device.
 */
function openal_device_close()
{
}

/**
 * Initialize the OpenAL audio layer.
 */
function openal_device_open()
{
}

/**
 * Retrieve a listener property.
 */
function openal_listener_get()
{
}

/**
 * Set a listener property.
 */
function openal_listener_set()
{
}

/**
 * Generate a source resource.
 */
function openal_source_create()
{
}

/**
 * Destroy a source resource.
 */
function openal_source_destroy()
{
}

/**
 * Retrieve an OpenAL source property.
 */
function openal_source_get()
{
}

/**
 * Pause the source.
 */
function openal_source_pause()
{
}

/**
 * Start playing the source.
 */
function openal_source_play()
{
}

/**
 * Rewind the source.
 */
function openal_source_rewind()
{
}

/**
 * Set source property.
 */
function openal_source_set()
{
}

/**
 * Stop playing the source.
 */
function openal_source_stop()
{
}

/**
 * Begin streaming on a source.
 */
function openal_stream()
{
}

/**
 * Changes the principal's password.
 */
function kadm5_chpass_principal()
{
}

/**
 * Creates a kerberos principal with the given parameters.
 */
function kadm5_create_principal()
{
}

/**
 * Deletes a kerberos principal.
 */
function kadm5_delete_principal()
{
}

/**
 * Closes the connection to the admin server and releases all related resources.
 */
function kadm5_destroy()
{
}

/**
 * Flush all changes to the Kerberos database.
 */
function kadm5_flush()
{
}

/**
 * Gets all policies from the Kerberos database.
 */
function kadm5_get_policies()
{
}

/**
 * Gets the principal's entries from the Kerberos database.
 */
function kadm5_get_principal()
{
}

/**
 * Gets all principals from the Kerberos database.
 */
function kadm5_get_principals()
{
}

/**
 * Opens a connection to the KADM5 library.
 */
function kadm5_init_with_password()
{
}

/**
 * Modifies a kerberos principal with the given parameters.
 */
function kadm5_modify_principal()
{
}

/**
 * Creates a Radius handle for accounting.
 */
function radius_acct_open()
{
}

/**
 * Adds a server.
 */
function radius_add_server()
{
}

/**
 * Creates a Radius handle for authentication.
 */
function radius_auth_open()
{
}

/**
 * Frees all ressources.
 */
function radius_close()
{
}

/**
 * Causes the library to read the given configuration file.
 */
function radius_config()
{
}

/**
 * Create accounting or authentication request.
 */
function radius_create_request()
{
}

/**
 * Converts raw data to IP-Address.
 */
function radius_cvt_addr()
{
}

/**
 * Converts raw data to integer.
 */
function radius_cvt_int()
{
}

/**
 * Converts raw data to string.
 */
function radius_cvt_string()
{
}

/**
 * Derives mppe-keys from mangled data.
 */
function radius_demangle_mppe_key()
{
}

/**
 * Demangles data.
 */
function radius_demangle()
{
}

/**
 * Extracts an attribute.
 */
function radius_get_attr()
{
}

/**
 * Extracts the data from a tagged attribute.
 */
function radius_get_tagged_attr_data()
{
}

/**
 * Extracts the tag from a tagged attribute.
 */
function radius_get_tagged_attr_tag()
{
}

/**
 * Extracts a vendor specific attribute.
 */
function radius_get_vendor_attr()
{
}

/**
 * Attaches an IP address attribute.
 */
function radius_put_addr()
{
}

/**
 * Attaches a binary attribute.
 */
function radius_put_attr()
{
}

/**
 * Attaches an integer attribute.
 */
function radius_put_int()
{
}

/**
 * Attaches a string attribute.
 */
function radius_put_string()
{
}

/**
 * Attaches a vendor specific IP address attribute.
 */
function radius_put_vendor_addr()
{
}

/**
 * Attaches a vendor specific binary attribute.
 */
function radius_put_vendor_attr()
{
}

/**
 * Attaches a vendor specific integer attribute.
 */
function radius_put_vendor_int()
{
}

/**
 * Attaches a vendor specific string attribute.
 */
function radius_put_vendor_string()
{
}

/**
 * Returns the request authenticator.
 */
function radius_request_authenticator()
{
}

/**
 * Salt-encrypts a value.
 */
function radius_salt_encrypt_attr()
{
}

/**
 * Sends the request and waites for a reply.
 */
function radius_send_request()
{
}

/**
 * Returns the shared secret.
 */
function radius_server_secret()
{
}

/**
 * Returns an error message.
 */
function radius_strerror()
{
}

/**
 * Add character at current position and advance cursor.
 */
function ncurses_addch()
{
}

/**
 * Add attributed string with specified length at current position.
 */
function ncurses_addchnstr()
{
}

/**
 * Add attributed string at current position.
 */
function ncurses_addchstr()
{
}

/**
 * Add string with specified length at current position.
 */
function ncurses_addnstr()
{
}

/**
 * Output text at current position.
 */
function ncurses_addstr()
{
}

/**
 * Define default colors for color 0.
 */
function ncurses_assume_default_colors()
{
}

/**
 * Turn off the given attributes.
 */
function ncurses_attroff()
{
}

/**
 * Turn on the given attributes.
 */
function ncurses_attron()
{
}

/**
 * Set given attributes.
 */
function ncurses_attrset()
{
}

/**
 * Returns baudrate of terminal.
 */
function ncurses_baudrate()
{
}

/**
 * Let the terminal beep.
 */
function ncurses_beep()
{
}

/**
 * Set background property for terminal screen.
 */
function ncurses_bkgd()
{
}

/**
 * Control screen background.
 */
function ncurses_bkgdset()
{
}

/**
 * Draw a border around the screen using attributed characters.
 */
function ncurses_border()
{
}

/**
 * Moves a visible panel to the bottom of the stack.
 */
function ncurses_bottom_panel()
{
}

/**
 * Checks if terminal color definitions can be changed.
 */
function ncurses_can_change_color()
{
}

/**
 * Switch off input buffering.
 */
function ncurses_cbreak()
{
}

/**
 * Clear screen.
 */
function ncurses_clear()
{
}

/**
 * Clear screen from current position to bottom.
 */
function ncurses_clrtobot()
{
}

/**
 * Clear screen from current position to end of line.
 */
function ncurses_clrtoeol()
{
}

/**
 * Retrieves RGB components of a color.
 */
function ncurses_color_content()
{
}

/**
 * Set active foreground and background colors.
 */
function ncurses_color_set()
{
}

/**
 * Set cursor state.
 */
function ncurses_curs_set()
{
}

/**
 * Saves terminals (program) mode.
 */
function ncurses_def_prog_mode()
{
}

/**
 * Saves terminals (shell) mode.
 */
function ncurses_def_shell_mode()
{
}

/**
 * Define a keycode.
 */
function ncurses_define_key()
{
}

/**
 * Remove panel from the stack and delete it (but not the associated window).
 */
function ncurses_del_panel()
{
}

/**
 * Delay output on terminal using padding characters.
 */
function ncurses_delay_output()
{
}

/**
 * Delete character at current position, move rest of line left.
 */
function ncurses_delch()
{
}

/**
 * Delete line at current position, move rest of screen up.
 */
function ncurses_deleteln()
{
}

/**
 * Delete a ncurses window.
 */
function ncurses_delwin()
{
}

/**
 * Write all prepared refreshes to terminal.
 */
function ncurses_doupdate()
{
}

/**
 * Activate keyboard input echo.
 */
function ncurses_echo()
{
}

/**
 * Single character output including refresh.
 */
function ncurses_echochar()
{
}

/**
 * Stop using ncurses, clean up the screen.
 */
function ncurses_end()
{
}

/**
 * Erase terminal screen.
 */
function ncurses_erase()
{
}

/**
 * Returns current erase character.
 */
function ncurses_erasechar()
{
}

/**
 * Set LINES for iniscr() and newterm() to 1.
 */
function ncurses_filter()
{
}

/**
 * Flash terminal screen (visual bell).
 */
function ncurses_flash()
{
}

/**
 * Flush keyboard input buffer.
 */
function ncurses_flushinp()
{
}

/**
 * Read a character from keyboard.
 */
function ncurses_getch()
{
}

/**
 * Returns the size of a window.
 */
function ncurses_getmaxyx()
{
}

/**
 * Reads mouse event.
 */
function ncurses_getmouse()
{
}

/**
 * Returns the current cursor position for a window.
 */
function ncurses_getyx()
{
}

/**
 * Put terminal into halfdelay mode.
 */
function ncurses_halfdelay()
{
}

/**
 * Checks if terminal has color capabilities.
 */
function ncurses_has_colors()
{
}

/**
 * Check for insert- and delete-capabilities.
 */
function ncurses_has_ic()
{
}

/**
 * Check for line insert- and delete-capabilities.
 */
function ncurses_has_il()
{
}

/**
 * Check for presence of a function key on terminal keyboard.
 */
function ncurses_has_key()
{
}

/**
 * Remove panel from the stack, making it invisible.
 */
function ncurses_hide_panel()
{
}

/**
 * Draw a horizontal line at current position using an attributed character and max. n characters long.
 */
function ncurses_hline()
{
}

/**
 * Get character and attribute at current position.
 */
function ncurses_inch()
{
}

/**
 * Define a terminal color.
 */
function ncurses_init_color()
{
}

/**
 * Define a color pair.
 */
function ncurses_init_pair()
{
}

/**
 * Initialize ncurses.
 */
function ncurses_init()
{
}

/**
 * Insert character moving rest of line including character at current position.
 */
function ncurses_insch()
{
}

/**
 * Insert lines before current line scrolling down (negative numbers delete and scroll up).
 */
function ncurses_insdelln()
{
}

/**
 * Insert a line, move rest of screen down.
 */
function ncurses_insertln()
{
}

/**
 * Insert string at current position, moving rest of line right.
 */
function ncurses_insstr()
{
}

/**
 * Reads string from terminal screen.
 */
function ncurses_instr()
{
}

/**
 * Ncurses is in endwin mode, normal screen output may be performed.
 */
function ncurses_isendwin()
{
}

/**
 * Enable or disable a keycode.
 */
function ncurses_keyok()
{
}

/**
 * Turns keypad on or off.
 */
function ncurses_keypad()
{
}

/**
 * Returns current line kill character.
 */
function ncurses_killchar()
{
}

/**
 * Returns terminals description.
 */
function ncurses_longname()
{
}

/**
 * Enables/Disable 8-bit meta key information.
 */
function ncurses_meta()
{
}

/**
 * Transforms coordinates.
 */
function ncurses_mouse_trafo()
{
}

/**
 * Set timeout for mouse button clicks.
 */
function ncurses_mouseinterval()
{
}

/**
 * Sets mouse options.
 */
function ncurses_mousemask()
{
}

/**
 * Moves a panel so that its upper-left corner is at [startx, starty].
 */
function ncurses_move_panel()
{
}

/**
 * Move output position.
 */
function ncurses_move()
{
}

/**
 * Move current position and add character.
 */
function ncurses_mvaddch()
{
}

/**
 * Move position and add attributed string with specified length.
 */
function ncurses_mvaddchnstr()
{
}

/**
 * Move position and add attributed string.
 */
function ncurses_mvaddchstr()
{
}

/**
 * Move position and add string with specified length.
 */
function ncurses_mvaddnstr()
{
}

/**
 * Move position and add string.
 */
function ncurses_mvaddstr()
{
}

/**
 * Move cursor immediately.
 */
function ncurses_mvcur()
{
}

/**
 * Move position and delete character, shift rest of line left.
 */
function ncurses_mvdelch()
{
}

/**
 * Move position and get character at new position.
 */
function ncurses_mvgetch()
{
}

/**
 * Set new position and draw a horizontal line using an attributed character and max. n characters long.
 */
function ncurses_mvhline()
{
}

/**
 * Move position and get attributed character at new position.
 */
function ncurses_mvinch()
{
}

/**
 * Set new position and draw a vertical line using an attributed character and max. n characters long.
 */
function ncurses_mvvline()
{
}

/**
 * Add string at new position in window.
 */
function ncurses_mvwaddstr()
{
}

/**
 * Sleep.
 */
function ncurses_napms()
{
}

/**
 * Create a new panel and associate it with window.
 */
function ncurses_new_panel()
{
}

/**
 * Creates a new pad (window).
 */
function ncurses_newpad()
{
}

/**
 * Create a new window.
 */
function ncurses_newwin()
{
}

/**
 * Translate newline and carriage return / line feed.
 */
function ncurses_nl()
{
}

/**
 * Switch terminal to cooked mode.
 */
function ncurses_nocbreak()
{
}

/**
 * Switch off keyboard input echo.
 */
function ncurses_noecho()
{
}

/**
 * Do not translate newline and carriage return / line feed.
 */
function ncurses_nonl()
{
}

/**
 * Do not flush on signal characters.
 */
function ncurses_noqiflush()
{
}

/**
 * Switch terminal out of raw mode.
 */
function ncurses_noraw()
{
}

/**
 * Retrieves foreground and background colors of a color pair.
 */
function ncurses_pair_content()
{
}

/**
 * Returns the panel above panel.
 */
function ncurses_panel_above()
{
}

/**
 * Returns the panel below panel.
 */
function ncurses_panel_below()
{
}

/**
 * Returns the window associated with panel.
 */
function ncurses_panel_window()
{
}

/**
 * Copies a region from a pad into the virtual screen.
 */
function ncurses_pnoutrefresh()
{
}

/**
 * Copies a region from a pad into the virtual screen.
 */
function ncurses_prefresh()
{
}

/**
 * Apply padding information to the string and output it.
 */
function ncurses_putp()
{
}

/**
 * Flush on signal characters.
 */
function ncurses_qiflush()
{
}

/**
 * Switch terminal into raw mode.
 */
function ncurses_raw()
{
}

/**
 * Refresh screen.
 */
function ncurses_refresh()
{
}

/**
 * Replaces the window associated with panel.
 */
function ncurses_replace_panel()
{
}

/**
 * Resets the prog mode saved by def_prog_mode.
 */
function ncurses_reset_prog_mode()
{
}

/**
 * Resets the shell mode saved by def_shell_mode.
 */
function ncurses_reset_shell_mode()
{
}

/**
 * Restores saved terminal state.
 */
function ncurses_resetty()
{
}

/**
 * Saves terminal state.
 */
function ncurses_savetty()
{
}

/**
 * Dump screen content to file.
 */
function ncurses_scr_dump()
{
}

/**
 * Initialize screen from file dump.
 */
function ncurses_scr_init()
{
}

/**
 * Restore screen from file dump.
 */
function ncurses_scr_restore()
{
}

/**
 * Inherit screen from file dump.
 */
function ncurses_scr_set()
{
}

/**
 * Scroll window content up or down without changing current position.
 */
function ncurses_scrl()
{
}

/**
 * Places an invisible panel on top of the stack, making it visible.
 */
function ncurses_show_panel()
{
}

/**
 * Returns current soft label key attribute.
 */
function ncurses_slk_attr()
{
}

/**
 * Turn off the given attributes for soft function-key labels.
 */
function ncurses_slk_attroff()
{
}

/**
 * Turn on the given attributes for soft function-key labels.
 */
function ncurses_slk_attron()
{
}

/**
 * Set given attributes for soft function-key labels.
 */
function ncurses_slk_attrset()
{
}

/**
 * Clears soft labels from screen.
 */
function ncurses_slk_clear()
{
}

/**
 * Sets color for soft label keys.
 */
function ncurses_slk_color()
{
}

/**
 * Initializes soft label key functions.
 */
function ncurses_slk_init()
{
}

/**
 * Copies soft label keys to virtual screen.
 */
function ncurses_slk_noutrefresh()
{
}

/**
 * Copies soft label keys to screen.
 */
function ncurses_slk_refresh()
{
}

/**
 * Restores soft label keys.
 */
function ncurses_slk_restore()
{
}

/**
 * Sets function key labels.
 */
function ncurses_slk_set()
{
}

/**
 * Forces output when ncurses_slk_noutrefresh is performed.
 */
function ncurses_slk_touch()
{
}

/**
 * Stop using 'standout' attribute.
 */
function ncurses_standend()
{
}

/**
 * Start using 'standout' attribute.
 */
function ncurses_standout()
{
}

/**
 * Initializes color functionality.
 */
function ncurses_start_color()
{
}

/**
 * Returns a logical OR of all attribute flags supported by terminal.
 */
function ncurses_termattrs()
{
}

/**
 * Returns terminals (short)-name.
 */
function ncurses_termname()
{
}

/**
 * Set timeout for special key sequences.
 */
function ncurses_timeout()
{
}

/**
 * Moves a visible panel to the top of the stack.
 */
function ncurses_top_panel()
{
}

/**
 * Specify different filedescriptor for typeahead checking.
 */
function ncurses_typeahead()
{
}

/**
 * Put a character back into the input stream.
 */
function ncurses_ungetch()
{
}

/**
 * Pushes mouse event to queue.
 */
function ncurses_ungetmouse()
{
}

/**
 * Refreshes the virtual screen to reflect the relations between panels in the stack.
 */
function ncurses_update_panels()
{
}

/**
 * Assign terminal default colors to color id -1.
 */
function ncurses_use_default_colors()
{
}

/**
 * Control use of environment information about terminal size.
 */
function ncurses_use_env()
{
}

/**
 * Control use of extended names in terminfo descriptions.
 */
function ncurses_use_extended_names()
{
}

/**
 * Display the string on the terminal in the video attribute mode.
 */
function ncurses_vidattr()
{
}

/**
 * Draw a vertical line at current position using an attributed character and max. n characters long.
 */
function ncurses_vline()
{
}

/**
 * Adds character at current position in a window and advance cursor.
 */
function ncurses_waddch()
{
}

/**
 * Outputs text at current postion in window.
 */
function ncurses_waddstr()
{
}

/**
 * Turns off attributes for a window.
 */
function ncurses_wattroff()
{
}

/**
 * Turns on attributes for a window.
 */
function ncurses_wattron()
{
}

/**
 * Set the attributes for a window.
 */
function ncurses_wattrset()
{
}

/**
 * Draws a border around the window using attributed characters.
 */
function ncurses_wborder()
{
}

/**
 * Clears window.
 */
function ncurses_wclear()
{
}

/**
 * Sets windows color pairings.
 */
function ncurses_wcolor_set()
{
}

/**
 * Erase window contents.
 */
function ncurses_werase()
{
}

/**
 * Reads a character from keyboard (window).
 */
function ncurses_wgetch()
{
}

/**
 * Draws a horizontal line in a window at current position using an attributed character and max. n characters long.
 */
function ncurses_whline()
{
}

/**
 * Transforms window/stdscr coordinates.
 */
function ncurses_wmouse_trafo()
{
}

/**
 * Moves windows output position.
 */
function ncurses_wmove()
{
}

/**
 * Copies window to virtual screen.
 */
function ncurses_wnoutrefresh()
{
}

/**
 * Refresh window on terminal screen.
 */
function ncurses_wrefresh()
{
}

/**
 * End standout mode for a window.
 */
function ncurses_wstandend()
{
}

/**
 * Enter standout mode for a window.
 */
function ncurses_wstandout()
{
}

/**
 * Draws a vertical line in a window at current position using an attributed character and max. n characters long.
 */
function ncurses_wvline()
{
}

/**
 * Send a beep to the terminal.
 */
function newt_bell()
{
}

/**
 * This function returns a grid containing the buttons created..
 */
function newt_button_bar()
{
}

/**
 * Create a new button.
 */
function newt_button()
{
}

/**
 * Open a centered window of the specified size.
 */
function newt_centered_window()
{
}

/**
 * Retreives value of checkox resource.
 */
function newt_checkbox_get_value()
{
}

/**
 * Configures checkbox resource.
 */
function newt_checkbox_set_flags()
{
}

/**
 * Sets the value of the checkbox.
 */
function newt_checkbox_set_value()
{
}

/**
 * Adds new item to the checkbox tree.
 */
function newt_checkbox_tree_add_item()
{
}

/**
 * Finds an item in the checkbox tree.
 */
function newt_checkbox_tree_find_item()
{
}

/**
 * Returns checkbox tree selected item.
 */
function newt_checkbox_tree_get_current()
{
}

/**
 * .
 */
function newt_checkbox_tree_get_entry_value()
{
}

/**
 * .
 */
function newt_checkbox_tree_get_multi_selection()
{
}

/**
 * .
 */
function newt_checkbox_tree_get_selection()
{
}

/**
 * .
 */
function newt_checkbox_tree_multi()
{
}

/**
 * .
 */
function newt_checkbox_tree_set_current()
{
}

/**
 * .
 */
function newt_checkbox_tree_set_entry_value()
{
}

/**
 * .
 */
function newt_checkbox_tree_set_entry()
{
}

/**
 * .
 */
function newt_checkbox_tree_set_width()
{
}

/**
 * .
 */
function newt_checkbox_tree()
{
}

/**
 * .
 */
function newt_checkbox()
{
}

/**
 * Discards the contents of the terminal's input buffer without  waiting for additional input.
 */
function newt_clear_key_buffer()
{
}

/**
 * .
 */
function newt_cls()
{
}

/**
 * .
 */
function newt_compact_button()
{
}

/**
 * .
 */
function newt_component_add_callback()
{
}

/**
 * .
 */
function newt_component_takes_focus()
{
}

/**
 * .
 */
function newt_create_grid()
{
}

/**
 * .
 */
function newt_cursor_off()
{
}

/**
 * .
 */
function newt_cursor_on()
{
}

/**
 * .
 */
function newt_delay()
{
}

/**
 * .
 */
function newt_draw_form()
{
}

/**
 * Displays the string text at the position indicated.
 */
function newt_draw_root_text()
{
}

/**
 * .
 */
function newt_entry_get_value()
{
}

/**
 * .
 */
function newt_entry_set_filter()
{
}

/**
 * .
 */
function newt_entry_set_flags()
{
}

/**
 * .
 */
function newt_entry_set()
{
}

/**
 * .
 */
function newt_entry()
{
}

/**
 * Uninitializes newt interface.
 */
function newt_finished()
{
}

/**
 * Adds a single component to the form.
 */
function newt_form_add_component()
{
}

/**
 * Add several components to the form.
 */
function newt_form_add_components()
{
}

/**
 * .
 */
function newt_form_add_hot_key()
{
}

/**
 * Destroys a form.
 */
function newt_form_destroy()
{
}

/**
 * .
 */
function newt_form_get_current()
{
}

/**
 * Runs a form.
 */
function newt_form_run()
{
}

/**
 * .
 */
function newt_form_set_background()
{
}

/**
 * .
 */
function newt_form_set_height()
{
}

/**
 * .
 */
function newt_form_set_size()
{
}

/**
 * .
 */
function newt_form_set_timer()
{
}

/**
 * .
 */
function newt_form_set_width()
{
}

/**
 * .
 */
function newt_form_watch_fd()
{
}

/**
 * Create a form.
 */
function newt_form()
{
}

/**
 * Fills in the passed references with the current size of the  terminal.
 */
function newt_get_screen_size()
{
}

/**
 * .
 */
function newt_grid_add_components_to_form()
{
}

/**
 * .
 */
function newt_grid_basic_window()
{
}

/**
 * .
 */
function newt_grid_free()
{
}

/**
 * .
 */
function newt_grid_get_size()
{
}

/**
 * .
 */
function newt_grid_h_close_stacked()
{
}

/**
 * .
 */
function newt_grid_h_stacked()
{
}

/**
 * .
 */
function newt_grid_place()
{
}

/**
 * .
 */
function newt_grid_set_field()
{
}

/**
 * .
 */
function newt_grid_simple_window()
{
}

/**
 * .
 */
function newt_grid_v_close_stacked()
{
}

/**
 * .
 */
function newt_grid_v_stacked()
{
}

/**
 * .
 */
function newt_grid_wrapped_window_at()
{
}

/**
 * .
 */
function newt_grid_wrapped_window()
{
}

/**
 * Initialize newt.
 */
function newt_init()
{
}

/**
 * .
 */
function newt_label_set_text()
{
}

/**
 * .
 */
function newt_label()
{
}

/**
 * .
 */
function newt_listbox_append_entry()
{
}

/**
 * .
 */
function newt_listbox_clear_selection()
{
}

/**
 * .
 */
function newt_listbox_clear()
{
}

/**
 * .
 */
function newt_listbox_delete_entry()
{
}

/**
 * .
 */
function newt_listbox_get_current()
{
}

/**
 * .
 */
function newt_listbox_get_selection()
{
}

/**
 * .
 */
function newt_listbox_insert_entry()
{
}

/**
 * .
 */
function newt_listbox_item_count()
{
}

/**
 * .
 */
function newt_listbox_select_item()
{
}

/**
 * .
 */
function newt_listbox_set_current_by_key()
{
}

/**
 * .
 */
function newt_listbox_set_current()
{
}

/**
 * .
 */
function newt_listbox_set_data()
{
}

/**
 * .
 */
function newt_listbox_set_entry()
{
}

/**
 * .
 */
function newt_listbox_set_width()
{
}

/**
 * .
 */
function newt_listbox()
{
}

/**
 * .
 */
function newt_listitem_get_data()
{
}

/**
 * .
 */
function newt_listitem_set()
{
}

/**
 * .
 */
function newt_listitem()
{
}

/**
 * Open a window of the specified size and position.
 */
function newt_open_window()
{
}

/**
 * Replaces the current help line with the one from the stack.
 */
function newt_pop_help_line()
{
}

/**
 * Removes the top window from the display.
 */
function newt_pop_window()
{
}

/**
 * Saves the current help line on a stack, and displays the new line.
 */
function newt_push_help_line()
{
}

/**
 * .
 */
function newt_radio_get_current()
{
}

/**
 * .
 */
function newt_radiobutton()
{
}

/**
 * .
 */
function newt_redraw_help_line()
{
}

/**
 * .
 */
function newt_reflow_text()
{
}

/**
 * Updates modified portions of the screen.
 */
function newt_refresh()
{
}

/**
 * .
 */
function newt_resize_screen()
{
}

/**
 * Resume using the newt interface after calling  newt_suspend.
 */
function newt_resume()
{
}

/**
 * Runs a form.
 */
function newt_run_form()
{
}

/**
 * .
 */
function newt_scale_set()
{
}

/**
 * .
 */
function newt_scale()
{
}

/**
 * .
 */
function newt_scrollbar_set()
{
}

/**
 * .
 */
function newt_set_help_callback()
{
}

/**
 * Set a callback function which gets invoked when user  presses the suspend key.
 */
function newt_set_suspend_callback()
{
}

/**
 * Tells newt to return the terminal to its initial state.
 */
function newt_suspend()
{
}

/**
 * .
 */
function newt_textbox_get_num_lines()
{
}

/**
 * .
 */
function newt_textbox_reflowed()
{
}

/**
 * .
 */
function newt_textbox_set_height()
{
}

/**
 * .
 */
function newt_textbox_set_text()
{
}

/**
 * .
 */
function newt_textbox()
{
}

/**
 * .
 */
function newt_vertical_scrollbar()
{
}

/**
 * Doesn't return until a key has been pressed.
 */
function newt_wait_for_key()
{
}

/**
 * .
 */
function newt_win_choice()
{
}

/**
 * .
 */
function newt_win_entries()
{
}

/**
 * .
 */
function newt_win_menu()
{
}

/**
 * .
 */
function newt_win_message()
{
}

/**
 * .
 */
function newt_win_messagev()
{
}

/**
 * .
 */
function newt_win_ternary()
{
}

/**
 * Adds a line to the history.
 */
function readline_add_history()
{
}

/**
 * Initializes the readline callback interface and terminal, prints the prompt and returns immediately.
 */
function readline_callback_handler_install()
{
}

/**
 * Removes a previously installed callback handler and restores terminal settings.
 */
function readline_callback_handler_remove()
{
}

/**
 * Reads a character and informs the readline callback interface when a line is received.
 */
function readline_callback_read_char()
{
}

/**
 * Clears the history.
 */
function readline_clear_history()
{
}

/**
 * Registers a completion function.
 */
function readline_completion_function()
{
}

/**
 * Gets/sets various internal readline variables.
 */
function readline_info()
{
}

/**
 * Lists the history.
 */
function readline_list_history()
{
}

/**
 * Inform readline that the cursor has moved to a new line.
 */
function readline_on_new_line()
{
}

/**
 * Reads the history.
 */
function readline_read_history()
{
}

/**
 * Redraws the display.
 */
function readline_redisplay()
{
}

/**
 * Writes the history.
 */
function readline_write_history()
{
}

/**
 * Reads a line.
 */
function readline()
{
}

/**
 * Close a bzip2 file.
 */
function bzclose()
{
}

/**
 * Compress a string into bzip2 encoded data.
 */
function bzcompress()
{
}

/**
 * Decompresses bzip2 encoded data.
 */
function bzdecompress()
{
}

/**
 * Returns a bzip2 error number.
 */
function bzerrno()
{
}

/**
 * Returns the bzip2 error number and error string in an array.
 */
function bzerror()
{
}

/**
 * Returns a bzip2 error string.
 */
function bzerrstr()
{
}

/**
 * Force a write of all buffered data.
 */
function bzflush()
{
}

/**
 * Opens a bzip2 compressed file.
 */
function bzopen()
{
}

/**
 * Binary safe bzip2 file read.
 */
function bzread()
{
}

/**
 * Binary safe bzip2 file write.
 */
function bzwrite()
{
}

/**
 * LZF compression.
 */
function lzf_compress()
{
}

/**
 * LZF decompression.
 */
function lzf_decompress()
{
}

/**
 * Determines what LZF extension was optimized for.
 */
function lzf_optimized_for()
{
}

/**
 * The PharException class provides a phar-specific exception class    for try/catch blocks..
 */
function PharException()
{
}

/**
 * Cache hits and misses for the URL wrapper.
 */
function rar_wrapper_cache_stats()
{
}

/**
 * Close RAR archive and free all resources.
 */
function rar_close()
{
}

/**
 * Get comment text from the RAR archive.
 */
function rar_comment_get()
{
}

/**
 * Get full list of entries from the RAR archive.
 */
function rar_list()
{
}

/**
 * Get entry object from the RAR archive.
 */
function rar_entry_get()
{
}

/**
 * Test whether an archive is broken (incomplete).
 */
function rar_broken_is()
{
}

/**
 * Check whether the RAR archive is solid.
 */
function rar_solid_is()
{
}

/**
 * Open RAR archive.
 */
function rar_open()
{
}

/**
 * Close a ZIP file archive.
 */
function zip_close()
{
}

/**
 * Close a directory entry.
 */
function zip_entry_close()
{
}

/**
 * Retrieve the compressed size of a directory entry.
 */
function zip_entry_compressedsize()
{
}

/**
 * Retrieve the compression method of a directory entry.
 */
function zip_entry_compressionmethod()
{
}

/**
 * Retrieve the actual file size of a directory entry.
 */
function zip_entry_filesize()
{
}

/**
 * Retrieve the name of a directory entry.
 */
function zip_entry_name()
{
}

/**
 * Open a directory entry for reading.
 */
function zip_entry_open()
{
}

/**
 * Read from an open directory entry.
 */
function zip_entry_read()
{
}

/**
 * Open a ZIP file archive.
 */
function zip_open()
{
}

/**
 * Read next entry in a ZIP file archive.
 */
function zip_read()
{
}

/**
 * Close an open gz-file pointer.
 */
function gzclose()
{
}

/**
 * Compress a string.
 */
function gzcompress()
{
}

/**
 * Decodes a gzip compressed string.
 */
function gzdecode()
{
}

/**
 * Deflate a string.
 */
function gzdeflate()
{
}

/**
 * Create a gzip compressed string.
 */
function gzencode()
{
}

/**
 * Test for EOF on a gz-file pointer.
 */
function gzeof()
{
}

/**
 * Read entire gz-file into an array.
 */
function gzfile()
{
}

/**
 * Get character from gz-file pointer.
 */
function gzgetc()
{
}

/**
 * Get line from file pointer.
 */
function gzgets()
{
}

/**
 * Get line from gz-file pointer and strip HTML tags.
 */
function gzgetss()
{
}

/**
 * Inflate a deflated string.
 */
function gzinflate()
{
}

/**
 * Open gz-file.
 */
function gzopen()
{
}

/**
 * Output all remaining data on a gz-file pointer.
 */
function gzpassthru()
{
}

/**
 * Alias of gzwrite.
 */
function gzputs()
{
}

/**
 * Binary-safe gz-file read.
 */
function gzread()
{
}

/**
 * Rewind the position of a gz-file pointer.
 */
function gzrewind()
{
}

/**
 * Seek on a gz-file pointer.
 */
function gzseek()
{
}

/**
 * Tell gz-file pointer read/write position.
 */
function gztell()
{
}

/**
 * Uncompress a compressed string.
 */
function gzuncompress()
{
}

/**
 * Binary-safe gz-file write.
 */
function gzwrite()
{
}

/**
 * Output a gz-file.
 */
function readgzfile()
{
}

/**
 * Uncompress any raw/gzip/zlib encoded data.
 */
function zlib_decode()
{
}

/**
 * Compress data with the specified encoding.
 */
function zlib_encode()
{
}

/**
 * Returns the coding type used for output compression.
 */
function zlib_get_coding_type()
{
}

/**
 * Check to see if a transaction has completed.
 */
function m_checkstatus()
{
}

/**
 * Number of complete authorizations in queue, returning an array of their identifiers.
 */
function m_completeauthorizations()
{
}

/**
 * Establish the connection to MCVE.
 */
function m_connect()
{
}

/**
 * Get a textual representation of why a connection failed.
 */
function m_connectionerror()
{
}

/**
 * Delete specified transaction from MCVE_CONN structure.
 */
function m_deletetrans()
{
}

/**
 * Destroy the connection and MCVE_CONN structure.
 */
function m_destroyconn()
{
}

/**
 * Free memory associated with IP/SSL connectivity.
 */
function m_destroyengine()
{
}

/**
 * Get a specific cell from a comma delimited response by column name.
 */
function m_getcell()
{
}

/**
 * Get a specific cell from a comma delimited response by column number.
 */
function m_getcellbynum()
{
}

/**
 * Get the RAW comma delimited data returned from MCVE.
 */
function m_getcommadelimited()
{
}

/**
 * Get the name of the column in a comma-delimited response.
 */
function m_getheader()
{
}

/**
 * Create and initialize an MCVE_CONN structure.
 */
function m_initconn()
{
}

/**
 * Ready the client for IP/SSL Communication.
 */
function m_initengine()
{
}

/**
 * Checks to see if response is comma delimited.
 */
function m_iscommadelimited()
{
}

/**
 * The maximum amount of time the API will attempt a connection to MCVE.
 */
function m_maxconntimeout()
{
}

/**
 * Perform communication with MCVE (send/receive data) Non-blocking.
 */
function m_monitor()
{
}

/**
 * Number of columns returned in a comma delimited response.
 */
function m_numcolumns()
{
}

/**
 * Number of rows returned in a comma delimited response.
 */
function m_numrows()
{
}

/**
 * Parse the comma delimited response so m_getcell, etc will work.
 */
function m_parsecommadelimited()
{
}

/**
 * Returns array of strings which represents the keys that can be used for response parameters on this transaction.
 */
function m_responsekeys()
{
}

/**
 * Get a custom response parameter.
 */
function m_responseparam()
{
}

/**
 * Check to see if the transaction was successful.
 */
function m_returnstatus()
{
}

/**
 * Set blocking/non-blocking mode for connection.
 */
function m_setblocking()
{
}

/**
 * Set the connection method to Drop-File.
 */
function m_setdropfile()
{
}

/**
 * Set the connection method to IP.
 */
function m_setip()
{
}

/**
 * Set SSL CA (Certificate Authority) file for verification of server certificate.
 */
function m_setssl_cafile()
{
}

/**
 * Set certificate key files and certificates if server requires client certificate verification.
 */
function m_setssl_files()
{
}

/**
 * Set the connection method to SSL.
 */
function m_setssl()
{
}

/**
 * Set maximum transaction time (per trans).
 */
function m_settimeout()
{
}

/**
 * Generate hash for SSL client certificate verification.
 */
function m_sslcert_gen_hash()
{
}

/**
 * Check to see if outgoing buffer is clear.
 */
function m_transactionssent()
{
}

/**
 * Number of transactions in client-queue.
 */
function m_transinqueue()
{
}

/**
 * Add key/value pair to a transaction. Replaces deprecated transparam().
 */
function m_transkeyval()
{
}

/**
 * Start a new transaction.
 */
function m_transnew()
{
}

/**
 * Finalize and send the transaction.
 */
function m_transsend()
{
}

/**
 * Wait x microsecs.
 */
function m_uwait()
{
}

/**
 * Whether or not to validate the passed identifier on any transaction it is passed to.
 */
function m_validateidentifier()
{
}

/**
 * Set whether or not to PING upon connect to verify connection.
 */
function m_verifyconnection()
{
}

/**
 * Set whether or not to verify the server ssl certificate.
 */
function m_verifysslcert()
{
}

/**
 * Obtain a hmac key (needs 8 arguments).
 */
function calcul_hmac()
{
}

/**
 * Obtain a hmac key (needs 2 arguments).
 */
function calculhmac()
{
}

/**
 * Obtain a nthmac key (needs 2 arguments).
 */
function nthmac()
{
}

/**
 * Obtain the payment url (needs 2 arguments).
 */
function signeurlpaiement()
{
}

/**
 * Performs an obscure check with the given password.
 */
function crack_check()
{
}

/**
 * Closes an open CrackLib dictionary.
 */
function crack_closedict()
{
}

/**
 * Returns the message from the last obscure check.
 */
function crack_getlastmessage()
{
}

/**
 * Opens a new CrackLib dictionary.
 */
function crack_opendict()
{
}

/**
 * Return a list of registered hashing algorithms.
 */
function hash_algos()
{
}

/**
 * Copy hashing context.
 */
function hash_copy()
{
}

/**
 * Timing attack safe string comparison.
 */
function hash_equals()
{
}

/**
 * Generate a hash value using the contents of a given file.
 */
function hash_file()
{
}

/**
 * Finalize an incremental hash and return resulting digest.
 */
function hash_final()
{
}

/**
 * Generate a keyed hash value using the HMAC method and the contents of a given file.
 */
function hash_hmac_file()
{
}

/**
 * Generate a keyed hash value using the HMAC method.
 */
function hash_hmac()
{
}

/**
 * Initialize an incremental hashing context.
 */
function hash_init()
{
}

/**
 * Generate a PBKDF2 key derivation of a supplied password.
 */
function hash_pbkdf2()
{
}

/**
 * Pump data into an active hashing context from a file.
 */
function hash_update_file()
{
}

/**
 * Pump data into an active hashing context from an open stream.
 */
function hash_update_stream()
{
}

/**
 * Pump data into an active hashing context.
 */
function hash_update()
{
}

/**
 * Generate a hash value (message digest).
 */
function hash()
{
}

/**
 * Encrypts/decrypts data in CBC mode.
 */
function mcrypt_cbc()
{
}

/**
 * Encrypts/decrypts data in CFB mode.
 */
function mcrypt_cfb()
{
}

/**
 * Creates an initialization vector (IV) from a random source.
 */
function mcrypt_create_iv()
{
}

/**
 * Decrypts crypttext with given parameters.
 */
function mcrypt_decrypt()
{
}

/**
 * Deprecated: Encrypts/decrypts data in ECB mode.
 */
function mcrypt_ecb()
{
}

/**
 * Returns the name of the opened algorithm.
 */
function mcrypt_enc_get_algorithms_name()
{
}

/**
 * Returns the blocksize of the opened algorithm.
 */
function mcrypt_enc_get_block_size()
{
}

/**
 * Returns the size of the IV of the opened algorithm.
 */
function mcrypt_enc_get_iv_size()
{
}

/**
 * Returns the maximum supported keysize of the opened mode.
 */
function mcrypt_enc_get_key_size()
{
}

/**
 * Returns the name of the opened mode.
 */
function mcrypt_enc_get_modes_name()
{
}

/**
 * Returns an array with the supported keysizes of the opened algorithm.
 */
function mcrypt_enc_get_supported_key_sizes()
{
}

/**
 * Checks whether the encryption of the opened mode works on blocks.
 */
function mcrypt_enc_is_block_algorithm_mode()
{
}

/**
 * Checks whether the algorithm of the opened mode is a block algorithm.
 */
function mcrypt_enc_is_block_algorithm()
{
}

/**
 * Checks whether the opened mode outputs blocks.
 */
function mcrypt_enc_is_block_mode()
{
}

/**
 * Runs a self test on the opened module.
 */
function mcrypt_enc_self_test()
{
}

/**
 * Encrypts plaintext with given parameters.
 */
function mcrypt_encrypt()
{
}

/**
 * This function deinitializes an encryption module.
 */
function mcrypt_generic_deinit()
{
}

/**
 * This function terminates encryption.
 */
function mcrypt_generic_end()
{
}

/**
 * This function initializes all buffers needed for encryption.
 */
function mcrypt_generic_init()
{
}

/**
 * This function encrypts data.
 */
function mcrypt_generic()
{
}

/**
 * Gets the block size of the specified cipher.
 */
function mcrypt_get_block_size()
{
}

/**
 * Gets the name of the specified cipher.
 */
function mcrypt_get_cipher_name()
{
}

/**
 * Returns the size of the IV belonging to a specific cipher/mode combination.
 */
function mcrypt_get_iv_size()
{
}

/**
 * Gets the key size of the specified cipher.
 */
function mcrypt_get_key_size()
{
}

/**
 * Gets an array of all supported ciphers.
 */
function mcrypt_list_algorithms()
{
}

/**
 * Gets an array of all supported modes.
 */
function mcrypt_list_modes()
{
}

/**
 * Closes the mcrypt module.
 */
function mcrypt_module_close()
{
}

/**
 * Returns the blocksize of the specified algorithm.
 */
function mcrypt_module_get_algo_block_size()
{
}

/**
 * Returns the maximum supported keysize of the opened mode.
 */
function mcrypt_module_get_algo_key_size()
{
}

/**
 * Returns an array with the supported keysizes of the opened algorithm.
 */
function mcrypt_module_get_supported_key_sizes()
{
}

/**
 * Returns if the specified module is a block algorithm or not.
 */
function mcrypt_module_is_block_algorithm_mode()
{
}

/**
 * This function checks whether the specified algorithm is a block algorithm.
 */
function mcrypt_module_is_block_algorithm()
{
}

/**
 * Returns if the specified mode outputs blocks or not.
 */
function mcrypt_module_is_block_mode()
{
}

/**
 * Opens the module of the algorithm and the mode to be used.
 */
function mcrypt_module_open()
{
}

/**
 * This function runs a self test on the specified module.
 */
function mcrypt_module_self_test()
{
}

/**
 * Encrypts/decrypts data in OFB mode.
 */
function mcrypt_ofb()
{
}

/**
 * Decrypts data.
 */
function mdecrypt_generic()
{
}

/**
 * Gets the highest available hash ID.
 */
function mhash_count()
{
}

/**
 * Gets the block size of the specified hash.
 */
function mhash_get_block_size()
{
}

/**
 * Gets the name of the specified hash.
 */
function mhash_get_hash_name()
{
}

/**
 * Generates a key.
 */
function mhash_keygen_s2k()
{
}

/**
 * Computes hash.
 */
function mhash()
{
}

/**
 * Gets the cipher iv length.
 */
function openssl_cipher_iv_length()
{
}

/**
 * Exports a CSR to a file.
 */
function openssl_csr_export_to_file()
{
}

/**
 * Exports a CSR as a string.
 */
function openssl_csr_export()
{
}

/**
 * Returns the public key of a CERT.
 */
function openssl_csr_get_public_key()
{
}

/**
 * Returns the subject of a CERT.
 */
function openssl_csr_get_subject()
{
}

/**
 * Generates a CSR.
 */
function openssl_csr_new()
{
}

/**
 * Sign a CSR with another certificate (or itself) and generate a certificate.
 */
function openssl_csr_sign()
{
}

/**
 * Decrypts data.
 */
function openssl_decrypt()
{
}

/**
 * Computes shared secret for public value of remote DH key and local DH key.
 */
function openssl_dh_compute_key()
{
}

/**
 * Computes a digest.
 */
function openssl_digest()
{
}

/**
 * Encrypts data.
 */
function openssl_encrypt()
{
}

/**
 * Return openSSL error message.
 */
function openssl_error_string()
{
}

/**
 * Free key resource.
 */
function openssl_free_key()
{
}

/**
 * Retrieve the available certificate locations.
 */
function openssl_get_cert_locations()
{
}

/**
 * Gets available cipher methods.
 */
function openssl_get_cipher_methods()
{
}

/**
 * Gets available digest methods.
 */
function openssl_get_md_methods()
{
}

/**
 * Alias of openssl_pkey_get_private.
 */
function openssl_get_privatekey()
{
}

/**
 * Alias of openssl_pkey_get_public.
 */
function openssl_get_publickey()
{
}

/**
 * Open sealed data.
 */
function openssl_open()
{
}

/**
 * Generates a PKCS5 v2 PBKDF2 string, defaults to SHA-1.
 */
function openssl_pbkdf2()
{
}

/**
 * Exports a PKCS#12 Compatible Certificate Store File.
 */
function openssl_pkcs12_export_to_file()
{
}

/**
 * Exports a PKCS#12 Compatible Certificate Store File to variable..
 */
function openssl_pkcs12_export()
{
}

/**
 * Parse a PKCS#12 Certificate Store into an array.
 */
function openssl_pkcs12_read()
{
}

/**
 * Decrypts an S/MIME encrypted message.
 */
function openssl_pkcs7_decrypt()
{
}

/**
 * Encrypt an S/MIME message.
 */
function openssl_pkcs7_encrypt()
{
}

/**
 * Sign an S/MIME message.
 */
function openssl_pkcs7_sign()
{
}

/**
 * Verifies the signature of an S/MIME signed message.
 */
function openssl_pkcs7_verify()
{
}

/**
 * Gets an exportable representation of a key into a file.
 */
function openssl_pkey_export_to_file()
{
}

/**
 * Gets an exportable representation of a key into a string.
 */
function openssl_pkey_export()
{
}

/**
 * Frees a private key.
 */
function openssl_pkey_free()
{
}

/**
 * Returns an array with the key details.
 */
function openssl_pkey_get_details()
{
}

/**
 * Get a private key.
 */
function openssl_pkey_get_private()
{
}

/**
 * Extract public key from certificate and prepare it for use.
 */
function openssl_pkey_get_public()
{
}

/**
 * Generates a new private key.
 */
function openssl_pkey_new()
{
}

/**
 * Decrypts data with private key.
 */
function openssl_private_decrypt()
{
}

/**
 * Encrypts data with private key.
 */
function openssl_private_encrypt()
{
}

/**
 * Decrypts data with public key.
 */
function openssl_public_decrypt()
{
}

/**
 * Encrypts data with public key.
 */
function openssl_public_encrypt()
{
}

/**
 * Generate a pseudo-random string of bytes.
 */
function openssl_random_pseudo_bytes()
{
}

/**
 * Seal (encrypt) data.
 */
function openssl_seal()
{
}

/**
 * Generate signature.
 */
function openssl_sign()
{
}

/**
 * Exports the challenge assoicated with a signed public key and challenge.
 */
function openssl_spki_export_challenge()
{
}

/**
 * Exports a valid PEM formatted public key signed public key and challenge.
 */
function openssl_spki_export()
{
}

/**
 * Generate a new signed public key and challenge.
 */
function openssl_spki_new()
{
}

/**
 * Verifies a signed public key and challenge.
 */
function openssl_spki_verify()
{
}

/**
 * Verify signature.
 */
function openssl_verify()
{
}

/**
 * Checks if a private key corresponds to a certificate.
 */
function openssl_x509_check_private_key()
{
}

/**
 * Verifies if a certificate can be used for a particular purpose.
 */
function openssl_x509_checkpurpose()
{
}

/**
 * Exports a certificate to file.
 */
function openssl_x509_export_to_file()
{
}

/**
 * Exports a certificate as a string.
 */
function openssl_x509_export()
{
}

/**
 * Calculates the fingerprint, or digest, of a given X.509 certificate.
 */
function openssl_x509_fingerprint()
{
}

/**
 * Free certificate resource.
 */
function openssl_x509_free()
{
}

/**
 * Parse an X509 certificate and return the information as an array.
 */
function openssl_x509_parse()
{
}

/**
 * Parse an X.509 certificate and return a resource identifier for  it.
 */
function openssl_x509_read()
{
}

/**
 * Returns information about the given hash.
 */
function password_get_info()
{
}

/**
 * Creates a password hash.
 */
function password_hash()
{
}

/**
 * Checks if the given hash matches the given options.
 */
function password_needs_rehash()
{
}

/**
 * Verifies that a password matches a hash.
 */
function password_verify()
{
}

/**
 * Close a DBA database.
 */
function dba_close()
{
}

/**
 * Delete DBA entry specified by key.
 */
function dba_delete()
{
}

/**
 * Check whether key exists.
 */
function dba_exists()
{
}

/**
 * Fetch data specified by key.
 */
function dba_fetch()
{
}

/**
 * Fetch first key.
 */
function dba_firstkey()
{
}

/**
 * List all the handlers available.
 */
function dba_handlers()
{
}

/**
 * Insert entry.
 */
function dba_insert()
{
}

/**
 * Splits a key in string representation into array representation.
 */
function dba_key_split()
{
}

/**
 * List all open database files.
 */
function dba_list()
{
}

/**
 * Fetch next key.
 */
function dba_nextkey()
{
}

/**
 * Open database.
 */
function dba_open()
{
}

/**
 * Optimize database.
 */
function dba_optimize()
{
}

/**
 * Open database persistently.
 */
function dba_popen()
{
}

/**
 * Replace or insert entry.
 */
function dba_replace()
{
}

/**
 * Synchronize database.
 */
function dba_sync()
{
}

/**
 * Close an open connection/database.
 */
function dbx_close()
{
}

/**
 * Compare two rows for sorting purposes.
 */
function dbx_compare()
{
}

/**
 * Open a connection/database.
 */
function dbx_connect()
{
}

/**
 * Report the error message of the latest function call in the module.
 */
function dbx_error()
{
}

/**
 * Escape a string so it can safely be used in an sql-statement.
 */
function dbx_escape_string()
{
}

/**
 * Fetches rows from a query-result that had the   DBX_RESULT_UNBUFFERED flag set.
 */
function dbx_fetch_row()
{
}

/**
 * Send a query and fetch all results (if any).
 */
function dbx_query()
{
}

/**
 * Sort a result from a dbx_query by a custom sort function.
 */
function dbx_sort()
{
}

/**
 * Toggle autocommit behaviour.
 */
function odbc_autocommit()
{
}

/**
 * Handling of binary column data.
 */
function odbc_binmode()
{
}

/**
 * Close all ODBC connections.
 */
function odbc_close_all()
{
}

/**
 * Close an ODBC connection.
 */
function odbc_close()
{
}

/**
 * Lists columns and associated privileges for the given table.
 */
function odbc_columnprivileges()
{
}

/**
 * Lists the column names in specified tables.
 */
function odbc_columns()
{
}

/**
 * Commit an ODBC transaction.
 */
function odbc_commit()
{
}

/**
 * Connect to a datasource.
 */
function odbc_connect()
{
}

/**
 * Get cursorname.
 */
function odbc_cursor()
{
}

/**
 * Returns information about a current connection.
 */
function odbc_data_source()
{
}

/**
 * Alias of odbc_exec.
 */
function odbc_do()
{
}

/**
 * Get the last error code.
 */
function odbc_error()
{
}

/**
 * Get the last error message.
 */
function odbc_errormsg()
{
}

/**
 * Prepare and execute an SQL statement.
 */
function odbc_exec()
{
}

/**
 * Execute a prepared statement.
 */
function odbc_execute()
{
}

/**
 * Fetch a result row as an associative array.
 */
function odbc_fetch_array()
{
}

/**
 * Fetch one result row into array.
 */
function odbc_fetch_into()
{
}

/**
 * Fetch a result row as an object.
 */
function odbc_fetch_object()
{
}

/**
 * Fetch a row.
 */
function odbc_fetch_row()
{
}

/**
 * Get the length (precision) of a field.
 */
function odbc_field_len()
{
}

/**
 * Get the columnname.
 */
function odbc_field_name()
{
}

/**
 * Return column number.
 */
function odbc_field_num()
{
}

/**
 * Alias of odbc_field_len.
 */
function odbc_field_precision()
{
}

/**
 * Get the scale of a field.
 */
function odbc_field_scale()
{
}

/**
 * Datatype of a field.
 */
function odbc_field_type()
{
}

/**
 * Retrieves a list of foreign keys.
 */
function odbc_foreignkeys()
{
}

/**
 * Free resources associated with a result.
 */
function odbc_free_result()
{
}

/**
 * Retrieves information about data types supported by the data source.
 */
function odbc_gettypeinfo()
{
}

/**
 * Handling of LONG columns.
 */
function odbc_longreadlen()
{
}

/**
 * Checks if multiple results are available.
 */
function odbc_next_result()
{
}

/**
 * Number of columns in a result.
 */
function odbc_num_fields()
{
}

/**
 * Number of rows in a result.
 */
function odbc_num_rows()
{
}

/**
 * Open a persistent database connection.
 */
function odbc_pconnect()
{
}

/**
 * Prepares a statement for execution.
 */
function odbc_prepare()
{
}

/**
 * Gets the primary keys for a table.
 */
function odbc_primarykeys()
{
}

/**
 * Retrieve information about parameters to procedures.
 */
function odbc_procedurecolumns()
{
}

/**
 * Get the list of procedures stored in a specific data source.
 */
function odbc_procedures()
{
}

/**
 * Print result as HTML table.
 */
function odbc_result_all()
{
}

/**
 * Get result data.
 */
function odbc_result()
{
}

/**
 * Rollback a transaction.
 */
function odbc_rollback()
{
}

/**
 * Adjust ODBC settings.
 */
function odbc_setoption()
{
}

/**
 * Retrieves special columns.
 */
function odbc_specialcolumns()
{
}

/**
 * Retrieve statistics about a table.
 */
function odbc_statistics()
{
}

/**
 * Lists tables and the privileges associated with each table.
 */
function odbc_tableprivileges()
{
}

/**
 * Get the list of table names stored in a specific data source.
 */
function odbc_tables()
{
}

/**
 * Bind variables to a prepared statement as parameters.
 */
function cubrid_bind()
{
}

/**
 * Close the request handle.
 */
function cubrid_close_prepare()
{
}

/**
 * Close the request handle.
 */
function cubrid_close_request()
{
}

/**
 * Get contents of collection type column using OID.
 */
function cubrid_col_get()
{
}

/**
 * Get the number of elements in collection type column using OID.
 */
function cubrid_col_size()
{
}

/**
 * Get the column names in result.
 */
function cubrid_column_names()
{
}

/**
 * Get column types in result.
 */
function cubrid_column_types()
{
}

/**
 * Commit a transaction.
 */
function cubrid_commit()
{
}

/**
 * Establish the environment for connecting to CUBRID server.
 */
function cubrid_connect_with_url()
{
}

/**
 * Open a connection to a CUBRID Server.
 */
function cubrid_connect()
{
}

/**
 * Get OID of the current cursor location.
 */
function cubrid_current_oid()
{
}

/**
 * Close a database connection.
 */
function cubrid_disconnect()
{
}

/**
 * Delete an instance using OID.
 */
function cubrid_drop()
{
}

/**
 * Get the facility code of error.
 */
function cubrid_error_code_facility()
{
}

/**
 * Get error code for the most recent function call.
 */
function cubrid_error_code()
{
}

/**
 * Get last error message for the most recent function call.
 */
function cubrid_error_msg()
{
}

/**
 * Execute a prepared SQL statement.
 */
function cubrid_execute()
{
}

/**
 * Fetch the next row from a result set.
 */
function cubrid_fetch()
{
}

/**
 * Free the memory occupied by the result data.
 */
function cubrid_free_result()
{
}

/**
 * Get auto-commit mode of the connection.
 */
function cubrid_get_autocommit()
{
}

/**
 * Return the current CUBRID connection charset.
 */
function cubrid_get_charset()
{
}

/**
 * Get the class name using OID.
 */
function cubrid_get_class_name()
{
}

/**
 * Return the client library version.
 */
function cubrid_get_client_info()
{
}

/**
 * Returns the CUBRID database parameters.
 */
function cubrid_get_db_parameter()
{
}

/**
 * Get the query timeout value of the request.
 */
function cubrid_get_query_timeout()
{
}

/**
 * Return the CUBRID server version.
 */
function cubrid_get_server_info()
{
}

/**
 * Get a column using OID.
 */
function cubrid_get()
{
}

/**
 * Return the ID generated for the last updated AUTO_INCREMENT column.
 */
function cubrid_insert_id()
{
}

/**
 * Check whether the instance pointed by OID exists.
 */
function cubrid_is_instance()
{
}

/**
 * Close BLOB/CLOB data.
 */
function cubrid_lob_close()
{
}

/**
 * Export BLOB/CLOB data to file.
 */
function cubrid_lob_export()
{
}

/**
 * Get BLOB/CLOB data.
 */
function cubrid_lob_get()
{
}

/**
 * Read BLOB/CLOB data and send straight to browser.
 */
function cubrid_lob_send()
{
}

/**
 * Get BLOB/CLOB data size.
 */
function cubrid_lob_size()
{
}

/**
 * Bind a lob object or a string as a lob object to a prepared statement as parameters..
 */
function cubrid_lob2_bind()
{
}

/**
 * Close LOB object..
 */
function cubrid_lob2_close()
{
}

/**
 * Export the lob object to a file..
 */
function cubrid_lob2_export()
{
}

/**
 * Import BLOB/CLOB data from a file..
 */
function cubrid_lob2_import()
{
}

/**
 * Create a lob object..
 */
function cubrid_lob2_new()
{
}

/**
 * Read from BLOB/CLOB data..
 */
function cubrid_lob2_read()
{
}

/**
 * Move the cursor of a lob object..
 */
function cubrid_lob2_seek64()
{
}

/**
 * Move the cursor of a lob object..
 */
function cubrid_lob2_seek()
{
}

/**
 * Get a lob object's size..
 */
function cubrid_lob2_size64()
{
}

/**
 * Get a lob object's size..
 */
function cubrid_lob2_size()
{
}

/**
 * Tell the cursor position of the LOB object..
 */
function cubrid_lob2_tell64()
{
}

/**
 * Tell the cursor position of the LOB object..
 */
function cubrid_lob2_tell()
{
}

/**
 * Write to a lob object..
 */
function cubrid_lob2_write()
{
}

/**
 * Set a read lock on the given OID.
 */
function cubrid_lock_read()
{
}

/**
 * Set a write lock on the given OID.
 */
function cubrid_lock_write()
{
}

/**
 * Move the cursor in the result.
 */
function cubrid_move_cursor()
{
}

/**
 * Get result of next query when executing multiple SQL statements.
 */
function cubrid_next_result()
{
}

/**
 * Return the number of columns in the result set.
 */
function cubrid_num_cols()
{
}

/**
 * Get the number of rows in the result set.
 */
function cubrid_num_rows()
{
}

/**
 * Open a persistent connection to CUBRID server.
 */
function cubrid_pconnect_with_url()
{
}

/**
 * Open a persistent connection to a CUBRID server.
 */
function cubrid_pconnect()
{
}

/**
 * Prepare a SQL statement for execution.
 */
function cubrid_prepare()
{
}

/**
 * Update a column using OID.
 */
function cubrid_put()
{
}

/**
 * Roll back a transaction.
 */
function cubrid_rollback()
{
}

/**
 * Get the requested schema information.
 */
function cubrid_schema()
{
}

/**
 * Delete an element from sequence type column using OID.
 */
function cubrid_seq_drop()
{
}

/**
 * Insert an element to a sequence type column using OID.
 */
function cubrid_seq_insert()
{
}

/**
 * Update the element value of sequence type column using OID.
 */
function cubrid_seq_put()
{
}

/**
 * Insert a single element to set type column using OID.
 */
function cubrid_set_add()
{
}

/**
 * Set autocommit mode of the connection.
 */
function cubrid_set_autocommit()
{
}

/**
 * Sets the CUBRID database parameters.
 */
function cubrid_set_db_parameter()
{
}

/**
 * Delete an element from set type column using OID.
 */
function cubrid_set_drop()
{
}

/**
 * Set the timeout time of query execution.
 */
function cubrid_set_query_timeout()
{
}

/**
 * Get the CUBRID PHP module's version.
 */
function cubrid_version()
{
}

/**
 * Return the number of rows affected by the last SQL statement.
 */
function cubrid_affected_rows()
{
}

/**
 * Return the current CUBRID connection charset.
 */
function cubrid_client_encoding()
{
}

/**
 * Close CUBRID connection.
 */
function cubrid_close()
{
}

/**
 * Move the internal row pointer of the CUBRID result.
 */
function cubrid_data_seek()
{
}

/**
 * Get db name from results of cubrid_list_dbs.
 */
function cubrid_db_name()
{
}

/**
 * Return the numerical value of the error message from previous CUBRID operation.
 */
function cubrid_errno()
{
}

/**
 * Get the error message.
 */
function cubrid_error()
{
}

/**
 * Fetch a result row as an associative array, a numeric array, or both.
 */
function cubrid_fetch_array()
{
}

/**
 * Return the associative array that corresponds to the fetched row.
 */
function cubrid_fetch_assoc()
{
}

/**
 * Get column information from a result and return as an object.
 */
function cubrid_fetch_field()
{
}

/**
 * Return an array with the lengths of the values of each field from the current row.
 */
function cubrid_fetch_lengths()
{
}

/**
 * Fetche the next row and returns it as an object.
 */
function cubrid_fetch_object()
{
}

/**
 * Return a numerical array with the values of the current row.
 */
function cubrid_fetch_row()
{
}

/**
 * Return a string with the flags of the given field offset.
 */
function cubrid_field_flags()
{
}

/**
 * Get the maximum length of the specified field.
 */
function cubrid_field_len()
{
}

/**
 * Return the name of the specified field index.
 */
function cubrid_field_name()
{
}

/**
 * Move the result set cursor to the specified field offset.
 */
function cubrid_field_seek()
{
}

/**
 * Return the name of the table of the specified field.
 */
function cubrid_field_table()
{
}

/**
 * Return the type of the column corresponding to the given field offset.
 */
function cubrid_field_type()
{
}

/**
 * Return an array with the list of all existing CUBRID databases.
 */
function cubrid_list_dbs()
{
}

/**
 * Return the number of columns in the result set.
 */
function cubrid_num_fields()
{
}

/**
 * Ping a server connection or reconnect if there is no connection.
 */
function cubrid_ping()
{
}

/**
 * Send a CUBRID query.
 */
function cubrid_query()
{
}

/**
 * Escape special characters in a string for use in an SQL statement.
 */
function cubrid_real_escape_string()
{
}

/**
 * Return the value of a specific field in a specific row.
 */
function cubrid_result()
{
}

/**
 * Perform a query without fetching the results into memory.
 */
function cubrid_unbuffered_query()
{
}

/**
 * Read data from a GLO instance and save it in a file.
 */
function cubrid_load_from_glo()
{
}

/**
 * Create a glo instance.
 */
function cubrid_new_glo()
{
}

/**
 * Save requested file in a GLO instance.
 */
function cubrid_save_to_glo()
{
}

/**
 * Read data from glo and send it to std output.
 */
function cubrid_send_glo()
{
}

/**
 * Add a tuple to a relation.
 */
function dbplus_add()
{
}

/**
 * Perform AQL query.
 */
function dbplus_aql()
{
}

/**
 * Get/Set database virtual current directory.
 */
function dbplus_chdir()
{
}

/**
 * Close a relation.
 */
function dbplus_close()
{
}

/**
 * Get current tuple from relation.
 */
function dbplus_curr()
{
}

/**
 * Get error string for given errorcode or last error.
 */
function dbplus_errcode()
{
}

/**
 * Get error code for last operation.
 */
function dbplus_errno()
{
}

/**
 * Set a constraint on a relation.
 */
function dbplus_find()
{
}

/**
 * Get first tuple from relation.
 */
function dbplus_first()
{
}

/**
 * Flush all changes made on a relation.
 */
function dbplus_flush()
{
}

/**
 * Free all locks held by this client.
 */
function dbplus_freealllocks()
{
}

/**
 * Release write lock on tuple.
 */
function dbplus_freelock()
{
}

/**
 * Free all tuple locks on given relation.
 */
function dbplus_freerlocks()
{
}

/**
 * Get a write lock on a tuple.
 */
function dbplus_getlock()
{
}

/**
 * Get an id number unique to a relation.
 */
function dbplus_getunique()
{
}

/**
 * Get information about a relation.
 */
function dbplus_info()
{
}

/**
 * Get last tuple from relation.
 */
function dbplus_last()
{
}

/**
 * Request write lock on relation.
 */
function dbplus_lockrel()
{
}

/**
 * Get next tuple from relation.
 */
function dbplus_next()
{
}

/**
 * Open relation file.
 */
function dbplus_open()
{
}

/**
 * Get previous tuple from relation.
 */
function dbplus_prev()
{
}

/**
 * Change relation permissions.
 */
function dbplus_rchperm()
{
}

/**
 * Creates a new DB++ relation.
 */
function dbplus_rcreate()
{
}

/**
 * Creates an exact but empty copy of a relation including indices.
 */
function dbplus_rcrtexact()
{
}

/**
 * Creates an empty copy of a relation with default indices.
 */
function dbplus_rcrtlike()
{
}

/**
 * Resolve host information for relation.
 */
function dbplus_resolve()
{
}

/**
 * Restore position.
 */
function dbplus_restorepos()
{
}

/**
 * Specify new primary key for a relation.
 */
function dbplus_rkeys()
{
}

/**
 * Open relation file local.
 */
function dbplus_ropen()
{
}

/**
 * Perform local (raw) AQL query.
 */
function dbplus_rquery()
{
}

/**
 * Rename a relation.
 */
function dbplus_rrename()
{
}

/**
 * Create a new secondary index for a relation.
 */
function dbplus_rsecindex()
{
}

/**
 * Remove relation from filesystem.
 */
function dbplus_runlink()
{
}

/**
 * Remove all tuples from relation.
 */
function dbplus_rzap()
{
}

/**
 * Save position.
 */
function dbplus_savepos()
{
}

/**
 * Set index.
 */
function dbplus_setindex()
{
}

/**
 * Set index by number.
 */
function dbplus_setindexbynumber()
{
}

/**
 * Perform SQL query.
 */
function dbplus_sql()
{
}

/**
 * Execute TCL code on server side.
 */
function dbplus_tcl()
{
}

/**
 * Remove tuple and return new current tuple.
 */
function dbplus_tremove()
{
}

/**
 * Undo.
 */
function dbplus_undo()
{
}

/**
 * Prepare undo.
 */
function dbplus_undoprepare()
{
}

/**
 * Give up write lock on relation.
 */
function dbplus_unlockrel()
{
}

/**
 * Remove a constraint from relation.
 */
function dbplus_unselect()
{
}

/**
 * Update specified tuple in relation.
 */
function dbplus_update()
{
}

/**
 * Request exclusive lock on relation.
 */
function dbplus_xlockrel()
{
}

/**
 * Free exclusive lock on relation.
 */
function dbplus_xunlockrel()
{
}

/**
 * Adds a record to a database.
 */
function dbase_add_record()
{
}

/**
 * Closes a database.
 */
function dbase_close()
{
}

/**
 * Creates a database.
 */
function dbase_create()
{
}

/**
 * Deletes a record from a database.
 */
function dbase_delete_record()
{
}

/**
 * Gets the header info of a database.
 */
function dbase_get_header_info()
{
}

/**
 * Gets a record from a database as an associative array.
 */
function dbase_get_record_with_names()
{
}

/**
 * Gets a record from a database as an indexed array.
 */
function dbase_get_record()
{
}

/**
 * Gets the number of fields of a database.
 */
function dbase_numfields()
{
}

/**
 * Gets the number of records in a database.
 */
function dbase_numrecords()
{
}

/**
 * Opens a database.
 */
function dbase_open()
{
}

/**
 * Packs a database.
 */
function dbase_pack()
{
}

/**
 * Replaces a record in a database.
 */
function dbase_replace_record()
{
}

/**
 * Find out how many fields are in a filePro database.
 */
function filepro_fieldcount()
{
}

/**
 * Gets the name of a field.
 */
function filepro_fieldname()
{
}

/**
 * Gets the type of a field.
 */
function filepro_fieldtype()
{
}

/**
 * Gets the width of a field.
 */
function filepro_fieldwidth()
{
}

/**
 * Retrieves data from a filePro database.
 */
function filepro_retrieve()
{
}

/**
 * Find out how many rows are in a filePro database.
 */
function filepro_rowcount()
{
}

/**
 * Read and verify the map file.
 */
function filepro()
{
}

/**
 * Add a user to a security database.
 */
function ibase_add_user()
{
}

/**
 * Return the number of rows that were affected by the previous query.
 */
function ibase_affected_rows()
{
}

/**
 * Initiates a backup task in the service manager and returns immediately.
 */
function ibase_backup()
{
}

/**
 * Add data into a newly created blob.
 */
function ibase_blob_add()
{
}

/**
 * Cancel creating blob.
 */
function ibase_blob_cancel()
{
}

/**
 * Close blob.
 */
function ibase_blob_close()
{
}

/**
 * Create a new blob for adding data.
 */
function ibase_blob_create()
{
}

/**
 * Output blob contents to browser.
 */
function ibase_blob_echo()
{
}

/**
 * Get len bytes data from open blob.
 */
function ibase_blob_get()
{
}

/**
 * Create blob, copy file in it, and close it.
 */
function ibase_blob_import()
{
}

/**
 * Return blob length and other useful info.
 */
function ibase_blob_info()
{
}

/**
 * Open blob for retrieving data parts.
 */
function ibase_blob_open()
{
}

/**
 * Close a connection to an InterBase database.
 */
function ibase_close()
{
}

/**
 * Commit a transaction without closing it.
 */
function ibase_commit_ret()
{
}

/**
 * Commit a transaction.
 */
function ibase_commit()
{
}

/**
 * Open a connection to a database.
 */
function ibase_connect()
{
}

/**
 * Request statistics about a database.
 */
function ibase_db_info()
{
}

/**
 * Delete a user from a security database.
 */
function ibase_delete_user()
{
}

/**
 * Drops a database.
 */
function ibase_drop_db()
{
}

/**
 * Return an error code.
 */
function ibase_errcode()
{
}

/**
 * Return error messages.
 */
function ibase_errmsg()
{
}

/**
 * Execute a previously prepared query.
 */
function ibase_execute()
{
}

/**
 * Fetch a result row from a query as an associative array.
 */
function ibase_fetch_assoc()
{
}

/**
 * Get an object from a InterBase database.
 */
function ibase_fetch_object()
{
}

/**
 * Fetch a row from an InterBase database.
 */
function ibase_fetch_row()
{
}

/**
 * Get information about a field.
 */
function ibase_field_info()
{
}

/**
 * Cancels a registered event handler.
 */
function ibase_free_event_handler()
{
}

/**
 * Free memory allocated by a prepared query.
 */
function ibase_free_query()
{
}

/**
 * Free a result set.
 */
function ibase_free_result()
{
}

/**
 * Increments the named generator and returns its new value.
 */
function ibase_gen_id()
{
}

/**
 * Execute a maintenance command on the database server.
 */
function ibase_maintain_db()
{
}

/**
 * Modify a user to a security database.
 */
function ibase_modify_user()
{
}

/**
 * Assigns a name to a result set.
 */
function ibase_name_result()
{
}

/**
 * Get the number of fields in a result set.
 */
function ibase_num_fields()
{
}

/**
 * Return the number of parameters in a prepared query.
 */
function ibase_num_params()
{
}

/**
 * Return information about a parameter in a prepared query.
 */
function ibase_param_info()
{
}

/**
 * Open a persistent connection to an InterBase database.
 */
function ibase_pconnect()
{
}

/**
 * Prepare a query for later binding of parameter placeholders and execution.
 */
function ibase_prepare()
{
}

/**
 * Execute a query on an InterBase database.
 */
function ibase_query()
{
}

/**
 * Initiates a restore task in the service manager and returns immediately.
 */
function ibase_restore()
{
}

/**
 * Roll back a transaction without closing it.
 */
function ibase_rollback_ret()
{
}

/**
 * Roll back a transaction.
 */
function ibase_rollback()
{
}

/**
 * Request information about a database server.
 */
function ibase_server_info()
{
}

/**
 * Connect to the service manager.
 */
function ibase_service_attach()
{
}

/**
 * Disconnect from the service manager.
 */
function ibase_service_detach()
{
}

/**
 * Register a callback function to be called when events are posted.
 */
function ibase_set_event_handler()
{
}

/**
 * Begin a transaction.
 */
function ibase_trans()
{
}

/**
 * Wait for an event to be posted by the database.
 */
function ibase_wait_event()
{
}

/**
 * Get number of affected rows in previous FrontBase operation.
 */
function fbsql_affected_rows()
{
}

/**
 * Enable or disable autocommit.
 */
function fbsql_autocommit()
{
}

/**
 * Get the size of a BLOB.
 */
function fbsql_blob_size()
{
}

/**
 * Change logged in user of the active connection.
 */
function fbsql_change_user()
{
}

/**
 * Get the size of a CLOB.
 */
function fbsql_clob_size()
{
}

/**
 * Close FrontBase connection.
 */
function fbsql_close()
{
}

/**
 * Commits a transaction to the database.
 */
function fbsql_commit()
{
}

/**
 * Open a connection to a FrontBase Server.
 */
function fbsql_connect()
{
}

/**
 * Create a BLOB.
 */
function fbsql_create_blob()
{
}

/**
 * Create a CLOB.
 */
function fbsql_create_clob()
{
}

/**
 * Create a FrontBase database.
 */
function fbsql_create_db()
{
}

/**
 * Move internal result pointer.
 */
function fbsql_data_seek()
{
}

/**
 * Sets or retrieves the password for a FrontBase database.
 */
function fbsql_database_password()
{
}

/**
 * Get or set the database name used with a connection.
 */
function fbsql_database()
{
}

/**
 * Send a FrontBase query.
 */
function fbsql_db_query()
{
}

/**
 * Get the status for a given database.
 */
function fbsql_db_status()
{
}

/**
 * Drop (delete) a FrontBase database.
 */
function fbsql_drop_db()
{
}

/**
 * Returns the error number from previous operation.
 */
function fbsql_errno()
{
}

/**
 * Returns the error message from previous operation.
 */
function fbsql_error()
{
}

/**
 * Fetch a result row as an associative array, a numeric array, or both.
 */
function fbsql_fetch_array()
{
}

/**
 * Fetch a result row as an associative array.
 */
function fbsql_fetch_assoc()
{
}

/**
 * Get column information from a result and return as an object.
 */
function fbsql_fetch_field()
{
}

/**
 * Get the length of each output in a result.
 */
function fbsql_fetch_lengths()
{
}

/**
 * Fetch a result row as an object.
 */
function fbsql_fetch_object()
{
}

/**
 * Get a result row as an enumerated array.
 */
function fbsql_fetch_row()
{
}

/**
 * Get the flags associated with the specified field in a result.
 */
function fbsql_field_flags()
{
}

/**
 * Returns the length of the specified field.
 */
function fbsql_field_len()
{
}

/**
 * Get the name of the specified field in a result.
 */
function fbsql_field_name()
{
}

/**
 * Set result pointer to a specified field offset.
 */
function fbsql_field_seek()
{
}

/**
 * Get name of the table the specified field is in.
 */
function fbsql_field_table()
{
}

/**
 * Get the type of the specified field in a result.
 */
function fbsql_field_type()
{
}

/**
 * Free result memory.
 */
function fbsql_free_result()
{
}

/**
 * .
 */
function fbsql_get_autostart_info()
{
}

/**
 * Get or set the host name used with a connection.
 */
function fbsql_hostname()
{
}

/**
 * Get the id generated from the previous INSERT operation.
 */
function fbsql_insert_id()
{
}

/**
 * List databases available on a FrontBase server.
 */
function fbsql_list_dbs()
{
}

/**
 * List FrontBase result fields.
 */
function fbsql_list_fields()
{
}

/**
 * List tables in a FrontBase database.
 */
function fbsql_list_tables()
{
}

/**
 * Move the internal result pointer to the next result.
 */
function fbsql_next_result()
{
}

/**
 * Get number of fields in result.
 */
function fbsql_num_fields()
{
}

/**
 * Get number of rows in result.
 */
function fbsql_num_rows()
{
}

/**
 * Get or set the user password used with a connection.
 */
function fbsql_password()
{
}

/**
 * Open a persistent connection to a FrontBase Server.
 */
function fbsql_pconnect()
{
}

/**
 * Send a FrontBase query.
 */
function fbsql_query()
{
}

/**
 * Read a BLOB from the database.
 */
function fbsql_read_blob()
{
}

/**
 * Read a CLOB from the database.
 */
function fbsql_read_clob()
{
}

/**
 * Get result data.
 */
function fbsql_result()
{
}

/**
 * Rollback a transaction to the database.
 */
function fbsql_rollback()
{
}

/**
 * Get the number of rows affected by the last statement.
 */
function fbsql_rows_fetched()
{
}

/**
 * Select a FrontBase database.
 */
function fbsql_select_db()
{
}

/**
 * Change input/output character set.
 */
function fbsql_set_characterset()
{
}

/**
 * Set the LOB retrieve mode for a FrontBase result set.
 */
function fbsql_set_lob_mode()
{
}

/**
 * Change the password for a given user.
 */
function fbsql_set_password()
{
}

/**
 * Set the transaction locking and isolation.
 */
function fbsql_set_transaction()
{
}

/**
 * Start a database on local or remote server.
 */
function fbsql_start_db()
{
}

/**
 * Stop a database on local or remote server.
 */
function fbsql_stop_db()
{
}

/**
 * Get table name of field.
 */
function fbsql_table_name()
{
}

/**
 * Alias of fbsql_table_name.
 */
function fbsql_tablename()
{
}

/**
 * Get or set the username for the connection.
 */
function fbsql_username()
{
}

/**
 * Enable or disable FrontBase warnings.
 */
function fbsql_warnings()
{
}

/**
 * Returns or sets the AUTOCOMMIT state for a database connection.
 */
function db2_autocommit()
{
}

/**
 * Binds a PHP variable to an SQL statement parameter.
 */
function db2_bind_param()
{
}

/**
 * Returns an object with properties that describe the DB2 database client.
 */
function db2_client_info()
{
}

/**
 * Closes a database connection.
 */
function db2_close()
{
}

/**
 * Returns a result set listing the columns and associated privileges for a table.
 */
function db2_column_privileges()
{
}

/**
 * Returns a result set listing the columns and associated metadata for a table.
 */
function db2_columns()
{
}

/**
 * Commits a transaction.
 */
function db2_commit()
{
}

/**
 * Returns a string containing the SQLSTATE returned by the last connection attempt.
 */
function db2_conn_error()
{
}

/**
 * Returns the last connection error message and SQLCODE value.
 */
function db2_conn_errormsg()
{
}

/**
 * Returns a connection to a database.
 */
function db2_connect()
{
}

/**
 * Returns the cursor type used by a statement resource.
 */
function db2_cursor_type()
{
}

/**
 * Used to escape certain characters.
 */
function db2_escape_string()
{
}

/**
 * Executes an SQL statement directly.
 */
function db2_exec()
{
}

/**
 * Executes a prepared SQL statement.
 */
function db2_execute()
{
}

/**
 * Returns an array, indexed by column position, representing a row in a result set.
 */
function db2_fetch_array()
{
}

/**
 * Returns an array, indexed by column name, representing a row in a result set.
 */
function db2_fetch_assoc()
{
}

/**
 * Returns an array, indexed by both column name and position, representing a row in a result set.
 */
function db2_fetch_both()
{
}

/**
 * Returns an object with properties representing columns in the fetched row.
 */
function db2_fetch_object()
{
}

/**
 * Sets the result set pointer to the next row or requested row.
 */
function db2_fetch_row()
{
}

/**
 * Returns the maximum number of bytes required to display a column.
 */
function db2_field_display_size()
{
}

/**
 * Returns the name of the column in the result set.
 */
function db2_field_name()
{
}

/**
 * Returns the position of the named column in a result set.
 */
function db2_field_num()
{
}

/**
 * Returns the precision of the indicated column in a result set.
 */
function db2_field_precision()
{
}

/**
 * Returns the scale of the indicated column in a result set.
 */
function db2_field_scale()
{
}

/**
 * Returns the data type of the indicated column in a result set.
 */
function db2_field_type()
{
}

/**
 * Returns the width of the current value of the indicated column in a result set.
 */
function db2_field_width()
{
}

/**
 * Returns a result set listing the foreign keys for a table.
 */
function db2_foreign_keys()
{
}

/**
 * Frees resources associated with a result set.
 */
function db2_free_result()
{
}

/**
 * Frees resources associated with the indicated statement resource.
 */
function db2_free_stmt()
{
}

/**
 * Retrieves an option value for a statement resource or a connection resource.
 */
function db2_get_option()
{
}

/**
 * Returns the auto generated ID of the last insert query that successfully   executed on this connection.
 */
function db2_last_insert_id()
{
}

/**
 * Gets a user defined size of LOB files with each invocation.
 */
function db2_lob_read()
{
}

/**
 * Requests the next result set from a stored procedure.
 */
function db2_next_result()
{
}

/**
 * Returns the number of fields contained in a result set.
 */
function db2_num_fields()
{
}

/**
 * Returns the number of rows affected by an SQL statement.
 */
function db2_num_rows()
{
}

/**
 * Closes a persistent database connection.
 */
function db2_pclose()
{
}

/**
 * Returns a persistent connection to a database.
 */
function db2_pconnect()
{
}

/**
 * Prepares an SQL statement to be executed.
 */
function db2_prepare()
{
}

/**
 * Returns a result set listing primary keys for a table.
 */
function db2_primary_keys()
{
}

/**
 * Returns a result set listing stored procedure parameters.
 */
function db2_procedure_columns()
{
}

/**
 * Returns a result set listing the stored procedures registered in a database.
 */
function db2_procedures()
{
}

/**
 * Returns a single column from a row in the result set.
 */
function db2_result()
{
}

/**
 * Rolls back a transaction.
 */
function db2_rollback()
{
}

/**
 * Returns an object with properties that describe the DB2 database server.
 */
function db2_server_info()
{
}

/**
 * Set options for connection or statement resources.
 */
function db2_set_option()
{
}

/**
 * Returns a result set listing the unique row identifier columns for a table.
 */
function db2_special_columns()
{
}

/**
 * Returns a result set listing the index and statistics for a table.
 */
function db2_statistics()
{
}

/**
 * Returns a string containing the SQLSTATE returned by an SQL statement.
 */
function db2_stmt_error()
{
}

/**
 * Returns a string containing the last SQL statement error message.
 */
function db2_stmt_errormsg()
{
}

/**
 * Returns a result set listing the tables and associated privileges in a database.
 */
function db2_table_privileges()
{
}

/**
 * Returns a result set listing the tables and associated metadata in a database.
 */
function db2_tables()
{
}

/**
 * Get number of rows affected by a query.
 */
function ifx_affected_rows()
{
}

/**
 * Set the default blob mode for all select queries.
 */
function ifx_blobinfile_mode()
{
}

/**
 * Set the default byte mode.
 */
function ifx_byteasvarchar()
{
}

/**
 * Close Informix connection.
 */
function ifx_close()
{
}

/**
 * Open Informix server connection.
 */
function ifx_connect()
{
}

/**
 * Duplicates the given blob object.
 */
function ifx_copy_blob()
{
}

/**
 * Creates an blob object.
 */
function ifx_create_blob()
{
}

/**
 * Creates an char object.
 */
function ifx_create_char()
{
}

/**
 * Execute a previously prepared SQL-statement.
 */
function ifx_do()
{
}

/**
 * Returns error code of last Informix call.
 */
function ifx_error()
{
}

/**
 * Returns error message of last Informix call.
 */
function ifx_errormsg()
{
}

/**
 * Get row as an associative array.
 */
function ifx_fetch_row()
{
}

/**
 * List of SQL fieldproperties.
 */
function ifx_fieldproperties()
{
}

/**
 * List of Informix SQL fields.
 */
function ifx_fieldtypes()
{
}

/**
 * Deletes the blob object.
 */
function ifx_free_blob()
{
}

/**
 * Deletes the char object.
 */
function ifx_free_char()
{
}

/**
 * Releases resources for the query.
 */
function ifx_free_result()
{
}

/**
 * Return the content of a blob object.
 */
function ifx_get_blob()
{
}

/**
 * Return the content of the char object.
 */
function ifx_get_char()
{
}

/**
 * Get the contents of sqlca.sqlerrd[0..5] after a query.
 */
function ifx_getsqlca()
{
}

/**
 * Formats all rows of a query into a HTML table.
 */
function ifx_htmltbl_result()
{
}

/**
 * Sets the default return value on a fetch row.
 */
function ifx_nullformat()
{
}

/**
 * Returns the number of columns in the query.
 */
function ifx_num_fields()
{
}

/**
 * Count the rows already fetched from a query.
 */
function ifx_num_rows()
{
}

/**
 * Open persistent Informix connection.
 */
function ifx_pconnect()
{
}

/**
 * Prepare an SQL-statement for execution.
 */
function ifx_prepare()
{
}

/**
 * Send Informix query.
 */
function ifx_query()
{
}

/**
 * Set the default text mode.
 */
function ifx_textasvarchar()
{
}

/**
 * Updates the content of the blob object.
 */
function ifx_update_blob()
{
}

/**
 * Updates the content of the char object.
 */
function ifx_update_char()
{
}

/**
 * Deletes the slob object.
 */
function ifxus_close_slob()
{
}

/**
 * Creates an slob object and opens it.
 */
function ifxus_create_slob()
{
}

/**
 * Deletes the slob object.
 */
function ifxus_free_slob()
{
}

/**
 * Opens an slob object.
 */
function ifxus_open_slob()
{
}

/**
 * Reads nbytes of the slob object.
 */
function ifxus_read_slob()
{
}

/**
 * Sets the current file or seek position.
 */
function ifxus_seek_slob()
{
}

/**
 * Returns the current file or seek position.
 */
function ifxus_tell_slob()
{
}

/**
 * Writes a string into the slob object.
 */
function ifxus_write_slob()
{
}

/**
 * Test if the connection is using autocommit.
 */
function ingres_autocommit_state()
{
}

/**
 * Switch autocommit on or off.
 */
function ingres_autocommit()
{
}

/**
 * Returns the installation character set.
 */
function ingres_charset()
{
}

/**
 * Close an Ingres database connection.
 */
function ingres_close()
{
}

/**
 * Commit a transaction.
 */
function ingres_commit()
{
}

/**
 * Open a connection to an Ingres database.
 */
function ingres_connect()
{
}

/**
 * Get a cursor name for a given result resource.
 */
function ingres_cursor()
{
}

/**
 * Get the last Ingres error number generated.
 */
function ingres_errno()
{
}

/**
 * Get a meaningful error message for the last error generated.
 */
function ingres_error()
{
}

/**
 * Get the last SQLSTATE error code generated.
 */
function ingres_errsqlstate()
{
}

/**
 * Escape special characters for use in a query.
 */
function ingres_escape_string()
{
}

/**
 * Execute a prepared query.
 */
function ingres_execute()
{
}

/**
 * Fetch a row of result into an array.
 */
function ingres_fetch_array()
{
}

/**
 * Fetch a row of result into an associative array.
 */
function ingres_fetch_assoc()
{
}

/**
 * Fetch a row of result into an object.
 */
function ingres_fetch_object()
{
}

/**
 * Get the return value from a procedure call.
 */
function ingres_fetch_proc_return()
{
}

/**
 * Fetch a row of result into an enumerated array.
 */
function ingres_fetch_row()
{
}

/**
 * Get the length of a field.
 */
function ingres_field_length()
{
}

/**
 * Get the name of a field in a query result.
 */
function ingres_field_name()
{
}

/**
 * Test if a field is nullable.
 */
function ingres_field_nullable()
{
}

/**
 * Get the precision of a field.
 */
function ingres_field_precision()
{
}

/**
 * Get the scale of a field.
 */
function ingres_field_scale()
{
}

/**
 * Get the type of a field in a query result.
 */
function ingres_field_type()
{
}

/**
 * Free the resources associated with a result identifier.
 */
function ingres_free_result()
{
}

/**
 * Get the next Ingres error.
 */
function ingres_next_error()
{
}

/**
 * Get the number of fields returned by the last query.
 */
function ingres_num_fields()
{
}

/**
 * Get the number of rows affected or returned by a query.
 */
function ingres_num_rows()
{
}

/**
 * Open a persistent connection to an Ingres database.
 */
function ingres_pconnect()
{
}

/**
 * Prepare a query for later execution.
 */
function ingres_prepare()
{
}

/**
 * Send an SQL query to Ingres.
 */
function ingres_query()
{
}

/**
 * Set the row position before fetching data.
 */
function ingres_result_seek()
{
}

/**
 * Roll back a transaction.
 */
function ingres_rollback()
{
}

/**
 * Set environment features controlling output options.
 */
function ingres_set_environment()
{
}

/**
 * Send an unbuffered  SQL query to Ingres.
 */
function ingres_unbuffered_query()
{
}

/**
 * Gets the number of affected rows in a previous MaxDB operation.
 */
function maxdb_affected_rows()
{
}

/**
 * Turns on or off auto-commiting database modifications.
 */
function maxdb_autocommit()
{
}

/**
 * Alias of maxdb_stmt_bind_param.
 */
function maxdb_bind_param()
{
}

/**
 * Alias of maxdb_stmt_bind_result.
 */
function maxdb_bind_result()
{
}

/**
 * Changes the user of the specified database connection.
 */
function maxdb_change_user()
{
}

/**
 * Returns the default character set for the database connection.
 */
function maxdb_character_set_name()
{
}

/**
 * Alias of maxdb_character_set_name.
 */
function maxdb_client_encoding()
{
}

/**
 * Alias of maxdb_stmt_close_long_data.
 */
function maxdb_close_long_data()
{
}

/**
 * Closes a previously opened database connection.
 */
function maxdb_close()
{
}

/**
 * Commits the current transaction.
 */
function maxdb_commit()
{
}

/**
 * Returns the error code from last connect call.
 */
function maxdb_connect_errno()
{
}

/**
 * Returns a string description of the last connect error.
 */
function maxdb_connect_error()
{
}

/**
 * Open a new connection to the MaxDB server.
 */
function maxdb_connect()
{
}

/**
 * Adjusts the result pointer to an arbitary row in the result.
 */
function maxdb_data_seek()
{
}

/**
 * Performs debugging operations.
 */
function maxdb_debug()
{
}

/**
 * Disable reads from master.
 */
function maxdb_disable_reads_from_master()
{
}

/**
 * Disable RPL parse.
 */
function maxdb_disable_rpl_parse()
{
}

/**
 * Dump debugging information into the log.
 */
function maxdb_dump_debug_info()
{
}

/**
 * Open a connection to an embedded MaxDB server.
 */
function maxdb_embedded_connect()
{
}

/**
 * Enable reads from master.
 */
function maxdb_enable_reads_from_master()
{
}

/**
 * Enable RPL parse.
 */
function maxdb_enable_rpl_parse()
{
}

/**
 * Returns the error code for the most recent function call.
 */
function maxdb_errno()
{
}

/**
 * Returns a string description of the last error.
 */
function maxdb_error()
{
}

/**
 * Alias of maxdb_real_escape_string.
 */
function maxdb_escape_string()
{
}

/**
 * Alias of maxdb_stmt_execute.
 */
function maxdb_execute()
{
}

/**
 * Fetch a result row as an associative, a numeric array, or both.
 */
function maxdb_fetch_array()
{
}

/**
 * Fetch a result row as an associative array.
 */
function maxdb_fetch_assoc()
{
}

/**
 * Fetch meta-data for a single field.
 */
function maxdb_fetch_field_direct()
{
}

/**
 * Returns the next field in the result set.
 */
function maxdb_fetch_field()
{
}

/**
 * Returns an array of resources representing the fields in a result set.
 */
function maxdb_fetch_fields()
{
}

/**
 * Returns the lengths of the columns of the current row in the result set.
 */
function maxdb_fetch_lengths()
{
}

/**
 * Returns the current row of a result set as an object.
 */
function maxdb_fetch_object()
{
}

/**
 * Get a result row as an enumerated array.
 */
function maxdb_fetch_row()
{
}

/**
 * Alias of maxdb_stmt_fetch.
 */
function maxdb_fetch()
{
}

/**
 * Returns the number of columns for the most recent query.
 */
function maxdb_field_count()
{
}

/**
 * Set result pointer to a specified field offset.
 */
function maxdb_field_seek()
{
}

/**
 * Get current field offset of a result pointer.
 */
function maxdb_field_tell()
{
}

/**
 * Frees the memory associated with a result.
 */
function maxdb_free_result()
{
}

/**
 * Returns the MaxDB client version as a string.
 */
function maxdb_get_client_info()
{
}

/**
 * Get MaxDB client info.
 */
function maxdb_get_client_version()
{
}

/**
 * Returns a string representing the type of connection used.
 */
function maxdb_get_host_info()
{
}

/**
 * Alias of maxdb_stmt_result_metadata.
 */
function maxdb_get_metadata()
{
}

/**
 * Returns the version of the MaxDB protocol used.
 */
function maxdb_get_proto_info()
{
}

/**
 * Returns the version of the MaxDB server.
 */
function maxdb_get_server_info()
{
}

/**
 * Returns the version of the MaxDB server as an integer.
 */
function maxdb_get_server_version()
{
}

/**
 * Retrieves information about the most recently executed query.
 */
function maxdb_info()
{
}

/**
 * Initializes MaxDB and returns an resource for use with maxdb_real_connect.
 */
function maxdb_init()
{
}

/**
 * Returns the auto generated id used in the last query.
 */
function maxdb_insert_id()
{
}

/**
 * Disconnects from a MaxDB server.
 */
function maxdb_kill()
{
}

/**
 * Enforce execution of a query on the master in a master/slave setup.
 */
function maxdb_master_query()
{
}

/**
 * Check if there any more query results from a multi query.
 */
function maxdb_more_results()
{
}

/**
 * Performs a query on the database.
 */
function maxdb_multi_query()
{
}

/**
 * Prepare next result from multi_query.
 */
function maxdb_next_result()
{
}

/**
 * Get the number of fields in a result.
 */
function maxdb_num_fields()
{
}

/**
 * Gets the number of rows in a result.
 */
function maxdb_num_rows()
{
}

/**
 * Set options.
 */
function maxdb_options()
{
}

/**
 * Alias of maxdb_stmt_param_count.
 */
function maxdb_param_count()
{
}

/**
 * Pings a server connection, or tries to reconnect if the connection has gone down.
 */
function maxdb_ping()
{
}

/**
 * Prepare an SQL statement for execution.
 */
function maxdb_prepare()
{
}

/**
 * Performs a query on the database.
 */
function maxdb_query()
{
}

/**
 * Opens a connection to a MaxDB server.
 */
function maxdb_real_connect()
{
}

/**
 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection.
 */
function maxdb_real_escape_string()
{
}

/**
 * Execute an SQL query.
 */
function maxdb_real_query()
{
}

/**
 * Enables or disables internal report functions.
 */
function maxdb_report()
{
}

/**
 * Rolls back current transaction.
 */
function maxdb_rollback()
{
}

/**
 * Check if RPL parse is enabled.
 */
function maxdb_rpl_parse_enabled()
{
}

/**
 * RPL probe.
 */
function maxdb_rpl_probe()
{
}

/**
 * Returns RPL query type.
 */
function maxdb_rpl_query_type()
{
}

/**
 * Selects the default database for database queries.
 */
function maxdb_select_db()
{
}

/**
 * Alias of maxdb_stmt_send_long_data.
 */
function maxdb_send_long_data()
{
}

/**
 * Send the query and return.
 */
function maxdb_send_query()
{
}

/**
 * Shut down the embedded server.
 */
function maxdb_server_end()
{
}

/**
 * Initialize embedded server.
 */
function maxdb_server_init()
{
}

/**
 * Alias of maxdb_options.
 */
function maxdb_set_opt()
{
}

/**
 * Returns the SQLSTATE error from previous MaxDB operation.
 */
function maxdb_sqlstate()
{
}

/**
 * Used for establishing secure connections using SSL.
 */
function maxdb_ssl_set()
{
}

/**
 * Gets the current system status.
 */
function maxdb_stat()
{
}

/**
 * Returns the total number of rows changed, deleted, or  inserted by the last executed statement.
 */
function maxdb_stmt_affected_rows()
{
}

/**
 * Binds variables to a prepared statement as parameters.
 */
function maxdb_stmt_bind_param()
{
}

/**
 * Binds variables to a prepared statement for result storage.
 */
function maxdb_stmt_bind_result()
{
}

/**
 * Ends a sequence of maxdb_stmt_send_long_data.
 */
function maxdb_stmt_close_long_data()
{
}

/**
 * Closes a prepared statement.
 */
function maxdb_stmt_close()
{
}

/**
 * Seeks to an arbitray row in statement result set.
 */
function maxdb_stmt_data_seek()
{
}

/**
 * Returns the error code for the most recent statement call.
 */
function maxdb_stmt_errno()
{
}

/**
 * Returns a string description for last statement error.
 */
function maxdb_stmt_error()
{
}

/**
 * Executes a prepared Query.
 */
function maxdb_stmt_execute()
{
}

/**
 * Fetch results from a prepared statement into the bound variables.
 */
function maxdb_stmt_fetch()
{
}

/**
 * Frees stored result memory for the given statement handle.
 */
function maxdb_stmt_free_result()
{
}

/**
 * Initializes a statement and returns an resource for use with maxdb_stmt_prepare.
 */
function maxdb_stmt_init()
{
}

/**
 * Return the number of rows in statements result set.
 */
function maxdb_stmt_num_rows()
{
}

/**
 * Returns the number of parameter for the given statement.
 */
function maxdb_stmt_param_count()
{
}

/**
 * Prepare an SQL statement for execution.
 */
function maxdb_stmt_prepare()
{
}

/**
 * Resets a prepared statement.
 */
function maxdb_stmt_reset()
{
}

/**
 * Returns result set metadata from a prepared statement.
 */
function maxdb_stmt_result_metadata()
{
}

/**
 * Send data in blocks.
 */
function maxdb_stmt_send_long_data()
{
}

/**
 * Returns SQLSTATE error from previous statement operation.
 */
function maxdb_stmt_sqlstate()
{
}

/**
 * Transfers a result set from a prepared statement.
 */
function maxdb_stmt_store_result()
{
}

/**
 * Transfers a result set from the last query.
 */
function maxdb_store_result()
{
}

/**
 * Returns the thread ID for the current connection.
 */
function maxdb_thread_id()
{
}

/**
 * Returns whether thread safety is given or not.
 */
function maxdb_thread_safe()
{
}

/**
 * Initiate a result set retrieval.
 */
function maxdb_use_result()
{
}

/**
 * Returns the number of warnings from the last query for the given link.
 */
function maxdb_warning_count()
{
}

/**
 * Callback When Deleting Documents.
 */
function log_cmd_delete()
{
}

/**
 * Callback When Inserting Documents.
 */
function log_cmd_insert()
{
}

/**
 * Callback When Updating Documents.
 */
function log_cmd_update()
{
}

/**
 * Callback When Retrieving Next Cursor Batch.
 */
function log_getmore()
{
}

/**
 * Callback When Executing KILLCURSOR operations.
 */
function log_killcursor()
{
}

/**
 * Callback When Reading the MongoDB reply.
 */
function log_reply()
{
}

/**
 * Callback When Writing Batches.
 */
function log_write_batch()
{
}

/**
 * Deserializes a BSON object into a PHP array.
 */
function bson_decode()
{
}

/**
 * Serializes a PHP variable into a BSON string.
 */
function bson_encode()
{
}

/**
 * Returns number of affected rows.
 */
function msql_affected_rows()
{
}

/**
 * Close mSQL connection.
 */
function msql_close()
{
}

/**
 * Open mSQL connection.
 */
function msql_connect()
{
}

/**
 * Create mSQL database.
 */
function msql_create_db()
{
}

/**
 * Alias of msql_create_db.
 */
function msql_createdb()
{
}

/**
 * Move internal row pointer.
 */
function msql_data_seek()
{
}

/**
 * Send mSQL query.
 */
function msql_db_query()
{
}

/**
 * Alias of msql_result.
 */
function msql_dbname()
{
}

/**
 * Drop (delete) mSQL database.
 */
function msql_drop_db()
{
}

/**
 * Returns error message of last msql call.
 */
function msql_error()
{
}

/**
 * Fetch row as array.
 */
function msql_fetch_array()
{
}

/**
 * Get field information.
 */
function msql_fetch_field()
{
}

/**
 * Fetch row as object.
 */
function msql_fetch_object()
{
}

/**
 * Get row as enumerated array.
 */
function msql_fetch_row()
{
}

/**
 * Get field flags.
 */
function msql_field_flags()
{
}

/**
 * Get field length.
 */
function msql_field_len()
{
}

/**
 * Get the name of the specified field in a result.
 */
function msql_field_name()
{
}

/**
 * Set field offset.
 */
function msql_field_seek()
{
}

/**
 * Get table name for field.
 */
function msql_field_table()
{
}

/**
 * Get field type.
 */
function msql_field_type()
{
}

/**
 * Alias of msql_field_flags.
 */
function msql_fieldflags()
{
}

/**
 * Alias of msql_field_len.
 */
function msql_fieldlen()
{
}

/**
 * Alias of msql_field_name.
 */
function msql_fieldname()
{
}

/**
 * Alias of msql_field_table.
 */
function msql_fieldtable()
{
}

/**
 * Alias of msql_field_type.
 */
function msql_fieldtype()
{
}

/**
 * Free result memory.
 */
function msql_free_result()
{
}

/**
 * List mSQL databases on server.
 */
function msql_list_dbs()
{
}

/**
 * List result fields.
 */
function msql_list_fields()
{
}

/**
 * List tables in an mSQL database.
 */
function msql_list_tables()
{
}

/**
 * Get number of fields in result.
 */
function msql_num_fields()
{
}

/**
 * Get number of rows in result.
 */
function msql_num_rows()
{
}

/**
 * Alias of msql_num_fields.
 */
function msql_numfields()
{
}

/**
 * Alias of msql_num_rows.
 */
function msql_numrows()
{
}

/**
 * Open persistent mSQL connection.
 */
function msql_pconnect()
{
}

/**
 * Send mSQL query.
 */
function msql_query()
{
}

/**
 * Alias of sql_regcase.
 */
function msql_regcase()
{
}

/**
 * Get result data.
 */
function msql_result()
{
}

/**
 * Select mSQL database.
 */
function msql_select_db()
{
}

/**
 * Alias of msql_result.
 */
function msql_tablename()
{
}

/**
 * Alias of msql_db_query.
 */
function msql()
{
}

/**
 * Adds a parameter to a stored procedure or a remote stored procedure.
 */
function mssql_bind()
{
}

/**
 * Close MS SQL Server connection.
 */
function mssql_close()
{
}

/**
 * Open MS SQL server connection.
 */
function mssql_connect()
{
}

/**
 * Moves internal row pointer.
 */
function mssql_data_seek()
{
}

/**
 * Executes a stored procedure on a MS SQL server database.
 */
function mssql_execute()
{
}

/**
 * Fetch a result row as an associative array, a numeric array, or both.
 */
function mssql_fetch_array()
{
}

/**
 * Returns an associative array of the current row in the result.
 */
function mssql_fetch_assoc()
{
}

/**
 * Returns the next batch of records.
 */
function mssql_fetch_batch()
{
}

/**
 * Get field information.
 */
function mssql_fetch_field()
{
}

/**
 * Fetch row as object.
 */
function mssql_fetch_object()
{
}

/**
 * Get row as enumerated array.
 */
function mssql_fetch_row()
{
}

/**
 * Get the length of a field.
 */
function mssql_field_length()
{
}

/**
 * Get the name of a field.
 */
function mssql_field_name()
{
}

/**
 * Seeks to the specified field offset.
 */
function mssql_field_seek()
{
}

/**
 * Gets the type of a field.
 */
function mssql_field_type()
{
}

/**
 * Free result memory.
 */
function mssql_free_result()
{
}

/**
 * Free statement memory.
 */
function mssql_free_statement()
{
}

/**
 * Returns the last message from the server.
 */
function mssql_get_last_message()
{
}

/**
 * Converts a 16 byte binary GUID to a string.
 */
function mssql_guid_string()
{
}

/**
 * Initializes a stored procedure or a remote stored procedure.
 */
function mssql_init()
{
}

/**
 * Sets the minimum error severity.
 */
function mssql_min_error_severity()
{
}

/**
 * Sets the minimum message severity.
 */
function mssql_min_message_severity()
{
}

/**
 * Move the internal result pointer to the next result.
 */
function mssql_next_result()
{
}

/**
 * Gets the number of fields in result.
 */
function mssql_num_fields()
{
}

/**
 * Gets the number of rows in result.
 */
function mssql_num_rows()
{
}

/**
 * Open persistent MS SQL connection.
 */
function mssql_pconnect()
{
}

/**
 * Send MS SQL query.
 */
function mssql_query()
{
}

/**
 * Get result data.
 */
function mssql_result()
{
}

/**
 * Returns the number of records affected by the query.
 */
function mssql_rows_affected()
{
}

/**
 * Select MS SQL database.
 */
function mssql_select_db()
{
}

/**
 * Get number of affected rows in previous MySQL operation.
 */
function mysql_affected_rows()
{
}

/**
 * Returns the name of the character set.
 */
function mysql_client_encoding()
{
}

/**
 * Close MySQL connection.
 */
function mysql_close()
{
}

/**
 * Open a connection to a MySQL Server.
 */
function mysql_connect()
{
}

/**
 * Create a MySQL database.
 */
function mysql_create_db()
{
}

/**
 * Move internal result pointer.
 */
function mysql_data_seek()
{
}

/**
 * Retrieves database name from the call to mysql_list_dbs.
 */
function mysql_db_name()
{
}

/**
 * Selects a database and executes a query on it.
 */
function mysql_db_query()
{
}

/**
 * Drop (delete) a MySQL database.
 */
function mysql_drop_db()
{
}

/**
 * Returns the numerical value of the error message from previous MySQL operation.
 */
function mysql_errno()
{
}

/**
 * Returns the text of the error message from previous MySQL operation.
 */
function mysql_error()
{
}

/**
 * Escapes a string for use in a mysql_query.
 */
function mysql_escape_string()
{
}

/**
 * Fetch a result row as an associative array, a numeric array, or both.
 */
function mysql_fetch_array()
{
}

/**
 * Fetch a result row as an associative array.
 */
function mysql_fetch_assoc()
{
}

/**
 * Get column information from a result and return as an object.
 */
function mysql_fetch_field()
{
}

/**
 * Get the length of each output in a result.
 */
function mysql_fetch_lengths()
{
}

/**
 * Fetch a result row as an object.
 */
function mysql_fetch_object()
{
}

/**
 * Get a result row as an enumerated array.
 */
function mysql_fetch_row()
{
}

/**
 * Get the flags associated with the specified field in a result.
 */
function mysql_field_flags()
{
}

/**
 * Returns the length of the specified field.
 */
function mysql_field_len()
{
}

/**
 * Get the name of the specified field in a result.
 */
function mysql_field_name()
{
}

/**
 * Set result pointer to a specified field offset.
 */
function mysql_field_seek()
{
}

/**
 * Get name of the table the specified field is in.
 */
function mysql_field_table()
{
}

/**
 * Get the type of the specified field in a result.
 */
function mysql_field_type()
{
}

/**
 * Free result memory.
 */
function mysql_free_result()
{
}

/**
 * Get MySQL client info.
 */
function mysql_get_client_info()
{
}

/**
 * Get MySQL host info.
 */
function mysql_get_host_info()
{
}

/**
 * Get MySQL protocol info.
 */
function mysql_get_proto_info()
{
}

/**
 * Get MySQL server info.
 */
function mysql_get_server_info()
{
}

/**
 * Get information about the most recent query.
 */
function mysql_info()
{
}

/**
 * Get the ID generated in the last query.
 */
function mysql_insert_id()
{
}

/**
 * List databases available on a MySQL server.
 */
function mysql_list_dbs()
{
}

/**
 * List MySQL table fields.
 */
function mysql_list_fields()
{
}

/**
 * List MySQL processes.
 */
function mysql_list_processes()
{
}

/**
 * List tables in a MySQL database.
 */
function mysql_list_tables()
{
}

/**
 * Get number of fields in result.
 */
function mysql_num_fields()
{
}

/**
 * Get number of rows in result.
 */
function mysql_num_rows()
{
}

/**
 * Open a persistent connection to a MySQL server.
 */
function mysql_pconnect()
{
}

/**
 * Ping a server connection or reconnect if there is no connection.
 */
function mysql_ping()
{
}

/**
 * Send a MySQL query.
 */
function mysql_query()
{
}

/**
 * Escapes special characters in a string for use in an SQL statement.
 */
function mysql_real_escape_string()
{
}

/**
 * Get result data.
 */
function mysql_result()
{
}

/**
 * Select a MySQL database.
 */
function mysql_select_db()
{
}

/**
 * Sets the client character set.
 */
function mysql_set_charset()
{
}

/**
 * Get current system status.
 */
function mysql_stat()
{
}

/**
 * Get table name of field.
 */
function mysql_tablename()
{
}

/**
 * Return the current thread ID.
 */
function mysql_thread_id()
{
}

/**
 * Send an SQL query to MySQL without fetching and buffering the result rows..
 */
function mysql_unbuffered_query()
{
}

/**
 * Gets the number of affected rows in a previous MySQL operation.
 */
function mysqli_affected_rows()
{
}

/**
 * Turns on or off auto-committing database modifications.
 */
function mysqli_autocommit()
{
}

/**
 * Starts a transaction.
 */
function mysqli_begin_transaction()
{
}

/**
 * Changes the user of the specified database connection.
 */
function mysqli_change_user()
{
}

/**
 * Returns the default character set for the database connection.
 */
function mysqli_character_set_name()
{
}

/**
 * Get MySQL client info.
 */
function mysqli_get_client_info()
{
}

/**
 * Returns the MySQL client version as an integer.
 */
function mysqli_get_client_version()
{
}

/**
 * Closes a previously opened database connection.
 */
function mysqli_close()
{
}

/**
 * Commits the current transaction.
 */
function mysqli_commit()
{
}

/**
 * Returns the error code from last connect call.
 */
function mysqli_connect_errno()
{
}

/**
 * Returns a string description of the last connect error.
 */
function mysqli_connect_error()
{
}

/**
 * Alias of mysqli::__construct.
 */
function mysqli_connect()
{
}

/**
 * Performs debugging operations.
 */
function mysqli_debug()
{
}

/**
 * Dump debugging information into the log.
 */
function mysqli_dump_debug_info()
{
}

/**
 * Returns the error code for the most recent function call.
 */
function mysqli_errno()
{
}

/**
 * Returns a list of errors from the last command executed.
 */
function mysqli_error_list()
{
}

/**
 * Returns a string description of the last error.
 */
function mysqli_error()
{
}

/**
 * Returns the number of columns for the most recent query.
 */
function mysqli_field_count()
{
}

/**
 * Returns a character set object.
 */
function mysqli_get_charset()
{
}

/**
 * Returns client per-process statistics.
 */
function mysqli_get_client_stats()
{
}

/**
 * Returns statistics about the client connection.
 */
function mysqli_get_connection_stats()
{
}

/**
 * Returns a string representing the type of connection used.
 */
function mysqli_get_host_info()
{
}

/**
 * Returns the version of the MySQL protocol used.
 */
function mysqli_get_proto_info()
{
}

/**
 * Returns the version of the MySQL server.
 */
function mysqli_get_server_info()
{
}

/**
 * Returns the version of the MySQL server as an integer.
 */
function mysqli_get_server_version()
{
}

/**
 * Get result of SHOW WARNINGS.
 */
function mysqli_get_warnings()
{
}

/**
 * Retrieves information about the most recently executed query.
 */
function mysqli_info()
{
}

/**
 * Initializes MySQLi and returns a resource for use with mysqli_real_connect().
 */
function mysqli_init()
{
}

/**
 * Returns the auto generated id used in the last query.
 */
function mysqli_insert_id()
{
}

/**
 * Asks the server to kill a MySQL thread.
 */
function mysqli_kill()
{
}

/**
 * Check if there are any more query results from a multi query.
 */
function mysqli_more_results()
{
}

/**
 * Performs a query on the database.
 */
function mysqli_multi_query()
{
}

/**
 * Prepare next result from multi_query.
 */
function mysqli_next_result()
{
}

/**
 * Set options.
 */
function mysqli_options()
{
}

/**
 * Pings a server connection, or tries to reconnect if the connection has gone down.
 */
function mysqli_ping()
{
}

/**
 * Poll connections.
 */
function mysqli_poll()
{
}

/**
 * Prepare an SQL statement for execution.
 */
function mysqli_prepare()
{
}

/**
 * Performs a query on the database.
 */
function mysqli_query()
{
}

/**
 * Opens a connection to a mysql server.
 */
function mysqli_real_connect()
{
}

/**
 * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection.
 */
function mysqli_real_escape_string()
{
}

/**
 * Execute an SQL query.
 */
function mysqli_real_query()
{
}

/**
 * Get result from async query.
 */
function mysqli_reap_async_query()
{
}

/**
 * Refreshes.
 */
function mysqli_refresh()
{
}

/**
 * Rolls back a transaction to the named savepoint.
 */
function mysqli_release_savepoint()
{
}

/**
 * Rolls back current transaction.
 */
function mysqli_rollback()
{
}

/**
 * Returns RPL query type.
 */
function mysqli_rpl_query_type()
{
}

/**
 * Set a named transaction savepoint.
 */
function mysqli_savepoint()
{
}

/**
 * Selects the default database for database queries.
 */
function mysqli_select_db()
{
}

/**
 * Send the query and return.
 */
function mysqli_send_query()
{
}

/**
 * Sets the default client character set.
 */
function mysqli_set_charset()
{
}

/**
 * Unsets user defined handler for load local infile command.
 */
function mysqli_set_local_infile_default()
{
}

/**
 * Set callback function for LOAD DATA LOCAL INFILE command.
 */
function mysqli_set_local_infile_handler()
{
}

/**
 * Returns the SQLSTATE error from previous MySQL operation.
 */
function mysqli_sqlstate()
{
}

/**
 * Used for establishing secure connections using SSL.
 */
function mysqli_ssl_set()
{
}

/**
 * Gets the current system status.
 */
function mysqli_stat()
{
}

/**
 * Initializes a statement and returns an object for use with mysqli_stmt_prepare.
 */
function mysqli_stmt_init()
{
}

/**
 * Transfers a result set from the last query.
 */
function mysqli_store_result()
{
}

/**
 * Returns the thread ID for the current connection.
 */
function mysqli_thread_id()
{
}

/**
 * Returns whether thread safety is given or not.
 */
function mysqli_thread_safe()
{
}

/**
 * Initiate a result set retrieval.
 */
function mysqli_use_result()
{
}

/**
 * Returns the number of warnings from the last query for the given link.
 */
function mysqli_warning_count()
{
}

/**
 * Returns the total number of rows changed, deleted, or  inserted by the last executed statement.
 */
function mysqli_stmt_affected_rows()
{
}

/**
 * Used to get the current value of a statement attribute.
 */
function mysqli_stmt_attr_get()
{
}

/**
 * Used to modify the behavior of a prepared statement.
 */
function mysqli_stmt_attr_set()
{
}

/**
 * Binds variables to a prepared statement as parameters.
 */
function mysqli_stmt_bind_param()
{
}

/**
 * Binds variables to a prepared statement for result storage.
 */
function mysqli_stmt_bind_result()
{
}

/**
 * Closes a prepared statement.
 */
function mysqli_stmt_close()
{
}

/**
 * Seeks to an arbitrary row in statement result set.
 */
function mysqli_stmt_data_seek()
{
}

/**
 * Returns the error code for the most recent statement call.
 */
function mysqli_stmt_errno()
{
}

/**
 * Returns a list of errors from the last statement executed.
 */
function mysqli_stmt_error_list()
{
}

/**
 * Returns a string description for last statement error.
 */
function mysqli_stmt_error()
{
}

/**
 * Executes a prepared Query.
 */
function mysqli_stmt_execute()
{
}

/**
 * Fetch results from a prepared statement into the bound variables.
 */
function mysqli_stmt_fetch()
{
}

/**
 * Returns the number of field in the given statement.
 */
function mysqli_stmt_field_count()
{
}

/**
 * Frees stored result memory for the given statement handle.
 */
function mysqli_stmt_free_result()
{
}

/**
 * Gets a result set from a prepared statement.
 */
function mysqli_stmt_get_result()
{
}

/**
 * Get result of SHOW WARNINGS.
 */
function mysqli_stmt_get_warnings()
{
}

/**
 * Get the ID generated from the previous INSERT operation.
 */
function mysqli_stmt_insert_id()
{
}

/**
 * Check if there are more query results from a multiple query.
 */
function mysqli_stmt_more_results()
{
}

/**
 * Reads the next result from a multiple query.
 */
function mysqli_stmt_next_result()
{
}

/**
 * Return the number of rows in statements result set.
 */
function mysqli_stmt_num_rows()
{
}

/**
 * Returns the number of parameter for the given statement.
 */
function mysqli_stmt_param_count()
{
}

/**
 * Prepare an SQL statement for execution.
 */
function mysqli_stmt_prepare()
{
}

/**
 * Resets a prepared statement.
 */
function mysqli_stmt_reset()
{
}

/**
 * Returns result set metadata from a prepared statement.
 */
function mysqli_stmt_result_metadata()
{
}

/**
 * Send data in blocks.
 */
function mysqli_stmt_send_long_data()
{
}

/**
 * Returns SQLSTATE error from previous statement operation.
 */
function mysqli_stmt_sqlstate()
{
}

/**
 * Transfers a result set from a prepared statement.
 */
function mysqli_stmt_store_result()
{
}

/**
 * Get current field offset of a result pointer.
 */
function mysqli_field_tell()
{
}

/**
 * Adjusts the result pointer to an arbitrary row in the result.
 */
function mysqli_data_seek()
{
}

/**
 * Fetches all result rows as an associative array, a numeric array, or both.
 */
function mysqli_fetch_all()
{
}

/**
 * Fetch a result row as an associative, a numeric array, or both.
 */
function mysqli_fetch_array()
{
}

/**
 * Fetch a result row as an associative array.
 */
function mysqli_fetch_assoc()
{
}

/**
 * Fetch meta-data for a single field.
 */
function mysqli_fetch_field_direct()
{
}

/**
 * Returns the next field in the result set.
 */
function mysqli_fetch_field()
{
}

/**
 * Returns an array of objects representing the fields in a result set.
 */
function mysqli_fetch_fields()
{
}

/**
 * Returns the current row of a result set as an object.
 */
function mysqli_fetch_object()
{
}

/**
 * Get a result row as an enumerated array.
 */
function mysqli_fetch_row()
{
}

/**
 * Get the number of fields in a result.
 */
function mysqli_num_fields()
{
}

/**
 * Set result pointer to a specified field offset.
 */
function mysqli_field_seek()
{
}

/**
 * Frees the memory associated with a result.
 */
function mysqli_free_result()
{
}

/**
 * Returns the lengths of the columns of the current row in the result set.
 */
function mysqli_fetch_lengths()
{
}

/**
 * Gets the number of rows in a result.
 */
function mysqli_num_rows()
{
}

/**
 * Stop embedded server.
 */
function mysqli_embedded_server_end()
{
}

/**
 * Initialize and start embedded server.
 */
function mysqli_embedded_server_start()
{
}

/**
 * Alias of mysqli_driver->report_mode.
 */
function mysqli_report()
{
}

/**
 * Alias for mysqli_stmt_bind_param.
 */
function mysqli_bind_param()
{
}

/**
 * Alias for mysqli_stmt_bind_result.
 */
function mysqli_bind_result()
{
}

/**
 * Alias of mysqli_character_set_name.
 */
function mysqli_client_encoding()
{
}

/**
 * Disable reads from master.
 */
function mysqli_disable_reads_from_master()
{
}

/**
 * Disable RPL parse.
 */
function mysqli_disable_rpl_parse()
{
}

/**
 * Enable reads from master.
 */
function mysqli_enable_reads_from_master()
{
}

/**
 * Enable RPL parse.
 */
function mysqli_enable_rpl_parse()
{
}

/**
 * Alias of mysqli_real_escape_string.
 */
function mysqli_escape_string()
{
}

/**
 * Alias for mysqli_stmt_execute.
 */
function mysqli_execute()
{
}

/**
 * Alias for mysqli_stmt_fetch.
 */
function mysqli_fetch()
{
}

/**
 * Returns client Zval cache statistics.
 */
function mysqli_get_cache_stats()
{
}

/**
 * Return information about open and cached links.
 */
function mysqli_get_links_stats()
{
}

/**
 * Alias for mysqli_stmt_result_metadata.
 */
function mysqli_get_metadata()
{
}

/**
 * Enforce execution of a query on the master in a master/slave setup.
 */
function mysqli_master_query()
{
}

/**
 * Alias for mysqli_stmt_param_count.
 */
function mysqli_param_count()
{
}

/**
 * Check if RPL parse is enabled.
 */
function mysqli_rpl_parse_enabled()
{
}

/**
 * RPL probe.
 */
function mysqli_rpl_probe()
{
}

/**
 * Alias for mysqli_stmt_send_long_data.
 */
function mysqli_send_long_data()
{
}

/**
 * Alias of mysqli_options.
 */
function mysqli_set_opt()
{
}

/**
 * Force execution of a query on a slave in a master/slave setup.
 */
function mysqli_slave_query()
{
}

/**
 * Returns a list of currently configured servers.
 */
function mysqlnd_ms_dump_servers()
{
}

/**
 * Switch to global sharding server for a given table.
 */
function mysqlnd_ms_fabric_select_global()
{
}

/**
 * Switch to shard.
 */
function mysqlnd_ms_fabric_select_shard()
{
}

/**
 * Returns the latest global transaction ID.
 */
function mysqlnd_ms_get_last_gtid()
{
}

/**
 * Returns an array which describes the last used connection.
 */
function mysqlnd_ms_get_last_used_connection()
{
}

/**
 * Returns query distribution and connection statistics.
 */
function mysqlnd_ms_get_stats()
{
}

/**
 * Finds whether a table name matches a wildcard pattern or not.
 */
function mysqlnd_ms_match_wild()
{
}

/**
 * Find whether to send the query to the master, the slave or the last used MySQL server.
 */
function mysqlnd_ms_query_is_select()
{
}

/**
 * Sets the quality of service needed from the cluster.
 */
function mysqlnd_ms_set_qos()
{
}

/**
 * Sets a callback for user-defined read/write splitting.
 */
function mysqlnd_ms_set_user_pick_server()
{
}

/**
 * Starts a distributed/XA transaction among MySQL servers.
 */
function mysqlnd_ms_xa_begin()
{
}

/**
 * Commits a distributed/XA transaction among MySQL servers.
 */
function mysqlnd_ms_xa_commit()
{
}

/**
 * Garbage collects unfinished XA transactions after severe errors.
 */
function mysqlnd_ms_xa_gc()
{
}

/**
 * Rolls back a distributed/XA transaction among MySQL servers.
 */
function mysqlnd_ms_xa_rollback()
{
}

/**
 * Flush all cache contents.
 */
function mysqlnd_qc_clear_cache()
{
}

/**
 * Returns a list of available storage handler.
 */
function mysqlnd_qc_get_available_handlers()
{
}

/**
 * Returns information on the current handler, the number of cache entries and cache entries, if available.
 */
function mysqlnd_qc_get_cache_info()
{
}

/**
 * Statistics collected by the core of the query cache.
 */
function mysqlnd_qc_get_core_stats()
{
}

/**
 * Returns a normalized query trace log for each query inspected by the query cache.
 */
function mysqlnd_qc_get_normalized_query_trace_log()
{
}

/**
 * Returns a backtrace for each query inspected by the query cache.
 */
function mysqlnd_qc_get_query_trace_log()
{
}

/**
 * Set conditions for automatic caching.
 */
function mysqlnd_qc_set_cache_condition()
{
}

/**
 * Installs a callback which decides whether a statement is cached.
 */
function mysqlnd_qc_set_is_select()
{
}

/**
 * Change current storage handler.
 */
function mysqlnd_qc_set_storage_handler()
{
}

/**
 * Sets the callback functions for a user-defined procedural storage handler.
 */
function mysqlnd_qc_set_user_handlers()
{
}

/**
 * Converts a MySQL connection handle into a mysqlnd connection handle.
 */
function mysqlnd_uh_convert_to_mysqlnd()
{
}

/**
 * Installs a proxy for mysqlnd connections.
 */
function mysqlnd_uh_set_connection_proxy()
{
}

/**
 * Installs a proxy for mysqlnd statements.
 */
function mysqlnd_uh_set_statement_proxy()
{
}

/**
 * Returns information about the plugin configuration.
 */
function mysqlnd_memcache_get_config()
{
}

/**
 * Associate a MySQL connection with a Memcache connection.
 */
function mysqlnd_memcache_set()
{
}

/**
 * Binds a PHP array to an Oracle PL/SQL array parameter.
 */
function oci_bind_array_by_name()
{
}

/**
 * Binds a PHP variable to an Oracle placeholder.
 */
function oci_bind_by_name()
{
}

/**
 * Cancels reading from cursor.
 */
function oci_cancel()
{
}

/**
 * Returns the Oracle client library version.
 */
function oci_client_version()
{
}

/**
 * Closes an Oracle connection.
 */
function oci_close()
{
}

/**
 * Commits the outstanding database transaction.
 */
function oci_commit()
{
}

/**
 * Connect to an Oracle database.
 */
function oci_connect()
{
}

/**
 * Associates a PHP variable with a column for query fetches.
 */
function oci_define_by_name()
{
}

/**
 * Returns the last error found.
 */
function oci_error()
{
}

/**
 * Executes a statement.
 */
function oci_execute()
{
}

/**
 * Fetches multiple rows from a query into a two-dimensional array.
 */
function oci_fetch_all()
{
}

/**
 * Returns the next row from a query as an associative or numeric array.
 */
function oci_fetch_array()
{
}

/**
 * Returns the next row from a query as an associative array.
 */
function oci_fetch_assoc()
{
}

/**
 * Returns the next row from a query as an object.
 */
function oci_fetch_object()
{
}

/**
 * Returns the next row from a query as a numeric array.
 */
function oci_fetch_row()
{
}

/**
 * Fetches the next row from a query into internal buffers.
 */
function oci_fetch()
{
}

/**
 * Checks if a field in the currently fetched row is NULL.
 */
function oci_field_is_null()
{
}

/**
 * Returns the name of a field from the statement.
 */
function oci_field_name()
{
}

/**
 * Tell the precision of a field.
 */
function oci_field_precision()
{
}

/**
 * Tell the scale of the field.
 */
function oci_field_scale()
{
}

/**
 * Returns field's size.
 */
function oci_field_size()
{
}

/**
 * Tell the raw Oracle data type of the field.
 */
function oci_field_type_raw()
{
}

/**
 * Returns a field's data type name.
 */
function oci_field_type()
{
}

/**
 * Frees a descriptor.
 */
function oci_free_descriptor()
{
}

/**
 * Frees all resources associated with statement or cursor.
 */
function oci_free_statement()
{
}

/**
 * Returns the next child statement resource from a parent statement resource that has Oracle Database 12c Implicit Result Sets.
 */
function oci_get_implicit_resultset()
{
}

/**
 * Enables or disables internal debug output.
 */
function oci_internal_debug()
{
}

/**
 * Copies large object.
 */
function oci_lob_copy()
{
}

/**
 * Compares two LOB/FILE locators for equality.
 */
function oci_lob_is_equal()
{
}

/**
 * Allocates new collection object.
 */
function oci_new_collection()
{
}

/**
 * Connect to the Oracle server using a unique connection.
 */
function oci_new_connect()
{
}

/**
 * Allocates and returns a new cursor (statement handle).
 */
function oci_new_cursor()
{
}

/**
 * Initializes a new empty LOB or FILE descriptor.
 */
function oci_new_descriptor()
{
}

/**
 * Returns the number of result columns in a statement.
 */
function oci_num_fields()
{
}

/**
 * Returns number of rows affected during statement execution.
 */
function oci_num_rows()
{
}

/**
 * Prepares an Oracle statement for execution.
 */
function oci_parse()
{
}

/**
 * Changes password of Oracle's user.
 */
function oci_password_change()
{
}

/**
 * Connect to an Oracle database using a persistent connection.
 */
function oci_pconnect()
{
}

/**
 * Returns field's value from the fetched row.
 */
function oci_result()
{
}

/**
 * Rolls back the outstanding database transaction.
 */
function oci_rollback()
{
}

/**
 * Returns the Oracle Database version.
 */
function oci_server_version()
{
}

/**
 * Sets the action name.
 */
function oci_set_action()
{
}

/**
 * Sets the client identifier.
 */
function oci_set_client_identifier()
{
}

/**
 * Sets the client information.
 */
function oci_set_client_info()
{
}

/**
 * Sets the database edition.
 */
function oci_set_edition()
{
}

/**
 * Sets the module name.
 */
function oci_set_module_name()
{
}

/**
 * Sets number of rows to be prefetched by queries.
 */
function oci_set_prefetch()
{
}

/**
 * Returns the type of a statement.
 */
function oci_statement_type()
{
}

/**
 * Alias of oci_bind_by_name.
 */
function ocibindbyname()
{
}

/**
 * Alias of oci_cancel.
 */
function ocicancel()
{
}

/**
 * Alias of OCI-Lob::close.
 */
function ocicloselob()
{
}

/**
 * Alias of OCI-Collection::append.
 */
function ocicollappend()
{
}

/**
 * Alias of OCI-Collection::assign.
 */
function ocicollassign()
{
}

/**
 * Alias of OCI-Collection::assignElem.
 */
function ocicollassignelem()
{
}

/**
 * Alias of OCI-Collection::getElem.
 */
function ocicollgetelem()
{
}

/**
 * Alias of OCI-Collection::max.
 */
function ocicollmax()
{
}

/**
 * Alias of OCI-Collection::size.
 */
function ocicollsize()
{
}

/**
 * Alias of OCI-Collection::trim.
 */
function ocicolltrim()
{
}

/**
 * Alias of oci_field_is_null.
 */
function ocicolumnisnull()
{
}

/**
 * Alias of oci_field_name.
 */
function ocicolumnname()
{
}

/**
 * Alias of oci_field_precision.
 */
function ocicolumnprecision()
{
}

/**
 * Alias of oci_field_scale.
 */
function ocicolumnscale()
{
}

/**
 * Alias of oci_field_size.
 */
function ocicolumnsize()
{
}

/**
 * Alias of oci_field_type.
 */
function ocicolumntype()
{
}

/**
 * Alias of oci_field_type_raw.
 */
function ocicolumntyperaw()
{
}

/**
 * Alias of oci_commit.
 */
function ocicommit()
{
}

/**
 * Alias of oci_define_by_name.
 */
function ocidefinebyname()
{
}

/**
 * Alias of oci_error.
 */
function ocierror()
{
}

/**
 * Alias of oci_execute.
 */
function ociexecute()
{
}

/**
 * Alias of oci_fetch.
 */
function ocifetch()
{
}

/**
 * Obsolete variant of oci_fetch_array, oci_fetch_object,   oci_fetch_assoc and   oci_fetch_row.
 */
function ocifetchinto()
{
}

/**
 * Alias of oci_fetch_all.
 */
function ocifetchstatement()
{
}

/**
 * Alias of OCI-Collection::free.
 */
function ocifreecollection()
{
}

/**
 * Alias of oci_free_statement.
 */
function ocifreecursor()
{
}

/**
 * Alias of OCI-Lob::free.
 */
function ocifreedesc()
{
}

/**
 * Alias of oci_free_statement.
 */
function ocifreestatement()
{
}

/**
 * Alias of oci_internal_debug.
 */
function ociinternaldebug()
{
}

/**
 * Alias of OCI-Lob::load.
 */
function ociloadlob()
{
}

/**
 * Alias of oci_close.
 */
function ocilogoff()
{
}

/**
 * Alias of oci_connect.
 */
function ocilogon()
{
}

/**
 * Alias of oci_new_collection.
 */
function ocinewcollection()
{
}

/**
 * Alias of oci_new_cursor.
 */
function ocinewcursor()
{
}

/**
 * Alias of oci_new_descriptor.
 */
function ocinewdescriptor()
{
}

/**
 * Alias of oci_new_connect.
 */
function ocinlogon()
{
}

/**
 * Alias of oci_num_fields.
 */
function ocinumcols()
{
}

/**
 * Alias of oci_parse.
 */
function ociparse()
{
}

/**
 * Alias of oci_pconnect.
 */
function ociplogon()
{
}

/**
 * Alias of oci_result.
 */
function ociresult()
{
}

/**
 * Alias of oci_rollback.
 */
function ocirollback()
{
}

/**
 * Alias of oci_num_rows.
 */
function ocirowcount()
{
}

/**
 * Alias of OCI-Lob::save.
 */
function ocisavelob()
{
}

/**
 * Alias of OCI-Lob::import.
 */
function ocisavelobfile()
{
}

/**
 * Alias of oci_server_version.
 */
function ociserverversion()
{
}

/**
 * Alias of oci_set_prefetch.
 */
function ocisetprefetch()
{
}

/**
 * Alias of oci_statement_type.
 */
function ocistatementtype()
{
}

/**
 * Alias of OCI-Lob::export.
 */
function ociwritelobtofile()
{
}

/**
 * Alias of OCI-Lob::writeTemporary.
 */
function ociwritetemporarylob()
{
}

/**
 * Closes a paradox database.
 */
function px_close()
{
}

/**
 * Create a new paradox database.
 */
function px_create_fp()
{
}

/**
 * Converts a date into a string..
 */
function px_date2string()
{
}

/**
 * Deletes record from paradox database.
 */
function px_delete_record()
{
}

/**
 * Deletes resource of paradox database.
 */
function px_delete()
{
}

/**
 * Returns the specification of a single field.
 */
function px_get_field()
{
}

/**
 * Return lots of information about a paradox file.
 */
function px_get_info()
{
}

/**
 * Gets a parameter.
 */
function px_get_parameter()
{
}

/**
 * Returns record of paradox database.
 */
function px_get_record()
{
}

/**
 * Returns the database schema.
 */
function px_get_schema()
{
}

/**
 * Gets a value.
 */
function px_get_value()
{
}

/**
 * Inserts record into paradox database.
 */
function px_insert_record()
{
}

/**
 * Create a new paradox object.
 */
function px_new()
{
}

/**
 * Returns number of fields in a database.
 */
function px_numfields()
{
}

/**
 * Returns number of records in a database.
 */
function px_numrecords()
{
}

/**
 * Open paradox database.
 */
function px_open_fp()
{
}

/**
 * Stores record into paradox database.
 */
function px_put_record()
{
}

/**
 * Returns record of paradox database.
 */
function px_retrieve_record()
{
}

/**
 * Sets the file where blobs are read from.
 */
function px_set_blob_file()
{
}

/**
 * Sets a parameter.
 */
function px_set_parameter()
{
}

/**
 * Sets the name of a table (deprecated).
 */
function px_set_tablename()
{
}

/**
 * Sets the encoding for character fields (deprecated).
 */
function px_set_targetencoding()
{
}

/**
 * Sets a value.
 */
function px_set_value()
{
}

/**
 * Converts the timestamp into a string..
 */
function px_timestamp2string()
{
}

/**
 * Updates record in paradox database.
 */
function px_update_record()
{
}

/**
 * Returns number of affected records (tuples).
 */
function pg_affected_rows()
{
}

/**
 * Cancel an asynchronous query.
 */
function pg_cancel_query()
{
}

/**
 * Gets the client encoding.
 */
function pg_client_encoding()
{
}

/**
 * Closes a PostgreSQL connection.
 */
function pg_close()
{
}

/**
 * Poll the status of an in-progress asynchronous PostgreSQL connection   attempt..
 */
function pg_connect_poll()
{
}

/**
 * Open a PostgreSQL connection.
 */
function pg_connect()
{
}

/**
 * Get connection is busy or not.
 */
function pg_connection_busy()
{
}

/**
 * Reset connection (reconnect).
 */
function pg_connection_reset()
{
}

/**
 * Get connection status.
 */
function pg_connection_status()
{
}

/**
 * Reads input on the connection.
 */
function pg_consume_input()
{
}

/**
 * Convert associative array values into suitable for SQL statement.
 */
function pg_convert()
{
}

/**
 * Insert records into a table from an array.
 */
function pg_copy_from()
{
}

/**
 * Copy a table to an array.
 */
function pg_copy_to()
{
}

/**
 * Get the database name.
 */
function pg_dbname()
{
}

/**
 * Deletes records.
 */
function pg_delete()
{
}

/**
 * Sync with PostgreSQL backend.
 */
function pg_end_copy()
{
}

/**
 * Escape a string for insertion into a bytea field.
 */
function pg_escape_bytea()
{
}

/**
 * Escape a identifier for insertion into a text field.
 */
function pg_escape_identifier()
{
}

/**
 * Escape a literal for insertion into a text field.
 */
function pg_escape_literal()
{
}

/**
 * Escape a string for query.
 */
function pg_escape_string()
{
}

/**
 * Sends a request to execute a prepared statement with given parameters, and waits for the result..
 */
function pg_execute()
{
}

/**
 * Fetches all rows in a particular result column as an array.
 */
function pg_fetch_all_columns()
{
}

/**
 * Fetches all rows from a result as an array.
 */
function pg_fetch_all()
{
}

/**
 * Fetch a row as an array.
 */
function pg_fetch_array()
{
}

/**
 * Fetch a row as an associative array.
 */
function pg_fetch_assoc()
{
}

/**
 * Fetch a row as an object.
 */
function pg_fetch_object()
{
}

/**
 * Returns values from a result resource.
 */
function pg_fetch_result()
{
}

/**
 * Get a row as an enumerated array.
 */
function pg_fetch_row()
{
}

/**
 * Test if a field is SQL NULL.
 */
function pg_field_is_null()
{
}

/**
 * Returns the name of a field.
 */
function pg_field_name()
{
}

/**
 * Returns the field number of the named field.
 */
function pg_field_num()
{
}

/**
 * Returns the printed length.
 */
function pg_field_prtlen()
{
}

/**
 * Returns the internal storage size of the named field.
 */
function pg_field_size()
{
}

/**
 * Returns the name or oid of the tables field.
 */
function pg_field_table()
{
}

/**
 * Returns the type ID (OID) for the corresponding field number.
 */
function pg_field_type_oid()
{
}

/**
 * Returns the type name for the corresponding field number.
 */
function pg_field_type()
{
}

/**
 * Flush outbound query data on the connection.
 */
function pg_flush()
{
}

/**
 * Free result memory.
 */
function pg_free_result()
{
}

/**
 * Gets SQL NOTIFY message.
 */
function pg_get_notify()
{
}

/**
 * Gets the backend's process ID.
 */
function pg_get_pid()
{
}

/**
 * Get asynchronous query result.
 */
function pg_get_result()
{
}

/**
 * Returns the host name associated with the connection.
 */
function pg_host()
{
}

/**
 * Insert array into table.
 */
function pg_insert()
{
}

/**
 * Get the last error message string of a connection.
 */
function pg_last_error()
{
}

/**
 * Returns the last notice message from PostgreSQL server.
 */
function pg_last_notice()
{
}

/**
 * Returns the last row's OID.
 */
function pg_last_oid()
{
}

/**
 * Close a large object.
 */
function pg_lo_close()
{
}

/**
 * Create a large object.
 */
function pg_lo_create()
{
}

/**
 * Export a large object to file.
 */
function pg_lo_export()
{
}

/**
 * Import a large object from file.
 */
function pg_lo_import()
{
}

/**
 * Open a large object.
 */
function pg_lo_open()
{
}

/**
 * Reads an entire large object and send straight to browser.
 */
function pg_lo_read_all()
{
}

/**
 * Read a large object.
 */
function pg_lo_read()
{
}

/**
 * Seeks position within a large object.
 */
function pg_lo_seek()
{
}

/**
 * Returns current seek position a of large object.
 */
function pg_lo_tell()
{
}

/**
 * Truncates a large object.
 */
function pg_lo_truncate()
{
}

/**
 * Delete a large object.
 */
function pg_lo_unlink()
{
}

/**
 * Write to a large object.
 */
function pg_lo_write()
{
}

/**
 * Get meta data for table.
 */
function pg_meta_data()
{
}

/**
 * Returns the number of fields in a result.
 */
function pg_num_fields()
{
}

/**
 * Returns the number of rows in a result.
 */
function pg_num_rows()
{
}

/**
 * Get the options associated with the connection.
 */
function pg_options()
{
}

/**
 * Looks up a current parameter setting of the server..
 */
function pg_parameter_status()
{
}

/**
 * Open a persistent PostgreSQL connection.
 */
function pg_pconnect()
{
}

/**
 * Ping database connection.
 */
function pg_ping()
{
}

/**
 * Return the port number associated with the connection.
 */
function pg_port()
{
}

/**
 * Submits a request to create a prepared statement with the   given parameters, and waits for completion..
 */
function pg_prepare()
{
}

/**
 * Send a NULL-terminated string to PostgreSQL backend.
 */
function pg_put_line()
{
}

/**
 * Submits a command to the server and waits for the result, with the ability to pass parameters separately from the SQL command text..
 */
function pg_query_params()
{
}

/**
 * Execute a query.
 */
function pg_query()
{
}

/**
 * Returns an individual field of an error report..
 */
function pg_result_error_field()
{
}

/**
 * Get error message associated with result.
 */
function pg_result_error()
{
}

/**
 * Set internal row offset in result resource.
 */
function pg_result_seek()
{
}

/**
 * Get status of query result.
 */
function pg_result_status()
{
}

/**
 * Select records.
 */
function pg_select()
{
}

/**
 * Sends a request to execute a prepared statement with given parameters, without waiting for the result(s)..
 */
function pg_send_execute()
{
}

/**
 * Sends a request to create a prepared statement with the given parameters, without waiting for completion..
 */
function pg_send_prepare()
{
}

/**
 * Submits a command and separate parameters to the server without waiting for the result(s)..
 */
function pg_send_query_params()
{
}

/**
 * Sends asynchronous query.
 */
function pg_send_query()
{
}

/**
 * Set the client encoding.
 */
function pg_set_client_encoding()
{
}

/**
 * Determines the verbosity of messages returned by pg_last_error    and pg_result_error..
 */
function pg_set_error_verbosity()
{
}

/**
 * Get a read only handle to the socket underlying a PostgreSQL connection.
 */
function pg_socket()
{
}

/**
 * Enable tracing a PostgreSQL connection.
 */
function pg_trace()
{
}

/**
 * Returns the current in-transaction status of the server..
 */
function pg_transaction_status()
{
}

/**
 * Return the TTY name associated with the connection.
 */
function pg_tty()
{
}

/**
 * Unescape binary for bytea type.
 */
function pg_unescape_bytea()
{
}

/**
 * Disable tracing of a PostgreSQL connection.
 */
function pg_untrace()
{
}

/**
 * Update table.
 */
function pg_update()
{
}

/**
 * Returns an array with client, protocol and server version (when available).
 */
function pg_version()
{
}

/**
 * Execute a query against a given database and returns an array.
 */
function sqlite_array_query()
{
}

/**
 * Set busy timeout duration, or disable busy handlers.
 */
function sqlite_busy_timeout()
{
}

/**
 * Returns the number of rows that were changed by the most   recent SQL statement.
 */
function sqlite_changes()
{
}

/**
 * Closes an open SQLite database.
 */
function sqlite_close()
{
}

/**
 * Fetches a column from the current row of a result set.
 */
function sqlite_column()
{
}

/**
 * Register an aggregating UDF for use in SQL statements.
 */
function sqlite_create_aggregate()
{
}

/**
 * Registers a "regular" User Defined Function for use in SQL statements.
 */
function sqlite_create_function()
{
}

/**
 * Fetches the current row from a result set as an array.
 */
function sqlite_current()
{
}

/**
 * Returns the textual description of an error code.
 */
function sqlite_error_string()
{
}

/**
 * Escapes a string for use as a query parameter.
 */
function sqlite_escape_string()
{
}

/**
 * Executes a result-less query against a given database.
 */
function sqlite_exec()
{
}

/**
 * Opens an SQLite database and returns an SQLiteDatabase object.
 */
function sqlite_factory()
{
}

/**
 * Fetches all rows from a result set as an array of arrays.
 */
function sqlite_fetch_all()
{
}

/**
 * Fetches the next row from a result set as an array.
 */
function sqlite_fetch_array()
{
}

/**
 * Return an array of column types from a particular table.
 */
function sqlite_fetch_column_types()
{
}

/**
 * Fetches the next row from a result set as an object.
 */
function sqlite_fetch_object()
{
}

/**
 * Fetches the first column of a result set as a string.
 */
function sqlite_fetch_single()
{
}

/**
 * Alias of sqlite_fetch_single.
 */
function sqlite_fetch_string()
{
}

/**
 * Returns the name of a particular field.
 */
function sqlite_field_name()
{
}

/**
 * Finds whether or not more rows are available.
 */
function sqlite_has_more()
{
}

/**
 * Returns whether or not a previous row is available.
 */
function sqlite_has_prev()
{
}

/**
 * Returns the current row index.
 */
function sqlite_key()
{
}

/**
 * Returns the error code of the last error for a database.
 */
function sqlite_last_error()
{
}

/**
 * Returns the rowid of the most recently inserted row.
 */
function sqlite_last_insert_rowid()
{
}

/**
 * Returns the encoding of the linked SQLite library.
 */
function sqlite_libencoding()
{
}

/**
 * Returns the version of the linked SQLite library.
 */
function sqlite_libversion()
{
}

/**
 * Seek to the next row number.
 */
function sqlite_next()
{
}

/**
 * Returns the number of fields in a result set.
 */
function sqlite_num_fields()
{
}

/**
 * Returns the number of rows in a buffered result set.
 */
function sqlite_num_rows()
{
}

/**
 * Opens an SQLite database and create the database if it does not exist.
 */
function sqlite_open()
{
}

/**
 * Opens a persistent handle to an SQLite database and create the database if it does not exist.
 */
function sqlite_popen()
{
}

/**
 * Seek to the previous row number of a result set.
 */
function sqlite_prev()
{
}

/**
 * Executes a query against a given database and returns a result handle.
 */
function sqlite_query()
{
}

/**
 * Seek to the first row number.
 */
function sqlite_rewind()
{
}

/**
 * Seek to a particular row number of a buffered result set.
 */
function sqlite_seek()
{
}

/**
 * Executes a query and returns either an array for one single column or the value of the first row.
 */
function sqlite_single_query()
{
}

/**
 * Decode binary data passed as parameters to an UDF.
 */
function sqlite_udf_decode_binary()
{
}

/**
 * Encode binary data before returning it from an UDF.
 */
function sqlite_udf_encode_binary()
{
}

/**
 * Execute a query that does not prefetch and buffer all data.
 */
function sqlite_unbuffered_query()
{
}

/**
 * Returns whether more rows are available.
 */
function sqlite_valid()
{
}

/**
 * Begins a database transaction.
 */
function sqlsrv_begin_transaction()
{
}

/**
 * Cancels a statement.
 */
function sqlsrv_cancel()
{
}

/**
 * Returns information about the client and specified connection.
 */
function sqlsrv_client_info()
{
}

/**
 * Closes an open connection and releases resourses associated with the connection.
 */
function sqlsrv_close()
{
}

/**
 * Commits a transaction that was begun with sqlsrv_begin_transaction.
 */
function sqlsrv_commit()
{
}

/**
 * Changes the driver error handling and logging configurations.
 */
function sqlsrv_configure()
{
}

/**
 * Opens a connection to a Microsoft SQL Server database.
 */
function sqlsrv_connect()
{
}

/**
 * Returns error and warning information about the last SQLSRV operation performed.
 */
function sqlsrv_errors()
{
}

/**
 * Executes a statement prepared with sqlsrv_prepare.
 */
function sqlsrv_execute()
{
}

/**
 * Returns a row as an array.
 */
function sqlsrv_fetch_array()
{
}

/**
 * Retrieves the next row of data in a result set as an object.
 */
function sqlsrv_fetch_object()
{
}

/**
 * Makes the next row in a result set available for reading.
 */
function sqlsrv_fetch()
{
}

/**
 * Retrieves metadata for the fields of a statement prepared by   sqlsrv_prepare or sqlsrv_query.
 */
function sqlsrv_field_metadata()
{
}

/**
 * Frees all resources for the specified statement.
 */
function sqlsrv_free_stmt()
{
}

/**
 * Returns the value of the specified configuration setting.
 */
function sqlsrv_get_config()
{
}

/**
 * Gets field data from the currently selected row.
 */
function sqlsrv_get_field()
{
}

/**
 * Indicates whether the specified statement has rows.
 */
function sqlsrv_has_rows()
{
}

/**
 * Makes the next result of the specified statement active.
 */
function sqlsrv_next_result()
{
}

/**
 * Retrieves the number of fields (columns) on a statement.
 */
function sqlsrv_num_fields()
{
}

/**
 * Retrieves the number of rows in a result set.
 */
function sqlsrv_num_rows()
{
}

/**
 * Prepares a query for execution.
 */
function sqlsrv_prepare()
{
}

/**
 * Prepares and executes a query..
 */
function sqlsrv_query()
{
}

/**
 * Rolls back a transaction that was begun with   sqlsrv_begin_transaction.
 */
function sqlsrv_rollback()
{
}

/**
 * Returns the number of rows modified by the last INSERT, UPDATE, or   DELETE query executed.
 */
function sqlsrv_rows_affected()
{
}

/**
 * Sends data from parameter streams to the server.
 */
function sqlsrv_send_stream_data()
{
}

/**
 * Returns information about the server.
 */
function sqlsrv_server_info()
{
}

/**
 * Gets number of affected rows in last query.
 */
function sybase_affected_rows()
{
}

/**
 * Closes a Sybase connection.
 */
function sybase_close()
{
}

/**
 * Opens a Sybase server connection.
 */
function sybase_connect()
{
}

/**
 * Moves internal row pointer.
 */
function sybase_data_seek()
{
}

/**
 * Sets the deadlock retry count.
 */
function sybase_deadlock_retry_count()
{
}

/**
 * Fetch row as array.
 */
function sybase_fetch_array()
{
}

/**
 * Fetch a result row as an associative array.
 */
function sybase_fetch_assoc()
{
}

/**
 * Get field information from a result.
 */
function sybase_fetch_field()
{
}

/**
 * Fetch a row as an object.
 */
function sybase_fetch_object()
{
}

/**
 * Get a result row as an enumerated array.
 */
function sybase_fetch_row()
{
}

/**
 * Sets field offset.
 */
function sybase_field_seek()
{
}

/**
 * Frees result memory.
 */
function sybase_free_result()
{
}

/**
 * Returns the last message from the server.
 */
function sybase_get_last_message()
{
}

/**
 * Sets minimum client severity.
 */
function sybase_min_client_severity()
{
}

/**
 * Sets minimum error severity.
 */
function sybase_min_error_severity()
{
}

/**
 * Sets minimum message severity.
 */
function sybase_min_message_severity()
{
}

/**
 * Sets minimum server severity.
 */
function sybase_min_server_severity()
{
}

/**
 * Gets the number of fields in a result set.
 */
function sybase_num_fields()
{
}

/**
 * Get number of rows in a result set.
 */
function sybase_num_rows()
{
}

/**
 * Open persistent Sybase connection.
 */
function sybase_pconnect()
{
}

/**
 * Sends a Sybase query.
 */
function sybase_query()
{
}

/**
 * Get result data.
 */
function sybase_result()
{
}

/**
 * Selects a Sybase database.
 */
function sybase_select_db()
{
}

/**
 * Sets the handler called when a server message is raised.
 */
function sybase_set_message_handler()
{
}

/**
 * Send a Sybase query and do not block.
 */
function sybase_unbuffered_query()
{
}

/**
 * Return the number of days in a month for a given year and calendar.
 */
function cal_days_in_month()
{
}

/**
 * Converts from Julian Day Count to a supported calendar.
 */
function cal_from_jd()
{
}

/**
 * Returns information about a particular calendar.
 */
function cal_info()
{
}

/**
 * Converts from a supported calendar to Julian Day Count.
 */
function cal_to_jd()
{
}

/**
 * Get Unix timestamp for midnight on Easter of a given year.
 */
function easter_date()
{
}

/**
 * Get number of days after March 21 on which Easter falls for a given year.
 */
function easter_days()
{
}

/**
 * Converts a date from the French Republican Calendar to a Julian Day Count.
 */
function FrenchToJD()
{
}

/**
 * Converts a Gregorian date to Julian Day Count.
 */
function GregorianToJD()
{
}

/**
 * Returns the day of the week.
 */
function JDDayOfWeek()
{
}

/**
 * Returns a month name.
 */
function JDMonthName()
{
}

/**
 * Converts a Julian Day Count to the French Republican Calendar.
 */
function JDToFrench()
{
}

/**
 * Converts Julian Day Count to Gregorian date.
 */
function JDToGregorian()
{
}

/**
 * Converts a Julian day count to a Jewish calendar date.
 */
function jdtojewish()
{
}

/**
 * Converts a Julian Day Count to a Julian Calendar Date.
 */
function JDToJulian()
{
}

/**
 * Convert Julian Day to Unix timestamp.
 */
function jdtounix()
{
}

/**
 * Converts a date in the Jewish Calendar to Julian Day Count.
 */
function JewishToJD()
{
}

/**
 * Converts a Julian Calendar date to Julian Day Count.
 */
function JulianToJD()
{
}

/**
 * Convert Unix timestamp to Julian Day.
 */
function unixtojd()
{
}

/**
 * Alias of DateTime::add.
 */
function date_add()
{
}

/**
 * Alias of DateTime::__construct.
 */
function date_create()
{
}

/**
 * Alias of DateTime::createFromFormat.
 */
function date_create_from_format()
{
}

/**
 * Alias of DateTime::getLastErrors.
 */
function date_get_last_errors()
{
}

/**
 * Alias of DateTime::modify.
 */
function date_modify()
{
}

/**
 * Alias of DateTime::setDate.
 */
function date_date_set()
{
}

/**
 * Alias of DateTime::setISODate.
 */
function date_isodate_set()
{
}

/**
 * Alias of DateTime::setTime.
 */
function date_time_set()
{
}

/**
 * Alias of DateTime::setTimestamp.
 */
function date_timestamp_set()
{
}

/**
 * Alias of DateTime::setTimezone.
 */
function date_timezone_set()
{
}

/**
 * Alias of DateTime::sub.
 */
function date_sub()
{
}

/**
 * Alias of DateTimeImmutable::__construct.
 */
function date_create_immutable()
{
}

/**
 * Alias of DateTimeImmutable::createFromFormat.
 */
function date_create_immutable_from_format()
{
}

/**
 * Alias of DateTime::diff.
 */
function date_diff()
{
}

/**
 * Alias of DateTime::format.
 */
function date_format()
{
}

/**
 * Alias of DateTime::getOffset.
 */
function date_offset_get()
{
}

/**
 * Alias of DateTime::getTimestamp.
 */
function date_timestamp_get()
{
}

/**
 * Alias of DateTime::getTimezone.
 */
function date_timezone_get()
{
}

/**
 * Alias of DateTimeZone::__construct.
 */
function timezone_open()
{
}

/**
 * Alias of DateTimeZone::getLocation.
 */
function timezone_location_get()
{
}

/**
 * Alias of DateTimeZone::getName.
 */
function timezone_name_get()
{
}

/**
 * Alias of DateTimeZone::getOffset.
 */
function timezone_offset_get()
{
}

/**
 * Alias of DateTimeZone::getTransitions.
 */
function timezone_transitions_get()
{
}

/**
 * Alias of DateTimeZone::listAbbreviations.
 */
function timezone_abbreviations_list()
{
}

/**
 * Alias of DateTimeZone::listIdentifiers.
 */
function timezone_identifiers_list()
{
}

/**
 * Validate a Gregorian date.
 */
function checkdate()
{
}

/**
 * Gets the default timezone used by all date/time functions in a script.
 */
function date_default_timezone_get()
{
}

/**
 * Sets the default timezone used by all date/time functions in a script.
 */
function date_default_timezone_set()
{
}

/**
 * Alias of DateInterval::createFromDateString.
 */
function date_interval_create_from_date_string()
{
}

/**
 * Alias of DateInterval::format.
 */
function date_interval_format()
{
}

/**
 * Get info about given date formatted according to the specified format.
 */
function date_parse_from_format()
{
}

/**
 * Returns associative array with detailed info about given date.
 */
function date_parse()
{
}

/**
 * Returns an array with information about sunset/sunrise and twilight begin/end.
 */
function date_sun_info()
{
}

/**
 * Returns time of sunrise for a given day and location.
 */
function date_sunrise()
{
}

/**
 * Returns time of sunset for a given day and location.
 */
function date_sunset()
{
}

/**
 * Format a local time/date.
 */
function date()
{
}

/**
 * Get date/time information.
 */
function getdate()
{
}

/**
 * Get current time.
 */
function gettimeofday()
{
}

/**
 * Format a GMT/UTC date/time.
 */
function gmdate()
{
}

/**
 * Get Unix timestamp for a GMT date.
 */
function gmmktime()
{
}

/**
 * Format a GMT/UTC time/date according to locale settings.
 */
function gmstrftime()
{
}

/**
 * Format a local time/date as integer.
 */
function idate()
{
}

/**
 * Get the local time.
 */
function localtime()
{
}

/**
 * Return current Unix timestamp with microseconds.
 */
function microtime()
{
}

/**
 * Get Unix timestamp for a date.
 */
function mktime()
{
}

/**
 * Format a local time/date according to locale settings.
 */
function strftime()
{
}

/**
 * Parse a time/date generated with strftime.
 */
function strptime()
{
}

/**
 * Parse about any English textual datetime description into a Unix timestamp.
 */
function strtotime()
{
}

/**
 * Return current Unix timestamp.
 */
function time()
{
}

/**
 * Returns the timezone name from abbreviation.
 */
function timezone_name_from_abbr()
{
}

/**
 * Gets the version of the timezonedb.
 */
function timezone_version_get()
{
}

/**
 * Closes the file descriptor given by fd.
 */
function dio_close()
{
}

/**
 * Performs a c library fcntl on fd.
 */
function dio_fcntl()
{
}

/**
 * Opens a file (creating it if necessary) at a lower level than the   C library input/ouput stream functions allow..
 */
function dio_open()
{
}

/**
 * Reads bytes from a file descriptor.
 */
function dio_read()
{
}

/**
 * Seeks to pos on fd from whence.
 */
function dio_seek()
{
}

/**
 * Gets stat information about the file descriptor fd.
 */
function dio_stat()
{
}

/**
 * Sets terminal attributes and baud rate for a serial port.
 */
function dio_tcsetattr()
{
}

/**
 * Truncates file descriptor fd to offset bytes.
 */
function dio_truncate()
{
}

/**
 * Writes data to fd with optional truncation at length.
 */
function dio_write()
{
}

/**
 * Change directory.
 */
function chdir()
{
}

/**
 * Change the root directory.
 */
function chroot()
{
}

/**
 * Close directory handle.
 */
function closedir()
{
}

/**
 * Return an instance of the Directory class.
 */
function dir()
{
}

/**
 * Gets the current working directory.
 */
function getcwd()
{
}

/**
 * Open directory handle.
 */
function opendir()
{
}

/**
 * Read entry from directory handle.
 */
function readdir()
{
}

/**
 * Rewind directory handle.
 */
function rewinddir()
{
}

/**
 * List files and directories inside the specified path.
 */
function scandir()
{
}

/**
 * Return information about a string buffer.
 */
function finfo_buffer()
{
}

/**
 * Close fileinfo resource.
 */
function finfo_close()
{
}

/**
 * Return information about a file.
 */
function finfo_file()
{
}

/**
 * Create a new fileinfo resource.
 */
function finfo_open()
{
}

/**
 * Set libmagic configuration options.
 */
function finfo_set_flags()
{
}

/**
 * Detect MIME Content-type for a file (deprecated).
 */
function mime_content_type()
{
}

/**
 * Returns trailing name component of path.
 */
function basename()
{
}

/**
 * Changes file group.
 */
function chgrp()
{
}

/**
 * Changes file mode.
 */
function chmod()
{
}

/**
 * Changes file owner.
 */
function chown()
{
}

/**
 * Clears file status cache.
 */
function clearstatcache()
{
}

/**
 * Copies file.
 */
function copy()
{
}

/**
 * See unlink or unset.
 */
function delete()
{
}

/**
 * Returns parent directory's path.
 */
function dirname()
{
}

/**
 * Returns available space on filesystem or disk partition.
 */
function disk_free_space()
{
}

/**
 * Returns the total size of a filesystem or disk partition.
 */
function disk_total_space()
{
}

/**
 * Alias of disk_free_space.
 */
function diskfreespace()
{
}

/**
 * Closes an open file pointer.
 */
function fclose()
{
}

/**
 * Tests for end-of-file on a file pointer.
 */
function feof()
{
}

/**
 * Flushes the output to a file.
 */
function fflush()
{
}

/**
 * Gets character from file pointer.
 */
function fgetc()
{
}

/**
 * Gets line from file pointer and parse for CSV fields.
 */
function fgetcsv()
{
}

/**
 * Gets line from file pointer.
 */
function fgets()
{
}

/**
 * Gets line from file pointer and strip HTML tags.
 */
function fgetss()
{
}

/**
 * Checks whether a file or directory exists.
 */
function file_exists()
{
}

/**
 * Reads entire file into a string.
 */
function file_get_contents()
{
}

/**
 * Write a string to a file.
 */
function file_put_contents()
{
}

/**
 * Reads entire file into an array.
 */
function file()
{
}

/**
 * Gets last access time of file.
 */
function fileatime()
{
}

/**
 * Gets inode change time of file.
 */
function filectime()
{
}

/**
 * Gets file group.
 */
function filegroup()
{
}

/**
 * Gets file inode.
 */
function fileinode()
{
}

/**
 * Gets file modification time.
 */
function filemtime()
{
}

/**
 * Gets file owner.
 */
function fileowner()
{
}

/**
 * Gets file permissions.
 */
function fileperms()
{
}

/**
 * Gets file size.
 */
function filesize()
{
}

/**
 * Gets file type.
 */
function filetype()
{
}

/**
 * Portable advisory file locking.
 */
function flock()
{
}

/**
 * Match filename against a pattern.
 */
function fnmatch()
{
}

/**
 * Opens file or URL.
 */
function fopen()
{
}

/**
 * Output all remaining data on a file pointer.
 */
function fpassthru()
{
}

/**
 * Format line as CSV and write to file pointer.
 */
function fputcsv()
{
}

/**
 * Alias of fwrite.
 */
function fputs()
{
}

/**
 * Binary-safe file read.
 */
function fread()
{
}

/**
 * Parses input from a file according to a format.
 */
function fscanf()
{
}

/**
 * Seeks on a file pointer.
 */
function fseek()
{
}

/**
 * Gets information about a file using an open file pointer.
 */
function fstat()
{
}

/**
 * Returns the current position of the file read/write pointer.
 */
function ftell()
{
}

/**
 * Truncates a file to a given length.
 */
function ftruncate()
{
}

/**
 * Binary-safe file write.
 */
function fwrite()
{
}

/**
 * Find pathnames matching a pattern.
 */
function glob()
{
}

/**
 * Tells whether the filename is a directory.
 */
function is_dir()
{
}

/**
 * Tells whether the filename is executable.
 */
function is_executable()
{
}

/**
 * Tells whether the filename is a regular file.
 */
function is_file()
{
}

/**
 * Tells whether the filename is a symbolic link.
 */
function is_link()
{
}

/**
 * Tells whether a file exists and is readable.
 */
function is_readable()
{
}

/**
 * Tells whether the file was uploaded via HTTP POST.
 */
function is_uploaded_file()
{
}

/**
 * Tells whether the filename is writable.
 */
function is_writable()
{
}

/**
 * Alias of is_writable.
 */
function is_writeable()
{
}

/**
 * Changes group ownership of symlink.
 */
function lchgrp()
{
}

/**
 * Changes user ownership of symlink.
 */
function lchown()
{
}

/**
 * Create a hard link.
 */
function link()
{
}

/**
 * Gets information about a link.
 */
function linkinfo()
{
}

/**
 * Gives information about a file or symbolic link.
 */
function lstat()
{
}

/**
 * Makes directory.
 */
function mkdir()
{
}

/**
 * Moves an uploaded file to a new location.
 */
function move_uploaded_file()
{
}

/**
 * Parse a configuration file.
 */
function parse_ini_file()
{
}

/**
 * Parse a configuration string.
 */
function parse_ini_string()
{
}

/**
 * Returns information about a file path.
 */
function pathinfo()
{
}

/**
 * Closes process file pointer.
 */
function pclose()
{
}

/**
 * Opens process file pointer.
 */
function popen()
{
}

/**
 * Outputs a file.
 */
function readfile()
{
}

/**
 * Returns the target of a symbolic link.
 */
function readlink()
{
}

/**
 * Get realpath cache entries.
 */
function realpath_cache_get()
{
}

/**
 * Get realpath cache size.
 */
function realpath_cache_size()
{
}

/**
 * Returns canonicalized absolute pathname.
 */
function realpath()
{
}

/**
 * Renames a file or directory.
 */
function rename()
{
}

/**
 * Rewind the position of a file pointer.
 */
function rewind()
{
}

/**
 * Removes directory.
 */
function rmdir()
{
}

/**
 * Alias of stream_set_write_buffer.
 */
function set_file_buffer()
{
}

/**
 * Gives information about a file.
 */
function stat()
{
}

/**
 * Creates a symbolic link.
 */
function symlink()
{
}

/**
 * Create file with unique file name.
 */
function tempnam()
{
}

/**
 * Creates a temporary file.
 */
function tmpfile()
{
}

/**
 * Sets access and modification time of file.
 */
function touch()
{
}

/**
 * Changes the current umask.
 */
function umask()
{
}

/**
 * Deletes a file.
 */
function unlink()
{
}

/**
 * Add a watch to an initialized inotify instance.
 */
function inotify_add_watch()
{
}

/**
 * Initialize an inotify instance.
 */
function inotify_init()
{
}

/**
 * Return a number upper than zero if there are pending events.
 */
function inotify_queue_len()
{
}

/**
 * Read events from an inotify instance.
 */
function inotify_read()
{
}

/**
 * Remove an existing watch from an inotify instance.
 */
function inotify_rm_watch()
{
}

/**
 * Set the process title.
 */
function setproctitle()
{
}

/**
 * Set the thread title.
 */
function setthreadtitle()
{
}

/**
 * Get an extended attribute.
 */
function xattr_get()
{
}

/**
 * Get a list of extended attributes.
 */
function xattr_list()
{
}

/**
 * Remove an extended attribute.
 */
function xattr_remove()
{
}

/**
 * Set an extended attribute.
 */
function xattr_set()
{
}

/**
 * Check if filesystem supports extended attributes.
 */
function xattr_supported()
{
}

/**
 * Read a size of file created by applying a binary diff.
 */
function xdiff_file_bdiff_size()
{
}

/**
 * Make binary diff of two files.
 */
function xdiff_file_bdiff()
{
}

/**
 * Patch a file with a binary diff.
 */
function xdiff_file_bpatch()
{
}

/**
 * Alias of xdiff_file_bdiff.
 */
function xdiff_file_diff_binary()
{
}

/**
 * Make unified diff of two files.
 */
function xdiff_file_diff()
{
}

/**
 * Merge 3 files into one.
 */
function xdiff_file_merge3()
{
}

/**
 * Alias of xdiff_file_bpatch.
 */
function xdiff_file_patch_binary()
{
}

/**
 * Patch a file with an unified diff.
 */
function xdiff_file_patch()
{
}

/**
 * Make binary diff of two files using the Rabin's polynomial fingerprinting algorithm.
 */
function xdiff_file_rabdiff()
{
}

/**
 * Read a size of file created by applying a binary diff.
 */
function xdiff_string_bdiff_size()
{
}

/**
 * Make binary diff of two strings.
 */
function xdiff_string_bdiff()
{
}

/**
 * Patch a string with a binary diff.
 */
function xdiff_string_bpatch()
{
}

/**
 * Alias of xdiff_string_bdiff.
 */
function xdiff_string_diff_binary()
{
}

/**
 * Make unified diff of two strings.
 */
function xdiff_string_diff()
{
}

/**
 * Merge 3 strings into one.
 */
function xdiff_string_merge3()
{
}

/**
 * Alias of xdiff_string_bpatch.
 */
function xdiff_string_patch_binary()
{
}

/**
 * Patch a string with an unified diff.
 */
function xdiff_string_patch()
{
}

/**
 * Make binary diff of two strings using the Rabin's polynomial fingerprinting algorithm.
 */
function xdiff_string_rabdiff()
{
}

/**
 * Enumerates the Enchant providers.
 */
function enchant_broker_describe()
{
}

/**
 * Whether a dictionary exists or not. Using non-empty tag.
 */
function enchant_broker_dict_exists()
{
}

/**
 * Free a dictionary resource.
 */
function enchant_broker_free_dict()
{
}

/**
 * Free the broker resource and its dictionnaries.
 */
function enchant_broker_free()
{
}

/**
 * Returns the last error of the broker.
 */
function enchant_broker_get_error()
{
}

/**
 * create a new broker object capable of requesting.
 */
function enchant_broker_init()
{
}

/**
 * Returns a list of available dictionaries.
 */
function enchant_broker_list_dicts()
{
}

/**
 * create a new dictionary using a tag.
 */
function enchant_broker_request_dict()
{
}

/**
 * creates a dictionary using a PWL file.
 */
function enchant_broker_request_pwl_dict()
{
}

/**
 * Declares a preference of dictionaries to use for the language.
 */
function enchant_broker_set_ordering()
{
}

/**
 * add a word to personal word list.
 */
function enchant_dict_add_to_personal()
{
}

/**
 * add 'word' to this spell-checking session.
 */
function enchant_dict_add_to_session()
{
}

/**
 * Check whether a word is correctly spelled or not.
 */
function enchant_dict_check()
{
}

/**
 * Describes an individual dictionary.
 */
function enchant_dict_describe()
{
}

/**
 * Returns the last error of the current spelling-session.
 */
function enchant_dict_get_error()
{
}

/**
 * whether or not 'word' exists in this spelling-session.
 */
function enchant_dict_is_in_session()
{
}

/**
 * Check the word is correctly spelled and provide suggestions.
 */
function enchant_dict_quick_check()
{
}

/**
 * Add a correction for a word.
 */
function enchant_dict_store_replacement()
{
}

/**
 * Will return a list of values if any of those pre-conditions are not met.
 */
function enchant_dict_suggest()
{
}

/**
 * Convert a logical string to a visual one.
 */
function fribidi_log2vis()
{
}

/**
 * Specify the character encoding in which the messages from the DOMAIN message catalog will be returned.
 */
function bind_textdomain_codeset()
{
}

/**
 * Sets the path for a domain.
 */
function bindtextdomain()
{
}

/**
 * Overrides the domain for a single lookup.
 */
function dcgettext()
{
}

/**
 * Plural version of dcgettext.
 */
function dcngettext()
{
}

/**
 * Override the current domain.
 */
function dgettext()
{
}

/**
 * Plural version of dgettext.
 */
function dngettext()
{
}

/**
 * Lookup a message in the current domain.
 */
function gettext()
{
}

/**
 * Plural version of gettext.
 */
function ngettext()
{
}

/**
 * Sets the default domain.
 */
function textdomain()
{
}

/**
 * Retrieve internal configuration variables of iconv extension.
 */
function iconv_get_encoding()
{
}

/**
 * Decodes multiple MIME header fields at once.
 */
function iconv_mime_decode_headers()
{
}

/**
 * Decodes a MIME header field.
 */
function iconv_mime_decode()
{
}

/**
 * Composes a MIME header field.
 */
function iconv_mime_encode()
{
}

/**
 * Set current setting for character encoding conversion.
 */
function iconv_set_encoding()
{
}

/**
 * Returns the character count of string.
 */
function iconv_strlen()
{
}

/**
 * Finds position of first occurrence of a needle within a haystack.
 */
function iconv_strpos()
{
}

/**
 * Finds the last occurrence of a needle within a haystack.
 */
function iconv_strrpos()
{
}

/**
 * Cut out part of a string.
 */
function iconv_substr()
{
}

/**
 * Convert string to requested character encoding.
 */
function iconv()
{
}

/**
 * Convert character encoding as output buffer handler.
 */
function ob_iconv_handler()
{
}

/**
 * Sort array maintaining index association.
 */
function collator_asort()
{
}

/**
 * Compare two Unicode strings.
 */
function collator_compare()
{
}

/**
 * Create a collator.
 */
function collator_create()
{
}

/**
 * Get collation attribute value.
 */
function collator_get_attribute()
{
}

/**
 * Get collator's last error code.
 */
function collator_get_error_code()
{
}

/**
 * Get text for collator's last error code.
 */
function collator_get_error_message()
{
}

/**
 * Get the locale name of the collator.
 */
function collator_get_locale()
{
}

/**
 * Get sorting key for a string.
 */
function collator_get_sort_key()
{
}

/**
 * Get current collation strength.
 */
function collator_get_strength()
{
}

/**
 * Set collation attribute.
 */
function collator_set_attribute()
{
}

/**
 * Set collation strength.
 */
function collator_set_strength()
{
}

/**
 * Sort array using specified collator and sort keys.
 */
function collator_sort_with_sort_keys()
{
}

/**
 * Sort array using specified collator.
 */
function collator_sort()
{
}

/**
 * Create a number formatter.
 */
function numfmt_create()
{
}

/**
 * Format a currency value.
 */
function numfmt_format_currency()
{
}

/**
 * Format a number.
 */
function numfmt_format()
{
}

/**
 * Get an attribute.
 */
function numfmt_get_attribute()
{
}

/**
 * Get formatter's last error code..
 */
function numfmt_get_error_code()
{
}

/**
 * Get formatter's last error message..
 */
function numfmt_get_error_message()
{
}

/**
 * Get formatter locale.
 */
function numfmt_get_locale()
{
}

/**
 * Get formatter pattern.
 */
function numfmt_get_pattern()
{
}

/**
 * Get a symbol value.
 */
function numfmt_get_symbol()
{
}

/**
 * Get a text attribute.
 */
function numfmt_get_text_attribute()
{
}

/**
 * Parse a currency number.
 */
function numfmt_parse_currency()
{
}

/**
 * Parse a number.
 */
function numfmt_parse()
{
}

/**
 * Set an attribute.
 */
function numfmt_set_attribute()
{
}

/**
 * Set formatter pattern.
 */
function numfmt_set_pattern()
{
}

/**
 * Set a symbol value.
 */
function numfmt_set_symbol()
{
}

/**
 * Set a text attribute.
 */
function numfmt_set_text_attribute()
{
}

/**
 * Tries to find out best available locale based on HTTP "Accept-Language" header.
 */
function locale_accept_from_http()
{
}

/**
 * Canonicalize the locale string.
 */
function locale_canonicalize()
{
}

/**
 * Returns a correctly ordered and delimited locale ID.
 */
function locale_compose()
{
}

/**
 * Checks if a language tag filter matches with locale.
 */
function locale_filter_matches()
{
}

/**
 * Gets the variants for the input locale.
 */
function locale_get_all_variants()
{
}

/**
 * Gets the default locale value from the INTL global 'default_locale'.
 */
function locale_get_default()
{
}

/**
 * Returns an appropriately localized display name for language of the inputlocale.
 */
function locale_get_display_language()
{
}

/**
 * Returns an appropriately localized display name for the input locale.
 */
function locale_get_display_name()
{
}

/**
 * Returns an appropriately localized display name for region of the input locale.
 */
function locale_get_display_region()
{
}

/**
 * Returns an appropriately localized display name for script of the input locale.
 */
function locale_get_display_script()
{
}

/**
 * Returns an appropriately localized display name for variants of the input locale.
 */
function locale_get_display_variant()
{
}

/**
 * Gets the keywords for the input locale.
 */
function locale_get_keywords()
{
}

/**
 * Gets the primary language for the input locale.
 */
function locale_get_primary_language()
{
}

/**
 * Gets the region for the input locale.
 */
function locale_get_region()
{
}

/**
 * Gets the script for the input locale.
 */
function locale_get_script()
{
}

/**
 * Searches the language tag list for the best match to the language.
 */
function locale_lookup()
{
}

/**
 * Returns a key-value array of locale ID subtag elements..
 */
function locale_parse()
{
}

/**
 * sets the default runtime locale.
 */
function locale_set_default()
{
}

/**
 * Checks if the provided string is already in the specified normalization   form..
 */
function normalizer_is_normalized()
{
}

/**
 * Normalizes the input provided and returns the normalized string.
 */
function normalizer_normalize()
{
}

/**
 * Constructs a new Message Formatter.
 */
function msgfmt_create()
{
}

/**
 * Quick format message.
 */
function msgfmt_format_message()
{
}

/**
 * Format the message.
 */
function msgfmt_format()
{
}

/**
 * Get the error code from last operation.
 */
function msgfmt_get_error_code()
{
}

/**
 * Get the error text from the last operation.
 */
function msgfmt_get_error_message()
{
}

/**
 * Get the locale for which the formatter was created..
 */
function msgfmt_get_locale()
{
}

/**
 * Get the pattern used by the formatter.
 */
function msgfmt_get_pattern()
{
}

/**
 * Quick parse input string.
 */
function msgfmt_parse_message()
{
}

/**
 * Parse input string according to pattern.
 */
function msgfmt_parse()
{
}

/**
 * Set the pattern used by the formatter.
 */
function msgfmt_set_pattern()
{
}

/**
 * Get last error code on the object.
 */
function intlcal_get_error_code()
{
}

/**
 * Get last error message on the object.
 */
function intlcal_get_error_message()
{
}

/**
 * Get last error code on the object.
 */
function intltz_get_error_code()
{
}

/**
 * Get last error message on the object.
 */
function intltz_get_error_message()
{
}

/**
 * Create a date formatter.
 */
function datefmt_create()
{
}

/**
 * Format the date/time value as a string.
 */
function datefmt_format()
{
}

/**
 * Formats an object.
 */
function datefmt_format_object()
{
}

/**
 * Get the calendar type used for the IntlDateFormatter.
 */
function datefmt_get_calendar()
{
}

/**
 * Get the datetype used for the IntlDateFormatter.
 */
function datefmt_get_datetype()
{
}

/**
 * Get the error code from last operation.
 */
function datefmt_get_error_code()
{
}

/**
 * Get the error text from the last operation..
 */
function datefmt_get_error_message()
{
}

/**
 * Get the locale used by formatter.
 */
function datefmt_get_locale()
{
}

/**
 * Get the pattern used for the IntlDateFormatter.
 */
function datefmt_get_pattern()
{
}

/**
 * Get the timetype used for the IntlDateFormatter.
 */
function datefmt_get_timetype()
{
}

/**
 * Get the timezone-id used for the IntlDateFormatter.
 */
function datefmt_get_timezone_id()
{
}

/**
 * Get copy of formatterʼs calendar object.
 */
function datefmt_get_calendar_object()
{
}

/**
 * Get formatterʼs timezone.
 */
function datefmt_get_timezone()
{
}

/**
 * Get the lenient used for the IntlDateFormatter.
 */
function datefmt_is_lenient()
{
}

/**
 * Parse string to a field-based time value.
 */
function datefmt_localtime()
{
}

/**
 * Parse string to a timestamp value.
 */
function datefmt_parse()
{
}

/**
 * Sets the calendar type used by the formatter.
 */
function datefmt_set_calendar()
{
}

/**
 * Set the leniency of the parser.
 */
function datefmt_set_lenient()
{
}

/**
 * Set the pattern used for the IntlDateFormatter.
 */
function datefmt_set_pattern()
{
}

/**
 * Sets the time zone to use.
 */
function datefmt_set_timezone_id()
{
}

/**
 * Sets formatterʼs timezone.
 */
function datefmt_set_timezone()
{
}

/**
 * Get number of elements in the bundle.
 */
function resourcebundle_count()
{
}

/**
 * Create a resource bundle.
 */
function resourcebundle_create()
{
}

/**
 * Get bundle's last error code..
 */
function resourcebundle_get_error_code()
{
}

/**
 * Get bundle's last error message..
 */
function resourcebundle_get_error_message()
{
}

/**
 * Get data from the bundle.
 */
function resourcebundle_get()
{
}

/**
 * Get supported locales.
 */
function resourcebundle_locales()
{
}

/**
 * Create a transliterator.
 */
function transliterator_create()
{
}

/**
 * Create transliterator from rules.
 */
function transliterator_create_from_rules()
{
}

/**
 * Create an inverse transliterator.
 */
function transliterator_create_inverse()
{
}

/**
 * Get last error code.
 */
function transliterator_get_error_code()
{
}

/**
 * Get last error message.
 */
function transliterator_get_error_message()
{
}

/**
 * Get transliterator IDs.
 */
function transliterator_list_ids()
{
}

/**
 * Transliterate a string.
 */
function transliterator_transliterate()
{
}

/**
 * Get the last error code.
 */
function intl_get_error_code()
{
}

/**
 * Get description of the last error.
 */
function intl_get_error_message()
{
}

/**
 * Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8..
 */
function grapheme_extract()
{
}

/**
 * Find position (in grapheme units) of first occurrence of a case-insensitive string.
 */
function grapheme_stripos()
{
}

/**
 * Returns part of haystack string from the first occurrence of case-insensitive needle to the end of haystack..
 */
function grapheme_stristr()
{
}

/**
 * Get string length in grapheme units.
 */
function grapheme_strlen()
{
}

/**
 * Find position (in grapheme units) of first occurrence of a string.
 */
function grapheme_strpos()
{
}

/**
 * Find position (in grapheme units) of last occurrence of a case-insensitive string.
 */
function grapheme_strripos()
{
}

/**
 * Find position (in grapheme units) of last occurrence of a string.
 */
function grapheme_strrpos()
{
}

/**
 * Returns part of haystack string from the first occurrence of needle to the end of haystack..
 */
function grapheme_strstr()
{
}

/**
 * Return part of a string.
 */
function grapheme_substr()
{
}

/**
 * Convert domain name to IDNA ASCII form..
 */
function idn_to_ascii()
{
}

/**
 * Alias of idn_to_utf8.
 */
function idn_to_unicode()
{
}

/**
 * Convert domain name from IDNA ASCII to Unicode..
 */
function idn_to_utf8()
{
}

/**
 * Get symbolic name for a given error code.
 */
function intl_error_name()
{
}

/**
 * Check whether the given error code indicates failure.
 */
function intl_is_failure()
{
}

/**
 * Check if the string is valid for the specified encoding.
 */
function mb_check_encoding()
{
}

/**
 * Perform case folding on a string.
 */
function mb_convert_case()
{
}

/**
 * Convert character encoding.
 */
function mb_convert_encoding()
{
}

/**
 * Convert "kana" one from another ("zen-kaku", "han-kaku" and more).
 */
function mb_convert_kana()
{
}

/**
 * Convert character code in variable(s).
 */
function mb_convert_variables()
{
}

/**
 * Decode string in MIME header field.
 */
function mb_decode_mimeheader()
{
}

/**
 * Decode HTML numeric string reference to character.
 */
function mb_decode_numericentity()
{
}

/**
 * Detect character encoding.
 */
function mb_detect_encoding()
{
}

/**
 * Set/Get character encoding detection order.
 */
function mb_detect_order()
{
}

/**
 * Encode string for MIME header.
 */
function mb_encode_mimeheader()
{
}

/**
 * Encode character to HTML numeric string reference.
 */
function mb_encode_numericentity()
{
}

/**
 * Get aliases of a known encoding type.
 */
function mb_encoding_aliases()
{
}

/**
 * Regular expression match for multibyte string.
 */
function mb_ereg_match()
{
}

/**
 * Perform a regular expresssion seach and replace with multibyte support using a callback.
 */
function mb_ereg_replace_callback()
{
}

/**
 * Replace regular expression with multibyte support.
 */
function mb_ereg_replace()
{
}

/**
 * Returns start point for next regular expression match.
 */
function mb_ereg_search_getpos()
{
}

/**
 * Retrieve the result from the last multibyte regular expression match.
 */
function mb_ereg_search_getregs()
{
}

/**
 * Setup string and regular expression for a multibyte regular expression match.
 */
function mb_ereg_search_init()
{
}

/**
 * Returns position and length of a matched part of the multibyte regular expression for a predefined multibyte string.
 */
function mb_ereg_search_pos()
{
}

/**
 * Returns the matched part of a multibyte regular expression.
 */
function mb_ereg_search_regs()
{
}

/**
 * Set start point of next regular expression match.
 */
function mb_ereg_search_setpos()
{
}

/**
 * Multibyte regular expression match for predefined multibyte string.
 */
function mb_ereg_search()
{
}

/**
 * Regular expression match with multibyte support.
 */
function mb_ereg()
{
}

/**
 * Replace regular expression with multibyte support ignoring case.
 */
function mb_eregi_replace()
{
}

/**
 * Regular expression match ignoring case with multibyte support.
 */
function mb_eregi()
{
}

/**
 * Get internal settings of mbstring.
 */
function mb_get_info()
{
}

/**
 * Detect HTTP input character encoding.
 */
function mb_http_input()
{
}

/**
 * Set/Get HTTP output character encoding.
 */
function mb_http_output()
{
}

/**
 * Set/Get internal character encoding.
 */
function mb_internal_encoding()
{
}

/**
 * Set/Get current language.
 */
function mb_language()
{
}

/**
 * Returns an array of all supported encodings.
 */
function mb_list_encodings()
{
}

/**
 * Callback function converts character encoding in output buffer.
 */
function mb_output_handler()
{
}

/**
 * Parse GET/POST/COOKIE data and set global variable.
 */
function mb_parse_str()
{
}

/**
 * Get MIME charset string.
 */
function mb_preferred_mime_name()
{
}

/**
 * Set/Get character encoding for multibyte regex.
 */
function mb_regex_encoding()
{
}

/**
 * Set/Get the default options for mbregex functions.
 */
function mb_regex_set_options()
{
}

/**
 * Send encoded mail.
 */
function mb_send_mail()
{
}

/**
 * Split multibyte string using regular expression.
 */
function mb_split()
{
}

/**
 * Get part of string.
 */
function mb_strcut()
{
}

/**
 * Get truncated string with specified width.
 */
function mb_strimwidth()
{
}

/**
 * Finds position of first occurrence of a string within another, case insensitive.
 */
function mb_stripos()
{
}

/**
 * Finds first occurrence of a string within another, case insensitive.
 */
function mb_stristr()
{
}

/**
 * Get string length.
 */
function mb_strlen()
{
}

/**
 * Find position of first occurrence of string in a string.
 */
function mb_strpos()
{
}

/**
 * Finds the last occurrence of a character in a string within another.
 */
function mb_strrchr()
{
}

/**
 * Finds the last occurrence of a character in a string within another, case insensitive.
 */
function mb_strrichr()
{
}

/**
 * Finds position of last occurrence of a string within another, case insensitive.
 */
function mb_strripos()
{
}

/**
 * Find position of last occurrence of a string in a string.
 */
function mb_strrpos()
{
}

/**
 * Finds first occurrence of a string within another.
 */
function mb_strstr()
{
}

/**
 * Make a string lowercase.
 */
function mb_strtolower()
{
}

/**
 * Make a string uppercase.
 */
function mb_strtoupper()
{
}

/**
 * Return width of string.
 */
function mb_strwidth()
{
}

/**
 * Set/Get substitution character.
 */
function mb_substitute_character()
{
}

/**
 * Count the number of substring occurrences.
 */
function mb_substr_count()
{
}

/**
 * Get part of string.
 */
function mb_substr()
{
}

/**
 * Add the word to a personal wordlist.
 */
function pspell_add_to_personal()
{
}

/**
 * Add the word to the wordlist in the current session.
 */
function pspell_add_to_session()
{
}

/**
 * Check a word.
 */
function pspell_check()
{
}

/**
 * Clear the current session.
 */
function pspell_clear_session()
{
}

/**
 * Create a config used to open a dictionary.
 */
function pspell_config_create()
{
}

/**
 * location of language data files.
 */
function pspell_config_data_dir()
{
}

/**
 * Location of the main word list.
 */
function pspell_config_dict_dir()
{
}

/**
 * Ignore words less than N characters long.
 */
function pspell_config_ignore()
{
}

/**
 * Change the mode number of suggestions returned.
 */
function pspell_config_mode()
{
}

/**
 * Set a file that contains personal wordlist.
 */
function pspell_config_personal()
{
}

/**
 * Set a file that contains replacement pairs.
 */
function pspell_config_repl()
{
}

/**
 * Consider run-together words as valid compounds.
 */
function pspell_config_runtogether()
{
}

/**
 * Determine whether to save a replacement pairs list  along with the wordlist.
 */
function pspell_config_save_repl()
{
}

/**
 * Load a new dictionary with settings based on a given config.
 */
function pspell_new_config()
{
}

/**
 * Load a new dictionary with personal wordlist.
 */
function pspell_new_personal()
{
}

/**
 * Load a new dictionary.
 */
function pspell_new()
{
}

/**
 * Save the personal wordlist to a file.
 */
function pspell_save_wordlist()
{
}

/**
 * Store a replacement pair for a word.
 */
function pspell_store_replacement()
{
}

/**
 * Suggest spellings of a word.
 */
function pspell_suggest()
{
}

/**
 * Recode from file to file according to recode request.
 */
function recode_file()
{
}

/**
 * Recode a string according to a recode request.
 */
function recode_string()
{
}

/**
 * Alias of recode_string.
 */
function recode()
{
}

/**
 * Returns a new CairoContext object on the requested surface..
 */
function cairo_create()
{
}

/**
 * Description.
 */
function cairo_font_face_get_type()
{
}

/**
 * Check for CairoFontFace errors.
 */
function cairo_font_face_status()
{
}

/**
 * Description.
 */
function cairo_font_options_create()
{
}

/**
 * Description.
 */
function cairo_font_options_equal()
{
}

/**
 * Description.
 */
function cairo_font_options_get_antialias()
{
}

/**
 * Description.
 */
function cairo_font_options_get_hint_metrics()
{
}

/**
 * Description.
 */
function cairo_font_options_get_hint_style()
{
}

/**
 * Description.
 */
function cairo_font_options_get_subpixel_order()
{
}

/**
 * Description.
 */
function cairo_font_options_hash()
{
}

/**
 * Description.
 */
function cairo_font_options_merge()
{
}

/**
 * Description.
 */
function cairo_font_options_set_antialias()
{
}

/**
 * Description.
 */
function cairo_font_options_set_hint_metrics()
{
}

/**
 * Description.
 */
function cairo_font_options_set_hint_style()
{
}

/**
 * Description.
 */
function cairo_font_options_set_subpixel_order()
{
}

/**
 * Description.
 */
function cairo_font_options_status()
{
}

/**
 * Description.
 */
function cairo_format_stride_for_width()
{
}

/**
 * Description.
 */
function cairo_image_surface_create_for_data()
{
}

/**
 * Description.
 */
function cairo_image_surface_create_from_png()
{
}

/**
 * Description.
 */
function cairo_image_surface_create()
{
}

/**
 * Description.
 */
function cairo_image_surface_get_data()
{
}

/**
 * Description.
 */
function cairo_image_surface_get_format()
{
}

/**
 * Description.
 */
function cairo_image_surface_get_height()
{
}

/**
 * Description.
 */
function cairo_image_surface_get_stride()
{
}

/**
 * Description.
 */
function cairo_image_surface_get_width()
{
}

/**
 * Creates a new scaling matrix.
 */
function cairo_matrix_create_scale()
{
}

/**
 * Alias of CairoMatrix::initTranslate.
 */
function cairo_matrix_create_translate()
{
}

/**
 * Description.
 */
function cairo_matrix_invert()
{
}

/**
 * Description.
 */
function cairo_matrix_multiply()
{
}

/**
 * Description.
 */
function cairo_matrix_rotate()
{
}

/**
 * Description.
 */
function cairo_matrix_transform_distance()
{
}

/**
 * Description.
 */
function cairo_matrix_transform_point()
{
}

/**
 * Description.
 */
function cairo_matrix_translate()
{
}

/**
 * Description.
 */
function cairo_pattern_add_color_stop_rgb()
{
}

/**
 * Description.
 */
function cairo_pattern_add_color_stop_rgba()
{
}

/**
 * Description.
 */
function cairo_pattern_create_for_surface()
{
}

/**
 * Description.
 */
function cairo_pattern_create_linear()
{
}

/**
 * Description.
 */
function cairo_pattern_create_radial()
{
}

/**
 * Description.
 */
function cairo_pattern_create_rgb()
{
}

/**
 * Description.
 */
function cairo_pattern_create_rgba()
{
}

/**
 * Description.
 */
function cairo_pattern_get_color_stop_count()
{
}

/**
 * Description.
 */
function cairo_pattern_get_color_stop_rgba()
{
}

/**
 * Description.
 */
function cairo_pattern_get_extend()
{
}

/**
 * Description.
 */
function cairo_pattern_get_filter()
{
}

/**
 * Description.
 */
function cairo_pattern_get_linear_points()
{
}

/**
 * Description.
 */
function cairo_pattern_get_matrix()
{
}

/**
 * Description.
 */
function cairo_pattern_get_radial_circles()
{
}

/**
 * Description.
 */
function cairo_pattern_get_rgba()
{
}

/**
 * Description.
 */
function cairo_pattern_get_surface()
{
}

/**
 * Description.
 */
function cairo_pattern_get_type()
{
}

/**
 * Description.
 */
function cairo_pattern_set_extend()
{
}

/**
 * Description.
 */
function cairo_pattern_set_filter()
{
}

/**
 * Description.
 */
function cairo_pattern_set_matrix()
{
}

/**
 * Description.
 */
function cairo_pattern_status()
{
}

/**
 * Description.
 */
function cairo_pdf_surface_create()
{
}

/**
 * Description.
 */
function cairo_pdf_surface_set_size()
{
}

/**
 * Description.
 */
function cairo_ps_get_levels()
{
}

/**
 * Description.
 */
function cairo_ps_level_to_string()
{
}

/**
 * Description.
 */
function cairo_ps_surface_create()
{
}

/**
 * Description.
 */
function cairo_ps_surface_dsc_begin_page_setup()
{
}

/**
 * Description.
 */
function cairo_ps_surface_dsc_begin_setup()
{
}

/**
 * Description.
 */
function cairo_ps_surface_dsc_comment()
{
}

/**
 * Description.
 */
function cairo_ps_surface_get_eps()
{
}

/**
 * Description.
 */
function cairo_ps_surface_restrict_to_level()
{
}

/**
 * Description.
 */
function cairo_ps_surface_set_eps()
{
}

/**
 * Description.
 */
function cairo_ps_surface_set_size()
{
}

/**
 * Description.
 */
function cairo_scaled_font_create()
{
}

/**
 * Description.
 */
function cairo_scaled_font_extents()
{
}

/**
 * Description.
 */
function cairo_scaled_font_get_ctm()
{
}

/**
 * Description.
 */
function cairo_scaled_font_get_font_face()
{
}

/**
 * Description.
 */
function cairo_scaled_font_get_font_matrix()
{
}

/**
 * Description.
 */
function cairo_scaled_font_get_font_options()
{
}

/**
 * Description.
 */
function cairo_scaled_font_get_scale_matrix()
{
}

/**
 * Description.
 */
function cairo_scaled_font_get_type()
{
}

/**
 * Description.
 */
function cairo_scaled_font_glyph_extents()
{
}

/**
 * Description.
 */
function cairo_scaled_font_status()
{
}

/**
 * Description.
 */
function cairo_scaled_font_text_extents()
{
}

/**
 * Description.
 */
function cairo_surface_copy_page()
{
}

/**
 * Description.
 */
function cairo_surface_create_similar()
{
}

/**
 * Description.
 */
function cairo_surface_finish()
{
}

/**
 * Description.
 */
function cairo_surface_flush()
{
}

/**
 * Description.
 */
function cairo_surface_get_content()
{
}

/**
 * Description.
 */
function cairo_surface_get_device_offset()
{
}

/**
 * Description.
 */
function cairo_surface_get_font_options()
{
}

/**
 * Description.
 */
function cairo_surface_get_type()
{
}

/**
 * Description.
 */
function cairo_surface_mark_dirty_rectangle()
{
}

/**
 * Description.
 */
function cairo_surface_mark_dirty()
{
}

/**
 * Description.
 */
function cairo_surface_set_device_offset()
{
}

/**
 * Description.
 */
function cairo_surface_set_fallback_resolution()
{
}

/**
 * Description.
 */
function cairo_surface_show_page()
{
}

/**
 * Description.
 */
function cairo_surface_status()
{
}

/**
 * Description.
 */
function cairo_surface_write_to_png()
{
}

/**
 * Description.
 */
function cairo_svg_surface_create()
{
}

/**
 * Description.
 */
function cairo_svg_surface_restrict_to_version()
{
}

/**
 * Description.
 */
function cairo_svg_version_to_string()
{
}

/**
 * Retrieves the availables font types.
 */
function cairo_available_fonts()
{
}

/**
 * Retrieves all available surfaces.
 */
function cairo_available_surfaces()
{
}

/**
 * Retrieves the current status as string.
 */
function cairo_status_to_string()
{
}

/**
 * Retrives cairo's library version.
 */
function cairo_version()
{
}

/**
 * Retrieves cairo version as string.
 */
function cairo_version_string()
{
}

/**
 * Appends a path to current path.
 */
function cairo_append_path()
{
}

/**
 * Adds a circular arc.
 */
function cairo_arc()
{
}

/**
 * Adds a negative arc.
 */
function cairo_arc_negative()
{
}

/**
 * Establishes a new clip region.
 */
function cairo_clip()
{
}

/**
 * Computes the area inside the current clip.
 */
function cairo_clip_extents()
{
}

/**
 * Establishes a new clip region from the current clip.
 */
function cairo_clip_preserve()
{
}

/**
 * Retrieves the current clip as a list of rectangles.
 */
function cairo_clip_rectangle_list()
{
}

/**
 * Closes the current path.
 */
function cairo_close_path()
{
}

/**
 * The copyPage purpose.
 */
function cairo_copy_page()
{
}

/**
 * Creates a copy of the current path.
 */
function cairo_copy_path()
{
}

/**
 * Gets a flattened copy of the current path.
 */
function cairo_copy_path_flat()
{
}

/**
 * Adds a curve.
 */
function cairo_curve_to()
{
}

/**
 * Transform a coordinate.
 */
function cairo_device_to_user()
{
}

/**
 * Transform a distance.
 */
function cairo_device_to_user_distance()
{
}

/**
 * Fills the current path.
 */
function cairo_fill()
{
}

/**
 * Computes the filled area.
 */
function cairo_fill_extents()
{
}

/**
 * Fills and preserve the current path.
 */
function cairo_fill_preserve()
{
}

/**
 * Get the font extents.
 */
function cairo_font_extents()
{
}

/**
 * The getAntialias purpose.
 */
function cairo_get_antialias()
{
}

/**
 * The getCurrentPoint purpose.
 */
function cairo_get_current_point()
{
}

/**
 * The getDash purpose.
 */
function cairo_get_dash()
{
}

/**
 * The getDashCount purpose.
 */
function cairo_get_dash_count()
{
}

/**
 * The getFillRule purpose.
 */
function cairo_get_fill_rule()
{
}

/**
 * The getFontFace purpose.
 */
function cairo_get_font_face()
{
}

/**
 * The getFontMatrix purpose.
 */
function cairo_get_font_matrix()
{
}

/**
 * The getFontOptions purpose.
 */
function cairo_get_font_options()
{
}

/**
 * The getGroupTarget purpose.
 */
function cairo_get_group_target()
{
}

/**
 * The getLineCap purpose.
 */
function cairo_get_line_cap()
{
}

/**
 * The getLineJoin purpose.
 */
function cairo_get_line_join()
{
}

/**
 * The getLineWidth purpose.
 */
function cairo_get_line_width()
{
}

/**
 * The getMatrix purpose.
 */
function cairo_get_matrix()
{
}

/**
 * The getMiterLimit purpose.
 */
function cairo_get_miter_limit()
{
}

/**
 * The getOperator purpose.
 */
function cairo_get_operator()
{
}

/**
 * The getScaledFont purpose.
 */
function cairo_get_scaled_font()
{
}

/**
 * The getSource purpose.
 */
function cairo_get_source()
{
}

/**
 * The getTarget purpose.
 */
function cairo_get_target()
{
}

/**
 * The getTolerance purpose.
 */
function cairo_get_tolerance()
{
}

/**
 * The glyphPath purpose.
 */
function cairo_glyph_path()
{
}

/**
 * The hasCurrentPoint purpose.
 */
function cairo_has_current_point()
{
}

/**
 * The identityMatrix purpose.
 */
function cairo_identity_matrix()
{
}

/**
 * The inFill purpose.
 */
function cairo_in_fill()
{
}

/**
 * The inStroke purpose.
 */
function cairo_in_stroke()
{
}

/**
 * The lineTo purpose.
 */
function cairo_line_to()
{
}

/**
 * The mask purpose.
 */
function cairo_mask()
{
}

/**
 * The maskSurface purpose.
 */
function cairo_mask_surface()
{
}

/**
 * The moveTo purpose.
 */
function cairo_move_to()
{
}

/**
 * The newPath purpose.
 */
function cairo_new_path()
{
}

/**
 * The newSubPath purpose.
 */
function cairo_new_sub_path()
{
}

/**
 * The paint purpose.
 */
function cairo_paint()
{
}

/**
 * The paintWithAlpha purpose.
 */
function cairo_paint_with_alpha()
{
}

/**
 * The pathExtents purpose.
 */
function cairo_path_extents()
{
}

/**
 * The popGroup purpose.
 */
function cairo_pop_group()
{
}

/**
 * The popGroupToSource purpose.
 */
function cairo_pop_group_to_source()
{
}

/**
 * The pushGroup purpose.
 */
function cairo_push_group()
{
}

/**
 * The pushGroupWithContent purpose.
 */
function cairo_push_group_with_content()
{
}

/**
 * The rectangle purpose.
 */
function cairo_rectangle()
{
}

/**
 * The relCurveTo purpose.
 */
function cairo_rel_curve_to()
{
}

/**
 * The relLineTo purpose.
 */
function cairo_rel_line_to()
{
}

/**
 * The relMoveTo purpose.
 */
function cairo_rel_move_to()
{
}

/**
 * The resetClip purpose.
 */
function cairo_reset_clip()
{
}

/**
 * The restore purpose.
 */
function cairo_restore()
{
}

/**
 * The rotate purpose.
 */
function cairo_rotate()
{
}

/**
 * The save purpose.
 */
function cairo_save()
{
}

/**
 * The scale purpose.
 */
function cairo_scale()
{
}

/**
 * The selectFontFace purpose.
 */
function cairo_select_font_face()
{
}

/**
 * The setAntialias purpose.
 */
function cairo_set_antialias()
{
}

/**
 * The setDash purpose.
 */
function cairo_set_dash()
{
}

/**
 * The setFillRule purpose.
 */
function cairo_set_fill_rule()
{
}

/**
 * The setFontFace purpose.
 */
function cairo_set_font_face()
{
}

/**
 * The setFontMatrix purpose.
 */
function cairo_set_font_matrix()
{
}

/**
 * The setFontOptions purpose.
 */
function cairo_set_font_options()
{
}

/**
 * The setFontSize purpose.
 */
function cairo_set_font_size()
{
}

/**
 * The setLineCap purpose.
 */
function cairo_set_line_cap()
{
}

/**
 * The setLineJoin purpose.
 */
function cairo_set_line_join()
{
}

/**
 * The setLineWidth purpose.
 */
function cairo_set_line_width()
{
}

/**
 * The setMatrix purpose.
 */
function cairo_set_matrix()
{
}

/**
 * The setMiterLimit purpose.
 */
function cairo_set_miter_limit()
{
}

/**
 * The setOperator purpose.
 */
function cairo_set_operator()
{
}

/**
 * The setScaledFont purpose.
 */
function cairo_set_scaled_font()
{
}

/**
 * The setSourceRGBA purpose.
 */
function cairo_set_source()
{
}

/**
 * The setSourceSurface purpose.
 */
function cairo_set_source_surface()
{
}

/**
 * The setTolerance purpose.
 */
function cairo_set_tolerance()
{
}

/**
 * The showPage purpose.
 */
function cairo_show_page()
{
}

/**
 * The showText purpose.
 */
function cairo_show_text()
{
}

/**
 * The status purpose.
 */
function cairo_status()
{
}

/**
 * The stroke purpose.
 */
function cairo_stroke()
{
}

/**
 * The strokeExtents purpose.
 */
function cairo_stroke_extents()
{
}

/**
 * The strokePreserve purpose.
 */
function cairo_stroke_preserve()
{
}

/**
 * The textExtents purpose.
 */
function cairo_text_extents()
{
}

/**
 * The textPath purpose.
 */
function cairo_text_path()
{
}

/**
 * The transform purpose.
 */
function cairo_transform()
{
}

/**
 * The translate purpose.
 */
function cairo_translate()
{
}

/**
 * The userToDevice purpose.
 */
function cairo_user_to_device()
{
}

/**
 * The userToDeviceDistance purpose.
 */
function cairo_user_to_device_distance()
{
}

/**
 * Used to retrieve a list of supported SVG versions.
 */
function cairo_svg_surface_get_versions()
{
}

/**
 * Creates a new CairoMatrix object.
 */
function cairo_matrix_init()
{
}

/**
 * Creates a new identity matrix.
 */
function cairo_matrix_init_identity()
{
}

/**
 * Creates a new rotated matrix.
 */
function cairo_matrix_init_rotate()
{
}

/**
 * Creates a new scaling matrix.
 */
function cairo_matrix_init_scale()
{
}

/**
 * Creates a new translation matrix.
 */
function cairo_matrix_init_translate()
{
}

/**
 * Applies scaling to a matrix.
 */
function cairo_matrix_scale()
{
}

/**
 * Determine the type of an image.
 */
function exif_imagetype()
{
}

/**
 * Reads the EXIF headers from JPEG or TIFF.
 */
function exif_read_data()
{
}

/**
 * Get the header name for an index.
 */
function exif_tagname()
{
}

/**
 * Retrieve the embedded thumbnail of a TIFF or JPEG image.
 */
function exif_thumbnail()
{
}

/**
 * Alias of exif_read_data.
 */
function read_exif_data()
{
}

/**
 * Retrieve information about the currently installed GD library.
 */
function gd_info()
{
}

/**
 * Get the size of an image.
 */
function getimagesize()
{
}

/**
 * Get the size of an image from a string.
 */
function getimagesizefromstring()
{
}

/**
 * Get file extension for image type.
 */
function image_type_to_extension()
{
}

/**
 * Get Mime-Type for image-type returned by getimagesize,   exif_read_data, exif_thumbnail, exif_imagetype.
 */
function image_type_to_mime_type()
{
}

/**
 * Output image to browser or file.
 */
function image2wbmp()
{
}

/**
 * Return an image containing the affine transformed src image, using an optional clipping area.
 */
function imageaffine()
{
}

/**
 * Concat two matrices (as in doing many ops in one go).
 */
function imageaffinematrixconcat()
{
}

/**
 * Return an image containing the affine tramsformed src image, using an optional clipping area.
 */
function imageaffinematrixget()
{
}

/**
 * Set the blending mode for an image.
 */
function imagealphablending()
{
}

/**
 * Should antialias functions be used or not.
 */
function imageantialias()
{
}

/**
 * Draws an arc.
 */
function imagearc()
{
}

/**
 * Draw a character horizontally.
 */
function imagechar()
{
}

/**
 * Draw a character vertically.
 */
function imagecharup()
{
}

/**
 * Allocate a color for an image.
 */
function imagecolorallocate()
{
}

/**
 * Allocate a color for an image.
 */
function imagecolorallocatealpha()
{
}

/**
 * Get the index of the color of a pixel.
 */
function imagecolorat()
{
}

/**
 * Get the index of the closest color to the specified color.
 */
function imagecolorclosest()
{
}

/**
 * Get the index of the closest color to the specified color + alpha.
 */
function imagecolorclosestalpha()
{
}

/**
 * Get the index of the color which has the hue, white and blackness.
 */
function imagecolorclosesthwb()
{
}

/**
 * De-allocate a color for an image.
 */
function imagecolordeallocate()
{
}

/**
 * Get the index of the specified color.
 */
function imagecolorexact()
{
}

/**
 * Get the index of the specified color + alpha.
 */
function imagecolorexactalpha()
{
}

/**
 * Makes the colors of the palette version of an image more closely match the true color version.
 */
function imagecolormatch()
{
}

/**
 * Get the index of the specified color or its closest possible alternative.
 */
function imagecolorresolve()
{
}

/**
 * Get the index of the specified color + alpha or its closest possible alternative.
 */
function imagecolorresolvealpha()
{
}

/**
 * Set the color for the specified palette index.
 */
function imagecolorset()
{
}

/**
 * Get the colors for an index.
 */
function imagecolorsforindex()
{
}

/**
 * Find out the number of colors in an image's palette.
 */
function imagecolorstotal()
{
}

/**
 * Define a color as transparent.
 */
function imagecolortransparent()
{
}

/**
 * Apply a 3x3 convolution matrix, using coefficient and offset.
 */
function imageconvolution()
{
}

/**
 * Copy part of an image.
 */
function imagecopy()
{
}

/**
 * Copy and merge part of an image.
 */
function imagecopymerge()
{
}

/**
 * Copy and merge part of an image with gray scale.
 */
function imagecopymergegray()
{
}

/**
 * Copy and resize part of an image with resampling.
 */
function imagecopyresampled()
{
}

/**
 * Copy and resize part of an image.
 */
function imagecopyresized()
{
}

/**
 * Create a new palette based image.
 */
function imagecreate()
{
}

/**
 * Create a new image from GD2 file or URL.
 */
function imagecreatefromgd2()
{
}

/**
 * Create a new image from a given part of GD2 file or URL.
 */
function imagecreatefromgd2part()
{
}

/**
 * Create a new image from GD file or URL.
 */
function imagecreatefromgd()
{
}

/**
 * Create a new image from file or URL.
 */
function imagecreatefromgif()
{
}

/**
 * Create a new image from file or URL.
 */
function imagecreatefromjpeg()
{
}

/**
 * Create a new image from file or URL.
 */
function imagecreatefrompng()
{
}

/**
 * Create a new image from the image stream in the string.
 */
function imagecreatefromstring()
{
}

/**
 * Create a new image from file or URL.
 */
function imagecreatefromwbmp()
{
}

/**
 * Create a new image from file or URL.
 */
function imagecreatefromwebp()
{
}

/**
 * Create a new image from file or URL.
 */
function imagecreatefromxbm()
{
}

/**
 * Create a new image from file or URL.
 */
function imagecreatefromxpm()
{
}

/**
 * Create a new true color image.
 */
function imagecreatetruecolor()
{
}

/**
 * Crop an image using the given coordinates and size, x, y, width and height.
 */
function imagecrop()
{
}

/**
 * Crop an image automatically using one of the available modes.
 */
function imagecropauto()
{
}

/**
 * Draw a dashed line.
 */
function imagedashedline()
{
}

/**
 * Destroy an image.
 */
function imagedestroy()
{
}

/**
 * Draw an ellipse.
 */
function imageellipse()
{
}

/**
 * Flood fill.
 */
function imagefill()
{
}

/**
 * Draw a partial arc and fill it.
 */
function imagefilledarc()
{
}

/**
 * Draw a filled ellipse.
 */
function imagefilledellipse()
{
}

/**
 * Draw a filled polygon.
 */
function imagefilledpolygon()
{
}

/**
 * Draw a filled rectangle.
 */
function imagefilledrectangle()
{
}

/**
 * Flood fill to specific color.
 */
function imagefilltoborder()
{
}

/**
 * Applies a filter to an image.
 */
function imagefilter()
{
}

/**
 * Flips an image using a given mode.
 */
function imageflip()
{
}

/**
 * Get font height.
 */
function imagefontheight()
{
}

/**
 * Get font width.
 */
function imagefontwidth()
{
}

/**
 * Give the bounding box of a text using fonts via freetype2.
 */
function imageftbbox()
{
}

/**
 * Write text to the image using fonts using FreeType 2.
 */
function imagefttext()
{
}

/**
 * Apply a gamma correction to a GD image.
 */
function imagegammacorrect()
{
}

/**
 * Output GD2 image to browser or file.
 */
function imagegd2()
{
}

/**
 * Output GD image to browser or file.
 */
function imagegd()
{
}

/**
 * Output image to browser or file.
 */
function imagegif()
{
}

/**
 * Captures the whole screen.
 */
function imagegrabscreen()
{
}

/**
 * Captures a window.
 */
function imagegrabwindow()
{
}

/**
 * Enable or disable interlace.
 */
function imageinterlace()
{
}

/**
 * Finds whether an image is a truecolor image.
 */
function imageistruecolor()
{
}

/**
 * Output image to browser or file.
 */
function imagejpeg()
{
}

/**
 * Set the alpha blending flag to use the bundled libgd layering effects.
 */
function imagelayereffect()
{
}

/**
 * Draw a line.
 */
function imageline()
{
}

/**
 * Load a new font.
 */
function imageloadfont()
{
}

/**
 * Copy the palette from one image to another.
 */
function imagepalettecopy()
{
}

/**
 * Converts a palette based image to true color.
 */
function imagepalettetotruecolor()
{
}

/**
 * Output a PNG image to either the browser or a file.
 */
function imagepng()
{
}

/**
 * Draws a polygon.
 */
function imagepolygon()
{
}

/**
 * Give the bounding box of a text rectangle using PostScript Type1 fonts.
 */
function imagepsbbox()
{
}

/**
 * Change the character encoding vector of a font.
 */
function imagepsencodefont()
{
}

/**
 * Extend or condense a font.
 */
function imagepsextendfont()
{
}

/**
 * Free memory used by a PostScript Type 1 font.
 */
function imagepsfreefont()
{
}

/**
 * Load a PostScript Type 1 font from file.
 */
function imagepsloadfont()
{
}

/**
 * Slant a font.
 */
function imagepsslantfont()
{
}

/**
 * Draws a text over an image using PostScript Type1 fonts.
 */
function imagepstext()
{
}

/**
 * Draw a rectangle.
 */
function imagerectangle()
{
}

/**
 * Rotate an image with a given angle.
 */
function imagerotate()
{
}

/**
 * Set the flag to save full alpha channel information (as opposed to single-color transparency) when saving PNG images.
 */
function imagesavealpha()
{
}

/**
 * Scale an image using the given new width and height.
 */
function imagescale()
{
}

/**
 * Set the brush image for line drawing.
 */
function imagesetbrush()
{
}

/**
 * Set the interpolation method.
 */
function imagesetinterpolation()
{
}

/**
 * Set a single pixel.
 */
function imagesetpixel()
{
}

/**
 * Set the style for line drawing.
 */
function imagesetstyle()
{
}

/**
 * Set the thickness for line drawing.
 */
function imagesetthickness()
{
}

/**
 * Set the tile image for filling.
 */
function imagesettile()
{
}

/**
 * Draw a string horizontally.
 */
function imagestring()
{
}

/**
 * Draw a string vertically.
 */
function imagestringup()
{
}

/**
 * Get image width.
 */
function imagesx()
{
}

/**
 * Get image height.
 */
function imagesy()
{
}

/**
 * Convert a true color image to a palette image.
 */
function imagetruecolortopalette()
{
}

/**
 * Give the bounding box of a text using TrueType fonts.
 */
function imagettfbbox()
{
}

/**
 * Write text to the image using TrueType fonts.
 */
function imagettftext()
{
}

/**
 * Return the image types supported by this PHP build.
 */
function imagetypes()
{
}

/**
 * Output image to browser or file.
 */
function imagewbmp()
{
}

/**
 * Output an WebP image to browser or file.
 */
function imagewebp()
{
}

/**
 * Output an XBM image to browser or file.
 */
function imagexbm()
{
}

/**
 * Embeds binary IPTC data into a JPEG image.
 */
function iptcembed()
{
}

/**
 * Parse a binary IPTC block into single tags..
 */
function iptcparse()
{
}

/**
 * Convert JPEG image file to WBMP image file.
 */
function jpeg2wbmp()
{
}

/**
 * Convert PNG image file to WBMP image file.
 */
function png2wbmp()
{
}

/**
 * Authenticate against a Cyrus IMAP server.
 */
function cyrus_authenticate()
{
}

/**
 * Bind callbacks to a Cyrus IMAP connection.
 */
function cyrus_bind()
{
}

/**
 * Close connection to a Cyrus IMAP server.
 */
function cyrus_close()
{
}

/**
 * Connect to a Cyrus IMAP server.
 */
function cyrus_connect()
{
}

/**
 * Send a query to a Cyrus IMAP server.
 */
function cyrus_query()
{
}

/**
 * Unbind ....
 */
function cyrus_unbind()
{
}

/**
 * Convert an 8bit string to a quoted-printable string.
 */
function imap_8bit()
{
}

/**
 * Returns all IMAP alert messages that have occurred.
 */
function imap_alerts()
{
}

/**
 * Append a string message to a specified mailbox.
 */
function imap_append()
{
}

/**
 * Decode BASE64 encoded text.
 */
function imap_base64()
{
}

/**
 * Convert an 8bit string to a base64 string.
 */
function imap_binary()
{
}

/**
 * Read the message body.
 */
function imap_body()
{
}

/**
 * Read the structure of a specified body section of a specific message.
 */
function imap_bodystruct()
{
}

/**
 * Check current mailbox.
 */
function imap_check()
{
}

/**
 * Clears flags on messages.
 */
function imap_clearflag_full()
{
}

/**
 * Close an IMAP stream.
 */
function imap_close()
{
}

/**
 * Alias of imap_createmailbox.
 */
function imap_create()
{
}

/**
 * Create a new mailbox.
 */
function imap_createmailbox()
{
}

/**
 * Mark a message for deletion from current mailbox.
 */
function imap_delete()
{
}

/**
 * Delete a mailbox.
 */
function imap_deletemailbox()
{
}

/**
 * Returns all of the IMAP errors that have occurred.
 */
function imap_errors()
{
}

/**
 * Delete all messages marked for deletion.
 */
function imap_expunge()
{
}

/**
 * Read an overview of the information in the headers of the given message.
 */
function imap_fetch_overview()
{
}

/**
 * Fetch a particular section of the body of the message.
 */
function imap_fetchbody()
{
}

/**
 * Returns header for a message.
 */
function imap_fetchheader()
{
}

/**
 * Fetch MIME headers for a particular section of the message.
 */
function imap_fetchmime()
{
}

/**
 * Read the structure of a particular message.
 */
function imap_fetchstructure()
{
}

/**
 * Alias of imap_body.
 */
function imap_fetchtext()
{
}

/**
 * Clears IMAP cache.
 */
function imap_gc()
{
}

/**
 * Retrieve the quota level settings, and usage statics per mailbox.
 */
function imap_get_quota()
{
}

/**
 * Retrieve the quota settings per user.
 */
function imap_get_quotaroot()
{
}

/**
 * Gets the ACL for a given mailbox.
 */
function imap_getacl()
{
}

/**
 * Read the list of mailboxes, returning detailed information on each one.
 */
function imap_getmailboxes()
{
}

/**
 * List all the subscribed mailboxes.
 */
function imap_getsubscribed()
{
}

/**
 * Alias of imap_headerinfo.
 */
function imap_header()
{
}

/**
 * Read the header of the message.
 */
function imap_headerinfo()
{
}

/**
 * Returns headers for all messages in a mailbox.
 */
function imap_headers()
{
}

/**
 * Gets the last IMAP error that occurred during this page request.
 */
function imap_last_error()
{
}

/**
 * Read the list of mailboxes.
 */
function imap_list()
{
}

/**
 * Alias of imap_list.
 */
function imap_listmailbox()
{
}

/**
 * Returns the list of mailboxes that matches the given text.
 */
function imap_listscan()
{
}

/**
 * Alias of imap_lsub.
 */
function imap_listsubscribed()
{
}

/**
 * List all the subscribed mailboxes.
 */
function imap_lsub()
{
}

/**
 * Create a MIME message based on given envelope and body sections.
 */
function imap_mail_compose()
{
}

/**
 * Copy specified messages to a mailbox.
 */
function imap_mail_copy()
{
}

/**
 * Move specified messages to a mailbox.
 */
function imap_mail_move()
{
}

/**
 * Send an email message.
 */
function imap_mail()
{
}

/**
 * Get information about the current mailbox.
 */
function imap_mailboxmsginfo()
{
}

/**
 * Decode MIME header elements.
 */
function imap_mime_header_decode()
{
}

/**
 * Gets the message sequence number for the given UID.
 */
function imap_msgno()
{
}

/**
 * Gets the number of messages in the current mailbox.
 */
function imap_num_msg()
{
}

/**
 * Gets the number of recent messages in current mailbox.
 */
function imap_num_recent()
{
}

/**
 * Open an IMAP stream to a mailbox.
 */
function imap_open()
{
}

/**
 * Check if the IMAP stream is still active.
 */
function imap_ping()
{
}

/**
 * Convert a quoted-printable string to an 8 bit string.
 */
function imap_qprint()
{
}

/**
 * Alias of imap_renamemailbox.
 */
function imap_rename()
{
}

/**
 * Rename an old mailbox to new mailbox.
 */
function imap_renamemailbox()
{
}

/**
 * Reopen IMAP stream to new mailbox.
 */
function imap_reopen()
{
}

/**
 * Parses an address string.
 */
function imap_rfc822_parse_adrlist()
{
}

/**
 * Parse mail headers from a string.
 */
function imap_rfc822_parse_headers()
{
}

/**
 * Returns a properly formatted email address given the mailbox, host, and personal info.
 */
function imap_rfc822_write_address()
{
}

/**
 * Save a specific body section to a file.
 */
function imap_savebody()
{
}

/**
 * Alias of imap_listscan.
 */
function imap_scan()
{
}

/**
 * Alias of imap_listscan.
 */
function imap_scanmailbox()
{
}

/**
 * This function returns an array of messages matching the given search criteria.
 */
function imap_search()
{
}

/**
 * Sets a quota for a given mailbox.
 */
function imap_set_quota()
{
}

/**
 * Sets the ACL for a given mailbox.
 */
function imap_setacl()
{
}

/**
 * Sets flags on messages.
 */
function imap_setflag_full()
{
}

/**
 * Gets and sort messages.
 */
function imap_sort()
{
}

/**
 * Returns status information on a mailbox.
 */
function imap_status()
{
}

/**
 * Subscribe to a mailbox.
 */
function imap_subscribe()
{
}

/**
 * Returns a tree of threaded message.
 */
function imap_thread()
{
}

/**
 * Set or fetch imap timeout.
 */
function imap_timeout()
{
}

/**
 * This function returns the UID for the given message sequence number.
 */
function imap_uid()
{
}

/**
 * Unmark the message which is marked deleted.
 */
function imap_undelete()
{
}

/**
 * Unsubscribe from a mailbox.
 */
function imap_unsubscribe()
{
}

/**
 * Decodes a modified UTF-7 encoded string.
 */
function imap_utf7_decode()
{
}

/**
 * Converts ISO-8859-1 string to modified UTF-7 text.
 */
function imap_utf7_encode()
{
}

/**
 * Converts MIME-encoded text to UTF-8.
 */
function imap_utf8()
{
}

/**
 * Calculate the hash value needed by EZMLM.
 */
function ezmlm_hash()
{
}

/**
 * Send mail.
 */
function mail()
{
}

/**
 * Gets the best way of encoding.
 */
function mailparse_determine_best_xfer_encoding()
{
}

/**
 * Create a mime mail resource.
 */
function mailparse_msg_create()
{
}

/**
 * Extracts/decodes a message section.
 */
function mailparse_msg_extract_part_file()
{
}

/**
 * Extracts/decodes a message section.
 */
function mailparse_msg_extract_part()
{
}

/**
 * Extracts a message section including headers without decoding the transfer encoding.
 */
function mailparse_msg_extract_whole_part_file()
{
}

/**
 * Frees a MIME resource.
 */
function mailparse_msg_free()
{
}

/**
 * Returns an associative array of info about the message.
 */
function mailparse_msg_get_part_data()
{
}

/**
 * Returns a handle on a given section in a mimemessage.
 */
function mailparse_msg_get_part()
{
}

/**
 * Returns an array of mime section names in the supplied message.
 */
function mailparse_msg_get_structure()
{
}

/**
 * Parses a file.
 */
function mailparse_msg_parse_file()
{
}

/**
 * Incrementally parse data into buffer.
 */
function mailparse_msg_parse()
{
}

/**
 * Parse RFC 822 compliant addresses.
 */
function mailparse_rfc822_parse_addresses()
{
}

/**
 * Streams data from source file pointer, apply encoding and write to destfp.
 */
function mailparse_stream_encode()
{
}

/**
 * Scans the data from fp and extract each embedded uuencoded file.
 */
function mailparse_uudecode_all()
{
}

/**
 * Add alias to an existing virtual domain.
 */
function vpopmail_add_alias_domain_ex()
{
}

/**
 * Add an alias for a virtual domain.
 */
function vpopmail_add_alias_domain()
{
}

/**
 * Add a new virtual domain.
 */
function vpopmail_add_domain_ex()
{
}

/**
 * Add a new virtual domain.
 */
function vpopmail_add_domain()
{
}

/**
 * Add a new user to the specified virtual domain.
 */
function vpopmail_add_user()
{
}

/**
 * Insert a virtual alias.
 */
function vpopmail_alias_add()
{
}

/**
 * Deletes all virtual aliases of a domain.
 */
function vpopmail_alias_del_domain()
{
}

/**
 * Deletes all virtual aliases of a user.
 */
function vpopmail_alias_del()
{
}

/**
 * Get all lines of an alias for a domain.
 */
function vpopmail_alias_get_all()
{
}

/**
 * Get all lines of an alias for a domain.
 */
function vpopmail_alias_get()
{
}

/**
 * Attempt to validate a username/domain/password.
 */
function vpopmail_auth_user()
{
}

/**
 * Delete a virtual domain.
 */
function vpopmail_del_domain_ex()
{
}

/**
 * Delete a virtual domain.
 */
function vpopmail_del_domain()
{
}

/**
 * Delete a user from a virtual domain.
 */
function vpopmail_del_user()
{
}

/**
 * Get text message for last vpopmail error.
 */
function vpopmail_error()
{
}

/**
 * Change a virtual user's password.
 */
function vpopmail_passwd()
{
}

/**
 * Sets a virtual user's quota.
 */
function vpopmail_set_user_quota()
{
}

/**
 * Add two arbitrary precision numbers.
 */
function bcadd()
{
}

/**
 * Compare two arbitrary precision numbers.
 */
function bccomp()
{
}

/**
 * Divide two arbitrary precision numbers.
 */
function bcdiv()
{
}

/**
 * Get modulus of an arbitrary precision number.
 */
function bcmod()
{
}

/**
 * Multiply two arbitrary precision numbers.
 */
function bcmul()
{
}

/**
 * Raise an arbitrary precision number to another.
 */
function bcpow()
{
}

/**
 * Raise an arbitrary precision number to another, reduced by a specified modulus.
 */
function bcpowmod()
{
}

/**
 * Set default scale parameter for all bc math functions.
 */
function bcscale()
{
}

/**
 * Get the square root of an arbitrary precision number.
 */
function bcsqrt()
{
}

/**
 * Subtract one arbitrary precision number from another.
 */
function bcsub()
{
}

/**
 * Absolute value.
 */
function gmp_abs()
{
}

/**
 * Add numbers.
 */
function gmp_add()
{
}

/**
 * Bitwise AND.
 */
function gmp_and()
{
}

/**
 * Clear bit.
 */
function gmp_clrbit()
{
}

/**
 * Compare numbers.
 */
function gmp_cmp()
{
}

/**
 * Calculates one's complement.
 */
function gmp_com()
{
}

/**
 * Divide numbers.
 */
function gmp_div_q()
{
}

/**
 * Divide numbers and get quotient and remainder.
 */
function gmp_div_qr()
{
}

/**
 * Remainder of the division of numbers.
 */
function gmp_div_r()
{
}

/**
 * Alias of gmp_div_q.
 */
function gmp_div()
{
}

/**
 * Exact division of numbers.
 */
function gmp_divexact()
{
}

/**
 * Export to a binary string.
 */
function gmp_export()
{
}

/**
 * Factorial.
 */
function gmp_fact()
{
}

/**
 * Calculate GCD.
 */
function gmp_gcd()
{
}

/**
 * Calculate GCD and multipliers.
 */
function gmp_gcdext()
{
}

/**
 * Hamming distance.
 */
function gmp_hamdist()
{
}

/**
 * Import from a binary string.
 */
function gmp_import()
{
}

/**
 * Create GMP number.
 */
function gmp_init()
{
}

/**
 * Convert GMP number to integer.
 */
function gmp_intval()
{
}

/**
 * Inverse by modulo.
 */
function gmp_invert()
{
}

/**
 * Jacobi symbol.
 */
function gmp_jacobi()
{
}

/**
 * Legendre symbol.
 */
function gmp_legendre()
{
}

/**
 * Modulo operation.
 */
function gmp_mod()
{
}

/**
 * Multiply numbers.
 */
function gmp_mul()
{
}

/**
 * Negate number.
 */
function gmp_neg()
{
}

/**
 * Find next prime number.
 */
function gmp_nextprime()
{
}

/**
 * Bitwise OR.
 */
function gmp_or()
{
}

/**
 * Perfect square check.
 */
function gmp_perfect_square()
{
}

/**
 * Population count.
 */
function gmp_popcount()
{
}

/**
 * Raise number into power.
 */
function gmp_pow()
{
}

/**
 * Raise number into power with modulo.
 */
function gmp_powm()
{
}

/**
 * Check if number is "probably prime".
 */
function gmp_prob_prime()
{
}

/**
 * Random number.
 */
function gmp_random_bits()
{
}

/**
 * Random number.
 */
function gmp_random_range()
{
}

/**
 * Random number.
 */
function gmp_random()
{
}

/**
 * Take the integer part of nth root.
 */
function gmp_root()
{
}

/**
 * Take the integer part and remainder of nth root.
 */
function gmp_rootrem()
{
}

/**
 * Scan for 0.
 */
function gmp_scan0()
{
}

/**
 * Scan for 1.
 */
function gmp_scan1()
{
}

/**
 * Set bit.
 */
function gmp_setbit()
{
}

/**
 * Sign of number.
 */
function gmp_sign()
{
}

/**
 * Calculate square root.
 */
function gmp_sqrt()
{
}

/**
 * Square root with remainder.
 */
function gmp_sqrtrem()
{
}

/**
 * Convert GMP number to string.
 */
function gmp_strval()
{
}

/**
 * Subtract numbers.
 */
function gmp_sub()
{
}

/**
 * Tests if a bit is set.
 */
function gmp_testbit()
{
}

/**
 * Bitwise XOR.
 */
function gmp_xor()
{
}

/**
 * Absolute value.
 */
function abs()
{
}

/**
 * Arc cosine.
 */
function acos()
{
}

/**
 * Inverse hyperbolic cosine.
 */
function acosh()
{
}

/**
 * Arc sine.
 */
function asin()
{
}

/**
 * Inverse hyperbolic sine.
 */
function asinh()
{
}

/**
 * Arc tangent of two variables.
 */
function atan2()
{
}

/**
 * Arc tangent.
 */
function atan()
{
}

/**
 * Inverse hyperbolic tangent.
 */
function atanh()
{
}

/**
 * Convert a number between arbitrary bases.
 */
function base_convert()
{
}

/**
 * Binary to decimal.
 */
function bindec()
{
}

/**
 * Round fractions up.
 */
function ceil()
{
}

/**
 * Cosine.
 */
function cos()
{
}

/**
 * Hyperbolic cosine.
 */
function cosh()
{
}

/**
 * Decimal to binary.
 */
function decbin()
{
}

/**
 * Decimal to hexadecimal.
 */
function dechex()
{
}

/**
 * Decimal to octal.
 */
function decoct()
{
}

/**
 * Converts the number in degrees to the radian equivalent.
 */
function deg2rad()
{
}

/**
 * Calculates the exponent of e.
 */
function exp()
{
}

/**
 * Returns exp(number) - 1, computed in a way that is accurate even   when the value of number is close to zero.
 */
function expm1()
{
}

/**
 * Round fractions down.
 */
function floor()
{
}

/**
 * Returns the floating point remainder (modulo) of the division  of the arguments.
 */
function fmod()
{
}

/**
 * Show largest possible random value.
 */
function getrandmax()
{
}

/**
 * Hexadecimal to decimal.
 */
function hexdec()
{
}

/**
 * Calculate the length of the hypotenuse of a right-angle triangle.
 */
function hypot()
{
}

/**
 * Finds whether a value is a legal finite number.
 */
function is_finite()
{
}

/**
 * Finds whether a value is infinite.
 */
function is_infinite()
{
}

/**
 * Finds whether a value is not a number.
 */
function is_nan()
{
}

/**
 * Combined linear congruential generator.
 */
function lcg_value()
{
}

/**
 * Base-10 logarithm.
 */
function log10()
{
}

/**
 * Returns log(1 + number), computed in a way that is accurate even when   the value of number is close to zero.
 */
function log1p()
{
}

/**
 * Natural logarithm.
 */
function log()
{
}

/**
 * Find highest value.
 */
function max()
{
}

/**
 * Find lowest value.
 */
function min()
{
}

/**
 * Show largest possible random value.
 */
function mt_getrandmax()
{
}

/**
 * Generate a better random value.
 */
function mt_rand()
{
}

/**
 * Seed the better random number generator.
 */
function mt_srand()
{
}

/**
 * Octal to decimal.
 */
function octdec()
{
}

/**
 * Get value of pi.
 */
function pi()
{
}

/**
 * Exponential expression.
 */
function pow()
{
}

/**
 * Converts the radian number to the equivalent number in degrees.
 */
function rad2deg()
{
}

/**
 * Generate a random integer.
 */
function rand()
{
}

/**
 * Rounds a float.
 */
function round()
{
}

/**
 * Sine.
 */
function sin()
{
}

/**
 * Hyperbolic sine.
 */
function sinh()
{
}

/**
 * Square root.
 */
function sqrt()
{
}

/**
 * Seed the random number generator.
 */
function srand()
{
}

/**
 * Tangent.
 */
function tan()
{
}

/**
 * Hyperbolic tangent.
 */
function tanh()
{
}

/**
 * Returns the absolute deviation of an array of values.
 */
function stats_absolute_deviation()
{
}

/**
 * CDF function for BETA Distribution. Calculates any one parameter of the beta distribution given values for the others..
 */
function stats_cdf_beta()
{
}

/**
 * Calculates any one parameter of the binomial distribution given values for the others..
 */
function stats_cdf_binomial()
{
}

/**
 * Not documented.
 */
function stats_cdf_cauchy()
{
}

/**
 * Calculates any one parameter of the chi-square distribution given values for the others..
 */
function stats_cdf_chisquare()
{
}

/**
 * Not documented.
 */
function stats_cdf_exponential()
{
}

/**
 * Calculates any one parameter of the F distribution given values for the others..
 */
function stats_cdf_f()
{
}

/**
 * Calculates any one parameter of the gamma distribution given values for the others..
 */
function stats_cdf_gamma()
{
}

/**
 * Not documented.
 */
function stats_cdf_laplace()
{
}

/**
 * Not documented.
 */
function stats_cdf_logistic()
{
}

/**
 * Calculates any one parameter of the negative binomial distribution given values for the others..
 */
function stats_cdf_negative_binomial()
{
}

/**
 * Calculates any one parameter of the non-central chi-square distribution given values for the others..
 */
function stats_cdf_noncentral_chisquare()
{
}

/**
 * Calculates any one parameter of the Non-central F distribution given values for the others..
 */
function stats_cdf_noncentral_f()
{
}

/**
 * Calculates any one parameter of the Poisson distribution given values for the others..
 */
function stats_cdf_poisson()
{
}

/**
 * Calculates any one parameter of the T distribution given values for the others..
 */
function stats_cdf_t()
{
}

/**
 * Not documented.
 */
function stats_cdf_uniform()
{
}

/**
 * Not documented.
 */
function stats_cdf_weibull()
{
}

/**
 * Computes the covariance of two data sets.
 */
function stats_covariance()
{
}

/**
 * Not documented.
 */
function stats_den_uniform()
{
}

/**
 * Not documented.
 */
function stats_dens_beta()
{
}

/**
 * Not documented.
 */
function stats_dens_cauchy()
{
}

/**
 * Not documented.
 */
function stats_dens_chisquare()
{
}

/**
 * Not documented.
 */
function stats_dens_exponential()
{
}

/**
 * .
 */
function stats_dens_f()
{
}

/**
 * Not documented.
 */
function stats_dens_gamma()
{
}

/**
 * Not documented.
 */
function stats_dens_laplace()
{
}

/**
 * Not documented.
 */
function stats_dens_logistic()
{
}

/**
 * Not documented.
 */
function stats_dens_negative_binomial()
{
}

/**
 * Not documented.
 */
function stats_dens_normal()
{
}

/**
 * Not documented.
 */
function stats_dens_pmf_binomial()
{
}

/**
 * .
 */
function stats_dens_pmf_hypergeometric()
{
}

/**
 * Not documented.
 */
function stats_dens_pmf_poisson()
{
}

/**
 * Not documented.
 */
function stats_dens_t()
{
}

/**
 * Not documented.
 */
function stats_dens_weibull()
{
}

/**
 * Returns the harmonic mean of an array of values.
 */
function stats_harmonic_mean()
{
}

/**
 * Computes the kurtosis of the data in the array.
 */
function stats_kurtosis()
{
}

/**
 * Generates beta random deviate.
 */
function stats_rand_gen_beta()
{
}

/**
 * Generates random deviate from the distribution of a chisquare with "df" degrees of freedom random variable..
 */
function stats_rand_gen_chisquare()
{
}

/**
 * Generates a single random deviate from an exponential distribution with mean "av".
 */
function stats_rand_gen_exponential()
{
}

/**
 * Generates a random deviate.
 */
function stats_rand_gen_f()
{
}

/**
 * Generates uniform float between low (exclusive) and high (exclusive).
 */
function stats_rand_gen_funiform()
{
}

/**
 * Generates random deviates from a gamma distribution.
 */
function stats_rand_gen_gamma()
{
}

/**
 * Generates a single random deviate from a negative binomial distribution. Arguments : n - the number of trials in the negative binomial distribution from which a random deviate is to be generated (n > 0), p - the probability of an event (0 < p < 1))..
 */
function stats_rand_gen_ibinomial_negative()
{
}

/**
 * Generates a single random deviate from a binomial distribution whose number of trials is "n" (n >= 0) and whose probability of an event in each trial is "pp" ([0;1]). Method : algorithm BTPE.
 */
function stats_rand_gen_ibinomial()
{
}

/**
 * Generates random integer between 1 and 2147483562.
 */
function stats_rand_gen_int()
{
}

/**
 * Generates a single random deviate from a Poisson distribution with mean "mu" (mu >= 0.0)..
 */
function stats_rand_gen_ipoisson()
{
}

/**
 * Generates integer uniformly distributed between LOW (inclusive) and HIGH (inclusive).
 */
function stats_rand_gen_iuniform()
{
}

/**
 * Generates random deviate from the distribution of a noncentral chisquare with "df" degrees of freedom and noncentrality parameter "xnonc". d must be >= 1.0, xnonc must >= 0.0.
 */
function stats_rand_gen_noncenral_chisquare()
{
}

/**
 * Generates a random deviate from the noncentral F (variance ratio) distribution with "dfn" degrees of freedom in the numerator, and "dfd" degrees of freedom in the denominator, and noncentrality parameter "xnonc". Method : directly generates ratio of noncentral numerator chisquare variate to central denominator chisquare variate..
 */
function stats_rand_gen_noncentral_f()
{
}

/**
 * Generates a single random deviate from a noncentral T distribution.
 */
function stats_rand_gen_noncentral_t()
{
}

/**
 * Generates a single random deviate from a normal distribution with mean, av, and standard deviation, sd (sd >= 0). Method : Renames SNORM from TOMS as slightly modified by BWB to use RANF instead of SUNIF..
 */
function stats_rand_gen_normal()
{
}

/**
 * Generates a single random deviate from a T distribution.
 */
function stats_rand_gen_t()
{
}

/**
 * Not documented.
 */
function stats_rand_get_seeds()
{
}

/**
 * generate two seeds for the RGN random number generator.
 */
function stats_rand_phrase_to_seeds()
{
}

/**
 * Returns a random floating point number from a uniform distribution over 0 - 1 (endpoints of this interval are not returned) using the current generator.
 */
function stats_rand_ranf()
{
}

/**
 * Not documented.
 */
function stats_rand_setall()
{
}

/**
 * Computes the skewness of the data in the array.
 */
function stats_skew()
{
}

/**
 * Returns the standard deviation.
 */
function stats_standard_deviation()
{
}

/**
 * Not documented.
 */
function stats_stat_binomial_coef()
{
}

/**
 * Not documented.
 */
function stats_stat_correlation()
{
}

/**
 * Not documented.
 */
function stats_stat_gennch()
{
}

/**
 * Not documented.
 */
function stats_stat_independent_t()
{
}

/**
 * .
 */
function stats_stat_innerproduct()
{
}

/**
 * Calculates any one parameter of the noncentral t distribution give values for the others..
 */
function stats_stat_noncentral_t()
{
}

/**
 * Not documented.
 */
function stats_stat_paired_t()
{
}

/**
 * Not documented.
 */
function stats_stat_percentile()
{
}

/**
 * Not documented.
 */
function stats_stat_powersum()
{
}

/**
 * Returns the population variance.
 */
function stats_variance()
{
}

/**
 * Vector Trigonometric ACos.
 */
function trader_acos()
{
}

/**
 * Chaikin A/D Line.
 */
function trader_ad()
{
}

/**
 * Vector Arithmetic Add.
 */
function trader_add()
{
}

/**
 * Chaikin A/D Oscillator.
 */
function trader_adosc()
{
}

/**
 * Average Directional Movement Index.
 */
function trader_adx()
{
}

/**
 * Average Directional Movement Index Rating.
 */
function trader_adxr()
{
}

/**
 * Absolute Price Oscillator.
 */
function trader_apo()
{
}

/**
 * Aroon.
 */
function trader_aroon()
{
}

/**
 * Aroon Oscillator.
 */
function trader_aroonosc()
{
}

/**
 * Vector Trigonometric ASin.
 */
function trader_asin()
{
}

/**
 * Vector Trigonometric ATan.
 */
function trader_atan()
{
}

/**
 * Average True Range.
 */
function trader_atr()
{
}

/**
 * Average Price.
 */
function trader_avgprice()
{
}

/**
 * Bollinger Bands.
 */
function trader_bbands()
{
}

/**
 * Beta.
 */
function trader_beta()
{
}

/**
 * Balance Of Power.
 */
function trader_bop()
{
}

/**
 * Commodity Channel Index.
 */
function trader_cci()
{
}

/**
 * Two Crows.
 */
function trader_cdl2crows()
{
}

/**
 * Three Black Crows.
 */
function trader_cdl3blackcrows()
{
}

/**
 * Three Inside Up/Down.
 */
function trader_cdl3inside()
{
}

/**
 * Three-Line Strike.
 */
function trader_cdl3linestrike()
{
}

/**
 * Three Outside Up/Down.
 */
function trader_cdl3outside()
{
}

/**
 * Three Stars In The South.
 */
function trader_cdl3starsinsouth()
{
}

/**
 * Three Advancing White Soldiers.
 */
function trader_cdl3whitesoldiers()
{
}

/**
 * Abandoned Baby.
 */
function trader_cdlabandonedbaby()
{
}

/**
 * Advance Block.
 */
function trader_cdladvanceblock()
{
}

/**
 * Belt-hold.
 */
function trader_cdlbelthold()
{
}

/**
 * Breakaway.
 */
function trader_cdlbreakaway()
{
}

/**
 * Closing Marubozu.
 */
function trader_cdlclosingmarubozu()
{
}

/**
 * Concealing Baby Swallow.
 */
function trader_cdlconcealbabyswall()
{
}

/**
 * Counterattack.
 */
function trader_cdlcounterattack()
{
}

/**
 * Dark Cloud Cover.
 */
function trader_cdldarkcloudcover()
{
}

/**
 * Doji.
 */
function trader_cdldoji()
{
}

/**
 * Doji Star.
 */
function trader_cdldojistar()
{
}

/**
 * Dragonfly Doji.
 */
function trader_cdldragonflydoji()
{
}

/**
 * Engulfing Pattern.
 */
function trader_cdlengulfing()
{
}

/**
 * Evening Doji Star.
 */
function trader_cdleveningdojistar()
{
}

/**
 * Evening Star.
 */
function trader_cdleveningstar()
{
}

/**
 * Up/Down-gap side-by-side white lines.
 */
function trader_cdlgapsidesidewhite()
{
}

/**
 * Gravestone Doji.
 */
function trader_cdlgravestonedoji()
{
}

/**
 * Hammer.
 */
function trader_cdlhammer()
{
}

/**
 * Hanging Man.
 */
function trader_cdlhangingman()
{
}

/**
 * Harami Pattern.
 */
function trader_cdlharami()
{
}

/**
 * Harami Cross Pattern.
 */
function trader_cdlharamicross()
{
}

/**
 * High-Wave Candle.
 */
function trader_cdlhighwave()
{
}

/**
 * Hikkake Pattern.
 */
function trader_cdlhikkake()
{
}

/**
 * Modified Hikkake Pattern.
 */
function trader_cdlhikkakemod()
{
}

/**
 * Homing Pigeon.
 */
function trader_cdlhomingpigeon()
{
}

/**
 * Identical Three Crows.
 */
function trader_cdlidentical3crows()
{
}

/**
 * In-Neck Pattern.
 */
function trader_cdlinneck()
{
}

/**
 * Inverted Hammer.
 */
function trader_cdlinvertedhammer()
{
}

/**
 * Kicking.
 */
function trader_cdlkicking()
{
}

/**
 * Kicking - bull/bear determined by the longer marubozu.
 */
function trader_cdlkickingbylength()
{
}

/**
 * Ladder Bottom.
 */
function trader_cdlladderbottom()
{
}

/**
 * Long Legged Doji.
 */
function trader_cdllongleggeddoji()
{
}

/**
 * Long Line Candle.
 */
function trader_cdllongline()
{
}

/**
 * Marubozu.
 */
function trader_cdlmarubozu()
{
}

/**
 * Matching Low.
 */
function trader_cdlmatchinglow()
{
}

/**
 * Mat Hold.
 */
function trader_cdlmathold()
{
}

/**
 * Morning Doji Star.
 */
function trader_cdlmorningdojistar()
{
}

/**
 * Morning Star.
 */
function trader_cdlmorningstar()
{
}

/**
 * On-Neck Pattern.
 */
function trader_cdlonneck()
{
}

/**
 * Piercing Pattern.
 */
function trader_cdlpiercing()
{
}

/**
 * Rickshaw Man.
 */
function trader_cdlrickshawman()
{
}

/**
 * Rising/Falling Three Methods.
 */
function trader_cdlrisefall3methods()
{
}

/**
 * Separating Lines.
 */
function trader_cdlseparatinglines()
{
}

/**
 * Shooting Star.
 */
function trader_cdlshootingstar()
{
}

/**
 * Short Line Candle.
 */
function trader_cdlshortline()
{
}

/**
 * Spinning Top.
 */
function trader_cdlspinningtop()
{
}

/**
 * Stalled Pattern.
 */
function trader_cdlstalledpattern()
{
}

/**
 * Stick Sandwich.
 */
function trader_cdlsticksandwich()
{
}

/**
 * Takuri (Dragonfly Doji with very long lower shadow).
 */
function trader_cdltakuri()
{
}

/**
 * Tasuki Gap.
 */
function trader_cdltasukigap()
{
}

/**
 * Thrusting Pattern.
 */
function trader_cdlthrusting()
{
}

/**
 * Tristar Pattern.
 */
function trader_cdltristar()
{
}

/**
 * Unique 3 River.
 */
function trader_cdlunique3river()
{
}

/**
 * Upside Gap Two Crows.
 */
function trader_cdlupsidegap2crows()
{
}

/**
 * Upside/Downside Gap Three Methods.
 */
function trader_cdlxsidegap3methods()
{
}

/**
 * Vector Ceil.
 */
function trader_ceil()
{
}

/**
 * Chande Momentum Oscillator.
 */
function trader_cmo()
{
}

/**
 * Pearson's Correlation Coefficient (r).
 */
function trader_correl()
{
}

/**
 * Vector Trigonometric Cos.
 */
function trader_cos()
{
}

/**
 * Vector Trigonometric Cosh.
 */
function trader_cosh()
{
}

/**
 * Double Exponential Moving Average.
 */
function trader_dema()
{
}

/**
 * Vector Arithmetic Div.
 */
function trader_div()
{
}

/**
 * Directional Movement Index.
 */
function trader_dx()
{
}

/**
 * Exponential Moving Average.
 */
function trader_ema()
{
}

/**
 * Get error code.
 */
function trader_errno()
{
}

/**
 * Vector Arithmetic Exp.
 */
function trader_exp()
{
}

/**
 * Vector Floor.
 */
function trader_floor()
{
}

/**
 * Get compatibility mode.
 */
function trader_get_compat()
{
}

/**
 * Get unstable period.
 */
function trader_get_unstable_period()
{
}

/**
 * Hilbert Transform - Dominant Cycle Period.
 */
function trader_ht_dcperiod()
{
}

/**
 * Hilbert Transform - Dominant Cycle Phase.
 */
function trader_ht_dcphase()
{
}

/**
 * Hilbert Transform - Phasor Components.
 */
function trader_ht_phasor()
{
}

/**
 * Hilbert Transform - SineWave.
 */
function trader_ht_sine()
{
}

/**
 * Hilbert Transform - Instantaneous Trendline.
 */
function trader_ht_trendline()
{
}

/**
 * Hilbert Transform - Trend vs Cycle Mode.
 */
function trader_ht_trendmode()
{
}

/**
 * Kaufman Adaptive Moving Average.
 */
function trader_kama()
{
}

/**
 * Linear Regression Angle.
 */
function trader_linearreg_angle()
{
}

/**
 * Linear Regression Intercept.
 */
function trader_linearreg_intercept()
{
}

/**
 * Linear Regression Slope.
 */
function trader_linearreg_slope()
{
}

/**
 * Linear Regression.
 */
function trader_linearreg()
{
}

/**
 * Vector Log Natural.
 */
function trader_ln()
{
}

/**
 * Vector Log10.
 */
function trader_log10()
{
}

/**
 * Moving average.
 */
function trader_ma()
{
}

/**
 * Moving Average Convergence/Divergence.
 */
function trader_macd()
{
}

/**
 * MACD with controllable MA type.
 */
function trader_macdext()
{
}

/**
 * Moving Average Convergence/Divergence Fix 12/26.
 */
function trader_macdfix()
{
}

/**
 * MESA Adaptive Moving Average.
 */
function trader_mama()
{
}

/**
 * Moving average with variable period.
 */
function trader_mavp()
{
}

/**
 * Highest value over a specified period.
 */
function trader_max()
{
}

/**
 * Index of highest value over a specified period.
 */
function trader_maxindex()
{
}

/**
 * Median Price.
 */
function trader_medprice()
{
}

/**
 * Money Flow Index.
 */
function trader_mfi()
{
}

/**
 * MidPoint over period.
 */
function trader_midpoint()
{
}

/**
 * Midpoint Price over period.
 */
function trader_midprice()
{
}

/**
 * Lowest value over a specified period.
 */
function trader_min()
{
}

/**
 * Index of lowest value over a specified period.
 */
function trader_minindex()
{
}

/**
 * Lowest and highest values over a specified period.
 */
function trader_minmax()
{
}

/**
 * Indexes of lowest and highest values over a specified period.
 */
function trader_minmaxindex()
{
}

/**
 * Minus Directional Indicator.
 */
function trader_minus_di()
{
}

/**
 * Minus Directional Movement.
 */
function trader_minus_dm()
{
}

/**
 * Momentum.
 */
function trader_mom()
{
}

/**
 * Vector Arithmetic Mult.
 */
function trader_mult()
{
}

/**
 * Normalized Average True Range.
 */
function trader_natr()
{
}

/**
 * On Balance Volume.
 */
function trader_obv()
{
}

/**
 * Plus Directional Indicator.
 */
function trader_plus_di()
{
}

/**
 * Plus Directional Movement.
 */
function trader_plus_dm()
{
}

/**
 * Percentage Price Oscillator.
 */
function trader_ppo()
{
}

/**
 * Rate of change : ((price/prevPrice)-1)*100.
 */
function trader_roc()
{
}

/**
 * Rate of change Percentage: (price-prevPrice)/prevPrice.
 */
function trader_rocp()
{
}

/**
 * Rate of change ratio 100 scale: (price/prevPrice)*100.
 */
function trader_rocr100()
{
}

/**
 * Rate of change ratio: (price/prevPrice).
 */
function trader_rocr()
{
}

/**
 * Relative Strength Index.
 */
function trader_rsi()
{
}

/**
 * Parabolic SAR.
 */
function trader_sar()
{
}

/**
 * Parabolic SAR - Extended.
 */
function trader_sarext()
{
}

/**
 * Set compatibility mode.
 */
function trader_set_compat()
{
}

/**
 * Set unstable period.
 */
function trader_set_unstable_period()
{
}

/**
 * Vector Trigonometric Sin.
 */
function trader_sin()
{
}

/**
 * Vector Trigonometric Sinh.
 */
function trader_sinh()
{
}

/**
 * Simple Moving Average.
 */
function trader_sma()
{
}

/**
 * Vector Square Root.
 */
function trader_sqrt()
{
}

/**
 * Standard Deviation.
 */
function trader_stddev()
{
}

/**
 * Stochastic.
 */
function trader_stoch()
{
}

/**
 * Stochastic Fast.
 */
function trader_stochf()
{
}

/**
 * Stochastic Relative Strength Index.
 */
function trader_stochrsi()
{
}

/**
 * Vector Arithmetic Subtraction.
 */
function trader_sub()
{
}

/**
 * Summation.
 */
function trader_sum()
{
}

/**
 * Triple Exponential Moving Average (T3).
 */
function trader_t3()
{
}

/**
 * Vector Trigonometric Tan.
 */
function trader_tan()
{
}

/**
 * Vector Trigonometric Tanh.
 */
function trader_tanh()
{
}

/**
 * Triple Exponential Moving Average.
 */
function trader_tema()
{
}

/**
 * True Range.
 */
function trader_trange()
{
}

/**
 * Triangular Moving Average.
 */
function trader_trima()
{
}

/**
 * 1-day Rate-Of-Change (ROC) of a Triple Smooth EMA.
 */
function trader_trix()
{
}

/**
 * Time Series Forecast.
 */
function trader_tsf()
{
}

/**
 * Typical Price.
 */
function trader_typprice()
{
}

/**
 * Ultimate Oscillator.
 */
function trader_ultosc()
{
}

/**
 * Variance.
 */
function trader_var()
{
}

/**
 * Weighted Close Price.
 */
function trader_wclprice()
{
}

/**
 * Williams' %R.
 */
function trader_willr()
{
}

/**
 * Weighted Moving Average.
 */
function trader_wma()
{
}

/**
 * Adds javascript code to the FDF document.
 */
function fdf_add_doc_javascript()
{
}

/**
 * Adds a template into the FDF document.
 */
function fdf_add_template()
{
}

/**
 * Close an FDF document.
 */
function fdf_close()
{
}

/**
 * Create a new FDF document.
 */
function fdf_create()
{
}

/**
 * Call a user defined function for each document value.
 */
function fdf_enum_values()
{
}

/**
 * Return error code for last fdf operation.
 */
function fdf_errno()
{
}

/**
 * Return error description for FDF error code.
 */
function fdf_error()
{
}

/**
 * Get the appearance of a field.
 */
function fdf_get_ap()
{
}

/**
 * Extracts uploaded file embedded in the FDF.
 */
function fdf_get_attachment()
{
}

/**
 * Get the value of the /Encoding key.
 */
function fdf_get_encoding()
{
}

/**
 * Get the value of the /F key.
 */
function fdf_get_file()
{
}

/**
 * Gets the flags of a field.
 */
function fdf_get_flags()
{
}

/**
 * Gets a value from the opt array of a field.
 */
function fdf_get_opt()
{
}

/**
 * Get the value of the /STATUS key.
 */
function fdf_get_status()
{
}

/**
 * Get the value of a field.
 */
function fdf_get_value()
{
}

/**
 * Gets version number for FDF API or file.
 */
function fdf_get_version()
{
}

/**
 * Sets FDF-specific output headers.
 */
function fdf_header()
{
}

/**
 * Get the next field name.
 */
function fdf_next_field_name()
{
}

/**
 * Read a FDF document from a string.
 */
function fdf_open_string()
{
}

/**
 * Open a FDF document.
 */
function fdf_open()
{
}

/**
 * Sets target frame for form.
 */
function fdf_remove_item()
{
}

/**
 * Returns the FDF document as a string.
 */
function fdf_save_string()
{
}

/**
 * Save a FDF document.
 */
function fdf_save()
{
}

/**
 * Set the appearance of a field.
 */
function fdf_set_ap()
{
}

/**
 * Sets FDF character encoding.
 */
function fdf_set_encoding()
{
}

/**
 * Set PDF document to display FDF data in.
 */
function fdf_set_file()
{
}

/**
 * Sets a flag of a field.
 */
function fdf_set_flags()
{
}

/**
 * Sets an javascript action of a field.
 */
function fdf_set_javascript_action()
{
}

/**
 * Adds javascript code to be executed when Acrobat opens the FDF.
 */
function fdf_set_on_import_javascript()
{
}

/**
 * Sets an option of a field.
 */
function fdf_set_opt()
{
}

/**
 * Set the value of the /STATUS key.
 */
function fdf_set_status()
{
}

/**
 * Sets a submit form action of a field.
 */
function fdf_set_submit_form_action()
{
}

/**
 * Set target frame for form display.
 */
function fdf_set_target_frame()
{
}

/**
 * Set the value of a field.
 */
function fdf_set_value()
{
}

/**
 * Sets version number for a FDF file.
 */
function fdf_set_version()
{
}

/**
 * Add a key for decryption.
 */
function gnupg_adddecryptkey()
{
}

/**
 * Add a key for encryption.
 */
function gnupg_addencryptkey()
{
}

/**
 * Add a key for signing.
 */
function gnupg_addsignkey()
{
}

/**
 * Removes all keys which were set for decryption before.
 */
function gnupg_cleardecryptkeys()
{
}

/**
 * Removes all keys which were set for encryption before.
 */
function gnupg_clearencryptkeys()
{
}

/**
 * Removes all keys which were set for signing before.
 */
function gnupg_clearsignkeys()
{
}

/**
 * Decrypts a given text.
 */
function gnupg_decrypt()
{
}

/**
 * Decrypts and verifies a given text.
 */
function gnupg_decryptverify()
{
}

/**
 * Encrypts a given text.
 */
function gnupg_encrypt()
{
}

/**
 * Encrypts and signs a given text.
 */
function gnupg_encryptsign()
{
}

/**
 * Exports a key.
 */
function gnupg_export()
{
}

/**
 * Returns the errortext, if a function fails.
 */
function gnupg_geterror()
{
}

/**
 * Returns the currently active protocol for all operations.
 */
function gnupg_getprotocol()
{
}

/**
 * Imports a key.
 */
function gnupg_import()
{
}

/**
 * Initialize a connection.
 */
function gnupg_init()
{
}

/**
 * Returns an array with information about all keys that matches the given pattern.
 */
function gnupg_keyinfo()
{
}

/**
 * Toggle armored output.
 */
function gnupg_setarmor()
{
}

/**
 * Sets the mode for error_reporting.
 */
function gnupg_seterrormode()
{
}

/**
 * Sets the mode for signing.
 */
function gnupg_setsignmode()
{
}

/**
 * Signs a given text.
 */
function gnupg_sign()
{
}

/**
 * Verifies a signed text.
 */
function gnupg_verify()
{
}

/**
 * Returns the action flag for keyPress(char).
 */
function ming_keypress()
{
}

/**
 * Set cubic threshold.
 */
function ming_setcubicthreshold()
{
}

/**
 * Set the global scaling factor..
 */
function ming_setscale()
{
}

/**
 * Sets the SWF output compression.
 */
function ming_setswfcompression()
{
}

/**
 * Use constant pool.
 */
function ming_useconstants()
{
}

/**
 * Sets the SWF version.
 */
function ming_useswfversion()
{
}

/**
 * Activate structure element or other content item.
 */
function PDF_activate_item()
{
}

/**
 * Add annotation [deprecated].
 */
function PDF_add_annotation()
{
}

/**
 * Add bookmark for current page [deprecated].
 */
function PDF_add_bookmark()
{
}

/**
 * Add launch annotation for current page [deprecated].
 */
function PDF_add_launchlink()
{
}

/**
 * Add link annotation for current page [deprecated].
 */
function PDF_add_locallink()
{
}

/**
 * Create named destination.
 */
function PDF_add_nameddest()
{
}

/**
 * Set annotation for current page [deprecated].
 */
function PDF_add_note()
{
}

/**
 * Add bookmark for current page [deprecated].
 */
function PDF_add_outline()
{
}

/**
 * Add file link annotation for current page [deprecated].
 */
function PDF_add_pdflink()
{
}

/**
 * Add a cell to a new or existing table.
 */
function PDF_add_table_cell()
{
}

/**
 * Create Textflow or add text to existing Textflow.
 */
function PDF_add_textflow()
{
}

/**
 * Add thumbnail for current page.
 */
function PDF_add_thumbnail()
{
}

/**
 * Add weblink for current page [deprecated].
 */
function PDF_add_weblink()
{
}

/**
 * Draw a counterclockwise circular arc segment.
 */
function PDF_arc()
{
}

/**
 * Draw a clockwise circular arc segment.
 */
function PDF_arcn()
{
}

/**
 * Add file attachment for current page [deprecated].
 */
function PDF_attach_file()
{
}

/**
 * Create new PDF file.
 */
function PDF_begin_document()
{
}

/**
 * Start a Type 3 font definition.
 */
function PDF_begin_font()
{
}

/**
 * Start glyph definition for Type 3 font.
 */
function PDF_begin_glyph()
{
}

/**
 * Open structure element or other content item.
 */
function PDF_begin_item()
{
}

/**
 * Start layer.
 */
function PDF_begin_layer()
{
}

/**
 * Start new page.
 */
function PDF_begin_page_ext()
{
}

/**
 * Start new page [deprecated].
 */
function PDF_begin_page()
{
}

/**
 * Start pattern definition.
 */
function PDF_begin_pattern()
{
}

/**
 * Start template definition.
 */
function PDF_begin_template_ext()
{
}

/**
 * Start template definition [deprecated].
 */
function PDF_begin_template()
{
}

/**
 * Draw a circle.
 */
function PDF_circle()
{
}

/**
 * Clip to current path.
 */
function PDF_clip()
{
}

/**
 * Close image.
 */
function PDF_close_image()
{
}

/**
 * Close the page handle.
 */
function PDF_close_pdi_page()
{
}

/**
 * Close the input PDF document [deprecated].
 */
function PDF_close_pdi()
{
}

/**
 * Close pdf resource [deprecated].
 */
function PDF_close()
{
}

/**
 * Close, fill and stroke current path.
 */
function PDF_closepath_fill_stroke()
{
}

/**
 * Close and stroke path.
 */
function PDF_closepath_stroke()
{
}

/**
 * Close current path.
 */
function PDF_closepath()
{
}

/**
 * Concatenate a matrix to the CTM.
 */
function PDF_concat()
{
}

/**
 * Output text in next line.
 */
function PDF_continue_text()
{
}

/**
 * Create 3D view.
 */
function PDF_create_3dview()
{
}

/**
 * Create action for objects or events.
 */
function PDF_create_action()
{
}

/**
 * Create rectangular annotation.
 */
function PDF_create_annotation()
{
}

/**
 * Create bookmark.
 */
function PDF_create_bookmark()
{
}

/**
 * Create form field.
 */
function PDF_create_field()
{
}

/**
 * Create form field group.
 */
function PDF_create_fieldgroup()
{
}

/**
 * Create graphics state object.
 */
function PDF_create_gstate()
{
}

/**
 * Create PDFlib virtual file.
 */
function PDF_create_pvf()
{
}

/**
 * Create textflow object.
 */
function PDF_create_textflow()
{
}

/**
 * Draw Bezier curve.
 */
function PDF_curveto()
{
}

/**
 * Create layer definition.
 */
function PDF_define_layer()
{
}

/**
 * Delete PDFlib virtual file.
 */
function PDF_delete_pvf()
{
}

/**
 * Delete table object.
 */
function PDF_delete_table()
{
}

/**
 * Delete textflow object.
 */
function PDF_delete_textflow()
{
}

/**
 * Delete PDFlib object.
 */
function PDF_delete()
{
}

/**
 * Add glyph name and/or Unicode value.
 */
function PDF_encoding_set_char()
{
}

/**
 * Close PDF file.
 */
function PDF_end_document()
{
}

/**
 * Terminate Type 3 font definition.
 */
function PDF_end_font()
{
}

/**
 * Terminate glyph definition for Type 3 font.
 */
function PDF_end_glyph()
{
}

/**
 * Close structure element or other content item.
 */
function PDF_end_item()
{
}

/**
 * Deactivate all active layers.
 */
function PDF_end_layer()
{
}

/**
 * Finish page.
 */
function PDF_end_page_ext()
{
}

/**
 * Finish page.
 */
function PDF_end_page()
{
}

/**
 * Finish pattern.
 */
function PDF_end_pattern()
{
}

/**
 * Finish template.
 */
function PDF_end_template()
{
}

/**
 * End current path.
 */
function PDF_endpath()
{
}

/**
 * Fill image block with variable data.
 */
function PDF_fill_imageblock()
{
}

/**
 * Fill PDF block with variable data.
 */
function PDF_fill_pdfblock()
{
}

/**
 * Fill and stroke path.
 */
function PDF_fill_stroke()
{
}

/**
 * Fill text block with variable data.
 */
function PDF_fill_textblock()
{
}

/**
 * Fill current path.
 */
function PDF_fill()
{
}

/**
 * Prepare font for later use [deprecated].
 */
function PDF_findfont()
{
}

/**
 * Place image or template.
 */
function PDF_fit_image()
{
}

/**
 * Place imported PDF page.
 */
function PDF_fit_pdi_page()
{
}

/**
 * Place table on page.
 */
function PDF_fit_table()
{
}

/**
 * Format textflow in rectangular area.
 */
function PDF_fit_textflow()
{
}

/**
 * Place single line of text.
 */
function PDF_fit_textline()
{
}

/**
 * Get name of unsuccessfull API function.
 */
function PDF_get_apiname()
{
}

/**
 * Get PDF output buffer.
 */
function PDF_get_buffer()
{
}

/**
 * Get error text.
 */
function PDF_get_errmsg()
{
}

/**
 * Get error number.
 */
function PDF_get_errnum()
{
}

/**
 * Get font [deprecated].
 */
function PDF_get_font()
{
}

/**
 * Get font name [deprecated].
 */
function PDF_get_fontname()
{
}

/**
 * Font handling [deprecated].
 */
function PDF_get_fontsize()
{
}

/**
 * Get image height [deprecated].
 */
function PDF_get_image_height()
{
}

/**
 * Get image width [deprecated].
 */
function PDF_get_image_width()
{
}

/**
 * Get major version number [deprecated].
 */
function PDF_get_majorversion()
{
}

/**
 * Get minor version number [deprecated].
 */
function PDF_get_minorversion()
{
}

/**
 * Get string parameter.
 */
function PDF_get_parameter()
{
}

/**
 * Get PDI string parameter [deprecated].
 */
function PDF_get_pdi_parameter()
{
}

/**
 * Get PDI numerical parameter [deprecated].
 */
function PDF_get_pdi_value()
{
}

/**
 * Get numerical parameter.
 */
function PDF_get_value()
{
}

/**
 * Query detailed information about a loaded font.
 */
function PDF_info_font()
{
}

/**
 * Query matchbox information.
 */
function PDF_info_matchbox()
{
}

/**
 * Retrieve table information.
 */
function PDF_info_table()
{
}

/**
 * Query textflow state.
 */
function PDF_info_textflow()
{
}

/**
 * Perform textline formatting and query metrics.
 */
function PDF_info_textline()
{
}

/**
 * Reset graphic state.
 */
function PDF_initgraphics()
{
}

/**
 * Draw a line.
 */
function PDF_lineto()
{
}

/**
 * Load 3D model.
 */
function PDF_load_3ddata()
{
}

/**
 * Search and prepare font.
 */
function PDF_load_font()
{
}

/**
 * Search and prepare ICC profile.
 */
function PDF_load_iccprofile()
{
}

/**
 * Open image file.
 */
function PDF_load_image()
{
}

/**
 * Make spot color.
 */
function PDF_makespotcolor()
{
}

/**
 * Set current point.
 */
function PDF_moveto()
{
}

/**
 * Create PDFlib object.
 */
function PDF_new()
{
}

/**
 * Open raw CCITT image [deprecated].
 */
function PDF_open_ccitt()
{
}

/**
 * Create PDF file [deprecated].
 */
function PDF_open_file()
{
}

/**
 * Open GIF image [deprecated].
 */
function PDF_open_gif()
{
}

/**
 * Read image from file [deprecated].
 */
function PDF_open_image_file()
{
}

/**
 * Use image data [deprecated].
 */
function PDF_open_image()
{
}

/**
 * Open JPEG image [deprecated].
 */
function PDF_open_jpeg()
{
}

/**
 * Open image created with PHP's image functions [not supported].
 */
function PDF_open_memory_image()
{
}

/**
 * Prepare a pdi document.
 */
function PDF_open_pdi_document()
{
}

/**
 * Prepare a page.
 */
function PDF_open_pdi_page()
{
}

/**
 * Open PDF file [deprecated].
 */
function PDF_open_pdi()
{
}

/**
 * Open TIFF image [deprecated].
 */
function PDF_open_tiff()
{
}

/**
 * Get value of pCOS path with type number or boolean.
 */
function PDF_pcos_get_number()
{
}

/**
 * Get contents of pCOS path with type stream, fstream, or string.
 */
function PDF_pcos_get_stream()
{
}

/**
 * Get value of pCOS path with type name, string, or boolean.
 */
function PDF_pcos_get_string()
{
}

/**
 * Place image on the page [deprecated].
 */
function PDF_place_image()
{
}

/**
 * Place PDF page [deprecated].
 */
function PDF_place_pdi_page()
{
}

/**
 * Process imported PDF document.
 */
function PDF_process_pdi()
{
}

/**
 * Draw rectangle.
 */
function PDF_rect()
{
}

/**
 * Restore graphics state.
 */
function PDF_restore()
{
}

/**
 * Resume page.
 */
function PDF_resume_page()
{
}

/**
 * Rotate coordinate system.
 */
function PDF_rotate()
{
}

/**
 * Save graphics state.
 */
function PDF_save()
{
}

/**
 * Scale coordinate system.
 */
function PDF_scale()
{
}

/**
 * Set border color of annotations [deprecated].
 */
function PDF_set_border_color()
{
}

/**
 * Set border dash style of annotations [deprecated].
 */
function PDF_set_border_dash()
{
}

/**
 * Set border style of annotations [deprecated].
 */
function PDF_set_border_style()
{
}

/**
 * Set character spacing [deprecated].
 */
function PDF_set_char_spacing()
{
}

/**
 * Set duration between pages [deprecated].
 */
function PDF_set_duration()
{
}

/**
 * Activate graphics state object.
 */
function PDF_set_gstate()
{
}

/**
 * Set horizontal text scaling [deprecated].
 */
function PDF_set_horiz_scaling()
{
}

/**
 * Fill the author document info field [deprecated].
 */
function PDF_set_info_author()
{
}

/**
 * Fill the creator document info field [deprecated].
 */
function PDF_set_info_creator()
{
}

/**
 * Fill the keywords document info field [deprecated].
 */
function PDF_set_info_keywords()
{
}

/**
 * Fill the subject document info field [deprecated].
 */
function PDF_set_info_subject()
{
}

/**
 * Fill the title document info field [deprecated].
 */
function PDF_set_info_title()
{
}

/**
 * Fill document info field.
 */
function PDF_set_info()
{
}

/**
 * Define relationships among layers.
 */
function PDF_set_layer_dependency()
{
}

/**
 * Set distance between text lines [deprecated].
 */
function PDF_set_leading()
{
}

/**
 * Set string parameter.
 */
function PDF_set_parameter()
{
}

/**
 * Set text matrix [deprecated].
 */
function PDF_set_text_matrix()
{
}

/**
 * Set text position.
 */
function PDF_set_text_pos()
{
}

/**
 * Determine text rendering [deprecated].
 */
function PDF_set_text_rendering()
{
}

/**
 * Set text rise [deprecated].
 */
function PDF_set_text_rise()
{
}

/**
 * Set numerical parameter.
 */
function PDF_set_value()
{
}

/**
 * Set spacing between words [deprecated].
 */
function PDF_set_word_spacing()
{
}

/**
 * Set fill and stroke color.
 */
function PDF_setcolor()
{
}

/**
 * Set simple dash pattern.
 */
function PDF_setdash()
{
}

/**
 * Set dash pattern.
 */
function PDF_setdashpattern()
{
}

/**
 * Set flatness.
 */
function PDF_setflat()
{
}

/**
 * Set font.
 */
function PDF_setfont()
{
}

/**
 * Set fill color to gray [deprecated].
 */
function PDF_setgray_fill()
{
}

/**
 * Set stroke color to gray [deprecated].
 */
function PDF_setgray_stroke()
{
}

/**
 * Set color to gray [deprecated].
 */
function PDF_setgray()
{
}

/**
 * Set linecap parameter.
 */
function PDF_setlinecap()
{
}

/**
 * Set linejoin parameter.
 */
function PDF_setlinejoin()
{
}

/**
 * Set line width.
 */
function PDF_setlinewidth()
{
}

/**
 * Set current transformation matrix.
 */
function PDF_setmatrix()
{
}

/**
 * Set miter limit.
 */
function PDF_setmiterlimit()
{
}

/**
 * Set complicated dash pattern [deprecated].
 */
function PDF_setpolydash()
{
}

/**
 * Set fill rgb color values [deprecated].
 */
function PDF_setrgbcolor_fill()
{
}

/**
 * Set stroke rgb color values [deprecated].
 */
function PDF_setrgbcolor_stroke()
{
}

/**
 * Set fill and stroke rgb color values [deprecated].
 */
function PDF_setrgbcolor()
{
}

/**
 * Define shading pattern.
 */
function PDF_shading_pattern()
{
}

/**
 * Define blend.
 */
function PDF_shading()
{
}

/**
 * Fill area with shading.
 */
function PDF_shfill()
{
}

/**
 * Output text in a box [deprecated].
 */
function PDF_show_boxed()
{
}

/**
 * Output text at given position.
 */
function PDF_show_xy()
{
}

/**
 * Output text at current position.
 */
function PDF_show()
{
}

/**
 * Skew the coordinate system.
 */
function PDF_skew()
{
}

/**
 * Return width of text.
 */
function PDF_stringwidth()
{
}

/**
 * Stroke path.
 */
function PDF_stroke()
{
}

/**
 * Suspend page.
 */
function PDF_suspend_page()
{
}

/**
 * Set origin of coordinate system.
 */
function PDF_translate()
{
}

/**
 * Convert string from UTF-16 to UTF-8.
 */
function PDF_utf16_to_utf8()
{
}

/**
 * Convert string from UTF-32 to UTF-16.
 */
function PDF_utf32_to_utf16()
{
}

/**
 * Convert string from UTF-8 to UTF-16.
 */
function PDF_utf8_to_utf16()
{
}

/**
 * Add bookmark to current page.
 */
function ps_add_bookmark()
{
}

/**
 * Adds link which launches file.
 */
function ps_add_launchlink()
{
}

/**
 * Adds link to a page in the same document.
 */
function ps_add_locallink()
{
}

/**
 * Adds note to current page.
 */
function ps_add_note()
{
}

/**
 * Adds link to a page in a second pdf document.
 */
function ps_add_pdflink()
{
}

/**
 * Adds link to a web location.
 */
function ps_add_weblink()
{
}

/**
 * Draws an arc counterclockwise.
 */
function ps_arc()
{
}

/**
 * Draws an arc clockwise.
 */
function ps_arcn()
{
}

/**
 * Start a new page.
 */
function ps_begin_page()
{
}

/**
 * Start a new pattern.
 */
function ps_begin_pattern()
{
}

/**
 * Start a new template.
 */
function ps_begin_template()
{
}

/**
 * Draws a circle.
 */
function ps_circle()
{
}

/**
 * Clips drawing to current path.
 */
function ps_clip()
{
}

/**
 * Closes image and frees memory.
 */
function ps_close_image()
{
}

/**
 * Closes a PostScript document.
 */
function ps_close()
{
}

/**
 * Closes and strokes path.
 */
function ps_closepath_stroke()
{
}

/**
 * Closes path.
 */
function ps_closepath()
{
}

/**
 * Continue text in next line.
 */
function ps_continue_text()
{
}

/**
 * Draws a curve.
 */
function ps_curveto()
{
}

/**
 * Deletes all resources of a PostScript document.
 */
function ps_delete()
{
}

/**
 * End a page.
 */
function ps_end_page()
{
}

/**
 * End a pattern.
 */
function ps_end_pattern()
{
}

/**
 * End a template.
 */
function ps_end_template()
{
}

/**
 * Fills and strokes the current path.
 */
function ps_fill_stroke()
{
}

/**
 * Fills the current path.
 */
function ps_fill()
{
}

/**
 * Loads a font.
 */
function ps_findfont()
{
}

/**
 * Fetches the full buffer containig the generated PS data.
 */
function ps_get_buffer()
{
}

/**
 * Gets certain parameters.
 */
function ps_get_parameter()
{
}

/**
 * Gets certain values.
 */
function ps_get_value()
{
}

/**
 * Hyphenates a word.
 */
function ps_hyphenate()
{
}

/**
 * Reads an external file with raw PostScript code.
 */
function ps_include_file()
{
}

/**
 * Draws a line.
 */
function ps_lineto()
{
}

/**
 * Create spot color.
 */
function ps_makespotcolor()
{
}

/**
 * Sets current point.
 */
function ps_moveto()
{
}

/**
 * Creates a new PostScript document object.
 */
function ps_new()
{
}

/**
 * Opens a file for output.
 */
function ps_open_file()
{
}

/**
 * Opens image from file.
 */
function ps_open_image_file()
{
}

/**
 * Reads an image for later placement.
 */
function ps_open_image()
{
}

/**
 * Takes an GD image and returns an image for placement in a PS document.
 */
function ps_open_memory_image()
{
}

/**
 * Places image on the page.
 */
function ps_place_image()
{
}

/**
 * Draws a rectangle.
 */
function ps_rect()
{
}

/**
 * Restore previously save context.
 */
function ps_restore()
{
}

/**
 * Sets rotation factor.
 */
function ps_rotate()
{
}

/**
 * Save current context.
 */
function ps_save()
{
}

/**
 * Sets scaling factor.
 */
function ps_scale()
{
}

/**
 * Sets color of border for annotations.
 */
function ps_set_border_color()
{
}

/**
 * Sets length of dashes for border of annotations.
 */
function ps_set_border_dash()
{
}

/**
 * Sets border style of annotations.
 */
function ps_set_border_style()
{
}

/**
 * Sets information fields of document.
 */
function ps_set_info()
{
}

/**
 * Sets certain parameters.
 */
function ps_set_parameter()
{
}

/**
 * Sets position for text output.
 */
function ps_set_text_pos()
{
}

/**
 * Sets certain values.
 */
function ps_set_value()
{
}

/**
 * Sets current color.
 */
function ps_setcolor()
{
}

/**
 * Sets appearance of a dashed line.
 */
function ps_setdash()
{
}

/**
 * Sets flatness.
 */
function ps_setflat()
{
}

/**
 * Sets font to use for following output.
 */
function ps_setfont()
{
}

/**
 * Sets gray value.
 */
function ps_setgray()
{
}

/**
 * Sets appearance of line ends.
 */
function ps_setlinecap()
{
}

/**
 * Sets how contected lines are joined.
 */
function ps_setlinejoin()
{
}

/**
 * Sets width of a line.
 */
function ps_setlinewidth()
{
}

/**
 * Sets the miter limit.
 */
function ps_setmiterlimit()
{
}

/**
 * Sets overprint mode.
 */
function ps_setoverprintmode()
{
}

/**
 * Sets appearance of a dashed line.
 */
function ps_setpolydash()
{
}

/**
 * Creates a pattern based on a shading.
 */
function ps_shading_pattern()
{
}

/**
 * Creates a shading for later use.
 */
function ps_shading()
{
}

/**
 * Fills an area with a shading.
 */
function ps_shfill()
{
}

/**
 * Output text in a box.
 */
function ps_show_boxed()
{
}

/**
 * Output text at position.
 */
function ps_show_xy2()
{
}

/**
 * Output text at given position.
 */
function ps_show_xy()
{
}

/**
 * Output a text at current position.
 */
function ps_show2()
{
}

/**
 * Output text.
 */
function ps_show()
{
}

/**
 * Gets geometry of a string.
 */
function ps_string_geometry()
{
}

/**
 * Gets width of a string.
 */
function ps_stringwidth()
{
}

/**
 * Draws the current path.
 */
function ps_stroke()
{
}

/**
 * Gets name of a glyph.
 */
function ps_symbol_name()
{
}

/**
 * Gets width of a glyph.
 */
function ps_symbol_width()
{
}

/**
 * Output a glyph.
 */
function ps_symbol()
{
}

/**
 * Sets translation.
 */
function ps_translate()
{
}

/**
 * Closes an RPM file.
 */
function rpm_close()
{
}

/**
 * Retrieves a header tag from an RPM file.
 */
function rpm_get_tag()
{
}

/**
 * Tests a filename for validity as an RPM file.
 */
function rpm_is_valid()
{
}

/**
 * Opens an RPM file.
 */
function rpm_open()
{
}

/**
 * Returns a string representing the current version of the   rpmreader extension.
 */
function rpm_version()
{
}

/**
 * Artificially increase load. Could be useful in tests,  benchmarking..
 */
function eio_busy()
{
}

/**
 * Cancels a request.
 */
function eio_cancel()
{
}

/**
 * Change file/direcrory permissions..
 */
function eio_chmod()
{
}

/**
 * Change file/direcrory permissions..
 */
function eio_chown()
{
}

/**
 * Close file.
 */
function eio_close()
{
}

/**
 * Execute custom request like any other eio_* call..
 */
function eio_custom()
{
}

/**
 * Duplicate a file descriptor.
 */
function eio_dup2()
{
}

/**
 * Polls libeio until all requests proceeded.
 */
function eio_event_loop()
{
}

/**
 * Allows the caller to directly manipulate the allocated disk  space for a file.
 */
function eio_fallocate()
{
}

/**
 * Change file permissions..
 */
function eio_fchmod()
{
}

/**
 * Change file ownership.
 */
function eio_fchown()
{
}

/**
 * Synchronize a file's in-core state with storage device..
 */
function eio_fdatasync()
{
}

/**
 * Get file status.
 */
function eio_fstat()
{
}

/**
 * Get file system statistics.
 */
function eio_fstatvfs()
{
}

/**
 * Synchronize a file's in-core state with storage device.
 */
function eio_fsync()
{
}

/**
 * Truncate a file.
 */
function eio_ftruncate()
{
}

/**
 * Change file last access and modification times.
 */
function eio_futime()
{
}

/**
 * Get stream representing a variable used in internal communications with libeio..
 */
function eio_get_event_stream()
{
}

/**
 * Returns string describing the last error associated with a request resource.
 */
function eio_get_last_error()
{
}

/**
 * Adds a request to the request group..
 */
function eio_grp_add()
{
}

/**
 * Cancels a request group.
 */
function eio_grp_cancel()
{
}

/**
 * Set group limit.
 */
function eio_grp_limit()
{
}

/**
 * Createsa request group..
 */
function eio_grp()
{
}

/**
 * (Re-)initialize Eio.
 */
function eio_init()
{
}

/**
 * Create a hardlink for file.
 */
function eio_link()
{
}

/**
 * Get file status.
 */
function eio_lstat()
{
}

/**
 * Create directory.
 */
function eio_mkdir()
{
}

/**
 * Create a special or ordinary file..
 */
function eio_mknod()
{
}

/**
 * Does nothing, except go through the whole request cycle..
 */
function eio_nop()
{
}

/**
 * Returns number of finished, but unhandled requests.
 */
function eio_npending()
{
}

/**
 * Returns number of not-yet handled requests.
 */
function eio_nready()
{
}

/**
 * Returns number of requests to be processed.
 */
function eio_nreqs()
{
}

/**
 * Returns number of threads currently in use.
 */
function eio_nthreads()
{
}

/**
 * Opens a file.
 */
function eio_open()
{
}

/**
 * Can be to be called whenever there are pending requests that need finishing..
 */
function eio_poll()
{
}

/**
 * Read from a file descriptor at given offset..
 */
function eio_read()
{
}

/**
 * Perform file readahead into page cache.
 */
function eio_readahead()
{
}

/**
 * Reads through a whole directory.
 */
function eio_readdir()
{
}

/**
 * Read value of a symbolic link..
 */
function eio_readlink()
{
}

/**
 * Get the canonicalized absolute pathname..
 */
function eio_realpath()
{
}

/**
 * Change the name or location of a file..
 */
function eio_rename()
{
}

/**
 * Remove a directory.
 */
function eio_rmdir()
{
}

/**
 * Repositions the offset of the open file associated with the fd argument to the argument offset according to the directive whence.
 */
function eio_seek()
{
}

/**
 * Transfer data between file descriptors.
 */
function eio_sendfile()
{
}

/**
 * Set maximum number of idle threads..
 */
function eio_set_max_idle()
{
}

/**
 * Set maximum parallel threads.
 */
function eio_set_max_parallel()
{
}

/**
 * Set maximum number of requests processed in a poll..
 */
function eio_set_max_poll_reqs()
{
}

/**
 * Set maximum poll time.
 */
function eio_set_max_poll_time()
{
}

/**
 * Set minimum parallel thread number.
 */
function eio_set_min_parallel()
{
}

/**
 * Get file status.
 */
function eio_stat()
{
}

/**
 * Get file system statistics.
 */
function eio_statvfs()
{
}

/**
 * Create a symbolic link.
 */
function eio_symlink()
{
}

/**
 * Sync a file segment with disk.
 */
function eio_sync_file_range()
{
}

/**
 * Commit buffer cache to disk.
 */
function eio_sync()
{
}

/**
 * Calls Linux' syncfs syscall, if available.
 */
function eio_syncfs()
{
}

/**
 * Truncate a file.
 */
function eio_truncate()
{
}

/**
 * Delete a name and possibly the file it refers to.
 */
function eio_unlink()
{
}

/**
 * Change file last access and modification times..
 */
function eio_utime()
{
}

/**
 * Write to file.
 */
function eio_write()
{
}

/**
 * Waits until the output from a process matches one  of the patterns, a specified time period has passed, or an EOF is seen.
 */
function expect_expectl()
{
}

/**
 * Execute command via Bourne shell, and open the PTY stream to  the process.
 */
function expect_popen()
{
}

/**
 * Add an event to the set of monitored events.
 */
function event_add()
{
}

/**
 * Destroy event base.
 */
function event_base_free()
{
}

/**
 * Handle events.
 */
function event_base_loop()
{
}

/**
 * Abort event loop.
 */
function event_base_loopbreak()
{
}

/**
 * Exit loop after a time.
 */
function event_base_loopexit()
{
}

/**
 * Create and initialize new event base.
 */
function event_base_new()
{
}

/**
 * Set the number of event priority levels.
 */
function event_base_priority_init()
{
}

/**
 * Reinitialize the event base after a fork.
 */
function event_base_reinit()
{
}

/**
 * Associate event base with an event.
 */
function event_base_set()
{
}

/**
 * Associate buffered event with an event base.
 */
function event_buffer_base_set()
{
}

/**
 * Disable a buffered event.
 */
function event_buffer_disable()
{
}

/**
 * Enable a buffered event.
 */
function event_buffer_enable()
{
}

/**
 * Change a buffered event file descriptor.
 */
function event_buffer_fd_set()
{
}

/**
 * Destroy buffered event.
 */
function event_buffer_free()
{
}

/**
 * Create new buffered event.
 */
function event_buffer_new()
{
}

/**
 * Assign a priority to a buffered event.
 */
function event_buffer_priority_set()
{
}

/**
 * Read data from a buffered event.
 */
function event_buffer_read()
{
}

/**
 * Set or reset callbacks for a buffered event.
 */
function event_buffer_set_callback()
{
}

/**
 * Set read and write timeouts for a buffered event.
 */
function event_buffer_timeout_set()
{
}

/**
 * Set the watermarks for read and write events.
 */
function event_buffer_watermark_set()
{
}

/**
 * Write data to a buffered event.
 */
function event_buffer_write()
{
}

/**
 * Remove an event from the set of monitored events.
 */
function event_del()
{
}

/**
 * Free event resource.
 */
function event_free()
{
}

/**
 * Create new event.
 */
function event_new()
{
}

/**
 * Assign a priority to an event..
 */
function event_priority_set()
{
}

/**
 * Prepare an event.
 */
function event_set()
{
}

/**
 * Alias of event_add.
 */
function event_timer_add()
{
}

/**
 * Alias of event_del.
 */
function event_timer_del()
{
}

/**
 * Alias of event_new.
 */
function event_timer_new()
{
}

/**
 * Prepare a timer event.
 */
function event_timer_set()
{
}

/**
 * Set an alarm clock for delivery of a signal.
 */
function pcntl_alarm()
{
}

/**
 * Alias of pcntl_strerror.
 */
function pcntl_errno()
{
}

/**
 * Executes specified program in current process space.
 */
function pcntl_exec()
{
}

/**
 * Forks the currently running process.
 */
function pcntl_fork()
{
}

/**
 * Retrieve the error number set by the last pcntl function which failed.
 */
function pcntl_get_last_error()
{
}

/**
 * Get the priority of any process.
 */
function pcntl_getpriority()
{
}

/**
 * Change the priority of any process.
 */
function pcntl_setpriority()
{
}

/**
 * Calls signal handlers for pending signals.
 */
function pcntl_signal_dispatch()
{
}

/**
 * Installs a signal handler.
 */
function pcntl_signal()
{
}

/**
 * Sets and retrieves blocked signals.
 */
function pcntl_sigprocmask()
{
}

/**
 * Waits for signals, with a timeout.
 */
function pcntl_sigtimedwait()
{
}

/**
 * Waits for signals.
 */
function pcntl_sigwaitinfo()
{
}

/**
 * Retrieve the system error message associated with the given errno.
 */
function pcntl_strerror()
{
}

/**
 * Waits on or returns the status of a forked child.
 */
function pcntl_wait()
{
}

/**
 * Waits on or returns the status of a forked child.
 */
function pcntl_waitpid()
{
}

/**
 * Returns the return code of a terminated child.
 */
function pcntl_wexitstatus()
{
}

/**
 * Checks if status code represents a normal exit.
 */
function pcntl_wifexited()
{
}

/**
 * Checks whether the status code represents a termination due to a signal.
 */
function pcntl_wifsignaled()
{
}

/**
 * Checks whether the child process is currently stopped.
 */
function pcntl_wifstopped()
{
}

/**
 * Returns the signal which caused the child to stop.
 */
function pcntl_wstopsig()
{
}

/**
 * Returns the signal which caused the child to terminate.
 */
function pcntl_wtermsig()
{
}

/**
 * Determine accessibility of a file.
 */
function posix_access()
{
}

/**
 * Get path name of controlling terminal.
 */
function posix_ctermid()
{
}

/**
 * Alias of posix_get_last_error.
 */
function posix_errno()
{
}

/**
 * Retrieve the error number set by the last posix function that failed.
 */
function posix_get_last_error()
{
}

/**
 * Pathname of current directory.
 */
function posix_getcwd()
{
}

/**
 * Return the effective group ID of the current process.
 */
function posix_getegid()
{
}

/**
 * Return the effective user ID of the current process.
 */
function posix_geteuid()
{
}

/**
 * Return the real group ID of the current process.
 */
function posix_getgid()
{
}

/**
 * Return info about a group by group id.
 */
function posix_getgrgid()
{
}

/**
 * Return info about a group by name.
 */
function posix_getgrnam()
{
}

/**
 * Return the group set of the current process.
 */
function posix_getgroups()
{
}

/**
 * Return login name.
 */
function posix_getlogin()
{
}

/**
 * Get process group id for job control.
 */
function posix_getpgid()
{
}

/**
 * Return the current process group identifier.
 */
function posix_getpgrp()
{
}

/**
 * Return the current process identifier.
 */
function posix_getpid()
{
}

/**
 * Return the parent process identifier.
 */
function posix_getppid()
{
}

/**
 * Return info about a user by username.
 */
function posix_getpwnam()
{
}

/**
 * Return info about a user by user id.
 */
function posix_getpwuid()
{
}

/**
 * Return info about system resource limits.
 */
function posix_getrlimit()
{
}

/**
 * Get the current sid of the process.
 */
function posix_getsid()
{
}

/**
 * Return the real user ID of the current process.
 */
function posix_getuid()
{
}

/**
 * Calculate the group access list.
 */
function posix_initgroups()
{
}

/**
 * Determine if a file descriptor is an interactive terminal.
 */
function posix_isatty()
{
}

/**
 * Send a signal to a process.
 */
function posix_kill()
{
}

/**
 * Create a fifo special file (a named pipe).
 */
function posix_mkfifo()
{
}

/**
 * Create a special or ordinary file (POSIX.1).
 */
function posix_mknod()
{
}

/**
 * Set the effective GID of the current process.
 */
function posix_setegid()
{
}

/**
 * Set the effective UID of the current process.
 */
function posix_seteuid()
{
}

/**
 * Set the GID of the current process.
 */
function posix_setgid()
{
}

/**
 * Set process group id for job control.
 */
function posix_setpgid()
{
}

/**
 * Make the current process a session leader.
 */
function posix_setsid()
{
}

/**
 * Set the UID of the current process.
 */
function posix_setuid()
{
}

/**
 * Retrieve the system error message associated with the given errno.
 */
function posix_strerror()
{
}

/**
 * Get process times.
 */
function posix_times()
{
}

/**
 * Determine terminal device name.
 */
function posix_ttyname()
{
}

/**
 * Get system name.
 */
function posix_uname()
{
}

/**
 * Escape a string to be used as a shell argument.
 */
function escapeshellarg()
{
}

/**
 * Escape shell metacharacters.
 */
function escapeshellcmd()
{
}

/**
 * Execute an external program.
 */
function exec()
{
}

/**
 * Execute an external program and display raw output.
 */
function passthru()
{
}

/**
 * Close a process opened by proc_open and return the exit code of that process.
 */
function proc_close()
{
}

/**
 * Get information about a process opened by proc_open.
 */
function proc_get_status()
{
}

/**
 * Change the priority of the current process.
 */
function proc_nice()
{
}

/**
 * Execute a command and open file pointers for input/output.
 */
function proc_open()
{
}

/**
 * Kills a process opened by proc_open.
 */
function proc_terminate()
{
}

/**
 * Execute command via shell and return the complete output as a string.
 */
function shell_exec()
{
}

/**
 * Execute an external program and display the output.
 */
function system()
{
}

/**
 * Convert a pathname and a project identifier to a System V IPC key.
 */
function ftok()
{
}

/**
 * Create or attach to a message queue.
 */
function msg_get_queue()
{
}

/**
 * Check whether a message queue exists.
 */
function msg_queue_exists()
{
}

/**
 * Receive a message from a message queue.
 */
function msg_receive()
{
}

/**
 * Destroy a message queue.
 */
function msg_remove_queue()
{
}

/**
 * Send a message to a message queue.
 */
function msg_send()
{
}

/**
 * Set information in the message queue data structure.
 */
function msg_set_queue()
{
}

/**
 * Returns information from the message queue data structure.
 */
function msg_stat_queue()
{
}

/**
 * Acquire a semaphore.
 */
function sem_acquire()
{
}

/**
 * Get a semaphore id.
 */
function sem_get()
{
}

/**
 * Release a semaphore.
 */
function sem_release()
{
}

/**
 * Remove a semaphore.
 */
function sem_remove()
{
}

/**
 * Creates or open a shared memory segment.
 */
function shm_attach()
{
}

/**
 * Disconnects from shared memory segment.
 */
function shm_detach()
{
}

/**
 * Returns a variable from shared memory.
 */
function shm_get_var()
{
}

/**
 * Check whether a specific entry exists.
 */
function shm_has_var()
{
}

/**
 * Inserts or updates a variable in shared memory.
 */
function shm_put_var()
{
}

/**
 * Removes a variable from shared memory.
 */
function shm_remove_var()
{
}

/**
 * Removes shared memory from Unix systems.
 */
function shm_remove()
{
}

/**
 * Close shared memory block.
 */
function shmop_close()
{
}

/**
 * Delete shared memory block.
 */
function shmop_delete()
{
}

/**
 * Create or open shared memory block.
 */
function shmop_open()
{
}

/**
 * Read data from shared memory block.
 */
function shmop_read()
{
}

/**
 * Get size of shared memory block.
 */
function shmop_size()
{
}

/**
 * Write data into shared memory block.
 */
function shmop_write()
{
}

/**
 * Get the Autonomous System Numbers (ASN).
 */
function geoip_asnum_by_name()
{
}

/**
 * Get the two letter continent code.
 */
function geoip_continent_code_by_name()
{
}

/**
 * Get the two letter country code.
 */
function geoip_country_code_by_name()
{
}

/**
 * Get the three letter country code.
 */
function geoip_country_code3_by_name()
{
}

/**
 * Get the full country name.
 */
function geoip_country_name_by_name()
{
}

/**
 * Get GeoIP Database information.
 */
function geoip_database_info()
{
}

/**
 * Determine if GeoIP Database is available.
 */
function geoip_db_avail()
{
}

/**
 * Returns the filename of the corresponding GeoIP Database.
 */
function geoip_db_filename()
{
}

/**
 * Returns detailed information about all GeoIP database types.
 */
function geoip_db_get_all_info()
{
}

/**
 * Get the second level domain name.
 */
function geoip_domain_by_name()
{
}

/**
 * Get the Internet connection type.
 */
function geoip_id_by_name()
{
}

/**
 * Get the Internet Service Provider (ISP) name.
 */
function geoip_isp_by_name()
{
}

/**
 * Get the Internet connection speed.
 */
function geoip_netspeedcell_by_name()
{
}

/**
 * Get the organization name.
 */
function geoip_org_by_name()
{
}

/**
 * Returns the detailed City information found in the GeoIP Database.
 */
function geoip_record_by_name()
{
}

/**
 * Get the country code and region.
 */
function geoip_region_by_name()
{
}

/**
 * Returns the region name for some country and region code combo.
 */
function geoip_region_name_by_code()
{
}

/**
 * Set a custom directory for the GeoIP database..
 */
function geoip_setup_custom_directory()
{
}

/**
 * Returns the time zone for some country and region code combo.
 */
function geoip_time_zone_by_country_and_region()
{
}

/**
 * Trains on an entire dataset, for a period of time using the Cascade2 training algorithm.
 */
function fann_cascadetrain_on_data()
{
}

/**
 * Trains on an entire dataset read from file, for a period of time using the Cascade2 training algorithm..
 */
function fann_cascadetrain_on_file()
{
}

/**
 * Clears scaling parameters.
 */
function fann_clear_scaling_params()
{
}

/**
 * Creates a copy of a fann structure.
 */
function fann_copy()
{
}

/**
 * Constructs a backpropagation neural network from a configuration file.
 */
function fann_create_from_file()
{
}

/**
 * Creates a standard backpropagation neural network which is not fully connectected and has shortcut connections.
 */
function fann_create_shortcut_array()
{
}

/**
 * Creates a standard backpropagation neural network which is not fully connectected and has shortcut connections.
 */
function fann_create_shortcut()
{
}

/**
 * Creates a standard backpropagation neural network, which is not fully connected using an array of layer sizes.
 */
function fann_create_sparse_array()
{
}

/**
 * Creates a standard backpropagation neural network, which is not fully connected.
 */
function fann_create_sparse()
{
}

/**
 * Creates a standard fully connected backpropagation neural network using an array of layer sizes.
 */
function fann_create_standard_array()
{
}

/**
 * Creates a standard fully connected backpropagation neural network.
 */
function fann_create_standard()
{
}

/**
 * Creates the training data struct from a user supplied function.
 */
function fann_create_train_from_callback()
{
}

/**
 * Creates an empty training data struct.
 */
function fann_create_train()
{
}

/**
 * Scale data in input vector after get it from ann based on previously calculated parameters.
 */
function fann_descale_input()
{
}

/**
 * Scale data in output vector after get it from ann based on previously calculated parameters.
 */
function fann_descale_output()
{
}

/**
 * Descale input and output data based on previously calculated parameters.
 */
function fann_descale_train()
{
}

/**
 * Destructs the training data.
 */
function fann_destroy_train()
{
}

/**
 * Destroys the entire network and properly freeing all the associated memory.
 */
function fann_destroy()
{
}

/**
 * Returns an exact copy of a fann train data.
 */
function fann_duplicate_train_data()
{
}

/**
 * Returns the activation function.
 */
function fann_get_activation_function()
{
}

/**
 * Returns the activation steepness for supplied neuron and layer number.
 */
function fann_get_activation_steepness()
{
}

/**
 * Get the number of bias in each layer in the network.
 */
function fann_get_bias_array()
{
}

/**
 * Returns the bit fail limit used during training.
 */
function fann_get_bit_fail_limit()
{
}

/**
 * The number of fail bits.
 */
function fann_get_bit_fail()
{
}

/**
 * Returns the number of cascade activation functions.
 */
function fann_get_cascade_activation_functions_count()
{
}

/**
 * Returns the cascade activation functions.
 */
function fann_get_cascade_activation_functions()
{
}

/**
 * The number of activation steepnesses.
 */
function fann_get_cascade_activation_steepnesses_count()
{
}

/**
 * Returns the cascade activation steepnesses.
 */
function fann_get_cascade_activation_steepnesses()
{
}

/**
 * Returns the cascade candidate change fraction.
 */
function fann_get_cascade_candidate_change_fraction()
{
}

/**
 * Return the candidate limit.
 */
function fann_get_cascade_candidate_limit()
{
}

/**
 * Returns the number of cascade candidate stagnation epochs.
 */
function fann_get_cascade_candidate_stagnation_epochs()
{
}

/**
 * Returns the maximum candidate epochs.
 */
function fann_get_cascade_max_cand_epochs()
{
}

/**
 * Returns the maximum out epochs.
 */
function fann_get_cascade_max_out_epochs()
{
}

/**
 * Returns the minimum candidate epochs.
 */
function fann_get_cascade_min_cand_epochs()
{
}

/**
 * Returns the minimum out epochs.
 */
function fann_get_cascade_min_out_epochs()
{
}

/**
 * Returns the number of candidate groups.
 */
function fann_get_cascade_num_candidate_groups()
{
}

/**
 * Returns the number of candidates used during training.
 */
function fann_get_cascade_num_candidates()
{
}

/**
 * Returns the cascade output change fraction.
 */
function fann_get_cascade_output_change_fraction()
{
}

/**
 * Returns the number of cascade output stagnation epochs.
 */
function fann_get_cascade_output_stagnation_epochs()
{
}

/**
 * Returns the weight multiplier.
 */
function fann_get_cascade_weight_multiplier()
{
}

/**
 * Get connections in the network.
 */
function fann_get_connection_array()
{
}

/**
 * Get the connection rate used when the network was created.
 */
function fann_get_connection_rate()
{
}

/**
 * Returns the last error number.
 */
function fann_get_errno()
{
}

/**
 * Returns the last errstr.
 */
function fann_get_errstr()
{
}

/**
 * Get the number of neurons in each layer in the network.
 */
function fann_get_layer_array()
{
}

/**
 * Returns the learning momentum.
 */
function fann_get_learning_momentum()
{
}

/**
 * Returns the learning rate.
 */
function fann_get_learning_rate()
{
}

/**
 * Reads the mean square error from the network.
 */
function fann_get_MSE()
{
}

/**
 * Get the type of neural network it was created as.
 */
function fann_get_network_type()
{
}

/**
 * Get the number of input neurons.
 */
function fann_get_num_input()
{
}

/**
 * Get the number of layers in the neural network.
 */
function fann_get_num_layers()
{
}

/**
 * Get the number of output neurons.
 */
function fann_get_num_output()
{
}

/**
 * Returns the decay which is a factor that weights should decrease in each iteration during quickprop training.
 */
function fann_get_quickprop_decay()
{
}

/**
 * Returns the mu factor.
 */
function fann_get_quickprop_mu()
{
}

/**
 * Returns the increase factor used during RPROP training.
 */
function fann_get_rprop_decrease_factor()
{
}

/**
 * Returns the maximum step-size.
 */
function fann_get_rprop_delta_max()
{
}

/**
 * Returns the minimum step-size.
 */
function fann_get_rprop_delta_min()
{
}

/**
 * Returns the initial step-size.
 */
function fann_get_rprop_delta_zero()
{
}

/**
 * Returns the increase factor used during RPROP training.
 */
function fann_get_rprop_increase_factor()
{
}

/**
 * Returns the sarprop step error shift.
 */
function fann_get_sarprop_step_error_shift()
{
}

/**
 * Returns the sarprop step error threshold factor.
 */
function fann_get_sarprop_step_error_threshold_factor()
{
}

/**
 * Returns the sarprop temperature.
 */
function fann_get_sarprop_temperature()
{
}

/**
 * Returns the sarprop weight decay shift.
 */
function fann_get_sarprop_weight_decay_shift()
{
}

/**
 * Get the total number of connections in the entire network.
 */
function fann_get_total_connections()
{
}

/**
 * Get the total number of neurons in the entire network.
 */
function fann_get_total_neurons()
{
}

/**
 * Returns the error function used during training.
 */
function fann_get_train_error_function()
{
}

/**
 * Returns the stop function used during training.
 */
function fann_get_train_stop_function()
{
}

/**
 * Returns the training algorithm.
 */
function fann_get_training_algorithm()
{
}

/**
 * Initialize the weights using Widrow + Nguyen’s algorithm.
 */
function fann_init_weights()
{
}

/**
 * Returns the number of training patterns in the train data.
 */
function fann_length_train_data()
{
}

/**
 * Merges the train data.
 */
function fann_merge_train_data()
{
}

/**
 * Returns the number of inputs in each of the training patterns in the train data.
 */
function fann_num_input_train_data()
{
}

/**
 * Returns the number of outputs in each of the training patterns in the train data.
 */
function fann_num_output_train_data()
{
}

/**
 * Prints the error string.
 */
function fann_print_error()
{
}

/**
 * Give each connection a random weight between min_weight and max_weight.
 */
function fann_randomize_weights()
{
}

/**
 * Reads a file that stores training data.
 */
function fann_read_train_from_file()
{
}

/**
 * Resets the last error number.
 */
function fann_reset_errno()
{
}

/**
 * Resets the last error string.
 */
function fann_reset_errstr()
{
}

/**
 * Resets the mean square error from the network.
 */
function fann_reset_MSE()
{
}

/**
 * Will run input through the neural network.
 */
function fann_run()
{
}

/**
 * Save the training structure to a file.
 */
function fann_save_train()
{
}

/**
 * Saves the entire network to a configuration file.
 */
function fann_save()
{
}

/**
 * Scales the inputs in the training data to the specified range.
 */
function fann_scale_input_train_data()
{
}

/**
 * Scale data in input vector before feed it to ann based on previously calculated parameters.
 */
function fann_scale_input()
{
}

/**
 * Scales the outputs in the training data to the specified range.
 */
function fann_scale_output_train_data()
{
}

/**
 * Scale data in output vector before feed it to ann based on previously calculated parameters.
 */
function fann_scale_output()
{
}

/**
 * Scales the inputs and outputs in the training data to the specified range.
 */
function fann_scale_train_data()
{
}

/**
 * Scale input and output data based on previously calculated parameters.
 */
function fann_scale_train()
{
}

/**
 * Sets the activation function for all of the hidden layers.
 */
function fann_set_activation_function_hidden()
{
}

/**
 * Sets the activation function for all the neurons in the supplied layer..
 */
function fann_set_activation_function_layer()
{
}

/**
 * Sets the activation function for the output layer.
 */
function fann_set_activation_function_output()
{
}

/**
 * Sets the activation function for supplied neuron and layer.
 */
function fann_set_activation_function()
{
}

/**
 * Sets the steepness of the activation steepness for all neurons in the all hidden layers.
 */
function fann_set_activation_steepness_hidden()
{
}

/**
 * Sets the activation steepness for all of the neurons in the supplied layer number.
 */
function fann_set_activation_steepness_layer()
{
}

/**
 * Sets the steepness of the activation steepness in the output layer.
 */
function fann_set_activation_steepness_output()
{
}

/**
 * Sets the activation steepness for supplied neuron and layer number.
 */
function fann_set_activation_steepness()
{
}

/**
 * Set the bit fail limit used during training.
 */
function fann_set_bit_fail_limit()
{
}

/**
 * Sets the callback function for use during training.
 */
function fann_set_callback()
{
}

/**
 * Sets the array of cascade candidate activation functions.
 */
function fann_set_cascade_activation_functions()
{
}

/**
 * Sets the array of cascade candidate activation steepnesses.
 */
function fann_set_cascade_activation_steepnesses()
{
}

/**
 * Sets the cascade candidate change fraction.
 */
function fann_set_cascade_candidate_change_fraction()
{
}

/**
 * Sets the candidate limit.
 */
function fann_set_cascade_candidate_limit()
{
}

/**
 * Sets the number of cascade candidate stagnation epochs.
 */
function fann_set_cascade_candidate_stagnation_epochs()
{
}

/**
 * Sets the max candidate epochs.
 */
function fann_set_cascade_max_cand_epochs()
{
}

/**
 * Sets the maximum out epochs.
 */
function fann_set_cascade_max_out_epochs()
{
}

/**
 * Sets the min candidate epochs.
 */
function fann_set_cascade_min_cand_epochs()
{
}

/**
 * Sets the minimum out epochs.
 */
function fann_set_cascade_min_out_epochs()
{
}

/**
 * Sets the number of candidate groups.
 */
function fann_set_cascade_num_candidate_groups()
{
}

/**
 * Sets the cascade output change fraction.
 */
function fann_set_cascade_output_change_fraction()
{
}

/**
 * Sets the number of cascade output stagnation epochs.
 */
function fann_set_cascade_output_stagnation_epochs()
{
}

/**
 * Sets the weight multiplier.
 */
function fann_set_cascade_weight_multiplier()
{
}

/**
 * Sets where the errors are logged to.
 */
function fann_set_error_log()
{
}

/**
 * Calculate input scaling parameters for future use based on training data.
 */
function fann_set_input_scaling_params()
{
}

/**
 * Sets the learning momentum.
 */
function fann_set_learning_momentum()
{
}

/**
 * Sets the learning rate.
 */
function fann_set_learning_rate()
{
}

/**
 * Calculate output scaling parameters for future use based on training data.
 */
function fann_set_output_scaling_params()
{
}

/**
 * Sets the quickprop decay factor.
 */
function fann_set_quickprop_decay()
{
}

/**
 * Sets the quickprop mu factor.
 */
function fann_set_quickprop_mu()
{
}

/**
 * Sets the decrease factor used during RPROP training.
 */
function fann_set_rprop_decrease_factor()
{
}

/**
 * Sets the maximum step-size.
 */
function fann_set_rprop_delta_max()
{
}

/**
 * Sets the minimum step-size.
 */
function fann_set_rprop_delta_min()
{
}

/**
 * Sets the initial step-size.
 */
function fann_set_rprop_delta_zero()
{
}

/**
 * Sets the increase factor used during RPROP training.
 */
function fann_set_rprop_increase_factor()
{
}

/**
 * Sets the sarprop step error shift.
 */
function fann_set_sarprop_step_error_shift()
{
}

/**
 * Sets the sarprop step error threshold factor.
 */
function fann_set_sarprop_step_error_threshold_factor()
{
}

/**
 * Sets the sarprop temperature.
 */
function fann_set_sarprop_temperature()
{
}

/**
 * Sets the sarprop weight decay shift.
 */
function fann_set_sarprop_weight_decay_shift()
{
}

/**
 * Calculate input and output scaling parameters for future use based on training data.
 */
function fann_set_scaling_params()
{
}

/**
 * Sets the error function used during training.
 */
function fann_set_train_error_function()
{
}

/**
 * Sets the stop function used during training.
 */
function fann_set_train_stop_function()
{
}

/**
 * Sets the training algorithm.
 */
function fann_set_training_algorithm()
{
}

/**
 * Set connections in the network.
 */
function fann_set_weight_array()
{
}

/**
 * Set a connection in the network.
 */
function fann_set_weight()
{
}

/**
 * Shuffles training data, randomizing the order.
 */
function fann_shuffle_train_data()
{
}

/**
 * Returns an copy of a subset of the train data.
 */
function fann_subset_train_data()
{
}

/**
 * Test a set of training data and calculates the MSE for the training data.
 */
function fann_test_data()
{
}

/**
 * Test with a set of inputs, and a set of desired outputs.
 */
function fann_test()
{
}

/**
 * Train one epoch with a set of training data.
 */
function fann_train_epoch()
{
}

/**
 * Trains on an entire dataset for a period of time.
 */
function fann_train_on_data()
{
}

/**
 * Trains on an entire dataset, which is read from file, for a period of time.
 */
function fann_train_on_file()
{
}

/**
 * Train one iteration with a set of inputs, and a set of desired outputs.
 */
function fann_train()
{
}

/**
 * Decodes a JSON string.
 */
function json_decode()
{
}

/**
 * Returns the JSON representation of a value.
 */
function json_encode()
{
}

/**
 * Returns the error string of the last json_encode() or json_decode() call.
 */
function json_last_error_msg()
{
}

/**
 * Returns the last error occurred.
 */
function json_last_error()
{
}

/**
 * Return the type of a Judy array.
 */
function judy_type()
{
}

/**
 * Return or print the current PHP Judy version.
 */
function judy_version()
{
}

/**
 * Check whether client disconnected.
 */
function connection_aborted()
{
}

/**
 * Returns connection status bitfield.
 */
function connection_status()
{
}

/**
 * Returns the value of a constant.
 */
function constant()
{
}

/**
 * Defines a named constant.
 */
function define()
{
}

/**
 * Checks whether a given named constant exists.
 */
function defined()
{
}

/**
 * Equivalent to exit.
 */
function die()
{
}

/**
 * Evaluate a string as PHP code.
 */
function eval()
{
}

/**
 * Output a message and terminate the current script.
 */
function exit()
{
}

/**
 * Tells what the user's browser is capable of.
 */
function get_browser()
{
}

/**
 * Halts the compiler execution.
 */
function __halt_compiler()
{
}

/**
 * Syntax highlighting of a file.
 */
function highlight_file()
{
}

/**
 * Syntax highlighting of a string.
 */
function highlight_string()
{
}

/**
 * Set whether a client disconnect should abort script execution.
 */
function ignore_user_abort()
{
}

/**
 * Pack data into binary string.
 */
function pack()
{
}

/**
 * Check the PHP syntax of (and execute) the specified file.
 */
function php_check_syntax()
{
}

/**
 * Return source with stripped comments and whitespace.
 */
function php_strip_whitespace()
{
}

/**
 * Alias of highlight_file.
 */
function show_source()
{
}

/**
 * Delay execution.
 */
function sleep()
{
}

/**
 * Gets system load average.
 */
function sys_getloadavg()
{
}

/**
 * Delay for a number of seconds and nanoseconds.
 */
function time_nanosleep()
{
}

/**
 * Make the script sleep until the specified time.
 */
function time_sleep_until()
{
}

/**
 * Generate a unique ID.
 */
function uniqid()
{
}

/**
 * Unpack data from binary string.
 */
function unpack()
{
}

/**
 * Delay execution in microseconds.
 */
function usleep()
{
}

/**
 * Compile a PHP file and return the resulting op array.
 */
function parsekit_compile_file()
{
}

/**
 * Compile a string of PHP code and return the resulting op array.
 */
function parsekit_compile_string()
{
}

/**
 * Return information regarding function argument(s).
 */
function parsekit_func_arginfo()
{
}

/**
 * Return the interfaces which are implemented by the given class or interface.
 */
function class_implements()
{
}

/**
 * Return the parent classes of the given class.
 */
function class_parents()
{
}

/**
 * Return the traits used by the given class.
 */
function class_uses()
{
}

/**
 * Call a function for every element in an iterator.
 */
function iterator_apply()
{
}

/**
 * Count the elements in an iterator.
 */
function iterator_count()
{
}

/**
 * Copy the iterator into an array.
 */
function iterator_to_array()
{
}

/**
 * Try all registered __autoload() function to load the requested class.
 */
function spl_autoload_call()
{
}

/**
 * Register and return default file extensions for spl_autoload.
 */
function spl_autoload_extensions()
{
}

/**
 * Return all registered __autoload() functions.
 */
function spl_autoload_functions()
{
}

/**
 * Register given function as __autoload() implementation.
 */
function spl_autoload_register()
{
}

/**
 * Unregister given function as __autoload() implementation.
 */
function spl_autoload_unregister()
{
}

/**
 * Default implementation for __autoload().
 */
function spl_autoload()
{
}

/**
 * Return available SPL classes.
 */
function spl_classes()
{
}

/**
 * Return hash id for given object.
 */
function spl_object_hash()
{
}

/**
 * Alias of stream_set_blocking.
 */
function set_socket_blocking()
{
}

/**
 * Append bucket to brigade.
 */
function stream_bucket_append()
{
}

/**
 * Return a bucket object from the brigade for operating on.
 */
function stream_bucket_make_writeable()
{
}

/**
 * Create a new bucket for use on the current stream.
 */
function stream_bucket_new()
{
}

/**
 * Prepend bucket to brigade.
 */
function stream_bucket_prepend()
{
}

/**
 * Creates a stream context.
 */
function stream_context_create()
{
}

/**
 * Retrieve the default stream context.
 */
function stream_context_get_default()
{
}

/**
 * Retrieve options for a stream/wrapper/context.
 */
function stream_context_get_options()
{
}

/**
 * Retrieves parameters from a context.
 */
function stream_context_get_params()
{
}

/**
 * Set the default stream context.
 */
function stream_context_set_default()
{
}

/**
 * Sets an option for a stream/wrapper/context.
 */
function stream_context_set_option()
{
}

/**
 * Set parameters for a stream/wrapper/context.
 */
function stream_context_set_params()
{
}

/**
 * Copies data from one stream to another.
 */
function stream_copy_to_stream()
{
}

/**
 * Set character set for stream encoding.
 */
function stream_encoding()
{
}

/**
 * Attach a filter to a stream.
 */
function stream_filter_append()
{
}

/**
 * Attach a filter to a stream.
 */
function stream_filter_prepend()
{
}

/**
 * Register a user defined stream filter.
 */
function stream_filter_register()
{
}

/**
 * Remove a filter from a stream.
 */
function stream_filter_remove()
{
}

/**
 * Reads remainder of a stream into a string.
 */
function stream_get_contents()
{
}

/**
 * Retrieve list of registered filters.
 */
function stream_get_filters()
{
}

/**
 * Gets line from stream resource up to a given delimiter.
 */
function stream_get_line()
{
}

/**
 * Retrieves header/meta data from streams/file pointers.
 */
function stream_get_meta_data()
{
}

/**
 * Retrieve list of registered socket transports.
 */
function stream_get_transports()
{
}

/**
 * Retrieve list of registered streams.
 */
function stream_get_wrappers()
{
}

/**
 * Checks if a stream is a local stream.
 */
function stream_is_local()
{
}

/**
 * A callback function for the notification context parameter.
 */
function stream_notification_callback()
{
}

/**
 * Alias of stream_wrapper_register.
 */
function stream_register_wrapper()
{
}

/**
 * Resolve filename against the include path.
 */
function stream_resolve_include_path()
{
}

/**
 * Runs the equivalent of the select() system call on the given   arrays of streams with a timeout specified by tv_sec and tv_usec.
 */
function stream_select()
{
}

/**
 * Set blocking/non-blocking mode on a stream.
 */
function stream_set_blocking()
{
}

/**
 * Set the stream chunk size.
 */
function stream_set_chunk_size()
{
}

/**
 * Set read file buffering on the given stream.
 */
function stream_set_read_buffer()
{
}

/**
 * Set timeout period on a stream.
 */
function stream_set_timeout()
{
}

/**
 * Sets write file buffering on the given stream.
 */
function stream_set_write_buffer()
{
}

/**
 * Accept a connection on a socket created by stream_socket_server.
 */
function stream_socket_accept()
{
}

/**
 * Open Internet or Unix domain socket connection.
 */
function stream_socket_client()
{
}

/**
 * Turns encryption on/off on an already connected socket.
 */
function stream_socket_enable_crypto()
{
}

/**
 * Retrieve the name of the local or remote sockets.
 */
function stream_socket_get_name()
{
}

/**
 * Creates a pair of connected, indistinguishable socket streams.
 */
function stream_socket_pair()
{
}

/**
 * Receives data from a socket, connected or not.
 */
function stream_socket_recvfrom()
{
}

/**
 * Sends a message to a socket, whether it is connected or not.
 */
function stream_socket_sendto()
{
}

/**
 * Create an Internet or Unix domain server socket.
 */
function stream_socket_server()
{
}

/**
 * Shutdown a full-duplex connection.
 */
function stream_socket_shutdown()
{
}

/**
 * Tells whether the stream supports locking..
 */
function stream_supports_lock()
{
}

/**
 * Register a URL wrapper implemented as a PHP class.
 */
function stream_wrapper_register()
{
}

/**
 * Restores a previously unregistered built-in wrapper.
 */
function stream_wrapper_restore()
{
}

/**
 * Unregister a URL wrapper.
 */
function stream_wrapper_unregister()
{
}

/**
 * Returns a tidyNode object starting from the <body> tag of the tidy parse tree.
 */
function tidy_get_body()
{
}

/**
 * Execute configured cleanup and repair operations on parsed markup.
 */
function tidy_clean_repair()
{
}

/**
 * Run configured diagnostics on parsed and repaired markup.
 */
function tidy_diagnose()
{
}

/**
 * Return warnings and errors which occurred parsing the specified document.
 */
function tidy_get_error_buffer()
{
}

/**
 * Get current Tidy configuration.
 */
function tidy_get_config()
{
}

/**
 * Get the Detected HTML version for the specified document.
 */
function tidy_get_html_ver()
{
}

/**
 * Returns the value of the specified configuration option for the tidy document.
 */
function tidy_getopt()
{
}

/**
 * Returns the documentation for the given option name.
 */
function tidy_get_opt_doc()
{
}

/**
 * Get release date (version) for Tidy library.
 */
function tidy_get_release()
{
}

/**
 * Get status of specified document.
 */
function tidy_get_status()
{
}

/**
 * Returns a tidyNode object starting from the <head> tag of the tidy parse tree.
 */
function tidy_get_head()
{
}

/**
 * Returns a tidyNode object starting from the <html> tag of the tidy parse tree.
 */
function tidy_get_html()
{
}

/**
 * Indicates if the document is a XHTML document.
 */
function tidy_is_xhtml()
{
}

/**
 * Indicates if the document is a generic (non HTML/XHTML) XML document.
 */
function tidy_is_xml()
{
}

/**
 * Parse markup in file or URI.
 */
function tidy_parse_file()
{
}

/**
 * Parse a document stored in a string.
 */
function tidy_parse_string()
{
}

/**
 * Repair a file and return it as a string.
 */
function tidy_repair_file()
{
}

/**
 * Repair a string using an optionally provided configuration file.
 */
function tidy_repair_string()
{
}

/**
 * Returns a tidyNode object representing the root of the tidy parse tree.
 */
function tidy_get_root()
{
}

/**
 * ob_start callback function to repair the buffer.
 */
function ob_tidyhandler()
{
}

/**
 * Returns the Number of Tidy accessibility warnings encountered for specified document.
 */
function tidy_access_count()
{
}

/**
 * Returns the Number of Tidy configuration errors encountered for specified document.
 */
function tidy_config_count()
{
}

/**
 * Returns the Number of Tidy errors encountered for specified document.
 */
function tidy_error_count()
{
}

/**
 * Return a string representing the parsed tidy markup.
 */
function tidy_get_output()
{
}

/**
 * Load an ASCII Tidy configuration file with the specified encoding.
 */
function tidy_load_config()
{
}

/**
 * Restore Tidy configuration to default values.
 */
function tidy_reset_config()
{
}

/**
 * Save current settings to named file.
 */
function tidy_save_config()
{
}

/**
 * Set the input/output character encoding for parsing markup.
 */
function tidy_set_encoding()
{
}

/**
 * Updates the configuration settings for the specified tidy document.
 */
function tidy_setopt()
{
}

/**
 * Returns the Number of Tidy warnings encountered for specified document.
 */
function tidy_warning_count()
{
}

/**
 * Split given source into PHP tokens.
 */
function token_get_all()
{
}

/**
 * Get the symbolic name of a given PHP token.
 */
function token_name()
{
}

/**
 * Decodes data encoded with MIME base64.
 */
function base64_decode()
{
}

/**
 * Encodes data with MIME base64.
 */
function base64_encode()
{
}

/**
 * Fetches all the headers sent by the server in response to a HTTP request.
 */
function get_headers()
{
}

/**
 * Extracts all meta tag content attributes from a file and returns an array.
 */
function get_meta_tags()
{
}

/**
 * Generate URL-encoded query string.
 */
function http_build_query()
{
}

/**
 * Parse a URL and return its components.
 */
function parse_url()
{
}

/**
 * Decode URL-encoded strings.
 */
function rawurldecode()
{
}

/**
 * URL-encode according to RFC 3986.
 */
function rawurlencode()
{
}

/**
 * Decodes URL-encoded string.
 */
function urldecode()
{
}

/**
 * URL-encodes string.
 */
function urlencode()
{
}

/**
 * Send the YAML representation of a value to a file.
 */
function yaml_emit_file()
{
}

/**
 * Returns the YAML representation of a value.
 */
function yaml_emit()
{
}

/**
 * Parse a YAML stream from a file.
 */
function yaml_parse_file()
{
}

/**
 * Parse a Yaml stream from a URL.
 */
function yaml_parse_url()
{
}

/**
 * Parse a YAML stream.
 */
function yaml_parse()
{
}

/**
 * Checks whether a string is tainted.
 */
function is_tainted()
{
}

/**
 * Taint a string.
 */
function taint()
{
}

/**
 * Untaint strings.
 */
function untaint()
{
}

/**
 * Creates a chdb file.
 */
function chdb_create()
{
}

/**
 * Close a cURL session.
 */
function curl_close()
{
}

/**
 * Copy a cURL handle along with all of its preferences.
 */
function curl_copy_handle()
{
}

/**
 * Return the last error number.
 */
function curl_errno()
{
}

/**
 * Return a string containing the last error for the current session.
 */
function curl_error()
{
}

/**
 * URL encodes the given string.
 */
function curl_escape()
{
}

/**
 * Perform a cURL session.
 */
function curl_exec()
{
}

/**
 * Create a CURLFile object.
 */
function curl_file_create()
{
}

/**
 * Get information regarding a specific transfer.
 */
function curl_getinfo()
{
}

/**
 * Initialize a cURL session.
 */
function curl_init()
{
}

/**
 * Add a normal cURL handle to a cURL multi handle.
 */
function curl_multi_add_handle()
{
}

/**
 * Close a set of cURL handles.
 */
function curl_multi_close()
{
}

/**
 * Run the sub-connections of the current cURL handle.
 */
function curl_multi_exec()
{
}

/**
 * Return the content of a cURL handle if CURLOPT_RETURNTRANSFER is set.
 */
function curl_multi_getcontent()
{
}

/**
 * Get information about the current transfers.
 */
function curl_multi_info_read()
{
}

/**
 * Returns a new cURL multi handle.
 */
function curl_multi_init()
{
}

/**
 * Remove a multi handle from a set of cURL handles.
 */
function curl_multi_remove_handle()
{
}

/**
 * Wait for activity on any curl_multi connection.
 */
function curl_multi_select()
{
}

/**
 * Set an option for the cURL multi handle.
 */
function curl_multi_setopt()
{
}

/**
 * Return string describing error code.
 */
function curl_multi_strerror()
{
}

/**
 * Pause and unpause a connection.
 */
function curl_pause()
{
}

/**
 * Reset all options of a libcurl session handle.
 */
function curl_reset()
{
}

/**
 * Set multiple options for a cURL transfer.
 */
function curl_setopt_array()
{
}

/**
 * Set an option for a cURL transfer.
 */
function curl_setopt()
{
}

/**
 * Close a cURL share handle.
 */
function curl_share_close()
{
}

/**
 * Initialize a cURL share handle.
 */
function curl_share_init()
{
}

/**
 * Set an option for a cURL share handle..
 */
function curl_share_setopt()
{
}

/**
 * Return string describing the given error code.
 */
function curl_strerror()
{
}

/**
 * Decodes the given URL encoded string.
 */
function curl_unescape()
{
}

/**
 * Gets cURL version information.
 */
function curl_version()
{
}

/**
 * Terminate monitoring.
 */
function fam_cancel_monitor()
{
}

/**
 * Close FAM connection.
 */
function fam_close()
{
}

/**
 * Monitor a collection of files in a directory for changes.
 */
function fam_monitor_collection()
{
}

/**
 * Monitor a directory for changes.
 */
function fam_monitor_directory()
{
}

/**
 * Monitor a regular file for changes.
 */
function fam_monitor_file()
{
}

/**
 * Get next pending FAM event.
 */
function fam_next_event()
{
}

/**
 * Open connection to FAM daemon.
 */
function fam_open()
{
}

/**
 * Check for pending FAM events.
 */
function fam_pending()
{
}

/**
 * Resume suspended monitoring.
 */
function fam_resume_monitor()
{
}

/**
 * Temporarily suspend monitoring.
 */
function fam_suspend_monitor()
{
}

/**
 * Allocates space for a file to be uploaded.
 */
function ftp_alloc()
{
}

/**
 * Changes to the parent directory.
 */
function ftp_cdup()
{
}

/**
 * Changes the current directory on a FTP server.
 */
function ftp_chdir()
{
}

/**
 * Set permissions on a file via FTP.
 */
function ftp_chmod()
{
}

/**
 * Closes an FTP connection.
 */
function ftp_close()
{
}

/**
 * Opens an FTP connection.
 */
function ftp_connect()
{
}

/**
 * Deletes a file on the FTP server.
 */
function ftp_delete()
{
}

/**
 * Requests execution of a command on the FTP server.
 */
function ftp_exec()
{
}

/**
 * Downloads a file from the FTP server and saves to an open file.
 */
function ftp_fget()
{
}

/**
 * Uploads from an open file to the FTP server.
 */
function ftp_fput()
{
}

/**
 * Retrieves various runtime behaviours of the current FTP stream.
 */
function ftp_get_option()
{
}

/**
 * Downloads a file from the FTP server.
 */
function ftp_get()
{
}

/**
 * Logs in to an FTP connection.
 */
function ftp_login()
{
}

/**
 * Returns the last modified time of the given file.
 */
function ftp_mdtm()
{
}

/**
 * Creates a directory.
 */
function ftp_mkdir()
{
}

/**
 * Continues retrieving/sending a file (non-blocking).
 */
function ftp_nb_continue()
{
}

/**
 * Retrieves a file from the FTP server and writes it to an open file (non-blocking).
 */
function ftp_nb_fget()
{
}

/**
 * Stores a file from an open file to the FTP server (non-blocking).
 */
function ftp_nb_fput()
{
}

/**
 * Retrieves a file from the FTP server and writes it to a local file (non-blocking).
 */
function ftp_nb_get()
{
}

/**
 * Stores a file on the FTP server (non-blocking).
 */
function ftp_nb_put()
{
}

/**
 * Returns a list of files in the given directory.
 */
function ftp_nlist()
{
}

/**
 * Turns passive mode on or off.
 */
function ftp_pasv()
{
}

/**
 * Uploads a file to the FTP server.
 */
function ftp_put()
{
}

/**
 * Returns the current directory name.
 */
function ftp_pwd()
{
}

/**
 * Alias of ftp_close.
 */
function ftp_quit()
{
}

/**
 * Sends an arbitrary command to an FTP server.
 */
function ftp_raw()
{
}

/**
 * Returns a detailed list of files in the given directory.
 */
function ftp_rawlist()
{
}

/**
 * Renames a file or a directory on the FTP server.
 */
function ftp_rename()
{
}

/**
 * Removes a directory.
 */
function ftp_rmdir()
{
}

/**
 * Set miscellaneous runtime FTP options.
 */
function ftp_set_option()
{
}

/**
 * Sends a SITE command to the server.
 */
function ftp_site()
{
}

/**
 * Returns the size of the given file.
 */
function ftp_size()
{
}

/**
 * Opens an Secure SSL-FTP connection.
 */
function ftp_ssl_connect()
{
}

/**
 * Returns the system type identifier of the remote FTP server.
 */
function ftp_systype()
{
}

/**
 * Get the status of a background job.
 */
function gearman_job_status()
{
}

/**
 * Get the job handle.
 */
function gearman_job_handle()
{
}

/**
 * Translate a gopher formatted directory entry into an associative array..
 */
function gopher_parsedir()
{
}

/**
 * Get the IP address.
 */
function gupnp_context_get_host_ip()
{
}

/**
 * Get the port.
 */
function gupnp_context_get_port()
{
}

/**
 * Get the event subscription timeout.
 */
function gupnp_context_get_subscription_timeout()
{
}

/**
 * Start hosting.
 */
function gupnp_context_host_path()
{
}

/**
 * Create a new context.
 */
function gupnp_context_new()
{
}

/**
 * Sets the event subscription timeout.
 */
function gupnp_context_set_subscription_timeout()
{
}

/**
 * Sets a function to be called at regular intervals.
 */
function gupnp_context_timeout_add()
{
}

/**
 * Stop hosting.
 */
function gupnp_context_unhost_path()
{
}

/**
 * Start browsing.
 */
function gupnp_control_point_browse_start()
{
}

/**
 * Stop browsing.
 */
function gupnp_control_point_browse_stop()
{
}

/**
 * Set control point callback.
 */
function gupnp_control_point_callback_set()
{
}

/**
 * Create a new control point.
 */
function gupnp_control_point_new()
{
}

/**
 * Set device callback function.
 */
function gupnp_device_action_callback_set()
{
}

/**
 * Get the service with type.
 */
function gupnp_device_info_get_service()
{
}

/**
 * Get info of root device.
 */
function gupnp_device_info_get()
{
}

/**
 * Check whether root device is available.
 */
function gupnp_root_device_get_available()
{
}

/**
 * Get the relative location of root device..
 */
function gupnp_root_device_get_relative_location()
{
}

/**
 * Create a new root device.
 */
function gupnp_root_device_new()
{
}

/**
 * Set whether or not root_device is available.
 */
function gupnp_root_device_set_available()
{
}

/**
 * Start main loop.
 */
function gupnp_root_device_start()
{
}

/**
 * Stop main loop.
 */
function gupnp_root_device_stop()
{
}

/**
 * Retrieves the specified action arguments.
 */
function gupnp_service_action_get()
{
}

/**
 * Return error code.
 */
function gupnp_service_action_return_error()
{
}

/**
 * Return successfully.
 */
function gupnp_service_action_return()
{
}

/**
 * Sets the specified action return values.
 */
function gupnp_service_action_set()
{
}

/**
 * Freeze new notifications.
 */
function gupnp_service_freeze_notify()
{
}

/**
 * Get resource introspection of service.
 */
function gupnp_service_info_get_introspection()
{
}

/**
 * Get full info of service.
 */
function gupnp_service_info_get()
{
}

/**
 * Returns the state variable data.
 */
function gupnp_service_introspection_get_state_variable()
{
}

/**
 * Notifies listening clients.
 */
function gupnp_service_notify()
{
}

/**
 * Send action to the service and get value.
 */
function gupnp_service_proxy_action_get()
{
}

/**
 * Send action to the service and set value.
 */
function gupnp_service_proxy_action_set()
{
}

/**
 * Sets up callback for variable change notification.
 */
function gupnp_service_proxy_add_notify()
{
}

/**
 * Set service proxy callback for signal.
 */
function gupnp_service_proxy_callback_set()
{
}

/**
 * Check whether subscription is valid to the service.
 */
function gupnp_service_proxy_get_subscribed()
{
}

/**
 * Cancels the variable change notification.
 */
function gupnp_service_proxy_remove_notify()
{
}

/**
 * Send action with multiple parameters synchronously.
 */
function gupnp_service_proxy_send_action()
{
}

/**
 * (Un)subscribes to the service..
 */
function gupnp_service_proxy_set_subscribed()
{
}

/**
 * Sends out any pending notifications and stops queuing of new ones..
 */
function gupnp_service_thaw_notify()
{
}

/**
 * Caching by ETag.
 */
function http_cache_etag()
{
}

/**
 * Caching by last modification.
 */
function http_cache_last_modified()
{
}

/**
 * Decode chunked-encoded data.
 */
function http_chunked_decode()
{
}

/**
 * Deflate data.
 */
function http_deflate()
{
}

/**
 * Inflate data.
 */
function http_inflate()
{
}

/**
 * Build cookie string.
 */
function http_build_cookie()
{
}

/**
 * Compose HTTP RFC compliant date.
 */
function http_date()
{
}

/**
 * Get request body as stream.
 */
function http_get_request_body_stream()
{
}

/**
 * Get request body as string.
 */
function http_get_request_body()
{
}

/**
 * Get request headers as array.
 */
function http_get_request_headers()
{
}

/**
 * Match ETag.
 */
function http_match_etag()
{
}

/**
 * Match last modification.
 */
function http_match_modified()
{
}

/**
 * Match any header.
 */
function http_match_request_header()
{
}

/**
 * Check built-in HTTP support.
 */
function http_support()
{
}

/**
 * Negotiate client's preferred character set.
 */
function http_negotiate_charset()
{
}

/**
 * Negotiate client's preferred content type.
 */
function http_negotiate_content_type()
{
}

/**
 * Negotiate client's preferred language.
 */
function http_negotiate_language()
{
}

/**
 * Deflate output handler.
 */
function ob_deflatehandler()
{
}

/**
 * ETag output handler.
 */
function ob_etaghandler()
{
}

/**
 * Inflate output handler.
 */
function ob_inflatehandler()
{
}

/**
 * Parse HTTP cookie.
 */
function http_parse_cookie()
{
}

/**
 * Parse HTTP headers.
 */
function http_parse_headers()
{
}

/**
 * Parse HTTP messages.
 */
function http_parse_message()
{
}

/**
 * Parse parameter list.
 */
function http_parse_params()
{
}

/**
 * Clean up persistent handles.
 */
function http_persistent_handles_clean()
{
}

/**
 * Stat persistent handles.
 */
function http_persistent_handles_count()
{
}

/**
 * Get/set ident of persistent handles.
 */
function http_persistent_handles_ident()
{
}

/**
 * Perform GET request.
 */
function http_get()
{
}

/**
 * Perform HEAD request.
 */
function http_head()
{
}

/**
 * Perform POST request with pre-encoded data.
 */
function http_post_data()
{
}

/**
 * Perform POST request with data to be encoded.
 */
function http_post_fields()
{
}

/**
 * Perform PUT request with data.
 */
function http_put_data()
{
}

/**
 * Perform PUT request with file.
 */
function http_put_file()
{
}

/**
 * Perform PUT request with stream.
 */
function http_put_stream()
{
}

/**
 * Encode request body.
 */
function http_request_body_encode()
{
}

/**
 * Check whether request method exists.
 */
function http_request_method_exists()
{
}

/**
 * Get request method name.
 */
function http_request_method_name()
{
}

/**
 * Register request method.
 */
function http_request_method_register()
{
}

/**
 * Unregister request method.
 */
function http_request_method_unregister()
{
}

/**
 * Perform custom request.
 */
function http_request()
{
}

/**
 * Issue HTTP redirect.
 */
function http_redirect()
{
}

/**
 * Send Content-Disposition.
 */
function http_send_content_disposition()
{
}

/**
 * Send Content-Type.
 */
function http_send_content_type()
{
}

/**
 * Send arbitrary data.
 */
function http_send_data()
{
}

/**
 * Send file.
 */
function http_send_file()
{
}

/**
 * Send Last-Modified.
 */
function http_send_last_modified()
{
}

/**
 * Send HTTP response status.
 */
function http_send_status()
{
}

/**
 * Send stream.
 */
function http_send_stream()
{
}

/**
 * HTTP throttling.
 */
function http_throttle()
{
}

/**
 * Build query string.
 */
function http_build_str()
{
}

/**
 * Build a URL.
 */
function http_build_url()
{
}

/**
 * Creates instance of class hw_api_attribute.
 */
function hwapi_attribute_new()
{
}

/**
 * Create new instance of class hw_api_content.
 */
function hwapi_content_new()
{
}

/**
 * Returns object of class hw_api.
 */
function hwapi_hgcsp()
{
}

/**
 * Creates a new instance of class hwapi_object_new.
 */
function hwapi_object_new()
{
}

/**
 * Translate 8859 characters to t61 characters.
 */
function ldap_8859_to_t61()
{
}

/**
 * Add entries to LDAP directory.
 */
function ldap_add()
{
}

/**
 * Bind to LDAP directory.
 */
function ldap_bind()
{
}

/**
 * Alias of ldap_unbind.
 */
function ldap_close()
{
}

/**
 * Compare value of attribute found in entry specified with DN.
 */
function ldap_compare()
{
}

/**
 * Connect to an LDAP server.
 */
function ldap_connect()
{
}

/**
 * Retrieve the LDAP pagination cookie.
 */
function ldap_control_paged_result_response()
{
}

/**
 * Send LDAP pagination control.
 */
function ldap_control_paged_result()
{
}

/**
 * Count the number of entries in a search.
 */
function ldap_count_entries()
{
}

/**
 * Delete an entry from a directory.
 */
function ldap_delete()
{
}

/**
 * Convert DN to User Friendly Naming format.
 */
function ldap_dn2ufn()
{
}

/**
 * Convert LDAP error number into string error message.
 */
function ldap_err2str()
{
}

/**
 * Return the LDAP error number of the last LDAP command.
 */
function ldap_errno()
{
}

/**
 * Return the LDAP error message of the last LDAP command.
 */
function ldap_error()
{
}

/**
 * Escape a string for use in an LDAP filter or DN.
 */
function ldap_escape()
{
}

/**
 * Splits DN into its component parts.
 */
function ldap_explode_dn()
{
}

/**
 * Return first attribute.
 */
function ldap_first_attribute()
{
}

/**
 * Return first result id.
 */
function ldap_first_entry()
{
}

/**
 * Return first reference.
 */
function ldap_first_reference()
{
}

/**
 * Free result memory.
 */
function ldap_free_result()
{
}

/**
 * Get attributes from a search result entry.
 */
function ldap_get_attributes()
{
}

/**
 * Get the DN of a result entry.
 */
function ldap_get_dn()
{
}

/**
 * Get all result entries.
 */
function ldap_get_entries()
{
}

/**
 * Get the current value for given option.
 */
function ldap_get_option()
{
}

/**
 * Get all binary values from a result entry.
 */
function ldap_get_values_len()
{
}

/**
 * Get all values from a result entry.
 */
function ldap_get_values()
{
}

/**
 * Single-level search.
 */
function ldap_list()
{
}

/**
 * Add attribute values to current attributes.
 */
function ldap_mod_add()
{
}

/**
 * Delete attribute values from current attributes.
 */
function ldap_mod_del()
{
}

/**
 * Replace attribute values with new ones.
 */
function ldap_mod_replace()
{
}

/**
 * Batch and execute modifications on an LDAP entry.
 */
function ldap_modify_batch()
{
}

/**
 * Modify an LDAP entry.
 */
function ldap_modify()
{
}

/**
 * Get the next attribute in result.
 */
function ldap_next_attribute()
{
}

/**
 * Get next result entry.
 */
function ldap_next_entry()
{
}

/**
 * Get next reference.
 */
function ldap_next_reference()
{
}

/**
 * Extract information from reference entry.
 */
function ldap_parse_reference()
{
}

/**
 * Extract information from result.
 */
function ldap_parse_result()
{
}

/**
 * Read an entry.
 */
function ldap_read()
{
}

/**
 * Modify the name of an entry.
 */
function ldap_rename()
{
}

/**
 * Bind to LDAP directory using SASL.
 */
function ldap_sasl_bind()
{
}

/**
 * Search LDAP tree.
 */
function ldap_search()
{
}

/**
 * Set the value of the given option.
 */
function ldap_set_option()
{
}

/**
 * Set a callback function to do re-binds on referral chasing.
 */
function ldap_set_rebind_proc()
{
}

/**
 * Sort LDAP result entries.
 */
function ldap_sort()
{
}

/**
 * Start TLS.
 */
function ldap_start_tls()
{
}

/**
 * Translate t61 characters to 8859 characters.
 */
function ldap_t61_to_8859()
{
}

/**
 * Unbind from LDAP directory.
 */
function ldap_unbind()
{
}

/**
 * Turn debug output on/off.
 */
function memcache_debug()
{
}

/**
 * MQSeries MQBACK.
 */
function mqseries_back()
{
}

/**
 * MQseries MQBEGIN.
 */
function mqseries_begin()
{
}

/**
 * MQSeries MQCLOSE.
 */
function mqseries_close()
{
}

/**
 * MQSeries MQCMIT.
 */
function mqseries_cmit()
{
}

/**
 * MQSeries MQCONN.
 */
function mqseries_conn()
{
}

/**
 * MQSeries MQCONNX.
 */
function mqseries_connx()
{
}

/**
 * MQSeries MQDISC.
 */
function mqseries_disc()
{
}

/**
 * MQSeries MQGET.
 */
function mqseries_get()
{
}

/**
 * MQSeries MQINQ.
 */
function mqseries_inq()
{
}

/**
 * MQSeries MQOPEN.
 */
function mqseries_open()
{
}

/**
 * MQSeries MQPUT1.
 */
function mqseries_put1()
{
}

/**
 * MQSeries MQPUT.
 */
function mqseries_put()
{
}

/**
 * MQSeries MQSET.
 */
function mqseries_set()
{
}

/**
 * Returns the error message corresponding to a result code (MQRC)..
 */
function mqseries_strerror()
{
}

/**
 * Check DNS records corresponding to a given Internet host name or IP address.
 */
function checkdnsrr()
{
}

/**
 * Close connection to system logger.
 */
function closelog()
{
}

/**
 * Initializes all syslog related variables.
 */
function define_syslog_variables()
{
}

/**
 * Alias of checkdnsrr.
 */
function dns_check_record()
{
}

/**
 * Alias of getmxrr.
 */
function dns_get_mx()
{
}

/**
 * Fetch DNS Resource Records associated with a hostname.
 */
function dns_get_record()
{
}

/**
 * Open Internet or Unix domain socket connection.
 */
function fsockopen()
{
}

/**
 * Get the Internet host name corresponding to a given IP address.
 */
function gethostbyaddr()
{
}

/**
 * Get the IPv4 address corresponding to a given Internet host name.
 */
function gethostbyname()
{
}

/**
 * Get a list of IPv4 addresses corresponding to a given Internet host   name.
 */
function gethostbynamel()
{
}

/**
 * Gets the host name.
 */
function gethostname()
{
}

/**
 * Get MX records corresponding to a given Internet host name.
 */
function getmxrr()
{
}

/**
 * Get protocol number associated with protocol name.
 */
function getprotobyname()
{
}

/**
 * Get protocol name associated with protocol number.
 */
function getprotobynumber()
{
}

/**
 * Get port number associated with an Internet service and protocol.
 */
function getservbyname()
{
}

/**
 * Get Internet service which corresponds to port and protocol.
 */
function getservbyport()
{
}

/**
 * Call a header function.
 */
function header_register_callback()
{
}

/**
 * Remove previously set headers.
 */
function header_remove()
{
}

/**
 * Send a raw HTTP header.
 */
function header()
{
}

/**
 * Returns a list of response headers sent (or ready to send).
 */
function headers_list()
{
}

/**
 * Checks if or where headers have been sent.
 */
function headers_sent()
{
}

/**
 * Get or Set the HTTP response code.
 */
function http_response_code()
{
}

/**
 * Converts a packed internet address to a human readable representation.
 */
function inet_ntop()
{
}

/**
 * Converts a human readable IP address to its packed in_addr representation.
 */
function inet_pton()
{
}

/**
 * Converts a string containing an (IPv4) Internet Protocol dotted address into a proper address.
 */
function ip2long()
{
}

/**
 * Converts an (IPv4) Internet network address into a string in Internet standard dotted format.
 */
function long2ip()
{
}

/**
 * Open connection to system logger.
 */
function openlog()
{
}

/**
 * Open persistent Internet or Unix domain socket connection.
 */
function pfsockopen()
{
}

/**
 * Send a cookie.
 */
function setcookie()
{
}

/**
 * Send a cookie without urlencoding the cookie value.
 */
function setrawcookie()
{
}

/**
 * Alias of stream_get_meta_data.
 */
function socket_get_status()
{
}

/**
 * Alias of stream_set_blocking.
 */
function socket_set_blocking()
{
}

/**
 * Alias of stream_set_timeout.
 */
function socket_set_timeout()
{
}

/**
 * Generate a system log message.
 */
function syslog()
{
}

/**
 * Creates rrd database file.
 */
function rrd_create()
{
}

/**
 * Gets latest error message..
 */
function rrd_error()
{
}

/**
 * Fetch the data for graph as array..
 */
function rrd_fetch()
{
}

/**
 * Gets the timestamp of the first sample from rrd file..
 */
function rrd_first()
{
}

/**
 * Creates image from a data..
 */
function rrd_graph()
{
}

/**
 * Gets information about rrd file.
 */
function rrd_info()
{
}

/**
 * Gets unix timestamp of the last sample..
 */
function rrd_last()
{
}

/**
 * Gets information about last updated data..
 */
function rrd_lastupdate()
{
}

/**
 * Restores the RRD file from XML dump..
 */
function rrd_restore()
{
}

/**
 * Tunes some RRD database file header options..
 */
function rrd_tune()
{
}

/**
 * Updates the RRD database..
 */
function rrd_update()
{
}

/**
 * Gets information about underlying rrdtool library.
 */
function rrd_version()
{
}

/**
 * Exports the information about RRD database..
 */
function rrd_xport()
{
}

/**
 * Close any outstanding connection to rrd caching daemon.
 */
function rrdc_disconnect()
{
}

/**
 * Fetches the current value of the UCD library's quick_print setting.
 */
function snmp_get_quick_print()
{
}

/**
 * Return the method how the SNMP values will be returned.
 */
function snmp_get_valueretrieval()
{
}

/**
 * Reads and parses a MIB file into the active MIB tree.
 */
function snmp_read_mib()
{
}

/**
 * Return all values that are enums with their enum value instead of the raw integer.
 */
function snmp_set_enum_print()
{
}

/**
 * Set the OID output format.
 */
function snmp_set_oid_numeric_print()
{
}

/**
 * Set the OID output format.
 */
function snmp_set_oid_output_format()
{
}

/**
 * Set the value of quick_print within the UCD SNMP library.
 */
function snmp_set_quick_print()
{
}

/**
 * Specify the method how the SNMP values will be returned.
 */
function snmp_set_valueretrieval()
{
}

/**
 * Fetch an SNMP object.
 */
function snmp2_get()
{
}

/**
 * Fetch the SNMP object which follows the given object id.
 */
function snmp2_getnext()
{
}

/**
 * Return all objects including their respective object ID within the specified one.
 */
function snmp2_real_walk()
{
}

/**
 * Set the value of an SNMP object.
 */
function snmp2_set()
{
}

/**
 * Fetch all the SNMP objects from an agent.
 */
function snmp2_walk()
{
}

/**
 * Fetch an SNMP object.
 */
function snmp3_get()
{
}

/**
 * Fetch the SNMP object which follows the given object id.
 */
function snmp3_getnext()
{
}

/**
 * Return all objects including their respective object ID within the specified one.
 */
function snmp3_real_walk()
{
}

/**
 * Set the value of an SNMP object.
 */
function snmp3_set()
{
}

/**
 * Fetch all the SNMP objects from an agent.
 */
function snmp3_walk()
{
}

/**
 * Fetch an SNMP object.
 */
function snmpget()
{
}

/**
 * Fetch the SNMP object which follows the given object id.
 */
function snmpgetnext()
{
}

/**
 * Return all objects including their respective object ID within the specified one.
 */
function snmprealwalk()
{
}

/**
 * Set the value of an SNMP object.
 */
function snmpset()
{
}

/**
 * Fetch all the SNMP objects from an agent.
 */
function snmpwalk()
{
}

/**
 * Query for a tree of information about a network entity.
 */
function snmpwalkoid()
{
}

/**
 * Accepts a connection on a socket.
 */
function socket_accept()
{
}

/**
 * Binds a name to a socket.
 */
function socket_bind()
{
}

/**
 * Clears the error on the socket or the last error code.
 */
function socket_clear_error()
{
}

/**
 * Closes a socket resource.
 */
function socket_close()
{
}

/**
 * Calculate message buffer size.
 */
function socket_cmsg_space()
{
}

/**
 * Initiates a connection on a socket.
 */
function socket_connect()
{
}

/**
 * Opens a socket on port to accept connections.
 */
function socket_create_listen()
{
}

/**
 * Creates a pair of indistinguishable sockets and stores them in an array.
 */
function socket_create_pair()
{
}

/**
 * Create a socket (endpoint for communication).
 */
function socket_create()
{
}

/**
 * Gets socket options for the socket.
 */
function socket_get_option()
{
}

/**
 * Queries the remote side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type.
 */
function socket_getpeername()
{
}

/**
 * Queries the local side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type.
 */
function socket_getsockname()
{
}

/**
 * Import a stream.
 */
function socket_import_stream()
{
}

/**
 * Returns the last error on the socket.
 */
function socket_last_error()
{
}

/**
 * Listens for a connection on a socket.
 */
function socket_listen()
{
}

/**
 * Reads a maximum of length bytes from a socket.
 */
function socket_read()
{
}

/**
 * Receives data from a connected socket.
 */
function socket_recv()
{
}

/**
 * Receives data from a socket whether or not it is connection-oriented.
 */
function socket_recvfrom()
{
}

/**
 * Read a message.
 */
function socket_recvmsg()
{
}

/**
 * Runs the select() system call on the given arrays of sockets with a specified timeout.
 */
function socket_select()
{
}

/**
 * Sends data to a connected socket.
 */
function socket_send()
{
}

/**
 * Send a message.
 */
function socket_sendmsg()
{
}

/**
 * Sends a message to a socket, whether it is connected or not.
 */
function socket_sendto()
{
}

/**
 * Sets blocking mode on a socket resource.
 */
function socket_set_block()
{
}

/**
 * Sets nonblocking mode for file descriptor fd.
 */
function socket_set_nonblock()
{
}

/**
 * Sets socket options for the socket.
 */
function socket_set_option()
{
}

/**
 * Shuts down a socket for receiving, sending, or both.
 */
function socket_shutdown()
{
}

/**
 * Return a string describing a socket error.
 */
function socket_strerror()
{
}

/**
 * Write to a socket.
 */
function socket_write()
{
}

/**
 * Authenticate over SSH using the ssh agent.
 */
function ssh2_auth_agent()
{
}

/**
 * Authenticate using a public hostkey.
 */
function ssh2_auth_hostbased_file()
{
}

/**
 * Authenticate as "none".
 */
function ssh2_auth_none()
{
}

/**
 * Authenticate over SSH using a plain password.
 */
function ssh2_auth_password()
{
}

/**
 * Authenticate using a public key.
 */
function ssh2_auth_pubkey_file()
{
}

/**
 * Connect to an SSH server.
 */
function ssh2_connect()
{
}

/**
 * Execute a command on a remote server.
 */
function ssh2_exec()
{
}

/**
 * Fetch an extended data stream.
 */
function ssh2_fetch_stream()
{
}

/**
 * Retrieve fingerprint of remote server.
 */
function ssh2_fingerprint()
{
}

/**
 * Return list of negotiated methods.
 */
function ssh2_methods_negotiated()
{
}

/**
 * Add an authorized publickey.
 */
function ssh2_publickey_add()
{
}

/**
 * Initialize Publickey subsystem.
 */
function ssh2_publickey_init()
{
}

/**
 * List currently authorized publickeys.
 */
function ssh2_publickey_list()
{
}

/**
 * Remove an authorized publickey.
 */
function ssh2_publickey_remove()
{
}

/**
 * Request a file via SCP.
 */
function ssh2_scp_recv()
{
}

/**
 * Send a file via SCP.
 */
function ssh2_scp_send()
{
}

/**
 * Changes file mode.
 */
function ssh2_sftp_chmod()
{
}

/**
 * Stat a symbolic link.
 */
function ssh2_sftp_lstat()
{
}

/**
 * Create a directory.
 */
function ssh2_sftp_mkdir()
{
}

/**
 * Return the target of a symbolic link.
 */
function ssh2_sftp_readlink()
{
}

/**
 * Resolve the realpath of a provided path string.
 */
function ssh2_sftp_realpath()
{
}

/**
 * Rename a remote file.
 */
function ssh2_sftp_rename()
{
}

/**
 * Remove a directory.
 */
function ssh2_sftp_rmdir()
{
}

/**
 * Stat a file on a remote filesystem.
 */
function ssh2_sftp_stat()
{
}

/**
 * Create a symlink.
 */
function ssh2_sftp_symlink()
{
}

/**
 * Delete a file.
 */
function ssh2_sftp_unlink()
{
}

/**
 * Initialize SFTP subsystem.
 */
function ssh2_sftp()
{
}

/**
 * Request an interactive shell.
 */
function ssh2_shell()
{
}

/**
 * Open a tunnel through a remote server.
 */
function ssh2_tunnel()
{
}

/**
 * Returns a string description of the last connect error.
 */
function stomp_connect_error()
{
}

/**
 * Gets the current stomp extension version.
 */
function stomp_version()
{
}

/**
 * Rolls back a transaction in progress.
 */
function stomp_abort()
{
}

/**
 * Acknowledges consumption of a message.
 */
function stomp_ack()
{
}

/**
 * Starts a transaction.
 */
function stomp_begin()
{
}

/**
 * Commits a transaction in progress.
 */
function stomp_commit()
{
}

/**
 * Opens a connection.
 */
function stomp_connect()
{
}

/**
 * Closes stomp connection.
 */
function stomp_close()
{
}

/**
 * Gets the last stomp error.
 */
function stomp_error()
{
}

/**
 * Gets read timeout.
 */
function stomp_get_read_timeout()
{
}

/**
 * Gets the current stomp session ID.
 */
function stomp_get_session_id()
{
}

/**
 * Indicates whether or not there is a frame ready to read.
 */
function stomp_has_frame()
{
}

/**
 * Reads the next frame.
 */
function stomp_read_frame()
{
}

/**
 * Sends a message.
 */
function stomp_send()
{
}

/**
 * Sets read timeout.
 */
function stomp_set_read_timeout()
{
}

/**
 * Registers to listen to a given destination.
 */
function stomp_subscribe()
{
}

/**
 * Removes an existing subscription.
 */
function stomp_unsubscribe()
{
}

/**
 * Schedules the addition of an item in a working directory.
 */
function svn_add()
{
}

/**
 * Retrieves authentication parameter.
 */
function svn_auth_get_parameter()
{
}

/**
 * Sets an authentication parameter.
 */
function svn_auth_set_parameter()
{
}

/**
 * Get the SVN blame for a file.
 */
function svn_blame()
{
}

/**
 * Returns the contents of a file in a repository.
 */
function svn_cat()
{
}

/**
 * Checks out a working copy from the repository.
 */
function svn_checkout()
{
}

/**
 * Recursively cleanup a working copy directory, finishing incomplete operations and removing locks.
 */
function svn_cleanup()
{
}

/**
 * Returns the version of the SVN client libraries.
 */
function svn_client_version()
{
}

/**
 * Sends changes from the local working copy to the repository.
 */
function svn_commit()
{
}

/**
 * Delete items from a working copy or repository..
 */
function svn_delete()
{
}

/**
 * Recursively diffs two paths.
 */
function svn_diff()
{
}

/**
 * Export the contents of a SVN directory.
 */
function svn_export()
{
}

/**
 * Abort a transaction, returns true if everything is okay, false otherwise.
 */
function svn_fs_abort_txn()
{
}

/**
 * Creates and returns a stream that will be used to replace.
 */
function svn_fs_apply_text()
{
}

/**
 * Create a new transaction.
 */
function svn_fs_begin_txn2()
{
}

/**
 * Return true if everything is ok, false otherwise.
 */
function svn_fs_change_node_prop()
{
}

/**
 * Determines what kind of item lives at path in a given repository fsroot.
 */
function svn_fs_check_path()
{
}

/**
 * Return true if content is different, false otherwise.
 */
function svn_fs_contents_changed()
{
}

/**
 * Copies a file or a directory, returns true if all is ok, false otherwise.
 */
function svn_fs_copy()
{
}

/**
 * Deletes a file or a directory, return true if all is ok, false otherwise.
 */
function svn_fs_delete()
{
}

/**
 * Enumerates the directory entries under path; returns a hash of dir names to file type.
 */
function svn_fs_dir_entries()
{
}

/**
 * Returns a stream to access the contents of a file from a given version of the fs.
 */
function svn_fs_file_contents()
{
}

/**
 * Returns the length of a file from a given version of the fs.
 */
function svn_fs_file_length()
{
}

/**
 * Return true if the path points to a directory, false otherwise.
 */
function svn_fs_is_dir()
{
}

/**
 * Return true if the path points to a file, false otherwise.
 */
function svn_fs_is_file()
{
}

/**
 * Creates a new empty directory, returns true if all is ok, false otherwise.
 */
function svn_fs_make_dir()
{
}

/**
 * Creates a new empty file, returns true if all is ok, false otherwise.
 */
function svn_fs_make_file()
{
}

/**
 * Returns the revision in which path under fsroot was created.
 */
function svn_fs_node_created_rev()
{
}

/**
 * Returns the value of a property for a node.
 */
function svn_fs_node_prop()
{
}

/**
 * Return true if props are different, false otherwise.
 */
function svn_fs_props_changed()
{
}

/**
 * Fetches the value of a named property.
 */
function svn_fs_revision_prop()
{
}

/**
 * Get a handle on a specific version of the repository root.
 */
function svn_fs_revision_root()
{
}

/**
 * Creates and returns a transaction root.
 */
function svn_fs_txn_root()
{
}

/**
 * Returns the number of the youngest revision in the filesystem.
 */
function svn_fs_youngest_rev()
{
}

/**
 * Imports an unversioned path into a repository.
 */
function svn_import()
{
}

/**
 * Returns the commit log messages of a repository URL.
 */
function svn_log()
{
}

/**
 * Returns list of directory contents in repository URL, optionally at revision number.
 */
function svn_ls()
{
}

/**
 * Creates a directory in a working copy or repository.
 */
function svn_mkdir()
{
}

/**
 * Create a new subversion repository at path.
 */
function svn_repos_create()
{
}

/**
 * Create a new transaction.
 */
function svn_repos_fs_begin_txn_for_commit()
{
}

/**
 * Commits a transaction and returns the new revision.
 */
function svn_repos_fs_commit_txn()
{
}

/**
 * Gets a handle on the filesystem for a repository.
 */
function svn_repos_fs()
{
}

/**
 * Make a hot-copy of the repos at repospath; copy it to destpath.
 */
function svn_repos_hotcopy()
{
}

/**
 * Open a shared lock on a repository..
 */
function svn_repos_open()
{
}

/**
 * Run recovery procedures on the repository located at path..
 */
function svn_repos_recover()
{
}

/**
 * Revert changes to the working copy.
 */
function svn_revert()
{
}

/**
 * Returns the status of working copy files and directories.
 */
function svn_status()
{
}

/**
 * Update working copy.
 */
function svn_update()
{
}

/**
 * Performs a tcpwrap check.
 */
function tcpwrap_check()
{
}

/**
 * Returns additional error information.
 */
function yaz_addinfo()
{
}

/**
 * Configure CCL parser.
 */
function yaz_ccl_conf()
{
}

/**
 * Invoke CCL Parser.
 */
function yaz_ccl_parse()
{
}

/**
 * Close YAZ connection.
 */
function yaz_close()
{
}

/**
 * Prepares for a connection to a Z39.50 server.
 */
function yaz_connect()
{
}

/**
 * Specifies the databases within a session.
 */
function yaz_database()
{
}

/**
 * Specifies Element-Set Name for retrieval.
 */
function yaz_element()
{
}

/**
 * Returns error number.
 */
function yaz_errno()
{
}

/**
 * Returns error description.
 */
function yaz_error()
{
}

/**
 * Inspects Extended Services Result.
 */
function yaz_es_result()
{
}

/**
 * Prepares for an Extended Service Request.
 */
function yaz_es()
{
}

/**
 * Returns value of option for connection.
 */
function yaz_get_option()
{
}

/**
 * Returns number of hits for last search.
 */
function yaz_hits()
{
}

/**
 * Prepares for Z39.50 Item Order with an ILL-Request package.
 */
function yaz_itemorder()
{
}

/**
 * Prepares for retrieval (Z39.50 present).
 */
function yaz_present()
{
}

/**
 * Specifies a range of records to retrieve.
 */
function yaz_range()
{
}

/**
 * Returns a record.
 */
function yaz_record()
{
}

/**
 * Returns Scan Response result.
 */
function yaz_scan_result()
{
}

/**
 * Prepares for a scan.
 */
function yaz_scan()
{
}

/**
 * Specifies schema for retrieval.
 */
function yaz_schema()
{
}

/**
 * Prepares for a search.
 */
function yaz_search()
{
}

/**
 * Sets one or more options for connection.
 */
function yaz_set_option()
{
}

/**
 * Sets sorting criteria.
 */
function yaz_sort()
{
}

/**
 * Specifies the preferred record syntax for retrieval.
 */
function yaz_syntax()
{
}

/**
 * Wait for Z39.50 requests to complete.
 */
function yaz_wait()
{
}

/**
 * Traverse the map and call a function on each entry.
 */
function yp_all()
{
}

/**
 * Return an array containing the entire map.
 */
function yp_cat()
{
}

/**
 * Returns the error string associated with the given error code.
 */
function yp_err_string()
{
}

/**
 * Returns the error code of the previous operation.
 */
function yp_errno()
{
}

/**
 * Returns the first key-value pair from the named map.
 */
function yp_first()
{
}

/**
 * Fetches the machine's default NIS domain.
 */
function yp_get_default_domain()
{
}

/**
 * Returns the machine name of the master NIS server for a map.
 */
function yp_master()
{
}

/**
 * Returns the matched line.
 */
function yp_match()
{
}

/**
 * Returns the next key-value pair in the named map.
 */
function yp_next()
{
}

/**
 * Returns the order number for a map.
 */
function yp_order()
{
}

/**
 * Add various search limits.
 */
function udm_add_search_limit()
{
}

/**
 * Allocate mnoGoSearch session.
 */
function udm_alloc_agent_array()
{
}

/**
 * Allocate mnoGoSearch session.
 */
function udm_alloc_agent()
{
}

/**
 * Get mnoGoSearch API version.
 */
function udm_api_version()
{
}

/**
 * Get all the categories on the same level with the current one.
 */
function udm_cat_list()
{
}

/**
 * Get the path to the current category.
 */
function udm_cat_path()
{
}

/**
 * Check if the given charset is known to mnogosearch.
 */
function udm_check_charset()
{
}

/**
 * Clear all mnoGoSearch search restrictions.
 */
function udm_clear_search_limits()
{
}

/**
 * Return CRC32 checksum of given string.
 */
function udm_crc32()
{
}

/**
 * Get mnoGoSearch error number.
 */
function udm_errno()
{
}

/**
 * Get mnoGoSearch error message.
 */
function udm_error()
{
}

/**
 * Perform search.
 */
function udm_find()
{
}

/**
 * Free mnoGoSearch session.
 */
function udm_free_agent()
{
}

/**
 * Free memory allocated for ispell data.
 */
function udm_free_ispell_data()
{
}

/**
 * Free mnoGoSearch result.
 */
function udm_free_res()
{
}

/**
 * Get total number of documents in database.
 */
function udm_get_doc_count()
{
}

/**
 * Fetch a result field.
 */
function udm_get_res_field()
{
}

/**
 * Get mnoGoSearch result parameters.
 */
function udm_get_res_param()
{
}

/**
 * Return Hash32 checksum of gived string.
 */
function udm_hash32()
{
}

/**
 * Load ispell data.
 */
function udm_load_ispell_data()
{
}

/**
 * Set mnoGoSearch agent session parameters.
 */
function udm_set_agent_param()
{
}

/**
 * Returns the current version of the Apache Solr extension.
 */
function solr_get_version()
{
}

/**
 * Terminate apache process after this request.
 */
function apache_child_terminate()
{
}

/**
 * Get a list of loaded Apache modules.
 */
function apache_get_modules()
{
}

/**
 * Fetch Apache version.
 */
function apache_get_version()
{
}

/**
 * Get an Apache subprocess_env variable.
 */
function apache_getenv()
{
}

/**
 * Perform a partial request for the specified URI and return all info about it.
 */
function apache_lookup_uri()
{
}

/**
 * Get and set apache request notes.
 */
function apache_note()
{
}

/**
 * Fetch all HTTP request headers.
 */
function apache_request_headers()
{
}

/**
 * Reset the Apache write timer.
 */
function apache_reset_timeout()
{
}

/**
 * Fetch all HTTP response headers.
 */
function apache_response_headers()
{
}

/**
 * Set an Apache subprocess_env variable.
 */
function apache_setenv()
{
}

/**
 * Fetch all HTTP request headers.
 */
function getallheaders()
{
}

/**
 * Perform an Apache sub-request.
 */
function virtual()
{
}

/**
 * Flushes all response data to the client.
 */
function fastcgi_finish_request()
{
}

/**
 * Creates a new virtual web server.
 */
function iis_add_server()
{
}

/**
 * Gets Directory Security.
 */
function iis_get_dir_security()
{
}

/**
 * Gets script mapping on a virtual directory for a specific extension.
 */
function iis_get_script_map()
{
}

/**
 * Return the instance number associated with the Comment.
 */
function iis_get_server_by_comment()
{
}

/**
 * Return the instance number associated with the Path.
 */
function iis_get_server_by_path()
{
}

/**
 * Gets server rights.
 */
function iis_get_server_rights()
{
}

/**
 * Returns the state for the service defined by ServiceId.
 */
function iis_get_service_state()
{
}

/**
 * Removes the virtual web server indicated by ServerInstance.
 */
function iis_remove_server()
{
}

/**
 * Creates application scope for a virtual directory.
 */
function iis_set_app_settings()
{
}

/**
 * Sets Directory Security.
 */
function iis_set_dir_security()
{
}

/**
 * Sets script mapping on a virtual directory.
 */
function iis_set_script_map()
{
}

/**
 * Sets server rights.
 */
function iis_set_server_rights()
{
}

/**
 * Starts the virtual web server.
 */
function iis_start_server()
{
}

/**
 * Starts the service defined by ServiceId.
 */
function iis_start_service()
{
}

/**
 * Stops the virtual web server.
 */
function iis_stop_server()
{
}

/**
 * Stops the service defined by ServiceId.
 */
function iis_stop_service()
{
}

/**
 * Fetch all HTTP request headers.
 */
function nsapi_request_headers()
{
}

/**
 * Fetch all HTTP response headers.
 */
function nsapi_response_headers()
{
}

/**
 * Perform an NSAPI sub-request.
 */
function nsapi_virtual()
{
}

/**
 * Connect to msession server.
 */
function msession_connect()
{
}

/**
 * Get session count.
 */
function msession_count()
{
}

/**
 * Create a session.
 */
function msession_create()
{
}

/**
 * Destroy a session.
 */
function msession_destroy()
{
}

/**
 * Close connection to msession server.
 */
function msession_disconnect()
{
}

/**
 * Find all sessions with name and value.
 */
function msession_find()
{
}

/**
 * Get array of msession variables.
 */
function msession_get_array()
{
}

/**
 * Get data session unstructured data.
 */
function msession_get_data()
{
}

/**
 * Get value from session.
 */
function msession_get()
{
}

/**
 * Increment value in session.
 */
function msession_inc()
{
}

/**
 * List all sessions.
 */
function msession_list()
{
}

/**
 * List sessions with variable.
 */
function msession_listvar()
{
}

/**
 * Lock a session.
 */
function msession_lock()
{
}

/**
 * Call an escape function within the msession personality plugin.
 */
function msession_plugin()
{
}

/**
 * Get random string.
 */
function msession_randstr()
{
}

/**
 * Set msession variables from an array.
 */
function msession_set_array()
{
}

/**
 * Set data session unstructured data.
 */
function msession_set_data()
{
}

/**
 * Set value in session.
 */
function msession_set()
{
}

/**
 * Set/get session timeout.
 */
function msession_timeout()
{
}

/**
 * Get unique id.
 */
function msession_uniq()
{
}

/**
 * Unlock a session.
 */
function msession_unlock()
{
}

/**
 * Discard session array changes and finish session.
 */
function session_abort()
{
}

/**
 * Return current cache expire.
 */
function session_cache_expire()
{
}

/**
 * Get and/or set the current cache limiter.
 */
function session_cache_limiter()
{
}

/**
 * Alias of session_write_close.
 */
function session_commit()
{
}

/**
 * Decodes session data from a session encoded string.
 */
function session_decode()
{
}

/**
 * Destroys all data registered to a session.
 */
function session_destroy()
{
}

/**
 * Encodes the current session data as a session encoded string.
 */
function session_encode()
{
}

/**
 * Get the session cookie parameters.
 */
function session_get_cookie_params()
{
}

/**
 * Get and/or set the current session id.
 */
function session_id()
{
}

/**
 * Find out whether a global variable is registered in a session.
 */
function session_is_registered()
{
}

/**
 * Get and/or set the current session module.
 */
function session_module_name()
{
}

/**
 * Get and/or set the current session name.
 */
function session_name()
{
}

/**
 * Update the current session id with a newly generated one.
 */
function session_regenerate_id()
{
}

/**
 * Session shutdown function.
 */
function session_register_shutdown()
{
}

/**
 * Register one or more global variables with the current session.
 */
function session_register()
{
}

/**
 * Re-initialize session array with original values.
 */
function session_reset()
{
}

/**
 * Get and/or set the current session save path.
 */
function session_save_path()
{
}

/**
 * Set the session cookie parameters.
 */
function session_set_cookie_params()
{
}

/**
 * Sets user-level session storage functions.
 */
function session_set_save_handler()
{
}

/**
 * Start new or resume existing session.
 */
function session_start()
{
}

/**
 * Returns the current session status.
 */
function session_status()
{
}

/**
 * Unregister a global variable from the current session.
 */
function session_unregister()
{
}

/**
 * Free all session variables.
 */
function session_unset()
{
}

/**
 * Write session data and end session.
 */
function session_write_close()
{
}

/**
 * Increments error counts and sets last error message.
 */
function session_pgsql_add_error()
{
}

/**
 * Returns number of errors and last error message.
 */
function session_pgsql_get_error()
{
}

/**
 * Get custom field value.
 */
function session_pgsql_get_field()
{
}

/**
 * Reset connection to session database servers.
 */
function session_pgsql_reset()
{
}

/**
 * Set custom field value.
 */
function session_pgsql_set_field()
{
}

/**
 * Get current save handler status.
 */
function session_pgsql_status()
{
}

/**
 * Adds a bbcode element.
 */
function bbcode_add_element()
{
}

/**
 * Adds a smiley to the parser.
 */
function bbcode_add_smiley()
{
}

/**
 * Create a BBCode Resource.
 */
function bbcode_create()
{
}

/**
 * Close BBCode_container resource.
 */
function bbcode_destroy()
{
}

/**
 * Parse a string following a given rule set.
 */
function bbcode_parse()
{
}

/**
 * Attach another parser in order to use another rule set for argument parsing.
 */
function bbcode_set_arg_parser()
{
}

/**
 * Set or alter parser options.
 */
function bbcode_set_flags()
{
}

/**
 * Perform a regular expression search and replace.
 */
function preg_filter()
{
}

/**
 * Return array entries that match the pattern.
 */
function preg_grep()
{
}

/**
 * Returns the error code of the last PCRE regex execution.
 */
function preg_last_error()
{
}

/**
 * Perform a global regular expression match.
 */
function preg_match_all()
{
}

/**
 * Perform a regular expression match.
 */
function preg_match()
{
}

/**
 * Quote regular expression characters.
 */
function preg_quote()
{
}

/**
 * Perform a regular expression search and replace using a callback.
 */
function preg_replace_callback()
{
}

/**
 * Perform a regular expression search and replace.
 */
function preg_replace()
{
}

/**
 * Split string by a regular expression.
 */
function preg_split()
{
}

/**
 * Replace regular expression.
 */
function ereg_replace()
{
}

/**
 * Regular expression match.
 */
function ereg()
{
}

/**
 * Replace regular expression case insensitive.
 */
function eregi_replace()
{
}

/**
 * Case insensitive regular expression match.
 */
function eregi()
{
}

/**
 * Split string into array by regular expression.
 */
function split()
{
}

/**
 * Split string into array by regular expression case insensitive.
 */
function spliti()
{
}

/**
 * Make regular expression for case insensitive match.
 */
function sql_regcase()
{
}

/**
 * Calculates the match score between two fuzzy hash signatures.
 */
function ssdeep_fuzzy_compare()
{
}

/**
 * Create a fuzzy hash from a file.
 */
function ssdeep_fuzzy_hash_filename()
{
}

/**
 * Create a fuzzy hash from a string.
 */
function ssdeep_fuzzy_hash()
{
}

/**
 * Quote string with slashes in a C style.
 */
function addcslashes()
{
}

/**
 * Quote string with slashes.
 */
function addslashes()
{
}

/**
 * Convert binary data into hexadecimal representation.
 */
function bin2hex()
{
}

/**
 * Alias of rtrim.
 */
function chop()
{
}

/**
 * Return a specific character.
 */
function chr()
{
}

/**
 * Split a string into smaller chunks.
 */
function chunk_split()
{
}

/**
 * Convert from one Cyrillic character set to another.
 */
function convert_cyr_string()
{
}

/**
 * Decode a uuencoded string.
 */
function convert_uudecode()
{
}

/**
 * Uuencode a string.
 */
function convert_uuencode()
{
}

/**
 * Return information about characters used in a string.
 */
function count_chars()
{
}

/**
 * Calculates the crc32 polynomial of a string.
 */
function crc32()
{
}

/**
 * One-way string hashing.
 */
function crypt()
{
}

/**
 * Output one or more strings.
 */
function echo()
{
}

/**
 * Split a string by string.
 */
function explode()
{
}

/**
 * Write a formatted string to a stream.
 */
function fprintf()
{
}

/**
 * Returns the translation table used by htmlspecialchars and htmlentities.
 */
function get_html_translation_table()
{
}

/**
 * Convert logical Hebrew text to visual text.
 */
function hebrev()
{
}

/**
 * Convert logical Hebrew text to visual text with newline conversion.
 */
function hebrevc()
{
}

/**
 * Decodes a hexadecimally encoded binary string.
 */
function hex2bin()
{
}

/**
 * Convert all HTML entities to their applicable characters.
 */
function html_entity_decode()
{
}

/**
 * Convert all applicable characters to HTML entities.
 */
function htmlentities()
{
}

/**
 * Convert special HTML entities back to characters.
 */
function htmlspecialchars_decode()
{
}

/**
 * Convert special characters to HTML entities.
 */
function htmlspecialchars()
{
}

/**
 * Join array elements with a string.
 */
function implode()
{
}

/**
 * Alias of implode.
 */
function join()
{
}

/**
 * Make a string's first character lowercase.
 */
function lcfirst()
{
}

/**
 * Calculate Levenshtein distance between two strings.
 */
function levenshtein()
{
}

/**
 * Get numeric formatting information.
 */
function localeconv()
{
}

/**
 * Strip whitespace (or other characters) from the beginning of a string.
 */
function ltrim()
{
}

/**
 * Calculates the md5 hash of a given file.
 */
function md5_file()
{
}

/**
 * Calculate the md5 hash of a string.
 */
function md5()
{
}

/**
 * Calculate the metaphone key of a string.
 */
function metaphone()
{
}

/**
 * Formats a number as a currency string.
 */
function money_format()
{
}

/**
 * Query language and locale information.
 */
function nl_langinfo()
{
}

/**
 * Inserts HTML line breaks before all newlines in a string.
 */
function nl2br()
{
}

/**
 * Format a number with grouped thousands.
 */
function number_format()
{
}

/**
 * Return ASCII value of character.
 */
function ord()
{
}

/**
 * Parses the string into variables.
 */
function parse_str()
{
}

/**
 * Output a string.
 */
function print()
{
}

/**
 * Output a formatted string.
 */
function printf()
{
}

/**
 * Convert a quoted-printable string to an 8 bit string.
 */
function quoted_printable_decode()
{
}

/**
 * Convert a 8 bit string to a quoted-printable string.
 */
function quoted_printable_encode()
{
}

/**
 * Quote meta characters.
 */
function quotemeta()
{
}

/**
 * Strip whitespace (or other characters) from the end of a string.
 */
function rtrim()
{
}

/**
 * Set locale information.
 */
function setlocale()
{
}

/**
 * Calculate the sha1 hash of a file.
 */
function sha1_file()
{
}

/**
 * Calculate the sha1 hash of a string.
 */
function sha1()
{
}

/**
 * Calculate the similarity between two strings.
 */
function similar_text()
{
}

/**
 * Calculate the soundex key of a string.
 */
function soundex()
{
}

/**
 * Return a formatted string.
 */
function sprintf()
{
}

/**
 * Parses input from a string according to a format.
 */
function sscanf()
{
}

/**
 * Parse a CSV string into an array.
 */
function str_getcsv()
{
}

/**
 * Case-insensitive version of str_replace..
 */
function str_ireplace()
{
}

/**
 * Pad a string to a certain length with another string.
 */
function str_pad()
{
}

/**
 * Repeat a string.
 */
function str_repeat()
{
}

/**
 * Replace all occurrences of the search string with the replacement string.
 */
function str_replace()
{
}

/**
 * Perform the rot13 transform on a string.
 */
function str_rot13()
{
}

/**
 * Randomly shuffles a string.
 */
function str_shuffle()
{
}

/**
 * Convert a string to an array.
 */
function str_split()
{
}

/**
 * Return information about words used in a string.
 */
function str_word_count()
{
}

/**
 * Binary safe case-insensitive string comparison.
 */
function strcasecmp()
{
}

/**
 * Alias of strstr.
 */
function strchr()
{
}

/**
 * Binary safe string comparison.
 */
function strcmp()
{
}

/**
 * Locale based string comparison.
 */
function strcoll()
{
}

/**
 * Find length of initial segment not matching mask.
 */
function strcspn()
{
}

/**
 * Strip HTML and PHP tags from a string.
 */
function strip_tags()
{
}

/**
 * Un-quote string quoted with addcslashes.
 */
function stripcslashes()
{
}

/**
 * Find the position of the first occurrence of a case-insensitive substring in a string.
 */
function stripos()
{
}

/**
 * Un-quotes a quoted string.
 */
function stripslashes()
{
}

/**
 * Case-insensitive strstr.
 */
function stristr()
{
}

/**
 * Get string length.
 */
function strlen()
{
}

/**
 * Case insensitive string comparisons using a "natural order" algorithm.
 */
function strnatcasecmp()
{
}

/**
 * String comparisons using a "natural order" algorithm.
 */
function strnatcmp()
{
}

/**
 * Binary safe case-insensitive string comparison of the first n characters.
 */
function strncasecmp()
{
}

/**
 * Binary safe string comparison of the first n characters.
 */
function strncmp()
{
}

/**
 * Search a string for any of a set of characters.
 */
function strpbrk()
{
}

/**
 * Find the position of the first occurrence of a substring in a string.
 */
function strpos()
{
}

/**
 * Find the last occurrence of a character in a string.
 */
function strrchr()
{
}

/**
 * Reverse a string.
 */
function strrev()
{
}

/**
 * Find the position of the last occurrence of a case-insensitive substring in a string.
 */
function strripos()
{
}

/**
 * Find the position of the last occurrence of a substring in a string.
 */
function strrpos()
{
}

/**
 * Finds the length of the initial segment of a string consisting   entirely of characters contained within a given mask..
 */
function strspn()
{
}

/**
 * Find the first occurrence of a string.
 */
function strstr()
{
}

/**
 * Tokenize string.
 */
function strtok()
{
}

/**
 * Make a string lowercase.
 */
function strtolower()
{
}

/**
 * Make a string uppercase.
 */
function strtoupper()
{
}

/**
 * Translate characters or replace substrings.
 */
function strtr()
{
}

/**
 * Binary safe comparison of two strings from an offset, up to length characters.
 */
function substr_compare()
{
}

/**
 * Count the number of substring occurrences.
 */
function substr_count()
{
}

/**
 * Replace text within a portion of a string.
 */
function substr_replace()
{
}

/**
 * Return part of a string.
 */
function substr()
{
}

/**
 * Strip whitespace (or other characters) from the beginning and end of a string.
 */
function trim()
{
}

/**
 * Make a string's first character uppercase.
 */
function ucfirst()
{
}

/**
 * Uppercase the first character of each word in a string.
 */
function ucwords()
{
}

/**
 * Write a formatted string to a stream.
 */
function vfprintf()
{
}

/**
 * Output a formatted string.
 */
function vprintf()
{
}

/**
 * Return a formatted string.
 */
function vsprintf()
{
}

/**
 * Wraps a string to a given number of characters.
 */
function wordwrap()
{
}

/**
 * Changes the case of all keys in an array.
 */
function array_change_key_case()
{
}

/**
 * Split an array into chunks.
 */
function array_chunk()
{
}

/**
 * Return the values from a single column in the input array.
 */
function array_column()
{
}

/**
 * Creates an array by using one array for keys and another for its values.
 */
function array_combine()
{
}

/**
 * Counts all the values of an array.
 */
function array_count_values()
{
}

/**
 * Computes the difference of arrays with additional index check.
 */
function array_diff_assoc()
{
}

/**
 * Computes the difference of arrays using keys for comparison.
 */
function array_diff_key()
{
}

/**
 * Computes the difference of arrays with additional index check which is performed by a user supplied callback function.
 */
function array_diff_uassoc()
{
}

/**
 * Computes the difference of arrays using a callback function on the keys for comparison.
 */
function array_diff_ukey()
{
}

/**
 * Computes the difference of arrays.
 */
function array_diff()
{
}

/**
 * Fill an array with values, specifying keys.
 */
function array_fill_keys()
{
}

/**
 * Fill an array with values.
 */
function array_fill()
{
}

/**
 * Filters elements of an array using a callback function.
 */
function array_filter()
{
}

/**
 * Exchanges all keys with their associated values in an array.
 */
function array_flip()
{
}

/**
 * Computes the intersection of arrays with additional index check.
 */
function array_intersect_assoc()
{
}

/**
 * Computes the intersection of arrays using keys for comparison.
 */
function array_intersect_key()
{
}

/**
 * Computes the intersection of arrays with additional index check, compares indexes by a callback function.
 */
function array_intersect_uassoc()
{
}

/**
 * Computes the intersection of arrays using a callback function on the keys for comparison.
 */
function array_intersect_ukey()
{
}

/**
 * Computes the intersection of arrays.
 */
function array_intersect()
{
}

/**
 * Checks if the given key or index exists in the array.
 */
function array_key_exists()
{
}

/**
 * Return all the keys or a subset of the keys of an array.
 */
function array_keys()
{
}

/**
 * Applies the callback to the elements of the given arrays.
 */
function array_map()
{
}

/**
 * Merge two or more arrays recursively.
 */
function array_merge_recursive()
{
}

/**
 * Merge one or more arrays.
 */
function array_merge()
{
}

/**
 * Sort multiple or multi-dimensional arrays.
 */
function array_multisort()
{
}

/**
 * Pad array to the specified length with a value.
 */
function array_pad()
{
}

/**
 * Pop the element off the end of array.
 */
function array_pop()
{
}

/**
 * Calculate the product of values in an array.
 */
function array_product()
{
}

/**
 * Push one or more elements onto the end of array.
 */
function array_push()
{
}

/**
 * Pick one or more random entries out of an array.
 */
function array_rand()
{
}

/**
 * Iteratively reduce the array to a single value using a callback function.
 */
function array_reduce()
{
}

/**
 * Replaces elements from passed arrays into the first array recursively.
 */
function array_replace_recursive()
{
}

/**
 * Replaces elements from passed arrays into the first array.
 */
function array_replace()
{
}

/**
 * Return an array with elements in reverse order.
 */
function array_reverse()
{
}

/**
 * Searches the array for a given value and returns the corresponding key if successful.
 */
function array_search()
{
}

/**
 * Shift an element off the beginning of array.
 */
function array_shift()
{
}

/**
 * Extract a slice of the array.
 */
function array_slice()
{
}

/**
 * Remove a portion of the array and replace it with something else.
 */
function array_splice()
{
}

/**
 * Calculate the sum of values in an array.
 */
function array_sum()
{
}

/**
 * Computes the difference of arrays with additional index check, compares data by a callback function.
 */
function array_udiff_assoc()
{
}

/**
 * Computes the difference of arrays with additional index check, compares data and indexes by a callback function.
 */
function array_udiff_uassoc()
{
}

/**
 * Computes the difference of arrays by using a callback function for data comparison.
 */
function array_udiff()
{
}

/**
 * Computes the intersection of arrays with additional index check, compares data by a callback function.
 */
function array_uintersect_assoc()
{
}

/**
 * Computes the intersection of arrays with additional index check, compares data and indexes by a callback functions.
 */
function array_uintersect_uassoc()
{
}

/**
 * Computes the intersection of arrays, compares data by a callback function.
 */
function array_uintersect()
{
}

/**
 * Removes duplicate values from an array.
 */
function array_unique()
{
}

/**
 * Prepend one or more elements to the beginning of an array.
 */
function array_unshift()
{
}

/**
 * Return all the values of an array.
 */
function array_values()
{
}

/**
 * Apply a user function recursively to every member of an array.
 */
function array_walk_recursive()
{
}

/**
 * Apply a user supplied function to every member of an array.
 */
function array_walk()
{
}

/**
 * Create an array.
 */
function array()
{
}

/**
 * Sort an array in reverse order and maintain index association.
 */
function arsort()
{
}

/**
 * Sort an array and maintain index association.
 */
function asort()
{
}

/**
 * Create array containing variables and their values.
 */
function compact()
{
}

/**
 * Count all elements in an array, or something in an object.
 */
function count()
{
}

/**
 * Return the current element in an array.
 */
function current()
{
}

/**
 * Return the current key and value pair from an array and advance the array cursor.
 */
function each()
{
}

/**
 * Set the internal pointer of an array to its last element.
 */
function end()
{
}

/**
 * Import variables into the current symbol table from an array.
 */
function extract()
{
}

/**
 * Checks if a value exists in an array.
 */
function in_array()
{
}

/**
 * Alias of array_key_exists.
 */
function key_exists()
{
}

/**
 * Fetch a key from an array.
 */
function key()
{
}

/**
 * Sort an array by key in reverse order.
 */
function krsort()
{
}

/**
 * Sort an array by key.
 */
function ksort()
{
}

/**
 * Assign variables as if they were an array.
 */
function list()
{
}

/**
 * Sort an array using a case insensitive "natural order" algorithm.
 */
function natcasesort()
{
}

/**
 * Sort an array using a "natural order" algorithm.
 */
function natsort()
{
}

/**
 * Advance the internal array pointer of an array.
 */
function next()
{
}

/**
 * Alias of current.
 */
function pos()
{
}

/**
 * Rewind the internal array pointer.
 */
function prev()
{
}

/**
 * Create an array containing a range of elements.
 */
function range()
{
}

/**
 * Set the internal pointer of an array to its first element.
 */
function reset()
{
}

/**
 * Sort an array in reverse order.
 */
function rsort()
{
}

/**
 * Shuffle an array.
 */
function shuffle()
{
}

/**
 * Alias of count.
 */
function sizeof()
{
}

/**
 * Sort an array.
 */
function sort()
{
}

/**
 * Sort an array with a user-defined comparison function and maintain index association.
 */
function uasort()
{
}

/**
 * Sort an array by keys using a user-defined comparison function.
 */
function uksort()
{
}

/**
 * Sort an array by values using a user-defined comparison function.
 */
function usort()
{
}

/**
 * Attempt to load undefined class.
 */
function __autoload()
{
}

/**
 * Call a user method given with an array of parameters [deprecated].
 */
function call_user_method_array()
{
}

/**
 * Call a user method on an specific object [deprecated].
 */
function call_user_method()
{
}

/**
 * Creates an alias for a class.
 */
function class_alias()
{
}

/**
 * Checks if the class has been defined.
 */
function class_exists()
{
}

/**
 * the "Late Static Binding" class name.
 */
function get_called_class()
{
}

/**
 * Gets the class methods' names.
 */
function get_class_methods()
{
}

/**
 * Get the default properties of the class.
 */
function get_class_vars()
{
}

/**
 * Returns the name of the class of an object.
 */
function get_class()
{
}

/**
 * Returns an array with the name of the defined classes.
 */
function get_declared_classes()
{
}

/**
 * Returns an array of all declared interfaces.
 */
function get_declared_interfaces()
{
}

/**
 * Returns an array of all declared traits.
 */
function get_declared_traits()
{
}

/**
 * Gets the properties of the given object.
 */
function get_object_vars()
{
}

/**
 * Retrieves the parent class name for object or class.
 */
function get_parent_class()
{
}

/**
 * Checks if the interface has been defined.
 */
function interface_exists()
{
}

/**
 * Checks if the object is of this class or has this class as one of its parents.
 */
function is_a()
{
}

/**
 * Checks if the object has this class as one of its parents.
 */
function is_subclass_of()
{
}

/**
 * Checks if the class method exists.
 */
function method_exists()
{
}

/**
 * Checks if the object or class has a property.
 */
function property_exists()
{
}

/**
 * Checks if the trait exists.
 */
function trait_exists()
{
}

/**
 * Import new class method definitions from a file.
 */
function classkit_import()
{
}

/**
 * Dynamically adds a new method to a given class.
 */
function classkit_method_add()
{
}

/**
 * Copies a method from class to another.
 */
function classkit_method_copy()
{
}

/**
 * Dynamically changes the code of the given method.
 */
function classkit_method_redefine()
{
}

/**
 * Dynamically removes the given method.
 */
function classkit_method_remove()
{
}

/**
 * Dynamically changes the name of the given method.
 */
function classkit_method_rename()
{
}

/**
 * Check for alphanumeric character(s).
 */
function ctype_alnum()
{
}

/**
 * Check for alphabetic character(s).
 */
function ctype_alpha()
{
}

/**
 * Check for control character(s).
 */
function ctype_cntrl()
{
}

/**
 * Check for numeric character(s).
 */
function ctype_digit()
{
}

/**
 * Check for any printable character(s) except space.
 */
function ctype_graph()
{
}

/**
 * Check for lowercase character(s).
 */
function ctype_lower()
{
}

/**
 * Check for printable character(s).
 */
function ctype_print()
{
}

/**
 * Check for any printable character which is not whitespace or an   alphanumeric character.
 */
function ctype_punct()
{
}

/**
 * Check for whitespace character(s).
 */
function ctype_space()
{
}

/**
 * Check for uppercase character(s).
 */
function ctype_upper()
{
}

/**
 * Check for character(s) representing a hexadecimal digit.
 */
function ctype_xdigit()
{
}

/**
 * Checks if variable of specified type exists.
 */
function filter_has_var()
{
}

/**
 * Returns the filter ID belonging to a named filter.
 */
function filter_id()
{
}

/**
 * Gets external variables and optionally filters them.
 */
function filter_input_array()
{
}

/**
 * Gets a specific external variable by name and optionally filters it.
 */
function filter_input()
{
}

/**
 * Returns a list of all supported filters.
 */
function filter_list()
{
}

/**
 * Gets multiple variables and optionally filters them.
 */
function filter_var_array()
{
}

/**
 * Filters a variable with a specified filter.
 */
function filter_var()
{
}

/**
 * Call a callback with an array of parameters.
 */
function call_user_func_array()
{
}

/**
 * Call the callback given by the first parameter.
 */
function call_user_func()
{
}

/**
 * Create an anonymous (lambda-style) function.
 */
function create_function()
{
}

/**
 * Call a static method and pass the arguments as array.
 */
function forward_static_call_array()
{
}

/**
 * Call a static method.
 */
function forward_static_call()
{
}

/**
 * Return an item from the argument list.
 */
function func_get_arg()
{
}

/**
 * Returns an array comprising a function's argument list.
 */
function func_get_args()
{
}

/**
 * Returns the number of arguments passed to the function.
 */
function func_num_args()
{
}

/**
 * Return TRUE if the given function has been defined.
 */
function function_exists()
{
}

/**
 * Returns an array of all defined functions.
 */
function get_defined_functions()
{
}

/**
 * Register a function for execution on shutdown.
 */
function register_shutdown_function()
{
}

/**
 * Register a function for execution on each tick.
 */
function register_tick_function()
{
}

/**
 * De-register a function for execution on each tick.
 */
function unregister_tick_function()
{
}

/**
 * Get the boolean value of a variable.
 */
function boolval()
{
}

/**
 * Dumps a string representation of an internal zend value to output.
 */
function debug_zval_dump()
{
}

/**
 * Alias of floatval.
 */
function doubleval()
{
}

/**
 * Determine whether a variable is empty.
 */
function empty()
{
}

/**
 * Get float value of a variable.
 */
function floatval()
{
}

/**
 * Returns an array of all defined variables.
 */
function get_defined_vars()
{
}

/**
 * Returns the resource type.
 */
function get_resource_type()
{
}

/**
 * Get the type of a variable.
 */
function gettype()
{
}

/**
 * Import GET/POST/Cookie variables into the global scope.
 */
function import_request_variables()
{
}

/**
 * Get the integer value of a variable.
 */
function intval()
{
}

/**
 * Finds whether a variable is an array.
 */
function is_array()
{
}

/**
 * Finds out whether a variable is a boolean.
 */
function is_bool()
{
}

/**
 * Verify that the contents of a variable can be called as a function.
 */
function is_callable()
{
}

/**
 * Alias of is_float.
 */
function is_double()
{
}

/**
 * Finds whether the type of a variable is float.
 */
function is_float()
{
}

/**
 * Find whether the type of a variable is integer.
 */
function is_int()
{
}

/**
 * Alias of is_int.
 */
function is_integer()
{
}

/**
 * Alias of is_int.
 */
function is_long()
{
}

/**
 * Finds whether a variable is NULL.
 */
function is_null()
{
}

/**
 * Finds whether a variable is a number or a numeric string.
 */
function is_numeric()
{
}

/**
 * Finds whether a variable is an object.
 */
function is_object()
{
}

/**
 * Alias of is_float.
 */
function is_real()
{
}

/**
 * Finds whether a variable is a resource.
 */
function is_resource()
{
}

/**
 * Finds whether a variable is a scalar.
 */
function is_scalar()
{
}

/**
 * Find whether the type of a variable is string.
 */
function is_string()
{
}

/**
 * Determine if a variable is set and is not NULL.
 */
function isset()
{
}

/**
 * Prints human-readable information about a variable.
 */
function print_r()
{
}

/**
 * Generates a storable representation of a value.
 */
function serialize()
{
}

/**
 * Set the type of a variable.
 */
function settype()
{
}

/**
 * Get string value of a variable.
 */
function strval()
{
}

/**
 * Creates a PHP value from a stored representation.
 */
function unserialize()
{
}

/**
 * Unset a given variable.
 */
function unset()
{
}

/**
 * Dumps information about a variable.
 */
function var_dump()
{
}

/**
 * Outputs or returns a parsable string representation of a variable.
 */
function var_export()
{
}

/**
 * Generate a Signature Base String.
 */
function oauth_get_sbs()
{
}

/**
 * Encode a URI to RFC 3986.
 */
function oauth_urlencode()
{
}

/**
 * Checks if a SOAP call has failed.
 */
function is_soap_fault()
{
}

/**
 * Set whether to use the SOAP error handler.
 */
function use_soap_error_handler()
{
}

/**
 * Decodes XML into native PHP types.
 */
function xmlrpc_decode_request()
{
}

/**
 * Decodes XML into native PHP types.
 */
function xmlrpc_decode()
{
}

/**
 * Generates XML for a method request.
 */
function xmlrpc_encode_request()
{
}

/**
 * Generates XML for a PHP value.
 */
function xmlrpc_encode()
{
}

/**
 * Gets xmlrpc type for a PHP value.
 */
function xmlrpc_get_type()
{
}

/**
 * Determines if an array value represents an XMLRPC fault.
 */
function xmlrpc_is_fault()
{
}

/**
 * Decodes XML into a list of method descriptions.
 */
function xmlrpc_parse_method_descriptions()
{
}

/**
 * Adds introspection documentation.
 */
function xmlrpc_server_add_introspection_data()
{
}

/**
 * Parses XML requests and call methods.
 */
function xmlrpc_server_call_method()
{
}

/**
 * Creates an xmlrpc server.
 */
function xmlrpc_server_create()
{
}

/**
 * Destroys server resources.
 */
function xmlrpc_server_destroy()
{
}

/**
 * Register a PHP function to generate documentation.
 */
function xmlrpc_server_register_introspection_callback()
{
}

/**
 * Register a PHP function to resource method matching method_name.
 */
function xmlrpc_server_register_method()
{
}

/**
 * Sets xmlrpc type, base64 or datetime, for a PHP string value.
 */
function xmlrpc_set_type()
{
}

/**
 * Generate a globally unique identifier (GUID).
 */
function com_create_guid()
{
}

/**
 * Connect events from a COM object to a PHP object.
 */
function com_event_sink()
{
}

/**
 * Returns a handle to an already running instance of a COM object.
 */
function com_get_active_object()
{
}

/**
 * Loads a Typelib.
 */
function com_load_typelib()
{
}

/**
 * Process COM messages, sleeping for up to timeoutms milliseconds.
 */
function com_message_pump()
{
}

/**
 * Print out a PHP class definition for a dispatchable interface.
 */
function com_print_typeinfo()
{
}

/**
 * Returns the absolute value of a variant.
 */
function variant_abs()
{
}

/**
 * "Adds" two variant values together and returns the result.
 */
function variant_add()
{
}

/**
 * Performs a bitwise AND operation between two variants.
 */
function variant_and()
{
}

/**
 * Convert a variant into a new variant object of another type.
 */
function variant_cast()
{
}

/**
 * concatenates two variant values together and returns the result.
 */
function variant_cat()
{
}

/**
 * Compares two variants.
 */
function variant_cmp()
{
}

/**
 * Returns a variant date representation of a Unix timestamp.
 */
function variant_date_from_timestamp()
{
}

/**
 * Converts a variant date/time value to Unix timestamp.
 */
function variant_date_to_timestamp()
{
}

/**
 * Returns the result from dividing two variants.
 */
function variant_div()
{
}

/**
 * Performs a bitwise equivalence on two variants.
 */
function variant_eqv()
{
}

/**
 * Returns the integer portion of a variant.
 */
function variant_fix()
{
}

/**
 * Returns the type of a variant object.
 */
function variant_get_type()
{
}

/**
 * Converts variants to integers and then returns the result from dividing them.
 */
function variant_idiv()
{
}

/**
 * Performs a bitwise implication on two variants.
 */
function variant_imp()
{
}

/**
 * Returns the integer portion of a variant.
 */
function variant_int()
{
}

/**
 * Divides two variants and returns only the remainder.
 */
function variant_mod()
{
}

/**
 * Multiplies the values of the two variants.
 */
function variant_mul()
{
}

/**
 * Performs logical negation on a variant.
 */
function variant_neg()
{
}

/**
 * Performs bitwise not negation on a variant.
 */
function variant_not()
{
}

/**
 * Performs a logical disjunction on two variants.
 */
function variant_or()
{
}

/**
 * Returns the result of performing the power function with two variants.
 */
function variant_pow()
{
}

/**
 * Rounds a variant to the specified number of decimal places.
 */
function variant_round()
{
}

/**
 * Convert a variant into another type "in-place".
 */
function variant_set_type()
{
}

/**
 * Assigns a new value for a variant object.
 */
function variant_set()
{
}

/**
 * Subtracts the value of the right variant from the left variant value.
 */
function variant_sub()
{
}

/**
 * Performs a logical exclusion on two variants.
 */
function variant_xor()
{
}

/**
 * List running processes.
 */
function win32_ps_list_procs()
{
}

/**
 * Stat memory utilization.
 */
function win32_ps_stat_mem()
{
}

/**
 * Stat process.
 */
function win32_ps_stat_proc()
{
}

/**
 * Resumes a paused service.
 */
function win32_continue_service()
{
}

/**
 * Creates a new service entry in the SCM database.
 */
function win32_create_service()
{
}

/**
 * Deletes a service entry from the SCM database.
 */
function win32_delete_service()
{
}

/**
 * Returns the last control message that was sent to this service.
 */
function win32_get_last_control_message()
{
}

/**
 * Pauses a service.
 */
function win32_pause_service()
{
}

/**
 * Queries the status of a service.
 */
function win32_query_service_status()
{
}

/**
 * Update the service status.
 */
function win32_set_service_status()
{
}

/**
 * Registers the script with the SCM, so that it can act as the service with the given name.
 */
function win32_start_service_ctrl_dispatcher()
{
}

/**
 * Starts a service.
 */
function win32_start_service()
{
}

/**
 * Stops a service.
 */
function win32_stop_service()
{
}

/**
 * Gets a DOMElement object from a   SimpleXMLElement object.
 */
function dom_import_simplexml()
{
}

/**
 * Clear libxml error buffer.
 */
function libxml_clear_errors()
{
}

/**
 * Disable the ability to load external entities.
 */
function libxml_disable_entity_loader()
{
}

/**
 * Retrieve array of errors.
 */
function libxml_get_errors()
{
}

/**
 * Retrieve last error from libxml.
 */
function libxml_get_last_error()
{
}

/**
 * Changes the default external entity loader.
 */
function libxml_set_external_entity_loader()
{
}

/**
 * Set the streams context for the next libxml document load or write.
 */
function libxml_set_streams_context()
{
}

/**
 * Disable libxml errors and allow user to fetch error information as needed.
 */
function libxml_use_internal_errors()
{
}

/**
 * Get a SimpleXMLElement object from a DOM node..
 */
function simplexml_import_dom()
{
}

/**
 * Interprets an XML file into an object.
 */
function simplexml_load_file()
{
}

/**
 * Interprets a string of XML into an object.
 */
function simplexml_load_string()
{
}

/**
 * Add variables to a WDDX packet with the specified ID.
 */
function wddx_add_vars()
{
}

/**
 * Unserializes a WDDX packet.
 */
function wddx_deserialize()
{
}

/**
 * Ends a WDDX packet with the specified ID.
 */
function wddx_packet_end()
{
}

/**
 * Starts a new WDDX packet with structure inside it.
 */
function wddx_packet_start()
{
}

/**
 * Serialize a single value into a WDDX packet.
 */
function wddx_serialize_value()
{
}

/**
 * Serialize variables into a WDDX packet.
 */
function wddx_serialize_vars()
{
}

/**
 * Converts a string with ISO-8859-1 characters encoded with UTF-8   to single-byte ISO-8859-1.
 */
function utf8_decode()
{
}

/**
 * Encodes an ISO-8859-1 string to UTF-8.
 */
function utf8_encode()
{
}

/**
 * Get XML parser error string.
 */
function xml_error_string()
{
}

/**
 * Get current byte index for an XML parser.
 */
function xml_get_current_byte_index()
{
}

/**
 * Get current column number for an XML parser.
 */
function xml_get_current_column_number()
{
}

/**
 * Get current line number for an XML parser.
 */
function xml_get_current_line_number()
{
}

/**
 * Get XML parser error code.
 */
function xml_get_error_code()
{
}

/**
 * Parse XML data into an array structure.
 */
function xml_parse_into_struct()
{
}

/**
 * Start parsing an XML document.
 */
function xml_parse()
{
}

/**
 * Create an XML parser with namespace support.
 */
function xml_parser_create_ns()
{
}

/**
 * Create an XML parser.
 */
function xml_parser_create()
{
}

/**
 * Free an XML parser.
 */
function xml_parser_free()
{
}

/**
 * Get options from an XML parser.
 */
function xml_parser_get_option()
{
}

/**
 * Set options in an XML parser.
 */
function xml_parser_set_option()
{
}

/**
 * Set up character data handler.
 */
function xml_set_character_data_handler()
{
}

/**
 * Set up default handler.
 */
function xml_set_default_handler()
{
}

/**
 * Set up start and end element handlers.
 */
function xml_set_element_handler()
{
}

/**
 * Set up end namespace declaration handler.
 */
function xml_set_end_namespace_decl_handler()
{
}

/**
 * Set up external entity reference handler.
 */
function xml_set_external_entity_ref_handler()
{
}

/**
 * Set up notation declaration handler.
 */
function xml_set_notation_decl_handler()
{
}

/**
 * Use XML Parser within an object.
 */
function xml_set_object()
{
}

/**
 * Set up processing instruction (PI) handler.
 */
function xml_set_processing_instruction_handler()
{
}

/**
 * Set up start namespace declaration handler.
 */
function xml_set_start_namespace_decl_handler()
{
}

/**
 * Set up unparsed entity declaration handler.
 */
function xml_set_unparsed_entity_decl_handler()
{
}

/**
 * End attribute.
 */
function xmlwriter_end_attribute()
{
}

/**
 * End current CDATA.
 */
function xmlwriter_end_cdata()
{
}

/**
 * Create end comment.
 */
function xmlwriter_end_comment()
{
}

/**
 * End current document.
 */
function xmlwriter_end_document()
{
}

/**
 * End current DTD AttList.
 */
function xmlwriter_end_dtd_attlist()
{
}

/**
 * End current DTD element.
 */
function xmlwriter_end_dtd_element()
{
}

/**
 * End current DTD Entity.
 */
function xmlwriter_end_dtd_entity()
{
}

/**
 * End current DTD.
 */
function xmlwriter_end_dtd()
{
}

/**
 * End current element.
 */
function xmlwriter_end_element()
{
}

/**
 * End current PI.
 */
function xmlwriter_end_pi()
{
}

/**
 * Flush current buffer.
 */
function xmlwriter_flush()
{
}

/**
 * End current element.
 */
function xmlwriter_full_end_element()
{
}

/**
 * Create new xmlwriter using memory for string output.
 */
function xmlwriter_open_memory()
{
}

/**
 * Create new xmlwriter using source uri for output.
 */
function xmlwriter_open_uri()
{
}

/**
 * Returns current buffer.
 */
function xmlwriter_output_memory()
{
}

/**
 * Set string used for indenting.
 */
function xmlwriter_set_indent_string()
{
}

/**
 * Toggle indentation on/off.
 */
function xmlwriter_set_indent()
{
}

/**
 * Create start namespaced attribute.
 */
function xmlwriter_start_attribute_ns()
{
}

/**
 * Create start attribute.
 */
function xmlwriter_start_attribute()
{
}

/**
 * Create start CDATA tag.
 */
function xmlwriter_start_cdata()
{
}

/**
 * Create start comment.
 */
function xmlwriter_start_comment()
{
}

/**
 * Create document tag.
 */
function xmlwriter_start_document()
{
}

/**
 * Create start DTD AttList.
 */
function xmlwriter_start_dtd_attlist()
{
}

/**
 * Create start DTD element.
 */
function xmlwriter_start_dtd_element()
{
}

/**
 * Create start DTD Entity.
 */
function xmlwriter_start_dtd_entity()
{
}

/**
 * Create start DTD tag.
 */
function xmlwriter_start_dtd()
{
}

/**
 * Create start namespaced element tag.
 */
function xmlwriter_start_element_ns()
{
}

/**
 * Create start element tag.
 */
function xmlwriter_start_element()
{
}

/**
 * Create start PI tag.
 */
function xmlwriter_start_pi()
{
}

/**
 * Write text.
 */
function xmlwriter_text()
{
}

/**
 * Write full namespaced attribute.
 */
function xmlwriter_write_attribute_ns()
{
}

/**
 * Write full attribute.
 */
function xmlwriter_write_attribute()
{
}

/**
 * Write full CDATA tag.
 */
function xmlwriter_write_cdata()
{
}

/**
 * Write full comment tag.
 */
function xmlwriter_write_comment()
{
}

/**
 * Write full DTD AttList tag.
 */
function xmlwriter_write_dtd_attlist()
{
}

/**
 * Write full DTD element tag.
 */
function xmlwriter_write_dtd_element()
{
}

/**
 * Write full DTD Entity tag.
 */
function xmlwriter_write_dtd_entity()
{
}

/**
 * Write full DTD tag.
 */
function xmlwriter_write_dtd()
{
}

/**
 * Write full namespaced element tag.
 */
function xmlwriter_write_element_ns()
{
}

/**
 * Write full element tag.
 */
function xmlwriter_write_element()
{
}

/**
 * Writes a PI.
 */
function xmlwriter_write_pi()
{
}

/**
 * Write a raw XML text.
 */
function xmlwriter_write_raw()
{
}