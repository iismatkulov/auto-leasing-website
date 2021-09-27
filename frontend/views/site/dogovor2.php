<?php
$lang = Yii::$app->language;
$user = \common\models\User::find()->where(['id' => Yii::$app->user->id])->one();
$req = \common\models\Requisites::find()->orderBy(['id' => SORT_DESC])->one();
$month = [
    'Январь',
    'Февраль',
    'Март',
    'Апрель',
    'Май',
    'Июнь',
    'Июль',
    'Август',
    'Сентябрь',
    'Октябрь',
    'Ноябрь',
    'Декабрь',

];
?>
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1></h1>
            <ul class="breadcrumbs">
                <li><a href="<?=Yii::$app->homeUrl?>"><?=Yii::$app->params['home'][$lang]?></a></li>
                <li class="active">></li>
            </ul>
        </div>
    </div>
</div>

<div class="Description mb-50" style="padding: 30px">
    <div class="container">
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><em><span style='font-family:"Times New Roman","serif";'>DAMAS</span></em></strong><strong><em><span style='font-family:"Times New Roman","serif";'>&nbsp;&ndash;&nbsp;</span></em></strong><strong><em><span style='font-family:"Times New Roman","serif";'>D</span></em></strong><strong><em><span style='font-family:"Times New Roman","serif";'>2</span></em></strong><em><span style='font-family:"Times New Roman","serif";'>&nbsp;</span></em><strong><span style='font-family:"Times New Roman","serif";'>АВТОМАШИНАСИНИ ЛИЗИНГГА БЕРИЛИШИНИ РАСМИЙЛАШТИРИШ УЧУН КИЛИНАДИГАН ТУЛОВЛАР ТУГРИСИДАГИ&nbsp;</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-family:"Times New Roman","serif";'>ШАРТНОМАСИ&nbsp;</span></strong><span style='font-family:"Times New Roman","serif";'>№ 1/410</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:"Times New Roman","serif";'>&laquo;<?=date('d')?>&raquo;<?php $m = date('m')-1 ?><?=date($month[$m])?> <?=date('Y')?> йил&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Самарканд шахри</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>Бир томонидан <strong>&laquo;<?=$req->company_name?>&raquo;</strong> MCHJ номидан &nbsp;(кейинги уринларда <strong>&laquo;БАЖАРУВЧИ&raquo;&nbsp;</strong>деб юритилади) Низом асосида фаолият юритувчи <strong style="text-transform: uppercase"><?=$req->director_name?>&nbsp;</strong>хамда, иккинчи томондан кейинги уринларда <strong>&laquo;БУЮРТМАЧИ&raquo;&nbsp;</strong>деб номланувчи <strong style="text-transform: uppercase"><?=$user->fullname?> </strong>ушбу шартномани куйидагича туздилар.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-family:"Times New Roman","serif";'>1.ШАРТНОМА ПРЕДМЕТИ.</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>1.1.Ушбу шартнома асосида <strong>&laquo;БАЖАРУВЧИ&raquo;</strong>&nbsp; <strong>&laquo;БУЮРТМАЧИ&raquo;</strong> нинг буюртмасига асосан &nbsp;</span><em><span style='font-family:"Times New Roman","serif";'>DAMAS</span></em><em><span style='font-family:"Times New Roman","serif";'>&nbsp;&ndash;&nbsp;</span></em><em><span style='font-family:"Times New Roman","serif";'>D</span></em><em><span style='font-family:"Times New Roman","serif";'>2&nbsp;</span></em><span style='font-family:"Times New Roman","serif";'>автомашинасини &nbsp;харид килиб олади.&nbsp;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>1.2 &nbsp;<strong>&laquo;БУЮРТМАЧИ</strong>&raquo; куйидаги туловни амалга оширади.</span></p>
<table style="margin-left:38.1pt;border-collapse:collapse;border:none;">
    <tbody>
    <tr>
        <td style="width: 31.1pt;border: 1pt solid windowtext;padding: 0cm 5.4pt;height: 26.55pt;vertical-align: top;">
            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:"Times New Roman","serif";'>№</span></p>
        </td>
        <td style="width: 290.6pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 26.55pt;vertical-align: top;">
            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:"Times New Roman","serif";'>Бажариладиган ишнинг номи</span></p>
        </td>
        <td style="width: 106.3pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 26.55pt;vertical-align: top;">
            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:"Times New Roman","serif";'>Нархи</span></p>
        </td>
    </tr>
    <tr>
        <td style="width: 31.1pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 42.75pt;vertical-align: top;">
            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;'><em><span style='font-size:7px;line-height:115%;font-family:"Times New Roman","serif";'>&nbsp;</span></em></p>
            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;'><em><span style='font-family:"Times New Roman","serif";'>1</span></em></p>
        </td>
        <td style="width: 290.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 42.75pt;vertical-align: top;">
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri","sans-serif";'><em><span style='font-size:7px;font-family:"Times New Roman","serif";'>&nbsp;</span></em></p>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri","sans-serif";'><em><span style='font-family:"Times New Roman","serif";'>DAMAS</span></em><em><span style='font-family:"Times New Roman","serif";'>&nbsp;&ndash;&nbsp;</span></em><em><span style='font-family:"Times New Roman","serif";'>D</span></em><em><span style='font-family:"Times New Roman","serif";'>2 &nbsp;автомашинасини &nbsp;лизингга олиш Сугурта, Треккер-920 апарати ва Биринчи ойлик туловлар учун</span></em></p>
        </td>
        <td style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 42.75pt;vertical-align: top;">
            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><em><span style='font-size:7px;line-height:  115%;font-family:"Times New Roman","serif";'>&nbsp;</span></em></p>
            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><em><span style='font-family:"Times New Roman","serif";'>6&nbsp;375 518</span></em></p>
        </td>
    </tr>
    </tbody>
