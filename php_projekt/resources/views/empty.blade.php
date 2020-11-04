@extends('layouts.app')


<!-- VZOROVE SIZES PLNENIE, TREBA NEJAKY MATERIAL DESIGN
            <a href='/login'>
            <img srcset="elephant_baby_1-120.jpg 120w, elephant_baby_1-400.jpg 400w " sizes="(max-width: 480px) 120px, 400px "
                src="elephant_baby_1-400.jpg " alt="search ">
        </a> -->



@section('content')
    <div class="banners-flex">
        @include('inc.bannerFind')
        @include('inc.bannerProd')

    </div>
    <div class="main-content">
        <h1>V&scaron;eobecn&eacute; obchodn&eacute; podmienky</h1>
        <p>&nbsp;</p>
        <p><strong>I.</strong></p>
        <p><strong>Z&aacute;kladn&iacute; ustanoven&iacute;</strong></p>
        <ol>
            <li>Tieto v&scaron;eobecn&eacute; obchodn&eacute; podmienky (ďalej len &bdquo;<strong>obchodn&eacute; podmienky</strong>&ldquo;) s&uacute; vydan&eacute;:</li>
        </ol>
        <p>&nbsp;</p>
        <p>(meno a priezvisko/n&aacute;zov)</p>
        <p>IČ:</p>
        <p>DIČ:</p>
        <p>so s&iacute;dlom:</p>
        <p>zap&iacute;sanej u &hellip;..&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; s&uacute;du, oddiel&hellip;., vložka&hellip;..&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p>kontaktn&iacute; &uacute;daje:</p>
        <p>email&nbsp;&nbsp;</p>
        <p>telef&oacute;n</p>
        <p>www</p>
        <p>(ďalej len &bdquo;<strong>pred&aacute;vaj&uacute;ci</strong>&ldquo;)</p>
        <p>&nbsp;</p>
        <ol start="2">
            <li>Tieto obchodn&eacute; podmienky upravuj&uacute; vz&aacute;jomn&eacute; pr&aacute;va a povinnosti pred&aacute;vaj&uacute;ceho a fyzickej osoby, ktor&aacute; uzatv&aacute;ra k&uacute;pnu zmluvu mimo svoju podnikateľsk&uacute; činnosť ako spotrebiteľ, alebo v&nbsp;r&aacute;mci svojej podnikateľskej činnosti (ďalej len: &bdquo;<strong>kupuj&uacute;ci</strong>&ldquo;) prostredn&iacute;ctvom webov&eacute;ho rozhrania umiestnen&eacute;ho na webovej str&aacute;nke dostupn&eacute;ho na internetov&eacute; adrese&hellip;.. (ďalej je &bdquo;<strong>internetov&yacute; obchod</strong>&ldquo;).</li>
            <li>Ustanovenia obchodn&yacute;ch podmienok s&uacute; neoddeliteľnou s&uacute;časťou k&uacute;pnej zmluvy. Odch&yacute;lne dojednanie v k&uacute;pnej zmluve m&aacute; prednosť pred ustanoveniami t&yacute;chto obchodn&yacute;ch podmienok.</li>
            <li>Tieto obchodn&eacute; podmienky a k&uacute;pna zmluva sa uzatv&aacute;raj&uacute; v&nbsp;slovenskom jazyku.</li>
        </ol>
        <p>&nbsp;</p>
        <p><strong>II.</strong></p>
        <p><strong>Inform&aacute;cie o tovare a cen&aacute;ch</strong></p>
        <ol>
            <li>Inform&aacute;cie o tovare, vr&aacute;tane uvedenia ceny jednotliv&eacute;ho tovaru a jeho hlavn&yacute;ch vlastnost&iacute; s&uacute; uveden&eacute; u jednotliv&eacute;ho tovaru v&nbsp;katal&oacute;gu internetov&eacute;ho obchodu. Ceny tovaru s&uacute; uveden&eacute; vr&aacute;tane dane z pridanej hodnoty, v&scaron;etk&yacute;ch s&uacute;visiacich poplatkov a n&aacute;kladov za vr&aacute;tenie tovaru, ak tento tovar zo svojej podstaty nem&ocirc;že byť vr&aacute;ten&yacute; obvyklou po&scaron;tovnou cestou. Ceny tovaru zost&aacute;vaj&uacute; v platnosti po dobu, po ktor&uacute; s&uacute; zobrazovan&eacute; v&nbsp;internetovom obchode. Toto ustanovenie nevylučuje dojednanie k&uacute;pnej zmluvy za individu&aacute;lne dohodnut&yacute;ch podmienok.</li>
            <li>V&scaron;etka prezent&aacute;cia tovaru umiestnen&aacute; v katal&oacute;gu internetov&eacute;ho obchodu je informat&iacute;vneho charakteru a pred&aacute;vaj&uacute;ci nie je povinn&yacute; uzavrieť k&uacute;pnu zmluvu ohľadom tohoto tovaru.</li>
            <li>V internetovom obchode s&uacute; zverejnen&eacute; inform&aacute;cie o n&aacute;kladoch spojen&yacute;ch s balen&iacute;m a dodan&iacute;m tovaru. Inform&aacute;cia o n&aacute;kladoch spojen&yacute;ch s balen&iacute;m a dodan&iacute;m tovaru uveden&eacute; v internetovom obchode plat&iacute; len v pr&iacute;padoch, keď je tovar doručovan&yacute; v r&aacute;mci &uacute;zemia Slovenskej republiky.</li>
            <li>Pr&iacute;padn&eacute; zľavy z&nbsp;k&uacute;pnej ceny tovaru nie je možn&eacute; navz&aacute;jom kombinovať, ak sa nedohodne pred&aacute;vaj&uacute;ci s&nbsp;kupuj&uacute;cim inak.</li>
        </ol>
        <p>&nbsp;</p>
        <p><strong>III.</strong></p>
        <p><strong>Objedn&aacute;vka a uzavretie k&uacute;pnej zmluvy</strong></p>
        <ol>
            <li>N&aacute;klady vzniknut&eacute; kupuj&uacute;cemu pri použit&iacute; komunikačn&yacute;ch prostriedkov na diaľku v&nbsp;s&uacute;vislosti s uzavret&iacute;m k&uacute;pnej zmluvy (n&aacute;klady na internetov&eacute; pripojenie, n&aacute;klady na telef&oacute;nne hovory), hrad&iacute; kupuj&uacute;ci s&aacute;m. Tieto n&aacute;klady sa nel&iacute;&scaron;ia od z&aacute;kladnej sadzby.</li>
            <li>Kupuj&uacute;ci vykon&aacute;va objedn&aacute;vku tovaru t&yacute;mito sp&ocirc;sobmi:</li>
        </ol>
        <ul>
            <li>prostredn&iacute;ctvom svojho z&aacute;kazn&iacute;ckeho &uacute;čtu, ak vykonal predch&aacute;dzaj&uacute;cu registr&aacute;ciu v&nbsp;internetovom obchode,</li>
            <li>vyplnen&iacute;m objedn&aacute;vkov&eacute;ho formul&aacute;ra bez registr&aacute;cie.</li>
        </ul>
        <ol start="3">
            <li>Pri zad&aacute;van&iacute; objedn&aacute;vky si kupuj&uacute;ci vyberie tovar, počet kusov tovaru, sp&ocirc;sob platby a doručenia.</li>
            <li>Pred odoslan&iacute;m objedn&aacute;vky je kupuj&uacute;cemu umožnen&eacute; kontrolovať a meniť &uacute;daje, ktor&eacute; do objedn&aacute;vky vložil. Objedn&aacute;vku odo&scaron;le kupuj&uacute;ci pred&aacute;vaj&uacute;cemu kliknut&iacute;m na tlačidlo&hellip;&hellip;. &Uacute;daje uveden&eacute; v objedn&aacute;vke s&uacute; pred&aacute;vaj&uacute;cim považovan&eacute; za spr&aacute;vne. Podmienkou platnosti objedn&aacute;vky je vyplnenie v&scaron;etk&yacute;ch povinn&yacute;ch &uacute;dajov v objedn&aacute;vkovom formul&aacute;ri a potvrdenie kupuj&uacute;ceho o tom, že sa zozn&aacute;mil s&nbsp;t&yacute;mito obchodn&yacute;mi podmienkami.</li>
            <li>Bezodkladne po obdržan&iacute; objedn&aacute;vky za&scaron;le pred&aacute;vaj&uacute;ci kupuj&uacute;cemu potvrdenie o obdržan&iacute; objedn&aacute;vky na emailov&uacute; adresu, ktor&uacute; kupuj&uacute;ci pri objednan&iacute; zadal. Toto potvrdenie je automatick&eacute; a nepovažuje sa za uzavretie zmluvy. Pr&iacute;lohou potvrdenia s&uacute; aktu&aacute;lne obchodn&eacute; podmienky pred&aacute;vaj&uacute;ceho. K&uacute;pna zmluva je uzavret&aacute; až po prijat&iacute; objedn&aacute;vky pred&aacute;vaj&uacute;cim. Ozn&aacute;men&iacute; o prijat&iacute; objedn&aacute;vky je doručen&eacute; na emailov&uacute; adresu kupuj&uacute;ceho. / Bezodkladne po obdržan&iacute; objedn&aacute;vky za&scaron;le pred&aacute;vaj&uacute;ci kupuj&uacute;cemu potvrdenie o obdržan&iacute; objedn&aacute;vky na emailov&uacute; adresu, ktor&uacute; kupuj&uacute;ci pri objednan&iacute; zadal. Toto potvrdenie sa považuje za uzavretie zmluvy. Pr&iacute;lohou potvrdenia s&uacute; aktu&aacute;lne obchodn&eacute; podmienky pred&aacute;vaj&uacute;ceho. K&uacute;pna zmluva je uzavret&aacute; potvrden&iacute;m objedn&aacute;vky pred&aacute;vaj&uacute;cim na emailov&uacute; adresu kupuj&uacute;ceho.</li>
            <li>V pr&iacute;pade, že niektor&uacute; z požiadaviek uveden&yacute;ch v objedn&aacute;vke nem&ocirc;že pred&aacute;vaj&uacute;ci splniť, za&scaron;le kupuj&uacute;cemu na jeho emailov&uacute; adresu pozmenen&uacute; ponuku. Pozmenen&aacute; ponuka sa považuje za nov&yacute; n&aacute;vrh k&uacute;pnej zmluvy a k&uacute;pna zmluva je v takom pr&iacute;pade uzavret&aacute; potvrden&iacute;m kupuj&uacute;ceho o prijat&iacute; tejto ponuky pred&aacute;vaj&uacute;cemu na jeho emailov&uacute; adresu uveden&uacute; v&nbsp;t&yacute;chto obchodn&yacute;ch podmienkach.</li>
            <li>V&scaron;etky objedn&aacute;vky prijat&eacute; pred&aacute;vaj&uacute;cim s&uacute; z&aacute;v&auml;zn&eacute;. Kupuj&uacute;ci m&ocirc;že zru&scaron;iť objedn&aacute;vku, pok&yacute;m nie je kupuj&uacute;cemu doručen&eacute; ozn&aacute;menie o prijat&iacute; objedn&aacute;vky pred&aacute;vaj&uacute;cim. Kupuj&uacute;ci m&ocirc;že zru&scaron;iť objedn&aacute;vku telefonicky na telef&oacute;nnom č&iacute;sle pred&aacute;vaj&uacute;ceho alebo elektronickou spr&aacute;vou na email pred&aacute;vaj&uacute;ceho, obe uveden&eacute; v&nbsp;t&yacute;chto obchodn&yacute;ch podmienkach.</li>
            <li>V&nbsp;pr&iacute;pade, že do&scaron;lo ku zjavnej technickej chybe na strane pred&aacute;vaj&uacute;ceho pri uveden&iacute; ceny tovaru v&nbsp;internetovom obchode, alebo v&nbsp;priebehu objedn&aacute;vania, nie je pred&aacute;vaj&uacute;ci povinn&yacute; dodať kupuj&uacute;cemu tovar za t&uacute;to celkom zjavne chybn&uacute; cenu ani v&nbsp;pr&iacute;pade, že kupuj&uacute;cemu bolo zaslan&eacute; automatick&eacute; potvrdenie o obdržan&iacute; objedn&aacute;vky podľa t&yacute;chto obchodn&yacute;ch podmienok. Pred&aacute;vaj&uacute;ci informuje kupuj&uacute;ceho o chybe bez zbytočn&eacute;ho odkladu a za&scaron;le kupuj&uacute;cemu na jeho emailov&uacute; adresu pozmenen&uacute; ponuku. Pozmenen&aacute; ponuka sa považuje za nov&yacute; n&aacute;vrh k&uacute;pnej zmluvy a k&uacute;pna zmluva je v takom pr&iacute;pade uzavret&aacute; potvrden&iacute;m o prijat&iacute; kupuj&uacute;cim na emailov&uacute; adresu pred&aacute;vaj&uacute;ceho.</li>
        </ol>
        <p>&nbsp;</p>
        <p><strong>IV.</strong></p>
        <p><strong>Z&aacute;kazn&iacute;cky &uacute;čet</strong></p>
        <ol>
            <li>Na z&aacute;klade registr&aacute;cie kupuj&uacute;ceho vykonanej v internetovom obchode m&ocirc;že kupuj&uacute;ci pristupovať do svojho z&aacute;kazn&iacute;ckeho &uacute;čtu. Zo svojho z&aacute;kazn&iacute;ckeho &uacute;čtu m&ocirc;že kupuj&uacute;ci vykon&aacute;vať objedn&aacute;vanie tovaru. Kupuj&uacute;ci m&ocirc;že objedn&aacute;vať tovar tiež bez registr&aacute;cie.</li>
            <li>Pri registr&aacute;cii do z&aacute;kazn&iacute;ckeho &uacute;čtu a pri objedn&aacute;van&iacute; tovaru je kupuj&uacute;ci povinn&yacute; uv&aacute;dzať spr&aacute;vne a pravdivo v&scaron;etky &uacute;daje. &Uacute;daje uveden&eacute; v už&iacute;vateľskom &uacute;čte je kupuj&uacute;ci pri akejkoľvek ich zmene povinn&yacute; aktualizovať. &Uacute;daje uveden&eacute; kupuj&uacute;cim v z&aacute;kazn&iacute;ckom &uacute;čte a pri objedn&aacute;van&iacute; tovaru s&uacute; pred&aacute;vaj&uacute;cim považovan&eacute; za spr&aacute;vne.</li>
            <li>Pr&iacute;stup k&nbsp;z&aacute;kazn&iacute;ckemu &uacute;čtu je zabezpečen&yacute; už&iacute;vateľsk&yacute;m menom a heslom. Kupuj&uacute;ci je povinn&yacute; zachov&aacute;vať mlčanlivosť ohľadom inform&aacute;ci&iacute; nevyhnutn&yacute;ch k pr&iacute;stupu do jeho z&aacute;kazn&iacute;ckeho &uacute;čtu. Pred&aacute;vaj&uacute;ci nenesie zodpovednosť za pr&iacute;padn&eacute; zneužitie z&aacute;kazn&iacute;ckeho &uacute;čtu tret&iacute;mi osobami.</li>
            <li>Kupuj&uacute;ci nie je opr&aacute;vnen&yacute; umožniť využ&iacute;vanie z&aacute;kazn&iacute;ckeho &uacute;čtu tret&iacute;m osob&aacute;m.</li>
            <li>Pred&aacute;vaj&uacute;ci m&ocirc;že zru&scaron;iť už&iacute;vateľsk&yacute; &uacute;čet, a to najm&auml; v pr&iacute;pade, keď kupuj&uacute;ci svoj už&iacute;vateľsk&yacute; &uacute;čet dlh&scaron;ie nevyuž&iacute;va, či v pr&iacute;pade, kedy kupuj&uacute;ci poru&scaron;&iacute; svoje povinnosti z k&uacute;pnej zmluvy a t&yacute;chto obchodn&yacute;ch podmienok.</li>
            <li>Kupuj&uacute;ci berie na vedomie, že už&iacute;vateľsk&yacute; &uacute;čet nemus&iacute; byť dostupn&yacute; nepretržite, a to najm&auml; s ohľadom na nutn&uacute; &uacute;držbu hardwarov&eacute;ho a softwarov&eacute;ho vybavenia pred&aacute;vaj&uacute;ceho, popr. nutn&uacute; &uacute;držbu hardwarov&eacute;ho a softwarov&eacute;ho vybavenia tret&iacute;ch os&ocirc;b.</li>
        </ol>
        <p>&nbsp;</p>
        <p><strong>V.</strong></p>
        <p><strong>Platobn&eacute; podmienky a dodanie tovaru</strong></p>
        <ol>
            <li>Cenu tovaru a pr&iacute;padn&eacute; n&aacute;klady spojen&eacute; s dodan&iacute;m tovaru podľa k&uacute;pnej zmluvy m&ocirc;že kupuj&uacute;ci zaplatiť nasleduj&uacute;cimi sp&ocirc;sobmi:</li>
        </ol>
        <ul>
            <li>bezhotovostne prevodom na bankov&yacute; &uacute;čet pred&aacute;vaj&uacute;ceho č&hellip;.., veden&yacute; u&hellip;..</li>
            <li>bezhotovostne platobnou kartou</li>
            <li>bezhotovostne prevodom na &uacute;čet pred&aacute;vaj&uacute;ceho prostredn&iacute;ctvom platobnej br&aacute;ny&hellip;.,</li>
            <li>dobierkou v hotovosti pri prevzat&iacute; tovaru,</li>
            <li>v&nbsp;hotovosti alebo platobnou kartou pri osobnom odbere na prev&aacute;dzke,</li>
            <li>v&nbsp;hotovosti alebo platobnou kartou pri osobnom odbere na v&yacute;dajni z&aacute;sielok&hellip;...</li>
        </ul>
        <ol start="2">
            <li>Spoločne s k&uacute;pnou cenou je kupuj&uacute;ci povinn&yacute; zaplatiť pred&aacute;vaj&uacute;cemu n&aacute;klady spojen&eacute; s balen&iacute;m a dodan&iacute;m tovaru v zmluvnej v&yacute;&scaron;ke. Ak nie je ďalej uveden&eacute; v&yacute;slovne inak, rozumie sa ďalej k&uacute;pnou cenou aj n&aacute;klad spojen&yacute; s dodan&iacute;m tovaru.</li>
            <li>V pr&iacute;pade platby v hotovosti je k&uacute;pna cena splatn&aacute; pri prevzat&iacute; tovaru. V pr&iacute;pade bezhotovostnej platby je k&uacute;pna cena splatn&aacute; do &hellip;. dn&iacute; od uzavretia k&uacute;pnej zmluvy.</li>
            <li>V pr&iacute;pade platby prostredn&iacute;ctvom platobnou br&aacute;ny postupuje kupuj&uacute;ci podľa pokynov pr&iacute;slu&scaron;n&eacute;ho poskytovateľa elektronick&yacute;ch platieb.</li>
            <li>V pr&iacute;pade bezhotovostnej platby je z&aacute;v&auml;zok kupuj&uacute;ceho zaplatiť k&uacute;pnu cenu splnen&yacute; okamihom prip&iacute;sania pr&iacute;slu&scaron;nej sumy na bankov&yacute; &uacute;čet pred&aacute;vaj&uacute;ceho.</li>
            <li>Pred&aacute;vaj&uacute;ci nepožaduje od kupuj&uacute;ceho vopred žiadnu z&aacute;lohu či in&uacute; obdobn&uacute; platbu. &Uacute;hrada k&uacute;pnej ceny pred odoslan&iacute;m tovaru nie je z&aacute;lohou.</li>
            <li>Podľa z&aacute;kona o evidencii tržieb je pred&aacute;vaj&uacute;ci povinn&yacute; vystaviť kupuj&uacute;cemu pokladničn&yacute; doklad. Z&aacute;roveň je povinn&yacute; zaevidovať prijat&uacute; tržbu u spr&aacute;vcu dane online, v&nbsp;pr&iacute;pade technick&eacute;ho v&yacute;padku potom najnesk&ocirc;r do 48 hod&iacute;n.</li>
            <li>Tovar je kupuj&uacute;cemu dodan&yacute;:</li>
        </ol>
        <ul>
            <li>na adresu určen&uacute; kupuj&uacute;cim v objedn&aacute;vke</li>
            <li>prostredn&iacute;ctvom v&yacute;dajne z&aacute;sielok na adresu v&yacute;dajne, ktor&uacute; kupuj&uacute;ci určil,</li>
            <li>osobn&yacute;m odberom v&nbsp;prev&aacute;dzkarni pred&aacute;vaj&uacute;ceho.</li>
        </ul>
        <ol start="9">
            <li>Voľba sp&ocirc;sobu dodania sa vykon&aacute;va v&nbsp;priebehu objedn&aacute;vania tovaru.</li>
            <li>N&aacute;klady na dodanie tovaru v&nbsp;z&aacute;vislosti na sp&ocirc;sobe odoslania a prevzatia tovaru s&uacute; uveden&eacute; v&nbsp;objedn&aacute;vke kupuj&uacute;ceho a v&nbsp;potvrden&iacute; objedn&aacute;vky pred&aacute;vaj&uacute;cim. V pr&iacute;pade, že je sp&ocirc;sob dopravy dohodnut&yacute; na z&aacute;klade zvl&aacute;&scaron;tneho požiadavku kupuj&uacute;ceho, zn&aacute;&scaron;a kupuj&uacute;ci riziko a pr&iacute;padn&eacute; dodatočn&eacute; n&aacute;klady spojen&eacute; s t&yacute;mto sp&ocirc;sobom dopravy.</li>
            <li>Ak je pred&aacute;vaj&uacute;ci podľa k&uacute;pnej zmluvy povinn&yacute; dodať tovar na miesto určen&eacute; kupuj&uacute;cim v objedn&aacute;vke, je kupuj&uacute;ci povinn&yacute; prevziať tovar pri dodan&iacute;. V pr&iacute;pade, že je z d&ocirc;vodov na strane kupuj&uacute;ceho nutn&eacute; tovar doručovať opakovane alebo in&yacute;m sp&ocirc;sobom, než bolo uveden&eacute; v objedn&aacute;vke, je kupuj&uacute;ci povinn&yacute; zaplatiť n&aacute;klady spojen&eacute; s opakovan&yacute;m doručovan&iacute;m tovaru, resp. n&aacute;klady spojen&eacute; s in&yacute;m sp&ocirc;sobom doručenia.</li>
            <li>Pri prevzat&iacute; tovaru od prepravcu je kupuj&uacute;ci povinn&yacute; skontrolovať neporu&scaron;enosť obalov tovaru a v pr&iacute;pade ak&yacute;chkoľvek v&aacute;d toto bezodkladne ozn&aacute;miť prepravcovi. V pr&iacute;pade zistenia poru&scaron;enia obalu nasvedčuj&uacute;ceho neopr&aacute;vnen&eacute;mu vniknutiu do z&aacute;sielky nemus&iacute; kupuj&uacute;ci z&aacute;sielku od prepravcu prevziať.</li>
            <li>Pred&aacute;vaj&uacute;ci vystav&iacute; kupuj&uacute;cemu daňov&yacute; doklad &ndash; fakt&uacute;ru. Daňov&yacute; doklad je odoslan&yacute; na emailov&uacute; adresu kupuj&uacute;ceho./Daňov&yacute; doklad je priložen&yacute; k dod&aacute;van&eacute;mu tovaru.</li>
            <li>Kupuj&uacute;ci nadob&uacute;da vlastn&iacute;cke pr&aacute;vo ku tovaru zaplaten&iacute;m celej k&uacute;pnej ceny za tovar, vr&aacute;tane n&aacute;kladov na dodanie, najsk&ocirc;r v&scaron;ak prevzat&iacute;m tovaru. Zodpovednosť za n&aacute;hodn&uacute; stratu, po&scaron;kodenie či zničenie tovaru prech&aacute;dza na kupuj&uacute;ceho okamihom prevzatia tovaru alebo okamihom, kedy mal kupuj&uacute;ci povinnosť tovar prevziať, ale v&nbsp;rozpore s&nbsp;k&uacute;pnou zmluvou tak neurobil.</li>
        </ol>
        <p>&nbsp;</p>
        <p><strong>VI.</strong></p>
        <p><strong>Odst&uacute;penie od zmluvy</strong></p>
        <ol>
            <li>Kupuj&uacute;ci, ktor&yacute; uzavrel k&uacute;pnu zmluvu mimo svoju podnikateľsk&uacute; činnosť ako spotrebiteľ, m&aacute; pr&aacute;vo od k&uacute;pnej zmluvy odst&uacute;piť aj bez uvedenia d&ocirc;vodu.</li>
            <li>Lehota pre odst&uacute;penie od zmluvy predstavuje 14 dn&iacute;</li>
        </ol>
        <ul>
            <li>odo dňa prevzatia tovaru,</li>
            <li>odo dňa prevzatia poslednej dod&aacute;vky tovaru, ak je predmetom zmluvy niekoľko druhov tovaru alebo dodanie niekoľk&yacute;ch čast&iacute;</li>
            <li>odo dňa prevzatia prvej dod&aacute;vky tovaru, ak je predmetom zmluvy pravideln&aacute; opakovan&aacute; dod&aacute;vka tovaru.</li>
        </ul>
        <ol start="3">
            <li>Kupuj&uacute;ci nem&ocirc;že okrem in&eacute;ho odst&uacute;piť od k&uacute;pnej zmluvy:</li>
        </ol>
        <ul>
            <li>o poskytovan&iacute; služieb, ak boli splnen&eacute; s jeho predch&aacute;dzaj&uacute;cim v&yacute;slovn&yacute;m s&uacute;hlasom pred uplynut&iacute;m lehoty pre odst&uacute;penie od zmluvy a pred&aacute;vaj&uacute;ci pred uzavret&iacute;m zmluvy ozn&aacute;mil kupuj&uacute;cemu, že v takom pr&iacute;pade nem&aacute; pr&aacute;vo na odst&uacute;penie od zmluvy a ak do&scaron;lo k&nbsp;&uacute;pln&eacute;mu poskytnutiu služby,</li>
            <li>o dod&aacute;vke tovaru alebo služby, ktor&yacute;ch cena z&aacute;vis&iacute; na v&yacute;kyvoch finančn&eacute;ho trhu nez&aacute;visle na v&ocirc;li pred&aacute;vaj&uacute;ceho a ku ktor&eacute;mu m&ocirc;že d&ocirc;jsť v priebehu lehoty pre odst&uacute;penie od zmluvy,</li>
            <li>o dodan&iacute; alkoholick&yacute;ch n&aacute;pojov, ktor&yacute;ch cena bola dohodnut&aacute; v&nbsp;čase uzavretia zmluvy, ktor&eacute; m&ocirc;žu byť dodan&eacute; až po uplynut&iacute; tridsiatich dn&iacute; a ktor&yacute;ch cena z&aacute;vis&iacute; na v&yacute;kyvoch trhu nez&aacute;visl&yacute;ch na v&ocirc;li pred&aacute;vaj&uacute;ceho,</li>
            <li>o dod&aacute;vke tovaru, ktor&yacute; bol upraven&yacute; podľa priania kupuj&uacute;ceho, tovaru vyroben&eacute;ho na mieru alebo tovaru určen&eacute;ho osobitne pre jedn&eacute;ho kupuj&uacute;ceho,</li>
            <li>o dod&aacute;vke tovaru, ktor&yacute; podlieha r&yacute;chlej skaze, ako aj tovaru, ktor&yacute; bol po dodan&iacute; vzhľadom na svoju povahu nen&aacute;vratne zmie&scaron;an&yacute; s in&yacute;m tovarom,</li>
            <li>o dod&aacute;vke tovaru v uzavretom obale, ktor&yacute; nie je vhodn&eacute; vr&aacute;tiť z&nbsp;d&ocirc;vodov ochrany zdravia alebo z hygienick&yacute;ch d&ocirc;vodov a ktor&eacute;ho ochrann&yacute; obal bol po dodan&iacute; poru&scaron;en&yacute;,</li>
            <li>o dod&aacute;vke zvukov&yacute;ch z&aacute;znamov, obrazov&yacute;ch z&aacute;znamov, zvukovoobrazov&yacute;ch z&aacute;znamov, kn&iacute;h alebo poč&iacute;tačov&eacute;ho softv&eacute;ru, ak s&uacute; pred&aacute;van&eacute; v&nbsp;ochrannom obale a kupuj&uacute;ci tento obal rozbalil,</li>
            <li>o dod&aacute;vke nov&iacute;n, period&iacute;k alebo časopisov s&nbsp;v&yacute;nimkou predaja na z&aacute;klade dohody o predplatnom a predaji kn&iacute;h nedod&aacute;van&yacute;ch v&nbsp;ochrannom obale,</li>
            <li>o dod&aacute;vke elektronick&eacute;ho obsahu inak ako na hmotnom nosiči, ak sa jeho poskytovanie začalo s&nbsp;v&yacute;slovn&yacute;m s&uacute;hlasom kupuj&uacute;ceho a kupuj&uacute;ci vyhl&aacute;sil , že bol riadne poučen&yacute; o tom, že vyjadren&iacute;m tohoto s&uacute;hlasu str&aacute;ca pr&aacute;vo na odst&uacute;penie od zmluvy,</li>
            <li>v&nbsp;ďal&scaron;&iacute;ch pr&iacute;padoch uveden&yacute;ch v &sect; 7 ods. 6 z&aacute;kona č. 102/2014 Z.z. o ochrane spotrebiteľa pri predaji tovaru alebo poskytovan&iacute; služieb na z&aacute;klade zmluvy uzavretej na diaľku alebo zmluvy uzavretej mimo prev&aacute;dzkov&yacute;ch priestorov pred&aacute;vaj&uacute;ceho v&nbsp;znen&iacute; nehor&scaron;&iacute;ch predpisov.</li>
        </ul>
        <ol start="4">
            <li>Pre dodržanie lehoty pre odst&uacute;penie od zmluvy mus&iacute; kupuj&uacute;ci odoslať prehl&aacute;senie o odst&uacute;pen&iacute; v lehote pre odst&uacute;penie od zmluvy.</li>
            <li>Pre odst&uacute;penie od k&uacute;pnej zmluvy m&ocirc;že kupuj&uacute;ci využiť vzorov&yacute; formul&aacute;r k&nbsp;odst&uacute;peniu od zmluvy poskytovan&yacute; pred&aacute;vaj&uacute;cim. Odst&uacute;penie od k&uacute;pnej zmluvy za&scaron;le kupuj&uacute;ci na emailov&uacute; alebo doručovaciu adresu pred&aacute;vaj&uacute;ceho uveden&uacute; v&nbsp;t&yacute;chto obchodn&yacute;ch podmienkach. Pred&aacute;vaj&uacute;ci potvrd&iacute; kupuj&uacute;cemu bezodkladne prijatie formul&aacute;ra.</li>
            <li>Kupuj&uacute;ci, ktor&yacute; odst&uacute;pil od zmluvy, je povinn&yacute; vr&aacute;tiť pred&aacute;vaj&uacute;cemu tovar do 14 dn&iacute; od odst&uacute;penia od zmluvy. Kupuj&uacute;ci zn&aacute;&scaron;a n&aacute;klady spojen&eacute; s vr&aacute;ten&iacute;m tovaru pred&aacute;vaj&uacute;cemu, a to i v tom pr&iacute;pade, ak tovar nem&ocirc;že byť vr&aacute;ten&yacute; pre svoju povahu obvyklou po&scaron;tovnou cestou.</li>
            <li>Ak odst&uacute;pi kupuj&uacute;ci od zmluvy, vr&aacute;ti mu pred&aacute;vaj&uacute;ci bezodkladne, najnesk&ocirc;r v&scaron;ak do 14 dn&iacute; od odst&uacute;penie od zmluvy, v&scaron;etky peňažn&eacute; prostriedky vr&aacute;tane n&aacute;kladov na dodanie, ktor&eacute; od neho prijal, a to rovnak&yacute;m sp&ocirc;sobom. Pred&aacute;vaj&uacute;ci vr&aacute;ti kupuj&uacute;cemu prijat&eacute; peňažn&eacute; prostriedky in&yacute;m sp&ocirc;sobom len vtedy, ak s t&yacute;m kupuj&uacute;ci s&uacute;hlas&iacute; a ak mu t&yacute;m nevznikn&uacute; ďal&scaron;ie n&aacute;klady.</li>
            <li>Ak kupuj&uacute;ci zvolil in&yacute; než najlacnej&scaron;&iacute; sp&ocirc;sob dodania tovaru, ktor&yacute; pred&aacute;vaj&uacute;ci pon&uacute;ka, vr&aacute;ti pred&aacute;vaj&uacute;ci kupuj&uacute;cemu n&aacute;klady na dodanie tovaru vo v&yacute;&scaron;ke zodpovedaj&uacute;cej najlacnej&scaron;iemu pon&uacute;kan&eacute;mu sp&ocirc;sobu dodania tovaru.</li>
            <li>Ak odst&uacute;pi kupuj&uacute;ci od k&uacute;pnej zmluvy, nie je pred&aacute;vaj&uacute;ci povinn&yacute; vr&aacute;tiť prijat&eacute; peňažn&eacute; prostriedky kupuj&uacute;cemu sk&ocirc;r, než mu kupuj&uacute;ci tovar odovzd&aacute; alebo preuk&aacute;že, že tovar pred&aacute;vaj&uacute;cemu odoslal.</li>
            <li>Tovar mus&iacute; vr&aacute;tiť kupuj&uacute;ci pred&aacute;vaj&uacute;cemu nepo&scaron;koden&yacute;, neopotreben&yacute; a neznečisten&yacute; a ak je to možn&eacute;, v p&ocirc;vodnom obale. N&aacute;rok na n&aacute;hradu &scaron;kody vzniknutej na tovare je pred&aacute;vaj&uacute;ci opr&aacute;vnen&yacute; jednostranne započ&iacute;tať proti n&aacute;roku kupuj&uacute;ceho na vr&aacute;tenie k&uacute;pnej ceny.</li>
            <li>Pred&aacute;vaj&uacute;ci je opr&aacute;vnen&yacute; odst&uacute;piť od k&uacute;pnej zmluvy z d&ocirc;vodu vypredania z&aacute;sob, nedostupnosti tovaru, alebo keď v&yacute;robca, dovozca alebo dod&aacute;vateľ tovaru preru&scaron;il v&yacute;robu alebo dovoz tovaru. Pred&aacute;vaj&uacute;ci bezodkladne informuje kupuj&uacute;ceho prostredn&iacute;ctvom emailovej adresy uvedenej v objedn&aacute;vke a vr&aacute;ti v lehote 14 dn&iacute; od ozn&aacute;men&iacute; o odst&uacute;penie od k&uacute;pnej zmluvy v&scaron;etky peňažn&eacute; prostriedky vr&aacute;tane n&aacute;kladov na dodanie, ktor&eacute; od neho na z&aacute;klade zmluvy prijal, a to rovnak&yacute;m sp&ocirc;sobom, popr&iacute;pade sp&ocirc;sobom určen&yacute;m kupuj&uacute;cim.</li>
        </ol>
        <p>&nbsp;</p>
        <p><strong>VII.</strong></p>
        <p><strong>Pr&aacute;va z&nbsp;vadn&eacute;ho plnenia</strong></p>
        <ol>
            <li>Pred&aacute;vaj&uacute;ci zodpoved&aacute; kupuj&uacute;cemu, že tovaru pri prevzat&iacute; nem&aacute; vady. Najm&auml; pred&aacute;vaj&uacute;ci zodpoved&aacute; kupuj&uacute;cemu, že v dobe, kedy kupuj&uacute;ci tovar prevzal:</li>
        </ol>
        <ul>
            <li>m&aacute; tovar vlastnosti, ktor&eacute; si strany dojedali, a&nbsp;ak ch&yacute;ba dojednanie, m&aacute; tak&eacute; vlastnosti, ktor&eacute; pred&aacute;vaj&uacute;ci alebo v&yacute;robca pop&iacute;sal alebo ktor&eacute; kupuj&uacute;ci očak&aacute;val s ohľadom na povahu tovaru a na z&aacute;klade reklamy pred&aacute;vaj&uacute;cim vykonanej,</li>
            <li>sa tovar hod&iacute; k &uacute;čelu, ktor&yacute; pre jeho použitie pred&aacute;vaj&uacute;ci uv&aacute;dza alebo ku ktor&eacute;mu sa tovar tohoto druhu obvykle použ&iacute;va,</li>
            <li>tovar zodpoved&aacute; akosti alebo prevedeniu dohodnutej vzorky alebo predlohy, ak bola akosť alebo prevedenie určen&eacute; podľa dohodnutej vzorky alebo predlohy,</li>
            <li>je tovar v zodpovedaj&uacute;com množstve alebo hmotnosti a</li>
            <li>tovar vyhovuje požiadavk&aacute;m pr&aacute;vnych predpisov.</li>
        </ul>
        <ol start="2">
            <li>Ak sa vada prejav&iacute; v priebehu &scaron;iestich mesiacov od prevzatia tovaru kupuj&uacute;cim, m&aacute; sa za to, že tovar bol vadn&yacute; už pri prevzat&iacute;. Kupuj&uacute;ci je opr&aacute;vnen&yacute; uplatniť pr&aacute;va z vady, ktor&aacute; sa&nbsp;vyskytne u spotrebn&eacute;ho tovaru v&nbsp;dobe dvadsať &scaron;tyri mesiacov od prevzatia. Toto ustanoven&iacute; sa nepoužije u tovaru pred&aacute;van&eacute;ho za niž&scaron;iu cenu pre vadu, pre ktor&uacute; bola niž&scaron;ia cena dohodnut&aacute;, na opotrebenie tovaru sp&ocirc;soben&eacute; jeho obvykl&yacute;m už&iacute;van&iacute;m, u&nbsp;použit&eacute;ho tovaru pre vadu zodpovedaj&uacute;cu miere použ&iacute;vania alebo opotrebenia, ktor&uacute; tovar mal pri prevzat&iacute; kupuj&uacute;cim, alebo ak to vypl&yacute;va z povahy tovaru.</li>
            <li>V pr&iacute;pade v&yacute;skytu vady m&ocirc;že kupuj&uacute;ci pred&aacute;vaj&uacute;cemu predložiť reklam&aacute;ciu a požadovať:</li>
        </ol>
        <ul>
            <li>ak ide o vadu, ktor&uacute; je možn&eacute; odstr&aacute;niť:</li>
            <li>bezplatn&eacute; odstr&aacute;nenie vady tovaru,</li>
            <li>v&yacute;menu tovaru za nov&yacute; tovar,</li>
            <li>ak ide o vadu, ktor&uacute; nemožno odstr&aacute;niť:</li>
            <li>primeran&uacute; zľavu z&nbsp;k&uacute;pnej ceny,</li>
            <li>odst&uacute;piť od zmluvy.</li>
        </ul>
        <ol start="4">
            <li>Kupuj&uacute;ci m&aacute; pr&aacute;vo odst&uacute;piť od zmluvy,</li>
        </ol>
        <ul>
            <li>ak m&aacute; tovar vadu, ktor&uacute; nemožno odstr&aacute;niť a ktor&aacute; br&aacute;ni tomu, aby sa vec mohla riadne už&iacute;vať ako vec bez vady,</li>
            <li>ak nem&ocirc;že tovar riadne už&iacute;vať pre opakovan&yacute; v&yacute;skyt vady alebo v&aacute;d po oprave,</li>
            <li>ak nem&ocirc;že riadne tovar už&iacute;vať pre v&auml;č&scaron;&iacute; počet v&aacute;d tovaru.</li>
        </ul>
        <ol start="5">
            <li>Pred&aacute;vaj&uacute;ci je povinn&yacute; prijať reklam&aacute;ciu v ktorejkoľvek prev&aacute;dzkarni, v ktorej je prijatie reklam&aacute;cie možn&eacute;, pr&iacute;padne i v s&iacute;dle alebo mieste podnikania. Spotrebiteľ m&ocirc;že reklam&aacute;ciu uplatniť aj u osoby určenej pred&aacute;vaj&uacute;cim. Ak reklam&aacute;ciu spotrebiteľa vybavuje osoba určen&aacute; pred&aacute;vaj&uacute;cim, t&aacute;to m&ocirc;že reklam&aacute;ciu vybaviť iba odovzdan&iacute;m opraven&eacute;ho tovaru, inak reklam&aacute;ciu post&uacute;pi na vybavenie pred&aacute;vaj&uacute;cemu. Pred&aacute;vaj&uacute;ci je povinn&yacute; kupuj&uacute;cemu vydať p&iacute;somn&eacute; potvrdenie o tom, kedy kupuj&uacute;ci pr&aacute;vo uplatnil, čo je obsahom reklam&aacute;cie a ak&yacute; sp&ocirc;sob vybavenia reklam&aacute;cie kupuj&uacute;ci požaduje, ako aj potvrdenie o d&aacute;tume a sp&ocirc;sobe vybavenia reklam&aacute;cie, vr&aacute;tane potvrdenia o vykonan&iacute; opravy a dobe jej trvania, pr&iacute;padne p&iacute;somn&eacute; od&ocirc;vodnenie zamietnutia reklam&aacute;cie.</li>
            <li>Ak spotrebiteľ uplatn&iacute; reklam&aacute;ciu, pred&aacute;vaj&uacute;ci alebo n&iacute;m poveren&yacute; zamestnanec alebo určen&aacute; osoba je povinn&yacute; poučiť spotrebiteľa o jeho pr&aacute;vach vypl&yacute;vaj&uacute;cich z&nbsp;vadn&eacute;ho plnenia. Na z&aacute;klade rozhodnutia spotrebiteľa, ktor&eacute; z&nbsp;pr&aacute;v vypl&yacute;vaj&uacute;cich mu z&nbsp;vadn&eacute;ho plnenia si uplatňuje, je Pred&aacute;vaj&uacute;ci alebo n&iacute;m poveren&yacute; pracovn&iacute;k alebo určen&aacute; osoba povinn&yacute; určiť sp&ocirc;sob vybavenia reklam&aacute;cie ihneď, v zložit&yacute;ch pr&iacute;padoch najnesk&ocirc;r do troch pracovn&yacute;ch dn&iacute; odo dňa uplatnenia reklam&aacute;ch, v&nbsp;od&ocirc;vodnen&yacute;ch pr&iacute;padoch, najm&auml; ak sa vyžaduje zložit&eacute; technick&eacute; zhodnotenie stavu tovaru, najnesk&ocirc;r do 30 dn&iacute; odo dňa uplatnenia reklam&aacute;cie. . Po určen&iacute; sp&ocirc;sobu vybavenia reklam&aacute;cie sa reklam&aacute;cia vr&aacute;tane odstr&aacute;nenia vady mus&iacute; vybaviť ihneď, pričom v&nbsp;od&ocirc;vodnen&yacute;ch pr&iacute;padoch možno reklam&aacute;ciu vybaviť aj nesk&ocirc;r. Vybavenie reklam&aacute;cie vr&aacute;tane odstr&aacute;nenia vady v&scaron;ak nesmie trvať dlh&scaron;ie ako 30 dn&iacute; odo dňa uplatnenia reklam&aacute;cie. M&aacute;rne uplynutie tejto lehoty sa považuje za podstatn&eacute; poru&scaron;enie zmluvy a kupuj&uacute;ci m&aacute; pr&aacute;vo od k&uacute;pnej zmluvy odst&uacute;piť alebo m&aacute; pr&aacute;vo na v&yacute;menu tovaru za nov&yacute; tovar. Za okamih uplatnenia reklam&aacute;cie sa považuje moment, kedy d&ocirc;jde prejav v&ocirc;le kupuj&uacute;ceho (uplatnenie pr&aacute;va z vadn&eacute;ho plnenia) pred&aacute;vaj&uacute;cemu.</li>
            <li>Pred&aacute;vaj&uacute;ci p&iacute;somne informuje kupuj&uacute;ceho o v&yacute;sledku reklam&aacute;cie, a to najnesk&ocirc;r do 30 dn&iacute; odo dňa uplatnenia reklam&aacute;cie.</li>
            <li>Pr&aacute;vo z vadn&eacute;ho plnenia kupuj&uacute;cemu nepatr&iacute;, ak kupuj&uacute;ci pred prevzat&iacute;m veci vedel, že vec m&aacute; vadu, alebo ak kupuj&uacute;ci vadu s&aacute;m sp&ocirc;sobil.</li>
            <li>V pr&iacute;pade opr&aacute;vnenej reklam&aacute;cie m&aacute; kupuj&uacute;ci pr&aacute;vo na n&aacute;hradu &uacute;čelne vynaložen&yacute;ch n&aacute;kladov vzniknut&yacute;ch v s&uacute;vislosti s uplatnen&iacute;m reklam&aacute;cie. Toto pr&aacute;vo m&ocirc;že kupuj&uacute;ci u pred&aacute;vaj&uacute;ceho uplatniť v lehote do jedn&eacute;ho mesiaca po uplynut&iacute; z&aacute;ručnej doby.</li>
            <li>Voľbu sp&ocirc;sobu reklam&aacute;cie a&nbsp;jej vybavenia, ak je viacero možnost&iacute;, m&aacute; kupuj&uacute;ci.</li>
            <li>Pr&aacute;va a povinnosti zmluvn&yacute;ch str&aacute;n ohľadom pr&aacute;v z&nbsp;vadn&eacute;ho plnenia sa riadia &sect;&nbsp;499 až 510, &sect; 596 až 600 a &sect; 619 až 627 z&aacute;kona č. 40/1964 Zb. Občianskeho z&aacute;konn&iacute;ka v&nbsp;znen&iacute; neskor&scaron;&iacute;ch predpisov a z&aacute;konom č.&nbsp;250/2007 Z. z., o ochrane spotrebiteľa v&nbsp;znen&iacute; neskor&scaron;&iacute;ch predpisov.</li>
            <li>Ďal&scaron;ie pr&aacute;va a povinnosti str&aacute;n s&uacute;visiace so&nbsp;zodpovednosťou pred&aacute;vaj&uacute;ceho za vady upravuje reklamačn&yacute; poriadok pred&aacute;vaj&uacute;ceho.</li>
        </ol>
        <p>&nbsp;</p>
        <p><strong>VIII.</strong></p>
        <p><strong>Doručovanie</strong></p>
        <ol>
            <li>Zmluvn&eacute; strany si m&ocirc;žu v&scaron;etku p&iacute;somn&uacute; kore&scaron;pondenciu vz&aacute;jomne doručovať prostredn&iacute;ctvom elektronickej po&scaron;ty.</li>
            <li>Kupuj&uacute;ci doručuje pred&aacute;vaj&uacute;cemu kore&scaron;pondenciu na emailov&uacute; adresu uveden&uacute; v&nbsp;t&yacute;chto obchodn&yacute;ch podmienkach. Pred&aacute;vaj&uacute;ci doručuje kupuj&uacute;cemu kore&scaron;pondenciu na emailov&uacute; adresu uveden&uacute; v&nbsp;jeho z&aacute;kazn&iacute;ckom &uacute;čte alebo v objedn&aacute;vke.</li>
        </ol>
        <p>&nbsp;</p>
        <p><strong>IX.</strong></p>
        <p><strong>Mimos&uacute;dne rie&scaron;enie sporov</strong></p>
        <ol>
            <li>Spotrebiteľ m&aacute; pr&aacute;vo obr&aacute;tiť sa na pred&aacute;vaj&uacute;ceho so žiadosťou o n&aacute;pravu, ak nie je spokojn&yacute; so sp&ocirc;sobom, ktor&yacute;m pred&aacute;vaj&uacute;ci vybavil jeho reklam&aacute;ciu alebo ak sa domnieva, že pred&aacute;vaj&uacute;ci poru&scaron;il jeho pr&aacute;va. Spotrebiteľ m&aacute; pr&aacute;vo podať n&aacute;vrh na začatie alternat&iacute;vneho (mimos&uacute;dneho) rie&scaron;enia sporu u subjektu alternat&iacute;vneho rie&scaron;enia sporov, ak pred&aacute;vaj&uacute;ci na žiadosť podľa predch&aacute;dzaj&uacute;cej vety odpovedal zamietavo alebo na ňu neodpovedal do 30 dn&iacute; odo dňa jej odoslania. T&yacute;mto nie je dotknut&aacute; možnosť spotrebiteľa obr&aacute;tiť sa na s&uacute;d.</li>
            <li>K mimos&uacute;dnemu rie&scaron;eniu spotrebiteľsk&yacute;ch sporou z k&uacute;pnej zmluvy je pr&iacute;slu&scaron;n&aacute; Slovensk&aacute; obchodn&aacute; in&scaron;pekcia, so s&iacute;dlom: Prievozsk&aacute; 32, 827 99 Bratislava, IČO: 17&nbsp;331&nbsp;927, ktor&uacute; je možn&eacute; za uveden&yacute;m &uacute;čelom kontaktovať na adrese Slovensk&aacute; obchodn&aacute; in&scaron;pekcia, &Uacute;stredn&yacute; in&scaron;pektor&aacute;t, Odbor medzin&aacute;rodn&yacute;ch vzťahov a alternat&iacute;vneho rie&scaron;enia sporov, Prievozsk&aacute; 32, 827 99 Bratislava 27, alebo elektronicky na <a href="mailto:ars@soi.sk">ars@soi.sk</a> alebo <a href="mailto:adr.@soi.sk">@soi.sk</a>. Internetov&aacute; adresa: <a href="https://www.soi.sk/">https://www.soi.sk/</a>. Platformu pre rie&scaron;enie sporov on-line nach&aacute;dzaj&uacute;cu sa na internetovej adrese http://ec.europa.eu/consumers/odr je&nbsp;možn&eacute; využiť pri rie&scaron;en&iacute; sporov medzi pred&aacute;vaj&uacute;cim a kupuj&uacute;cim z k&uacute;pnej zmluvy.</li>
            <li>Eur&oacute;pske spotrebiteľsk&eacute; centrum Slovensk&aacute; republika, so s&iacute;dlom Mlynsk&eacute; nivy 44/a, 827 15 Bratislave, internetov&aacute; adresa: <a href="http://esc-sr.sk/">http://esc-sr.sk/</a> je&nbsp;kontaktn&yacute;m miestom podľa Nariadenia Eur&oacute;pskeho parlamentu a Rady (EU) č.&nbsp;524/2013 z 21. m&aacute;ja 2013 o rie&scaron;en&iacute; spotrebiteľsk&yacute;ch sporov on-line a&nbsp;o&nbsp;zmene nariadenia (ES) č. 2006/2004 a smernice 2009/22/ES (nariadenie o rie&scaron;en&iacute; spotrebiteľsk&yacute;ch sporov on-line).</li>
            <li>Pred&aacute;vaj&uacute;ci je opr&aacute;vnen&yacute; k predaji tovaru na z&aacute;klade živnostensk&eacute;ho opr&aacute;vnenia. Živnostensk&uacute; kontrolu vykon&aacute;va v r&aacute;mci svojej p&ocirc;sobnosti pr&iacute;slu&scaron;n&yacute; Okresn&yacute; &uacute;rad odbor živnostensk&eacute;ho podnikania. Slovensk&aacute; obchodn&iacute; in&scaron;pekcia vykon&aacute;va vo vymedzenom rozsahu okrem in&eacute;ho dozor nad dodržiavan&iacute;m z&aacute;kona č.&nbsp;250/2007 Z.z. o ochrane spotrebiteľa v&nbsp;znen&iacute; nehor&scaron;&iacute;ch predpisov .</li>
        </ol>
        <p>&nbsp;</p>
        <p><strong>X.</strong></p>
        <p><strong>Z&aacute;verečn&eacute; ustanovenia</strong></p>
        <ol>
            <li>V&scaron;etky dojednania medzi pred&aacute;vaj&uacute;cim a kupuj&uacute;cim sa spravuj&uacute; pr&aacute;vnym poriadkom Slovenskej republiky. Ak vzťah založen&yacute; k&uacute;pnou zmluvou obsahuje medzin&aacute;rodn&yacute; prvok, strany sa dohodli, že vzťah sa riadi pr&aacute;vom Slovenskej republiky. T&yacute;mto nie s&uacute; dotknut&eacute; pr&aacute;va spotrebiteľa vypl&yacute;vaj&uacute;ce z v&scaron;eobecne z&aacute;v&auml;zn&yacute;ch pr&aacute;vnych predpisov.</li>
            <li>Pred&aacute;vaj&uacute;ci nie je vo vzťahu ku kupuj&uacute;cemu viazan&yacute; žiadnymi k&oacute;dexmi spr&aacute;vania v&nbsp;zmysle ustanoven&iacute; z&aacute;kona č. 250/2007 Z.z. o ochrane spotrebiteľa v&nbsp;znen&iacute; nehor&scaron;&iacute;ch predpisov.</li>
            <li>V&scaron;etky pr&aacute;va k&nbsp;webov&yacute;m str&aacute;nkam pred&aacute;vaj&uacute;ceho, najm&auml; autorsk&eacute; pr&aacute;va k obsahu, vr&aacute;tane rozvrhnutia str&aacute;nky, fotiek, filmov, grafiky, ochrann&yacute;ch zn&aacute;mok, loga a ďal&scaron;ieho obsahu a prvkov, prin&aacute;lež&iacute; pred&aacute;vaj&uacute;cemu. Je zak&aacute;zan&eacute; kop&iacute;rovať, upravovať alebo inak použ&iacute;vať webov&eacute; str&aacute;nky alebo ich časť bez s&uacute;hlasu pred&aacute;vaj&uacute;ceho.</li>
            <li>Pred&aacute;vaj&uacute;ci nenesie zodpovednosť za chyby vzniknut&eacute; v d&ocirc;sledku z&aacute;sahu tret&iacute;ch os&ocirc;b do internetov&eacute;ho obchodu alebo v d&ocirc;sledku jeho použitia v rozpore s jeho určen&iacute;m. Kupuj&uacute;ci nesmie pri využ&iacute;van&iacute; internetov&eacute;ho obchodu použ&iacute;vať postupy, ktor&eacute; by mohli mať negat&iacute;vny vplyv na jeho prev&aacute;dzku a nesmie vykon&aacute;vať žiadnu činnosť, ktor&aacute; by mohla jemu alebo tret&iacute;m osob&aacute;m umožniť neopr&aacute;vnene zasahovať či neopr&aacute;vnene už&iacute;vať programov&eacute; vybavenie alebo ďal&scaron;ie s&uacute;časti tvoriace internetov&yacute; obchod a už&iacute;vať internetov&yacute; obchod alebo jeho časti či softwarov&eacute; vybavenie tak&yacute;m sp&ocirc;sobom, ktor&yacute; by bol v rozpore s jeho určen&iacute;m či &uacute;čelom.</li>
            <li>K&uacute;pna zmluva vr&aacute;tane obchodn&yacute;ch podmienok je archivovan&aacute; pred&aacute;vaj&uacute;cim v&nbsp;elektronickej podobe a nie je verejne pr&iacute;stupn&aacute;.</li>
            <li>Znenie obchodn&yacute;ch podmienok m&ocirc;že pred&aacute;vaj&uacute;ci meniť či dopĺňať. T&yacute;mto ustanoven&iacute;m nie s&uacute; dotknut&eacute; pr&aacute;va a povinnosti vzniknut&eacute; po dobu &uacute;činnosti predch&aacute;dzaj&uacute;ceho znenia obchodn&yacute;ch podmienok.</li>
            <li>Pr&iacute;lohou obchodn&yacute;ch podmienok je vzorov&yacute; formul&aacute;r pre odst&uacute;penie od zmluvy.</li>
        </ol>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>Tieto obchodn&eacute; podmienky nadob&uacute;daj&uacute; &uacute;činnosť dňom ......</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>

@endsection
