<?php

if ( $sh == 1 )
{
    include( "mining.php" );
}
else if ( $sh == 2 )
{
    include( "trava.php" );
}
else if ( $sh == 3 )
{
    include( "alch.php" );
}
else if ( $sh == 4 )
{
    include( "black1.php" );
}
else if ( $sh == 5 )
{
    include( "black2.php" );
}
else if ( $sh == 6 )
{
    include( "tkat.php" );
}
else if ( $sh == 7 )
{
    include( "juv.php" );
}
else if ( $sh == 8 )
{
    include( "tree.php" );
}
else if ( $sh == 9 )
{
    include( "treemake.php" );
}
else
{
    echo "<div align=\"center\"><b>Мирные умения</b></div><br>\r\n<i>Собирательные мирные умения.</i><br><br>\r\n<div align=\"justify\" class=small>Ценная руда и редкие лечебные травы являются мощным  инструментом в руках умелого ремесленника.<br></div>\r\n<br>\r\n\r\n\r\n<div align=\"justify\" class=small><a href=?load=";
    print "{$load}";
    echo "&show=5.3&sh=1 class=menu><b>Горное дело</b></a> (33) - Познания в горном деле позволяют вашему персонажу разрабатывать залежи руды в шахтах по всему миру Шамаал. Добытая руда перерабатывается в слитки, используемые кузнецами для изготовления оружия, доспехов и других полезных предметов. Чтобы приступить к добыче руды, необходимо купить кирку и найти комнату с залежами руды. Чем выше мастерство вашег";
    echo "о героя в горном деле, тем более редкие руды он сможет добывать. Чтобы переработать добытую руду в слитки, необходимо найти кузницу с функцией плавки металла. Количество слитков, получаемых после переплавки, также зависит от мастерства в горном деле.</div><br>\r\n<div align=\"justify\" class=small><a href=?load=";
    print "{$load}";
    echo "&show=5.3&sh=2 class=menu><b>Травология</b></a> (33) - Познания в травологии позволяют вашему персонажу собирать лечебные травы, которые используются алхимиками в изготовлении эликсиров . Чтобы приступить к сбору, необходимо купить серп и найти комнату с подходящёй лечебной травой. Чем выше знания вашего героя в травологии, тем более редкие травы он сможет собирать. </div><br>\r\n<div align=\"justify\" clas";
    echo "s=small><a href=?load=";
    print "{$load}";
    echo "&show=5.3&sh=8 class=menu><b>Лесничество</b></a> (25) - Познания в лесничестве позволяют вашему персонажу вырубать деревья, которые используются столярами в изготовлении луков и посохов. Чтобы приступить к рубке, необходимо купить топор лесоруба и найти комнату с функцие рубки деревьев. Чем выше знания вашего героя в лесничестве, тем более редкие деревья он сможет срубать. </div><br>\r\n<i>Производительны";
    echo "е мирные умения.</i><br><br>\r\n<div align=\"justify\" class=small><a href=?load=";
    print "{$load}";
    echo "&show=5.3&sh=3 class=menu><b>Алхимия</b></a> (33) - Познания в алхимии необходимы для приготовления эликсиров. Вам понадобятся находиться в лаборатории и иметь в руках подходящие лечебные травы и свиток. Используйте функции лаборатории для создания интересующего Вас эликсира.</div><br>\r\n<div align=\"justify\" class=small><a href=?load=";
    print "{$load}";
    echo "&show=5.3&sh=4 class=menu><b>Оружейное дело</b></a> (50) - Познания в оружейном деле дают вашему персонажу возможность ковать оружие любой сложности. Вам понадобятся находиться в кузнице и иметь в руках подходящие слитки металлов, молот и свиток желаемого предмета. Используйте функции кузницы для создания интересующего Вас предмета. Чем выше Ваше знание в этом умении, чем больше шанс изготовить предм";
    echo "ет с повышенными характеристиками.</div><br>\r\n<div align=\"justify\" class=small><a href=?load=";
    print "{$load}";
    echo "&show=5.3&sh=5 class=menu><b>Изготовление доспехов</b></a> (50) - Познания в этом умении дают вашему персонажу возможность ковать защитные предметы любой сложности. Вам понадобятся находиться в кузнице и иметь в руках подходящие слитки металлов, молот и свиток желаемого предмета. Используйте функции кузницы для создания интересующего Вас предмета. Чем выше Ваше знание в этом умении, чем больше шанс и";
    echo "зготовить предмет с повышенными характеристиками.</div><br>\r\n<div align=\"justify\" class=small><a href=?load=";
    print "{$load}";
    echo "&show=5.3&sh=6 class=menu><b>Ткачество</b></a> (33) - Познания в этом умении дают вашему персонажу возможность шить предметы. Вам понадобятся находиться в около ткацкого станка  и иметь в руках подходящие материалы и свиток желаемого предмета. Используйте функции ткацкого станка для создания интересующего Вас предмета. Чем выше Ваше знание в этом умении, чем больше шанс изготовить предмет с повышенны";
    echo "ми характеристиками.</div><br>\r\n<div align=\"justify\" class=small><a href=?load=";
    print "{$load}";
    echo "&show=5.3&sh=7 class=menu><b>Ювелирное дело</b></a> (33) - Познания в этом умении дают вашему персонажу возможность изготавливать кольца и ожерелья из драгоценного металла. Вам понадобятся находиться в около Ювелирной мастерской и иметь в руках подходящие материалы и свиток желаемого предмета. Используйте функции ювелирной мастерской для создания интересующего Вас предмета. Чем выше Ваше знание в это";
    echo "м умении, чем больше шанс изготовить предмет с повышенными характеристиками.</div><br>\r\n<div align=\"justify\" class=small><a href=?load=";
    print "{$load}";
    echo "&show=5.3&sh=9 class=menu><b>Столярное дело</b></a> (40) - Познания в этом умении дают вашему персонажу возможность изготавливать посохи и луки из дерева и ювелирных камней. Вам понадобятся находиться в около Столярной мастерской и иметь в руках подходящие материалы и свиток желаемого предмета. Используйте функции Столярной для создания интересующего Вас предмета. Чем выше Ваше знание в этом умении, ";
    echo "чем больше шанс изготовить предмет с повышенными характеристиками.</div><br>\r\n\r\n<br>\r\n<br>\r\n<b><div align=\"center\"><a href=?load=";
    print "{$load}";
    echo ">Назад</div></b><br>\r\n";
}
?>
