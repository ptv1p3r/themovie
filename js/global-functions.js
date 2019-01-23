$(document).ready(function () {
    var movieId = $('input[type=hidden]#movieId').val();

    $('img.voteOk').click(function () {

        $.get("http://127.0.0.1/index/?path=",
            {
                path: "detail/voteUp/" + movieId,
            },
            function(data, status){
                $("#voteCount").text(data);
                $("#vtOK").hide();
               // alert("Data: " + data + "\nStatus: " + status);
        });
    })
})
