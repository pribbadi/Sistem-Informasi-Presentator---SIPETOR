<style type="text/css">
#txt {
  border:none;
  font-family:verdana;
  font-size:30pt;
  text-align: left;
  font-weight:bold;
  border-right-color:#FFFFFF;
  color: #B70E0E;
  margin-left: 50px;
}
#peserta {
  border:none;
  font-family:verdana;
  font-size:25pt;
  font-weight:bold;
  border-right-color:#FFFFFF;
  color: #B70E0E;
  text-align: right;
}

</style>
<script language="javascript">
  var mins
  var secs;

  function cd() {
   	mins = 1 * m("00"); // change minutes here
   	secs = 0 + s(":50"); // change seconds here (always add an additional second to your total)
   	redo();
  }

  function m(obj) {
   	for(var i = 0; i < obj.length; i++) {
    		if(obj.substring(i, i + 1) == ":")
    		break;
   	}
   	return(obj.substring(0, i));
  }

  function s(obj) {
   	for(var i = 0; i < obj.length; i++) {
    		if(obj.substring(i, i + 1) == ":")
    		break;
   	}
   	return(obj.substring(i + 1, obj.length));
  }

  function dis(mins,secs) {
   	var disp;
   	if(mins <= 9) {
    		disp = " 0";
   	} else {
    		disp = " ";
   	}
   	disp += mins + ":";
   	if(secs <= 9) {
    		disp += "0" + secs;
   	} else {
    		disp += secs;
   	}
   	return(disp);
  }

  function redo() {
   	secs--;
   	if(secs == -1) {
    		secs = 59;
    		mins--;
   	}
   	document.cd.disp.value = dis(mins,secs); // setup additional displays here.
  	
   if((mins == 0) && (secs == 0)) {
    		document.getElementById('cd').submit();
   	} else {
   		cd = setTimeout("redo()",1000);
   	}

  	
  }

  function init() {
    cd();
  }
  window.onload = init;
</script>