const add = (a, b) => {
    return Number(a) + Number(b);
};

const subtract = (a, b) => {
    return Number(a) - Number(b);
};

const multiply = (a, b) => {
    return Number(a) * Number(b);
};

const divide = (a, b) => {
    if (b === 0) {
        return "Error: Division by zero";
    }
    return Number(a) / Number(b);
};

console.log(add(1, 2));
console.log(subtract(1, 2));
console.log(multiply(1, 2));
console.log(divide(1, 2));
console.log(divide(1, 0));
