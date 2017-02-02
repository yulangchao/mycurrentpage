function myFunction(aaaa) {
        var division1=Number(document.getElementById("division1").value);
	      var division2=Number(document.getElementById("division2").value);
	      var level1=Number(document.getElementById("level1").value);
	      var level2=Number(document.getElementById("level2").value);
	      //check valid 
      	var count1=division1+level1-1;
				var count2=division2+level2-1;
				
	     if(division2==26){
						 document.getElementById("level2").selectedIndex = "5";
				     document.getElementById("level2").disabled=true;
			 }else{
					   document.getElementById("level2").disabled=false;			 
			 }
		
	      if(!(division1==0 || division2==0 || level1==0 || level2==0)){
									if(count2<count1){
	                	document.getElementById("pp").innerHTML="Input the correct division or level";
	          			}else{
									var final=calculate(count1,count2);
                   document.getElementById("pp").innerHTML= final;
									}
				}
}

var list=[30,30,30,30,35,35,35,35,35,40,50,50,50,50,60,80,80,80,80,100,120,150,190,240,300,0,0,0,0];

function calculate(count1,count2){
	if (count2>26){
		    count2=26;
	}
	var src=count1-1;
	var dest=count2-2;
	var money=0;
	for (var i=src; i<=dest;i++){
       money+=list[i];		  
	}
	var total=count2-count1;
	return  "The total division is "+total+" , and the total fee is $"+ money+", ¥"+ money*6.8+ "! <br>If pay by US dollar, please use the paypal: 346443922@qq.com.";
	
	
	
}
