"use strict";

$("#swal-1").click(function () {
    swal('Hello');
});

$("#swal-2").click(function () {
    swal('Good Job', 'You clicked the button!', 'success');
});

$("#swal-3").click(function () {
    swal('Good Job', 'You clicked the button!', 'warning');
});

$("#swal-4").click(function () {
    swal('Good Job', 'You clicked the button!', 'info');
});

$("#swal-5").click(function () {
    swal('Good Job', 'You clicked the button!', 'error');
});

$('.btn-del-a').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href')
    Swal.fire({
        title: 'Hapus Data?',
        text: "Kamu yakin ingin menghapus data?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
    })
});

$('.btn-del').click(function (e) {
    e.preventDefault();
    let form = $(this).parents('form');
    Swal.fire({
        title: 'Hapus Data?',
        text: "Kamu yakin ingin menghapus data?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!'
    }).then(function (value) {
        if (value) {
            form.submit();
        }
    });
});

$("#swal-7").click(function () {
    swal({
        title: 'What is your name?',
        content: {
            element: 'input',
            attributes: {
                placeholder: 'Type your name',
                type: 'text',
            },
        },
    }).then((data) => {
        swal('Hello, ' + data + '!');
    });
});

$("#swal-8").click(function () {
    swal('This modal will disappear soon!', {
        buttons: false,
        timer: 3000,
    });
});
