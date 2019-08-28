<?php
$oData = new stdClass;
$oData->in = rex_var::toArray("REX_VALUE[1]")[0];

$oData->marginBot = $oData->in["marginBot"] ? $oData->in["marginBot"] : "nv-margin-bottom-small";
$oData->cols = $oData->in["cols"] ? $oData->in["cols"] : "col-12";
$oData->justify = $oData->in["justify"] ? $oData->in["justify"] : "justify-content-lg-start";
?>

<section class="nv-module-text row <?=$oData->marginBot?> <?=$oData->justify?>">
	<div class="<?=$oData->cols?> <?=$oData->in["color"]?> <?=$oData->in["fontSize"]?>">
		<?=$oData->in["text"]?>
	</div>
</section>