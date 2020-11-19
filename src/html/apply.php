<!doctype html>
<html lang="zh-TW">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../css/datepicker.css">
    <title>申請耗材</title>
</head>

<body>
    <div class="container px-0">
        <?php require 'component/header_user.php';?>
        <?php require 'component/lang.php';?>    

        <div class="row justify-content-center pb-5">
            <div class="col px-5 py-4 py-md-5 col-12 col-md-10 col-lg-8 wrapper__border bg-white">
                <h3 class="text-gray mb-5 text-md-center"><span class="h1">申請</span>耗材</h3>
                <form id="submit">
                    <div class="form-row mb-4">
                        <div class="col-md-6 mb-4">
                            <select id="main-category" class="input-box form-control" required>
                                <option value="" selected disabled hidden>主分類</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-4">
                            <select id="sub-category" class="input-box form-control" required>
                                <option value="" selected disabled hidden>次分類</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-4">
                            <select id="item" class="input-box form-control" required>
                                <option value="" selected disabled hidden>品名</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-4">
                            <select id="specification" class="input-box form-control" required>
                                <option value="" selected disabled hidden>規格</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-4">
                            <select id="color" class="input-box form-control" required>
                                <option value="" selected disabled hidden>顏色</option>
                                <option>無</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row mb-md-4">
                        <div class="col-md-6 mb-4">
                            <h5 class="mb-3">剩餘量：</h5>
                            <input id="remaining" class="input-box form-control" readonly>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h5 class="mb-3">累積申請 / 上限：</h5>
                            <input id="accumulation" class="input-box form-control" readonly>
                        </div>
                    </div>
                    <div class="form-row mb-md-4">
                        <div class="col-md-6 mb-4">
                            <h5 class="mb-3">欲申請量：</h5>
                            <input type="number" min="1" id="quantity" class="input-box form-control" required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h5 class="mb-3">欲申請日期：</h5>
                            <input type="text" id="datepicker" class="input-box form-control" required>
                        </div>
                    </div>
                    <div class="form-row mb-md-4">
                        <div class="col-md-6 mb-4">
                            <h5 class="mb-3">申請理由：</h5>
                            <select id="reason" class="input-box form-control" required>
                                <option value="" selected disabled hidden> </option>
                                <optgroup label="其他">
                                    <option value="1">其他</option>
                                </optgroup>
                                <optgroup label="表演">
                                    <option value="2">期末展演</option>
                                </optgroup>
                                <optgroup label="佈置">
                                    <option value="3">角落佈置</option>
                                </optgroup>
                                <optgroup label="節日活動">
                                    <option value="4">開國紀念日活動</option>
                                    <option value="5">元宵節活動</option>
                                    <option value="6">兒童節活動</option>
                                    <option value="7">地球日活動</option>
                                    <option value="8">端午節活動</option>
                                    <option value="9">中秋節活動</option>
                                    <option value="10">國慶日活動</option>
                                    <option value="11">萬聖節活動</option>
                                    <option value="12">感恩節活動</option>
                                </optgroup>
                                <optgroup label="其他活動">
                                    <option value="13">招生說明會 / 優入說明會</option>
                                    <option value="14">主題統整活動週</option>
                                    <option value="15">寒令營活動</option>
                                    <option value="16">夏令營活動</option>
                                    <option value="17">開學活動</option>
                                    <option value="18">教學觀摩</option>
                                    <option value="19">畢業典禮</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-6 mb-4 hide" id="other-reason">
                            <h5 class="mb-3">其他申請理由：</h5>
                            <input type="text" class="input-box form-control">
                        </div>
                    </div>
                    <div class="pt-5">
                        <button type="submit" class="btn wrapper_btn w-100 bg-red text-white">提交</button>
                    </div>
                </form>
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
                $("#datepicker").datepicker();
                $.datepicker.setDefaults($.datepicker.regional['zh-TW']);
            });
        </script>
        <script src="../../dist/user_bound.js"></script>
        <script src="../js/apply.js"></script>
</body>

</html>