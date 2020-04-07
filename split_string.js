function solution(str) {
    var arr = [];
    var join = "";
    var temp = [];
    var count = 0;
    str = str.split("");
    for (var i = 0; i < str.length; i++) {
        temp.push(str[i]);
        count++;
        if (temp.length == 2 || count == str.length) {
            temp.forEach(e => {
                join += e;
            });
            if (count == str.length && count % 2 == 1) {
                join += "_";
            }
            arr.push(join);

            temp = [];
            join = "";
        }
    }
    console.log(arr);

}
solution('asdfghAasdasasd');