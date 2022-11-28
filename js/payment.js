
//function to show image acording to the venue name

	function showImage()
	{
		var venue=document.getElementById("venue").innerHTML;
		if (venue=='Ivy')
		{
			document.getElementById("reservImg").src = "images/ivy.png";
		}
		
		else if (venue=='Oak Room')
		{
			document.getElementById("reservImg").src = "images/oak room.png";
		}
		
		else if (venue=='Pool Terrace')
		{
			document.getElementById("reservImg").src = "images/poolterrace2.png";
		}
		
		else if(venue=='Outdoor')
		{
			document.getElementById("reservImg").src = "images/outdoor2.png";
		}
	}

//function to show card 
    function showCard(name)
	{
		if (name=="visa")
		{	
			
			document.getElementById("image").src = "images/visa.png";

			document.getElementById("cardTbl").style.display = "block";  
			document.getElementById("cardTbl").style.backgroundColor = "#6495ED"; 
		}
		
		else if (name=="master")
		{
			document.getElementById("image").src = "images/master.jpg";
			document.getElementById("cardTbl").style.display = "block";
			document.getElementById("cardTbl").style.backgroundColor = "#FA8072"; 
			 
			
		}
		
		else if (name=="american")
		{
			document.getElementById("image").src = "images/american.jpg";
			document.getElementById("cardTbl").style.display = "block";
			document.getElementById("cardTbl").style.backgroundColor = "#00FFFF"; 
			
			
		}
		
		else if (name=="discover")
		{
			document.getElementById("image").src = "images/discover.png";
			document.getElementById("cardTbl").style.display = "block";
			document.getElementById("cardTbl").style.backgroundColor = "#FFA07A"; 
			 
			
		}
		
		else
		{
			alert("Invalid!");
		}
	}
	

//function to show card details
	function showDetail(name)
	{
		if (name=="holder")
		{	
			
			var value=document.getElementById("holder").value;
			document.getElementById("holderName").innerHTML = value;
		}
		
		else if (name=="cardNum")
		{
			
			var value=document.getElementById("cardNum").value;
			document.getElementById("cardNumber").innerHTML = value;
			document.getElementById("cardError").innerHTML = "";
			 
			
		}
		
		else if (name=="cvc")
		{
			
			var value=document.getElementById("cvc").value;
			document.getElementById("cvcNumber").innerHTML = value;
			
			
		}
		
		else if (name=="month" || name=="year")
		{
			
			var value1=document.getElementById("month").value;
			var value2=document.getElementById("year").value;
			document.getElementById("date").innerHTML = value1 + "/" + value2;
			 
			
		}
		
		else
		{
			alert("Invalid!");
		}
	}
	
	//function to validate credit card number
	function validation(){
		
		var card =document.getElementById("cardNum").value;
		
		
		if(document.getElementById("visa").checked==true)
		{
			if(card[0]== 4 && (card.length==13 || card.length==16))
			{
				return true;
			}
			
			else
			{	
				document.getElementById("cardError").innerHTML = "Invalid card type";
				return false;
			}
		}
		
		else if(document.getElementById("master").checked==true)
		{
			if(card[0]== 5 && (card[1]== 1 || card[1]== 2|| card[1]== 3 || card[1]== 4||card[1]== 5) && card.length==16)
			{
				return true;
			}
			
			else
			{
				document.getElementById("cardError").innerHTML = "Invalid card type";
				return false;
			}
		}
		
		else if(document.getElementById("american").checked==true)
		{
			if(card[0]== 3 && (card[1]== 4 || card[1]== 7) && card.length==15)
			{
				return true;
			}
			
			else
			{
				document.getElementById("cardError").innerHTML = "Invalid card number";
				return false;
			}
		}
		
		else if(document.getElementById("discover").checked==true)
		{
			if(card[0]==5 && card.length==15)
			{
				return true;
			}
			
			else if(card[0]==6 && card[1]==0 && card[2]==1 && card[3]==1 && card.length==15)
			{
								
				return true;
				
			}
			
			else
			{
				document.getElementById("cardError").innerHTML = "Invalid card type";
				return false;
				
			}
		}
		
		else
		{		
			alert("Please select Payment Option");
			return false;

		}		

	}
	//function to clear form data
	function clearAll()
	{
		document.getElementById("cardError").innerHTML = "";
		document.getElementById("cardTbl").style.display = "none";
		document.getElementById("holderName").innerHTML = "";
		document.getElementById("cardNumber").innerHTML = "";
		document.getElementById("cvcNumber").innerHTML = "";
		document.getElementById("date").innerHTML = "";
	}
	
