$(document).ready(function () {
    var movieId = $('input[type=hidden]#movieId').val();

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
})
