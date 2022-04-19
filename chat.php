<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/jquery-ui.css">
    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/chat.js"></script>
    <script src="./js/jquery-ui.js"></script>
</head>
<body>
<body>
    <div class='logoutframe' style="display: none;">
        <p class="validateTips">提示:是否要登出?</p>
        <div>
            <a href="index.php" onclick="delCookie('name'),delCookie('user_incession')">確認</a>
            <a onclick="$('.logoutframe').dialog('close')" style="cursor: pointer;">取消</a>
        </div>
    </div>
    <?php include 'php/header_bar.php';?>

    <div>
        <div id='chatList'>List</div>
        <div id='chatContainer'>
            <div id='chatHeadBar'>Head</div>
            <div id='chatContent'>Content</div>
            <div>
                <input type="text" name="msg" id="msg">
                <button onclick="set_chat_msg()">傳送</button>
            </div>
        </div>
    </div>
</body>
</html>