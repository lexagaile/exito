$(document).ready(function () {
    $(".restore_app").click(function (e) {
        e.preventDefault();
        var app_id = $(this).attr("data-id");

        Swal.fire({
            title: "Restore this schedule?",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: "Restore",
            confirmButtonColor: "#45eb45",
            cancelButtonText: "Cancel",
            cancelButtonColor: "#dc3545",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "GET",
                    url: "./functions/restore_sched.php",
                    data: { id: app_id },
                    success: function (response) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top",
                            customClass: {
                                popup: "colored-toast",
                            },
                            showConfirmButton: false,
                            timer: 1000,
                            timerProgressBar: true,
                        });

                        switch (response) {
                            case "success":
                                Toast.fire({
                                    icon: "success",
                                    title: "Schedule has been restored.",
                                    iconColor: "#28a745",
                                }).then(() => {
                                    var delay = 100;
                                    setTimeout(function () {
                                        location.reload();
                                    }, delay);
                                });
                                break;
                            case "error":
                                Toast.fire({
                                    icon: "error",
                                    title: "can't restore schedule. Please try again.",
                                    iconColor: "#dc3545",
                                }).then(() => {
                                    location.reload();
                                });
                                break;
                            default:
                                Toast.fire({
                                    icon: "error",
                                    title: "something went wrong!",
                                    iconColor: "#dc3545",
                                }).then(() => {
                                    location.reload();
                                });
                        }
                    },
                });
                return false;
            }
        });
    });
});