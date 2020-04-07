function createPhoneNumber(numbers){
  var fnum = [];var fstring = "";
  var mnum = [];var mstring = "";var lstring = "";
  for(var i =0;i<3;i++){
  fnum.push(numbers.shift());
}
for(var i =0;i<3;i++){
    fstring+=fnum[i];
}

for(var i =0;i<3;i++){
    mnum.push(numbers.shift());
  }
  for(var i =0;i<3;i++){
      mstring+=mnum[i];
  }
 for(var i =0;i<4;i++){
      lstring+=numbers[i];
  }
console.log("("+fstring+") "+mstring+"-"+lstring)
}
// (111) 111-1111
// createPhoneNumber([1, 1, 1, 1, 1, 1, 1, 1, 1, 1]);
// function createPhoneNumber(numbers){
//     var format = "(xxx) xxx-xxxx";
    
//     for(var i = 0; i < numbers.length; i++)
//     {
//       format = format.replace('x', numbers[i]);
//     }
    
//     return format;
//   }