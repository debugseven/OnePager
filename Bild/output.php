<?php  
$oData = new stdClass;
$oData->in = rex_var::toArray("REX_VALUE[1]")[0];
$oData->img = MEDIA . $oData->in["REX_MEDIA_1"];
$oData->marginBot = $oData->in["marginBot"] ? $oData->in["marginBot"] : "nv-margin-bottom-small";
$oData->link = rex_getUrl($oData->in["1"]);
$oData->cols = $oData->in["cols"] ? $oData->in["cols"] : "col-12";
$oData->justify = $oData->in["justify"] ? $oData->in["justify"] : "justify-content-lg-start";
?>

<section class="nv-module-pictures row <?=$oData->marginBot?> <?=$oData->justify?>">
	<div class="<?=$oData->cols?>">
		<div class="nv-container">
			<? if($oData->in["1"]) { ?>
				<a href="<?=$oData->link?>">
			<? } ?>
			
					<img src="<?=$oData->img?>" alt="picture">		
			<? if($oData->in["1"]) { ?>	
				</a>
			<? } ?>

			<? if($oData->in["number"] || $oData->in["text"]) { ?>
				<div class="nv-number">
					<span class="nv-bg">
						<?=$oData->in["number"]?>
						<span class="nv-uppercase nv-fg"><b><?=$oData->in["text"]?></b></span>
					</span>
				</div>
			<? } ?>
		</div>
	</div>
</section>