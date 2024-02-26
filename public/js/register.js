document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('imagesContainer');
    container.innerHTML = '';
    function switchPages() {
        const next = document.querySelector('.next');
        const page_one = document.getElementById('register_page_one');
        const page_two = document.getElementById('register_page_two');



        const errors_container = document.getElementById('errors');
        const errors_display = document.getElementById('errors_display');

        next.addEventListener('click', function () {
            let username = document.getElementById('username').value;
            let email = document.getElementById('email').value;
            let pw = document.getElementById('pw').value;
            let confirm_pw = document.getElementById('confirm_pw').value;
            let city = document.getElementById('city').value;
            let profession = document.getElementById('profession').value;
            let phone = document.getElementById('phone').value;
            let valid_data = true;

            errors_display.innerHTML = '';

            if(username.trim() === '' || email.trim() === '' || pw.trim() === '' || confirm_pw.trim() === '' || city.trim() === '' || profession.trim() === '' || phone.trim() === '' ){
                let li = document.createElement('li');
                li.textContent = 'All Fields Are Required !';
                errors_display.appendChild(li);
                valid_data = false;
            }
            else{
                if (!/^[a-zA-Z0-9_]{3,}$/.test(username)) {
                    let li = document.createElement('li');
                    li.textContent = 'Username must be alphanumeric and contain at least 3 characters.';
                    errors_display.appendChild(li);
                    valid_data = false;
                }

                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    let li = document.createElement('li');
                    li.textContent = 'Please enter a valid email address.';
                    errors_display.appendChild(li);
                    valid_data = false;
                }

                if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}/.test(pw)) {
                    let li = document.createElement('li');
                    li.textContent = 'Password must be at least 8 characters and contains at least one uppercase , one lowercase , one number, and one special character.';
                    errors_display.appendChild(li);
                    valid_data = false;

                }

                if (pw !== confirm_pw) {
                    let li = document.createElement('li');
                    li.textContent = 'Passwords do not match.';
                    errors_display.appendChild(li);
                    valid_data = false;

                }

                if (!/^[0-9]{10}$/.test(phone)) {
                    let li = document.createElement('li');
                    li.textContent = 'Please enter a valid phone number.';
                    errors_display.appendChild(li);
                    valid_data = false;

                }
            }

            if(valid_data){

                page_one.classList.add('hidden');
                page_two.classList.remove('hidden');
                if(!errors_container.classList.contains('hidden')){
                    errors_container.classList.add('hidden');
                }

                let files = [];

                document.getElementById('hidden-input').addEventListener('change', function() {
                    files.push(...this.files);
                    console.log(files);

                    container.innerHTML = '';

                    files.forEach(file => {
                        let reader = new FileReader();
                        reader.onload = function(event) {
                            const div = document.createElement('div');
                            div.classList.add('flex','flex-col','items-center','gap-[5px]')

                            const img = document.createElement('img');
                            img.src = event.target.result;
                            img.classList.add('uploaded-image','w-[100px]','h-[100px]');

                            const deleteBtn = document.createElement('button');
                            deleteBtn.classList.add('underline','text-red-500','text-center','font-medium');
                            deleteBtn.textContent = 'Remove';

                            div.appendChild(img);
                            div.appendChild(deleteBtn);

                            container.appendChild(div);
                            deleteBtn.addEventListener('click', function() {
                                container.removeChild(div);
                            });

                        };
                        reader.readAsDataURL(file);
                    });

                });




                document.getElementById('register_btn').addEventListener('click',function (){
                    const formData = new FormData();
                    formData.append('add', 1);
                    formData.append('name', username);
                    formData.append('email', email);
                    formData.append('password', pw);
                    formData.append('profession', profession);
                    formData.append('city', city);
                    formData.append('phone_number', phone);

                    files.forEach(file => {
                        formData.append('images[]', file);
                    });

                    $.ajax({
                        url : '/auth/artisan/register' ,
                        type : 'POST',
                        dataType : 'json',
                        processData : false,
                        contentType : false ,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data : formData,
                        success : function (response){
                            document.getElementById('validation_msg').classList.remove('hidden');

                            setTimeout(function (){
                                $('#validation_msg').fadeOut();

                            },2000);
                            window.location.href = 'http://localhost/login';
                        }
                    })
                })


            }
            else{
                errors_container.classList.remove('hidden');
            }


        });

        const back = document.getElementById('back_btn');

        back.addEventListener('click', function () {
            page_two.classList.add('hidden');
            page_one.classList.remove('hidden');
        });


        const closeErrors = document.getElementById('closeErrors');

        closeErrors.addEventListener('click',function(){
            document.getElementById('errors').classList.add('hidden');
            errors_display.innerHTML = '';
        })
    }

    switchPages();

    let upload_btn = document.querySelector('.upload_file');

    upload_btn.addEventListener('click', function() {
        document.getElementById('hidden-input').click();
    });


    NiceSelect.bind(document.getElementById("city"), {searchable: true, placeholder: 'Select Your City'});
})














