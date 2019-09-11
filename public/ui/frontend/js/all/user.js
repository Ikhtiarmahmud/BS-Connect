/*=======user Create=========*/

function create() {

    let email = $("#email").val();

    let data = {
        email: email,
    }

    $.ajax({
        url: API_BASE_URL + '/api/user/create',
        type: "post",
        data: data,
        success: function (response) {
            if (response) {
                alert('User Created Successfully!');
                window.location.href = userRoute;
            }
        }
    })
}


document.getElementById('myform').addEventListener('submit', function (e) {
    create();
    e.preventDefault();
});

/*=======End user Create=========*/
