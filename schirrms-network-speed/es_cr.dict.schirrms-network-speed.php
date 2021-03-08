<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2019 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('ES CR', 'Spanish', 'Español, Castellaño', array(
	// Dictionary entries go here
	'Class:NetworkSpeed' => 'Velocidad de la Red',
	'Class:NetworkSpeed/Attribute:humanspeed' => 'Velocidad de conexión legible por humanos',
	'Class:NetworkSpeed/Attribute:humanspeed+' => 'Campo de solo lectura. Muestra la velocidad de la red en una forma legible por humanos. Se calcula a partir de la velocidad en bits.',
	'Class:NetworkSpeed/Attribute:bitspeed' => 'Velocidad de conexión en Bits',
	'Class:NetworkSpeed/Attribute:bitspeed+' => 'Configure en este campo la velocidad de la red en Bits. Sí, el número puede (y normalmente lo será) ser enorme.',
	'Class:NetworkSpeed/Attribute:comment' => 'Notas complementarias',
	'Class:NetworkSpeed/Attribute:humanspeed_id' => 'Velocidad Legible por Humanos',
	'Class:NetworkSpeed/Attribute:IPInterfaces_list' => 'Todas las interfaces a esta velocidad',
	'Class:NetworkSpeed/UniquenessRule:bitspeed' => 'Ya hay una velocidad \'$this->bitspeed$\' ($this->humanspeed$) definida',
	'Class:NetworkSpeed/UniquenessRule:bitspeed+' => 'Solo puede haber una entrada por velocidad',
	'Class:IPInterface/Attribute:human_speed' => 'Velocidad Legible por Humanos',
	'Class:IPInterface/Attribute:humanspeed_id+' => 'Seleccione aquí la velocidad de la interfaz. Clic \'+\' si la velocidad no está presente.',
	'Class:PhysicalInterface/Attribute:humanspeed_id' => 'Velocidad Legible por Humanos',
	'Class:PhysicalInterface/Attribute:humanspeed_id+' => 'Seleccione aquí la velocidad de la interfaz. Clic \'+\' si la velocidad no está presente.',
));
?>
