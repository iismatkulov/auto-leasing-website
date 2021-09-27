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
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>ХИЗМАТ КУРСАТИШ ШАРТНОМАСИ&nbsp;</span></strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>№ _________</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>&laquo;<?=date('d')?><?php $m = date('m')-1?> &raquo; <?=date($month[$m])?> <?=date('Y')?> йил&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Самарканд шахри</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>Бир томонидан <strong>&laquo;<?=$req->company_name?>&raquo;</strong> MCHJ номидан &nbsp;(кейинги уринларда <strong>&laquo;БАЖАРУВЧИ&raquo;&nbsp;</strong>деб юритилади). Низом асосида фаолият юритувчи <strong><?=$req->director_name?>&nbsp;</strong>хамда, иккинчи томондан кейинги уринларда <strong>&laquo;БУЮРТМАЧИ&raquo;&nbsp;</strong>деб номланувчи &nbsp; <span style="text-transform: uppercase; font-weight: 600"><?=$user->fullname?></span> ушбу шартномани куйидагича туздилар.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>1.ШАРТНОМА ПРЕДМЕТИ.</span></strong></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>1.1.Ушбу шартнома &laquo;Бажарувчи&raquo; &laquo;Буюртмачи&raquo; нинг буюртмасига асосан хужжатларни туплаб тайёрлайди.&nbsp;</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>1.2 <strong>&laquo;БАЖАРУВЧИ&raquo; ва &laquo;БУЮРТМАЧИ&raquo;&nbsp;</strong>учун.</span></p>
    <table style="margin-left:38.1pt;border-collapse:collapse;border:none;">
        <tbody>
        <tr>
            <td style="width: 31.1pt;border: 1pt solid windowtext;padding: 0cm 5.4pt;height: 26.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>№</span></p>
            </td>
            <td style="width: 290.6pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 26.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>Бажариладиган ишнин гноми</span></p>
            </td>
            <td style="width: 106.3pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 26.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>Нархи</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 31.1pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 42.75pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;'><em><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>1</span></em></p>
            </td>
            <td style="width: 290.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 42.75pt;vertical-align: top;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><em><span style='font-size:17px;font-family:  "Times New Roman","serif";'><?php $cars = \common\models\Product::find()->where(['id' => $model])->one(); echo $cars?>> &nbsp; &nbsp; автомашинаси харид килиш учун хужжатлар тайёрлаш учун</span></em></p>
            </td>
            <td style="width: 106.3pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 42.75pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><em><span style='font-size:17px;line-height:  115%;font-family:"Times New Roman","serif";'>223000</span></em></p>
            </td>
        </tr>
        </tbody>
    </table>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>Сумма:<em><u>Икки юз йигирма уч минг сум.</u></em></span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>2<strong>. ТАРАФЛАРНИНГ МАЖБУРИЯТЛАРИ</strong></span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>&laquo;БАЖАРУВЧИ&raquo;нинг&nbsp;</span></strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>мажбуриятлари.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>2.1.Ишни ва унга оид хужжатларни ушбу шартнома шартларига асосида <strong>&laquo;БУЮРТМАЧИ&raquo;</strong> га сифатли ва уз вактида топшириш.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>&laquo;БУЮРТМАЧИ&raquo;нинг мажбуриятлари.</span></strong></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>2.2. Ишни 3 кун муддатда куздан кечириш. Ишнинг мазкур шартнома талабларига мос келмаслигини аниклаган такдирда &laquo;Буюртмачи&raquo; шу муддатда &laquo;Бажарувчига&raquo; аникланган номувофикликлар хакида маьлумотларни акс эттирувчи хабарнома (рекламация) юборади.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>2.3 Шартномада белгиланган суммани тулайди.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>2.4 Ушбу шартнома &laquo;БУЮРТМАЧИ&raquo; томонидан бузилганда ёки бекор килинганда килинган тулов кайтарилмайди.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>3</span></strong><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>. ШАРТНОМА</span></strong><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>НИНГ АМАЛ КИЛИШ МУДДАТИ</span></strong><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>.</span></strong></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>3</span><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>. Шартнома тарафлар томонидан имзолангандан кучга киради ва <?=date('Y')+1?> йил &laquo;<?=date('d')?>&raquo; <?=date($month[$m])?> кунига кадар амал килади.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>4.</span></strong><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>&nbsp;ТАРАФЛАРНИНГ ЖАВОБГАРЛИГИ</span></strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>4</span><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>.1. Мазкур шартномад аназарда тутилмаган тарафларнинг жавобгарлиги Узбекистон Республикаси конун хужжатларига мувофик белгиланади.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>5. НИЗОЛАРНИ ХАЛ КИЛИШ.</span></strong></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>5. Ушбу шартнома юзасидан тарафлар уртасида келиб чикадиган низо ва зиддиятлар узаро музокара олиб бориш йули билан амалга оширилади.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>5.1 Музокаралар олиб бориш йули билан низони хал этиш имконияти булмаган такдирда низо Узбекистон Республикаси конунлари асосида судлар томонидан куриб чикилади.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>6</span></strong><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>.&nbsp;</span></strong><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>ФОРС МАЖОР ВА&nbsp;</span></strong><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>ЖАВОБГАРЛИКДАН ОЗОД ЭТИШ</span></strong></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>6.1 Томонларнинг хохиш - истагига мутлако боглик булмаган холларда &nbsp; (форс-мажор) туфайли бажарилмаган ёки кисман бажарилмаганлиги, шартнома шартларини ижро этиш бузилган деб хисобланмайди ва ушбу холатда томонлар шартномани бажариш муддати келишилган муддатга кечиктирилади.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>6.2 Буюртмачи томонидан туланган ушбу тулов бир марталик тулов булиб руйхатга олиш, хужжатлаштириш ва бошка харажатлар учун булиб ушбу тулов кайтариб берилмайди.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>7. БОШКА ШАРТЛАР.</span></strong></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>7.1. Тарафлар узларининг юридик манзиллари ва бошка реквизитлари узгарганлиги хакида бир-бирларини 3 кунлик муддатда хабардор килишлари шарт.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>7.2. Шартномага хар кандай узгартириш ва кушимчалар ёзма равишда бажарилган ва тарафларнинг ваколатли шахслари томонидаи имзоланган холдагина хакикийдир</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:justify;text-indent:35.4pt;'><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>7.3 Шартнома икки нусхада тузилган булиб, иккаласи хам бир хил юридик кучга эга хисобланади ва тарафларга бир нусхадан берилади.</span></p>
    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;text-indent:35.4pt;'><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>8</span></strong><strong><span style='font-size:17px;line-height:115%;font-family:"Times New Roman","serif";'>. ТАРАФЛАРНИНГ РЕКВИЗИТЛАРИ:</span></strong></p>
    <div class="row" style="text-align: center">
        <div class="col-lg-6">
            <table style="box-sizing: border-box; border-collapse: collapse; width: 490pt; color: rgb(33, 37, 41); font-family: Ubuntu, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; border: none; margin-left: 5.4pt;">
                <tbody style="box-sizing: border-box;">
                <tr style="box-sizing: border-box;">
                    <td style="box-sizing: border-box; width: 219.7pt; padding: 0cm 5.4pt; height: 51.75pt;">
                        <table style="width: 4.9e+2pt;border: none;margin-left:5.4pt;border-collapse:collapse;">
                            <tbody>
                            <tr>
                                <td style="width:241.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.25pt;">
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size:17px;font-family:"Times New Roman","serif";'>БАЖАРУВЧИ</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:241.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt;">
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-size:16px;font-family:"Times New Roman","serif";'>&laquo;<?=$req->company_name?>&raquo; MCHJ</span></strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:241.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt;">
                                    <?=$req->content?>
                                </td>
                            </tr>

                            <tr>
                                <td style="width:241.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:51.75pt;">
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size:16px;font-family:"Times New Roman","serif";color:black;'>Телефон: &nbsp; &nbsp;</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size:16px;font-family:"Times New Roman","serif";color:black;'>(90) 281-55-50, &nbsp; &nbsp; (90) 192 55-50</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size:16px;font-family:"Times New Roman","serif";color:black;'>(91) 538-55-50, &nbsp; &nbsp;(91) 298-55-50</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:241.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:51.75pt;">
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-size:19px;font-family:"Times New Roman","serif";color:black;'><?=$req->director_name?></span></strong></p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr style="box-sizing: border-box;">
                    <td style="box-sizing: border-box; width: 219.7pt; padding: 0cm 5.4pt; height: 51.75pt;">
                        <div style="text-align: left;"><br></div>
                    </td>
                </tr>
                </tbody>
            </table>        </div>
        <div class="col-lg-6">
            <table style="width: 4.9e+2pt;border: none;margin-left:5.4pt;border-collapse:collapse; text-align: left">
                <tbody style="text-align: left">
                <tr>
                    <td style="width:241.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt;">
                        <table style="width: 4.9e+2pt;border: none;margin-left:5.4pt;border-collapse:collapse;">
                            <tbody>
                            <tr>
                                <td style="width:219.7pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.25pt;">
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size:17px;font-family:"Times New Roman","serif";color:black;'>БУЮРТМАЧИ</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:219.7pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.5pt;">
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size:13px;font-family:"Times New Roman","serif";color:black;'>&nbsp;</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size:17px;font-family:"Times New Roman","serif";color:black;'>Телефон: <?=$user->phone?></span></p>
                                </td>
                            </tr>

                            <tr>
                                <td style="width:219.7pt;padding:0cm 5.4pt 0cm 5.4pt;height:69.0pt;">
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size:16px;font-family:"Times New Roman","serif";color:black;'>Паспорт раками: <?=$user->pass_ser?> <?=$user->pass_numb?></span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size:16px;font-family:"Times New Roman","serif";color:black;'>&nbsp;</span></p>
                                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size:16px;font-family:"Times New Roman","serif";color:black;'>Ким томонидан берилган: <?=$user->pass_who?></span></p>
                                    <p style='margin-top:15px;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><span style='font-size:16px;font-family:"Times New Roman","serif";color:black;'>Манзил: <?=$user->address?></span></p>

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
                    <td style="width:241.75pt;">
                        <p style='margin-top:0cm;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri","sans-serif";text-align:center;'><strong><span style='font-size:19px;font-family:"Times New Roman","serif";color:black;'><?=$user->fullname?></span></strong></p>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>