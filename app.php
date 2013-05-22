<html>
<head>
    <title>Page Title</title>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
</head>


<script>
	$( document ).ready(function() {
	    $(".show-page-loading-msg").click(function() {
			var $this = $( this ),
				theme = $this.jqmData( "theme" ) || $.mobile.loader.prototype.options.theme,
				msgText = $this.jqmData( "msgtext" ) || $.mobile.loader.prototype.options.text,
				textVisible = $this.jqmData( "textvisible" ) || $.mobile.loader.prototype.options.textVisible,
				textonly = !!$this.jqmData( "textonly" );
				html = $this.jqmData( "html" ) || "";
			$.mobile.loading( "show", {
					text: msgText,
					textVisible: textVisible,
					theme: theme,
					textonly: textonly,
					html: html
			});	
			setTimeout(hideAndDisplay, 1000)
		}); 
		
		function hideAndDisplay() {
			$.mobile.loading( "hide" );
			$(".connectedClass").show();
		}
	});
</script>

<style>
	div#vehicleInfo {
		
	}
	div#vehicleInfo img {
		width:180px;	
	}
	img#signal {
		width:40px;	
		position: relative;
		top: 14px;
	}
	img#signalFooter {
		width:40px;	
	}
	div#connect {
		
	}
	span#footerHealth {
		position: absolute;
		top: 16px;	
	}
	.connectedClass {
		position:relative;	
		display:none;
	}
	/* Custom Icon */
	.ui-icon-custom {
	    background-image: url("images/icons/skull.png");
	    background-position: 3px 3px;
		background-size: 67%;
	}
	div#map {}
	#mapFrame {
		width: 90%;
		height: 300px;
		margin: 0 auto;
		display: block;
	}
	span.rightBubble {
		font-size: 11px;
		padding: 2px;
		color: red;
		float: right;
		padding-left:2px;
		padding-right:2px; 
	}
	div.rating {
		width: 76px;
		height: 13px;
		background-image: url('images/rating.png');
		background-size: 76px;
		background-repeat: no-repeat;
		display: inline-block;	
	}
	img#logo {
		width: 21px;
		margin-left: 10px;
	}
	div#rating1 {background-position-y: -15px;}
	div#rating2 {background-position-y: -28px;}
	div#rating3 {background-position-y: -42px;}
	div#rating4 {background-position-y: -55px;}
	div#rating5 {background-position-y: -69px;}
</style>

<body>

<div id="home" data-role="page" data-theme="b">
	<div data-role="header" data-theme="b">
        <h1>Auto - Guard<img id="logo" src="images/logo.png"/></h1>
    </div>

    <div data-role="content">
	    <ul data-role="listview" data-inset="true">
		    <li><a href="#settings"><img src="images/icons/gears.png" class="ui-li-icon ui-corner-none">Settings</a></li>
		    <li><a href="#health"><img src="images/icons/health.png" class="ui-li-icon">Vehicle Health</a></li>
		    <li><a href="#garages"><img src="images/icons/wrench.png" class="ui-li-icon">Nearby Garages</a></li>
		</ul>
    </div>

    <div data-role="footer" data-position="fixed" data-theme="b">
    	<div class="connectedClass">
			<img id="signalFooter" src="images/signal_strength.png"/>
			<span id="footerHealth">BMW 320d Connected</span>
		</div>
	</div>
</div>
<div id="settings" data-role="page">
	<div data-role="header">
		<a href="#home" data-icon="home">Home</a>
        <h1>Settings</h1>
    </div>

    <div data-role="content">
    	User Name:
		<input type="text" value="BrianH"/>
		Password:
		<input type="password" value="password"/>
		<div id="connect">   
			<button class="show-page-loading-msg" data-theme="b" data-textonly="false" data-textvisible="true" data-msgtext="Connecting to car" data-inline="true">Connect to Vehicle</button><img class="connectedClass" id="signal" src="images/signal_strength.png"/>
		</div>
		<div id="vehicleInfo" class="connectedClass">
			<table>
				<tr>
					<td><img src="images/bmw.jpg"/></td>
					<td>Model: BMW 320d <br/> Fuel Type: Diesel</td>
				</tr>
				
			</table>	
		</div>
    </div>

