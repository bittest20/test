<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->addExternalCss('/bitrix/css/main/bootstrap.css');
?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <table class="table">
        <thead>
          <tr>
            <th><?=GetMessage("TLM_ID")?></th>
            <th><?=GetMessage("TLM_CITY")?></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <? foreach ($arResult['cities'] as $key => $value) {?>
           <tr>
            <th><?=$value['ID']?></th>
            <td><?=$value['NAME']?></td>
            <td><button type="button" class="btn btn-danger del" data-id="<?=$value['ID']?>" data-url="<?= $componentPath ?>/ajax.php"><?=GetMessage("TLM_DELETE")?></button></td>
          </tr>
        <?}?>
         </tbody>
      </table>
  <?=$arResult['NAV']?>
    </div>
  </div>
</div>
