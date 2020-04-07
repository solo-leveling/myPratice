Array.prototype.numberOfOccurrences = function(a) {
    var count =0;
   for(var i =0;i<this.length;i++){
       if(this[i]==a){
        count++;
       }
   } 
   console.log(count);
   
}
var arr = [4,0,4];
arr.numberOfOccurrences("a");

    