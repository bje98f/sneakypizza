<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author		Paul Thickett
 */
class Plugin_Video extends Plugin
{
	
	function youtube()
	{
		$width = ($this->attribute('width')!='') ? $this->attribute('width') : '646';
		$height = ($this->attribute('height')!='') ? $this->attribute('height') : '370';
		$id = ($this->attribute('id')!='') ? $this->attribute('id') : '';
		$tag = ($this->attribute('tag')!='') ? $this->attribute('tag') : '';
		
		if ($id!=''):
			$video = '';
			if($tag!=''): $video .= '<'.$wrap.'>';endif;
			$video .= '<iframe width="'.$width.'" height="'.$height.'" src="http://www.youtube.com/embed/'.$id.'?rel=0&hd=1&wmode=opaque&autoplay=0&autohide=1&showinfo=0&theme=dark&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>';
			if($tag!=''): $video .= '</'.$wrap.'>';endif;
			return $video;
		else:
			return '';
		endif;

	}

	function vimeo()
	{
		$width = ($this->attribute('width')!='') ? $this->attribute('width') : '646';
		$height = ($this->attribute('height')!='') ? $this->attribute('height') : '370';
		$id = ($this->attribute('id')!='') ? $this->attribute('id') : '';
		$tag = ($this->attribute('tag')!='') ? $this->attribute('tag') : '';
		
		if ($id!=''):
			$video = '';
			if($tag!=''): $video .= '<'.$wrap.'>';endif;
			$video .= '<iframe src="http://player.vimeo.com/video/'.$id.'" width="'.$width.'" height="'.$height.'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
			if($tag!=''): $video .= '</'.$wrap.'>';endif;
			return $video;
		else:
			return '';
		endif;
	}

	function dailymotion()
	{
		$width = ($this->attribute('width')!='') ? $this->attribute('width') : '646';
		$height = ($this->attribute('height')!='') ? $this->attribute('height') : '370';
		$id = ($this->attribute('id')!='') ? $this->attribute('id') : '';
		$tag = ($this->attribute('tag')!='') ? $this->attribute('tag') : '';
		
		if ($id!=''):
			$video = '';
			if($tag!=''): $video .= '<'.$wrap.'>';endif;
			$video .= '<iframe frameborder="0" width="'.$width.'" height="'.$height.'" src="http://www.dailymotion.com/embed/video/'.$id.'"></iframe>';
			if($tag!=''): $video .= '</'.$wrap.'>';endif;
			return $video;
		else:
			return '';
		endif;
	}


}
