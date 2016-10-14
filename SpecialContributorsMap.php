<?php


class SpecialContributorsMap extends IncludableSpecialPage {

  	function __construct() {
  		parent::__construct( 'ContributorsMap' );
  	}

    function execute( $par ) {
  	   $out = $this->getOutput();
       $arr = array ();
       $arr[] = "scaleControl=false";
       $arr[] = "miniMap=false";
       $arr[] = "scrollWheelZoom=false";
       $arr[] = "zoomControl=true";
       $arr[] = "allowEdit=false";
       $arr[] = "moreControl=null";
       $arr[] = "searchControl=null";
       $arr[] = "tilelayersControl=null";
       $arr[] = "embedControl=null";
       $arr[] = "datalayersControl=null";
       $arr[] = "onLoadPanel=undefined";
       $arr[] = "captionBar=false";

       $output = '<iframe width="100%" height="300px" frameBorder="0" src="//umap.openstreetmap.fr/en/map/wikitolearn-community_106733?'.implode('&', $arr).'"></iframe>';
       $output .= '<p><a href="//umap.openstreetmap.fr/en/map/wikitolearn-community_106733">See full screen</a></p>';

       $out->addHTML($output);
       //$out->addwikitext($output);
    }

}
