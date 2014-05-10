<?php
namespace Cnab\Cnab240\Retorno;

class SegmentoU extends \Cnab\Format\Linha
{
	public function __construct($codigo_banco)
    {
        $yamlLoad = new \Cnab\Format\YamlLoad($codigo_banco);
        $yamlLoad->load($this, CNAB_FORMAT_PATH.'/cnab240/retorno/detalhe_segmento_u.yml');
	}
}
