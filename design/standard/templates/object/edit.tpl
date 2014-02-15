<form method="post">
    <div class="context-block">

        <div class="box-header">
            <div class="box-ml">

                <h1 class="context-title">{'Update Object MetaData'|i18n( 'kernel/object' )}</h1>

                <div class="header-mainline"></div>

                {* DESIGN: Content START *}
                <div class="box-ml">
                    <div class="box-mr">
                        <div class="box-content">
                            <div class="context-information">
                                <p class="modified">{'Last modified'|i18n( 'design/admin/class/edit' )}:&nbsp;{$object.modified|l10n( shortdatetime )}</p>
                            </div>

                            <div class="context-attributes">
                                {* Object Remote ID. *}
                                <div class="block">
                                    <label>{'Remote ID'|i18n( 'design/admin/class/edit' )}:</label>
                                    <input class="box" type="text" id="object_remote_id" name="object[remote_id]" size="30" value="{$object.remote_id}" title="" />
                                </div>
                            </div>
                            {* DESIGN: Content END *}</div>
                    </div>
                </div>

                <div class="controlbar">
                    {* DESIGN: Control bar START *}
                    <div class="box-bc">
                        <div class="box-ml">
                            <div class="box-mr">
                                <div class="box-tc">
                                    <div class="box-bl">
                                        <div class="box-br">
                                            <div class="block">
                                                <input class="button" type="submit" name="StoreButton" value="{'Save'|i18n( 'design/admin/class/edit' )}" title="{'Store changes and exit from edit mode.'|i18n( 'design/admin/class/edit' )|wash}" />
                                                <input class="button" type="submit" name="DiscardButton" value="{'Cancel'|i18n( 'design/admin/class/edit' )}" title="{'Discard all changes and exit from edit mode.'|i18n( 'design/admin/class/edit' )|wash}" />
                                            </div>
                                            {* DESIGN: Control bar END *}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
</form>