
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "sarees"){
		var optionArray = ["|","designer|Designer Saree","kanchi_pattu|Kanchi pattu","uppada|Uppada","kuppadam|Kuppadam"];
	} else if(s1.value == "kids_fashions"){
		var optionArray = ["|","frocks|Frocks","long_Frocks|Long Frocks","lehengas|Lehengas","boys_kuthas|Boys Kuthas","boys_dothis|Boys Dothis"];
	} else if(s1.value == "fabric"){
		var optionArray = ["|","lehengas|Lehengas","sarees|Sarees","blouses|Blouses"];
	}
	  else if(s1.value == "dresses"){
		var optionArray = ["|","anarkalis|Anarkalis","dress_materials|Dress Materials","long_frocks|Long Frocks"];
	} else if(s1.value == "lehengas"){
		var optionArray = ["|","pavadas|Pavadas","crop_top_lehengas|Crop Top Lehengas"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}