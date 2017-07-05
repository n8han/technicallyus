<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	        <!-- charset must remain utf-8 to be handled properly by Processing -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>Rain : Built with Processing</title>
		
		<style type="text/css">
		/* <![CDATA[ */
	
		body {
  		  margin: 60px 0px 0px 55px;
		  font-family: verdana, geneva, arial, helvetica, sans-serif; 
		  font-size: 11px; 
		  background-color: #ddddcc; 
		  text-decoration: none; 
		  font-weight: normal; 
		  line-height: normal; 
		}
		 
		a          { color: #3399cc; }
		a:link     { color: #3399cc; text-decoration: underline; }
		a:visited  { color: #3399cc; text-decoration: underline; }
		a:active   { color: #3399cc; text-decoration: underline; }
		a:hover    { color: #3399cc; text-decoration: underline; }
	
		/* ]]> */
		</style>
	 
	</head>
	<body>
		<div id="content">
			<div id="Rain_container">
			
			<!--[if !IE]> -->
				<object classid="java:Rain.class" 
            			type="application/x-java-applet"
            			archive="Rain.jar"
            			width="400" height="400"
            			standby="Loading Processing software..." >
            			
					<param name="archive" value="Rain.jar" />
				
					<param name="mayscript" value="true" />
					<param name="scriptable" value="true" />
				
					<param name="image" value="loading.gif" />
					<param name="boxmessage" value="Loading Processing software..." />
					<param name="boxbgcolor" value="#FFFFFF" />
				
					<param name="test_string" value="outer" />
			<!--<![endif]-->
				
				<object classid="clsid:8AD9C840-044E-11D1-B3E9-00805F499D93" 
						codebase="http://java.sun.com/update/1.5.0/jinstall-1_5_0_15-windows-i586.cab"
						width="400" height="400"
						standby="Loading Processing software..."  >
						
					<param name="code" value="Rain" />
					<param name="archive" value="Rain.jar" />
					
					<param name="mayscript" value="true" />
					<param name="scriptable" value="true" />
					
					<param name="image" value="loading.gif" />
					<param name="boxmessage" value="Loading Processing software..." />
					<param name="boxbgcolor" value="#FFFFFF" />
					
					<param name="test_string" value="inner" />
					
					<p>
						<strong>
							This browser does not have a Java Plug-in.
							<br />
							<a href="http://java.sun.com/products/plugin/downloads/index.html" title="Download Java Plug-in">
								Get the latest Java Plug-in here.
							</a>
						</strong>
					</p>
				
				</object>
				
			<!--[if !IE]> -->
				</object>
			<!--<![endif]-->
			
			</div>
			
			<p>
			It's raining! Please draw us a house.

<p>(Before Saturday <b>September 13th at 9 p.m.</b>,
because that is when we're having a party at
<a href="http://maps.google.com/maps?f=q&hl=en&geocode=&q=96+Schermerhorn+Street,+apartment+3G,+in+Brooklyn&sll=40.6904,-73.98994&sspn=0.011422,0.012853&ie=UTF8&z=16&iwloc=addr">
96 Schermerhorn Street</a>, apartment 3G, in Brooklyn.
See you there!)</p>

			</p>
			
			<p>
			Source code: <a href="Rain.pde">Rain</a> <a href="Carpenter.pde">Carpenter</a> <a href="WebBytes.pde">WebBytes</a> 
			</p>
			
			<p>
			Built with <a href="http://processing.org" title="Processing.org">Processing</a>
			</p>
		</div>
	</body>
</html>