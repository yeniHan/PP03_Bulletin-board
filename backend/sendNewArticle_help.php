<?php
    require '../setup.php';
// CREATE TABLE `help_articles`(
//     `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     `author_id` VARCHAR(11) NOT NULL,
//     `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
//     `title` VARCHAR(100) NOT NULL,
//     `content` VARCHAR(1500) NOT NULL,
//     `kind` VARCHAR(25) NOT NULL,
//     `sticky` TINYINT(1) NOT NULL,
//     `parent_article_id` INT(11) NULL,
//     `re_step` SMALLINT(2) NULL,  
//     `password` VARCHAR(4) NULL,
//     `hits` INT(11) NOT NULL,
//     `tags` VARCHAR(250) NULL,
//     `files` VARCHAR(500) NULL
// );
//
// let obj = {
//     author_id: author_id,        
//     title: title,
//     password: password,
//     kind: kind,
//     content: content,
//     files: json_files,
//     tags: json_tags, 
// };
$result = "sent";

function convertData($input){
    if($input === "" || $input === "[]"){
        return null;
    }else if($input === true){
        return 1;
    }else if($input === false){
        return 0;
    }else{
        return $input;
    }
}


$json = file_get_contents("php://input");
$assArr = json_decode($json, true);

$author_id = $assArr["author_id"];
$title = $assArr["title"];
$content = $assArr["content"];
$kind = $assArr["kind"];
$sticky = convertData($assArr["sticky"]);
$parent_article_id = null;
if(isset($assArr["parent_article_id"])){
    $parent_article_id = $assArr["parent_article_id"];
}
$files = convertData($assArr["files"]);
$arti_password = convertData($assArr["password"]);
$tags = convertData($assArr["tags"]);

//Chk if datas fro all necessary fieds were sent 
if(isset($author_id) && isset($title) && isset($content) && isset($kind)){
    try{

        $stmt = $connection->prepare("
            INSERT INTO `help_articles`
             (`sticky`, `author_id`, `title`, `kind`, `content`, `password`, `tags`, `files`, `parent_article_id`)
            VALUES
                (:sticky, :author_id, :title, :kind, :content, :password, :tags, :files, :parent_article_id);");

        function passNullOrData($dataname, $data, $stmt){
            if($data === null){
                $stmt->bindValue(':'. $dataname, null, PDO::PARAM_NULL);
            }else{
                $stmt->bindParam(':'. $dataname, $data);
            }
        }

        $stmt->bindParam(':sticky', $sticky);
        $stmt->bindParam(':author_id', $author_id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':kind', $kind);
        $stmt->bindParam(':content', $content);
        passNullOrData("password", $arti_password, $stmt);
        passNullOrData("tags", $tags, $stmt);
        passNullOrData("files", $files, $stmt);
        passNullOrData("parent_article_id", $parent_article_id, $stmt);

        $stmt->execute();

        //Update the `numOfChildren` data of the parent article of this article.
        if($parent_article_id !== null){
            $stmt2 = $connection->prepare("UPDATE `help_articles` SET `numOfChildren` = (`numOfChildren` + 1 ) WHERE `id`=:parent_article_id;");
            $stmt2->bindParam(":parent_article_id", $parent_article_id);
            $stmt2->execute();
        }

        $connection = null;
        $stmt = null;

    }catch(PDOException $e){
        $result = "ERROR: PDO exception has been caused.";
    }
    
}else{
    $result = "ERROR: The data for all necessary fields were not sent.";
}

echo $result;

?>