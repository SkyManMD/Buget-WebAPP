

	function selectedItem(item_name) //elementul selectat din meniu;
	{   
		document.getElementsByClassName('ajax_body')[0].innerHTML="<br/><br/><p><img style='margin:0 auto; display: block' alt='Loading' src='../img/load3.gif'/></p>";
		
		var xmlhttp;
		if(window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
		else xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementsByClassName('ajax_body')[0].innerHTML=xmlhttp.responseText;
			}
		}
		
		xmlhttp.open("POST",item_name,true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send();
	}
	
	function home()
	{
		window.open("../index.php","_self");
	}
	
	function selectedButon(selB)
	{
		var p =document.getElementsByTagName('button');
		for(var i=1;i<p.length;i++)
		if(i==selB) p[i].setAttribute("style", "color:#ff8800;");
		else p[i].setAttribute("style", "color:black;");
	}
	
	function customSelect(thisChbox)
	{	
		document.getElementsByClassName('selected_items')[0].innerHTML="<br/><br/><p><img style='margin:0 auto; display: block' alt='Loading' src='../img/load3.gif'/></p>";
		var chbox_localitati = new Array();
		var chbox_institutii = new Array();
		var chbox_cheltuieli = new Array();
		var k=0,m=0,n=0,sum_min,sum_max,date_min,date_max,cond_sort;
		chbox=document.getElementsByTagName('input'); //toate checkbox-urile
		
		for(var i=0; i<chbox.length; i++){
		if (chbox[i].checked && chbox[i].name=='localitate') chbox_localitati[k++]=chbox[i].value; //inscrim valorile selectate in chechboxuri;
		if (chbox[i].checked && chbox[i].name=='venit') chbox_cheltuieli[m++]=chbox[i].value;
		if (chbox[i].checked && chbox[i].name=='institutie_chelt') chbox_institutii[n++]=chbox[i].value;
		if (chbox[i].name=='sum_min') 
			if(chbox[i].value=="") sum_min="valoare_cheltuiala"; else sum_min="'"+chbox[i].value+"'";
		if (chbox[i].name=='sum_max') 
			if(chbox[i].value=="") sum_max="valoare_cheltuiala"; else sum_max="'"+chbox[i].value+"'";
		if (chbox[i].name=='date_min') 
			if(chbox[i].value=="") date_min="data_inr_cheltuiala"; else date_min="'"+chbox[i].value+"'";
		if (chbox[i].name=='date_max') 
			if(chbox[i].value=="") date_max="data_inr_cheltuiala"; else date_max="'"+chbox[i].value+"'";
		if (chbox[i].checked && chbox[i].name=='cond_sortare') cond_sort=chbox[i].value;
		}

		var xmlhttp;
		if(window.XMLHttpRequest) xmlhttp=new XMLHttpRequest();
		else xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementsByClassName('selected_items')[0].innerHTML=xmlhttp.responseText;
			}
		}
		
		xmlhttp.open("POST","selective_data.php",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("chbox_localit="+chbox_localitati+"&chbox_cheltuieli="+
					  chbox_cheltuieli+"&sum_min="+sum_min+"&sum_max="+sum_max+
					  "&date_min="+date_min+"&date_max="+date_max+
					  "&chbox_institutii="+chbox_institutii+"&sort_by="+cond_sort); //tabelurile se trimit sub forma de string;
	}
	
	function openOrCloseSpoiler(thisSpoiler)
	{
		var spoilerBody = thisSpoiler.getElementsByClassName('spoiler_body')[0];
		$(spoilerBody).toggle("slow");
	}
	
		function openDeletePage(thisBtn)
	{
		if(confirm('Întradevăr doriți să ștergeți înregistrarea?')){
			window.location.href='delete_registration.php?ID_for_delete='+thisBtn.value;
		}else{
			return;
		}
	}
	
	function openEditPage(thisBtn)
	{
		if(confirm('Întradevăr doriți să editați înregistrarea?')){
			window.location.href='edit_registration.php?ID_for_edit='+thisBtn.value;
		}else
		{
			return;
		}
	}
	/*
	function showEditPanel(thisTR)
	{
		thisTR.getElementsByClassName('cell_edit')[0].style.visibility="visible";
	}
	
	function hideEditPanel(thisTR)
	{
		thisTR.getElementsByClassName('cell_edit')[0].style.visibility="hidden";
	}
	*/
	