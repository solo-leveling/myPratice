function arrayLeaders(a){
    var sum = a.reduce((a,b)=> a+b,0);
    console.log(sum)
    var arr = [];
    for(var i =0;i<a.length;i++){
        if(a[i]>sum-a[i]){
            arr.push(a[i]);
            sum=sum-a[i];
        }
        else{sum=sum-a[i];}
    }console.log(arr)
}
arrayLeaders([-36,-12,-27]);