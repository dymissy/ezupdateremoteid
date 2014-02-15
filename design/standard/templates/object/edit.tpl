<form method="post">
    <div class="context-block">

        <div class="box-header">
            <div class="box-ml">

                <h1 class="context-title">{'Update RemoteId'|i18n( 'kernel/object' )}</h1>

                <div class="header-mainline"></div>

                {* DESIGN: Content START *}
                <div class="box-ml">
                    <div class="box-mr">
                        <div class="box-content">
                            <div class="context-attributes">
                                {* Object Remote ID. *}
                                <div class="block">
                                    <label>{'New RemoteID'|i18n( 'kernel/object' )}:</label>
                                    <input class="box" type="text" id="object_remote_id" name="object[remote_id]" size="30" value="{$object.remote_id}" title="" />
                                </div>
                            </div>
                            {* DESIGN: Content END *}</div>
                    </div>
                </div>

                <div class="controlbar">
                    <div class="button-left">
                        <div class="block">
                            <input class="button" type="submit" name="StoreButton" value="{'Publish'|i18n( 'design/admin/content/view/versionview' )}" title="{'Store changes and exit from edit mode.'|i18n( 'design/admin/class/edit' )|wash}" />
                            <input class="button" type="submit" name="DiscardButton" value="{'Cancel'|i18n( 'design/admin/class/edit' )}" title="{'Discard all changes and exit from edit mode.'|i18n( 'design/admin/class/edit' )|wash}" />
                            <input type="hidden" name="RedirectURI" value="{$RedirectURI}" />
                        </div>
                    </div>


                </div>
            </div>

        </div>
</form>