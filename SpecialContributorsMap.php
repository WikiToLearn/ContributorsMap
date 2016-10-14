<?php

class SpecialContributorsMap extends IncludableSpecialPage
{
    public function __construct()
    {
        parent::__construct('ContributorsMap');
    }

    public function execute($par)
    {
        global $wgCMURL;
        global $wgCMDisplay;

        $out = $this->getOutput();

        $params = array();
        foreach ($wgCMDisplay as $x => $x_value) {
            $params[] = $x.'='.urlencode($x_value);
        }

        $output = '<iframe width="100%" height="300px" frameBorder="0" src="//'.$wgCMURL.'?'.implode('&', $params).'"></iframe>';
      //  $output .= '<p><a href="//'.$wgCMURL.">See full screen</a></p>';

       if ( $wgCMURL === "" ) {
         $out->addwikitext('Please set <code>$wgCMURL</code> in <code>LocalSettings.php</code> to some meaningful value!');
       } else {
         $out->addHTML($output);
       }
    }
}
