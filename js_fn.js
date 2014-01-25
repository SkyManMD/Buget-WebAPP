
	function openPage(page)
	{
		switch(page)
		{
			case 1: window.open("index.php","_self"); break;
			case 2: window.open("venituri/index.php","_self"); break;
			case 3: window.open("cheltuieli/index.php","_self"); break;
			case 4: window.open("adauga/index.php","_self"); break;
			case 5: window.open("repartizare_bugetara/index.php","_self"); break;
		}
	}
	
	$(document).ready(function(){
	
		var ajax_function  = function(){
			$("#buget_div").html("<br/><img style='margin:0 auto; display: block' alt='Loading' src='img/load3.gif'/><br/>");
			$.ajax({url:"buget.php",
					type:"POST",
					data:"id_localitate="+$("#localit").val(), //$(this).val();
					success:function(result){
						$("#buget_div").html(result);
						$(".buget").animate({left:"0px"},200);
						//$(".buget").hide(); $(".buget").show(300);
					}});
		}
					
		$("#localit").change(ajax_function);
		$(document).ready(ajax_function);
	});