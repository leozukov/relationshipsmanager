<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
		<title>Relationshipsmanager</title>
<link rel="stylesheet" href="css/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
</head>
<body>
<p><a name="top"></a> <?php include ("header"); ?></p>

<p>&nbsp;</p>

<table width=100%>
<tr>
<td width=20% valign=top>
День рождения сегодня:
<br><br>
<hr>
<br>
Алфавитный список (буквы появляются сами по мере появления / добавления контактов)
<br><br>
<span style="color: white; background-color: red; font-weight: bold; ">Red</span> - The contact is overdue. You need to contact this contact. Last contact: "Date"
<br><br>
<span style="color: white; background-color: orange; font-weight: bold; ">Orange</span> - The contact is due. You need to contact this contact. Last contact: "Date"
<br><br>
<span style="color: black; background-color: yellow; font-weight: bold; ">Yellow</span> - The contact will be due soon. You can contact this contact now. Last contact: "Date"
<br><br>
<span style="color: white; background-color: green; font-weight: bold; ">Green</span> - It's all good. Last contact: "Date"
<br><br>
<hr>
<br>
Тэги (если таковые были созданы пользователем)
</td>
<td width=5%>&nbsp;</td>
<td width=50% valign=top name="main_area" id="main_area">
<!-- здесь начинается вложенная таблица -->
<table width=100% border=0>

<!--

<tr>
<td colspan=3>
&nbsp;
</td>
</tr>


<tr>
<td width=48%>&nbsp;</td>
<td width=4%>&nbsp;</td>
<td width=48%>&nbsp;</td>
</tr>


-->

<tr>
<td width=48%>
<table><tr><td><img id="add_new_contact_image" src="images/plus_squared.png" title="Add new contact" alt="Add new contact"></td><td valign=middle><u class="link" title="Add new contact" id="add_new_contact_link">Add new contact</u></td></tr></table>
</td>

<script>


/* this below works

function my_function()
{
xmlhttp=new XMLHttpRequest();
document.getElementById("main_area").innerHTML=xmlhttp.responseText;
xmlhttp.open("GET","connect_mysql.php",true);
xmlhttp.send();
}

$(function(){
$('#add_new_contact').click(function(){
$('#main_area').html('Тут будут добавляться новые контакты<br><br><body><table width=100% border=1><tr><td>Имя</td> <td><input></td> <td>Фамилия</td> <td><input></td></tr><tr><td colspan=2></td><td colspan=2 align=right><button id="save" onclick="my_function()">Save</button></td></tr></table>');
});
});

*/ 

//this above works


/*

function my_function2(first_name,last_name)
{
var a=first_name;
var b=last_name; 
document.getElementById("main_area").innerHTML = a;
document.getElementById("main_area").innerHTML = " ";
document.getElementById("main_area").innerHTML = b;

//document.getElementById("main_area").innerHTML = a + " " + b;
}


function my_function(str)
{
xmlhttp=new XMLHttpRequest();
document.getElementById("main_area").innerHTML=xmlhttp.responseText;
xmlhttp.open("GET","temp.php?q="+str,true);
xmlhttp.send();
}

//var str="Влад";

*/

$(function(){
$('#add_new_contact_image, #add_new_contact_link').click(function(){
$('#main_area').html('Тут будут добавляться новые контакты<br><br><body><form id="save_contacts_form" name="" action="save_contacts.php"><table width=100% border=1><tr><td>Имя</td> <td><input id="first_name" name="first_name"></td> <td>Фамилия</td> <td><input id="last_name" name="last_name"></td></tr><tr><td colspan=2></td><td colspan=2 align=right><button id="save_contact_entries">Save</button></td></tr></table></form><br><br><span id="result"></span>');
});
});

</script>


