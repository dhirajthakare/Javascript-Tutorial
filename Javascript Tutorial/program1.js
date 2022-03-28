function myFunction(n,arr){
	
	var maxEven = [];
	var  maxOdd = [];
	if(n<=3){
		return 0;
	}

	var evencount = 0;
	var oddcont = 0;
	for(var i =0 ;i<n; i++){

	if(i%2 == 0){
	    
	    alert("event");
		maxEven[evencount] = arr[i];
        evencount++;
	    
	}else{
	    
	     alert("odd");
          maxOdd[oddcont] = arr[i];
          oddcont++;
	    
	    
	}
	
	}
    
    maxEven.sort(function(a, b){return a - b});
     maxOdd.sort(function(a, b){return a - b});

// 	 cout<<"value "<<maxEven[1]<<endl;

     return maxEven[evencount-2] + maxOdd[1];
}