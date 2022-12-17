
// Challenge 1:
console.log("*********** Challenge 1 ****************")

function countNumberOne(str) {
    const one = str.split("0").filter(element => element.includes("1"));
    return one.length;
}

console.log(countNumberOne("011011110110011"));


// Challenge 2:
console.log("*********** Challenge 2 ****************")

digits = "1297126411456789301292"
let str = ""
let newArray = []

for (let i = 1; i <= digits.length; i++) {
    if (digits[i - 1] == digits[i] - 1) {
        if (str == "") {
            str += digits[i - 1]
            str += digits[i]
        } else {
            str += digits[i]
        }
    }
    else {
        newArray.push(str);
        str = ""
    }
}

let result = newArray.reduce((r, e) => r.length < e.length ? e : r, "");
console.log(result)



console.log("*********** Challenge 3 ****************")
// Challenge 3:
function isTimeValid(time) {
    const regex = /^([01]\d|2[0-3]):([0-5]\d)$/;
    return regex.test(time);
}

console.log(isTimeValid("05:55"));
console.log(isTimeValid("33:18"));



