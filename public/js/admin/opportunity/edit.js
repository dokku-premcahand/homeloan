$(document).ready(function (e) {
    $('#date').datepicker();
    $('#closingDate').datepicker();
    $('#maturityDate').datepicker();

    var counter = 2;
    $("#addButton").click(function(){
        $(".divAdd").append('<br></br><div class="form-group divnew" id="div'+counter+'">\n\
        <div class="col-md-3"><input name="title[]" id="title'+counter+'" class="form-control" placeholder="Document title"></div>\n\
        <div class="col-md-3"><input name="type[]" id="type'+counter+'" class="form-control" placeholder="Document type"></div>\n\
        <div class="col-md-3"><input type="file" name="document[]" id="document'+counter+'"></div>\n\
        <div class="col-md-3"><a style="cursor: pointer;" class="remove" value="'+counter+'">-</a></div></div>'
        )
        counter++;
    });

    $(".divAdd").on("click", ".remove", function (e) {
        var counter = $(this).attr('value');
        $("#div" + counter).remove();
    });
});