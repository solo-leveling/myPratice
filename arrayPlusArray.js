
function arrayPlusArray(arr1, arr2) {
    var number = null;var number1 = null;
    for(var i =0;i<arr1.length;i++){
        number += arr1[i];
    }
    for(var i =0;i<arr2.length;i++){
        number1 += arr2[i];
    }
    console.log(number+number1);
}
arrayPlusArray([200,100,200],[100,150,5]);