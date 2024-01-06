
<html>

<head>
    <style type="text/css">
        * {
            font-size: 13px;
            font-weight: bold;
        }
       #layer_2 {
            width: 750px;
            position: absolute;
            top: 45%;
            left: 35%;
            transform: translate(-50px, -50px);
        }
        a {
            text-decoration: none;
            color: #000
        }
        #kaoshengchengjicxa {
            background-image: url("https://old.chinesetest.cn/css/image_1/kaoshengchengjicx120_es.jpg");
            background-repeat: no-repeat;
            height: 37px;
            width: 181px;
            display: block;
            font-size: 14px;
            line-height: 37px;
            text-align: center;
        }
        #chengjichaxun_body_zh_CN {
            height: 140px;
            width: 435px;
            background-image: url("https://old.chinesetest.cn/css/image_1/chengjichaxun_body_zh_CN.jpg");
            background-repeat: no-repeat;
            padding-top: 25px;
            padding-right: 28px;
            padding-bottom: 10px;
            padding-left: 20px;
            text-align: left;
        }

        #modify_bnt {
            background-image: url("https://old.chinesetest.cn/css/image_6/bnt_bg-1.jpg");
            background-repeat: no-repeat;
            border-style: none;
            border-width: 0;
            color: #FFFFFF;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            height: 30px;
            line-height: 30px;
            width: 80px;
            margin-top: 30px;
        }

        .text {
            width: 150px;
            height: 22px;
            border: 1px solid #CCCCCC;
            background: #fff;
        }
    </style>
</head>

<body>
<form method="post" name="queryZsForm" id="queryZsForm">
    @csrf
    <div id="layer_2" style="visibility: visible;">
        <div id="chengji_biaoqian" style="margin-top: 5px;">
            <div id="kaoshengchengjicxa">
                <a href="javascript:void(0);">Score</a>
            </div>
        </div>
        <div id="chengjichaxun_body_zh_CN" style="margin-top: -3px;">
            <table>
                <tbody>
                    <tr>
                        <td>Ticket No.</td>
                        <td><input name="zid" maxlength="40" type="text" class="text"></td>
                        <td>Name</td>
                        <td><input name="name" maxlength="40" type="text" class="text"></td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" value="Enquiry" id="modify_bnt">
        </div>
    </div>
</form>
</body>

</html>
