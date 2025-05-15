<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8">
  <title>WebVTT 章節建立器</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    body {
          font-family: Arial, sans-serif;
          padding: 20px;
        }
        table {
          border-collapse: collapse;
          margin-bottom: 10px;
        }
        td {
          padding: 5px 10px;
          vertical-align: middle;
        }
        input[type="number"] {
          width: 60px;
          padding: 5px;
          text-align: center;
        }
        input[type="text"] {
          width: 250px;
          padding: 5px;
        }
        #result {
          margin-top: 20px;
          white-space: pre-wrap;
          background: #f8f8f8;
          padding: 10px;
          border: 1px solid #ccc;
        }
  </style>
</head>
<body>

  <h1>WebVTT 章節新增工具</h1>

  <table>
    <tr>
      <td><label for="start">開始時間</label></td>
      <td><label for="start">結束時間</label></td>
      <td><label for="start">章節名稱</label></td>
      <td><label for="start"></label></td>
    </tr>
    <tr>
        <td>
            <input type="number" id="start-h" min="0" max="99" placeholder="時" value="00"> :
            <input type="number" id="start-m" min="0" max="59" placeholder="分" value="00"> :
            <input type="number" id="start-s" min="0" max="59" placeholder="秒" value="00"> .
            <input type="number" id="start-ms" min="0" max="999" placeholder="毫秒" value="0000">
        <!-- <input type="text" id="start" placeholder="例如 00:00:01.000"> -->
        </td>
        <td>
            <input type="number" id="end-h" min="0" max="99" placeholder="時" value="00"> :
            <input type="number" id="end-m" min="0" max="59" placeholder="分" value="00"> :
            <input type="number" id="end-s" min="0" max="59" placeholder="秒" value="00"> .
            <input type="number" id="end-ms" min="0" max="999" placeholder="毫秒" value="0000">
            <!-- <input type="text" id="end" placeholder="例如 00:00:05.000"> -->
        </td>
      <td><input type="text" id="title" placeholder="例如 開場介紹"></td>
      <td><button id="addBtn">新增章節</button></td>
    </tr>
  </table>

  <h1>OR</h1>

  <table>
    <tr>
      <td><label for="start">開始時間</label></td>
      <td><label for="start">結束時間</label></td>
      <td><label for="start">章節名稱</label></td>
      <td><label for="start"></label></td>
    </tr>
    <tr>
        <td>
          <input type="text" id="start" placeholder="例如 00:00:01.000">
        </td>
        <td>
            <input type="text" id="end" placeholder="例如 00:00:05.000">
        </td>
      <td><input type="text" id="title1" placeholder="例如 開場介紹"></td>
      <td><button id="addBtn1">新增章節</button></td>
    </tr>
  </table>

  

  <h2>WebVTT 輸出</h2>
  <div id="result">WEBVTT</div>

  <script>
    function formatTime(h, m, s, ms) {
      const pad = (n, z = 2) => String(n).padStart(z, '0');
      return `${pad(h)}:${pad(m)}:${pad(s)}.${pad(ms, 3)}`;
    }

    $(document).ready(function () {
      $('#addBtn').click(function () {
        const start = formatTime(
          $('#start-h').val() || 0,
          $('#start-m').val() || 0,
          $('#start-s').val() || 0,
          $('#start-ms').val() || 0
        );

        const end = formatTime(
          $('#end-h').val() || 0,
          $('#end-m').val() || 0,
          $('#end-s').val() || 0,
          $('#end-ms').val() || 0
        );

        const title = $('#title').val().trim();

        if (!title) {
          alert("請輸入章節名稱！");
          return;
        }

        const block = `\n\n${start} --> ${end}\n${title}`;
        $('#result').append(block);

        // 清空欄位
        // $('input[type="number"]').val('');
        // $('#title').val('');
      });

      $('#addBtn1').click(function () {
        const start = $('#start').val().trim();
          const end = $('#end').val().trim();
          const title = $('#title').val().trim();

          if (!start || !end || !title) {
            alert("請填寫所有欄位！");
            return;
          }

          const block = `\n\n${start} --> ${end}\n${title}`;
          $('#result').append(block);

          // 清空欄位
          // $('#start').val('');
          // $('#end').val('');
          // $('#title').val('');
      });
    });
  </script>

</body>
</html>
