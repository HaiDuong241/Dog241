<? php
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
echo '<html>';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
echo '<link rel="shortcut icon" href="http://imgur.com/CILKGax.png" >';
echo '<title>CHƯƠNG TRÌNH HỎI ĐÁP SỐ ĐẶC BIỆT</title>';
echo '<link rel="stylesheet" href="css3/popup.css">';
echo '<link rel="stylesheet" href="css3/styles.css">';
echo '<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro&subset=latin,vietnamese' rel='stylesheet' type='text/css'>';
echo '<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>';
echo '<script type="text/javascript" src="jss/jquery.popup.js"></script>';
echo '<script src="jss/popup.js" type="text/javascript"></script>';
echo '<script src="jss/jquery-1.js" type="text/javascript"></script>';
echo '<script type="text/javascript" src="jss/jquery.js"></script>';
echo '';
echo '<script type="text/javascript">';
echo '';
echo '$(document).ready(function () {';
echo '';
echo '';
echo '$('a.btn-ok, #msb-nt').click(function () {';
echo '$('#dialog-overlay, #dialog-box').hide();';
echo 'return false;';
echo '});';
echo '';
echo '';
echo '$(window).resize(function () {';
echo '';
echo '';
echo 'if (!$('#dialog-box').is(':hidden')) popup();';
echo '});';
echo '';
echo '';
echo '});';
echo '';
echo 'function popup(message) {';
echo '';
echo 'var maskHeight = $(document).height();';
echo 'var maskWidth = $(window).width();';
echo '';
echo 'var dialogTop =  (maskHeight/3) - ($('#dialog-box').height());';
echo 'var dialogLeft = (maskWidth/2) - ($('#dialog-box').width()/2);';
echo '$('#dialog-overlay').css({height:maskHeight, width:maskWidth}).show();';
echo '$('#dialog-box').css({top:dialogTop, left:dialogLeft}).show();';
echo '';
echo '';
echo '$('#dialog-message').html(message);';
echo '';
echo '}';
echo '';
echo 'window.onbeforeunload = function (event) {';
echo 'var message = 'KHÔNG ĐƯỢC TẮT CÁI NÀY ĐI, TẮT ĐỒNG NGHĨA LÀ CHỊU LÀM BẠN GÁI CỦA TAO ĐÓ! ♥ =)) CÓ CHẮC TẮT KHÔNG :>> GAU';';
echo 'if (typeof event == 'undefined') {';
echo 'event = window.event;';
echo '}';
echo 'if (event) {';
echo 'event.returnValue = message;';
echo '}';
echo 'return message;';
echo '}';
echo '</script>';
echo '';
echo '<script language="javascript">';
echo 'var kt=false';
echo 'function move()';
echo '{';
echo 'var x = Math.random()*500';
echo 'var y = Math.random()*500';
echo 'var left=x+'px'';
echo 'var top=y+'px'';
echo 'document.getElementById('lbNo').style.left=left';
echo 'document.getElementById('lbNo').style.top=top';
echo '}';
echo 'function dongy()';
echo '{';
echo 'if(kt==false)';
echo '{';
echo '';
echo 'kt=true';
echo '}';
echo 'else';
echo '{';
echo '}';
echo '}';
echo '</script>';
echo '<script src="jss/pace.min.js"></script>';
echo '<link href="css3/dataurl.css" rel="stylesheet" />';
echo '';
echo '</head>';
echo '';
echo '<!-- ________________________________________ SỬA TRANG ĐẦU NGAY ĐÂY (1)______________________________________________________-->';
echo '';
echo '<body onload="popup('<p>Tao hỏi cái này, mày phải trả lời thật lòng đó nghe chưa. Nhớ suy nghĩ kỹ!! </p></br>'); on()" onunload="s()">';
echo '<div id="bg"></div>';
echo '<div id="myModal" class="reveal-modal large">';
echo '<div id="traloi">';
echo '<!-- ___________________________________SỬA TRANG THỨ 3 NGAY ĐÂY (3)_______________________________________________-->';
echo '<h1><center>Gaauuuuu WHY?? <img src="http://vozforums.com/images/smilies/Off/angry.gif"/></center></h1></br>';
echo '<p>TẠI SAO MẦY LẠI YÊU TAO ? <img src="http://vozforums.com/images/smilies/Off/nosebleed.gif"/>  Nhập câu trả lời xuống bên dưới và bấm GỬI ĐI</br></br></p>';
echo '<form id="f" name="f">';
echo '<input id="form" name="txt" type="text" />';
echo '';
echo '<div>';
echo '<input id="gui" onclick="Yeu();" type="button" value="Gửi đi" />';
echo '</div>';
echo '</form>';
echo '</div>';
echo '';
echo '<div style="clear: both;"></div>';
echo '';
echo '<div id="divResult" style="text-align: center"></div>';
echo '';
echo '<div id="divResult2"></div>';
echo '';
echo '<div id="divResult3"></div>';
echo '<a class="close-reveal-modal">&#215;</a>';
echo '</div>';
echo '<script language="javascript">';
echo '$(document).ready(function() {';
echo '$('#msb-nt').click(function() {';
echo '$('.music').slideToggle("fast");';
echo '$('#bg').css('display','none');';
echo '});';
echo '});';
echo '</script>';
echo '<div id="dialog-overlay"></div>';
echo '<div id="dialog-box">';
echo '<div class="dialog-content">';
echo '<div id="dialog-message">';
echo '</div>';
echo '<div id="msb-nt">';
echo '<a href="#">OK :D</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="msg">';
echo '<!-- ___________________________________________________SỬA TRANG THỨ 2 NGAY ĐÂY (2)________________________________________-->';
echo '<h1> <?php if($_GET['mày']==null) echo 'mày'; else echo $_GET['em']; ?> <b>CÓ YÊU TAO KHÔNG ?</b></h1>';
echo '';
echo '<h2><?php if($_GET['mày']==null) echo 'mày'; else echo $_GET['em']; ?> MÀY MÀ TẮT CÁI NÀY ĐỒNG NGHĨA MẦY SẼ LÀM BẠN GÁI CỦA TAO.SUY NGHĨ ĐI !</br>';
echo 'CÓ THÍCH TAO KHÔNG ? TRẢ LỜI NHANH MÀY! ♥ =))</h2>';
echo '';
echo '';
echo '</div>';
echo '';
echo '<center>';
echo '<div id="co">';
echo '<a href="#" data-reveal-id="myModal">DẠ CÓ! <?php if($_GET['mày']==null) echo 'mày'; else echo $_GET['em']; ?> TAO YÊU</a>';
echo '</div>';
echo '';
echo '<div id="lbNo" style="position:absolute; left: 700px; top: 300px;">';
echo '<input type="button" value="MẦY MƠ À" style="cursor:pointer;" onMouseMove="move()" >';
echo '</div>';
echo '<div> <img src="http://imgur.com/i1LFl8j.png  "></div>';
echo '</center>';
echo '';
echo '<div class="music" style="display: none;">';
echo '<object width="1" height="1">  <param name="movie" value="http://www.nhaccuatui.com/m/UoqC0m8Rofjb" />';
echo '<param name="quality" value="high" />  <param name="wmode" value="transparent" />  <param name="allowscriptaccess" value="always" />';
echo '<param name="allowfullscreen" value="true"/> <param name="flashvars" value="autostart=true" />';
echo '<!-- ________________________________________THAY ĐỔI NHẠC Ở LINK BÊN DƯỚI_____________________________________-->';
echo '<embed src="http://www.nhaccuatui.com/m/G2Fil0oSQeHm" flashvars="target=blank&autostart=true" allowscriptaccess="always" allowfullscreen="true" quality="high" wmode="transparent" type="application/x-shockwave-flash" width="1" height="1"></embed></object>';
echo '</div>';
echo '<script type="text/javascript">';
echo '$(document).ready(function(){';
echo '$(document).bind("contextmenu",function(e){';
echo 'return false;';
echo '});';
echo '});';
echo '</script>';
echo '<style>';
echo '';
echo '</style>';
echo '</body>';
echo '</html>';
?>