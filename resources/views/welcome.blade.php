<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

         <!-- 引入自定義的 JavaScript 文件 -->
         <script src="{{ asset('js/test.js') }}"></script>

    </head>
    <body class="antialiased">

        <input type="text" class="test_text" > </br></br></br>

        <h1 class="test_title">test1111</h1></br></br></br>

        <input type="button" onclick="testdom('這是第1個');" value="Click1">
        <input type="button" onclick="testdom('這是第2個');" value="Click2">
        <input type="button" onclick="testdom('這是第3個');" value="Click3">
    </body>
</html>
