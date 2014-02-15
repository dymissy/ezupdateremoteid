<?php
require_once( "kernel/common/template.php" );
require_once( 'kernel/classes/ezcontentobject.php' );


$module = $Params['Module'];
$tpl = eZTemplate::factory();
$request = eZHTTPTool::instance();
$parameters = $module->getNamedParameters();

try
{
    $object = new eZContentObject( $parameters['object_id'] );

    if ($request->hasPostVariable('object'))
    {
        //$request->postVariable('object');
        $newRemoteId = $request->postVariable('object');
        $object->setAttribute( 'remote_id', $newRemoteId['remote_id'] );
        $object->sync( array( 'remote_id' ) );

        eZContentObject::clearCache( $parameters['object_id'] );
    }



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
