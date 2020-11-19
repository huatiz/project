<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../css/datepicker.css">
    <title>借用明細</title>
</head>
<body>
    <div class="container px-0">
        <?php require 'component/header_admin.php';?>
        <?php require 'component/lang.php';?>
    </div>
    
    <input type="checkbox" class="hide" id="side-menu-switch">
    <div class="supply">
        <?php require 'component/select_day.php';?>
        <div class="content-wrapper">
            <label for="side-menu-switch" class="pl-1 mb-0"><i class="fas fa-align-justify check-btn"></i></label>
            <div class="content">
                <div class="table-style">
                    <div class="table-header">
                        <h3 class="text-gray"><span class="h2">借用</span>明細</h3>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>申請日期</th>
                                <th>班級</th>
                                <th>借用者</th>
                                <th>主分類</th>
                                <th>次分類</th>
                                <th>品名</th>
                                <th>規格</th>
                                <th>顏色</th>
                                <th>單位</th>
                                <th>借用量</th>
                                <th>申請理由</th>
                                <th>領取狀態</th>
                                <th>歸還狀態</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <ul class="pagination pt-3">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
            $(function(){
                $.datepicker.regional['zh-TW'] = {
                    clearText: '清除', clearStatus: '清除已選日期',
                    closeText: '關閉', closeStatus: '取消選擇',
                    prevText: '<上一月', prevStatus: '顯示上個月',
                    nextText: '下一月>', nextStatus: '顯示下個月',
                    currentText: '今天', currentStatus: '顯示本月',
                    monthNames: ['1月','2月','3月','4月','5月','6月',
                    '7月','8月','9月','10月','11月','12月'],
                    monthNamesShort: ['一','二','三','四','五','六',
                    '七','八','九','十','十一','十二'],
                    monthStatus: '選擇月份', yearStatus: '選擇年份',
                    weekHeader: '周', weekStatus: '',
                    dayNames: ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],
                    dayNamesShort: ['周日','周一','周二','周三','周四','周五','周六'],
                    dayNamesMin: ['日','一','二','三','四','五','六'],
                    dayStatus: '設定每周第一天', dateStatus: '選擇 m月 d日, DD',
                    dateFormat: 'yy 年 mm 月 dd 日', firstDay: 7, 
                    initStatus: '請選擇日期', isRTL: false
                };
                $("#from").datepicker();
                $("#to").datepicker();
                $.datepicker.setDefaults($.datepicker.regional['zh-TW']);
            });
    </script>
    <script src="../../dist/admin.js"></script>
    <script src="../js/remaining.js"></script>
</body>
</html>