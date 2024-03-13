<?php
let sum = 0;

for (let i = 1; i <= 50; i++) {
    if (i % 2 === 0) {
        sum += i;
    }
}

console.log("Сумма всех четных чисел в диапазоне от 1 до 50: " + sum);
?>