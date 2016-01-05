<?php
	$url = "http://www.zillow.com/webservice/GetSearchResults.htm";
	$zwsid = "X1-ZWz1dyb53fdhjf_6jziz";
	$address = urlencode($_POST["address"]);
	$cityStateZip = urlencode($_POST["citystatezip"]);
	$paramList = "?zws-id=".$zwsid."&address=".$address."&citystatezip=".$cityStateZip;
	$response = file_get_contents($url.$paramList);
	echo($response);