function productArray(numbers){
var ans = [];var product = 1;
 for(var i =0;i<numbers.length;i++){
    product*=numbers[i];
 }
 for(var i=0;i<numbers.length;i++){
     ans.push(product/numbers[i]);
 }console.log(ans)
}
productArray([16,17,4,3,5,2]);