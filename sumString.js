// function sumStrings(a, b) {
//     // var c = BigInt(a) + BigInt(b);
//     // console.log(c.toLocaleString('fullwide', { useGrouping: false }));
//     if (a != "" && b != "") {
//         console.log((BigInt(a) + BigInt(b)).toLocaleString('fullwide', { useGrouping: false }));
//     } else {
//         if (a == "") return (parseInt(b).toString());
//         if (b == "") return (parseInt(a).toString());
//     }
// }
// //712577413488402631964821329
// sumStrings('712569312664357328695151392', '8100824045303269669937');

function sumStrings(a, b) { // sum for any length
    function carry(value, index) { // cash & carry
        if (!value) { // no value no fun
            // leave shop
        }
        this[index] = (this[index] || 0) + value; // add value
        if (this[index] > 9) { // carry necessary?
            carry.bind(this)(this[index] / 10 | 0, index + 1); // better know this & go on
            this[index] %= 10; // remind me later
        }
    }
    var array1 = a.split('').map(Number).reverse(), // split stuff and reverse
        array2 = b.split('').map(Number).reverse(); // here as well
    array1.forEach(carry, array2); // loop baby, shop every item
    console.log(array2.reverse().join('').replace(/^0+/, '')); // return right ordered sum
}
sumStrings('00103', '08567');