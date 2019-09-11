/*=======contact Create=========*/

function create() {

    let name = $("#name").val();
    let designation = $("#designation").val();
    let email = $("#email").val();
    let phone = $("#phone").val();

    let data = {
        name: name,
        designation: designation,
        email: email,
        phone: phone,
    }

    $.ajax({
        url: API_BASE_URL + '/api/contact/create',
        type: "post",
        data: data,
        success: function (response) {
            if (response) {
                alert('New Contact Info Created Successfully!');
                window.location.href = contactRoute;
            }
        }
    })
}


document.getElementById('myform').addEventListener('submit', function (e) {
    create();
    e.preventDefault();
});

/*=======End contact Create=========*/


/*=======contact Update=========*/
$(document).on('click', '#update', (e) => {
    update();
    e.preventDefault();

    alert('Contact Info Updated Successfully');
    window.location.href = contactRoute;

})

function update() {
    let id = $("#contact_id").val();
    let name = $("#name").val();
    let designation = $("#designation").val();
    let email = $("#email").val();
    let phone = $("#phone").val();
    $.ajax({
        type: "put",
        data: { name, designation, email, phone },
        url: API_BASE_URL + '/api/contact/update/' + id,
        success: (data) => {
            $(".old-tr").remove();
        }
    });
}

/*=======End contact Update=========*/


/*=======contact Delete=========*/
function del(id) {
    if (confirm('Are you sure want to delete ?')) {
        $.ajax({
            type: "delete",
            url: API_BASE_URL + '/api/contact/delete/' + id,
            success: (data) => {
                $(".old-tr").remove();
                window.location.href = contactRoute;
            }
        });
    }
    else {
        return false;
    }
}
/*=======End contact Delete=========*/
