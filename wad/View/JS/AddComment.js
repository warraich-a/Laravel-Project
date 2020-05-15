function listComments() {
    $.ajax({
        url: "comment_list.php",
        success: function (res) {
            $(".comment_listing").html(res);
        },
    });
}
$(function () {
    listComments();
    setInterval(function () {
        listComments();
    }, 10000);
    $(".submit").click(function () {
        var name = $(".name").val();
        var email = $(".email").val();
        var comment = $(".comment").val();
        var tId = $(".tId").val();
        $.ajax({
            url: "../Model/save_comment.php",
            data: "name=" + name + "&email=" + email + "&comment=" + comment + "&tId=" + tId,
            type: "post",
            success: function () {
                alert("Your comment has been posted");
                listComments();
            },
        });
    });
});