<td width=4%>&nbsp;</td>
<td width=48% align=right><img src="images/cog.png" id="contact_settings_particular_contact" title="Contact settings for this contact" alt="Contact settings for this contact">
</td>
</tr>
<tr>
<td width=48%>&nbsp;</td>
<td width=4%>&nbsp;</td>
<td width=48%>&nbsp;</td>
</tr>
<tr>
<td colspan=3 id="area_contact_settings_particular_contact">
How frequently to contact this contact:<br><br><input type="checkbox" id="notification_weekly" value="weekly">weekly<br><input type="checkbox" id="notification_monthly" value="monthly">monthly<br><input type="checkbox" id="notification_quarterly" value="quarterly">quarterly<br><input type="checkbox" id="notification_halfyearly" value="halfyearly">half-yearly<br><input type="checkbox" id="notification_yearly" value="yearly">yearly<br><br>How to be notified:<br><br><input type="checkbox" id="notification_by_email" value="email">per e-mail<br><input type="checkbox" id="notification_by_sms" value="sms">per sms<br><input type="checkbox" id="notification_onsite" value="onsite">on-site notifications
</td>
</tr>
<tr>
<td width=48%>&nbsp;</td>
<td width=4%>&nbsp;</td>
<td width=48%>&nbsp;</td>
</tr>
<tr>
<td width=48%>
<b>Contact's own entry</b>
</td>
<td width=4%>&nbsp;</td>
<td width=48%>
<b>Your own entry about contact</b>
</td>
</tr>
<tr>
<td width=48%>&nbsp;</td>
<td width=4%>&nbsp;</td>
<td width=48%>&nbsp;</td>
</tr>
<tr>
<td width=48% valign=top>
Вася Пупкин
<br><br>
E-Mail:
<br><br>
vasya.pupkin@pupkin.com
<br><br>
Telefon:
<br><br>
+ 49 175 4523 6543
<br><br>
Date of birth:
<br><br>
15 апреля 1990 
<br><br>
Notes:
<br><br>
Text of the note(s)
</td>
<td width=4%>&nbsp;</td>
<td width=48% valign=top>
Василий Иванович Полетаев
<br><br>
Nickname:
<br><br>
Вася Полёт
<br><br>
E-Mail:
<br><br>
vasily@siemens.de
<br><br>
Telefon:
<br><br>
+ 49 69 4567 8954
<br><br>
Date of birth:
<br><br>
29 марта 1970 
<br><br>
Notes:
<br><br>
Text of the note(s)
</td>
<tr>
<td width=48%>&nbsp;</td>
<td width=4%>&nbsp;</td>
<td width=48%>&nbsp;</td>
</tr>
<tr>
<td colspan=3 align=center>
<span style="color: white; background-color: green; font-weight: bold; ">Green</span> - It's all good.
<br><br>
Last contacted: "Date"
<br><br>
<b>History of communication</b>
<br><br>
Bla bla bla 
<br><br>
Export into DOC | Export into PDF
</td>
</tr>
<tr>
<td width=48%>&nbsp;</td>
<td width=4%>&nbsp;</td>
<td width=48%>&nbsp;</td>
</tr>
<tr>
<td colspan=3 align=center>Write a message to the contact
<br><br>
<textarea name="" id="" placeholder="Your message to the contact"></textarea>
<br>
<select name="" id="email_contact_contact_select"><option name="" id="email_contact_contact_option_messenger" value="platform_messenger">Using platform messenger</option><option name="" id="email_contact_contact_option_email" value="">* E-mail</option></select>
<br>
<input name="" id="email_contact_contact_input" placeholder="E-mail address"><br>
<!-- here, in the script below, we will dynamically show or hide input email contact field -->
<script>
$(function(){
$('#email_contact_contact_input').hide();
});

$(function(){
$('#email_contact_contact_option_email').click (function(){
$('#email_contact_contact_input').show();
});
$('#email_contact_contact_option_messenger').click (function(){
$('#email_contact_contact_input').hide();
});
});

