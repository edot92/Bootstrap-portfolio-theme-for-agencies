<script type="text/javascript">
  $(document).ready(function() {
    var a="<?php if(isset($varTemp)){echo ($varTemp);} else{echo "no var";} ?>";
    // alert(a);
  });

  // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  // })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  //
  // ga('create', 'UA-84008721-1', 'auto');
  // ga('send', 'pageview');
  </script>

  <!-- Google Analytics -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84008721-1', 'auto');
  ga('send', 'pageview');


</script>
  <!-- End Google Analytics -->
  <script id="wpcp_disable_selection" type="text/javascript">
  //<![CDATA[
  var image_save_msg='You Can Not Save images!';
  	var no_menu_msg='Context Menu disabled!';
  	var smessage = "";

  function disableEnterKey(e)
  {
  	if (e.ctrlKey){
       var key;
       if(window.event)
            key = window.event.keyCode;     //IE
       else
            key = e.which;     //firefox (97)
      //if (key != 17) alert(key);
       if (key == 97 || key == 65 || key == 67 || key == 99 || key == 88 || key == 120 || key == 26 || key == 85  || key == 86 || key == 83 || key == 43)
       {
            show_wpcp_message('You are not allowed to copy content or view source');
            return false;
       }else
       	return true;
       }
  }

  function disable_copy(e)
  {
  	var elemtype = e.target.nodeName;
  	var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
  	elemtype = elemtype.toUpperCase();
  	var checker_IMG = '';
  	if (elemtype == "IMG" && checker_IMG == 'checked' && e.detail >= 2) {show_wpcp_message(alertMsg_IMG);return false;}
      if (elemtype != "TEXT" && elemtype != "TEXTAREA" && elemtype != "INPUT" && elemtype != "PASSWORD" && elemtype != "SELECT")
  	{
  		if (smessage !== "" && e.detail == 2)
  			show_wpcp_message(smessage);

  		if (isSafari)
  			return true;
  		else
  			return false;
  	}
  }
  function disable_copy_ie()
  {
  	var elemtype = window.event.srcElement.nodeName;
  	elemtype = elemtype.toUpperCase();
  	if (elemtype == "IMG") {show_wpcp_message(alertMsg_IMG);return false;}
  	if (elemtype != "TEXT" && elemtype != "TEXTAREA" && elemtype != "INPUT" && elemtype != "PASSWORD" && elemtype != "SELECT")
  	{
  		//alert(navigator.userAgent.indexOf('MSIE'));
  			//if (smessage !== "") show_wpcp_message(smessage);
  		return false;
  	}
  }
  function reEnable()
  {
  	return true;
  }
  document.onkeydown = disableEnterKey;
  document.onselectstart = disable_copy_ie;
  if(navigator.userAgent.indexOf('MSIE')==-1)
  {
  	document.onmousedown = disable_copy;
  	document.onclick = reEnable;
  }
  function disableSelection(target)
  {
      //For IE This code will work
      if (typeof target.onselectstart!="undefined")
      target.onselectstart = disable_copy_ie;

      //For Firefox This code will work
      else if (typeof target.style.MozUserSelect!="undefined")
      {target.style.MozUserSelect="none";}

      //All other  (ie: Opera) This code will work
      else
      target.onmousedown=function(){return false}
      target.style.cursor = "default";
  }
  //Calling the JS function directly just after body load
  window.onload = function(){disableSelection(document.body);};
  //]]>
  </script>
  <script id="wpcp_disable_Right_Click" type="text/javascript">
  	//<![CDATA[
  	document.ondragstart = function() { return false;}
  	/* ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
  	Disable context menu on images by GreenLava Version 1.0
  	^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ */
  	    function nocontext(e) {
  	       return false;
  	    }
  	    document.oncontextmenu = nocontext;
  	//]]>
  	</script>
