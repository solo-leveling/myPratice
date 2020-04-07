
function longestConsec(strarr, k) {
if(strarr.length==0 || k>strarr.length || k<=0){
        console.log( "");
}else{
var arrNum = [];var num=0;var str="";var count = 0;var ansNum=0;var ansStr="";
for(var i = 0 ; i<strarr.length ; i++){
     arrNum.push(strarr[i].length);
}
if(k != 1){
for(var j = 0 ; j<strarr.length;j++){    
    num += arrNum[j];
    str += strarr[j];
    count++;
    if(count==k){       
        ansStr = str; 
        if(num>ansNum)ans = ansStr;              
        str = "";
        ansNum = num;     
        num = 0;   
        
        count=0;
        j--;    
    }        
}
console.log( ans);
}else{
    var ansNum=0;var ansStr="";var ans="";
    for(var i = 0;i<strarr.length;i++){
        num = arrNum[i];
        str = strarr[i];
        if(num>ansNum)ans = str;
        str="";ansNum=num;
        num=0;
    }console.log( ans);
}
}
}
longestConsec(["itvayloxrp","wkppqsztdkmvcuwvereiupccauycnjutlv","vweqilsfytihvrzlaodfixoyxvyuyvgpck"], 2);
