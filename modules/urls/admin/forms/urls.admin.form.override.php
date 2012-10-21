<?php
/*
* SiteSense
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@sitesense.org so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade SiteSense to newer
* versions in the future. If you wish to customize SiteSense for your
* needs please refer to http://www.sitesense.org for more information.
*
* @author     Full Ambit Media, LLC <pr@fullambit.com>
* @copyright  Copyright (c) 2011 Full Ambit Media, LLC (http://www.fullambit.com)
* @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
$this->caption=$data->phrases['urls']['addOverride'];
$this->submitTitle=$data->phrases['urls']['addOverride'];
$this->fields=array(
	'match' => array(
		'label' => $data->phrases['urls']['pattern'],
		'required' => true,
		'tag' => 'input',
		'value' => isset($data->output['urlremap']['match']) ? $data->output['urlremap']['match'] : '',
		'params' => array(
			'type' => 'text',
			'size' => 256
		),
		'description' => '
			<p>
				<b>'.$data->phrases['urls']['labelMatch'].'</b>
			</p>
		'
	),
	'isRedirect' => array(
		'label' => $data->phrases['urls']['labelType'],
        'required' => true,
		'tag' => 'select',
		'value' => isset($data->output['urlremap']['type']) ? $data->output['urlremap']['type'] : '',
		'options' => array(
			array(
				'text' => $data->phrases['urls']['labelPageTitle'],
				'value'=> '2',
			),
			array(
				'text' => $data->phrases['urls']['labelMetaKeywords'],
				'value'=> '3',
			),
			array(
				'text' => $data->phrases['urls']['labelMetaDescription'],
				'value'=>'4',
			),
		),
		'description' => '
			<p>
				<b>'.$data->phrases['urls']['labelType'].'</b><br />
			</p>
		'
	),
	'replace' => array(
		'label' => $data->phrases['urls']['labelValue'],
		'required' => true,
		'tag' => 'input',
		'value' => isset($data->output['urlremap']['replace']) ? $data->output['urlremap']['replace'] : '',
		'params' => array(
			'type' => 'text',
		),
		'description'=>'
			<b>'.$data->phrases['urls']['labelValue'].'</b><br />
			'.$data->phrases['urls']['descriptionValue'],
	),
	'hostname' => array(
		'tag' => 'select',
		'label' => $data->phrases['urls']['hostname'],
		'required' => false,
		'options' => array(
			array(
				'value' => '',
				'text' => 'Global'
			)
		),
		'value' => (isset($data->output['urlremap']['hostname'])) ? $data->output['urlremap']['hostname'] : ''
	),
);
foreach($data->output['hostnameList'] as $hostnameItem){
	$this->fields['hostname']['options'][] = array(
		'value' => $hostnameItem['hostname'],
		'text' => $hostnameItem['hostname']
	);
}