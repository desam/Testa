function getXhr() {
	var xhr = null;
	
	if (window.XMLHttpRequest) // For Firefox and other Browsers
	{
		xhr = new XMLHttpRequest();
	}
	else if (window.ActiveXObject)
	{
		try {
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch(e){ xhr = new ActiveXObject("Microsoft.XMLHTTP");	}
	}
	else
	{
		alert("Your Browser can't support XMLHTTP");
		xhr = false;
	}
return xhr;
}

function ajaxGetNewResults()
{
	var xhr=getXhr();
  	
	xhr.onreadystatechange = function() {
							if (xhr.readyState==4)
							{ 
								document.getElementById("resultat").innerHTML=xhr.responseText;
							}
							};	
	
	var datepublished = document.getElementById('datearticlehidden').value;						
	xhr.open("POST","./Model/serverside.php",true);
	
	xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	xhr.send("datepubli="+ datepublished); 

}