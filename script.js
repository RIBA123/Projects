function message() {
    var name = document.getElementById('name');
    var lastName = document.getElementById('lastName');
    var email = document.getElementById('email');
    var phoneNumber = document.getElementById('phoneNumber');
    var location = document.getElementById('location');
    var msg = document.getElementById('msg');
    const success = document.getElementById('Success');
    const danger = document.getElementById('Danger');

    if (name.value === '' || lastName.value === '' || email.value === '' || phoneNumber.value === '' || location.value === '' || msg.value === '') {
        danger.style.display = 'block';

        setTimeout(() => {
            danger.style.display = 'none';
        }, 2000);

        return false;
    } else {

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "sendEmail.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        // Log the data being sent
        var data = "name=" + encodeURIComponent(name.value) +
            "&lastName=" + encodeURIComponent(lastName.value) +
            "&email=" + encodeURIComponent(email.value) +
            "&phoneNumber=" + encodeURIComponent(phoneNumber.value) +
            "&location=" + encodeURIComponent(location.value) +
            "&msg=" + encodeURIComponent(msg.value);

        console.log("Sending data:", data);

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {

                    // Log the server response
                    console.log("Server response:", xhr.responseText);

                    success.style.display = 'block';

                    setTimeout(() => {
                        name.value = '';
                        lastName.value = '';
                        email.value = '';
                        phoneNumber.value = '';
                        location.value = '';
                        msg.value = '';
                        success.style.display = 'none';
                    }, 2000);
                } else {
                    console.error("Error:", xhr.status, xhr.statusText);
                    danger.style.display = 'block';

                    setTimeout(() => {
                        danger.style.display = 'none';
                    }, 2000);
                }
            }
        };

        xhr.send(data);

        return false;
    }
}
