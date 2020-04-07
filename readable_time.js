function humanReadable(seconds) {
    var H = 0;
    var M = 0;
    var S = 0;
    for (var i = 0; i < seconds; i++) {
        S++;
        if (S == 60) {
            S = 0;
            M++;
            if (M == 60) {
                M = 0;
                H++;
            }
        }
    }
    // console.log(H.toString.length)
    if (H.toString().length == 1) {
        H = "0" + H;
    }
    if (M.toString().length == 1) {
        M = "0" + M;
    }
    if (S.toString().length == 1) {
        S = "0" + S;
    }
    console.log(H + ":" + M + ":" + S);


}
humanReadable(6);