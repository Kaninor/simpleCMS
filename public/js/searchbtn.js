$("#search-btn").on("click", function () {
    $.ajax({
        type: "POST",
        url: "http://127.0.0.1:8585/api/dashboard/delete",
        data: {
            "id": $("#search-data").val()
        },
        success: function() {
            window.location.reload();
        },
    });
});
