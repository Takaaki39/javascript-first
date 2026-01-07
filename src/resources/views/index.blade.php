<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JavaScript 計算機</title>
</head>
<body>
  <h1>JavaScript 計算機</h1>
  <!-- 0～9までの数字を入力するinputを作成 -->
  <input type="number" id="number1" placeholder="0">
  <input type="number" id="number2" placeholder="0">
  <button id="add">+</button>
  <button id="subtract">-</button>
  <button id="multiply">*</button>
  <button id="divide">/</button>
  <!-- calculator.jsの関数を呼び出してresultに結果を表示する -->
  <p id="result">結果：</p>
    
</body>
</html>

<!-- ① 先に calculator.js を読み込む -->
  <script src="js/calculator.js"></script>

  <!-- ② その後で使う -->
  <script>
    const number1 = document.getElementById('number1');
    const number2 = document.getElementById('number2');
    const result = document.getElementById('result');

    document.getElementById('add').addEventListener('click', () => {
      result.textContent = '結果：' +
        add(number1.value, number2.value);
    });

    document.getElementById('subtract').addEventListener('click', () => {
      result.textContent = '結果：' +
        subtract(number1.value, number2.value);
    });

    document.getElementById('multiply').addEventListener('click', () => {
      result.textContent = '結果：' +
        multiply(number1.value, number2.value);
    });

    document.getElementById('divide').addEventListener('click', () => {
      result.textContent = '結果：' +
        divide(number1.value, number2.value);
    });
  </script>