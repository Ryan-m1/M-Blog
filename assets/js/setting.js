'use strict';
(function () {
    document.addEventListener('DOMContentLoaded', function () {
        let TabItems = document.querySelectorAll('.theme-setting-tab li');
        let Notice = document.querySelector('.theme-setting-notice');
        let Version = document.querySelector('#theme-version');
        let Form = document.querySelector('.theme-setting-contain > form');
        let Content = document.querySelectorAll('.theme-setting-content');
        TabItems.forEach(function (item) {
            item.addEventListener('click', function () {
                sessionStorage.setItem('theme-setting-current', item.getAttribute('data-current'));
                TabItems.forEach(function (_item) {
                    return _item.classList.remove('active');
                });
                item.classList.add('active');

                if (item.getAttribute('data-current') === 'theme-setting-notice') {
                    Notice.style.display = 'block';
                    Form.style.display = 'none';
                } else {
                    Form.style.display = 'block';
                    Notice.style.display = 'none';
                }

                Content.forEach(function (_item) {
                    _item.style.display = 'none';
                    if (_item.classList.contains(item.getAttribute('data-current'))) _item.style.display = 'block';
                });
            });
        });
        /* 页面第一次进来 */
        if (sessionStorage.getItem('theme-setting-current')) {
            if (sessionStorage.getItem('theme-setting-current') === 'theme-setting-notice') {
                Notice.style.display = 'block';
                Form.style.display = 'none';
            } else {
                Form.style.display = 'block';
                Notice.style.display = 'none';
            }

            TabItems.forEach(function (item) {
                if (item.getAttribute('data-current') === sessionStorage.getItem('theme-setting-current')) {
                    item.classList.add('active');
                    Content.forEach(function (_item) {
                        if (_item.classList.contains(sessionStorage.getItem('theme-setting-current'))) _item.style.display = 'block';
                    });
                }
            });
        } else {
            TabItems[0].classList.add('active');
            Notice.style.display = 'block';
            Form.style.display = 'none';
        }
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = () => {
            if (xhr.readyState === 4) {
                if ((xhr.status >= 200 && xhr.status < 300) || xhr.status === 304) {
                    let res = JSON.parse(xhr.responseText);
                    Notice.innerHTML += '<form class="theme-backup" action="?bf" method="post">' +
                        '<input type="submit" name="type" value="备份模板" />' +
                        '<input type="submit" name="type" value="还原备份" />' +
                        '<input type="submit" name="type" value="删除备份" />' +
                        '</form>';
                } else {
                    Notice.innerHTML = '请求失败！';
                }
            }
        };
    });
})();
