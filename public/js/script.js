window.addEventListener('DOMContentLoaded', event => {
    const listHoursArray = document.body.querySelectorAll('.list-hours li');
    listHoursArray[new Date().getDay()].classList.add(('today'));
})

/* script.js */
$(document).ready(function () {
    $('#create-transaction').on('click', function () {
        // Lakukan tindakan atau pengalihan yang sesuai
        alert('Membuat transaksi baru...');
    });
});