</div>
<div id="health" data-role="page">
	<div data-role="header">
		<a href="#home" data-icon="home">Home</a>
        <h1>Health</h1>
    </div>
    <div data-role="content">
    	<ul data-role="listview" data-inset="true" data-theme="c">
		    <li data-role="list-divider">DTC Errors</li>
		    <li data-icon="custom"><a href="#garages">Misfire Detection Cyl 1<span class="ui-li-count">Find Garage</span></a></li>
		    <li data-icon="custom"><a href="#garages">Engine Coolant Temperature Sensor<span class="ui-li-count">Find Garage</span></a></li>
		    <li data-icon="custom"><a href="#garages">Oil Level Sensor<span class="ui-li-count">Find Garage</span></a></li>
		    <li data-icon="custom"><a href="#garages">Back right Break light<span class="ui-li-count">Find Garage</span></a></li>
		</ul>
		<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-mini="false">
		    <div data-role="collapsible">
		        <h3>Performance</h3>
		        <p>Fuel Efienecy: 44mpg</p>
		        <img style="width:200px;" src="images/chart.png"/>
		    </div>
		    <div data-role="collapsible">
		        <h3>Emissions</h3>
		        <p></p>
		    </div>
		    <div data-role="collapsible">
		        <h3>Servicing</h3>
		        <p></p>
		    </div>
		</div>
    </div>
    <div data-role="footer" data-position="fixed" data-theme="b">
    	<div class="connectedClass">
			<img id="signalFooter" src="images/signal_strength.png"/>
			<span id="footerHealth">BMW 320d Connected</span>
		</div>
	</div>
</div>
<div id="garages" data-role="page">
	<div data-role="header">
		<a href="#home" data-icon="home">Home</a>
        <h1>Garages</h1>
    </div>
	<div data-role="content">
		
	<div data-role="collapsible-set" data-inset="true" data-theme="b">
	    <div data-role="collapsible">
	        <h3>KwikFit<span class="ui-li-count ui-btn-up-c ui-btn-corner-all rightBubble">6 Km</span></h3>
	        <ul data-role="listview" data-inset="false">
	            <li>Rating: <div id="rating1" class="rating"></div></li>
	            <li>Specialise in: Chassis</li>
	            <li><span class="mini"><a href="#" data-corners="false" data-role="button" data-mini="true" data-inline="true" data-icon="check" data-theme="b">Book an apointment</a></span></li>
	            <li>Blank</li>
	        </ul>
	    </div>
	    <div data-role="collapsible">
	        <h3>Atlas<span class="ui-li-count ui-btn-up-c ui-btn-corner-all rightBubble">32 Km</span></h3>
	        <ul data-role="listview" data-inset="false">
	            <li>Rating: <div id="rating4" class="rating"></div></li>
	            <li>Specialise in: Body</li>
	            <li><span class="mini"><a href="#" data-corners="false" data-role="button" data-mini="true" data-inline="true" data-icon="check" data-theme="b">Book an apointment</a></span></li>
	        </ul>
	    </div>
	   <div data-role="collapsible">
	        <h3>Joe Duffy's BMW<span class="ui-li-count ui-btn-up-c ui-btn-corner-all rightBubble">34 Km</span></h3>
	        <ul data-role="listview" data-inset="false">
	            <li>Rating: <div id="rating5" class="rating"></div></li>
	            <li>Specialise in: BMW</li>
	            <li><span class="mini"><a href="#" data-corners="false" data-role="button" data-mini="true" data-inline="true" data-icon="check" data-theme="b">Book an apointment</a></span></li>
	        </ul>
	    </div>
	    <div data-role="collapsible">
	        <h3>Auto-Key<span class="ui-li-count ui-btn-up-c ui-btn-corner-all rightBubble">56 Km</span></h3>
	        <ul data-role="listview" data-inset="false">
	            <li>Rating: <div id="rating2" class="rating"></div></li>
	            <li>Specialise in: Network</li>
	            <li><span class="mini"><a href="#" data-corners="false" data-role="button" data-mini="true" data-inline="true" data-icon="check" data-theme="b">Book an apointment</a></span></li>
	        </ul>
	    </div>
		</div>
	</div>
</div>




</body>
</html>