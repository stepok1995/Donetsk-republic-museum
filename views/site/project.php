<?php
namespace app\model;
use Yii;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\TMusProjekt;
use app\models\TMusProjektType;
use app\models\TMPImage;
use yii\widgets\LinkPager;
use yii\bootstrap\Carousel;
?>

<div class="projectsPage">
	<div class="projectsBanner">
		<img style="width: 100%" src="/images/Interactive1.jpg" alt="" />
	</div>
	<div class="projectsTitle">
		<h1>Интерактивы</h1><br />
		<h2>Добро пожаловать!</h2>
		<p>Здесь Вы сможете найти интересующую Вас информацию об интерактивных занятиях и проектах Донецкого республиканского краеведческого музея</p>
	</div>
	<div class="projectsContent">
		<div class="container1">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<?php
				foreach($model_Proj_Type as $item_Type)
				{
					$i=$item_Type['id'];
				?>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading<? =$i?>">
						<h5 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapse<?=$i?>">
								<i class="more-less glyphicon glyphicon-plus"></i>
								<?php
									echo $item_Type['name'];
								?>
							</a>
						</h5>
					</div>
					<div id="collapse<?=$i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?=$i?>">
						<?php
							foreach($model as $item)
							{
								$carusel=[];
								if($item_Type['id']==$item['project_type'])
								{
						?>
						<div class="panel-body">
							<div class="projectTable">
								<!-- <strong><?php echo $item['name'];?></strong> -->
								<div class="tableTitle">
									<h3><?php echo $item['name'];?></h3>
								</div>
								<div class="tableText">
									<p>
									<?php echo nl2br($item['text'])?>
									</p>
								</div>
								
									<?php
									// $count=0;
										foreach($model_image as $item_image)
									{
										if($item_image['project_id']==$item['id'])
										{
											// $count=$count+1;
											$carusel[]=

												[
												'content' => '<img src="'.$item_image['name'].'"/>',
												'options' => []
												];
										$name=$item_image['name'];
										}
										
									}
									// if($count==1)
									// {
										?>
										<!--<div class="tableImg">
											<img src="<?php //echo $name;?>" alt=""/>
										</div>-->
										<?php
									// }
									// else{
									?>
									
									<div class="tableImg">
						
										<div style="display: none;" class="row">
											<?php echo Carousel::widget([
												'items' => $carusel,
												'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
											]);
											?>

										</div>
										<img src="<?php echo $name;?>" alt=""/>
									</div>
									
									<?php
									// }
									?>
									
							</div>
							
						</div>
						<?php
							}
						}
						?>
					</div>
				</div>
				<?php
				}
				?>
			</div> <!--panel-group -->

		</div><!-- container -->
	</div>
</div>



	


		


	



