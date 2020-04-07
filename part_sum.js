function partsSums(ls) {
var arr = [];var num =0;var length = ls.length;

// for(var j =0;j<length;j++){    
//     for(var i =0;i<ls.length;i++){
//         num+=ls[i];
        
//     }arr.push(num);
//     num=0;
//     ls.shift();
// }
// if(ls.length==0){
//     arr.push(0);
// }
for(var i =0;i<ls.length;i++){
    num+=ls[i];
}
arr.push(num)
for(var i=0;i<ls.length;i++){
    arr.push(arr[i]-ls[i]);
}
console.log(arr)
}
partsSums([]);