var userMenuDiv = document.getElementById('userMenu');
var userMenu = document.getElementById('userButton');

var navMenuDiv = document.getElementById('nav-content');
var navMenu = document.getElementById('nav-toggle');

document.onclick = check;

function check(event) {
    var target = (event && event.target) || (event && event.srcElement);

    if (!checkParent(target, userMenuDiv)) {
        if (checkParent(target, userMenu)) {
            if (userMenuDiv.classList.contains('invisible')) {
                userMenuDiv.classList.remove('invisible');
            } else {
                userMenuDiv.classList.add('invisible');
            }
        } else {
            userMenuDiv.classList.add('invisible');
        }
    }

    if (!checkParent(target, navMenuDiv)) {
        if (checkParent(target, navMenu)) {
            if (navMenuDiv.classList.contains('hidden')) {
                navMenuDiv.classList.remove('hidden');
            } else {
                navMenuDiv.classList.add('hidden');
            }  
        } else {
            navMenuDiv.classList.add('hidden');
        }
    }

}

function checkParent(target, elm) {
    while (target.parentNode) {
        if (target == elm) {
            return true;
        }

        target = target.parentNode;
    }
    return false;
}

function filter_table() {
    var input, filter, table, tr, td, i, j, visible;
    input = document.getElementById('search');
    filter = input.value.toUpperCase();
    table = document.getElementById('table');
    tr = table.getElementsByTagName('tr');

    for (i = 1; i < tr.length; i++) {
        visible = false;
        td = tr[i].getElementsByTagName('td');

        for (j = 0; j < td.length; j++) {
            if (td[j] && td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                visible = true;
            }
        }

        if (!tr[0]) {
            tr[0].style.display = '';
        }

        if (visible === true) {
            tr[i].style.display = '';
        } else {
            tr[i].style.display = 'none';
        }
    }
}

if (document.getElementById('search')) {
    document.getElementById('search').addEventListener('keyup', function () {
        filter_table();
    });    
}

function open_file_selector() {
    document.getElementById('photo').click();
}

if (document.getElementById('open-file-selector')) {
    document.getElementById('open-file-selector').addEventListener('click', function () {
        open_file_selector();
    }); 
}

function show_img_preview() {
    input = document.getElementById('photo');

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (event) {
            document.getElementById('photo-preview').setAttribute('src', event.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

if (document.getElementById('photo')) {
    document.getElementById('photo').addEventListener('change', function () {
        show_img_preview();
    });
}
