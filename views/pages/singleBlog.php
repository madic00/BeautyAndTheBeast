    <!-- Izgled bloga  -->

    <?php 

        if(!isset($_GET['blog'])) {
            redirect("index.php?page=blogs");
        } 

        $blogId = $_GET['blog'];

        $blog = Blog::getSingle($blogId);

        // var_dump($blog);

        $comments = Comment::getParentComments($blogId);
        $childComments = Comment::getChildComments($blogId);


    ?>

    <div class="blogPage container-fluid">

        <div class="blogPicture">

            <div class="blogPictureFade"></div>

        </div>

        <div class="absoluteBlogBox container">

            <h1><?= $blog->title ?></h1>

            <p><?= $blog->mainContent ?> </p>

        </div>

    </div>

    <!-- Komentari -->

    <div class="commentSection">

        <h2>Komentari</h2>

        <?php if($session->isSignedIn()): ?>

        <div class="postYourComment">

            <textarea placeholder="Vaš komentar..." id="commentForABlog" cols="30" rows="10"></textarea>

            <p id='commentErrorPar'>Niste uneli ništa u polje za komentar.</p>

            <button id='postACommentButton' data-blogid="<?= $blogId ?>" data-userid=<?= $session->userId ?>">Postavi Komentar</button>

        </div>

        <?php else: ?>

        <p id='ulogujSeZaKomentar'>Morate se ulogovati da bi ostavili komentar.</p>

        <?php endif; ?>

        <?php if(count($comments) == 0): ?>

        <p id='nemaKomentara'>Nema nijednog komentara na ovom blogu, budi prvi koji će ga postaviti !</p>

        <?php else: ?>

        <div class="komentariIspis">

            <?php foreach($comments as $comment): ?>

                <div class="commentBox">

                    <div class="topCommentPart">

                        <p><?= $comment->authorName ?></p>

                        <p><?= date("d/m/Y", strtotime($comment->createdAt)) ?></p>

                    </div>

                    <div class="middleCommentPart">

                        <p><?= $comment->content ?></p>

                    </div>

                    <div class="botCommentPart">

                        <button id='odgovorNaKomentar' data-comid="<?= $comment->id?>" data-userid="<?= $session->userId?>" data-blogid="<?= $blogId?>">Odgovori Na Komentar</button>

                    </div>

                </div>

                <?php foreach($childComments as $child): ?>

                    <?php if($child->parentCommentId === $comment->id): ?>

                        <div class="commentBox childCommentBox">

                            <div class="topCommentPart">

                                <p><?= $comment->authorName ?></p>

                                <p><?= date("d/m/Y", strtotime($comment->createdAt)) ?></p>

                            </div>

                            <div class="middleCommentPart">

                                <p><?= $comment->content ?></p>

                            </div>

                            <div class="botCommentPart">

                                <button id='odgovorNaKomentar' data-comid="<?= $comment->id?>" data-userid="<?= $session->userId?>" data-blogid="<?= $blogId?>">Odgovori Na Komentar</button>

                            </div>

                        </div>
                    
                    <?php endif; ?>

                <?php endforeach; ?>

            <?php endforeach; ?>

        </div>

        <?php endif; ?>

    </div>

    <!-- Blok za odgovor na komentar -->

    <div class="blockAnswerComment">

        <a href="#!" id='closeAnswerPopUp'><i class="fas fa-times"></i></a>

        <h4>Odgovorite korisniku <br /> *ime korinsika*</h4>

        <textarea id="answerCommentArea" placeholder="Vaš odgovor na komentar..." cols="30" rows="10"></textarea>

        <p id='commentAnswerErrorPar'>Niste uneli ništa u polje za komentar.</p>

        <button id='answerCommentButton'>Postavi</button>

    </div>