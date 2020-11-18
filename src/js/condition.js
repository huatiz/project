const condition = document.getElementById('condition');
const conditionContent = document.getElementById('condition-content');
const thead = document.getElementsByTagName('thead')[0];
condition.addEventListener('change', function(e) {
    let value = Number(e.target.value);
    if (value === 1) {
        let valueCount = 2;
        // for (let i = 0; i < ; i++) {
        // let fragment = document.createDocumentFragment();
        //     let optgroup = document.createElement('optgroup');
        //     optgroup.setAttribute('label', '1');
        //     for (let j = 0; j < ; j++) {
        //         let option = document.createElement('option');
        //         option.appendChild(document.createTextNode());
        //         option.setAttribute('value', valueCount++);
        //     }
        //     conditionContent.appendChild(fragment);
        // }

        thead.innerHTML = `
        <th>借用者</th>
        <th>主分類</th>
        <th>次分類</th>
        <th>品名</th>
        <th>總借用量</th>
        <th>借用上限</th>`
    } else if (value === 2) {
        conditionContent.innerHTML = `
        <option value="" selected disabled hidden>班級</option>
        <optgroup label="其他">
            <option value="0">全部</option>
            <option value="13">無</option>
        </optgroup>
        <optgroup label="小班">
            <option value="1">小企鵝班</option>
            <option value="2">小松鼠班</option>
            <option value="3">小浣熊班</option>
        </optgroup>
        <optgroup label="中班">
            <option value="4">中海豚班</option>
            <option value="5">中花鹿班</option>
            <option value="6">中綿羊班</option>
            <option value="7">中無尾熊班</option>
        </optgroup>
        <optgroup label="大班">
            <option value="8">大袋鼠班</option>
            <option value="9">大大象班</option>
            <option value="10">大犀牛班</option>
            <option value="11">大魟魚班</option>
            <option value="12">大灰狼班</option>
        </optgroup>`

        thead.innerHTML = `
        <th>班級</th>
        <th>主分類</th>
        <th>次分類</th>
        <th>品名</th>
        <th>總借用量</th>`
    } else if (value === 3) {
        conditionContent.innerHTML = `
        <option value="" selected disabled hidden>活動</option>
        <optgroup label="其他">
        <option value="0">全部</option>
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
        </optgroup>`

        thead.innerHTML = `
        <tr>
            <th>活動</th>
            <th>主分類</th>
            <th>次分類</th>
            <th>品名</th>
            <th>總借用量</th>
        </tr>`
    }
});