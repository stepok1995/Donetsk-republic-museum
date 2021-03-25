<?php
namespace app\model;
use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Carousel;
use app\models\TMainPage;
use app\models\TAction;
use app\models\TActionImage;
use yii\helpers\Url;
?>

<div class="main">

			
			<div class="leftTop" style="padding: 0 5 0 5;">
						<?php 
							$serv_time=date_default_timezone_set('Russia/Moscow');
				$today_date=date('Y-m-d H:i:s');
				//echo $serv_time;
				//echo $today_date;
						foreach($model as $item)
						{
							if($item['id']==2)
							{
						?>
						<a href="<?=Yii::$app->urlManager->createUrl('site/dayvictory')?>"><img class="mainpagePhoto shadow" 
						style="max-width:100%; height:auto; text-align: center;" src="images/dayvictory_logo.jpg"></a>
						
						<?php 
							}
						}
						?>
									<?php
						foreach($model as $item)
						{
							if($item['id']==2)
							{
						?>
						<!--<h3 class="sideH3"><?php //echo $item['title'];?></h3>-->
						<?php 
							}
						}
						?>
							<?php 
						foreach($model as $item)
						{
							if($item['id']==1)
							{
						?>
						<a href="<?=Yii::$app->urlManager->createUrl([$item['link']])?>"><img class="mainpagePhoto shadow" 
						style="max-width:100%; height:auto; text-align: center;" src="<?php echo $item['image'];?>"></a>
						<?php 
							}
						}
						?>
									<?php
						foreach($model as $item)
						{
							if($item['id']==1)
							{
						?>
						<!--<h3 class="sideH3"><?php //echo $item['title'];?></h3>-->
						<?php 
							}
						}
						?> 
					</div>
		

			<div class="sliderTop">
						<div class="row" style="width:90%; height:auto; display: block; margin: 0 auto; vertical-align: middle !important;">
							<div class="carousel-main ">
						<?php //наполняем днными массив для слайдера
						$carusel=[];
						$caption=[];
							foreach($model_slider as $item_slider)
							{	
								//$diff=strtotime($today_date)-strtotime($item_slider['datetime']);
								//$diff=$diff/(60*60*24);
							if($item_slider['topnews']==1)
							{
								//if($diff<32)
								//{
								if($today_date>=$item_slider['datetime'])
								{
									$carusel[]=				
										[
										'content' => '<a href="'.Url::to(['site/item-actions', 'id' =>$item_slider['id']]).'"><img src="'.$item_slider['img_preview'].'"/></a>',
										'caption' => '<p><h3 style="width: 100%; color: #ffd800 !important; background-color: #245f18; font-size: 200%; -webkit-box-shadow: 9px 10px 5px -4px rgba(0,0,0,0.75);
-moz-box-shadow: 9px 10px 5px -4px rgba(0,0,0,0.75);
box-shadow: 9px 10px 5px -4px rgba(0,0,0,0.75);">'.$item_slider['title'].'</h3></p>',
										'options' => []
										];
								
								}
							//}
							}
							}
						//выводим слайдер на страницу
						echo Carousel::widget([
							'items' => $carusel, // передаём ему массив с данными
							'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
						]);
						?>
							</div>
						</div>
			</div>
			<div class="contentTop">
						<a href="<?php echo Url::to(['site/actions']); ?>"><h2 style="text-align: center; margin: 30px auto 0 auto;">Новости</h2></a>
						<hr style="width: 95%; margin: 0 auto;"></hr>
						<div style="max-width:90%; height:auto; display: block; margin: 15px auto;">
								<?php
								
								
								$i=0;
								foreach($model_news as $item_news)
								{
									if($item_news['class_id']!=3 and $item_news['class_id']!=1 /*and $item_news['class_id']!=5*/)
									{
									if($today_date>=$item_news['datetime'])
									{
											$i=$i+1;
										if($i!=0 && $i!=1)
										{
										?><hr><?php
										}
										?>
										<?php
										$monthes=[
1=>'января', 2=>'февраля', 3=>'марта', 4=>'апреля', 5=>'мая', 6=>'июня',
7=>'июля', 8=>'августа', 9=>'сентября', 10=>'октября', 11=>'ноября', 12=>'декабря',
];
										?>
										<?php 
										$date_wordsper = strtotime($item_news['date']);
										$date_words = date('j ', $date_wordsper).$monthes[date('n', $date_wordsper)].date('  Y', $date_wordsper);
										?>
										<?php
												//$model_image_news=TActionImage::find()
													//	->where(['action_id'=>$item_news['id']])
												//->one();
										?>
										<div class="newsMain"> 
													<div class="photo">
														<a href="<?php echo Url::to(['site/item-actions', 'id' =>$item_news['id']]); ?>">
												
															<img style="width: 100%" src="<?= $item_news['img_preview'];?>">

														</a>
													</div>
											<div class="title">
												<a href="<?php echo Url::to(['site/item-actions', 'id' =>$item_news['id']]); ?>">
														
															<h3><?php echo $item_news['title'];?></h3>
												</a>
											</div>
										<div class="dateNews">
										<?php 
										if($date_words!=null)
										{							
										?>
																	<span><?php echo $date_words;?><span>
										<?php
										}
										?>
										</div>
										</div>
								<?php
									}
									}
								}
								?>
						</div>
						<a href="<?php echo Url::to('site/actions'); ?>">										
											<h2 style="text-align: center;">Все новости ->></h2>
											</a>
			</div>
			
	
			<div class="rightTop" style="padding: 0 5 0 5;">
						<?php 
						foreach($model as $item)
						{
							if($item['id']==5)
							{
						?>
						<a href="<?php echo Url::to(['site/gum']); ?>"><img class="mainpagePhoto shadow"
						style="max-width:100%; height:auto; text-align: center;"
						src="<?php echo $item['image'];?>"></a>
						<?php 
							}
						}
						?>
									<?php
						foreach($model as $item)
						{
							if($item['id']==5)
							{
						?>
						<!--<h3 class="sideH3"><?php //echo $item['title'];?></h3>-->
						<?php 
							}
						}
						?>
							<?php 
						foreach($model as $item)
						{
							if($item['id']==6)
							{
						?>
						<a href="<?php echo Url::to(['site/rus']); ?>"><img class="mainpagePhoto shadow"
						style="max-width:100%; height:auto; text-align: center;"
						src="<?php echo $item['image'];?>"></a>
		
						<?php 
							}
						}
						?>
									<?php
						foreach($model as $item)
						{
							if($item['id']==6)
							{
						?>
						<!--<h3 class="sideH3"><?php //echo $item['title'];?></h3>-->
						<?php 
							}
						}
						?>
						</div>

</div>