/* 

No need for the function anymore because of the usage of HTML placeholder option placeholder="Write your text here" or similar

$('#email_contact_contact_input').click( function() {
$(this).val('');

$('#email_contact_contact_input').empty(); <- this doesn't work, however this one -> $('#email_contact_contact_input').val(''); works fine and this one -> $(this).val(''); is currently used
 
});

*/


</script>
<!-- End of the script -->
<button name="" id="">Send</button>
</td>
</tr>
<tr>
<td width=48%>&nbsp;</td>
<td width=4%>&nbsp;</td>
<td width=48%>&nbsp;</td>
</tr>
<tr>
<td colspan=3 align=center>
<button name="" id="">Delete contact</button>
<br><br>
// get confirmation before deleting contact
</td>
</tr>
<tr>
<td width=48%>&nbsp;</td>
<td width=4%>&nbsp;</td>
<td width=48%>&nbsp;</td>
</tr>
</table>
<!-- здесь заканчивается вложенная таблица -->
</td>
<td width=5%>&nbsp;</td>
<td width=20% valign=top>
Активные запросы на добавление в список контактов
<br><br>
<hr>
<br>
Приглашение друзей, родственников и / или знакомых пользоваться платформой
<br><br>
E-mail или номер мобильного телефона в интернациональном формате
<br><br> 
<input name="" id="">
<br><br>
<select name="" id="invitation_select"><option name="" id="" value="">E-Mail</option><option name="" id="" value="">Whatsapp</option><option name="" id="" value="">Telegram</option><option name="" id="" value="">Viber</option><option name="" id="" value="">WeChat</option><option name="" id="" value="">Line</option><option name="" id="other" value="other">* Other, write us which one</option></select>
<br><br>
<span id="other_messengers"><input id="other_messengers_input" placeholder="Write the messenges apps name here"> <button id="save_other_messengers_recommendation">Save</button>
</span>
<br><br>
<textarea name="" id="" placeholder="Your invitation text"></textarea>
<br><br>
<button name="" id="">Отправить сообщение</button> 
<br>(по e-mail или любому мессенжеру с API) 
</td>
</tr>
</table>

<!-- скрипт рекомендации других мессенжеров -->

<script>

/*

No need for the function anymore, because of the usage HTML placeholder option placeholder="Write your text here" or similar

$(function(){
$('#other_messengers_input').click (function(){
$(this).val('');
});
});

*/

/*

Надо написать фунцию которая будет отправлять рекомендации новых мессенжеров с ввода рекомендаций после того как человек кликнет на кнопку сохранить. 

text="Спасибо Вам за Вашу рекомендацию. Ваша рекомендация была успешно отправлена нам.";

*/

</script>

<!-- Конец скрипта рекомендации других мессенжеров -->


<!-- набор функций для верхнего меню -->

<script>

$(function(){
$('#messages_link').click(function() {
$('#main_area').html("Here will be your messages");
});
});


