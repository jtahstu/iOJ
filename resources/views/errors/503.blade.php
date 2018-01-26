
<html>
	<head>
		
        <meta charset="utf-8" />
		<style>
            /**
             * Maybe you can get pic url from https://www.dujin.org/sys/bing/1920.php . This is the fastest way . 
             * But I was obtained from my own server's api .
             * Start the get request you can get json data ， URL is http://cdn.jtahstu.com/iWallPaper
             * Get it , gays!
             *                               - by jtahstu at 2017-03-03 00:11 on ShangHai China
             */
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
				background-image: url('<?php echo json_decode(file_get_contents('http://cdn.jtahstu.com/iWallPaper/i.php'))->pic_url ?>');
        	    background-repeat: repeat-y;
        	    background-position: center;
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
			    color: #ff6d00;
			    /*color: #000000;*/
				font-size: 72px;
				margin-bottom: 40px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">
				    相聚有时，后会无期！
				</div>
				<br>
				<span>by jtahstu on Shanghai at 2017/7/21</span>
			</div>
		</div>
	</body>
</html>