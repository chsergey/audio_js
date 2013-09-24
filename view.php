<?php
/**
 * Created by JetBrains PhpStorm.
 * User: chunizhekov_s
 * Date: 27.03.13
 * Time: 16:16  
 */

$f = File::getByID($fileId);
$fv = $f->getApprovedVersion();

$f_path = $fv->getRelativePath();
//$f_name = $f->getFileName();

?>
<div class="audiojs-wrapper">
	<div class="audiojs-title"><?=$title?></div>
	<audio src="<?=$f_path?>" preload="auto"></audio>
</div>
