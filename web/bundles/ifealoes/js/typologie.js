	var max = 1;
	var count = 12;

	var addTypologie = function(typo) {
		
		
		if(!isValid(typo))
			return;
		
		$('#aloes_assessment2').find('#new-typologie').val('');
		
		$('#aloes_assessment2').find('#typologie-control')
		.removeClass('error')
		.removeClass('success');
		
		$('#aloes_assessment2').find('#add-another-typologie')
		.removeClass('btn-success')
		.removeClass('btn-danger');
		
		selected.push(typo);
		selected_slug.push(slugify(typo));
		
		var id = 'aloes_assessment2_typologies___name__' + (count++);
		var name = 'aloes_assessment2[typologies][' + (count) + ']'
		
		var newhidden = jQuery('<input type="hidden">').addClass('typologie')
		.val(typo)
		.attr('id', id)
		.attr('name', name)
		.appendTo('#hiddens');

		var $li = newLi(typo)
		.appendTo('#typologies-list');
	}
	
	var newLi = function(typo){
		var li = jQuery('<li></li>')
			.addClass('typologie')
			.text(typo);
		addDeleteLink(li, typo);
		return li;
	} 

	var removeTypographie = function($li) {
		var typo = $.trim($li.text()); 
		
		var index = selected_slug.indexOf(typo);
		selected_slug.splice(index, 1);
		
		var index = selected.indexOf(typo);
		selected.splice(index, 1);
		$('#aloes_assessment2').find('#hiddens :input[type="hidden"]')
		.each(function() {
			if ($(this).val() == typo) {
				$(this).remove();
			}
		});
		$li.remove();
	}
	
	var slugify = function(keyword)
	{
		var r_keyword = keyword.toLowerCase();
		
		r_keyword = r_keyword.replace("à","a");
		r_keyword = r_keyword.replace("á","a");
		r_keyword = r_keyword.replace("â","a");
		r_keyword = r_keyword.replace("ã","a");
		r_keyword = r_keyword.replace("ä","a");
		r_keyword = r_keyword.replace("å","a");
		r_keyword = r_keyword.replace("ç","c");
		r_keyword = r_keyword.replace("è","e");
		r_keyword = r_keyword.replace("é","e");
		r_keyword = r_keyword.replace("ê","e");
		r_keyword = r_keyword.replace("ë","e");
		r_keyword = r_keyword.replace("ì","i");
		r_keyword = r_keyword.replace("í","i");
		r_keyword = r_keyword.replace("î","i");
		r_keyword = r_keyword.replace("ï","i");
		r_keyword = r_keyword.replace("ñ","n");
		r_keyword = r_keyword.replace("ò","o");
		r_keyword = r_keyword.replace("ó","o");
		r_keyword = r_keyword.replace("ô","o");
		r_keyword = r_keyword.replace("õ","o");
		r_keyword = r_keyword.replace("ö","o");
		r_keyword = r_keyword.replace("ù","u");
		r_keyword = r_keyword.replace("ú","u");
		r_keyword = r_keyword.replace("û","u");
		r_keyword = r_keyword.replace("ü","u");
		r_keyword = r_keyword.replace("ý","y");
		r_keyword = r_keyword.replace("ÿ","y");
		r_keyword = r_keyword.replace("œ","oe");
		r_keyword = r_keyword.replace("æ","ae");
		r_keyword = r_keyword.replace("µ","u");
		r_keyword = r_keyword.replace("-"," ");
		
		return r_keyword;
	}
	
	var isValid = function(keyword){
		
		if(keyword.length < 3)
			return false;
		
		if(selected.length >= 5)
			return false;
		
		if(selected_slug.indexOf(slugify(keyword)) != -1)
			return false;
		
		return true;
	}
	
	var addDeleteLink = function($li) {
		var $link = $('<a href="#" class=""> <i class="glyphicon glyphicon-remove-circle"></i> </a>  ');
		$li.append($link);     
		$link.on('click', function(e) {
			e.preventDefault();
			removeTypographie($li);
		});
	}

	$('#aloes_assessment2').find('#typologies-list > li').each(function() {
		addDeleteLink($(this));
	});

	$('#aloes_assessment2').find('#add-another-typologie').click(function(event) {
		event.preventDefault();
		var val = $('#aloes_assessment2').find('#new-typologie').val();
		addTypologie(val);
	}); 

	var subjects = [];
	var selected = [];
	var selected_slug = [];

	$('#aloes_assessment2').find('#hiddens :input[type="hidden"]').each(function() {
		var val = $(this).val();
		selected.push(val);
		selected_slug.push(slugify(val));
		var $ul = $('#aloes_assessment2').find('#typologies-list');
		var $li = newLi(val);
		$li.appendTo($ul);
		
	}); 
	

	$.getJSON("http://ife.ens-lyon.fr/aloes/web/app.php/aloes/typologies/ajaxt/typologies.js", function(data) {
//	$.getJSON("http://localhost/aloes/web/app_dev.php/aloes/typologies/ajaxt/typologies.js", function(data) {
			subjects = data; 
			  
	});

	var source = function(){
		return subjects;
	};
		
	
	var matcher = function(item) {
		
		var l = this.query.length;
		
		if(selected.indexOf(item) != -1)
			return false;
	
		
		var mat = item.toLowerCase().match(this.query.toLowerCase());		
					
		if (mat!= null && mat.length>0)
				return true;
		else
				return false;	 	
		
//		return item.substring(0, l).toLowerCase() == this.query.toLowerCase();
	};

	var updater = function(item) {
		addTypologie(item);
	};
	
	$('#aloes_assessment2').find('#new-typologie')
	.keypress(function(e) {
		if(e.keyCode == 13){
			e.preventDefault();
		}
			
	})
	.bind('input', function() {
		var val = $(this).val(); 
		if(val == ''){
			$('#aloes_assessment2').find('#typologie-control').removeClass('error');
			$('#aloes_assessment2').find('#typologie-control').removeClass('success');
			$('#aloes_assessment2').find('#add-another-typologie').removeClass('btn-success');
			$('#aloes_assessment2').find('#add-another-typologie').removeClass('btn-danger');
		}else if(isValid(val)){
			$('#aloes_assessment2').find('#typologie-control').removeClass('error');
			$('#aloes_assessment2').find('#typologie-control').addClass('success');
			$('#aloes_assessment2').find('#add-another-typologie').removeClass('btn-danger');
			$('#aloes_assessment2').find('#add-another-typologie').addClass('btn-success');
		}else{
			$('#aloes_assessment2').find('#typologie-control').removeClass('success');
			$('#aloes_assessment2').find('#typologie-control').addClass('error');
			$('#aloes_assessment2').find('#add-another-typologie').removeClass('btn-success');
			$('#aloes_assessment2').find('#add-another-typologie').addClass('btn-danger');
		}
	})
	.focusout(function() {
		var val = $(this).val();
		if(val == ''){
			$('#aloes_assessment2').find('#typologie-control').removeClass('error');
			$('#aloes_assessment2').find('#typologie-control').removeClass('success');
			$('#aloes_assessment2').find('#add-another-typologie').removeClass('btn-success');
			$('#aloes_assessment2').find('#add-another-typologie').removeClass('btn-danger');
		}
	});
 
	
	$('#aloes_assessment2').find('#new-typologie').attr('autocomplete', 'off').typeahead({
		'source' : source,
		'matcher' : matcher,
		'updater' : updater,
	    debug: true
	});





