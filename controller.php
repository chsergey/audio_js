<?php
/**
 * Created by JetBrains PhpStorm.
 * User: chunizhekov_s
 * Date: 27.03.13
 * Time: 16:16  
 */
defined('C5_EXECUTE') or die("Access Denied.");

class AudioJsBlockController extends BlockController {

	protected $btDescription = 'Аудиозапись';
	protected $btName = 'Аудиозапись';
	protected $btTable = 'btAudioJs';

	public function on_page_view() {
		$html = Loader::helper('html');
		$this->addHeaderItem($html->javascript('audio.min.js'));
	}

}