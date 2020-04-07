function minSum(arr) {
    var multi = [];
    var sum = 0;
    var count = 0;
    var sort = arr.sort(function(a, b) { return a - b; });
    var first = [];
    var end = [];
    first = sort.slice(0, sort.length / 2);
    end = sort.slice(sort.length / 2);
    count = end.length;
    console.log(sort);
    console.log(first);
    console.log(end);
    for (var i = 0; i < first.length; i++) {

        multi.push(first[i] * end[count - 1]);
        count--;

    }
    console.log(multi);
    for (var i = 0; i < multi.length; i++) {
        sum += multi[i];
    }
    console.log(sum)
}
minSum([5, 4, 2, 3])