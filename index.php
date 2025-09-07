<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ボタンのサンプル</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <button id="ok-button" class="btn green">OK</button>
    <p>ボタンをおしてください</p>
</div>

<script>
    document.getElementById('ok-button').addEventListener('click', function() {
        this.classList.remove('green');
        this.classList.add('blue');
    });
</script>

</body>
</html>