$(function(){
$('#profile').click(function() {
$('#main_area').html('<table border=0 width=100%><tr><td><h1>Profile</h1></td><td>&nbsp;</td><td valign=top><font color=gray><span title="Visible to all users">Public</span></font></td><td>&nbsp;</td><td valign=top><u id="" class="link" title="Add new entries">Add new entries</u></td><td align=right valign=top><u class="link" title="See how others see my profile">See how others see my profile</u></td></tr></table><table><tr><td valign=top width=48%>Profile ID: "ID" <font color=gray><span title="Only you can see this">Private</span></font><br><br>Profile address: <br><br>"Profile address" https://site_address/ID <font color=gray><span title="Only you can see this">Private</span></font> <br><br>Вася Пупкин <font color=gray><span title="Visible to all users">Public</span></font><br><br>E-Mail: <font color=gray><span title="Visible to all users">Public</span></font><br><br>vasya.pupkin@pupkin.com <u class="link" id="">Delete</u><br><br>Telefon: <font color=gray>Visible only to friends</font><br><br>+ 49 175 4523 6543 <u class="link" id="">Delete</u><br><br>Date of birth: <font color=gray>Visible to all</font><br><br>15 апреля 1990 <u class="link" id="" title="Delete this entry">Delete</u><br><br><a name="settings"></a><h2>Settings</h2>Who can add me:<br><br><input type="radio" id="contacted_by_everyone" value="everyone" name="who_can_add_me">Everyone<br><input type="radio" id="contacted_by_only_authorised" value="only_authorised" name="who_can_add_me">Only authorised people<br><input type="radio" id="contacted_by_no_one" value="no_one" name="who_can_add_me">No one<br><br>    Who can contact (message) me:<br><br><input type="radio" id="contacted_by_everyone" value="everyone" name="who_can_contact_me">Everyone<br><input type="radio" id="contacted_by_only_authorised" value="only_authorised" name="who_can_contact_me">Only authorised people<br><input type="radio" id="contacted_by_no_one" value="no_one" name="who_can_contact_me">No one<br><br>     <a name="general_contact_settings"></a>I want to be informed: <br><br><input type="checkbox"> About company news<br> <input type="checkbox"> About cool and new features<h2>General contact settings</h2>How frequently to contact this contact:<br><br><input type="checkbox" id="notification_weekly" value="weekly">weekly<br><input type="checkbox" id="notification_monthly" value="monthly">monthly<br><input type="checkbox" id="notification_quarterly" value="quarterly">quarterly<br><input type="checkbox" id="notification_halfyearly" value="halfyearly">half-yearly<br><input type="checkbox" id="notification_yearly" value="yearly">yearly<br><br>How to be notified:<br><br><input type="checkbox" id="notification_by_email" value="email">per e-mail<br><input type="checkbox" id="notification_by_sms" value="sms">per sms<br><input type="checkbox" id="notification_onsite" value="onsite">on-site notifications</td><td width=4%>&nbsp;</td><td valign=top width=48%>Notes: <font color=gray><span title="Visible to nobody">Private</span></font><br><br>Text of the note(s)<br><br></td></tr></table>');
});
});


$(function(){
$('#settings').click(function() {
$('#main_area').html('<table border=0 width=100%><tr><td><h1>Profile</h1></td><td>&nbsp;</td><td valign=top><font color=gray><span title="Visible to all users">Public</span></font></td><td>&nbsp;</td><td valign=top><u id="" class="link" title="Add new entries">Add new entries</u></td><td align=right valign=top><u class="link" title="See how others see my profile">See how others see my profile</u></td></tr></table><table><tr><td valign=top width=48%>Profile ID: "ID" <font color=gray><span title="Only you can see this">Private</span></font><br><br>Profile address: <br><br>"Profile address" https://site_address/ID <font color=gray><span title="Only you can see this">Private</span></font> <br><br>Вася Пупкин <font color=gray><span title="Visible to all users">Public</span></font><br><br>E-Mail: <font color=gray><span title="Visible to all users">Public</span></font><br><br>vasya.pupkin@pupkin.com <u class="link" id="">Delete</u><br><br>Telefon: <font color=gray>Visible only to friends</font><br><br>+ 49 175 4523 6543 <u class="link" id="">Delete</u><br><br>Date of birth: <font color=gray>Visible to all</font><br><br>15 апреля 1990 <u class="link" id="" title="Delete this entry">Delete</u><br><br><a name="settings"></a><h2>Settings</h2>Who can add me:<br><br><input type="radio" id="contacted_by_everyone" value="everyone" name="who_can_add_me">Everyone<br><input type="radio" id="contacted_by_only_authorised" value="only_authorised" name="who_can_add_me">Only authorised people<br><input type="radio" id="contacted_by_no_one" value="no_one" name="who_can_add_me">No one<br><br>    Who can contact (message) me:<br><br><input type="radio" id="contacted_by_everyone" value="everyone" name="who_can_contact_me">Everyone<br><input type="radio" id="contacted_by_only_authorised" value="only_authorised" name="who_can_contact_me">Only authorised people<br><input type="radio" id="contacted_by_no_one" value="no_one" name="who_can_contact_me">No one<br><br>     <a name="general_contact_settings"></a>I want to be informed: <br><br><input type="checkbox"> About company news<br> <input type="checkbox"> About cool and new features<h2>General contact settings</h2>How frequently to contact this contact:<br><br><input type="checkbox" id="notification_weekly" value="weekly">weekly<br><input type="checkbox" id="notification_monthly" value="monthly">monthly<br><input type="checkbox" id="notification_quarterly" value="quarterly">quarterly<br><input type="checkbox" id="notification_halfyearly" value="halfyearly">half-yearly<br><input type="checkbox" id="notification_yearly" value="yearly">yearly<br><br>How to be notified:<br><br><input type="checkbox" id="notification_by_email" value="email">per e-mail<br><input type="checkbox" id="notification_by_sms" value="sms">per sms<br><input type="checkbox" id="notification_onsite" value="onsite">on-site notifications</td><td width=4%>&nbsp;</td><td valign=top width=48%>Notes: <font color=gray><span title="Visible to nobody">Private</span></font><br><br>Text of the note(s)<br><br></td></tr></table>');
});
});

