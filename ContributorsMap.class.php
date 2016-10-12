<?php

class ContributorsMap {
    public static function onParserSetup( &$parser ) {

       $parser->setHook( 'WTLContributorsMap', 'ContributorsMap::renderContributorsMap' );
    }

    public static function renderContributorsMap( $input, array $args, Parser $parser, PPFrame $frame ) {

       $output = '<iframe width="100%" height="300px" frameBorder="0" src="//umap.openstreetmap.fr/en/map/wikitolearn-community_106733?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=null&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=null&onLoadPanel=undefined&captionBar=false"></iframe><p><a href="//umap.openstreetmap.fr/en/map/wikitolearn-community_106733">See full screen</a></p>';

       return $output;
    }

}
