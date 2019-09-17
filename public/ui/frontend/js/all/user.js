/*=======user Create=========*/

function create() {

    let email = $("#email").val();

    
    let data = {
        email: email,
    }
    if(email == ""){
        let error = $("#error");
        error.html('*Field is Required');
        error.css('color','red');
    }
    else{
        $.ajax({
            url: API_BASE_URL + '/api/user/create',
            type: "post",
            data: data,
            success: function (response) {
                if (response) {
                    let success = $("#success");
                    success.html('User Created Successfully');
                    success.addClass('alert alert-success');
                }
            }
        })  
    }
    
}


document.getElementById('myform').addEventListener('submit', function (e) {
    create();
    e.preventDefault();
});

/*=======End user Create=========*/
