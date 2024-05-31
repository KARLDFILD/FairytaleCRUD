<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="shortcut icon" href="../img/volshebnik-izumrudnogo-goroda.webp" type="image/x-icon" />
    <title>Fairytale</title>
</head>

<body>
    <?php
  include("Person/PersonData.php");
  include("PesrQuest/PersQuestData.php");
  include("relationship/relationshipData.php");
  include("location/locationData.php");
  ?>
    <div class="navBar">
        <div class="logo">Волшебник Изумрудного Города</div>
        <ul class="nav">
            <a href="adminPanel.php">Панель администратора</a>
            <li>Какая-то опция</li>
            <li>Какая-то опция</li>
            <li>Какая-то опция</li>
            <li>Какая-то опция</li>
        </ul>
    </div>
    <div class="contentContainer">
        <div class="firstBlock">
            <div class="flexBlock">
                <div class="leftBlock">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $persons[2]; ?> <?php echo $description[2]; ?>
                    <?php echo $persons[1]; ?> идут в
                    <?php echo $loc_name[2]; ?>, <?php echo $id_w[2]; ?>. По дороге ей попадается пшеничное
                    поле, в центре которого стоит <?php echo $persons[3]; ?> из соломы в виде человечка,
                    одетое в старое платье. <?php echo $persons[3]; ?> окликает <?php echo $persons[2]; ?>, и они
                    знакомятся.
                    Девочка снимает его с кола, и <?php echo $persons[3]; ?> отправляется с ней в
                    <?php echo $loc_name[2]; ?>, чтоб попросить у Гудвина <?php echo $quests[1]; ?>. Его знакомая
                    ворона сказала, что если бы <?php echo $persons[3]; ?> имел бы <?php echo $quests[1]; ?>, то он был
                    бы
                    такой, как все люди. Ночь застаёт путешественников, когда они идут
                    через <?php echo $loc_name[1]; ?> <?php echo $id_w[1]; ?>, <?php echo $persons[2]; ?> и
                    <?php echo $persons[1]; ?> ночуют в хижине.
                    <?php echo $persons[3]; ?>,
                    который не нуждается ни в сне, ни в еде, охраняет их.
                </div>
                <div class="rightBlock">
                    <?php 
                    echo '<img src=';
                    echo($img_loc[1]);
                    echo '>'?>
                </div>
            </div>
            <div class="fixedBlock">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Утром, продолжив путь,ими был встречен <?php echo $persons[4]; ?>,
                сделанного из железа. Вот
                уже год, как он заржавел, и никто не приходит к нему на помощь.
                Услышав, что путешественники идут в <?php echo $loc_name[2]; ?> ,<?php echo $persons[4]; ?> просит взять
                его с собой,
                чтоб попросить у Гудвина <?php echo $quests[2]; ?>.
                Когда-то он был человеком и хотел жениться на хорошенькой девушке, но
                её тётка не желала этого брака и обратилась за помощью к Гингеме. Злая
                волшебница заколдовала его топор и топор отрубил ему ногу.
            </div>
        </div>
        <div class="secondBlock">
            <div class="flexBlock">
                <div class="leftBlock">
                    <div class="rightBlock">
                        <?php 
                    echo '<img src=';
                    echo($img_loc[2]);
                    echo '>'?>
                    </div>
                </div>
                <div class="rightBlock">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $persons[4]; ?> и <?php echo $persons[3]; ?>
                    <?php echo $description[1]; ?> и возникает непрекра­щающийся спор: что лучше —
                    <?php echo $quests[1]; ?> или <?php echo $quests[2]; ?>. Увлёкшись, они не замечают, что
                    <?php echo $persons[2]; ?> попала
                    в
                    беду: <?php echo $persons[2]; ?> унёс людоед. <?php echo $persons[3]; ?> использует свою
                    находчивость и
                    <?php echo $persons[4]; ?> убивает людоеда.Вскоре путешественникам
                    встречается огромный <?php echo $persons[5]; ?>, который просит взять его с собой к
                    Гудвину, чтоб попросить смелости, так как он трус.
                </div>
            </div>
            <div class="fixedBlock">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $persons[5]; ?> помогает путешественникам
                преодолеть огромный овраг, справиться со страшными саблезубыми тиграми
                и переправиться на другой берег бурной реки. <?php echo $persons[2]; ?> <?php echo $description[3]; ?>,
                за
                то что <?php echo $persons[5]; ?> спас путешественников. По дороге
                путешественникам встречается <?php echo $loc_name[3]; ?> и <?php echo $id_w[3]; ?>.
                Когда <?php echo $persons[2]; ?> и <?php echo $persons[1]; ?> заснули, <?php echo $persons[3]; ?> и
                <?php echo $persons[4]; ?> переносят
                их через него на руках, но <?php echo $persons[5]; ?> не успевает его перебежать и засыпает
                на самом краю поля. <?php echo $persons[4]; ?> спасает от кота королеву мышей.
                <?php echo $persons[5]; ?> же был спасен с поля этой самой королевой. Она дарит <?php echo $pers[2]; ?>
                серебряный свисток, чтоб девочка всегда могла её вызвать.
            </div>
        </div>
        <div class="thirdBlock">
            <div class="flexBlock">
                <div class="leftBlock">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Путешественники приходят в
                    <?php echo $loc_name[2]; ?>, где все жители носят зелёную одежду. Фермер, у
                    которого они останав­ливаются на ночлег, рассказывает, что никто
                    никогда не видел лица Гудвина, так как он принимает разные облики.
                    <?php echo $loc_name[2]; ?> окружён высокой каменной стеной. Страж ворот
                    одевает всем зелёные очки, чтоб их не ослепило великолепие города.
                    Даже его жители носят очки день и ночь.
                </div>
                <div class="rightBlock">
                    <?php 
                    echo '<img src=';
                    echo($img_loc[3]);
                    echo '>'?>
                </div>
            </div>
            <div class="fixedBlock">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Перебравшись через ров,
                путешественники попадают во дворец. Великий волшебник Гудвин, принимая
                различные образы, беседует с путешественниками по одному. Узнав о
                гибели Гингемы, Гудвин ставит условие: он поможет исполнить то, о чем
                его просят, но для этого нужно уничтожить злую волшебницу Бастинду,
                повелительницу Фиолетовой страны.
            </div>
        </div>
    </div>
</body>

</html>