function numPrimorial(n){
   var ans = 1;var arr = [];var num=n;
if(n>3){
    arr.push(2,3,5);
        for(var i =3 ;i<num ;i++){
           
         if(i%2==0 || i%3==0 || i%5==0){
               num++;     
         }else{
             arr.push(i);
                            
        }
    }
}else{
    if(n==2){
    arr.push(2,3);
    }else if(n==3){
        arr.push(2,3,5);
    }
    else{
        arr.push(2);
    }
}console.log(arr)
for(var i =0;i<arr.length;i++){
        ans*=arr[i];
}console.log(ans);
}
  numPrimorial(18);
  // 2 3 5 7 11 13 17 23 29