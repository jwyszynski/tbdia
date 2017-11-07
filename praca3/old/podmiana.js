function podmiana(co) {
	//var ile = document.getElementById("wybor").options.length;
	var ile = 3;
	for(var i=1; i<=ile; i++) {
	var ktora = "w"+i;
	if(ktora == co) {
	document.getElementById(ktora).style.display = "block";
	}
	else if(ktora != co) {
	document.getElementById(ktora).style.display = "none";
	}}}
	