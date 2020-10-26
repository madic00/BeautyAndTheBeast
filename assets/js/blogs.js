$(document).ready(function () {


    // Ispis blogova iz baze

    ajaxGet("api/blog/getAll.php", data => {
        printBlogs(data.blogs);
    })


})

function printBlogs(data) {
    let out = "";

    for (const el of data) {

        out += `
            <a href="index.php?page=singleBlog&blog=${el.id}" class="blogBox">

                <div class="datumPostavljanjaBloga">

                    <p>${formatDate(el.createdAt)}</p>

                </div>

                <div class="blogCardInfo">

                    <p id='autorCardText'>Autor : ${el.authorName}</p>

                    <h3>${el.title}</h3>

                    <p id='shortIntroCardText'>${el.shortDesc}</p>

                </div>

            </a>
        `;

    }

    $(".blogovi").html(out);
}

function formatDate(date) {
    let dateObj = new Date(date);

    let day = dateObj.getDate();
    let month = dateObj.getMonth();
    let year = dateObj.getFullYear();

    return day + "/" + month + "/" + year;
}