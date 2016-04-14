	// Form Actions
		
		// check field 
		function checkField(e, thisBlock){
				var fieldValue = $(thisBlock).val().toString();
					if(fieldValue.length < 1){
						$('.line_block_input_placeholder').show();
					} else {
						$('.line_block_input_placeholder').hide();
					}
				return true;
		}
		function focusOnField(){
			$('.line_block_input').focus();
		}
		