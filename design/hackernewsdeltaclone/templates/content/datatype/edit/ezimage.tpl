{**** ep image editor *****}
{run-once}
{if is_set($ezie_ajax_response)|not()}
    {include uri='design:ezie/gui.tpl' attribute=$attribute}
{/if}
{/run-once}

{default attribute_base='ContentObjectAttribute'}
{let attribute_content=$attribute.content}

{* Current image. *}
<div class="block">
    <label class="form-label">{'Current image(s)'|i18n( 'design/standard/content/datatype' )}</label>
    {section show=$attribute_content.original.is_valid}
        <table class="table table-bordered" cellspacing="0">
            <tr>
                <th>{'Preview'|i18n( 'design/standard/content/datatype' )}</th>
                <th>{'Filename'|i18n( 'design/standard/content/datatype' )}</th>
                <th>{'MIME type'|i18n( 'design/standard/content/datatype' )}</th>
                <th>{'Size'|i18n( 'design/standard/content/datatype' )}</th>
            </tr>
            <tr>
                <td>{attribute_view_gui image_class=ezini( 'ImageSettings', 'DefaultEditAlias', 'content.ini' ) attribute=$attribute}
                </td>
                <td>{$attribute.content.original.original_filename|wash( xhtml )}</td>
                <td>{$attribute.content.original.mime_type|wash( xhtml )}</td>
                <td>{$attribute.content.original.filesize|si( byte )}</td>
            </tr>
        </table>

        {* Edit button *}
        <input type="button" class="btn ezieEdit ezieEditButton"
            name="ezieEdit[{array( "ezie/prepare", $attribute.contentobject_id, $attribute.language_code, $attribute.id, $attribute.version )|implode( '/' )|ezurl( no )}]"
            id="ezieEdit_{$attribute.id}_{$attribute.version}_{$attribute.contentobject_id}"
            value="{'Edit'|i18n( 'design/standard/ezie' )}" {if $attribute_content.original.is_valid|not}
            disabled="disabled" {/if} />

        {section-else}
            <table class="table table-bordered" cellspacing="0">
                <tr>
                    <th>{'Preview'|i18n( 'design/standard/content/datatype' )}</th>
                    <th>{'Filename'|i18n( 'design/standard/content/datatype' )}</th>
                    <th>{'MIME type'|i18n( 'design/standard/content/datatype' )}</th>
                    <th>{'Size'|i18n( 'design/standard/content/datatype' )}</th>
                </tr>
                <tr>
                    <td colspan="4">
                        <p>{'There is no image file.'|i18n( 'design/standard/content/datatype' )}</p>
                    </td>
                </tr>
            </table>
        {/section}


        {section show=$attribute_content.original.is_valid}
            <input class="btn" type="submit" name="CustomActionButton[{$attribute.id}_delete_image]"
                value="{'Remove image'|i18n( 'design/standard/content/datatype' )}" />
            {section-else}
                <input class="btn" type="submit" name="CustomActionButton[{$attribute.id}_delete_image]"
                    value="{'Remove image'|i18n( 'design/standard/content/datatype' )}" disabled="disabled" />
            {/section}
        </div>


        {* New image file for upload. *}
        <div class="form-group block" style="margin-top:1em;">
            <input type="hidden" name="MAX_FILE_SIZE" value="{$attribute.contentclass_attribute.data_int1|mul( 1024, 1024 )}" />
            <label class="form-label">{'New image file for upload'|i18n( 'design/standard/content/datatype' )}</label>
            <input
                id="ezcoa-{if ne( $attribute_base, 'ContentObjectAttribute' )}{$attribute_base}-{/if}{$attribute.contentclassattribute_id}_{$attribute.contentclass_attribute_identifier}_file"
                class="form-control box ezcc-{$attribute.object.content_class.identifier} ezcca-{$attribute.object.content_class.identifier}_{$attribute.contentclass_attribute_identifier}"
                name="{$attribute_base}_data_imagename_{$attribute.id}" type="file" />
        </div>

        {* Alternative image text. *}
        <div class="form-group block">
            <label class="form-label">{'Alternative image text'|i18n( 'design/standard/content/datatype' )}</label>
            <input
                id="ezcoa-{if ne( $attribute_base, 'ContentObjectAttribute' )}{$attribute_base}-{/if}{$attribute.contentclassattribute_id}_{$attribute.contentclass_attribute_identifier}_alttext"
                class="form-control box ezcc-{$attribute.object.content_class.identifier} ezcca-{$attribute.object.content_class.identifier}_{$attribute.contentclass_attribute_identifier}"
                name="{$attribute_base}_data_imagealttext_{$attribute.id}" type="text"
                value="{$attribute_content.alternative_text|wash(xhtml)}" />
        </div>

        {/let}
        {/default}