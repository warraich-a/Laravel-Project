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
        $.ajax({
            url: "save_comment.php",
            data: "name=" + name + "&email=" + email + "&comment=" + comment,
            type: "post",
            success: function () {
                alert("Your comment has been posted");
                listComments();
            },
        });
    });
});