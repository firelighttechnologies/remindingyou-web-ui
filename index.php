<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
:root{
	--color1: #BBD9DF;
	--color2: #0A2A58;
	--color3: #4CA8E2;
	--color4: #5FBFDA;
}
@media screen and (max-width:400px){
header {
    font-size: 2em;
    text-align: center;
}
footer {
    font-size: .7em;
    text-align: center;
}
}
	
@media (max-width:830px) and (min-width:400px){
header {
    font-size: 3em;
    text-align: center;
}
footer {
    font-size: 1.4em;
    text-align: center;
}
body {
	font-size: 1em;
}
}
	
@media (min-width:830px){
	header {
    font-size: 4em;
    text-align: center;
}
footer {
    font-size: 1.5em;
    text-align: center;
}
body {
	font-size: 2em;
}
}
	
	
body {
    background-color: var(--color1);
    color: var(--color2);
	text-align: center;
	margin: 0px;
	padding: 0px;
}
label {
    background-color: var(--color3);
    padding: 5px;
    border-radius: 10px;
}
header {
    background-color: var(--color2);
    color: var(--color4);
}
footer {
    background-color: var(--color4);
    color: var(--color2);
}
.row {
    padding: 5px;
}
input[type="button"]{
	text-align:center;	
}	




</style>
</head>

<body>
	<header>Reminding You</header>
	<nav></nav>
	<div class="main">
		<div class="row"><label>Date</label>
			<input name="ddate" type="datetime-local" id="ddate" tabindex="0">
		</div>
		<div class="row">
			<label>Phone</label>
			<input name="phone" type="text" id="phone" tabindex="1">
		</div>
		<div class="row">
			<label>Message</label><textarea name="msg" maxlength="160" id="msg" tabindex="2"></textarea></div>
	  		<div class="ad"></div>
		</div>
		<div class="row"><input name="Schedule" type="button" id="Schedule" tabindex="3" value="Schedule">
		</div>
	<footer>&copy;2018 Firelight Technologies</footer>
</body>
</html>