 $(function () {
        $('.delete').click(function () {
            var _this = this;

            Swal.fire({
                title: 'Czy na pewno chcesz usunąć użytkownika?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Tak',
                cancelButtonText: 'Nie'
            }).then(function (result) {
                if (result.value) {
                    $.ajax({
                        method: "DELETE",
                        url: deleteUrl + $(_this).data("id")
                    }).done(function (data) {
                        window.location.reload();
                    }).fail(function (data) {
                        Swal.fire('Błąd!!!', data.responseJSON.message, data.responseJSON.status);
                    });
                }
            });
        });
    });
