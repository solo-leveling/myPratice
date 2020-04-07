function nbYear(p0, percent, aug, p) {
    var ans = 0;
    var count = 0;
    while (p0 < p) {
        ans = p0 + p0 * percent / 100 + aug;
        p0 = ans;
        ans = 0;
        count++;
    }
    console.log(count);
}
nbYear(1500, 5, 100, 5000);