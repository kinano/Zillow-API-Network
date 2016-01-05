(function ($) {
	$('#form').validate({
		rules: {
		    address: {
		        required: true
		    },
		    zip: {
		        required: {
		            depends: function (element) {
		                return !($('#city').is(':filled') || $('#state').is(':filled')) ;
		            }
		        }
		    },
		    city: {
		        required: {
		            depends: function (element) {
		                return !($('#zip').is(':filled'));
		            }
		        }
		    },
		    state: {
		        required: {
		            depends: function (element) {
		                return !($('#zip').is(':filled'));
		            }
		        }
		    }

		}
	});

	$('input').change(function(){
		$('#form').valid();
	});

	$('#form').submit(function(){

		var $responseContainer = $('#responseContainer');
		$responseContainer.html('');
		if($('#form').valid()){
			'use strict';
	        var url = 'api/GetSearchResults.php';
	        $.ajax({
				type: 'POST',
				url: url,
				data:{
					'address' : $('#address').val(),
					'citystatezip' : $('#city').val() + ' ' + $('#state').val() + ' ' + $('#zip').val(),
				},
				dataType: 'xml',
				error: function (jqXhr, textStatus, error) {
					$responseContainer.text('We encountered an error while fetching your search results. Please try again.');
				},
				success: function (response) {
					$code = $(response).find('code').text(),
					$status = $(response).find('text').text();
					// Show the status to the user:
					$responseContainer.append('<p><b>'+ $status + '</b></p>');
					// Parse the results only when the api call is successful:
					if(parseInt($code) === 0){
						$responseContainer.append('<p class="title">Property Facts</p>');
						$(response).find('result').each(function() {
							$.each(this.children, function(i, child){
								parseXML(child, $responseContainer);
							});
						});
					}

				}
	        });
		}
		return false;
	});

	/**
	* Parse the xmlNode recursively and add the content to the container
	*/
	parseXML = function(xmlNode, htmlContainer){
		if(xmlNode.tagName && xmlNode.children.length === 0){
		// Base case:
			if(xmlNode.innerHTML.indexOf('http') > -1) {
				// Create an anchor tag for URLs
				htmlContainer.append('<a target="_blank" href="' +  xmlNode.innerHTML + '">' + xmlNode.tagName +'</a>');
			}
			else {
				/**
				* @todo: We need to support displaying attributes to end users using tooltips or some other way
				*/
				var nodeAttributes = getAttributes(xmlNode);
				htmlContainer.append('<div class="row">'
										+ '<div class="tagName col-md-4">'
											+ xmlNode.tagName
										+ '</div>'
										+ '<div class="tagContent col-md-4">'
											+ xmlNode.innerHTML
										+ '</div>'
										+ '<div class="col-md-4">'
											+ nodeAttributes
										+ '</div>'
									  + '</div>'
									);
			}
			htmlContainer.append('<br>');
		}
		else {
			htmlContainer.append('<br><b>' + xmlNode.tagName + '</b><br>');
			$.each(xmlNode.children, function(j, xmlNodeChild){
				parseXML(xmlNodeChild, htmlContainer);
			});
		}
	};
	/**
	* Gets the attributes for an xml node
	*/
	getAttributes = function(xmlNode){
		var result = '';
		for (var i = 0; i < xmlNode.attributes.length; i++) {
			var attr = xmlNode.attributes[i];
			result += attr.name + ': ' + attr.value + '<br>';
		}
		return result;
	};

})(jQuery);