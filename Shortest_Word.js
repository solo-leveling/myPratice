function findShort(s) { 
   var lowest = [];var num=0;
   var arr = s.split(" ");  
    for(var i=0;i<arr.length;i++){
        lowest[i] = arr[i].length;      
    }
     console.log(lowest);
    // for(var i=0;i<lowest.length;i++){        
    //         if(true){
                num = lowest[0];
                for(var j=0;j<lowest.length;j++){
                    if(num>=lowest[j]){
                        num = lowest[j];
                    }
                }
    //         }      
    // }
      console.log(num);
}
  findShort("lam ssse ut Actually");