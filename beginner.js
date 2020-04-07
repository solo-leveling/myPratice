function paperwork(n, m) {
    var a =(n<0 || m <0) ? 0 : n*m;
    console.log(a);
  }
function past(h, m, s){
    var nh = h*(3.6e+6);
    var nm = m*60000;
    var ns = s*1000;
    console.log(nh+nm+ns);
}
var ans;
function getSum( a,b )
{
    
  if(a==b){
      return a;
  }else{
      for(var i=0;i<=b;i++){
          ans = a+b;
          a++;
      }
  }console.log(ans);
}getSum(-1,0)
