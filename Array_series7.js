function nthSmallest(arr, pos){
  var min = arr.sort(function(a,b){return a-b});
  console.log(arr[pos-1]);
}
nthSmallest([2,169,13,-5,0,-1],4);