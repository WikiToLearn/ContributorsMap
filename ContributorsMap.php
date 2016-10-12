<?php
/*Entry point */
if (!defined('MEDIAWIKI')){
    die();
}
if(function_exists('wfLoadExtension')) {
    wfLoadExtension('ContributorsMap');

    wfWarn( "Deprecated entry point to ContributorsMap. Please use wfLoadExtension('ContributorsMap').");

}
else
{
    die("MediaWiki version 1.25+ is required to use the ContributorsMap extension");
}
?>
