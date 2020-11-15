<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <title>耗材剩餘</title>
</head>
<body>
    <div class="container px-0">
        <?php require 'component/header_admin.php';?>
        <?php require 'component/lang.php';?>
    </div>
    
    <input type="checkbox" class="hide" id="side-menu-switch">
    <div class="supply">
        <nav class="sidebar">
            <h3 class="sidebar-header py-4 border-bottom my-0">耗材選擇</h3>
            <label class="py-4 border-bottom d-block"><input type="checkbox" id="all-checked" class="mr-2">全選</label>
            <ul class="list-unstyled components">
                <li>
                    <label href="#mainMenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">美術用品</label>
                    <ul class="collapse list-unstyled" id="mainMenu1">
                        <li>
                            <label href="#subMenu1-1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">書寫</label>
                            <ul class="collapse" id="subMenu1-1">
                                <li><label><input type="checkbox" class="mr-2">大三角學習鉛筆大三角學習鉛筆</label></li>
                                <li><label><input type="checkbox" class="mr-2">粉蠟筆</label></li>
                            </ul>
                        </li>
                        <li>
                            <label href="#subMenu1-2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">布製</label>
                            <ul class="collapse" id="subMenu1-2">
                                <li><label><input type="checkbox" class="mr-2">蠟筆</label></li>
                                    <li><label><input type="checkbox" class="mr-2">色紙</label></li>
                            </ul>
                        </li>
                        <li>
                            <label href="#subMenu1-3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">紙類</label>
                            <ul class="collapse" id="subMenu1-3">
                                <li><label><input type="checkbox" class="mr-2">蠟光色紙</label></li>
                                 <li><label><input type="checkbox" class="mr-2">書面紙</label></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                        <label href="#mainMenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">烹飪用品</label>
                        <ul class="collapse list-unstyled" id="mainMenu2">
                            <li>
                                <label href="#subMenu2-1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">免洗餐具</label>
                                <ul class="collapse" id="subMenu2-1">
                                    <li><label><input type="checkbox" class="mr-2">免洗便當盒</label></li>
                                    <li><label><input type="checkbox" class="mr-2">吸管（細）透直條色</label></li>
                                </ul>
                            </li>
                            <li>
                                <label href="#subMenu2-2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">廚具</a>
                                <ul class="collapse" id="subMenu2-2">
                                    <li><label><input type="checkbox" class="mr-2">塑膠砧板</label></li>
                                </ul>
                            </li>
                        </ul>
                </li>
                <li>
                        <label href="#mainMenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">文書用品</label>
                        <ul class="collapse list-unstyled" id="mainMenu3">
                            <li>
                                <label href="#subMenu3-1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">裝訂類</label>
                                <ul class="collapse" id="subMenu3-1">
                                    <li><label><input type="checkbox" class="mr-2">訂書針（一般文書）</label></li>
                                    <li><label><input type="checkbox" class="mr-2">小型單孔打動器</label></li>
                                </ul>
                            </li>
                            <li>
                                <label href="#subMenu3-2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">黏貼用品</label>
                                <ul class="collapse" id="subMenu3-2">
                                    <li><label><input type="checkbox" class="mr-2">A4電腦標籤</label></li>
                                    <li><label><input type="checkbox" class="mr-2">晶晶膠帶</label></li>
                                </ul>
                            </li>
                            <li>
                                <label href="#subMenu3-3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">文件檔案</label>
                                <ul class="collapse" id="subMenu3-3">
                                    <li><label><input type="checkbox" class="mr-2">護貝膠膜</label></li>
                                    <li><label><input type="checkbox" class="mr-2">圓形三孔夾</label></li>
                                </ul>
                            </li>
                        </ul>
                </li>
            </ul>
        </nav>
        <div class="content-wrapper">
            <label for="side-menu-switch" class="pl-1 mb-0"><i class="fas fa-align-justify check-btn"></i></label>
            <div class="content">
                <div class="table-style">
                    <div class="table-header">
                    <h3 class="text-gray"><span class="h2">耗材</span>剩餘</h3>
                        <a href="#" class="text-blue">列印耗材總表</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>主分類</th>
                                <th>次分類</th>
                                <th>品名</th>
                                <th>規格</th>
                                <th>顏色</th>
                                <th>單位</th>
                                <th>廠商</th>
                                <th>總消耗</th>
                                <th>剩餘量</th>
                                <th>可歸還</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-title="主分類">美術用品</td>
                                <td data-title="次分類">書寫</td>
                                <td data-title="品名">大三角學習鉛筆</td>
                                <td data-title="規格">15*10</td>
                                <td data-title="顏色">無</td>
                                <td data-title="單位">支</td>
                                <td data-title="廠商">百樂</td>
                                <td data-title="總消耗">125</td>
                                <td data-title="剩餘量">139</td>
                                <td data-title="可歸還">√</td>
                            </tr>
                            <tr>
                                <td data-title="主分類">美術用品</td>
                                <td data-title="次分類">書寫</td>
                                <td data-title="品名">大三角</td>
                                <td data-title="規格">無</td>
                                <td data-title="顏色">藍色</td>
                                <td data-title="單位">支</td>
                                <td data-title="廠商">百樂</td>
                                <td data-title="總消耗">125</td>
                                <td data-title="剩餘量">139</td>
                                <td data-title="可歸還">√</td>
                            </tr>
                            <tr>
                                <td data-title="主分類">美術用品</td>
                                <td data-title="次分類">書寫</td>
                                <td data-title="品名">大三角學習</td>
                                <td data-title="規格">無</td>
                                <td data-title="顏色">無</td>
                                <td data-title="單位">支</td>
                                <td data-title="廠商">百樂</td>
                                <td data-title="總消耗">125</td>
                                <td data-title="剩餘量">139</td>
                                <td data-title="可歸還"></td>
                            </tr>
                            <tr>
                                <td data-title="主分類">美術用品</td>
                                <td data-title="次分類">書寫</td>
                                <td data-title="品名">大三角學習</td>
                                <td data-title="規格">無</td>
                                <td data-title="顏色">無</td>
                                <td data-title="單位">支</td>
                                <td data-title="廠商">百樂</td>
                                <td data-title="總消耗">125</td>
                                <td data-title="剩餘量">139</td>
                                <td data-title="可歸還"></td>
                            </tr>
                            <tr>
                                <td data-title="主分類">美術用品</td>
                                <td data-title="次分類">書寫</td>
                                <td data-title="品名">大三角學習</td>
                                <td data-title="規格">無</td>
                                <td data-title="顏色">無</td>
                                <td data-title="單位">支</td>
                                <td data-title="廠商">百樂</td>
                                <td data-title="總消耗">125</td>
                                <td data-title="剩餘量">139</td>
                                <td data-title="可歸還"></td>
                            </tr>
                            <tr>
                                <td data-title="主分類">美術用品</td>
                                <td data-title="次分類">書寫</td>
                                <td data-title="品名">大三角學習</td>
                                <td data-title="規格">無</td>
                                <td data-title="顏色">無</td>
                                <td data-title="單位">支</td>
                                <td data-title="廠商">百樂</td>
                                <td data-title="總消耗">125</td>
                                <td data-title="剩餘量">139</td>
                                <td data-title="可歸還"></td>
                            </tr>
                            <tr>
                                <td data-title="主分類">美術用品</td>
                                <td data-title="次分類">書寫</td>
                                <td data-title="品名">大三角學習</td>
                                <td data-title="規格">無</td>
                                <td data-title="顏色">無</td>
                                <td data-title="單位">支</td>
                                <td data-title="廠商">百樂</td>
                                <td data-title="總消耗">125</td>
                                <td data-title="剩餘量">139</td>
                                <td data-title="可歸還"></td>
                            </tr>
                            <tr>
                                <td data-title="主分類">美術用品</td>
                                <td data-title="次分類">書寫</td>
                                <td data-title="品名">大三角學習</td>
                                <td data-title="規格">無</td>
                                <td data-title="顏色">無</td>
                                <td data-title="單位">支</td>
                                <td data-title="廠商">百樂</td>
                                <td data-title="總消耗">125</td>
                                <td data-title="剩餘量">139</td>
                                <td data-title="可歸還"></td>
                            </tr>
                            <tr>
                                <td data-title="主分類">美術用品</td>
                                <td data-title="次分類">書寫</td>
                                <td data-title="品名">大三角學習</td>
                                <td data-title="規格">無</td>
                                <td data-title="顏色">無</td>
                                <td data-title="單位">支</td>
                                <td data-title="廠商">百樂</td>
                                <td data-title="總消耗">125</td>
                                <td data-title="剩餘量">139</td>
                                <td data-title="可歸還"></td>
                            </tr>
                            <tr>
                                <td data-title="主分類">美術用品</td>
                                <td data-title="次分類">書寫</td>
                                <td data-title="品名">大三角學習</td>
                                <td data-title="規格">無</td>
                                <td data-title="顏色">無</td>
                                <td data-title="單位">支</td>
                                <td data-title="廠商">百樂</td>
                                <td data-title="總消耗">125</td>
                                <td data-title="剩餘量">139</td>
                                <td data-title="可歸還"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <ul class="pagination pt-3">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../../dist/admin.js"></script>
</body>
</html>