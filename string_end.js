function solution(str, ending) {
    if (ending != "") {
        var temp = null;
        var length = 0;
        len = ending.length;
        temp = str.slice("-" + len);
        console.log(temp === ending)
    } else {
        console.log('true');
        // return true;
    }
}
solution('abcde', '')