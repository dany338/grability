<?php

/* @var $this yii\web\View */

$this->title = 'Noticias - Grability';

use yii\helpers\Json;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Grability Test Daniel</h1>

        <p class="lead">>>></p>

        <p><a class="btn btn-lg btn-success" href="http://www.grability.com/">>>></a></p>
    </div>

    <div class="body-content">

        <div class="row">

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              



        <?php 

            $jsonfile = Json::decode($jsonfile);
            $i=0;
            foreach($jsonfile as $data)
            {
                $id      = $data['id'];
                $title   = $data['title'];
                $content = $data['content'];
                $image   = $data['image'];
                $class    = 'in';
                $collapse = '';
                if($i>0)
                {
                    $collapse = 'class="collapsed"';
                    $class    = '';
                }

        ?>
            <div class="panel panel-success">
                <div class="panel-heading" role="tab" id="headingOne_<?=$id ?>">
                  <h4 class="panel-title">
                    <a <?=$collapse ?> role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_<?=$id ?>" aria-expanded="true" aria-controls="collapseOne_<?=$id ?>">
                      <?php
                        echo $title;
                      ?>
                    </a>
                  </h4>
                </div>
                <div id="collapseOne_<?=$id ?>" class="panel-collapse collapse <?=$class?>" role="tabpanel" aria-labelledby="headingOne_<?=$id ?>">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-4">
                        <img src="<?=$image ?>" alt="<?=$id ?>" class="img-circle">
                      </div>
                      <div class="col-lg-8">

                        <div class="popover right" style="position: relative; display: block; float: left; width: 100%; margin: 20px;"> 
                            <div class="arrow"></div> 
                            <h3 class="popover-title"><span class="label label-danger">Noticia!!!</span> <span class="badge"><?=$id?></span></h3> 
                            <div class="popover-content"> 
                            <p>
                            <?php
                                echo $content;
                            ?>
                            </p> 
                            </div> 
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
            </div>
        <?php
            $i++;
            }
        ?>
            </div>
        </div>

    </div>
</div>
