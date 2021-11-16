$(document).ready(() => {
    $.validator.addMethod(
        "letterswithbasicpunc",
        function (value, element) {
            return this.optional(element) || /^[a-z\-.,()'"\s]+$/i.test(value);
        },
        "Letters or punctuation only please"
    );
    $("#validation").validate({
        rules: {
            name: {
                required: true,
                letterswithbasicpunc: true,
            },
            username: {
                required: true,
                maxlength: 8,
                minlength: 6,
            },
            email: {
                required: true,
            },
            state: {
                required: true,
            },
            Address: {
                required: true,
            },
            zip: {
                required: true,
                digits: true,
                minlength: 6,
                maxlength: 6,
            },
        },
        messages: {
            name: {
                required: "Please enter your full name",
            },
        },
        submitHandler: () => {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, do it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Submitted!',
                        'Your file has been submitted.',
                        'success'
                    )
                        .then(() => {
                            window.location.replace("https://www.bukalapak.com/");
                        })
                }
            })
        },
    });
})