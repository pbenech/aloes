function HideShow2(param,param2)
	{
		  	$(param).toggle();
		  	str = $(param2).html();   
		  	
			if (str=='<span class="glyphicon glyphicon-collapse-up"></span>')
		  		$(param2).html('<span class="glyphicon glyphicon-collapse-down"></span>');
			else if (str=='<span class="glyphicon glyphicon-collapse-down"></span>')
		  		$(param2).html('<span class="glyphicon glyphicon-collapse-up"></span>');		
	}  
  
function HideShow3(param,param2)
	{
		  	$(param).toggle();
		  	str = $(param2).html();   
		  	
			if (str=='<span class="glyphicon glyphicon-triangle-right"></span>')
		  		$(param2).html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
			else if (str=='<span class="glyphicon glyphicon-triangle-bottom"></span>')
		  		$(param2).html('<span class="glyphicon glyphicon-triangle-right"></span>');		
	}  



function progress_bar(weight,type)
	{
		progress  = ""; 
		progress += "<div class='progress'>";				
		progress += "  <div class='progress-bar progress-bar-"+type+"'";
		progress += "     role='progressbar'";
		progress += "     style='width:"+weight+"%;' aria-valuenow='"+weight+"' aria-valuemin='0' aria-valuemax='100' >";   
		progress += " <span class='sr-only'>"+weight+"% Complete</span>";
		progress += "  </div>";   
		progress += "</div>";
		return progress;     
	}
 

			