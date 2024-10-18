function przeslij() {
	let regulamin = document.getElementById("regulamin").checked;
	if (regulamin) {
		let odpowiedz = document.getElementById("odpowiedz");
		let imie = (document.getElementById("imie").value).toUpperCase();
		let nazwisko = (document.getElementById("nazwisko").value).toUpperCase();
		let zgloszenie = document.getElementById("zgloszenie").value;
		odpowiedz.innerHTML = "<span style='color: navy'>" + imie + " " + nazwisko + "<br/>" + "Treść Twojej sprawy: " + zgloszenie + "</span>";
	} else {
		odpowiedz.innerHTML = "<span style='color: red;'>Musisz zapoznać się z regulaminem</span>";
	}
}