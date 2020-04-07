function XO(str) {
    var xnum=0;var onum=0;var smth=0;
    for(let i =0;i<str.length;i++){
        if(str[i]=="x"||str[i]=="X")
        xnum++;
        else if(str[i]=="o"||str[i]=="O")
        onum++;
        else
        smth++;
    }
    if(xnum>0 && onum>0 && smth!=0 && xnum==onum){
        console.log(true);
    }
    else if((xnum!=0 && onum!=0)&&xnum==onum){
        console.log(true);
    }
    else if(xnum==0 && onum ==0){
        console.log(true);
    }
    else{
        console.log(false);
    }
}
XO("zzoo");