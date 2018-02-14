[{$smarty.block.parent}]

<tr>
    <td class="edittext">
    [{oxmultilang ident="MYMODULE_ARTICLE_MAIN_SECOND_TITLE"}]&nbsp;
    </td>
    <td class="edittext">
    <input type="text" class="editinput" size="32" name="editval[oxarticles__mymodulesecondheadline]" value="[{if !$edit->oxarticles__mymodulesecondheadline->value}][{$edit->defaultValueSecondHeadline}][{else}][{$edit->oxarticles__mymodulesecondheadline->value}][{/if}]">
    </td>
</tr>