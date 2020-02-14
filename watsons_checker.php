<?php
date_default_timezone_set('Asia/Hong_Kong');

$check_list = [
  //口罩
  ['https://www.watsons.com.hk/p/BP_228275', 'WATSONS 屈臣氏兒童口罩'],
  ['https://www.watsons.com.hk/p/BP_228276', 'WATSONS 屈臣氏成人口罩'],
  ['https://www.watsons.com.hk/p/BP_228688', 'CSD 醫療口罩雪花'],
  ['https://www.watsons.com.hk/p/BP_228689', 'CSD CSD 醫療口罩聖誕紅'],
  ['https://www.watsons.com.hk/p/BP_228691', 'CSD CSD 醫療口罩深綠色'],
  ['https://www.watsons.com.hk/p/BP_228692', 'CSD CSD醫療口罩黑色'],
  ['https://www.watsons.com.hk/p/BP_229241', 'CSD CSD中衛醫療口罩盒裝格紋紫'],
  ['https://www.watsons.com.hk/p/BP_229246', 'CSD CSD中衛醫療口罩盒裝紅色'],
  ['https://www.watsons.com.hk/p/BP_229248', 'CSD CSD 中衛醫療口罩黑綠'],
  ['https://www.watsons.com.hk/p/BP_234107', 'CSD 醫療口罩粉紫色'],
  ['https://www.watsons.com.hk/p/BP_239294', 'RESPOKARE 成人抗病毒口罩5片裝'],
  ['https://www.watsons.com.hk/p/BP_239399', 'WATSONS 防紫外線口罩3片裝'],
  ['https://www.watsons.com.hk/p/BP_247125', 'NEXCARE Nexcare™ 8550 舒適口罩, 大,黑色'],
  ['https://www.watsons.com.hk/p/BP_247127', 'NEXCARE Nexcare™ 8550 舒適口罩, 中,黑色'],
  ['https://www.watsons.com.hk/p/BP_250916', 'CSD 醫療口罩丹寧牛仔'],
  ['https://www.watsons.com.hk/p/BP_252145', 'VANTELIN 三次元立體口罩 薰衣草味'],
  ['https://www.watsons.com.hk/p/BP_252149', 'VANTELIN 三次元立體口罩中碼'],
  ['https://www.watsons.com.hk/p/BP_252150', 'VANTELIN 三次元立體口罩 西柚味'],
  ['https://www.watsons.com.hk/p/BP_252151', 'VANTELIN 三次元立體口罩 玫瑰味'],
  ['https://www.watsons.com.hk/p/BP_254662', 'PROTECTOR 中童口罩３０個'],
  ['https://www.watsons.com.hk/p/BP_254665', 'PROTECTOR 成人口罩３０個'],
  ['https://www.watsons.com.hk/p/BP_257934', 'CSD 醫療口罩月河雪花'],
  ['https://www.watsons.com.hk/p/BP_258651', 'WATSONS 3D FACE MASK'],
  ['https://www.watsons.com.hk/p/BP_259957', 'CSD 醫療口罩炫霓紫'],
  ['https://www.watsons.com.hk/p/BP_260671', 'Nask SMART MASK - ADULT (5 PCS)'],
  ['https://www.watsons.com.hk/p/BP_262634', 'CSD MOON RIVER BLUE ON BLACK MASK'],
  ['https://www.watsons.com.hk/p/BP_262637', 'CSD SHADOW BLACK CAMO MASK 5s'],
  ['https://www.watsons.com.hk/p/BP_267748', 'WATSONS NAVY FACE MASK'],
  ['https://www.watsons.com.hk/p/BP_267759', 'WATSONS HYGIENIC ACTIVATED CARBON MASK'],
  ['https://www.watsons.com.hk/p/BP_267777', 'WATSONS 兒童口罩(未滅菌)'],
  ['https://www.watsons.com.hk/p/BP_267980', '小林製藥 3D PM2.5 Mask 3S'],
  ['https://www.watsons.com.hk/p/BP_267981', '小林製藥 3D PM2.5 Mask 3S'],
  ['https://www.watsons.com.hk/p/BP_287660', 'WATSONS 屈臣氏N95口罩'],
  ['https://www.watsons.com.hk/p/BP_295813', 'ULTRA READY 外科手術口罩-中碼'],
  ['https://www.watsons.com.hk/p/BP_295815', 'ULTRA READY 外科手術口罩-大碼'],
  ['https://www.watsons.com.hk/p/BP_295818', 'ULTRA READY 外科手術口罩-加細碼'],
  ['https://www.watsons.com.hk/p/BP_497118', 'PITTA Mask gray'],
  ['https://www.watsons.com.hk/p/BP_801175', 'WATSONS PM2.5 口罩'],
  ['https://www.watsons.com.hk/p/BP_801203', 'Kawamoto PM2.5 MASK SMALL 50S'],
  ['https://www.watsons.com.hk/p/BP_801204', 'Kawamoto PM2.5 MASK STANDARD 50S'],
  ['https://www.watsons.com.hk/p/BP_801218', 'CSD MASK RIVER NIGHT 5S'],
  ['https://www.watsons.com.hk/p/BP_801219', 'CSD MASK RIVER DAWN 5s'],
  ['https://www.watsons.com.hk/p/BP_801221', 'CSD CSD X ELLE PARIS BLACK 5S'],
  ['https://www.watsons.com.hk/p/BP_801222', 'CSD 醫療口罩牛仔印刷'],
  ['https://www.watsons.com.hk/p/BP_801223', 'CSD 醫療口罩軍綠迷彩'],
  ['https://www.watsons.com.hk/p/BP_801226', 'PITTA PM2.5 MASK 5S'],
  ['https://www.watsons.com.hk/p/BP_801227', 'NEXCARE 3M醫用口罩粉紅色'],
  ['https://www.watsons.com.hk/p/BP_801228', 'CSD MASK DARK DENMIN 5S'],
  ['https://www.watsons.com.hk/p/BP_801229', 'NEXCARE 3M醫用口罩藍色'],
  ['https://www.watsons.com.hk/p/BP_801230', 'Sun Million HYGIENIC MASK 60s'],
  ['https://www.watsons.com.hk/p/BP_801253', 'ZT 三層不織布獨立包裝口罩'],
  //消毒用品
  ['https://www.watsons.com.hk/p/BP_103835', '花王 漂白水'],
  ['https://www.watsons.com.hk/p/BP_103836', '花王 漂白水'],
  ['https://www.watsons.com.hk/p/BP_104185', '花王 漂白水'],
  ['https://www.watsons.com.hk/p/BP_111334', '滴露 滴露消毒藥水750毫升'],
  ['https://www.watsons.com.hk/p/BP_153432', '滴露 滴露松木衣物消毒劑1.2公升'],
  ['https://www.watsons.com.hk/p/BP_153442', '滴露 殺菌消毒噴霧－柔香'],
  ['https://www.watsons.com.hk/p/BP_153443', '滴露 殺菌消毒噴霧－清新'],
  ['https://www.watsons.com.hk/p/BP_188574', '滴露 滴露檸檬衣物消毒劑1.2公升'],
  ['https://www.watsons.com.hk/p/BP_227240', 'KING\'S. 殺菌王消毒藥水孖裝'],
  ['https://www.watsons.com.hk/p/BP_227783', 'WATSONS 屈臣氏抗菌泡沫蜜糖牛奶清香潔手乳300 毫升'],
  ['https://www.watsons.com.hk/p/BP_227784', 'WATSONS 屈臣氏抗菌泡沫莓果香味潔手乳300 毫升'],
  ['https://www.watsons.com.hk/p/BP_227786', 'WATSONS 屈臣氏松木抗菌搓手液60毫升'],
  ['https://www.watsons.com.hk/p/BP_227798', 'WATSONS 屈臣氏蘆薈抗菌搓手液60毫升'],
  ['https://www.watsons.com.hk/p/BP_228190', 'WATSONS 多用途消毒藥水'],
  ['https://www.watsons.com.hk/p/BP_228191', 'WATSONS 屈臣氏多用途消毒藥水'],
  ['https://www.watsons.com.hk/p/BP_228192', 'WATSONS 屈臣氏消毒火酒75%'],
  ['https://www.watsons.com.hk/p/BP_228193', 'WATSONS 屈臣氏消毒火酒95%'],
  ['https://www.watsons.com.hk/p/BP_252179', 'BIOEM AIR 防疫噴霧輕便裝 - 20ml'],
  ['https://www.watsons.com.hk/p/BP_268080', '私+呵護 免洗酒精搓手液60ml'],
  ['https://www.watsons.com.hk/p/BP_282963', 'WATSONS Happiplayground粉紅檸檬消毒搓手液30毫升'],
  ['https://www.watsons.com.hk/p/BP_282964', 'WATSONS Happiplayground野莓消毒搓手液30毫升'],
  ['https://www.watsons.com.hk/p/BP_282965', 'WATSONS Happiplayground綠茶蘆薈消毒搓手液30毫升'],
  ['https://www.watsons.com.hk/p/BP_284794', '滴露 經典保護殺菌潔手液500克'],
  ['https://www.watsons.com.hk/p/BP_284798', '滴露 Gold時刻保護殺菌潔手液500克'],
  ['https://www.watsons.com.hk/p/BP_285358', 'WATSONS Happiplayground綠茶蘆薈消毒搓手液30毫升補充裝'],
  ['https://www.watsons.com.hk/p/BP_285359', 'WATSONS Happiplayground泡泡糖消毒搓手液30毫升補充裝'],
  ['https://www.watsons.com.hk/p/BP_285569', '滴露 經典保護殺菌潔手液500克3支裝'],
  ['https://www.watsons.com.hk/p/BP_289906', 'WATSONS 屈臣氏酒精抹紙'],
  ['https://www.watsons.com.hk/p/BP_309880', '威露士 酒精搓手液'],
  ['https://www.watsons.com.hk/p/BP_314684', '威露士 免洗酒精搓手液'],
  ['https://www.watsons.com.hk/p/BP_325803', '滴露 滴露檸檬衣物消毒劑1.2公升孖裝加洗手液250克'],
  ['https://www.watsons.com.hk/p/BP_325804', '滴露 滴露松木衣物消毒劑1.2公升孖裝加洗手液250克'],
  ['https://www.watsons.com.hk/p/BP_328140', 'KLEENEX 迪士尼殺菌消毒濕紙巾'],
  ['https://www.watsons.com.hk/p/BP_376554', '滴露 萬用消毒噴劑'],
  ['https://www.watsons.com.hk/p/BP_381503', '滴露 家居消毒濕紙巾－檸檬清香'],
  ['https://www.watsons.com.hk/p/BP_390739', 'AJAX 雅漬士 - 天然100%竹纖維萬用除菌消毒環保家居濕紙巾110片 (清新檸檬)'],
  ['https://www.watsons.com.hk/p/BP_390740', 'AJAX 雅漬士 - 黑炭配方萬用除菌消毒除臭環保家居濕紙巾 110片 (黑炭青檸)'],
  ['https://www.watsons.com.hk/p/BP_411688', '滴露 滴露薰衣草衣物消毒劑1.2公升'],
  ['https://www.watsons.com.hk/p/BP_435347', '滴露 滴露薰衣草衣物消毒劑1.2公升孖裝加洗手液250克'],
  ['https://www.watsons.com.hk/p/BP_445672', '滴露 萬用消毒濕紙巾 '],
  ['https://www.watsons.com.hk/p/BP_454550', '滴露 滴露消毒藥水1.2升孖裝加贈品'],
  ['https://www.watsons.com.hk/p/BP_455474', '滴露 敏感呵護殺菌濕紙巾優惠裝'],
  ['https://www.watsons.com.hk/p/BP_488756', '滴露 滴露消毒藥水1.2升孖裝加贈品'],
  ['https://www.watsons.com.hk/p/BP_491368', '滴露 淨味清香滴露魔法泡泡變色潔手液'],
  ['https://www.watsons.com.hk/p/BP_497172', '滴露 家居消毒濕紙巾８０片孖裝 檸檬'],
  ['https://www.watsons.com.hk/p/BP_499869', '滴露 萬用消毒濕紙巾（青蘋果）'],
];
$user_agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36';
$cookie_cache = 'watsons_cookie_cache.db';
$cookie = file_get_contents($cookie_cache, false);
foreach($check_list as list($stock_url, $stock_name)) {
  $stock_level = shell_exec('curl -ks '.$stock_url.' -H \'user-agent: '.$user_agent.'\' -H \'cookie: '.$cookie.'\' --compressed | grep stock-level-status | awk \'{split($0,array,"\"")} END{print array[4]}\'');
  if($stock_level > 0) {
    if(date('H') < 8) {
      notification($stock_name, $stock_url, $stock_level, true, true);
    } else {
      notification($stock_name, $stock_url, $stock_level, true);
    }
  }
}
function notification($stock_name, $stock_url, $stock_level, $disable_web_page_preview=false, $disable_notification=false) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot<TG_BOT_API_KEY>/sendMessage');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"chat_id\": \"<TG_CHANNEL_ID>\", \"text\": \"[{$stock_name}]({$stock_url})\n數量: {$stock_level}\", \"disable_web_page_preview\": \"{$disable_web_page_preview}\", \"disable_notification\": \"{$disable_notification}\", \"parse_mode\": \"markdown\"}";
  $headers = array();
  $headers[] = 'Content-Type: application/json';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $result = curl_exec($ch);
  if(curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
  }
  curl_close($ch);
}
?>
