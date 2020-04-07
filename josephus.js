function josephus(items, k) {
    var len = items.length;
    var arr = [];
    var num = k;
    var temp = [];
    // for (var i = 0; i < len; i++) {
    while (items != []) {
        arr.push(items.splice(num - 1, 1));
        num += k - 1;
    }
    // }
    console.log(items);
    console.log(arr);
}
josephus([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 3);