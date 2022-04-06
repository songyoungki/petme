<?php
print_r($_POST);

//val
$s = isset($_POST['sel_icon']) && !empty($_POST['sel_icon']) ? $_POST['sel_icon'] : "";
if($s == "초롱이")
{
    $a = 1;
}
else if($s == "멍멍이")
{
    $a = 2;
}

$s1_2_1 = isset($_POST['sel1_icon2_1']) && !empty($_POST['sel1_icon2_1']) ? $_POST['sel1_icon2_1'] : "";
$s1_2_2 = isset($_POST['sel1_icon2_2']) && !empty($_POST['sel1_icon2_2']) ? $_POST['sel1_icon2_2'] : "";
$s1_2_3 = isset($_POST['sel1_icon2_3']) && !empty($_POST['sel1_icon2_3']) ? $_POST['sel1_icon2_3'] : "";
$s1_2_4 = isset($_POST['sel1_icon2_4']) && !empty($_POST['sel1_icon2_4']) ? $_POST['sel1_icon2_4'] : "";
$s1_3 = isset($_POST['sel1_icon3']) && !empty($_POST['sel1_icon3']) ? $_POST['sel1_icon3'] : "";
$s1_4 = isset($_POST['sel1_icon4']) && !empty($_POST['sel1_icon4']) ? $_POST['sel1_icon4'] : "";

$s2_2_1 = isset($_POST['sel2_icon2_1']) && !empty($_POST['sel2_icon2_1']) ? $_POST['sel2_icon2_1'] : "";
$s2_2_2 = isset($_POST['sel2_icon2_2']) && !empty($_POST['sel2_icon2_2']) ? $_POST['sel2_icon2_2'] : "";
$s2_2_3 = isset($_POST['sel2_icon2_3']) && !empty($_POST['sel2_icon2_3']) ? $_POST['sel2_icon2_3'] : "";
$s2_2_4 = isset($_POST['sel2_icon2_4']) && !empty($_POST['sel2_icon2_4']) ? $_POST['sel2_icon2_4'] : "";
$s2_3 = isset($_POST['sel2_icon3']) && !empty($_POST['sel2_icon3']) ? $_POST['sel2_icon3'] : "";
$s2_4 = isset($_POST['sel2_icon4']) && !empty($_POST['sel2_icon4']) ? $_POST['sel2_icon4'] : "";

//get
$an = "";
$an2 = "";
$an3 = "";
$an4 = "";

$active = " active"; //active
$active2 = ""; //active
$active3 = ""; //active
$active4 = ""; //active

$sort1 = ""; //checked=\"checked\"
$sort2 = ""; //checked=\"checked\"
$sort3 = ""; //checked=\"checked\"
$sort4 = ""; //checked=\"checked\"

$op2_bt = "<div id=\"op2-bt\" class=\"op2bt\" onclick=\"op2_btclick();\" disabled>확인</div>";

$sel1_op = "none"; // none block
$sel2_op = "none"; // none block

$sel1_info = "none"; // none block
$sel2_info = "none"; // none block

$sel1_type = ""; // /
$sel2_type = ""; // /

