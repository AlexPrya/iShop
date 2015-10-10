<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?
$cp = $this->__component;

foreach ($arResult['SECTIONS'] as  $key => &$arOneSection)
{
    $arOneSection['IS_ACTIVE'] = strstr($_SERVER["REQUEST_URI"],$arOneSection["CODE"]) ? 'active' : '';
 if (is_object($cp))
 {
     $cp->$arResult['SECTIONS'][$key]['IS_ACTIVE'] = $arOneSection['IS_ACTIVE'];
 }
}
?>

<script>
    log = <?=CUtil::PhpToJSObject($arResult['SECTIONS'])?>;
    console.log(log);
</script>


