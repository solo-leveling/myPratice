/* Alter code below this line */
class Thermostat {
    constructor(thermos) {
        this._thermos = thermos;
    }
    get temperature() {
        return this._thermos;
    }
    set temperature(setTemp) {
        this._thermos = setTemp;
    }
}
/* Alter code above this line */

const thermos = new Thermostat(76); // setting in Fahrenheit scale
let temp = thermos.temperature; // 24.44 in C
console.log(temp + "                          ");
thermos.temperature = 26;
temp = thermos.temperature; // 26 in C
console.log(temp);