if(!empty($s))
{
    //1
    $an = $s;

    //if(empty($s1_2_1) && empty($s1_2_2) && empty($s1_2_3) && empty($s1_2_4) && empty($s1_3) && empty($s1_4) && empty($s2_2_1) && empty($s2_2_2) && empty($s2_2_3) && empty($s2_2_4) && empty($s2_3) && empty($s2_4))

    //2 전체 없음
    if(empty($s1_2_1) && empty($s1_2_2) && empty($s1_2_3) && empty($s1_2_4) && empty($s2_2_1) && empty($s2_2_2) && empty($s2_2_3) && empty($s2_2_4))
    {
        //$active = ""; //active
        //$active2 = " active"; //active
    }

    //2-1
    if((!empty($s1_2_1) && empty($s1_2_2) && empty($s1_2_3) && empty($s1_2_4)) || (!empty($s2_2_1) && empty($s2_2_2) && empty($s2_2_3) && empty($s2_2_4)))
    {
        $sort1 = " checked=\"checked\""; //
        $sort2 = "";
        $sort3 = "";
        $sort4 = "";

        $op2_bt = "<div id=\"op2-bt\" class=\"op2bt_over\" onclick=\"op2_btclick();\">확인</div>";
    }

    //2-2~4
    if((empty($s1_2_1) && (!empty($s1_2_2) || !empty($s1_2_3) || !empty($s1_2_4))) || (!empty($s2_2_1) && (!empty($s2_2_2) || !empty($s2_2_3) || !empty($s2_2_4))))
    {
        $sort1 = "";
        $sort2 = empty(${$s.$a."_2_1"}) ? "checked=\"checked\"" : "";
        $sort3 = empty(${$s.$a."_2_3"}) ? "checked=\"checked\"" : "";
        $sort4 = empty(${$s.$a."_2_4"}) ? "checked=\"checked\"" : "";

        $op2_bt = "<div id=\"op2-bt\" class=\"op2bt_over\" onclick=\"op2_btclick();\">확인</div>";
    }
}
?>


























<div class="text_ul_wrap">
    <a href="javascript:;"><table style="width:90%;"><tr><td align="left"><b>반려동물 선택 (필수)</b></td><td align="right" id="an"><?=$an?></td></tr></table></a>
    <div class="select_icon<?=$active?>"></div>
        <ul class="ul_select_style<?=$active?>">
            <li><span class="ot3"><img src="../images/main/img_portfolio_03.png" alt=""></span><span class="ot4">초롱이</span></li>
            <li><span class="ot3"><img src="../images/main/img_portfolio_03.png" alt=""></span><span class="ot4">멍멍이</span></li>
        </ul>
    </div>
</div>

<div class="text_ul_wrap2">
    <a href="javascript:;"><table style="width:90%;"><tr><td align="left"><b>간식 (선택)</b></td><td align="right" id="an2"><?=$an2?></td></tr></table></a>
    <div class="select_icon2<?=$active2?>"></div>
    <ul class="ul_select_style2<?=$active2?>">
        <li>
            <table class="product_title4">
            <tr>
                <td class="option_settext1 ot1"><span>선택안함</span></td>
                <td class="face">
                    <input id="sort1" type="checkbox" name="sort1" value="1" onclick="select_icon2_click1('1', '선택안함');"<?=$sort1?>>
                    <label for="sort1"></label>
                </td>
            </tr>
            </table>
        </li>
    	<li>
            <table class="product_title4">
            <tr>
                <td class="option_settext1 ot2">개껌 대</td>
                <td rowspan="2" class="face">
                    <input id="sort2" type="checkbox" name="sort2" value="1" onclick="select_icon2_click24('2', '개껌 대');"<?=$sort2?>>
                    <label for="sort2"></label>
                </td>
            </tr>
            <tr>
                <td class="option_settext2">+ 1,000원</td>
            </tr>
            </table>
        </li>
        <li>
            <table class="product_title4">
            <tr>
                <td class="option_settext1 ot3">닭가슴살</td>
                <td rowspan="2" class="face">
                    <input id="sort3" type="checkbox" name="sort3" value="1" onclick="select_icon2_click24('3', '닭가슴살');"<?=$sort3?>>
                    <label for="sort3"></label>
                </td>
            </tr>
            <tr>
                <td class="option_settext2">+ 2,000원</td>
            </tr>
            </table>
        </li>
        <li>
            <table class="product_title4">
            <tr>
                <td class="option_settext1">오리목뼈</td>
                <td rowspan="2" class="face">
                <input id="sort4" type="checkbox" name="sort4" value="1" onclick="select_icon2_click24('4', '오리목뼈');"<?=$sort4?>>
                <label for="sort4"></label>
            </td>
            </tr>
            <tr>
                <td class="option_settext2">+ 3,000원</td>
            </tr>
            </table>
        </li>
        <li>
            <?=$op2_bt?>
        </li>
    </ul>
