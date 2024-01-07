
<html>

<head>
    <link rel="stylesheet" href="https://satosis.github.io/html-chinesetest/css/phone.css" type="text/css">
	<link rel="Shortcut   Icon" href="https://old.chinesetest.cn/image/zh/favicon.ico">
    <style type="text/css">
        @font-face {
            font-weight: 400;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2') format('woff2');
        }

        @font-face {
            font-weight: 700;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
        }
    </style>
</head>

<body>
    <div class="well-sm">

        <center>
            <h2>汉语考试成绩在线验证结果查询</h2>
            <h4>汉考国际教育科技（北京）有限公司（CTI）</h4>
        </center>
        <div class="panel panel-default">
            <div class="well-lg">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-body">
                        Information of test taker
                    </div>
                    <!-- Table -->
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="active text-right">Name on Certificate </td>
                                <td>{{ $user->name }}</td>
                                <td rowspan="5" width="100px"><img src="https://satosis.github.io/html-chinesetest{{ $user->avatar }}" height="200px"></td>
                            </tr>
                            <tr>
                                <td class="active text-right">Chinese Name</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="active text-right">Nationality</td>
                                <td>越南</td>
                            </tr>
                            <tr>
                                <td class="active text-right">Gender</td>
                                <td>{{ $user->sex }}</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="" style="font-size:14px;">考试信息</td>
                            </tr>
                            <tr>
                                <td class="active text-right">考点名称</td>
                                <td colspan="2">越南胡志明市师范大学（网考）</td>
                            </tr>
                            <tr>
                                <td class="active text-right">Ticket No.</td>
                                <td colspan="2">{{ $user->sbd }}</td>
                            </tr>
                            <tr>
                                <td class="active text-right">证书编号</td>
                                <td colspan="2">{{ $user->certificate_no }}</td>
                            </tr>
                            <tr>
                                <td class="active text-right">Test Type</td>
                                <td colspan="2">{{ $user->level }}</td>
                            </tr>
                            <tr>
                                <td class="active text-right">Test Time</td>
                                <td colspan="2">{{ $user->date }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="panel panel-default">
                    <div class="panel-body">
                        {{ $user->level }}({{ $user->date }})中文水平考试
                    </div>
                    <!-- Table -->
                    <table class="table table-bordered">
                        <thead>
                            <tr class="active">
                                <th>
                                    <div align="center">听力</div>
                                </th>
                                <th>
                                    <div align="center">阅读</div>
                                </th>
                                @if($user->level !='HSK二级')
                                    <th>
                                        <div align="center">写作</div>
                                    </th>
                                @endif
                                <th>
                                    <div align="center">Total Score</div>
                                </th>
                                <th>
                                    <div align="center">Status</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center">
                                    {{ $user->listening_point }}
                                </td>
                                <td align="center">
                                    {{ $user->reading_point }}
                                </td>
                                @if($user->level !='HSK二级')
                                <td align="center">
                                    {{ $user->writting_point }}
                                </td>
                                @endif
                                <td align="center">
                                    @if($user->level !='HSK二级')
                                        {{ $user->listening_point + $user->reading_point + $user->writting_point }}
                                    @else
                                        {{ $user->listening_point + $user->reading_point }}
                                    @endif
                                </td>
                                <td align="center">合格</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @if($user->level !='HSK二级')
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-body">
                            HSKK（中级）({{ $user->date }})中文水平考试
                        </div>
                        <!-- Table -->
                        <table class="table table-bordered">
                            <thead>
                                <tr class="active">
                                    <th>
                                        <div align="center">口试</div>
                                    </th>
                                    <th>
                                        <div align="center">Total Score</div>
                                    </th>
                                    <th>
                                        <div align="center">Status</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="center">
                                        {{ $user->speaking_point }}
                                    </td>
                                    <td align="center">{{ $user->speaking_point }}</td>
                                    <td align="center">{{ $user->status }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endif
                <center>
                    <h6>最终解释权归汉考国际所有</h6>
                </center>
            </div>
        </div>

    </div>
    <div id="loom-companion-mv3" ext-id="liecbddmkiiihnedobmlmillhodjkdmb">
        <section id="shadow-host-companion"></section>
    </div>
</body>

</html>
