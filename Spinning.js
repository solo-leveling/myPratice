function spinWords(para){
    var word =para.split(" ");var string="";
    for(var i = 0;i<word.length;i++){        
        if(word[i].length >= 5){
            for(var j=word[i].length-1;j>=0;j--){
               string+=word[i][j];
            }
            word[i]=string;
            string="";
        }      
    }var ans = word.toString().replace(/,/g," ");
    console.log(ans);
}
spinWords("Hey fellow warriors");