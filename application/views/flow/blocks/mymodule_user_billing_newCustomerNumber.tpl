

<div class="form-group[{if $aErrors.oxuser__oxnewcustnr}] text-danger[{/if}]">
    <label class="control-label col-lg-3[{if $oView->isFieldRequired(oxuser__oxnewcustnr)}] req[{/if}]">[{oxmultilang ident="PERSONAL_NEWCUSTOMERNR"}]</label>
    <div class="col-lg-9">
        <input class="form-control" type="text" maxlength="64" name="invadr[oxuser__oxnewcustnr]" value="[{if isset( $invadr.oxuser__oxnewcustnr )}][{$invadr.oxuser__oxnewcustnr}][{else}][{$oxcmp_user->oxuser__oxnewcustnr->value}][{/if}]"[{if $oView->isFieldRequired(oxuser__oxnewcustnr)}] required=""[{/if}]>
        [{include file="message/inputvalidation.tpl" aErrors=$aErrors.oxuser__oxnewcustnr}]
        <div class="help-block"></div>
    </div>
</div>