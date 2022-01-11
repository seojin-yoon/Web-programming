<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>회원가입 페이지</title>
		<script>
			function check_input()
			{
				if(!document.member_form.id.value) { //id값이 null이면
					alert("아이디를 입력하세요!");
					document.member_form.id.focus();
					return;
				}
				if(!document.member_form.pass.value) { //pass값이 null이면
					alert("비밀번호를 입력하세요!");
					document.member_form.pass.focus();
					return;
				}
				if(!document.member_form.pass_confirm.value) {
					alert("비밀번호 확인을 입력하세요!");
					document.member_form.pass_confirm.focus();
					return;
				}
				if(!document.member_form.name.value) {
					alert("이름을 입력하세요!");
					document.member_form.name.focus();
					return;
				}
				
				if(document.member_form.pass.value != document.member_form.pass_confirm.value) {
					alert("비밀번호가 일치하지 않습니다.\n 비밀번호를 다시 확인해주세요!");
					document.member_form.pass.focus();
					document.member_form.pass.select();
					return;
				}
				
				document.member_form.submit();
			}
			
			function reset_form(){
				document.member_form.id.value = "";
				document.member_form.pass.value = "";
				document.member_form.pass_confirm.value = "";
				document.member_form.name.value = "";
				document.member_form.id.focus();
				return;
			}
		</script>
			
	</head>
	<body>
		<form name="member_form" method="post" action="member_insert.php">
			<h2>회원 가입</h2>
				<div class="form id">
					<div class="col1">아이디</div>
					<div class="col2">
						<input type="text" name="id">
					</div>
				</div>
				<div class="clear"></div>
				
				<div class="form">
					<div class="col1">비밀번호</div>
					<div class="col2">
						<input type="password" name="pass">
					</div>
					
				</div>
				<div class="clear"></div>
				
				<div class="form">
					<div class="col1">비밀번호 확인</div>
					<div class="col2">
						<input type="password" name="pass_confirm">
					</div>
				</div>
				<div class="clear"></div>
				
				<div class="form">
					<div class="col1">이름</div>
					<div class="col2">
						<input type="text" name="id">
					</div>
					
				</div>
				<div class="clear"></div>
				<div class="bottom_line"> </div>
				<div class="buttons">
					<img style="cursor:pointer" src="./img/button_save.gif" onclick="check_input()">&nbsp;
					<img id="reset_button" style="cursor:pointer" src="./img/button_reset.gif" onclick="reset_form()">
				</div>
		</form>
	</body>



</html>
