<?php
require_once( "kernel/common/template.php" );

$module = $Params['Module'];
$tpl = eZTemplate::factory();
$request = eZHTTPTool::instance();
$parameters = $module->getNamedParameters();

try
{
    $object = array(
        'id' => $parameters['object_id'],
        'title' => 'object title'
    );

    $tpl->setVariable( 'object', $object );
    $Result = array();
    $Result['content'] = $tpl->fetch( "design:object/edit.tpl" );
    $Result['path'] = array( array( 'url' => false,
                                    'text' => ezpI18n::tr( 'kernel/object', 'Update Object MetaData' ) ) );
}
catch(Exception $e)
{
    return $module->handleError(eZError::KERNEL_NOT_AVAILABLE, 'kernel');
}