</script>

<!-- Конец набора функций для верхнего меню -->

<!--  -->

<script>

$('#area_contact_settings_particular_contact').hide();

$(function(){
$('#contact_settings_particular_contact').click (function(){
$('#area_contact_settings_particular_contact').toggle();
});
});


$(function(){
$('#other_messengers').hide();
});

var check_option = $('#invitation_select').val();

if (check_option==="other"){

$(function(){
$('#other').click (function(){
$('#other_messengers').show();
});
});

}
else{
$(function(){
$('#other_messengers').hide();
});
}


$(function(){
$('#register').click(function() {
$('#main_area').html('<table width=100% border=0><tr><td>E-mail:</td><td><input type="hidden" id="web_id"><input id="email" placeholder="Your e-mail, please"></td><td colspan=2></td></tr><tr><td>Password:</td> <td><input id="password" type="password"></td><td>Repeat password, please:</td><td><input id="password_repeat" type="password"></td><tr><td colspan=4><input id="" type="checkbox"> Please, check the box that you have read, understood and agree with all our terms | <a href="agbs.php" id="" name="" title="">Terms</a></td></tr><tr><td colspan=4> Please, check the box(es) if you want to be informed about our news <input id="" type="checkbox" title="Yes, please send me your cool news"> and cool feature updates<input id="" type="checkbox" title="Yes, please inform me about your cool features and updates"></td></tr><tr><td colspan=3></td><td valign=bottom align="right"><button id="send">Send</button></td></tr></table>');
});
});


$(function(){
$('#login_menu').click(function() {
$('#main_area').html('<table width=100% border=0><tr><td>E-mail:</td><td><input id="email" placeholder="Your e-mail, please"></td><td>Password:</td><td><input id="password" type="password"></td></tr><tr><td colspan=2><a href="forgot_password.php" id="forgot_password" title="Forgot password?">Forgot password?</a></td><td colspan=2 align="right"><button id="login">Login</button></td></tr></table>');
});
});



/* эти две функции ниже не работают 

$(function(){
$('#forgot_password').click(function() {
$('#main_area').html('<table width=100% border=0><tr><td>E-mail:</td><td><input id="email" placeholder="Your e-mail, please"></td><td align="right"><button id="send">Send</button></td></tr></table>');
});
});

$(function(){
$('#login').click(function() {
$('#main_area').html('Работает');
});
});

*/

</script>

<!--  -->

<?php include("footer"); ?>

<p>&nbsp;</p>
</body>
</html>
