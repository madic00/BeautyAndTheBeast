$(document).ready(function () {

    // loadComments();

    $('#postACommentButton').on('click', postaviKomentar);

    $('#odgovorNaKomentar').on('click', odgovoriNaKomentarPrikazBloka);

    $("#answerCommentButton").on('click', odgovoriNaKomentar);

    $("#closeAnswerPopUp").on('click', function () {

        $('.blockAnswerComment').removeClass("blockAnswerComment1");

    });

});

function loadComments() {
    let location = window.location.href;

    let blogId = location.substring(location.lastIndexOf("=") + 1, location.length);

    ajaxGet("api/comment/getAll.php?blog=" + blogId, data => {
        let out = printComments(data);

        $(".komentariIspis").html(out);
    })
}

function printComments(data) {
    let out = "";

    for (let el of data.comments) {
        out += `
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-0">${el.ImePrezime} - ${el.Kreiran.split(" ")[0]}</h5>
                    <p>
                        ${el.Text}
                    </p>
                    <button class="btn btn-primary enterCom" data-toggle="modal" data-target="enterCom" href="" data-parentid="${el.Id}">Comment this</button>
                </div>
            </div>
        `;
        for (let elChild of data.decaKomentari) {
            if (el.Id == elChild.RoditeljId) {
                out += `
                    <div class="media childMedia">
                        <div class="media-body">
                            <h5 class="mt-0">${elChild.ImePrezime} - ${elChild.Kreiran.split(" ")[0]}</h5>
                            <p>
                                ${elChild.Text}
                            </p>
                            <button class="btn btn-primary enterCom" data-toggle="modal" data-target="enterCom" href="" data-parentid="${el.Id}">Comment this</button>
                        </div>
                    </div>
                `;
            }
        }
    }

    return out;
}

function odgovoriNaKomentarPrikazBloka() {

    let comid = this.dataset.comid;
    let userid = this.dataset.userid;
    let blogid = this.dataset.blogid;

    console.log(comid, userid, blogid);

    $('.blockAnswerComment').addClass("blockAnswerComment1");

    $('#answerCommentButton').attr('data-comid', comid);
    $('#answerCommentButton').attr('data-userid', userid);
    $('#answerCommentButton').attr('data-blogid', blogid);

}

function odgovoriNaKomentar() {

    let comid = this.dataset.comid;
    let userid = this.dataset.userid;
    let blogid = this.dataset.blogid;

    console.log(comid, userid, blogid);

    let answerCommentError = [];

    if ($('#answerCommentArea').val() == '') {

        document.getElementById('commentAnswerErrorPar').style.display = 'block';

        answerCommentError.push("greska");

    }

    if (answerCommentError.length == 0) {

        document.getElementById('commentAnswerErrorPar').style.display = 'none';

        $('.blockAnswerComment').removeClass("blockAnswerComment1");

        let commentData = {
            parentComId: comid,
            userId: userid,
            blogId: blogid,
            content: $('#answerCommentArea').val(),
            newComBtn: true
        }

        ajaxPost("api/comment/insertOnParent.php", commentData, data => {
            console.log(data);
        })

        // Ajax za Madica

    }

}

function postaviKomentar() {

    let blogId = this.dataset.blogid;
    let userId = this.dataset.userid;

    console.log(blogId, userId);

    // Vrednost komentara

    let commentPostValue = document.getElementById('commentForABlog').value;

    // Greska paragraf

    let commentPostErrorPar = document.getElementById('commentErrorPar');

    // Regex za post komentara

    let regexComment = /^.+$/;

    if (!regexComment.test(commentPostValue)) {

        commentPostErrorPar.style.display = 'block';

    }

    else {

        commentPostErrorPar.style.display = 'none';

        // Ajax za Madica

        // ajaxGet("api/comment/insert.php", commentData, data => {
        //     console.log(data);
        // })

    }

}