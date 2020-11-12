function hide() {
    const main_category_select = document.querySelector('#main-category-select');
    const sub_category_select = document.querySelector('#sub-category-select');
    const item_select = document.querySelector('#item-select');
    const color_select = document.querySelector('#color-select');
    const specification_select = document.querySelector('#specification-select');
    const unit_select = document.querySelector('#unit-select');

    const main_show = document.querySelector('.hide-main-category');
    const sub_show = document.querySelector('.hide-sub-category');
    const item_show = document.querySelector('.hide-item');
    const brand_show = document.querySelector('.hide-brand');
    const limit_show = document.querySelector('.hide-limit');
    const color_show = document.querySelector('.hide-color');
    const specification_show = document.querySelector('.hide-specification');
    const unit_show = document.querySelector('.hide-unit');
    main_category_select.addEventListener('change', function(e) {
        if (e.target.value === '0' || e.target.value === '1')
            sub_category_select.disabled = true;
        else
            sub_category_select.disabled = false;

        if (e.target.value === '1') {
            main_show.classList.remove('hide');
            sub_show.classList.remove('hide');
            item_show.classList.remove('hide');
        } else {
            main_show.classList.add('hide');
            sub_show.classList.add('hide');
            item_show.classList.add('hide');
        }
    });

    sub_category_select.addEventListener('change', function(e) {
        if (e.target.value === '0' || e.target.value === '1')
            item_select.disabled = true;
        else
            item_select.disabled = false;

        if (e.target.value === '1') {
            sub_show.classList.remove('hide');
            item_show.classList.remove('hide');

        } else {
            sub_show.classList.add('hide');
            item_show.classList.add('hide');
        }
    });
    item_select.addEventListener('change', function(e) {
        if (e.target.value === '1') {
            item_show.classList.remove('hide');
            brand_show.classList.remove('hide');
            limit_show.classList.remove('hide');
        } else {
            item_show.classList.add('hide');
            brand_show.classList.add('hide');
            limit_show.classList.add('hide');
        }
    });
    color_select.addEventListener('change', function(e) {
        if (e.target.value === '2')
            color_show.classList.remove('hide');
        else
            color_show.classList.add('hide');
    });
    specification_select.addEventListener('change', function(e) {
        if (e.target.value === '1')
            specification_show.classList.remove('hide');
        else
            specification_show.classList.add('hide');
    });
    unit_select.addEventListener('change', function(e) {
        if (e.target.value === '1')
            unit_show.classList.remove('hide');
        else
            unit_show.classList.add('hide');
    });
}

hide();