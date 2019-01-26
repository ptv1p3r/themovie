$(document).ready(function () {
    var movieId = $('input[type=hidden]#movieId').val();

    $('#btnDownload').click(function (){
        $.get("http://127.0.0.1/index/?path=",
            {
                path: "detail/download/" + movieId,
            },
            function(data, status){
                var dataReceived = data.split("#");
                $("#DownloadCount").text("Downloaded " + dataReceived[1] + " times");
                window.location.href = dataReceived[0];
                //alert("Datah: " + dataReceived + "\nStatus: " + status);
            });
    })

    $('img.voteOk').click(function () {

        $.get("http://127.0.0.1/index/?path=",
            {
                path: "detail/voteUp/" + movieId,
            },
            function(data, status){
                $("#voteCount").text("Voted " + data + " times");
                $("#vtOK").hide();
                $("#vtNOTOK").hide();
                //alert("Datah: " + data + "\nStatus: " + status);
        });
    })

    $('img.voteNotOk').click(function () {

        $.get("http://127.0.0.1/index/?path=",
            {
                path: "detail/voteDown/" + movieId,
            },
            function(data, status){
                $("#voteCount").text("Voted " + data + " times");
                $("#vtOK").hide();
                $("#vtNOTOK").hide();
                //alert("Datah: " + data + "\nStatus: " + status);
            });
    })

});

$(document).ready(function(){
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function(){
        if(this.checked){
            checkbox.each(function(){
                this.checked = true;
            });
        } else{
            checkbox.each(function(){
                this.checked = false;
            });
        }
    });
    checkbox.click(function(){
        if(!this.checked){
            $("#selectAll").prop("checked", false);
        }
    });
});
