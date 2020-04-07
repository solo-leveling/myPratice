function thirt(n) {
    var arr = [];
    var foo = ("" + n).split("");
    var len = foo.length;
    console.log(foo)
    for (var i = len - 1; i >= 0; i--) {
        arr.push(foo[i]);
    }
    // 7654321 


}
thirt(1234567);