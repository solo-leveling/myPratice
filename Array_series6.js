function maxTriSum(numbers){
    var max = numbers.sort(function(a,b){return b-a});var arr=[];var ans=0;
    for(var i =0;i<numbers.length;i++){
        if(arr.indexOf(numbers[i])==-1){
            arr.push(numbers[i]);
        }
    }
    for(var i=0;i<3;i++){
        ans+=arr[i];
    }console.log(ans);
}
  maxTriSum([3,2,6,8,2,3]);