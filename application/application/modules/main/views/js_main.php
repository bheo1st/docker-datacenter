<script type="text/javascript">
	function buttonMenu(id)
	{
		var x = document.getElementById(id).getAttribute("aria-expanded"); 
	 	if(x == "true"){
	 		x = "false";
	 	}else{
	 		x = "true";
	 	}
		document.getElementById(id).setAttribute("aria-expanded", x);		 
	}
</script>