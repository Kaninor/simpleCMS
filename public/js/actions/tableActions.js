$(".tr").on('mouseenter', function () {
    let currentRow = $(this).closest("tr");
    currentRow.css({
        "background-color": "#4e73df",
        "color": "white"
    });
}).on('mouseleave', function () {
    let currentRow = $(this).closest("tr");
    currentRow.css({
        "background-color": "white",
        "color": "rgb(133,135,151)"
    });
});

$(".edit").on('click', function () {
    let currentRow = $(this).closest("tr");
    let row_num = currentRow.find("th:eq(0)").text();
    alert(row_num);
});

$(".delete").on("click", function () {
   let currentRow = $(this).closest("tr");
   let row_num = currentRow.find("th:eq(0)").text();
   if (confirm(row_num)){
       currentRow.remove();
   }
});