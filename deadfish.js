function parse( data ){
var arr = [];var num =0;    
for(var j = 0;j<data.length;j++){
    switch(data[j]){
        case "i":
            num=num+1;
            break;
        case "s":
            num=num*num;
            break;
        case "d":
            num=num-1;
            break;
        case "o":
            arr.push(num);
            break;
    }
}console.log(arr)
}
parse("iiisxxxdoso");