/*  

تم كتابة هذا الملف من قبل ΜΘЅƬΔFΔ ЅY℞IΔN ☬

هاد الملف نشرتو كرم مني لدعم المحتاجين اذا بدك تنشر الملف اذكر اسمي 

او اسم قناتي لا تخمط الملف وتقول ملفك الملف مكتوب بإتقان

تابع قنواتي @Bots_Syria

المطور @GGGGGR

تواصل المحظورين @Bots_SyriaBot

*/


<?php
ob_start();
error_reporting(0);
define('API_KEY','868567173:AAIDHWHWJWIAJSHDHDHDHDHDI'); // توكن بوتك
function Mostafa($method,$datas=[]){$BOT_Damascus = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$BOT_Damascus";
$BOTS_SYR1A = file_get_contents($url); return json_decode($BOTS_SYR1A);}
/* ΜΘЅƬΔFΔ ЅY℞IΔN ☬ */
$Dev = array("759459219","759459219","759459219"); // ايديك علما اول ايدي رح يستلم رسائل من البوت
@$usernamebot = "SYMDBOT"; 
@$channel = "Bots_Syria";
@$token = API_KEY;
/* ΜΘЅƬΔFΔ ЅY℞IΔN ☬ */
$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$textmassage = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
/* ΜΘЅƬΔFΔ ЅY℞IΔN ☬ */
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$text = $update->inline_qurey->qurey;
/* ΜΘЅƬΔFΔ ЅY℞IΔN ☬ */
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
$messagen  = $update->message;
$name1   = $messagen->from->first_name;
$from_ids = $messagen->from->id;
/* ΜΘЅƬΔFΔ ЅY℞IΔN ☬ */
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
/* ΜΘЅƬΔFΔ ЅY℞IΔN ☬ */
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];
/* ΜΘЅƬΔFΔ ЅY℞IΔN ☬ */
function SendMessage($chat_id, $text){
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
function Forward($berekoja,$azchejaei,$kodompayam)
{
Mostafa('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
function  getUserProfilePhotos($token,$from_id) {
@$url = 'https://api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$from_id;
@$result = file_get_contents($url);
@$result = json_decode ($result);
@$result = $result->result;
return $result;
}
function check_filter($str){
global $filterget;
foreach($filterget as $d){
if (mb_strpos($str, $d) !== false) {
return true;
}
}
}

if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
/* ΜΘЅƬΔFΔ ЅY℞IΔN ☬ */
if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
/* قفل الروابط */
if($settings["lock"]["link"] == "🔐 مقفول 🔐"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
if (strstr($textmassage,"t.me") == true or strstr($caption,"T.me") == true or strstr($caption,"T.Me") == true or strstr($caption,"T.mE") == true or strstr($caption,"T.ME") == true or strstr($caption,"T.me") == true or strstr($textmassage,"telegram.me") == true or strstr($textmassage,"www.") == true or strstr($textmassage,"Www.") == true or strstr($textmassage,"wWw.") == true or strstr($textmassage,"wwW.") == true or strstr($textmassage,"WWW.") == true or strstr($textmassage,"https://") == true or strstr($textmassage,"Https://") == true or strstr($textmassage,"hTtps://") == true or strstr($textmassage,"htTps://") == true or strstr($textmassage,"httPs://") == true or strstr($textmassage,"httpS://") == true or strstr($textmassage,"HTTPS://") == true or strstr($textmassage,"://") == true or strstr($textmassage,"http://") == true or strstr($textmassage,"HTTP://") == true or strstr($caption,"telegram.me") ) {   
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
/* قفل الصور */
if($settings["lock"]["photo"] == "🔐 مقفول 🔐"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
if ($update->message->photo){  
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
/* قفل الصور المتحركة */
if($settings["lock"]["gif"] == "🔐 مقفول 🔐"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
if ($update->message->gif){  

Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
/* قفل الملفات */
if($settings["lock"]["document"] == "🔐 مقفول 🔐"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
if ($update->message->document){  
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
/* قفل الفيديو */
if($settings["lock"]["video"] == "🔐 مقفول 🔐"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
if ($update->message->video){  
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
/* قفل التعديل */
if($editgetsettings["lock"]["edit"] == "🔐 مقفول 🔐"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $devs && $edit_for_id != $mder && $edit_for_id != $admins){
if ($update->edited_message->text){  
Mostafa('deletemessage',[
'chat_id'=>$chat_edit_id,
'message_id'=>$message_edit_id
]);
}
}
}
/* قفل الجهات */
if ($settings["lock"]["contact"] == "🔐 مقفول 🔐"){
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
/* قفل التاك */
if ($settings["lock"]["tag"] == "🔐 مقفول 🔐"){
if (strstr($textmassage,"#") == true or strstr($caption,"#") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
/* قفل المعرفات */
if ($settings["lock"]["username"] == "🔐 مقفول 🔐"){
if (strstr($textmassage,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
/* قفل الصوت */
if ($settings["lock"]["audio"] == "🔐 مقفول 🔐"){
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
/* قفل البصمات */
if ($settings["lock"]["voice"] == "🔐 مقفول 🔐"){
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
/* قفل البوتات */
if($settings["lock"]["bot"] == "🔐 مقفول 🔐"){
if ($message->new_chat_member->is_bot) {
$hardmodebot = $settings["information"]["hardmodebot"];
if($hardmodebot == "( 🔓 مفتوح 🔓 )"){
Mostafa('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$update->message->new_chat_member->id
]);
}
else
{
Mostafa('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$update->message->new_chat_member->id
]);
Mostafa('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id
]);
}
}
}
/* قفل الملصقات */
if ($settings["lock"]["sticker"] == "🔐 مقفول 🔐"){
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
/* قفل التوجية */
if ($settings["lock"]["forward"] == "🔐 مقفول 🔐"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
}
}
}
/* قفل السيئات */
if ($settings["lock"]["fosh"] == "🔐 مقفول 🔐"){
if (strstr($textmassage,"كس") == true  or strstr($textmassage,"زب") == true or strstr($textmassage,"اير") == true  or  strstr($textmassage,"شرموطة") == true   or strstr($textmassage,"منيوك") == true or strstr($textmassage,"انيجك") == true or strstr($textmassage,"انيكك") == true   or strstr($textmassage,"يلعن دينك") == true   or strstr($textmassage,"يلعن ربك") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
/* قفل الرد */
if ($settings["lock"]["reply"] == "🔐 مقفول 🔐"){
if($update->message->reply_to_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
}
}
}
/* قفل الدردشة */
if ($settings["lock"]["text"] == "🔐 مقفول 🔐"){
if($update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
}
}
}
/* قفل الفيديو نوت */
if ($settings["lock"]["video_msg"] == "🔐 مقفول 🔐"){
if($update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
}
}
}
/* قفل الالعاب */
if($settings["lock"]["game"] == "🔐 مقفول 🔐"){
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
/* قفل المواقع */
if ($settings["lock"]["location"] == "🔐 مقفول 🔐"){
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
/* قفل الاشعارات */
if ($settings["lock"]["tgservic"] == "🔐 مقفول 🔐"){
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
}
}
}
/* قفل الكلايش */
if($settings["lock"]["lockcharacter"] == "🔐 مقفول 🔐"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$devs) && !in_array($from_id,$mder) && !in_array($from_id,$admins)){
$plus = mb_strlen("$textmassage");
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
if ($pluscharacter < $plus or $plus < $downcharacter) {   
Mostafa('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
/* اكواد القفل والفتح */
if($textmassage=="قفل الروابط" or $textmassage=="/lock link"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل الروابط 
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["link"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح الروابط" or $textmassage=="/open link"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح الروابط 
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["link"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="قفل الصور" or $textmassage=="/lock photo"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {	
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل الصور 
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["photo"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح الصور" or $textmassage=="/open photo"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح الصور
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["photo"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="قفل المتحركة" or $textmassage=="/lock gif"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل المتحركة 
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["gif"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
 ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح المتحركة" or $textmassage=="/open gif"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح المتحركة
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["gif"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="قفل الملفات" or $textmassage=="قفل ملفات،"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل الملفات 
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["document"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح الملفات" or $textmassage=="فتح ملفات"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح الملفات 
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["document"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
// video
elseif($textmassage=="قفل الفيديو" or $textmassage=="قفل فيديو"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل الفيديو
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["video"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح الفيديو" or $textmassage=="فتح فيديو"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح الفيديو
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["video"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
// edit
elseif($textmassage=="قفل التعديل" or $textmassage=="قفل تعديل"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل التعديل
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["edit"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح التعديل" or $textmassage=="فتح تعديل"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح التعديل
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["edit"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
// game
elseif($textmassage=="قفل الالعاب" or $textmassage=="قفل العاب"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل الألعاب
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["game"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح الالعاب" or $textmassage=="فتح العاب"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح الألعاب
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["game"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
// location
elseif($textmassage=="قفل المواقع" or $textmassage=="قفل الموقع"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل المواقع
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["location"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
 ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح المواقع" or $textmassage=="فتح الموقع"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح المواقع
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["location"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
// contact
elseif($textmassage=="قفل الجهات" or $textmassage=="قفل جهات"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل الجهات
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["contact"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح الجهات" or $textmassage=="فتح جهات"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح الجهات
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["contact"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
// tag
elseif($textmassage=="قفل التاك" or $textmassage=="قفل الهاش تاك"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل التاك
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,

'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["tag"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح التاك" or $textmassage=="فتح الهاش تاك"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح التاك
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["tag"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
// username 
elseif($textmassage=="قفل المعرفات" or $textmassage=="قفل المعرف"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل المعرفات
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["username"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح المعرفات" or $textmassage=="فتح المعرف"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح المعرفات
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["username"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
// audio
elseif($textmassage=="قفل الصوت" or $textmassage=="قفل الموسيقى"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل الصوت
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["audio"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح الصوت" or $textmassage=="فتح صوت"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح الصوت
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["audio"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="قفل ايدي" or $textmassage=="قفل الايدي"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل الايدي
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["cmd"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح الايدي" or $textmassage=="فتح الايدي"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح الايدي
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["cmd"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
// replay
elseif($textmassage=="قفل الرد" or $textmassage=="قفل رد"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل الرد
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["reply"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}


elseif($textmassage=="فتح الرد" or $textmassage=="فتح رد"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح الرد
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["reply"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
// tgservic
elseif($textmassage=="قفل الاشعارات" or $textmassage=="قفل اشعارات"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل الاشعارات
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["tgservic"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح الاشعارات" or $textmassage=="فتح اشعارات"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح الاشعارات
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["tgservic"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
// video note
elseif($textmassage=="قفل الفيديو نوت" or $textmassage=="قفل تسجيل فيديو"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل الفيديو نوت
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["video_msg"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح الفيديو نوت" or $textmassage=="فتح تسجيل فيديو"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح الفيديو نوت
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["video_msg"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
// lock bots
elseif ($textmassage == "قفل البوتات" or $textmassage == "قفل بوتات" or $textmassage == "قفل البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل البوتات
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["bot"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif ($textmassage == "فتح البوتات" or $textmassage == "فتح بوتات"  or $textmassage == "فتح البوت") {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح البوتات
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["bot"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
if($textmassage=="قفل البصمات" or $textmassage=="قفل البصمة"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل البصمات 
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["voice"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح البصمة" or $textmassage=="فتح البصمة"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح البصمات 
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["voice"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
// sticker
elseif($textmassage=="قفل الملصقات" or $textmassage=="قفل ملصقات"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل الملصقات
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["sticker"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح الملصقات" or $textmassage=="فتح ملصقات"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح الملصقات
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["sticker"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
// forward
elseif($textmassage=="قفل التوجيه" or $textmassage=="قفل توجيه"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل التوجيه
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["forward"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح التوجيه" or $textmassage=="فتح توجيه"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح التوجيه
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["forward"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
// fosh
elseif($textmassage=="قفل السيئات" or $textmassage=="قفل الممنوعات"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل السيئات
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["fosh"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح السيئات" or $textmassage=="فتح الممنوعات"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح السيئات
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["fosh"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
if($textmassage=="قفل الدردشة" or $textmassage=="قفل الدردشه"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل الدردشة 
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["text"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="فتح الدردشة" or $textmassage=="فتح الدردشه"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح الدردشة 
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["text"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="قفل الكلايش" or $textmassage=="قفل الكلايش"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {	
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل الكلايش 
🌿¦ عدد الأحرف المسموح بها $pluscharacter
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["lockcharacter"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="/unlock character" or $textmassage=="فتح الكلايش"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح الكلايش
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["lockcharacter"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
 ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif (strpos($textmassage , "/setlockcharacter ") !== false or strpos($textmassage , "عدد الكلايش") !== false) {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$num = str_replace(['/setlockcharacter ','عدد الكلايش '],'',$textmassage);
$add = $settings["information"]["added"];
if ($add == true) {
$te = explode(" ",$num);
$startlock = $te[0];
$endlock = $te[1];
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم وضع عدد الكلايش $startlock
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["information"]["downcharacter"]="$startlock";
$settings["information"]["pluscharacter"]="$endlock";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠️¦ خطأ أنت لم تقم بالتفعيل البوت هنا
🔰¦ أرسل كلمة تفعيل لتفعيل المجموعة
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage=="الحماية" or $textmassage=="الاعدادات" or $textmassage=="/settings"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$locklink = $settings["lock"]["link"];
$lockusername = $settings["lock"]["username"];
$locktag = $settings["lock"]["tag"];
$lockedit = $settings["lock"]["edit"];
$lockfosh = $settings["lock"]["fosh"];
$lockbots = $settings["lock"]["bot"];
$lockforward = $settings["lock"]["forward"];
$locktg = $settings["lock"]["tgservic"];
$lockreply = $settings["lock"]["reply"];
$lockcmd = $settings["lock"]["cmd"];
$lockdocument = $settings["lock"]["document"];
$lockgif = $settings["lock"]["gif"];
$lockvideo_note = $settings["lock"]["video_msg"];
$locklocation = $settings["lock"]["location"];
$lockphoto = $settings["lock"]["photo"];
$lockcontact = $settings["lock"]["contact"];
$lockaudio = $settings["lock"]["audio"];
$lockvoice = $settings["lock"]["voice"];
$locksticker = $settings["lock"]["sticker"];
$lockgame = $settings["lock"]["game"];
$lockvideo = $settings["lock"]["video"];
$locktext = $settings["lock"]["text"];
$mute_all = $settings["lock"]["mute_all"];
$welcome = $settings["information"]["welcome"];
$add = $settings["information"]["add"];
$setwarn = $settings["information"]["setwarn"];
$charge = $settings["information"]["charge"];
$lockauto = $settings["lock"]["lockauto"];
$lockcharacter = $settings["lock"]["lockcharacter"];
$startlock = $settings["information"]["timelock"];
$endlock = $settings["information"]["timeunlock"];
$startlockcharacter = $settings["information"]["pluscharacter"];
$endlockcharacter = $settings["information"]["downcharacter"];
$text = str_replace("
| فعال |","","⭕️اعدادات المجموعة
🌿┇حالة الحماية 

🌿》🔒الروابط : $locklink
🌿》🔒التاك : $locktag
🌿》🔒المعرفات : $lockusername
🌿》🔒التعديل : $lockedit
🌿》🔒السيئات : $lockfosh
🌿》🔒البوتات : $lockbots
🌿》🔒التوجيه : $lockforward
🌿》🔒خدمات التلجرام : $locktg
🌿》🔒الرد : $lockreply
🌿》🔒الاوامر االعامة : $lockcmd
🌿》🔒الملفات : $lockdocument
🌿》🔒المتحركة : $lockgif
🌿》🔒تسجيل الفيديو $lockvideo_note
🌿》🔒الموقع : $locklocation
🌿》🔒الصور : $lockphoto
🌿》🔒ارسال الارقام : $lockcontact
🌿》🔒الموسيقى / الصوت : $lockaudio
🌿》🔒البصمة : $lockvoice
🌿》🔒الملصقات : $locksticker
🌿》🔒الالعاب : $lockgame
🌿》🔒الفيديو : $lockvideo
🌿》🔒الدردشة : $locktext
🌿》🔒قفل الكل :  $mute_all
🌿》الترحيب : $welcome
🌿》اضافة الاعضاء : $add
🌿》عدد التحذيرات : $setwarn
🌿》🔒قفل كلايش : $lockcharacter
🌿》عدد الاحرف المسموح بها : $startlockcharacter
");
$text2 = str_replace("| غیر فعال |","","$text");
Mostafa('sendmessage',[ 
'chat_id'=>$chat_id,
'text'=>"$text2",
'reply_to_message_id'=>$message_id,
]);
}
}
elseif($textmassage == "/silent"&& $rt or $textmassage == "silent" && $rt or $textmassage == "تقييد" && $rt){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$devs) && !in_array($re_id,$mder) && !in_array($re_id,$admins)) {
$add = $settings["information"]["added"];
if ($add == true){
Mostafa('restrictChatMember',[
'user_id'=>$re_id,   
'chat_id'=>$chat_id,
'can_post_messages'=>false,
]);
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم تقييد العضو $re_name 
🌿¦ الايدي $re_id
√
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$re_msgid,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🌿┇لايمكنني تقييد الادمنية او المدراء او المطورين",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif (strpos($textmassage , "/silent ") !== false && $rt or strpos($textmassage , "تقييد مدة") !== false && $rt) {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$devs) && !in_array($re_id,$mder) && !in_array($re_id,$admins)) {
$add = $settings["information"]["added"];
$we = str_replace(['/silent ','تقييد مدة'],'',$textmassage);
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿┇أهلا عزيزي $name 👮‍♀
🌿┇تم تقييد العضو $re_name 
🌿┇الايدي $re_id
🌿┇تم تقييدة لمدة $we دقيقة
✓
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
Mostafa('restrictChatMember',[
'user_id'=>$re_id,   
'chat_id'=>$chat_id,
'can_post_messages'=>false,
'until_date'=>time()+$weplus*60,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"خطا⚠️
➖➖➖➖➖➖
يجب اختيار عدد بين 1 الى 1000",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
else
{
Mostafa('sendmessage',[
'chat_id' => $chat_id,
'text'=>"📍 لايمكنني تقييد الادمنية او المدراء او المطورين",
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage == "/unsilent" && $rt or $textmassage == "unsilent" && $rt or $textmassage == "الغاء التقييد" && $rt){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('restrictChatMember',[
'user_id'=>$re_id,   
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿┇أهلا عزيزي $name 👮‍♀
🌿┇تم الغاء تقييد العضو $re_name 
🌿┇الايدي $re_id
✓
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$re_msgid,
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($textmassage == "/list silent"  or $textmassage == "قائمة مقيدين" or $textmassage == "قائمة المقيدين") {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿┇أهلا عزيزي $name 👮‍♀
🌿┇قائمة المقيدين هي
$result
✓
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
elseif($textmassage == "/clean silentlist"  or $textmassage == "clean silentlist" or $textmassage == "مسح المقيدين") {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
Mostafa('restrictChatMember',[
'user_id'=>$silent[$z],   
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);
}
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"  
🌿┇أهلا عزيزي $name 👮‍♀
🌿┇تم مسح المقيدين بنجاح
✓
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}

elseif ( $textmassage == "تفعيل") {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add != true) {
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿┇اهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿┇تم تفعيل البوت في المجموعة
🌿┇رفع الادمنية تلقائياً
✓
",'parse_mode'=>"MarkDown",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,

]);  
Mostafa('sendmessage',[
'chat_id'=>$Dev[0],
'text'=>"تم اضافة مجموعة جديدة بواسطة المشرف ✅
➖➖➖➖➖
🚩معلومات المجموعة  :

🔅ايدي المجموعة : [$chat_id]

💭اسم المجموعة : [$namegroup]

🔖توسط : [ @$username ] 
", 
]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
$settings = '{"lock": {
"text": "( 🔓 مفتوح 🔓 )",
"photo": "( 🔓 مفتوح 🔓 )",
"link": "( 🔓 مفتوح 🔓 )",
"tag": "( 🔓 مفتوح 🔓 )",
"username": "( 🔓 مفتوح 🔓 )",
"sticker": "( 🔓 مفتوح 🔓 )",
"video": "( 🔓 مفتوح 🔓 )",
"voice": "( 🔓 مفتوح 🔓 )",
"audio": "( 🔓 مفتوح 🔓 )",
"gif": "( 🔓 مفتوح 🔓 )",
"bot": "( 🔓 مفتوح 🔓 )",
"forward": "( 🔓 مفتوح 🔓 )",
"document": "( 🔓 مفتوح 🔓 )",
"tgservic": "( 🔓 مفتوح 🔓 )",
"edit": "( 🔓 مفتوح 🔓 )",
"reply": "( 🔓 مفتوح 🔓 )",
"contact": "( 🔓 مفتوح 🔓 )",
"location": "( 🔓 مفتوح 🔓 )",
"game": "( 🔓 مفتوح 🔓 )",
"cmd": "( 🔓 مفتوح 🔓 )",
"mute_all": "( 🔓 مفتوح 🔓 )",
"mute_all_time": "( 🔓 مفتوح 🔓 )",
"fosh": "( 🔓 مفتوح 🔓 )",
"lockauto": "( 🔓 مفتوح 🔓 )",
"lockcharacter": "( 🔓 مفتوح 🔓 )",
"video_msg": "( 🔓 مفتوح 🔓 )"
},
"information": {
"added": "true",
"welcome": "( 🔓 مفتوح 🔓 )",
"add": "( 🔓 مفتوح 🔓 )",
"lockchannel": "( 🔓 مفتوح 🔓 )",
"hardmodebot": "( 🔓 مفتوح 🔓 )",
"hardmodewarn": "كتم العضو ♨️",

"setadd": "3",

}
}';
$settings = json_decode($settings,true);
$settings["information"]["expire"]="$next_date";
$settings["information"]["dataadded"]="$dateadd";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🌿┇اهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿┇تم تفعيل البوت في المجموعة سابقاً
✓
",
'reply_to_message_id'=>$message_id,
]); 
}
}
}
}
//automatic
elseif ($textmassage == "قفل الكل"  or $textmassage == "automatic" or $textmassage == "قفل كل") {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم قفل الكل 
√
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["link"]="🔐 مقفول 🔐";
$settings["lock"]["username"]="🔐 مقفول 🔐";
$settings["lock"]["bot"]="🔐 مقفول 🔐";
$settings["lock"]["forward"]="🔐 مقفول 🔐";
$settings["lock"]["tgservices"]="🔐 مقفول 🔐";
$settings["lock"]["contact"]="🔐 مقفول 🔐";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
}

elseif($textmassage=="فتح كل"  or $textmassage=="unmute all" or $textmassage=="فتح الكل"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$devs) or in_array($from_id,$mder) or in_array($from_id,$admins)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🌿¦ أهلا عزيزي [$name1](tg://user?id=$from_ids) 
🌿¦ تم فتح الكل 
√
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["mute_all"]="( 🔓 مفتوح 🔓 )";
$settings["lock"]["mute_all_time"]="( 🔓 مفتوح 🔓 )";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif($rt && $textmassage=="/pin"  or $rt && $textmassage=="pin" or $rt && $textmassage=="تثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
Mostafa('pinChatMessage',[
'chat_id'=>$chat_id,
'message_id'=>$replyid
]);
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿┇اهلا عزيزي $name 👮‍♀
🌿┇تم تثبيت رسالتك
✓
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
elseif($textmassage=="/unpin"  or  $textmassage=="unpin"  or  $textmassage=="الغاء التثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
Mostafa('unpinChatMessage',[
'chat_id'=>$chat_id,
'message_id'=>$replyid
]);
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿┇اهلا عزيزي $name 👮‍♀
🌿┇تم الغاء تثبيت رسالتك
✓
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}

elseif(strpos($textmassage ,"/kick ") !== false or strpos($textmassage ,"طرد ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$text = str_replace(['/kick ','طرد '],'',$textmassage);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
Mostafa('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$text
]);
Mostafa('sendmessage', [
'chat_id' => $chat_id,
'text'=>"
🌿┇اهلا عزيزي $name 👮‍♀
🌿┇تم طرد العضو $name
🌿┇المعرف @$username
🌿┇الايدي $id
✓
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);

}
}
elseif($rt && $textmassage=="/kick"  or $rt && $textmassage=="kick" or $rt && $textmassage== "طرد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
Mostafa('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id
]);
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🌿┇اهلا عزيزي $name 👮‍♀
🌿┇تم طرد العضو $re_name
🌿┇المعرف @$re_user
🌿┇الايدي $re_id
✓
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
} 
else	
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📍 لايمكنني تقييد الادمنية او المدراء او المطورين",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
}
elseif ( strpos($textmassage , '/rmsg ') !== false or strpos($textmassage , 'حذف') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$num = str_replace(['/rmsg ','حذف'],'',$textmassage);
if ($num <= 300 && $num >= 1){
$add = $settings["information"]["added"];
if ($add == true) {
for($i=$message_id; $i>=$message_id-$num; $i--){
Mostafa('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
              ]);
}
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"
🌿┇اهلا عزيزي $name 👮‍♀
🌿┇تم مسح $num من رسائل
✓
",
'reply_markup'=>$inlinebutton,
   ]);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"
🌿┇خطأ يا عزيزي
🌿┇يمكنك حذف فقط من 1 ~ إلى 300
",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
//  setname
elseif ( strpos($textmassage , '/setname ') !== false or strpos($textmassage , 'ضع اسم') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$newname= str_replace(['/setname ','ضع اسم '],'',$textmassage);
 Mostafa('setChatTitle',[
    'chat_id'=>$chat_id,
    'title'=>$newname
      ]);
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
🌿┇اهلا عزيزي $name 👮‍♀
🌿┇تم وضع اسم جديد $newname
✓
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
}


// link
 elseif($textmassage=="/link" or $textmassage=="link" or $textmassage=="الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){  
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "( 🔓 مفتوح 🔓 )") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
Mostafa('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
🌿┇اهلا عزيزي $name 👮‍♀
🌿┇رابط المجموعة هو
$getlinkde
✓
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
 }
 }
else
{
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
Mostafa('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
??┇اهلا عزيزي $name 👮‍♀
🌿┇رابط المجموعة هو
$getlinkde
✓
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
 }


elseif($textmassage=="/warn" && $rt or $textmassage=="warn" && $rt or $textmassage=="تحذير" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn + 1;	
if ($warnplus >= $setwarn) {
$hardmodewarn = $settings["information"]["hardmodewarn"];
if($hardmodewarn == "🚷 اخراج کاربر"){
Mostafa('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
	]);
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🌿┇اهلا عزيزي $name 👮‍♀
🌿┇تم تحذير العضو
🌿┇الاسم $re_name
🌿┇المعرف @$re_user
🌿┇الايدي $re_id
✓
",
   ]);
 }
else
{
   Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
         ]);
		 	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🌿┇اهلا عزيزي $name 👮‍♀
🌿┇تم تحذير العضو
🌿┇الاسم $re_name
🌿┇المعرف @$re_user
🌿┇الايدي $re_id
✓
",
   ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🌿┇تحذيراتك $warnplus من اصل $setwarn اذا تجاوزت عدد التحذيرات سيتم تقييدك
🌿┇الاسم $re_name
🌿┇المعرف @$re_user
🌿┇الايدي $re_id
✓
",
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
 else
 {
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
 }
else
{
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⚠️┇خطأ لا يمكن تحذير الادمن  , المدير  , المطور ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
 elseif($textmassage=="/unwarn" && $rt or $textmassage=="unwarn" && $rt or $textmassage=="مسح تحذير"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn - 1;	
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🌿┇تم مسح تحذيرات العضو
🌿┇تحذيراته $warnplus 
🌿┇العدد المسموح به $setwarn
🌿┇الاسم $re_name
🌿┇المعرف @$re_user
🌿┇الايدي $re_id
✓
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
 }
 else
 {
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
 }
}
}
elseif ( strpos($textmassage , '/setwarn ') !== false or strpos($textmassage , 'تحذيرات عدد') !== false  ) {
$newdec = str_replace(['/setwarn ','تحذيرات عدد'],'',$textmassage);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
if ($newdec <= 20 && $newdec >= 1){
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
🌿┇اهلا عزيزي $name 👮‍♀
🌿┇تم وضع تحذيرات $newdec
✓
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setwarn"]="$newdec";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }else{
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"
⚠️┇خطأ لا يمكن وضع تحذيرات اكثر من 20 تحذير 
",
'reply_markup'=>$inlinebutton,
   ]);
 }
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة

",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($textmassage=="/warn info" or $textmassage=="warn info" or $textmassage=="تحذيراتي"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){  
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🌿┇الاسم $re_name
🌿┇المعرف @$re_user
🌿┇الايدي $re_id
🌿┇تحذيراتك $warn 
🌿┇العدد المسموح به $setwarn
✓
",
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
 }
 }
 }

/*  

تم كتابة هذا الملف من قبل ΜΘЅƬΔFΔ ЅY℞IΔN ☬

هاد الملف نشرتو كرم مني لدعم المحتاجين اذا بدك تنشر الملف اذكر اسمي 

او اسم قناتي لا تخمط الملف وتقول ملفك الملف مكتوب بإتقان

تابع قنواتي @Bots_Syria

المطور @GGGGGR

تواصل المحظورين @Bots_SyriaBot

*/



