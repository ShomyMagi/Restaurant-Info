function sortThis(id){   
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementsByClassName("row")[5].innerHTML=xmlhttp.responseText;     
    }
  }
  xmlhttp.open("GET","sort.php?value="+id.value,true);
  xmlhttp.send();	  
  }