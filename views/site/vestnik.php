<?php
namespace app\model;
use Yii;
use yii\helpers\Html;
use app\models\TVestnik;
use app\models\TVestnikImage;
?>
	
<div class="vestnikPage">
	<!--<img style="width: 100%" src="/images/biblioteka/Biblioteka.jpg" alt="" /> -->
	<div class="titleVestnik">
		
	</div>
	<div class="contentVestnik">

		<?php 
		foreach($model as $item)
		{
		?>
			<div class="divcontentVestnik">
		
		
		<div class="imageVestnik">
		<img src="<?php foreach($model_image as $item_image)
			{
				if($item_image['vestnik_id']==$item['id'])
				echo $item_image['name'];
			}
		?>" alt="" /><br />
	</div>
		<div class="textVestnik">
		<?php 
		echo nl2br($item['text']);
		?>


		
		<h6><a href="<?=$item['file_path']?>">ЧИТАТЬ</a></h6>
		<br /><br/><br/><br/>
		<br /><br/><br/><br/>
		</div>
		</div><hr />
		<?php 
		}
		?>
	
	</div>
</div>

