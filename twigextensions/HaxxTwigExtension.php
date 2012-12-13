<?php
namespace Blocks;

class HaxxTwigExtension extends \Twig_Extension
{

	public function getName()
	{
		return Blocks::t('Haxx (1337)');
	}

	public function getFilters()
	{
		return array(
			'haxx' => new \Twig_Filter_Method($this, 'haxxFilter')
		);
	}

	public function haxxFilter($str)
	{
		// Convert foreign chars to something we can work with
		$normalizeChars = array(
            'Á'=>'A', 'À'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Å'=>'A', 'Ä'=>'A', 'Æ'=>'AE', 'Ç'=>'C',
            'É'=>'E', 'È'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Í'=>'I', 'Ì'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ð'=>'Eth',
            'Ñ'=>'N', 'Ó'=>'O', 'Ò'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O',
            'Ú'=>'U', 'Ù'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y',

            'á'=>'a', 'à'=>'a', 'â'=>'a', 'ã'=>'a', 'å'=>'a', 'ä'=>'a', 'æ'=>'ae', 'ç'=>'c',
            'é'=>'e', 'è'=>'e', 'ê'=>'e', 'ë'=>'e', 'í'=>'i', 'ì'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'eth',
            'ñ'=>'n', 'ó'=>'o', 'ò'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o',
            'ú'=>'u', 'ù'=>'u', 'û'=>'u', 'ü'=>'u', 'ý'=>'y',

            'ß'=>'sz', 'þ'=>'thorn', 'ÿ'=>'y'
        );

        // HaXX0r$!!1
        $haxxChars = array(
            'a'=>'4', 'A'=>'4',
            'b'=>'8', 'B'=>'8',
            'c'=>'¢', 'C'=>'¢',
            'e'=>'3', 'E'=>'3',
            'g'=>'9', 'G'=>'6',
            'h'=>'#', 'H'=>'#',
            'i'=>'!', 'I'=>'|',
            'j'=>';', 'J'=>';',
            'l'=>'1', 'L'=>'1',
            'o'=>'0', 'O'=>'0',
            'q'=>'9', 'Q'=>'9',
            'r'=>'2', 'R'=>'2',
            's'=>'5', 'S'=>'$',
            't'=>'7', 'T'=>'7',
            'u'=>'v', 'U'=>'V'
        );

        $str = strtr($str, $normalizeChars);
        $str = strtr($str, $haxxChars);

		return trim($str);
	}

}
