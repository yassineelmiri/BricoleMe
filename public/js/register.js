function switchPages() {
    const next = document.querySelector('.next');
    const page_one = document.getElementById('register_page_one');
    const page_two = document.getElementById('register_page_two');

    next.addEventListener('click', function () {
        page_one.classList.add('hidden');
        page_two.classList.remove('hidden');
        switchPages();
    });

    const back = document.getElementById('back_btn');

    back.addEventListener('click', function () {
        page_two.classList.add('hidden');
        page_one.classList.remove('hidden');
        switchPages();
    });
}

switchPages();

let upload_btn = document.querySelector('.upload_file');

upload_btn.addEventListener('click', function() {
    document.getElementById('hidden-input').click();
});