</table>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>Сумма: Олти миллион уч юз етмиш беш минг беш юз ун саккиз сум.&nbsp;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>2<strong>. ТАРАФЛАРНИНГ МАЖБУРИЯТЛАРИ</strong></span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-family:"Times New Roman","serif";'>&laquo;БАЖАРУВЧИ&raquo; нинг&nbsp;</span></strong><span style='font-family:"Times New Roman","serif";'>мажбуриятлари.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>2.1. Ушбу шартнома шартлари асосида &laquo;<strong>БУЮРТМАЧИ</strong>&raquo;га&nbsp;</span><em><span style='font-family:"Times New Roman","serif";'>DAMAS</span></em><em><span style='font-family:"Times New Roman","serif";'>&nbsp;&ndash;&nbsp;</span></em><em><span style='font-family:"Times New Roman","serif";'>D</span></em><em><span style='font-family:"Times New Roman","serif";'>2&nbsp;</span></em><span style='font-family:"Times New Roman","serif";'>автомашинасини уз вактида сифатли етказиб бериш.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>2.2. <strong>&laquo;БАЖАРУВЧИ&raquo;&nbsp;</strong>Ушбу шартноманинг 1.2 бандида курсатилган &nbsp;Сумма туланган кундан бошлаб 30 иш кунида автомашинани етказиб беради.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>2.3. Ушбу шартнома&nbsp;</span><strong><span style='font-family:"Times New Roman","serif";'>&laquo;БАЖАРУВЧИ&raquo;</span></strong><span style='font-family:"Times New Roman","serif";'>&nbsp;томонидан муддатида бажарилмаган такдирда&nbsp;</span><strong><span style='font-family:"Times New Roman","serif";'>&laquo;</span></strong><strong><span style='font-family:"Times New Roman","serif";'>БУЮРТМАЧИ</span></strong><strong><span style='font-family:"Times New Roman","serif";'>&raquo;</span></strong><span style='font-family:"Times New Roman","serif";'>га хар бир кечиккан иш куни учун Ушбу шартномада курсатилган сумманинг 0,5 фоиздан Жами сумманинг 20 фоизидан ошмаган микдорда жарима тулайди.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-family:"Times New Roman","serif";'>&laquo;БУЮРТМАЧИ&raquo;нинг мажбуриятлари.</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>2.2. Ишни 3 кун муддатда куздан кечириш. Ишнинг мазкур шартнома талабларига мос келмаслигини аниклаган такдирда &laquo;Буюртмачи&raquo; шу муддатда &laquo;Бажарувчига&raquo; аникланган номувофикликлар хакида маьлумотларни акс эттирувчи хабарнома (рекламация) юборади.&nbsp;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>2.3. Ушбу тулов Автомашинани 5 йиллик сугурта килиш, &laquo;Треккер 920&raquo; апаратини урнатиш ва бир ойлик тулов булиб ушбу суммани тулаб беради.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>2.4. Автомашинани уз номига утказиб оладиган такдирда давлат автомобил назорати инспекциясида руйхатдан утказиш, натариус харажатлари ва бошкалар учун туловни уз хисобидан амалга оширади.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>2.5. Ушбу шартнома&nbsp;</span><strong><span style='font-family:"Times New Roman","serif";'>&laquo;</span></strong><strong><span style='font-family:"Times New Roman","serif";'>БУЮРТМАЧИ</span></strong><strong><span style='font-family:"Times New Roman","serif";'>&raquo;&nbsp;</span></strong><span style='font-family:"Times New Roman","serif";'>томонидан муддатидан олдин бекор килинган такдирда&nbsp;</span><strong><span style='font-family:"Times New Roman","serif";'>&laquo;</span></strong><strong><span style='font-family:"Times New Roman","serif";'>БАЖАРУВЧИ</span></strong><strong><span style='font-family:"Times New Roman","serif";'>&raquo;</span></strong><span style='font-family:"Times New Roman","serif";'>&nbsp;ушбу туланган сумманинг 10 (ун) фоизини ушлаб колиб колган 90 (туксон) фоизини Пластик карточкага утказиб бериш йули билан кайтариб тулайди.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:right;text-indent:35.4pt;'><em><span style='font-size:12px;line-height:115%;font-family:"Times New Roman","serif";'>____________________</span></em><em><span style='font-size:12px;line-height:115%;font-family:"Times New Roman","serif";'>&nbsp;</span></em><em><span style='font-size:12px;line-height:115%;font-family:"Times New Roman","serif"; text-transform: uppercase'><?=$user->fullname?></span></em></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-family:"Times New Roman","serif";'>3. ШАРТНОМАНИНГ АМАЛ КИЛИШ МУДДАТИ.</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>3. Шартнома тарафлар томонидан имзолангандан кучга киради ва 3 ой муддатда амал килади</span><span style='font-family:"Times New Roman","serif";'>.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-family:"Times New Roman","serif";'>4.</span></strong><strong><span style='font-family:"Times New Roman","serif";'>&nbsp;ТАРАФЛАРНИНГ ЖАВОБГАРЛИГИ</span></strong><span style='font-family:"Times New Roman","serif";'>.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>4</span><span style='font-family:"Times New Roman","serif";'>.1. Мазкур шартномада назарда тутилмаган тарафларнинг жавобгарлиги Узбекистон Республикаси конун хужжатларига мувофик белгиланади.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-family:"Times New Roman","serif";'>5</span></strong><strong><span style='font-family:"Times New Roman","serif";'>. НИЗОЛАРНИ ХАЛ КИЛИШ.</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>5</span><span style='font-family:"Times New Roman","serif";'>. Ушбу шартнома юзасидан тарафлар уртасида келиб чикадиган низо ва зиддиятлар узаро музокара олиб бориш йули билан хал килинади.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-family:"Times New Roman","serif";'>6</span></strong><strong><span style='font-family:"Times New Roman","serif";'>.&nbsp;</span></strong><strong><span style='font-family:"Times New Roman","serif";'>ФОРС МАЖОР ВА&nbsp;</span></strong><strong><span style='font-family:"Times New Roman","serif";'>ЖАВОБГАРЛИКДАН ОЗОД ЭТИШ</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>6.1. Томонларнинг хохиш - истагига мутлако боглик булмаган холлар &nbsp; (форс-мажор) туфайли бажарилмаган ёки кисман бажарилмаганлиги, шартнома шартларини ижро этиш бузилган деб хисобланмайди ва ушбу холатда томонлар шартномани бажариш муддатини келишилган муддатга узайтиради.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-family:"Times New Roman","serif";'>7. БОШКА ШАРТЛАР.</span></strong></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>7.1. Тарафлар узларининг юридик манзиллари ва бошка реквизитлари узгарганлиги хакида бир-бирларини 3 кунлик муддатда хабардор килишлари шарт.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>7.2. Шартномага хар кандай узгартириш ва кушимчалар ёзма равишда бажарилган ва тарафларнинг ваколатли шахслари томонидаи имзоланган холдагина хакикийдир</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-family:"Times New Roman","serif";'>7.3. Шартнома икки нусхада тузилган булиб, иккаласи хам &nbsp;бир хил юридик кучга эга хисобланади ва тарафларга бир нусхадан берилади.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-family:"Times New Roman","serif";'>8</span></strong><strong><span style='font-family:"Times New Roman","serif";'>. ТАРАФЛАРНИНГ РЕКВИЗИТЛАРИ:</span></strong></p>
        <div class="row">
            <div class="col-lg-6">
                <table style="width: 4.9e+2pt;border: none;margin-left:5.4pt;border-collapse:collapse;">
                    <tbody>
                    <tr>
                        <td style="width:241.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.25pt;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-family:"Times New Roman","serif";'>БАЖАРУВЧИ</span></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:241.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:  "Times New Roman","serif";'>&laquo;<?=$req->company_name?>&raquo; MCHJ</span></p>
                        </td>
                    </tr>
                    <tr>
                       <?=$req->content?>
                    </tr>

                        <td style="width:241.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:51.75pt;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:  "Times New Roman","serif";color:black;'>Телефон: &nbsp; &nbsp;</span></p>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:  "Times New Roman","serif";color:black;'>(90) 281-55-50, &nbsp; &nbsp; (90) 192 55-50</span></p>
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:  "Times New Roman","serif";color:black;'>(91) 538-55-50, &nbsp; &nbsp;(91) 298-55-50</span></p>
                        </td>
                    </tr>
                    <tr style="margin-top: 30px">
                        <td style="width:241.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:51.75pt;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:  "Times New Roman","serif";color:black;text-transform: uppercase'><strong><?=$req->director_name?></strong></span></p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <table style="width: 4.9e+2pt;border: none;margin-left:5.4pt;border-collapse:collapse;">
                    <tbody>
                    <tr>
                        <td style="width:241.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.25pt;">
                            <table style="width: 4.9e+2pt;border: none;margin-left:5.4pt;border-collapse:collapse;">
                                <tbody>
                                <tr>
                                    <td style="width:219.7pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.25pt;">
                                        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-family:"Times New Roman","serif";color:black;'>БУЮРТМАЧИ</span></strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:219.7pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt;">
                                        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:  "Times New Roman","serif";color:black;'>&nbsp;</span></p>
                                        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:  "Times New Roman","serif";color:black;'>Телефон: <?=$user->phone?></span></p>
                                        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:"Times New Roman","serif";color:black;'>&nbsp;</span></p>
                                        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:"Times New Roman","serif";color:black;'>Манзил: <?=$user->address?></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:219.7pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt;">
                                        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:"Times New Roman","serif";color:black;'>Паспорт раками: <?=$user->pass_ser?> <?=$user->pass_numb?></span></p>
                                        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:"Times New Roman","serif";color:black;'>Ким томоннидан берилган: <?=$user->pass_who?></span></p>

                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:219.7pt;padding:0cm 5.4pt 0cm 5.4pt;height:69.0pt;">
                                        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><em></em><span style='font-family:"Times New Roman","serif"; text-transform: uppercase'>&nbsp;<strong><?=$user->fullname?></strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:219.7pt;padding:0cm 5.4pt 0cm 5.4pt;height:51.75pt;"><br></td>
                                </tr>
                                <tr>
                                    <td style="width:219.7pt;padding:0cm 5.4pt 0cm 5.4pt;height:51.75pt;"><br></td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:241.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:51.75pt;">
                            <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><br></p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-family:"Times New Roman","serif";'>&nbsp;</span></p>
    </div>
</div>