<?php

class SpecialContributorsMap extends IncludableSpecialPage {

  	function __construct() {
  		parent::__construct( 'ContributorsMap');
  	}

    function execute( $par ) {
      global $wgCMURL;
      global $wgCMDisplay;

  	   $out = $this->getOutput();

       $params = array();
       foreach($wgCMDisplay as $x => $x_value) {
          $params[] = $x . "=" . $x_value;
        }

       $output = '<iframe width="100%" height="300px" frameBorder="0" src="//'.$wgCMURL.'?'.implode('&', $params).'"></iframe>';
      //  $output .= '<p><a href="//'.$wgCMURL.">See full screen</a></p>';

       $out->addHTML($output);
    }

}
