function minimumSteps(numbers, value){
    var sum =0;var count=1;var num = 1;
    var min = numbers.sort(function(a,b){return a-b});
    console.log(min)
    sum = numbers[0]+numbers[1];
    if(sum<=value){
    for(var i =2;i<numbers.length+1;i++){
        if(sum>=value){
            console.log(count);
        }else{
            ++count;
            sum+=numbers[i];
        }
    }
        }else{
        console.log(--count);
    }
  }
  minimumSteps([4,6,3], 2);