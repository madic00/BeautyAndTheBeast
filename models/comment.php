<?php 

    class Comment extends DbObject {
        public $id;
        public $idBlog;
        public $idUser;
        public $content;
        public $createdAt;
        public $parentCommentId = null;
        public $authorName;

        protected static $dbTable = "comments";
        protected static $tableFields = array("idUser", "content", "createdAt", "parentCommentId", "idBlog");

        public static function createComment($blogId, $userId, $content) {
            if(!empty($blogId) && !empty($userId) &&!empty($content)) {
                $comment = new Comment();

                $comment->idBlog = $blogId;
                $comment->userId = $userId;
                $comment->content = $content;

                return $comment;
            } else {
                return false;
            }
        }

        public static function findComments($blogId) {
            $sql = "SELECT c.*, CONCAT(u.firstName, ' ', u.lastName) as authorName FROM " . self::$dbTable . " c INNER JOIN users u ON c.idUser = u.id WHERE idBlog = {$blogId} ORDER BY createdAt ASC";

            return self::getByQuery($sql);
        }

        public static function getParentComments($blogId) {
            $sql = "SELECT c.*, CONCAT(u.firstName, ' ', u.lastName) as authorName FROM " . self::$dbTable . " c INNER JOIN users u ON c.idUser = u.id WHERE idBlog = {$blogId} AND parentCommentId IS NULL ORDER BY createdAt ASC";

            return self::getByQuery($sql);
        }

        public static function getChildComments($blogId) {
            $sql = "SELECT c.*, CONCAT(u.firstName, ' ', u.lastName) as authorName FROM " . self::$dbTable . " c INNER JOIN users u ON c.idUser = u.id WHERE idBlog = {$blogId} AND parentCommentId IS NOT NULL ORDER BY createdAt ASC";

            return self::getByQuery($sql);
        }
        
    }


?>