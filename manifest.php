<?php

/*********************************************************************************
* This code was developed by:
* Audox Ingenierķa Ltda.
* You can contact us at:
* Web: www.audox.cl
* Email: info@audox.cl
* Skype: audox.ingenieria
********************************************************************************/

$manifest = array(
	'acceptable_sugar_flavors' => array(
		'CE',
		'PRO',
		'ENT',
		'CORP',
		'ULT',
	),
	'acceptable_sugar_versions' => array(
		'6*',
		'7*',
	),
	'is_uninstallable' => true,
	'name' => 'Custom Opportunities - LogicHooks',
	'author' => 'Audox Ingenieria Ltda',
	'description' => 'Custom Opportunities - LogicHooks',
	'published_date' => '2015/09/02',
	'version' => 'v1.0',
	'type' => 'module',
);

$installdefs = array(
	'copy' => array(
		array(
			'from' => '<basepath>/OpportunitiesHooks.php',
			'to' => 'custom/modules/Opportunities/OpportunitiesHooks.php',
		),
	),
	'logic_hooks' => array(
		array(
			'module' => 'Opportunities',
			'hook' => 'after_delete',
			'order' => 99,
			'description' => 'Custom Opportunities',
			'file' => 'custom/modules/Opportunities/OpportunitiesHooks.php',
			'class' => 'OpportunitiesHooks',
			'function' => 'afterDelete',
		),
		array(
			'module' => 'Opportunities',
			'hook' => 'after_relationship_add',
			'order' => 99,
			'description' => 'Custom Opportunities',
			'file' => 'custom/modules/Opportunities/OpportunitiesHooks.php',
			'class' => 'OpportunitiesHooks',
			'function' => 'afterRelationshipAdd',
		),
		array(
			'module' => 'Opportunities',
			'hook' => 'after_relationship_delete',
			'order' => 99,
			'description' => 'Custom Opportunities',
			'file' => 'custom/modules/Opportunities/OpportunitiesHooks.php',
			'class' => 'OpportunitiesHooks',
			'function' => 'afterRelationshipDelete',
		),
		array(
			'module' => 'Opportunities',
			'hook' => 'after_restore',
			'order' => 99,
			'description' => 'Custom Opportunities',
			'file' => 'custom/modules/Opportunities/OpportunitiesHooks.php',
			'class' => 'OpportunitiesHooks',
			'function' => 'afterRestore',
		),
		array(
			'module' => 'Opportunities',
			'hook' => 'after_retrieve',
			'order' => 99,
			'description' => 'Custom Opportunities',
			'file' => 'custom/modules/Opportunities/OpportunitiesHooks.php',
			'class' => 'OpportunitiesHooks',
			'function' => 'afterRetrieve',
		),
		array(
			'module' => 'Opportunities',
			'hook' => 'after_save',
			'order' => 99,
			'description' => 'Custom Opportunities',
			'file' => 'custom/modules/Opportunities/OpportunitiesHooks.php',
			'class' => 'OpportunitiesHooks',
			'function' => 'afterSave',
		),
		array(
			'module' => 'Opportunities',
			'hook' => 'before_delete',
			'order' => 99,
			'description' => 'Custom Opportunities',
			'file' => 'custom/modules/Opportunities/OpportunitiesHooks.php',
			'class' => 'OpportunitiesHooks',
			'function' => 'beforeDelete',
		),
		array(
			'module' => 'Opportunities',
			'hook' => 'before_relationship_add',
			'order' => 99,
			'description' => 'Custom Opportunities',
			'file' => 'custom/modules/Opportunities/OpportunitiesHooks.php',
			'class' => 'OpportunitiesHooks',
			'function' => 'beforeRelationshipAdd',
		),
		array(
			'module' => 'Opportunities',
			'hook' => 'before_relationship_delete',
			'order' => 99,
			'description' => 'Custom Opportunities',
			'file' => 'custom/modules/Opportunities/OpportunitiesHooks.php',
			'class' => 'OpportunitiesHooks',
			'function' => 'beforeRelationshipDelete',
		),
		array(
			'module' => 'Opportunities',
			'hook' => 'before_restore',
			'order' => 99,
			'description' => 'Custom Opportunities',
			'file' => 'custom/modules/Opportunities/OpportunitiesHooks.php',
			'class' => 'OpportunitiesHooks',
			'function' => 'beforeRestore',
		),
		array(
			'module' => 'Opportunities',
			'hook' => 'before_save',
			'order' => 99,
			'description' => 'Custom Opportunities',
			'file' => 'custom/modules/Opportunities/OpportunitiesHooks.php',
			'class' => 'OpportunitiesHooks',
			'function' => 'beforeSave',
		),
		array(
			'module' => 'Opportunities',
			'hook' => 'handle_exception',
			'order' => 99,
			'description' => 'Custom Opportunities',
			'file' => 'custom/modules/Opportunities/OpportunitiesHooks.php',
			'class' => 'OpportunitiesHooks',
			'function' => 'handleException',
		),
		array(
			'module' => 'Opportunities',
			'hook' => 'process_record',
			'order' => 99,
			'description' => 'Custom Opportunities',
			'file' => 'custom/modules/Opportunities/OpportunitiesHooks.php',
			'class' => 'OpportunitiesHooks',
			'function' => 'processRecord',
		),
	),
);

?>
