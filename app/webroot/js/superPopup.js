/*
// Super Popup: when using this function on multiple links across a site its best to define a 'type' within your initiate function, if you are defining a popup on a single page you can pass in the options you want as arguments.
*/

function f_clientWidth() {
	return f_filterResults (
		window.innerWidth ? window.innerWidth : 0,
		document.documentElement ? document.documentElement.clientWidth : 0,
		document.body ? document.body.clientWidth : 0
	);
}

function f_clientHeight() {
	return f_filterResults (
		window.innerHeight ? window.innerHeight : 0,
		document.documentElement ? document.documentElement.clientHeight : 0,
		document.body ? document.body.clientHeight : 0
	);
}

function f_filterResults(n_win, n_docel, n_body) {
	var n_result = n_win ? n_win : 0;
	if (n_docel && (!n_result || (n_result > n_docel)))
		n_result = n_docel;
	return n_body && (!n_result || (n_result > n_body)) ? n_body : n_result;
}


function superPopup(args){
	// URL is the only required field. we cannot continue without it.
	if (args.url) {	var url = args.url;} else { alert('url is missing'); return; };
	
	if (args.type) { var type = args.type;};
				
	// option = (if it was passed in as an argument)? use that value : [IF NOT] use this default value;
	var directories = (args.directories)? args.directories : directories = "no";
	var location = (args.location)? args.location : location = "no";
	var menubar = (args.menubar)? args.menubar : menubar = "no";
	var resizable = (args.resizable)? args.resizable : resizable = "no";
	var scrollbars = (args.scrollbars)? args.scrollbars : scrollbars = "yes";
	var status = (args.status)? args.status : status = "yes";
	var toolbar = (args.toolbar)? args.toolbar : toolbar = "no";
	var top = (args.top)? args.top : top = "50";
	var left = (args.left)? args.left : left = "50";
	var width = (args.width)? args.width : width = "500";
	var height = (args.height)? args.height : height = "400";
	var winName = (args.winName)? args.winName : winName = "popup";
	
	/* DEFINE POPUP TYPES */
	if(type == "_blank"){	
		//created to imitate the target='_blank' behavior in html
		var randomNumber = Math.floor(Math.random()*1000);
		var winName="blank" + randomNumber; width=f_clientWidth(); height=f_clientWidth(); 
		scrollbars="yes"; menubar="yes"; toolbar="yes"; directories="yes"; 
		location="yes"; top="200"; left="400";
	} 
	
	if(type == "copyright"){
		height = "500"; width = "70"; scrollbars = "yes";
	}

	/* build our complete window options statement */
	windowOptions = "width=" + width + ", height=" + height + ", directories=" + directories + ", location=" + location + ", menubar=" + menubar + ", resizable=" + resizable + ", scrollbars=" + scrollbars + ", toolbar=" + toolbar + ", status=" + status + ", toolbar=" + toolbar + ", top='" + top + "', left='" + left + "'";
	var newWindow = window.open(url,winName,windowOptions);
	
	if (newWindow == null){
		//alert('A popup containing important information was blocked by your browser. Please enable popups for this site in order to view this information.');
	} else { 
		if (window.focus && newWindow) { newWindow.focus() }
	}
}
/* 
// End Super Popup:
*/