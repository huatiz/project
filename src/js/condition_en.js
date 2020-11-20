const condition = document.getElementById('condition');
const conditionContent = document.getElementById('condition-content');
const thead = document.getElementsByTagName('thead')[0];
condition.addEventListener('change', function(e) {
    let value = Number(e.target.value);
    if (value === 1) {
        thead.innerHTML = `
        <th>Name</th>
        <th>Main Category</th>
        <th>Sub Category</th>
        <th>Item</th>
        <th>Applying Quantity</th>
        <th>Applying Limit</th>`
    } else if (value === 2) {
        conditionContent.innerHTML = `
        <option value="" selected disabled hidden>Class</option>
        <optgroup label="Others">
            <option value="0">All</option>
            <option value="13">None</option>
        </optgroup>
        <optgroup label="Preschool">
            <option value="1">Penguin</option>
            <option value="2">Squirrel</option>
            <option value="3">Raccoon</option>
        </optgroup>
        <optgroup label="Pre-kindergarten">
            <option value="4">Dolphin</option>
            <option value="5">Deer</option>
            <option value="6">Sheep</option>
            <option value="7">Koala</option>
        </optgroup>
        <optgroup label="Kindergarten">
            <option value="8">Kangaroo</option>
            <option value="9">Elephant</option>
            <option value="10">Rhino</option>
            <option value="11">Manta Ray</option>
            <option value="12">Wolf</option>
        </optgroup>`

        thead.innerHTML = `
        <th>Class</th>
        <th>Main Category</th>
        <th>Sub Category</th>
        <th>Item</th>
        <th>Applying Quantity</th>`
    } else if (value === 3) {
        conditionContent.innerHTML = `
        <option value="" selected disabled hidden>Activity</option>
        <optgroup label="Others">
        <option value="0">All</option>
        <option value="1">Others</option>
        </optgroup>
        <optgroup label="Show">
            <option value="2">Final Show</option>
        </optgroup>
        <optgroup label="Layout">
            <option value="3">Corner Layout</option>
        </optgroup>
        <optgroup label="Festival Activities">
            <option value="4">New's Year Day Activity</option>
            <option value="5">Lantern Festival Activity</option>
            <option value="6">Children's Day Activity</option>
            <option value="7">Earth Day Activity</option>
            <option value="8">Dragon Boat Festival Activity</option>
            <option value="9">Moon Festival Activity</option>
            <option value="10">Double Tenth National Day Activity</option>
            <option value="11">Halloween Activity</option>
            <option value="12">Christmas Activity</option>
        </optgroup>
        <optgroup label="Other Activities">
            <option value="13">Information Session</option>
            <option value="14">Theme Activity</option>
            <option value="15">Winter Camp</option>
            <option value="16">Summer Camp</option>
            <option value="17">First Day of the Semester</option>
            <option value="18">Open Day</option>
            <option value="19">Commencement Ceremony</option>
        </optgroup>`

        thead.innerHTML = `
        <tr>
            <th>Activity</th>
            <th>Main Category</th>
            <th>Sub Category</th>
            <th>Item</th>
            <th>Applying Quantity</th>
        </tr>`
    }
});