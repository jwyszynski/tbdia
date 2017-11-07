function podmiana(co) {
	var ile = 5;
	for(var i=1; i<=ile; i++) {
	var ktora = "w"+i;
	if(ktora == co) {
	document.getElementById(ktora).style.display = "block";
	}
	else if(ktora != co) {
	document.getElementById(ktora).style.display = "none";
	}}}
	