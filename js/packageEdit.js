//function to clear form data
function clearAll()
{
	document.getElementById("packageName").innerHTML = "";
	document.getElementById("packageDetails").innerHTML = "";
	document.getElementById("packagePrice").innerHTML = "";
	document.getElementById("packagePicture").innerHTML = "";
	document.getElementById("uploadedImage").style.display = "none";
	document.getElementById("packageBrocher").innerHTML = "";
}	

//function to show uploded image when update
function showImage(event){
	if(event.target.files.length > 0)
	{
		var src = URL.createObjectURL(event.target.files[0]);
		var preview = document.getElementById("uploadedImage");
		preview.src = src;
		preview.style.display = "block";
	}
}

//function to show image preview
function changeImage(event)
{
	if(event.target.files.length > 0)
	{
		var src = URL.createObjectURL(event.target.files[0]);
		var preview = document.getElementById("newUploadedImage");
		preview.src = src;
		preview.style.display = "block";
		var oldPic= document.getElementById("oldPic");
		oldPic.style.display = "none";
	}
}
//function to hide old brocher when update
function changeBrocher(event)
{
	var broch= document.getElementById("oldBroch");
	broch.style.display = "none";
}	

//function to change between package form and edit package form
function cancelForm()
{
	document.getElementById("packageform").style.display = "block";
	document.getElementById("EditPackageform").style.display = "none";
}	
	
  
