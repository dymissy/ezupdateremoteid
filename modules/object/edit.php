<?php
require_once( "kernel/common/template.php" );
require_once( 'kernel/classes/ezcontentobject.php' );


$module = $Params['Module'];
$tpl = eZTemplate::factory();
$request = eZHTTPTool::instance();
$parameters = $module->getNamedParameters();
$http = eZHttpTool::instance();
$redirectURI = $http->sessionVariable( 'LastAccessesURI' );

try
{
    $object = new eZContentObject( $parameters['object_id'] );

    if ( $http->hasPostVariable( 'DiscardButton' ) )
    {
        return $module->redirectTo( $request->postVariable('RedirectURI') );
    }


    if ($request->hasPostVariable('object'))
    {
        $newRemoteId = $request->postVariable('object');
        $object->setAttribute( 'remote_id', $newRemoteId['remote_id'] );
        $object->sync( array( 'remote_id' ) );

        return $module->redirectTo( $request->postVariable('RedirectURI') );
    }


    $tpl->setVariable( 'object', $object );
    $tpl->setVariable( 'RedirectURI', $redirectURI );

    $Result = array();
    $Result['content'] = $tpl->fetch( "design:object/edit.tpl" );
    $Result['path'] = array( array( 'url' => false,
                                    'text' => ezpI18n::tr( 'kernel/object', 'Update RemoteId' ) ) );
}
catch(Exception $e)
{
    return $module->handleError(eZError::KERNEL_NOT_AVAILABLE, 'kernel');
}
