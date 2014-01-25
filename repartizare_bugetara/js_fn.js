
	function openPage(page)
	{
		switch(page)
		{
			case 1: window.open("../index.php","_self"); break;
			case 2: window.open("../venituri/index.php","_self"); break;
			case 3: window.open("../cheltuieli/index.php","_self"); break;
		}
	}
	
	$(document).ready(function(){
	
		var ajax_function  = function(){
			$(".ajax_body").html("<br/><img style='margin:0 auto; display: block' alt='Loading' src='../img/load3.gif'/><br/>");
			$.ajax({url:"rep.php",
					type:"POST",
					data:"id_localitate="+$("#localit").val()+"&tip_vizualizare="+$("#tip_vizualizare").val()+"&tip_buget="+$("#tip_buget").val(), 
					success:function(result){
						$(".ajax_body").html(result);
						$(".buget").animate({left:"0px"},200);
					}});
		}
					
		$("#localit").change(ajax_function);
		$("#tip_vizualizare").change(ajax_function);
		$("#tip_buget").change(ajax_function);
		$(document).ready(ajax_function);
	});