<?PHP // $Id: version.php,v 3.2 latest update 2006/10/12 

///////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of certificate
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
///////////////////////////////////////////////////////////////////////////////

$module->version  = 2007020900;  // The current module version (Date: YYYYMMDDXX)
$module->requires = 2006080900;  // Requires this Moodle version
$module->cron     = 0;           // Period for cron to check this module (secs)

?>