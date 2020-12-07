
<html>
<head>
        <meta charset = 'utf-8'>
</head>
<style>
        table{
                border-top: 5px solid #000000;
                border-collapse: collapse;
        }
        tr{
                border-bottom: 2px solid #444444;
                padding: 10px;
        }
        td{
				border-right: 1px solid #444444;
                border-bottom: 1px solid #efefef;
                padding: 10px;
        }
        .text{
                text-align:center;
                padding-top:20px;
                color:#000000
        }
</style>
<body>
<?php
                $connect = mysqli_connect('localhost', 'root', '123456', 'test') or die ("connect fail");
                $query ="select * from board order by number desc";
                $result = $connect->query($query);
        ?>
        <h2 align=center>자유 게시판</h2>
        <table align = center>
        <thead align = "center">
        <tr>
        <td width = "70" align="center">번호</td>
        <td width = "400" align = "center">제목</td>
        <td width = "150" align = "center">작성자</td>
        <td width = "250" align = "center">날짜</td>
        <td width = "70" align = "center">추천수</td>
        </tr>
        </thead>
 
        <tbody>
        <?php
                while($rows = mysqli_fetch_assoc($result)){ 
        ?> 
				<tr>	
                <td width = "50" align = "center"><?php 		      echo $rows echo $rows['number']?></td>
                <td width = "500" align = "center">
                <a href = "view.php?number=<?php echo $rows['number']?>">
                <?php echo $rows['title']?></td>
                  <td width = "100" align = "center"><?php echo $rows['id']?></td>
                <td width = "200" align = "center"><?php echo $rows['date']?></td>
                <td width = "50" align = "center"><?php echo $rows['hit']?></td>
                </tr>
        <?php
                $rows--;
                }
        ?>
        </tbody>
        </table>

		
	<div class="text">

    <input type="button" value="글쓰기" onclick="location.href='./write.php'"/><br/>

	</div>

 
</body>
</html>