</div>

<div class="text_ul_wrap3">
    <a href="javascript:;"><table style="width:90%;"><tr><td align="left"><b>다리스타일 (선택)</b></td><td align="right" id="an3"><?=$an3?></td></tr></table></a>
    <div class="select_icon3<?=$active3?>"></div>
    <ul class="ul_select_style3<?=$active3?>">
        <li><span class="ot1">선택안함</span></li>
        <li><span class="ot1">5mm</span><br><span class="ot2">+ 1,000원</span></li>
        <li><span class="ot1">7mm</span><br><span class="ot2">+ 2,000원</span></li>
        <li><span class="ot1">9mm</span><br><span class="ot2">+ 3,000원</span></li>
    </ul>
</div>

<div class="text_ul_wrap4">
    <a href="javascript:;"><table style="width:90%;"><tr><td align="left"><b>몸통 스타일 (선택)</b></td><td align="right" id="an4"><?=$an4?></td></tr></table></a>
    <div class="select_icon4<?=$active4?>"></div>
    <ul class="ul_select_style4<?=$active4?>">
        <li><span class="ot1">선택안함</span></li>
        <li><span class="ot1">부츠</span><br><span class="ot2">+ 1,000원</span></li>
    </ul>
</div>


<div id="sel1-op" class="option_set" style="display:<?=$sel1_op?>;">
    <a href="javascript:void(0);" onclick="toggle_reset(1);"><img style="width: 18px;position: absolute;top: 12px;right: 12px;" src="../images/shop/icon_close.png" alt=""></a>
    <div class="option_select">[선택 01]</div>

    <table class="option_title">
    <tbody>
    <tr>
        <td rowspan="2" class="face"><img src="../images/shop/berkay.png"></td>
        <td class="animal_name"><img src="../images/shop/386.png"><span class="l6">초롱이</span> </td>
    </tr>
    <tr>
        <td id="sel1-type" class="animal_type"><?=$sel1_type?></td>
    </tr>
    </tbody>
    </table>

    <div class="option_price">+ 15,000원</div>
</div>

<div id="sel2-op" class="option_set" style="display:<?=$sel2_op?>;">
    <a href="javascript:void(0);" onclick="toggle_reset(2);"><img style="width: 18px;position: absolute;top: 12px;right: 12px;" src="../images/shop/icon_close.png" alt=""></a>
    <div class="option_select">[선택 02]</div>

    <table class="option_title">
    <tbody>
    <tr>
        <td rowspan="2" class="face"><img src="../images/shop/berkay.png"></td>
        <td class="animal_name"><img src="../images/shop/386.png"><span class="l6">멍멍이</span> </td>
    </tr>
    <tr>
        <td id="sel2-type" class="animal_type"><?=$sel2_type?></td>
    </tr>
    </tbody>
    </table>

    <div class="option_price">+ 15,000원</div>
</div>

<div id="sel1-info" class="option_select2" style="display:<?=$sel1_info?>;"><span class="color_vol1b">[초롱이]</span><span class="color_vol2r">의 옵션도 선택해 주세요</span></div>

<div id="sel2-info" class="option_select2" style="display:<?=$sel2_info?>;"><span class="color_vol1b">[멍멍이]</span><span class="color_vol2r">의 옵션도 선택해 주세요</span></div>




<div class="toolbar_padding"><span class="blind">하단툴바 간격</span></div>

<!-- 예약 툴바 -->
<section class="reserve_toolbar">
    <div class="inner">
        <div class="total_pay">
            <div><span class="t1">결제금액</span></div>
            <div><span class="t2">45,000원</span></div>
        </div>
        <div class="btn_wrap">
            <button type="button"  id="TestBtn" class="btn_point_off">다음</button>
        </div>
    </div>
</section>
<!-- //예약 툴바 -->