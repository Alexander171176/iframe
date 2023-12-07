<input class="open" id="top-box" type="checkbox" hidden>
<label class="btn" for="top-box">RGB</label>

<?php include 'parts/right-panel.php'; ?>

<div id="particles-js" class="top-panel">

    <div class="option-color">
        <form class="option-form" name=f>
        <span>HEX:&nbsp;#&nbsp;</span><input maxlength="6" size="3" id="out" name="out" onkeyup="var nosymbol=/['А-я','g-z','G-Z']/; if(nosymbol.test(this.value)) alert('Разрешён ввод латинских символов A-F и чисел 0-9'); if(nosymbol.test(this.value)) this.value ='';" oninput="changeColor();" />&nbsp;&nbsp;
        <span>RGB:&nbsp;</span><input maxlength="12" size="3" name="out2" />
        <input type="range" class="input-range" id="inputr" name="inputr" min="0" max="99" value="99" oninput="resizeInput()" ></input>
    </form>
    </div>

    <img src="/img/rgb.png" name="rgb" width="1280px" height="1280px" class="rgb" alt="rgb-map" usemap="#rgb-map" />

    <map name="rgb-map">

        <area alt="" title="ff3366" id="" shape="poly" coords="537,17,560,24,573,44,569,66,552,82,527,83,507,68,503,45,515,25,537,17" onmousedown="bh('ff3366'); return true" onclick="br('255,51,102'); return true" />
        <area alt="" title="ff3300" id="" shape="poly" coords="743,17,720,24,709,45,714,68,732,81,757,81,775,67,777,43,766,24,743,17" onmousedown="bh('ff3300'); return true" onclick="br('255,51,0'); return true" />
        <area alt="" title="ff0066" id="" shape="poly" coords="501,92,486,137,528,164,569,133,552,90,501,92" onmousedown="bh('ff0066'); return true" onclick="br('255,0,102'); return true" />
        <area alt="" title="ff0033" id="" shape="poly" coords="593,59,552,89,569,133,621,131,636,87,593,59" onmousedown="bh('ff0033'); return true" onclick="br('255,0,51'); return true" />
        <area alt="" title="ff6600" id="" shape="poly" coords="687,58,643,82,657,129,708,133,727,90,687,58" onmousedown="bh('ff6600'); return true" onclick="br('255,102,0'); return true" />
        <area alt="" title="ff6633" id="" shape="poly" coords="792,139,779,94,728,90,709,133,749,164,792,139" onmousedown="bh('ff6633'); return true" onclick="br('255,102,51'); return true" />
        <area alt="" title="ff6699" id="" shape="poly" coords="380,123,348,141,349,176,380,194,413,176,412,141,380,123" onmousedown="bh('ff6699'); return true" onclick="br('255,102,153'); return true" />
        <area alt="" title="ff3399" id="" shape="poly" coords="477,141,477,176,444,194,414,177,413,140,445,124,477,142,477,141" onmousedown="bh('ff3399'); return true" onclick="br('255,51,153'); return true" />
        <area alt="" title="ff0099" id="" shape="poly" coords="413,176,380,194,380,230,412,247,444,229,445,194,413,176" onmousedown="bh('ff0099'); return true" onclick="br('255,0,153'); return true" />
        <area alt="" title="cc0066" id="" shape="poly" coords="486,181,465,189,453,208,457,231,476,245,499,245,518,230,521,208,508,188,486,181" onmousedown="bh('cc0066'); return true" onclick="br('204,0,102'); return true" />
        <area alt="" title="cc0033" id="" shape="circle" coords="573,191,37" onmousedown="bh('cc0033'); return true" onclick="br('204,0,51'); return true" />
        <area title="f5f5f5" id="" shape="poly" coords="640,115,626,136,600,141,617,160,614,186,639,176,663,186,661,161,680,142,653,137,640,115" onmousedown="bh('f5f5f5'); return true" onclick="br('245,245,245'); return true" />
        <area alt="" title="cc3300" id="" shape="circle" coords="705,191,38" onmousedown="bh('cc3300'); return true" onclick="br('204,51,0'); return true" />
        <area alt="" title="ff9900" id="" shape="poly" coords="838,162,806,143,773,160,774,197,805,215,838,196,838,162" onmousedown="bh('ff9900'); return true" onclick="br('255,153,0'); return true" />
        <area alt="" title="ff9966" id="" shape="poly" coords="838,90,806,107,806,144,839,161,870,143,871,108,838,90" onmousedown="bh('ff9966'); return true" onclick="br('255,153,102'); return true" />
        <area alt="" title="ff9933" id="" shape="poly" coords="903,197,872,215,839,197,840,161,871,144,903,162,903,197" onmousedown="bh('ff9933'); return true" onclick="br('255,153,51'); return true" />
        <area alt="" title="ffcc66" id="" shape="poly" coords="947,149,915,168,916,204,948,222,980,203,980,167,947,149" onmousedown="bh('ffcc66'); return true" onclick="br('255,204,102'); return true" />
        <area alt="" title="ffcc33" id="" shape="poly" coords="1012,257,1013,222,981,204,948,223,948,257,981,275,1012,257" onmousedown="bh('ffcc33'); return true"onclick="br('255,204,51'); return true" />
        <area alt="" title="ffcc00" id="" shape="poly" coords="916,204,948,222,947,256,915,274,883,257,883,221,916,204" onmousedown="bh('ffcc00'); return true" onclick="br('255,204,0'); return true" />
        <area alt="" title="330000" id="" shape="poly" coords="838,210,804,228,805,263,838,281,870,265,870,228,838,210" onmousedown="bh('330000'); return true" onclick="br('51,0,0'); return true" />
        <area alt="" title="663300" id="" shape="poly" coords="902,282,872,265,838,282,838,317,870,335,903,317,902,282" onmousedown="bh('663300'); return true" onclick="br('102,51,0'); return true" />
        <area alt="" title="663333" id="" shape="poly" coords="772,281,805,264,838,283,837,316,806,334,773,316,772,281" onmousedown="bh('663333'); return true" onclick="br('102,51,51'); return true" />
        <area alt="" title="660000" id="" shape="poly" coords="735,225,769,243,769,279,736,297,703,279,702,242,735,225" onmousedown="bh('660000'); return true" onclick="br('102,0,0'); return true" />
        <area alt="" title="993333" id="" shape="poly" coords="703,350,736,332,734,296,703,280,671,296,671,332,703,350" onmousedown="bh('993333'); return true" onclick="br('153,51,51'); return true" />
        <area alt="" title="cc6666" id="" shape="poly" coords="670,403,638,385,638,350,670,332,703,351,703,385,670,403" onmousedown="bh('cc6666'); return true" onclick="br('204,102,102'); return true" />
        <area alt="" title="ff9999" id="" shape="poly" coords="638,385,670,404,671,438,638,457,607,439,607,403,638,385" onmousedown="bh('ff9999'); return true" onclick="br('255,153,153'); return true" />
        <area alt="" title="ff6666" id="" shape="poly" coords="638,349,638,384,606,404,573,385,574,350,606,332,638,349" onmousedown="bh('ff6666'); return true" onclick="br('255,102,102'); return true" />
        <area alt="" title="cc3333" id="" shape="poly" coords="638,279,606,297,606,332,637,350,671,332,670,297,638,279" onmousedown="bh('cc3333'); return true" onclick="br('204,51,51'); return true" />
        <area alt="" title="990000" id="" shape="poly" coords="671,225,638,244,638,278,671,297,704,279,703,243,671,225" onmousedown="bh('990000'); return true" onclick="br('153,0,0'); return true" />
        <area alt="" title="cc0000" id="" shape="poly" coords="606,225,638,244,639,279,606,296,574,279,574,243,606,225" onmousedown="bh('cc0000'); return true" onclick="br('204,0,0'); return true" />
        <area alt="" title="ff3333" id="" shape="poly" coords="574,350,605,332,605,296,573,279,541,296,542,332,574,350" onmousedown="bh('ff3333'); return true" onclick="br('255,51,51'); return true" />
        <area alt="" title="ff0000" id="" shape="poly" coords="541,225,573,243,574,278,541,296,508,278,508,243,541,225" onmousedown="bh('ff0000'); return true" onclick="br('255,0,0'); return true" />
        <area alt="" title="990033" id="" shape="poly" coords="500,298,527,344,480,370,453,325,500,298" onmousedown="bh('990033'); return true" onclick="br('153,0,51'); return true" />
        <area alt="" title="993399" id="" shape="poly" coords="531,352,558,395,512,421,485,377,531,352" onmousedown="bh('993399'); return true" onclick="br('153,51,153'); return true" />
        <area alt="" title="cc6699" id="" shape="poly" coords="563,404,590,448,544,473,518,429,563,404" onmousedown="bh('cc6699'); return true" onclick="br('204,102,153'); return true" />
        <area alt="" title="cc99cc" id="" shape="poly" coords="509,434,535,478,489,503,463,459,509,434" onmousedown="bh('cc99cc'); return true" onclick="br('204,153,204'); return true" />
        <area alt="" title="996699" id="" shape="poly" coords="477,382,503,426,458,451,431,407,477,382" onmousedown="bh('996699'); return true" onclick="br('153,102,153'); return true" />
        <area alt="" title="663366" id="" shape="poly" coords="412,298,444,315,444,350,412,369,380,350,380,315,412,298" onmousedown="bh('663366'); return true" onclick="br('102,51,102'); return true" />
        <area alt="" title="660033" id="" shape="poly" coords="445,244,413,262,413,298,444,315,477,298,477,261,445,244" onmousedown="bh('660033'); return true" onclick="br('102,0,51'); return true" />
        <area alt="" title="330033" id="" shape="poly" coords="379,244,412,262,412,298,380,316,347,298,347,262,379,244" onmousedown="bh('330033'); return true" onclick="br('51,0,51'); return true" />
        <area alt="" title="ff00cc" id="" shape="poly" coords="303,237,335,254,336,289,303,308,270,289,270,255,303,237" onmousedown="bh('ff00cc'); return true" onclick="br('255,0,204'); return true" />
        <area alt="" title="ff33cc" id="" shape="poly" coords="368,236,335,253,303,235,303,200,335,183,367,201,368,236" onmousedown="bh('ff33cc'); return true" onclick="br('255,51,204'); return true" />
        <area alt="" title="ff66cc" id="" shape="poly" coords="271,183,302,201,302,236,271,254,237,237,237,200,270,182,271,183" onmousedown="bh('ff66cc'); return true" onclick="br('255,102,204'); return true" />
        <area alt="" title="cc3399" id="" shape="poly" coords="211,251,260,264,262,311,212,330,182,293,211,251" onmousedown="bh('cc3399'); return true" onclick="br('204,51,153'); return true" />
        <area alt="" title="cc3366" id="" shape="poly" coords="143,231,168,229,186,244,191,266,179,286,156,295,133,288,122,268,125,246,143,231" onmousedown="bh('cc3366'); return true" onclick="br('204,51,102'); return true" />
        <area alt="" title="cc0099" id="" shape="poly" coords="181,293,213,331,183,371,134,359,133,310,181,293" onmousedown="bh('cc0099'); return true" onclick="br('204,0,153'); return true" />
        <area alt="" title="e6e6fa" id="" shape="poly" coords="161,378,174,399,165,424,190,419,214,435,217,409,238,394,215,383,206,358,187,377,161,378" onmousedown="bh('e6e6fa'); return true" onclick="br('230,230,255'); return true" />
        <area alt="" title="990066" id="" shape="circle" coords="263,362,37" onmousedown="bh('990066'); return true" onclick="br('153,0,102'); return true" />
        <area alt="" title="660066" id="" shape="poly" coords="342,336,375,353,374,389,342,406,310,389,310,354,342,336" onmousedown="bh('660066'); return true" onclick="br('102,0,102'); return true" />
        <area alt="" title="993399" id="" shape="poly" coords="342,443,342,407,375,390,406,407,407,443,375,460,342,443" onmousedown="bh('993399'); return true" onclick="br('153,51,153'); return true" />
        <area alt="" title="cc66cc" id="" shape="poly" coords="374,497,375,462,408,443,440,461,440,497,406,514,374,497" onmousedown="bh('cc66cc'); return true" onclick="br('204,102,204'); return true" />
        <area alt="" title="ff99ff" id="" shape="poly" coords="471,515,439,496,407,513,407,550,439,567,472,550,471,515" onmousedown="bh('ff99ff'); return true" onclick="br('255,153,255'); return true" />
        <area alt="" title="ff66ff" id="" shape="poly" coords="374,567,406,549,407,515,375,496,342,514,342,550,374,567" onmousedown="bh('ff66ff'); return true" onclick="br('255,102,255'); return true" />
        <area alt="" title="cc33cc" id="" shape="poly" coords="310,459,342,442,374,461,374,496,342,513,310,496,310,459" onmousedown="bh('cc33cc'); return true" onclick="br('204,51,204'); return true" />
        <area alt="" title="990099" id="" shape="poly" coords="310,390,342,406,342,443,310,460,278,443,277,407,310,390" onmousedown="bh('990099'); return true" onclick="br('153,0,153'); return true" />
        <area alt="" title="cc00cc" id="" shape="poly" coords="246,461,277,443,310,461,310,496,277,514,246,497,246,461" onmousedown="bh('cc00cc'); return true" onclick="br('204,0,204'); return true" />
        <area alt="" title="ff33ff" id="" shape="poly" coords="342,514,310,495,277,513,278,550,310,567,343,550,342,514" onmousedown="bh('ff33ff'); return true" onclick="br('255,51,255'); return true" />
        <area alt="" title="ff00ff" id="" shape="poly" coords="213,514,245,496,278,514,277,549,245,567,212,550,213,514" onmousedown="bh('ff00ff'); return true" onclick="br('255,0,255'); return true" />
        <area alt="" title="660099" id="" shape="circle" coords="198,471,37" onmousedown="bh('660099'); return true" onclick="br('102,0,153'); return true" />
        <area alt="" title="9900cc" id="" shape="poly" coords="134,366,168,401,143,445,95,437,88,388,134,366" onmousedown="bh('9900cc'); return true" onclick="br('153,0,204'); return true" />
        <area alt="" title="6633cc" id="" shape="poly" coords="65,399,85,414,89,437,78,457,55,465,32,458,20,437,23,415,41,400,65,399" onmousedown="bh('6633cc'); return true" onclick="br('102,51,204'); return true" />
        <area alt="" title="9933cc" id="" shape="poly" coords="71,481,94,438,144,446,150,496,106,517,71,481" onmousedown="bh('9933cc'); return true" onclick="br('153,51,204'); return true" />
        <area alt="" title="6600cc" id="" shape="poly" coords="162,522,144,537,141,560,153,580,176,587,199,579,210,560,205,536,186,522,162,522" onmousedown="bh('6600cc'); return true" onclick="br('102,0,204'); return true" />
        <area alt="" title="cc33ff" id="" shape="poly" coords="104,525,72,543,72,578,104,595,136,577,136,542,104,525" onmousedown="bh('cc33ff'); return true" onclick="br('204,51,255'); return true" />
        <area alt="" title="cc66ff" id="" shape="poly" coords="39,596,71,579,104,597,104,632,71,651,39,632,39,596" onmousedown="bh('cc66ff'); return true" onclick="br('204,102,255'); return true" />
        <area alt="" title="cc00ff" id="" shape="poly" coords="168,596,168,632,135,650,104,631,104,596,136,579,168,596" onmousedown="bh('cc00ff'); return true" onclick="br('204,0,255'); return true" />
        <area alt="" title="9933ff" id="" shape="poly" coords="104,645,72,663,72,699,104,716,137,698,137,663,104,645" onmousedown="bh('9933ff'); return true" onclick="br('153,51,255'); return true" />
        <area alt="" title="9966ff" id="" shape="poly" coords="39,752,39,717,71,699,104,717,104,752,71,770,39,752" onmousedown="bh('9966ff'); return true" onclick="br('153,102,255'); return true" />
        <area alt="" title="9900ff" id="" shape="poly" coords="137,769,136,770,105,752,105,716,136,699,169,717,169,752,137,769" onmousedown="bh('9900ff'); return true" onclick="br('153,0,255'); return true" />
        <area alt="" title="000033" id="" shape="poly" coords="148,657,149,693,182,711,214,693,214,657,182,639,148,657" onmousedown="bh('000033'); return true" onclick="br('0,0,51'); return true" />
        <area alt="" title="333366" id="" shape="poly" coords="246,640,278,658,279,692,246,710,214,692,214,656,246,640" onmousedown="bh('333366'); return true" onclick="br('51,51,102'); return true" />
        <area alt="" title="330066" id="" shape="poly" coords="181,603,182,638,214,655,246,638,246,602,215,585,181,603" onmousedown="bh('330066'); return true" onclick="br('51,0,102'); return true" />
        <area alt="" title="330099" id="" shape="rect" coords="258,584,313,638" onmousedown="bh('330099'); return true" onclick="br('51,0,153'); return true" />
        <area alt="" title="663399" id="" shape="rect" coords="322,584,377,638" onmousedown="bh('663399'); return true" onclick="br('102,51,153'); return true" />
        <area alt="" title="9966cc" id="" shape="rect" coords="384,584,441,638" onmousedown="bh('9966cc'); return true" onclick="br('153,102,204'); return true" />
        <area alt="" title="9999cc" id="" shape="rect" coords="384,644,441,697" onmousedown="bh('9999cc'); return true" onclick="br('153,153,204'); return true" />
        <area alt="" title="666699" id="" shape="rect" coords="322,644,377,697" onmousedown="bh('666699'); return true" onclick="br('102,102,153'); return true" />
        <area alt="" title="9999ff" id="" shape="poly" coords="440,716,407,734,408,770,440,788,473,770,473,734,440,716" onmousedown="bh('9999ff'); return true" onclick="br('153,153,255'); return true" />
        <area alt="" title="6666cc" id="" shape="poly" coords="375,716,343,734,344,770,376,787,407,769,407,734,375,716" onmousedown="bh('6666cc'); return true" onclick="br('102,102,204'); return true" />
        <area alt="" title="6666ff" id="" shape="poly" coords="440,787,407,770,375,788,376,823,407,840,440,823,440,787" onmousedown="bh('6666ff'); return true" onclick="br('102,102,255'); return true" />
        <area alt="" title="333399" id="" shape="poly" coords="310,716,342,735,342,769,311,787,278,769,278,734,310,716" onmousedown="bh('333399'); return true" onclick="br('51,51,153'); return true" />
        <area alt="" title="3333cc" id="" shape="poly" coords="343,769,374,788,374,823,343,840,310,823,311,786,343,769" onmousedown="bh('3333cc'); return true" onclick="br('51,51,204'); return true" />
        <area alt="" title="3333ff" id="" shape="poly" coords="408,877,408,842,375,823,343,841,344,877,375,895,408,877" onmousedown="bh('3333ff'); return true" onclick="br('51,51,255'); return true" />
        <area alt="" title="0000ff" id="" shape="poly" coords="343,877,374,894,376,929,343,948,311,930,311,894,343,877" onmousedown="bh('0000ff'); return true" onclick="br('0,0,255'); return true" />
        <area alt="" title="0000cc" id="" shape="poly" coords="311,823,343,841,343,877,311,895,278,877,279,841,311,823" onmousedown="bh('0000cc'); return true" onclick="br('0,0,204'); return true" />
        <area alt="" title="000099" id="" shape="poly" coords="278,769,310,787,311,822,278,840,246,823,246,787,278,769" onmousedown="bh('000099'); return true" onclick="br('0,0,153'); return true" />
        <area alt="" title="000066" id="" shape="poly" coords="245,715,278,734,279,769,247,787,213,769,213,733,245,715" onmousedown="bh('000066'); return true" onclick="br('0,0,102'); return true" />
        <area alt="" title="3300cc" id="" shape="circle" coords="199,812,35" onmousedown="bh('3300cc'); return true" onclick="br('51,0,204'); return true" />
        <area alt="" title="6600ff" id="" shape="poly" coords="109,765,152,789,143,838,94,844,72,800,109,765" onmousedown="bh('6600ff'); return true" onclick="br('102,0,255'); return true" />
        <area alt="" title="3300ff" id="" shape="poly" coords="52,815,29,824,18,844,23,867,41,881,66,881,84,866,87,843,76,823,52,815" onmousedown="bh('3300ff'); return true" onclick="br('51,0,255'); return true" />
        <area alt="" title="6633ff" id="" shape="poly" coords="166,882,144,839,94,845,86,893,130,917,166,882" onmousedown="bh('6633ff'); return true" onclick="br('102,51,255'); return true" />
        <area alt="" title="dcdcdc" id="" shape="poly" coords="166,857,173,882,159,904,187,905,205,925,214,901,239,889,218,874,215,848,192,864,166,857" onmousedown="bh('dcdcdc'); return true" onclick="br('220,220,220'); return true" />
        <area alt="" title="0033ff" id="" shape="poly" coords="185,911,137,922,134,969,181,990,214,953,185,911" onmousedown="bh('0033ff'); return true" onclick="br('0,51,255'); return true" />
        <area alt="" title="3366ff" id="" shape="poly" coords="185,1036,167,1051,142,1052,124,1037,119,1015,131,995,153,987,176,994,188,1013,185,1036" onmousedown="bh('3366ff'); return true" onclick="br('51,102,255'); return true" />
        <area alt="" title="0066ff" id="" shape="poly" coords="214,953,183,989,211,1031,260,1020,262,972,214,953" onmousedown="bh('0066ff'); return true" onclick="br('0,102,255'); return true" />
        <area alt="" title="0033cc" id="" shape="circle" coords="265,923,37" onmousedown="bh('0033cc'); return true" onclick="br('0,51,204'); return true" />
        <area alt="" title="0066cc" id="" shape="poly" coords="359,997,341,1012,316,1013,297,998,292,975,303,955,327,947,350,954,362,975,359,997" onmousedown="bh('0066cc'); return true" onclick="br('0,102,204'); return true" />
        <area alt="" title="3399ff" id="" shape="poly" coords="298,1007,266,1025,266,1061,298,1079,330,1061,331,1025,298,1007" onmousedown="bh('3399ff'); return true" onclick="br('51,153,255'); return true" />
        <area alt="" title="6699ff" id="" shape="poly" coords="299,1115,299,1080,331,1062,362,1079,363,1114,330,1133,299,1115" onmousedown="bh('6699ff'); return true" onclick="br('102,153,255'); return true" />
        <area alt="" title="0099ff" id="" shape="poly" coords="363,1008,331,1026,331,1061,362,1078,395,1061,395,1026,363,1008" onmousedown="bh('0099ff'); return true" onclick="br('0,153,255'); return true" />
        <area alt="" title="33ccff" id="" shape="poly" coords="408,1067,440,1086,440,1121,408,1139,375,1121,375,1085,408,1067" onmousedown="bh('33ccff'); return true" onclick="br('51,204,255'); return true" />
        <area alt="" title="66ccff" id="" shape="poly" coords="440,1121,408,1139,408,1174,440,1193,473,1175,472,1139,440,1121" onmousedown="bh('66ccff'); return true" onclick="br('102,204,255'); return true" />
        <area alt="" title="00ccff" id="" shape="poly" coords="472,1068,440,1085,440,1120,471,1140,504,1121,504,1086,472,1068" onmousedown="bh('00ccff'); return true" onclick="br('0,204,255'); return true" />
        <area alt="" title="003333" id="" shape="poly" coords="440,1000,409,1019,409,1054,441,1073,473,1055,472,1019,440,1000" onmousedown="bh('003333'); return true" onclick="br('0,51,51'); return true" />
        <area alt="" title="336666" id="" shape="poly" coords="473,947,441,964,441,1001,472,1018,506,1000,505,965,473,947" onmousedown="bh('336666'); return true" onclick="br('51,102,102'); return true" />
        <area alt="" title="003366" id="" shape="poly" coords="408,946,440,965,440,1001,409,1018,376,1000,376,964,408,946" onmousedown="bh('003366'); return true" onclick="br('0,51,102'); return true" />
        <area alt="" title="003399" id="" shape="poly" coords="424,882,472,908,444,954,397,927,424,882" onmousedown="bh('003399'); return true" onclick="br('0,51,153'); return true" />
        <area alt="" title="336699" id="" shape="poly" coords="456,830,503,856,476,900,430,874,456,830" onmousedown="bh('336699'); return true" onclick="br('51,102,153'); return true" />
        <area alt="" title="6699cc" id="" shape="poly" coords="488,778,535,804,508,848,461,822,488,778" onmousedown="bh('6699cc'); return true" onclick="br('102,153,204'); return true" />
        <area alt="" title="99cccc" id="" shape="poly" coords="543,808,589,834,563,878,516,852,543,808" onmousedown="bh('99cccc'); return true" onclick="br('153,204,204'); return true" />
        <area alt="" title="669999" id="" shape="poly" coords="511,861,558,886,531,931,485,905,511,861" onmousedown="bh('669999'); return true" onclick="br('102,153,153'); return true" />
        <area alt="" title="99ffff" id="" shape="poly" coords="641,826,673,844,672,879,640,897,608,880,608,843,641,826" onmousedown="bh('99ffff'); return true" onclick="br('153,255,255'); return true" />
        <area alt="" title="66ffff" id="" shape="poly" coords="672,878,640,896,640,932,672,950,705,932,705,896,672,878" onmousedown="bh('66ffff'); return true" onclick="br('102,255,255'); return true" />
        <area alt="" title="33ffff" id="" shape="poly" coords="704,932,737,950,737,986,705,1004,672,986,672,950,704,932" onmousedown="bh('33ffff'); return true" onclick="br('51,255,255'); return true" />
        <area alt="" title="00ffff" id="" shape="poly" coords="737,986,769,1004,769,1040,737,1057,705,1039,705,1003,737,986" onmousedown="bh('00ffff'); return true" onclick="br('0,255,255'); return true" />
        <area alt="" title="00cccc" id="" shape="poly" coords="672,985,705,1004,704,1039,673,1057,640,1039,640,1003,672,985" onmousedown="bh('00cccc'); return true" onclick="br('0,204,204'); return true" />
        <area alt="" title="33cccc" id="" shape="poly" coords="640,932,672,950,672,986,640,1004,607,986,607,950,640,932" onmousedown="bh('33cccc'); return true" onclick="br('51,204,204'); return true" />
        <area alt="" title="66cccc" id="" shape="poly" coords="607,878,640,897,640,932,607,949,575,932,575,896,607,878" onmousedown="bh('66cccc'); return true" onclick="br('102,204,204'); return true" />
        <area alt="" title="339999" id="" shape="poly" coords="575,933,607,951,608,986,575,1004,543,986,543,950,575,933" onmousedown="bh('339999'); return true" onclick="br('51,153,153'); return true" />
        <area alt="" title="009999" id="" shape="poly" coords="607,986,639,1004,640,1039,607,1057,575,1039,575,1003,607,986" onmousedown="bh('009999'); return true" onclick="br('0,153,153'); return true" />
        <area alt="" title="006666" id="" shape="poly" coords="542,986,574,1004,575,1040,543,1057,510,1039,510,1004,542,986" onmousedown="bh('006666'); return true" onclick="br('0,102,102'); return true" />
        <area alt="" title="006699" id="" shape="circle" coords="573,1091,36" onmousedown="bh('006699'); return true" onclick="br('0,102,153'); return true" />
        <area alt="" title="3399cc" id="" shape="poly" coords="530,1116,570,1149,551,1192,500,1188,486,1141,530,1116" onmousedown="bh('3399cc'); return true" onclick="br('51,153,204'); return true" />
        <area alt="" title="3366cc" id="" shape="poly" coords="546,1198,565,1212,570,1235,558,1254,536,1262,514,1255,501,1236,504,1213,522,1199,546,1198" onmousedown="bh('3366cc'); return true" onclick="br('51,102,204'); return true" />
        <area alt="" title="0099cc" id="" shape="poly" coords="570,1148,622,1152,635,1199,592,1223,552,1192,570,1148" onmousedown="bh('3366cc'); return true" onclick="br('51,102,204'); return true" />
        <area alt="" title="cdcdcd" id="" shape="poly" coords="614,1094,639,1106,664,1097,662,1122,679,1142,652,1147,638,1169,625,1146,599,1140,617,1121,614,1094" onmousedown="bh('cdcdcd'); return true" onclick="br('205,205,205'); return true" />
        <area alt="" title="00cc99" id="" shape="poly" coords="709,1147,726,1192,685,1223,642,1195,658,1150,709,1147" onmousedown="bh('00cc99'); return true" onclick="br('0,204,153'); return true" />
        <area alt="" title="33cc66" id="" shape="poly" coords="727,1198,752,1198,771,1213,775,1235,764,1255,741,1264,718,1256,706,1236,710,1214,727,1198" onmousedown="bh('33cc66'); return true" onclick="br('51,204,102'); return true" />
        <area alt="" title="33cc99" id="" shape="poly" coords="750,1116,794,1143,779,1190,727,1192,709,1147,750,1116" onmousedown="bh('33cc99'); return true" onclick="br('51,204,153'); return true" />
        <area alt="" title="009966" id="" shape="circle" coords="706,1092,36" onmousedown="bh('009966'); return true" onclick="br('0,153,102'); return true" />
        <area alt="" title="00cc66" id="" shape="poly" coords="779,1036,804,1037,822,1051,826,1074,815,1094,792,1103,770,1095,758,1076,762,1052,779,1036" onmousedown="bh('00cc66'); return true" onclick="br('0,204,102'); return true" />
        <area alt="" title="33ffcc" id="" shape="poly" coords="834,1089,865,1106,866,1142,834,1159,801,1141,801,1106,834,1089" onmousedown="bh('33ffcc'); return true" onclick="br('51,255,204'); return true" />
        <area alt="" title="66ffcc" id="" shape="poly" coords="898,1088,931,1106,931,1142,898,1159,866,1141,866,1105,898,1088" onmousedown="bh('66ffcc'); return true" onclick="br('102,255,204'); return true" />
        <area alt="" title="00ffcc" id="" shape="poly" coords="866,1035,898,1052,897,1088,865,1105,834,1088,834,1053,866,1035" onmousedown="bh('00ffcc'); return true" onclick="br('0,255,204'); return true" />
        <area alt="" title="33ff99" id="" shape="poly" coords="943,1028,975,1046,975,1081,943,1099,910,1081,910,1046,943,1028" onmousedown="bh('33ff99'); return true" onclick="br('51,255,153'); return true" />
        <area alt="" title="66ff99" id="" shape="poly" coords="1007,1028,1040,1045,1040,1081,1008,1099,976,1081,975,1045,1007,1028" onmousedown="bh('66ff99'); return true" onclick="br('102,255,153'); return true" />
        <area alt="" title="00ff99" id="" shape="poly" coords="975,975,1007,993,1007,1028,975,1046,943,1028,943,993,975,975" onmousedown="bh('00ff99'); return true" onclick="br('0,255,153'); return true" />
        <area alt="" title="003300" id="" shape="poly" coords="898,967,931,985,932,1020,898,1038,866,1020,865,984,898,967" onmousedown="bh('003300'); return true" onclick="br('0,51,0'); return true" />
        <area alt="" title="336633" id="" shape="poly" coords="866,913,899,931,898,966,866,985,834,967,834,931,866,913" onmousedown="bh('336633'); return true" onclick="br('51,102,51'); return true" />
        <area alt="" title="006633" id="" shape="poly" coords="834,967,865,985,866,1020,834,1038,801,1020,801,985,834,967" onmousedown="bh('006633'); return true" onclick="br('0,102,51'); return true" />
        <area alt="" title="009933" id="" shape="poly" coords="797,913,825,958,778,984,751,939,797,913" onmousedown="bh('009933'); return true" onclick="br('0,153,51'); return true" />
        <area alt="" title="339966" id="" shape="poly" coords="766,861,792,905,746,930,720,887,766,861" onmousedown="bh('339966'); return true" onclick="br('51,153,102'); return true" />
        <area alt="" title="66cc99" id="" shape="poly" coords="734,808,761,853,715,878,688,834,734,808" onmousedown="bh('66cc99'); return true" onclick="br('102,204,153'); return true" />
        <area alt="" title="99cc99" id="" shape="poly" coords="789,778,816,823,769,849,742,804,789,778" onmousedown="bh('99cc99'); return true" onclick="br('153,204,153'); return true" />
        <area alt="" title="669966" id="" shape="poly" coords="820,830,848,875,801,901,774,856,820,830" onmousedown="bh('669966'); return true" onclick="br('102,153,102'); return true" />
        <area alt="" title="99ff99" id="" shape="poly" coords="839,714,871,732,872,768,839,785,807,768,807,733,839,714" onmousedown="bh('99ff99'); return true" onclick="br('153,255,153'); return true" />
        <area alt="" title="66ff66" id="" shape="poly" coords="904,715,936,732,936,768,904,786,873,769,872,732,904,715" onmousedown="bh('66ff66'); return true" onclick="br('102,255,102'); return true" />
        <area alt="" title="33ff33" id="" shape="poly" coords="968,714,1001,732,1001,768,968,786,936,768,936,733,968,714" onmousedown="bh('33ff33'); return true" onclick="br('51,255,51'); return true" />
        <area alt="" title="00ff00" id="" shape="poly" coords="1033,715,1065,733,1066,768,1033,786,1000,768,1001,733,1033,715" onmousedown="bh('00ff00'); return true" onclick="br('0,255,0'); return true" />
        <area alt="" title="00cc00" id="" shape="poly" coords="1001,768,1033,786,1033,822,1001,839,968,821,969,785,1001,768" onmousedown="bh('00cc00'); return true" onclick="br('0,204,0'); return true" />
        <area alt="" title="33cc33" id="" shape="poly" coords="936,769,968,786,968,822,935,839,903,821,904,785,936,769" onmousedown="bh('33cc33'); return true" onclick="br('51,204,51'); return true" />
        <area alt="" title="66cc66" id="" shape="poly" coords="872,768,903,785,904,822,871,839,839,821,839,785,872,768" onmousedown="bh('66cc66'); return true" onclick="br('102,204,102'); return true" />
        <area alt="" title="339933" id="" shape="poly" coords="903,822,935,839,936,876,903,892,872,875,872,839,903,822" onmousedown="bh('339933'); return true" onclick="br('51,153,51'); return true" />
        <area alt="" title="009900" id="" shape="poly" coords="968,822,1000,840,1001,875,968,892,936,875,936,839,968,822" onmousedown="bh('009900'); return true" onclick="br('0,153,0'); return true" />
        <area alt="" title="006600" id="" shape="poly" coords="936,875,968,893,968,928,935,946,903,929,903,892,936,875" onmousedown="bh('006600'); return true" onclick="br('0,102,0'); return true" />
        <area alt="" title="00cc33" id="" shape="circle" coords="1015,921,35" onmousedown="bh('00cc33'); return true" onclick="br('0,204,51'); return true" />
        <area alt="" title="33ff66" id="" shape="poly" coords="1065,952,1096,990,1067,1031,1018,1017,1017,970,1065,952" onmousedown="bh('33ff66'); return true" onclick="br('51,255,102'); return true" />
        <area alt="" title="00ff33" id="" shape="poly" coords="1122,989,1145,996,1157,1016,1154,1039,1136,1053,1112,1054,1093,1039,1088,1017,1100,998,1122,989" onmousedown="bh('00ff33'); return true" onclick="br('0,255,51'); return true" />
        <area alt="" title="00ff66" id="" shape="poly" coords="1095,911,1144,924,1145,973,1096,990,1065,952,1095,911" onmousedown="bh('00ff66'); return true" onclick="br('0,255,102'); return true" />
        <area alt="" title="bebebe" id="" shape="poly" coords="1065,847,1086,863,1113,859,1104,882,1117,906,1091,905,1072,924,1063,899,1039,888,1062,873,1065,847" onmousedown="bh('bebebe'); return true" onclick="br('190,190,190'); return true" />
        <area alt="" title="33ff00" id="" shape="poly" coords="1134,837,1183,845,1190,893,1144,917,1110,880,1134,837" onmousedown="bh('33ff00'); return true" onclick="br('51,255,0'); return true" />
        <area alt="" title="66ff33" id="" shape="poly" coords="1225,819,1247,827,1259,847,1256,868,1238,884,1214,884,1196,870,1191,847,1203,827,1225,819" onmousedown="bh('66ff33'); return true" onclick="br('102,255,51'); return true" />
        <area alt="" title="66ff00" id="" shape="poly" coords="1173,765,1207,801,1184,844,1134,836,1128,786,1173,765" onmousedown="bh('66ff00'); return true" onclick="br('102,255,0'); return true" />
        <area alt="" title="33cc00" id="" shape="circle" coords="1082,811,36" onmousedown="bh('33cc00'); return true" onclick="br('51,204,0'); return true" />
        <area alt="" title="66cc00" id="" shape="poly" coords="1103,695,1125,702,1137,722,1134,744,1116,760,1092,760,1073,746,1068,724,1080,704,1103,695" onmousedown="bh('66cc00'); return true" onclick="br('102,204,0'); return true" />
        <area alt="" title="99ff33" id="" shape="poly" coords="1174,686,1206,704,1206,739,1174,757,1142,740,1142,703,1174,686" onmousedown="bh('99ff33'); return true" onclick="br('153,255,51'); return true" />
        <area alt="" title="99ff66" id="" shape="poly" coords="1207,632,1239,650,1239,685,1206,703,1174,686,1175,651,1207,632" onmousedown="bh('99ff66'); return true" onclick="br('153,255,102'); return true" />
        <area alt="" title="99ff00" id="" shape="poly" coords="1142,633,1174,651,1174,687,1142,704,1111,686,1110,650,1142,633" onmousedown="bh('99ff00'); return true" onclick="br('153,255,0'); return true" />
        <area alt="" title="ccff33" id="" shape="poly" coords="1174,566,1206,583,1207,619,1174,637,1142,619,1142,583,1174,566" onmousedown="bh('ccff33'); return true" onclick="br('204,255,51'); return true" />
        <area alt="" title="ccff66" id="" shape="poly" coords="1207,511,1239,529,1239,565,1207,583,1174,566,1174,530,1207,511" onmousedown="bh('ccff66'); return true" onclick="br('204,255,102'); return true" />
        <area alt="" title="ccff00" id="" shape="poly" coords="1142,512,1174,530,1174,566,1143,583,1110,564,1110,530,1142,512" onmousedown="bh('ccff00'); return true" onclick="br('204,255,0'); return true" />
        <area alt="" title="333300" id="" shape="poly" coords="1097,572,1129,590,1129,625,1097,642,1064,625,1064,589,1097,572" onmousedown="bh('333300'); return true" onclick="br('51,51,0'); return true" />
        <area alt="" title="666633" id="" shape="poly" coords="1032,572,1064,589,1064,626,1033,643,1001,625,1000,590,1032,572" onmousedown="bh('666633'); return true" onclick="br('102,102,51'); return true" />
        <area alt="" title="336600" id="" shape="poly" coords="1064,626,1096,643,1096,678,1064,696,1032,679,1033,643,1064,626" onmousedown="bh('336600'); return true" onclick="br('51,102,0'); return true" />
        <area alt="" title="339900" id="" shape="rect" coords="965,645,1020,698" onmousedown="bh('339900'); return true" onclick="br('51,153,0'); return true" />
        <area alt="" title="669933" id="" shape="rect" coords="901,645,956,698" onmousedown="bh('669933'); return true" onclick="br('102,153,51'); return true" />
        <area alt="" title="99cc66" id="" shape="rect" coords="838,645,893,698" onmousedown="bh('99cc66'); return true" onclick="br('153,204,102'); return true" />
        <area alt="" title="cccc99" id="" shape="rect" coords="838,585,893,638" onmousedown="bh('cccc99'); return true" onclick="br('204,204,153'); return true" />
        <area alt="" title="999966" id="" shape="rect" coords="901,585,956,638" onmousedown="bh('999966'); return true" onclick="br('153,153,102'); return true" />
        <area alt="" title="ffff99" id="" shape="poly" coords="839,495,871,513,870,548,837,566,806,548,806,513,839,495" onmousedown="bh('ffff99'); return true" onclick="br('255,255,153'); return true" />
        <area alt="" title="ffff66" id="" shape="poly" coords="870,441,902,459,903,495,871,512,838,494,838,459,870,441" onmousedown="bh('ffff66'); return true" onclick="br('255,255,102'); return true" />
        <area alt="" title="ffff33" id="" shape="poly" coords="903,388,935,406,935,441,903,459,871,441,871,406,903,388" onmousedown="bh('ffff33'); return true" onclick="br('255,255,51'); return true" />
        <area alt="" title="ffff00" id="" shape="poly" coords="935,334,967,352,967,387,935,405,904,388,903,352,935,334" onmousedown="bh('ffff00'); return true" onclick="br('255,255,0'); return true" />
        <area alt="" title="cccc00" id="" shape="poly" coords="967,388,999,406,1000,440,968,459,936,441,936,406,967,388" onmousedown="bh('cccc00'); return true" onclick="br('204,204,0'); return true" />
        <area alt="" title="cccc33" id="" shape="poly" coords="935,441,967,460,967,495,935,513,903,495,903,460,935,441" onmousedown="bh('cccc33'); return true" onclick="br('204,204,51'); return true" />
        <area alt="" title="cccc66" id="" shape="poly" coords="903,495,935,512,935,549,903,566,870,548,871,512,903,495" onmousedown="bh('cccc66'); return true" onclick="br('204,204,102'); return true" />
        <area alt="" title="999933" id="" shape="poly" coords="968,495,1000,513,1000,548,967,566,935,548,935,513,968,495" onmousedown="bh('999933'); return true" onclick="br('153,153,51'); return true" />
        <area alt="" title="999900" id="" shape="poly" coords="1000,441,1032,459,1032,495,1001,513,968,494,968,460,1000,441" onmousedown="bh('999900'); return true" onclick="br('153,153,0'); return true" />
        <area alt="" title="666600" id="" shape="poly" coords="1032,495,1064,512,1064,548,1032,566,1000,548,1000,513,1032,495" onmousedown="bh('666600'); return true" onclick="br('102,102,0'); return true" />
        <area alt="" title="669900" id="" shape="circle" coords="1080,471,36" onmousedown="bh('669900'); return true" onclick="br('102,153,0'); return true" />
        <area alt="" title="99cc33" id="" shape="poly" coords="1184,437,1206,482,1170,516,1126,493,1135,444,1184,437" onmousedown="bh('99cc33'); return true" onclick="br('153,204,51'); return true" />
        <area alt="" title="66cc33" id="" shape="poly" coords="1215,402,1240,402,1258,416,1263,439,1252,458,1229,466,1207,459,1195,439,1198,417,1215,402" onmousedown="bh('66cc33'); return true" onclick="br('102,204,51'); return true" />
        <area alt="" title="99cc00" id="" shape="poly" coords="1148,364,1192,389,1184,437,1135,444,1113,399,1148,364" onmousedown="bh('99cc00'); return true" onclick="br('153,204,0'); return true" />
        <area alt="" title="696969" id="" shape="poly" coords="1073,357,1091,378,1118,378,1104,400,1112,424,1086,419,1063,433,1061,408,1040,393,1065,382,1073,357" onmousedown="bh('696969'); return true" onclick="br('105,105,105'); return true" />
        <area alt="" title="cc9900" id="" shape="poly" coords="1095,294,1144,312,1141,360,1092,371,1064,330,1095,294" onmousedown="bh('cc9900'); return true" onclick="br('204,153,0'); return true" />
        <area alt="" title="cc6633" id="" shape="poly" coords="1136,227,1154,242,1158,265,1148,284,1125,293,1102,285,1090,265,1094,244,1111,229,1136,227" onmousedown="bh('cc6633'); return true" onclick="br('204,102,51'); return true" />
        <area alt="" title="cc9933" id="" shape="poly" coords="1068,252,1095,293,1064,329,1016,309,1019,262,1068,252" onmousedown="bh('cc9933'); return true" onclick="br('204,153,51'); return true" />
        <area alt="" title="996600" id="" shape="circle" coords="1014,361,36" onmousedown="bh('996600'); return true" onclick="br('153,102,0'); return true" />
        <area alt="" title="cc6600" id="" shape="poly" coords="937,270,962,270,980,284,985,306,973,326,951,334,929,327,916,307,920,285,937,270" onmousedown="bh('cc6600'); return true" onclick="br('204,102,0'); return true" />
        <area alt="" title="993300" id="" shape="poly" coords="833,329,880,355,853,399,806,374,833,329" onmousedown="bh('993300'); return true" onclick="br('153,51,0'); return true" />
        <area alt="" title="996666" id="" shape="poly" coords="747,351,794,377,767,422,720,396,747,351" onmousedown="bh('996666'); return true" onclick="br('153,102,102'); return true" />
        <area alt="" title="cc9999" id="" shape="poly" coords="715,404,762,430,735,474,688,449,715,404" onmousedown="bh('cc9999'); return true" onclick="br('204,153,153'); return true" />
        <area alt="" title="996633" id="" shape="poly" coords="801,381,848,407,822,452,775,426,801,381" onmousedown="bh('996633'); return true" onclick="br('153,102,51'); return true" />
        <area alt="" title="cc9966" id="" shape="poly" coords="770,434,817,460,790,505,743,478,770,434" onmousedown="bh('cc9966'); return true" onclick="br('204,153,102'); return true" />
        <area alt="" title="ffcc99" id="" shape="circle" coords="714,517,36" onmousedown="bh('ffcc99'); return true" onclick="br('255,204,153'); return true" />
        <area alt="" title="ffcccc" id="" shape="poly" coords="637,463,651,486,677,492,659,511,661,537,637,526,612,536,615,510,597,490,624,485,637,463" onmousedown="bh('ffcccc'); return true" onclick="br('255,204,204'); return true" />
        <area alt="" title="ff99cc" id="" shape="circle" coords="564,517,36" onmousedown="bh('ff99cc'); return true" onclick="br('255,153,204'); return true" />
        <area alt="" title="ffccff" id="" shape="poly" coords="522,534,531,560,555,570,533,585,529,611,508,596,482,600,490,576,478,554,504,553,522,534" onmousedown="bh('ffccff'); return true" onclick="br('255,204,255'); return true" />
        <area alt="" title="cc99ff" id="" shape="circle" coords="489,642,36" onmousedown="bh('cc99ff'); return true" onclick="br('204,153,255'); return true" />
        <area alt="" title="ccccff" id="" shape="poly" coords="533,675,536,701,557,717,533,727,523,751,505,732,479,731,492,709,485,684,510,690,533,675" onmousedown="bh('ccccff'); return true" onclick="br('204,204,255'); return true" />
        <area alt="" title="99ccff" id="" shape="circle" coords="563,767,37" onmousedown="bh('99ccff'); return true" onclick="br('153,204,255'); return true" />
        <area alt="" title="ccffff" id="" shape="poly" coords="616,745,642,756,667,746,664,772,681,792,654,796,641,819,627,797,601,790,619,771,616,745" onmousedown="bh('ccffff'); return true" onclick="br('204,255,255'); return true" />
        <area alt="" title="99ffcc" id="" shape="circle" coords="715,766,38" onmousedown="bh('99ffcc'); return true" onclick="br('153,255,204'); return true" />
        <area alt="" title="ccffcc" id="" shape="poly" coords="748,671,770,687,797,682,788,706,801,729,774,728,755,747,747,722,723,711,745,697,748,671" onmousedown="bh('ccffcc'); return true" onclick="br('204,255,204'); return true" />
        <area alt="" title="ccff99" id="" shape="circle" coords="791,641,37" onmousedown="bh('ccff99'); return true" onclick="br('204,255,153'); return true" />
        <area alt="" title="ffffcc" id="" shape="poly" coords="754,530,773,551,799,552,785,573,793,597,767,592,745,607,743,581,721,566,745,555,754,530" onmousedown="bh('ffffcc'); return true" onclick="br('255,255,204'); return true" />
        <area alt="" title="ffffff" id="" shape="poly" coords="677,579,713,580,732,611,714,641,675,641,658,611,677,579" onmousedown="bh('ffffff'); return true" onclick="br('255,255,255'); return true" />
        <area alt="" title="cccccc" id="" shape="poly" coords="620,549,658,549,676,579,658,610,621,611,602,579,620,549" onmousedown="bh('cccccc'); return true" onclick="br('204,204,204'); return true" />
        <area alt="" title="999999" id="" shape="poly" coords="565,580,602,580,620,610,602,641,565,641,546,611,565,580" onmousedown="bh('999999'); return true" onclick="br('153,153,153'); return true" />
        <area alt="" title="666666" id="" shape="poly" coords="564,641,602,641,620,671,602,702,565,702,546,671,564,641" onmousedown="bh('666666'); return true" onclick="br('102,102,102'); return true" />
        <area alt="" title="333333" id="" shape="poly" coords="620,672,657,672,676,703,658,733,620,733,602,702,620,672" onmousedown="bh('333333'); return true" onclick="br('51,51,51'); return true" />
        <area alt="" title="000000" id="" shape="poly" coords="675,641,714,641,732,672,713,703,676,703,657,672,675,641" onmousedown="bh('000000'); return true" onclick="br('0,0,0'); return true" />
        <area alt="" title="" id="" shape="poly" coords="621,611,658,611,675,641,657,672,620,672,602,641,621,611">

    </map>

</div>
