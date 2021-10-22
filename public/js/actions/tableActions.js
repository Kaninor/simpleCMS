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

$(".increament").on("click", function () {
    let currentRow = $(this).closest("tr");
    let num_o_p = currentRow.find("td:eq(2)");
    let num = parseInt(num_o_p.text());
    num_o_p.text(++num);
});

$(".decreament").on("click", function () {
    let currentRow = $(this).closest("tr");
    let num_o_p = currentRow.find("td:eq(2)");
    let num = parseInt(num_o_p.text());
    if (num - 1 >= 0)
        num_o_p.text(--num);
});
