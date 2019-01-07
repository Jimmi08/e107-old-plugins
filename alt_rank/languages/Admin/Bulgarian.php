<?php
define("ALT_ADMIM_00", "Алтернативни рангове");
define("ALT_ADMIM_01", "Настройки");
define("ALT_ADMIM_02", "Описание");
define("ALT_ADMIM_03", "Този модул помага на администраторите да дават/отнемат допълнителни значки/рангове на потребителите.<br />
Картинките се показват във форума под аватара на потребителя, в таблицата с потребителите до имената им и в потребителските профили до имената им.<br />
За сега е само в пилотна версия и няма какво да настройвате от тук, но прочетете внимателно инструкцията как да го ползвате.<br /><br /><br />
Не е необходимо някакво инсталиране - с качването на модула, той ще се появи при инсталираните.<br /><br />
<b>Инструкция:</b><br /><br />
1. След като качите модула отидете в <a href='".e_ADMIN."db.php'>Администрация/Инструменти/База данни</a> и сканирайте модул директориите, за да се регистрира шорт кода.<br /><br />
2. След това отидете в <a href='".e_ADMIN."userclass2.php'>Администрация/Класове потребители</a>  изтрийте всички други и създайте нови 10 потребителски класа.<br /><br />
3. От папката e107_themes/templates/ копирате файла user_template.php в папката на вашата тема. От папката e107_plugins/forum/templates/ копирате файла forum_viewtopic_template.php в папката на вашата тема.<br />
<b>Възможо е да ги имате в папката на темата си, затова първо проверете!</b><br /><br />
<b>Обърнете внимание</b> на реда на създаване на потребителските класове, защото е важно за търсенето после.<br />
Например ако искате да създадете потребителски клас Автор и на него трябва да се покаже картинка 1.gif с изображение AVT, то този клас трябва да е първи създаден и т.н.<br /><br />
<b>Обърнете внимание</b>, че имената на картинките са зададени във файла altrank.sc! Ако използвате други картинки, трябва да им за дадете същите имена и ги поставите в папката e107_plugins/alt_rank/ranks.
<br /><br /><br /><br /><br />
Ползвайте на воля!<br /><br /><br />
Очаквайте подобрения на модула скоро с добавяне на възможност за създаване и редакция на допълнителните потребителски класове от тук, както и качване на ваши картинки.
");