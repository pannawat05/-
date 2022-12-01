
function toggle(){
	const toggle = document.getElementByClassName('.container')

	if(toggle.className == "container"){
		toggle.classlist.add('mobile')
	}else{
		toggle.classlist.remove('mobile')
	}


}

  
