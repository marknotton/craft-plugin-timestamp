<?php
namespace Craft;

use Twig_Filter_Method;

class timestamp extends \Twig_Extension {

	public function getName()	{
		return Craft::t('Timestamp');
	}

	public function getFilters() {
		return array(
			'timestamp' => new Twig_Filter_Method( $this, 'timestamp', array('is_safe' => array('html'))),
		);
	}

	// Date time format
	// {{ entry|timestamp('format') }}
	// http://php.net/manual/en/function.date.php
	public function timestamp($entry, $format="M d Y", $wrap=null)	{

    $date = new DateTime($entry->postDate);

    $time = $date->format($format);
		if ( is_null($wrap)) {
    	$html = '<time datetime="'. $date->format('c') .'">'.$time.'</time>';
		} else {
			$html = '<time datetime="'. $date->format('c') .'">'.preg_replace('([a-zA-Z.,!?0-9]+(?![^<]*>))', '<'.$wrap.'>$0</'.$wrap.'>', $time).'</time>';
		}

		return $html;
	}
}
