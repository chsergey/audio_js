<?php
/**
 * Created by JetBrains PhpStorm.
 * User: chunizhekov_s
 * Date: 27.03.13
 * Time: 16:24
 */
defined( 'C5_EXECUTE' ) or die( _( "Access Denied." ) );
$al = Loader::helper( 'concrete/asset_library' );
?>
<h3>Добавить аудиозапись</h3>
<p>
	<?=$al->audio( 'fileId' , 'fileId' , 'Выбрать аудиозапись...' , File::getByID( $fileId ) )?>
</p>
<p>
	<div><?=$form->label( 'title' , 'Заголовок аудиозаписи' );?></div>
	<div><?=$form->text( 'title' , $title , array( 'style' => 'padding:8px;width:407px;border-radius:4px;border:1px solid #999' , 'maxlength' => '255' ) );?></div>
</p>