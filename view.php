<?php
        $connect = mysqli_connect('localhost', 'root', '123456', 'test');
        $number = $_GET['number'];
        $query = "select title, content, date, hit, id from board where number =$number";
        $result = $connect->query($query);
        $rows = mysqli_fetch_assoc($result);
?>
		<style>
		
		.view_table {
		border: 1px solid #444444;
		margin-top: 30px;
		}
		.view_title {
		height: 30px;
		text-align: center;
		background-color: #cccccc;
		color: white;
		width: 1000px;
		}
		.view_id {
		text-align: center;
		background-color: #EEEEEE;
		width: 30px;
		}
		.view_id2 {
		background-color: white;
		width: 60px;
		}
		.view_hit {
		background-color: #EEEEEE;
		width: 30px;
		text-align: center;
		}
		.view_hit2 {
		background-color: white;
		width: 60px;
		}
		.view_content {
		padding-top: 20px;
		border-top: 1px solid #444444;
		height: 500px;
		}
		.view_btn {
		width: 700px;
		height: 200px;
		text-align: center;
		margin: auto;
		margin-top: 50px;
		}
		.view_btn1 {
		height: 50px;
		width: 100px;
		font-size: 20px;
		text-align: center;
		background-color: white;
		border: 2px solid black;
		border-radius: 10px;
		}
</style>

        <table class="view_table" align=center>
        <tr>
                <td colspan="4" class="view_title"><?php echo $rows['title']?></td>
        </tr>
        <tr>
                <td class="view_id">작성자</td>
                <td class="view_id2"><?php echo $rows['id']?></td>
                <td class="view_hit">추천수</td>
                <td class="view_hit2"><?php echo $rows['hit']?></td>
        </tr>
 
 
        <tr>
                <td colspan="4" class="view_content" valign="top">
                <?php echo $rows['content']?></td>
        </tr>
        </table>
 
 
        <div class="view_btn">
                <button class="view_btn1" onclick="location.href='./index.php'">목록으로</button>
				<button class="view_btn1" onclick="location.href='./hit.php?number=<?=$number?>'">추천</button>
                <button class="view_btn1" onclick="location.href='./delete.php?number=<?=$number?>'">삭제</button>
        </div>

