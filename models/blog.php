<?php 

    class Blog extends DbObject{

        public $id;
        public $title;
        public $createdAt;
        public $idAuthor;
        public $shortDesc;
        public $mainImg;
        public $backgroundImg;
        public $mainContent;
        public $uploadDir = "assets/images";
        public $placeholderImg = "assets/images/planTreninga.jpg";
        public $authorName;

        protected static $dbTable = "blogs";
        protected static $tableFields = array("title", "createdAt", "idAuthor", "shortDesc", "mainImg", "backgroundImg", "mainContent");
        protected static $idColumnName = "id";

        public static function getAllInfo() {
            $sql = "SELECT b.*, CONCAT(u.firstName, ' ', u.lastName) as authorName FROM " . self::$dbTable . " b INNER JOIN users u ON b.idAuthor = u.id";

            return static::getByQuery($sql);
        }

        public function blogImg() {
            return empty($this->mainImg) ? $this->placeholderImg : $this->uploadDir . "/" . $this->userImg;
        }

        public function set_file($file) {

            if(empty($file) || !$file || !is_array($file)) {
                $this->customErrors[] = "There was no file uploaded here";
                return false;
            } elseif($file['error'] != 0) {
                $this->customErrors[] = $this->uploadErrors[$file['error']];
                return false;
            } else {
                $this->mainImg = basename($file['name']);
                $this->tmpPath = $file['tmp_name'];
                $this->type = $file['type'];
                $this->size = $file['size'];
            }

        }

        public function uploadImg() {
            // if($this->id) {
            //     $this->update();
            // } else {

                if(!empty($this->customErrors)) {
                    return false;
                }

                if(empty($this->mainImg) || empty($this->tmpPath)) {
                    $this->customErrors[] = "The file was not available";
                    return false;
                }

                $targetPath = SITE_ROOT . "/{$this->uploadDir}/" . $this->mainImg;

                echo $targetPath;

                if(file_exists($targetPath)) {
                    $this->customErrors[] = "The file {$this->mainImg} already exists";
                    return false;
                }

                if(move_uploaded_file($this->tmpPath, $targetPath)) {
                    // if($this->create()) {
                        unset($this->tmpPath);
                        return true;
                    // }

                } else {
                    $this->customErrors[] = "The file directory doesn't have permission";
                    return false;
                }

            // }
        }

        public function saveUserImage($blogId, $blogImage) {
            global $db;

            // $userImage = $db->escape_string($userImage);
            // $userId = $db->escape_string($userId);

            $this->mainImg = $blogImage;
            $this->id = $blogId;

            $sql = "UPDATE " . self::$dbTable . " SET mainImg = '{$this->mainImg}' WHERE id = {$this->id} ";
            $updateImg = $db->execQuery($sql);

            echo $this->mainImg();
        }

        public function deleteUserImg() {
            if($this->delete()) {
                $targetPath = SITE_ROOT . "/{$this->uploadDir}/{$this->mainImg}";

                return unlink($targetPath) ? true : false;
            } else {
                return false;
            }
        }


    }


?>