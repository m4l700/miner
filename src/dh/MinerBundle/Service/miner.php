<?php

namespace dh\MinerBundle\Service;

class miner
{
	var $ean;

    public function get_image($ean){
    	$string = $ean;
    	$eanExpl = explode(',', $string);

    	foreach($eanExpl as $ean){
	    	$curl = curl_init();
	    	$search_ean = $ean;
	    	$search_url = "https://www.bol.com/nl/s/algemeen/zoekresultaten/Ntt/".$search_ean."/N/0/Nty/1/search/true/searchType/qck/defaultSearchContext/media_all/sc/media_all/index.html";
	    	//echo $search_url;

	    	curl_setopt($curl, CURLOPT_URL, $search_url);
	    	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

	    	$result = curl_exec($curl);

	    	preg_match_all("!https://s.s-bol.com/[^\s]*?/large/[^\s]*?.jpg!", $result, $matches);
	    	$images = array_values(array_unique($matches[0]));
	    	
	    	for($i = 0; $i < count ($images); $i++){
	    		echo "<div class='image-wrapper' style='width: 400px; height: 400px; display:flex; padding: 5px; float:left; .image-wrapper:hover {
    opacity: 0.8;}'>";
	    		echo "<div class='image' style='float:left; padding: 5px; border: 10px solid black; border: 4px solid black;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";
	    		echo "<img src='$images[$i]' style='width: 100%; height: 100%;'></br />";
	    		echo "</div>";
	    		echo "</div>";
	    	}

	    	//print_r($matches);
	    	curl_close($curl);
	    }
    }

/*
    public function get_title($ean){
    	$curl = curl_init();
    	$search_ean = $ean;
    	$search_url = "https://www.bol.com/nl/s/algemeen/zoekresultaten/Ntt/".$search_ean."/N/0/Nty/1/search/true/searchType/qck/defaultSearchContext/media_all/sc/media_all/index.html";

    	curl_setopt($curl, CURLOPT_URL, $search_url);
    	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

    	$result = curl_exec($curl);

    	preg_match_all("![^\s]*?pdp-header__title bol_header[^\s]*?!", $result, $matches);
    	$title = array_values(array_unique($matches[0]));

    	$htmlDoc = new DOMDocument;
    	@$htmlDoc->loadHTML($result);

    	$parent = $htmlDoc->getElementByClass('pdp-header__title bol_header');

    	echo $parent;

    	print_r($title);
    	curl_close($curl);
    }
*/

}

?>