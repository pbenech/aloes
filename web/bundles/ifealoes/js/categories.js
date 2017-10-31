	var max = 1;
	var count = 12;

	var addCategorie = function(typo) {
		
		
		if(!isValid(typo))
			return;
		
		$('#aloes_generalcompetence').find('#new-categorie').val('');
		
		$('#aloes_generalcompetence').find('#categorie-control')
		.removeClass('error')
		.removeClass('success');
		
		$('#aloes_generalcompetence').find('#add-another-categorie')
		.removeClass('btn-success')
		.removeClass('btn-danger');
		
		selected.push(typo);
		selected_slug.push(slugify(typo)); 

		var id = 'aloes_generalcompetence_categories___name__' + (count++);
		var name = 'aloes_generalcompetence[categories][' + (count) + ']';
		
		var newhidden = jQuery('<input type="hidden">').addClass('categorie')
		.val(typo)
		.attr('id', id)
		.attr('name', name)
		.appendTo('#hiddens');

		var $li = newLi(typo)
		.appendTo('#categories-list');
	}
	
	var newLi = function(typo){
		var li = jQuery('<li></li>')
			.addClass('categorie')
			.text(typo);
		addDeleteLink(li, typo);
		return li;
	} 

	var removeCategorie = function($li) {
		var typo = $.trim($li.text()); 
		
		var index = selected_slug.indexOf(typo);
		selected_slug.splice(index, 1);
		
		var index = selected.indexOf(typo);
		selected.splice(index, 1);
		$('#aloes_generalcompetence').find('#hiddens :input[type="hidden"]')
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
			removeCategorie($li);
		});
	}

	$('#aloes_generalcompetence').find('#categories-list > li').each(function() {
		addDeleteLink($(this));
	});

	$('#aloes_generalcompetence').find('#add-another-categorie').click(function(event) {
		event.preventDefault();
		var val = $('#aloes_generalcompetence').find('#new-categorie').val();
		addCategorie(val);
	}); 

	var subjects = [];
	var selected = [];
	var selected_slug = [];

	$('#aloes_generalcompetence').find('#hiddens :input[type="hidden"]').each(function() {
		var val = $(this).val();
		selected.push(val);
		selected_slug.push(slugify(val));
		var $ul = $('#aloes_generalcompetence').find('#categories-list');
		var $li = newLi(val);
		$li.appendTo($ul);
		
	}); 
	
	$.getJSON("http://ife.ens-lyon.fr/aloes/web/app.php/aloes/categories/ajaxc/categories.js", function(data) {
//	$.getJSON("http://localhost/aloes/web/app_dev.php/aloes/categories/ajaxc/categories.js", function(data) {
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
		addCategorie(item);
	};
	
	$('#aloes_generalcompetence').find('#new-categorie')
	.keypress(function(e) {
		if(e.keyCode == 13){
			e.preventDefault();
		}
			
	})
	.bind('input', function() {
		var val = $(this).val(); 
		if(val == ''){
			$('#aloes_generalcompetence').find('#categorie-control').removeClass('error');
			$('#aloes_generalcompetence').find('#categorie-control').removeClass('success');
			$('#aloes_generalcompetence').find('#add-another-categorie').removeClass('btn-success');
			$('#aloes_generalcompetence').find('#add-another-categorie').removeClass('btn-danger');
		}else if(isValid(val)){
			$('#aloes_generalcompetence').find('#categorie-control').removeClass('error');
			$('#aloes_generalcompetence').find('#categorie-control').addClass('success');
			$('#aloes_generalcompetence').find('#add-another-categorie').removeClass('btn-danger');
			$('#aloes_generalcompetence').find('#add-another-categorie').addClass('btn-success');
		}else{
			$('#aloes_generalcompetence').find('#categorie-control').removeClass('success');
			$('#aloes_generalcompetence').find('#categorie-control').addClass('error');
			$('#aloes_generalcompetence').find('#add-another-categorie').removeClass('btn-success');
			$('#aloes_generalcompetence').find('#add-another-categorie').addClass('btn-danger');
		}
	})
	.focusout(function() {
		var val = $(this).val();
		if(val == ''){
			$('#aloes_generalcompetence').find('#categorie-control').removeClass('error');
			$('#aloes_generalcompetence').find('#categorie-control').removeClass('success');
			$('#aloes_generalcompetence').find('#add-another-categorie').removeClass('btn-success');
			$('#aloes_generalcompetence').find('#add-another-categorie').removeClass('btn-danger');
		}
	});
  
	 
	$('#aloes_generalcompetence').find('#new-categorie').attr('autocomplete', 'off').typeahead({
		'source' : source,
		'matcher' : matcher,
		'updater' : updater,
	    debug: true
	});  
 




